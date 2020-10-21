<?php

namespace App\Http\Controllers;

use App\binhluan;
use App\chitietphimdaodien;
use App\chitietphimdienvien;
use App\chitietphimloaiphim;
use App\daodien;
use App\dienvien;
use App\hinhanh;
use App\loaiphim;
use App\ngonngu;
use App\phim;
use App\quocgia;
use App\server;
use App\silde;
use App\tapphim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Nullable;

class xulyphim extends Controller
{
    //
    public  function quanlyphim(){

        $danhsachphim = phim::all();
        $danhsachquocgia = quocgia::all();
        $chitietphim = chitietphimloaiphim::all();
        $danhsachtheloai=loaiphim::all();
            $danhsachdienvien=dienvien::all()->take(35)->sortByDesc('id');
                $danhsachdaodien=daodien::all();
        $chitietphimdienvien = chitietphimdienvien::all();
        $chitietphimdaodien = chitietphimdaodien::all();
        return view("admin_template.admin_phim",["danhsachphim"=>$danhsachphim,"danhsachquocgia"=>$danhsachquocgia,"error"=>"","danhsachchitiet"=>$chitietphim,"danhsachtheloai"=>$danhsachtheloai,"danhsachdienvien"=>$danhsachdienvien,"danhsachdaodien"=>$danhsachdaodien,'danhsachchitietdienvien'=>$chitietphimdienvien,'danhsachchitietdaodien'=>$chitietphimdaodien]);
    }
    public function updatephim(Request $request){
        $error="";
        if( $request->input('tenphim')!=null){
            $themphim = new phim();
            $themphim->tenphim = $request->tenphim;
            $themphim->quocgia=$request->quocgia;
            $themphim->ngaythem =$request->ngaythem;
            $themphim->trailer=$request->trailer;
            $themphim->danhgia=$request->danhgia;
            $themphim->binhluan= $request->binhluan;
            if($request->hinhanh!=""){
            $path =$request->hinhanh->store('images');
            request()->hinhanh->move(public_path('images'),$path);
            $themphim->hinhanh = $path;
            }
            $themphim->luotxem= 0;
            $themphim->link_cmt = $request->linkcmtfacebook;
            $themphim->save();





            $idphim=phim::all()->where('tenphim',$request->tenphim)->where('trailer',$request->trailer);
            $idtemp=0;
            foreach ($idphim as $temp){
                  $idtemp= $temp->id;


            }

            foreach ($request->theloai as $temp){
                $themchitietphim = new chitietphimloaiphim();
                $themchitietphim->id_phim=$idtemp;
                $themchitietphim->loaiphim=$temp;
                $themchitietphim->save();
            }
            foreach ($request->daodien as $temp){
                $themchitietphim = new chitietphimdaodien();
                $themchitietphim->id_phim=$idtemp;
                $themchitietphim->daodien=$temp;
                $themchitietphim->save();
            }

            foreach ($request->dienvien as $temp){
                $themchitietphim = new chitietphimdienvien();
                $themchitietphim->id_phim=$idtemp;
                $themchitietphim->dienvien=$temp;
                $themchitietphim->save();
            }



            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new phim();
            $xoaloaiphim = DB::table('phim')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){



            $updatephim = new phim();
            
           
            if($request->hinhanhupdate!=""){
            $path = $request->hinhanhupdate->store('images');
           request()->hinhanhupdate->move(public_path('images'),$path);
            $updatephim = DB::table('phim')->where('id', $request->input('chinhsua'))->update(['tenphim' => $request->tenphimupdate,"hinhanh"=>$path,"quocgia"=>$request->quocgiaupdate,"ngaythem"=>$request->ngaythemupdate,"trailer"=>$request->trailerupdate,"danhgia"=>$request->danhgiaupdate,"binhluan"=>$request->binhluanupdate,"link_cmt"=>$request->linkcmtfacebook]);

            }else{
                $updatephim = DB::table('phim')->where('id', $request->input('chinhsua'))->update(['tenphim' => $request->tenphimupdate,"quocgia"=>$request->quocgiaupdate,"ngaythem"=>$request->ngaythemupdate,"trailer"=>$request->trailerupdate,"danhgia"=>$request->danhgiaupdate,"binhluan"=>$request->binhluanupdate,"link_cmt"=>$request->linkcmtfacebook]);
            }
        }

        $danhsachphim = phim::all();
        $danhsachquocgia = quocgia::all();
        $chitietphim = chitietphimloaiphim::all();
        $chitietphimdienvien = chitietphimdienvien::all();
        $chitietphimdaodien = chitietphimdaodien::all();
        $danhsachtheloai=loaiphim::all();
        $danhsachdienvien=dienvien::all()->take(35)->sortByDesc('id');
        $danhsachdaodien=daodien::all();
        return view("admin_template.admin_phim",["danhsachphim"=>$danhsachphim,"danhsachquocgia"=>$danhsachquocgia,"error"=>$error,"danhsachchitiet"=>$chitietphim,"danhsachtheloai"=>$danhsachtheloai,"danhsachdienvien"=>$danhsachdienvien,"danhsachdaodien"=>$danhsachdaodien,'danhsachchitietdienvien'=>$chitietphimdienvien,'danhsachchitietdaodien'=>$chitietphimdaodien]);
    }


    public function quanlytapphim(Request $request){


        $id_phim=  $request->get('idphim');
        $danhsachtapphim = tapphim::all()->where('id_phim','=',$id_phim);
        $danhsachserver = server::all()->where('id_phim','=',$id_phim);
        return view("admin_template.admin_tapphim",['danhsachtapphim'=>$danhsachtapphim,'error'=>'','danhsachserver'=>$danhsachserver,'idphim'=>$id_phim]);

    }

    public function updatetapphim(Request $request){
        $error="";
        $id_phim=  $request->get('idphim');
        if( $request->input('tapphim')!=null){
            echo "1";
            $themphim = new tapphim();
            $themphim->tapphim = $request->tapphim;

            $themphim->id_server=$request->server1;
            $themphim->linkphim =$request->link;
            $themphim->id_phim=$id_phim;
            $themphim->save();



            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new tapphim();
            $xoaloaiphim = DB::table('tapphim')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){



            $updatephim = new tapphim();
            $updatephim = DB::table('tapphim')->where('id', $request->input('chinhsua'))->update(['tapphim'=>$request->tapphimupdate,'id_server'=>$request->serverupdate,'linkphim'=>$request->linkupadte]);

        }





        $danhsachtapphim = tapphim::all()->where('id_phim','=',$id_phim);
        $danhsachserver = server::all()->where('id_phim','=',$id_phim);
        return view("admin_template.admin_tapphim",['danhsachtapphim'=>$danhsachtapphim,'error'=>'','danhsachserver'=>$danhsachserver,'idphim'=>$id_phim]);

    }
}
