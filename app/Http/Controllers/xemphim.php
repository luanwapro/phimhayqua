<?php

namespace App\Http\Controllers;

use App\chitietphimdienvien;
use App\chitietphimloaiphim;
use App\danhgiaphim;
use App\loaiphim;
use App\phim;
use App\quocgia;
use App\server;
use App\silde;
use App\tapphim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class xemphim extends Controller
{
    //
    function __construct(){

        $danhsachquocgia = quocgia::all();
        $danhsachtheloai = loaiphim::all();
        $danhsach4phim = phim::all()->take(4);
        $hinhanh = silde::all()->sortByDesc->take(4);
        $anh1="";
        $anh2="";
        $anh3="";
        $anh4="";
        foreach ($hinhanh as $key=> $ha){

            if($key==0){
                $anh1=$ha->hinhanh;
            }
            if($key==1){
                $anh2=$ha->hinhanh;
            }
            if($key==2){
                $anh3=$ha->hinhanh;
            }
            if($key==3){
                $anh4=$ha->hinhanh;
            }
        }
         view()->share('danhsachtheloai',$danhsachtheloai);
         view()->share('danhsachquocgia',$danhsachquocgia);
         view()->share('danhsach4phim',$danhsach4phim);
        view()->share('anh1',$anh1);
        view()->share('anh2',$anh2);
        view()->share('anh3',$anh3);
        view()->share('anh4',$anh4);
    }
    public function trangchu(){
        $danhsachphimmoi = phim::all()->sortByDesc('id')->take(8);
        $danhsachphimdecu = phim::all()->where('danhgia','>=','4')->take(8);
        $danhsachtopphim = phim::all()->sortByDesc('luotxem')->take(8);
        $danhsachchitietloaiphim = chitietphimloaiphim::all();
        $danhsachchitietdienvien = chitietphimdienvien::all();
        $danhsachphimle = DB::table('phim as t1')->join('chitietphimloaiphim AS t2','t1.id','=','t2.id_phim')->join('loaiphim AS t3','t3.id','t2.loaiphim')->where('t3.tenloai','=','Phim Lẻ')->get();
        $danhsachphimchieurap = DB::table('phim as t1')->join('chitietphimloaiphim AS t2','t1.id','=','t2.id_phim')->join('loaiphim AS t3','t3.id','t2.loaiphim')->where('t3.tenloai','=','Phim Chiếu Rạp')->get();
        $danhsachphimhoathinh = DB::table('phim as t1')->join('chitietphimloaiphim AS t2','t1.id','=','t2.id_phim')->join('loaiphim AS t3','t3.id','t2.loaiphim')->where('t3.tenloai','=','Phim Hoạt Hình')->get();
        return view('xemphim.index',["danhsachphimmoi"=>$danhsachphimmoi,"danhsachphimdecu"=>$danhsachphimdecu,"danhsachtopphim"=>$danhsachtopphim,"danhsachphimle"=>$danhsachphimle,"danhsachphimchieurap"=>$danhsachphimchieurap,"danhsachphimhoathinh"=>$danhsachphimhoathinh,"danhsachchitietloaiphim"=>$danhsachchitietloaiphim,"danhsachchitietdienvien"=>$danhsachchitietdienvien]);
    }
    public function phim(Request $request,$idphim1){

        $mangtmp = explode('-',$idphim1);
        $idphim=-1;
        foreach ($mangtmp as $key=>$value){
            if($key==count($mangtmp)-1){
                $idphim=$value;
            }
        }

        $phim = DB::table("phim as t1")->join('tapphim as t2','t2.id_phim','=','t1.id')->where('t1.id','=',$idphim)->get();
        $tapphim = tapphim::all()->where('id_phim','=',$idphim);
        $groupserver = DB::table("tapphim as t1")->select('t1.id_server')->join('server as t2','t2.id','=','t1.id_server')->where('t1.id_phim','=',$idphim)->groupBy('t1.id_server')->get();
        $allserver = server::all();
        $loailink =0;
        $loaiphim=75;
       foreach ($phim as $key=> $value){
          $linkphim= $value->linkphim;

          if(strlen($linkphim)<=20 && $key==0){
              $loailink=1;
          }
       }
        $danhsachphimle = DB::table('phim as t1')->join('chitietphimloaiphim AS t2','t1.id','=','t2.id_phim')->join('loaiphim AS t3','t3.id','t2.loaiphim')->where('t3.tenloai','=','Phim Lẻ')->orderByDesc('luotxem')->get();
       $danhsachloaiphim = loaiphim::all()->where('id_phim','=',$idphim);
       foreach ($danhsachloaiphim as $key=>$value){

               $loaiphim=   $value->loaiphim;


       }

 $luotxem=0;
        $danhsachchitietloaiphim = chitietphimloaiphim::all();
        $danhsachchitietdienvien = chitietphimdienvien::all();
        $danhsachtopphim = phim::all()->sortByDesc('luotxem')->take(8);
       $danhsachphimcolienquan = DB::table('chitietphimloaiphim as t1')->join('loaiphim as t2','t2.id','=','t1.loaiphim')->where('t1.loaiphim','=',$loaiphim)->get();
        $demluotxem = DB::table('phim')->select('luotxem')->where('id','=',$idphim)->get();
        $countdanhgia =count(DB::table('danhgiaphim')->where('id_phim','=',$idphim)->get());
        foreach ($demluotxem as $key=>$value){

            $luotxem=   $value->luotxem;

        }
       $a= DB::table('phim')->where('id','=',$idphim)->update(['luotxem'=>$luotxem+1]);
        return view("xemphim.phim",['countdanhgia'=>$countdanhgia,'danhsachchitietdienvien'=>$danhsachchitietdienvien,'danhsachchitietloaiphim'=>$danhsachchitietloaiphim,'danhsachphimle'=>$danhsachphimle,'danhsachtopphim'=>$danhsachtopphim,"phim"=>$phim,'link'=>$loailink,'tapphim'=>$tapphim,'groupserver'=>$groupserver,'allserver'=>$allserver,'danhsachphimcolienquan'=>$danhsachphimcolienquan]);

    }
    public function iframephim(Request $request){

        $idphim = $request->get('tapphim');

        $phim = tapphim::all()->where('id','=',$idphim);
        $loailink =0;
        foreach ($phim as $value){
            $linkphim= $value->linkphim;
            if(strlen($linkphim)<=20){
                $loailink=1;
            }
        }


        return view('xemphim.iframe',["phim"=>$phim,"link"=>$loailink,"tap"=>$idphim]);
    }
    public function timtheloai(Request $request, $idtheloai1){
        $mangtmp = explode('-',$idtheloai1);
        $idtheloai=-1;
        foreach ($mangtmp as $key=>$value){
            if($key==count($mangtmp)-1){
                $idtheloai=$value;
            }
        }


        $tenloai1 = DB::table('loaiphim')->select('tenloai')->where('id','=',$idtheloai)->get();
        $tenloai="";
        foreach ($tenloai1 as $value ){
            $tenloai = $value->tenloai;
        }
       $danhsachphim = DB::table('phim as t1')->join('chitietphimloaiphim as t2','t2.id_phim','=','t1.id')->join('loaiphim as t3','t3.id','=','t2.loaiphim')->where('t3.id','=',$idtheloai)->paginate(30);
        $danhsachtopphim = DB::table('phim as t1')->join('chitietphimloaiphim as t2','t2.id_phim','=','t1.id')->join('loaiphim as t3','t3.id','=','t2.loaiphim')->where('t3.id','=',$idtheloai)->take(5)->orderByDesc('t1.luotxem')->get();
        return view('xemphim.theloai',['danhsachphim'=>$danhsachphim,'topphim'=>$danhsachtopphim,'tentheloai'=>$tenloai]);
    }
    public function timkiem(Request $request){

        $timkiem = $request->get('Q');
        $danhsachphim = DB::table('phim as t1')->select('t2.id_phim','t1.hinhanh','t1.danhgia','t1.ngaythem','t1.tenphim')->join('chitietphimloaiphim as t2','t2.id_phim','=','t1.id')->join('loaiphim as t3','t3.id','=','t2.loaiphim')->join('chitietphimdienvien as t4','t4.id_phim','=','t1.id')->join('dienvien as t5','t5.id','=','t4.dienvien')->where('t3.tenloai','like','%'.$timkiem.'%')->take(5)->groupBy('t2.id_phim','t1.hinhanh','t1.danhgia','t1.ngaythem','t1.tenphim')->orWhere('t5.ten','like','%'.$timkiem.'%')->orwhere('t1.tenphim','like','%'.$timkiem.'%')->paginate(20);
        $count = count($danhsachphim);
        return view('xemphim.danhsachphim',['danhsachphim'=>$danhsachphim,'count'=>$count]);
    }
    public function quocgia(Request $request,$idquocgia1){

        $mangtmp = explode('-',$idquocgia1);
        $idquocgia=-1;
        foreach ($mangtmp as $key=>$value){
            if($key==count($mangtmp)-1){
                $idquocgia=$value;
            }
        }
        $danhsachphim =  DB::table('phim')->where('quocgia','=',$idquocgia)->paginate(5);
        $danhsachquocgia= DB::table('quocgia')->get();
        $danhsachtenquocgia =array();
        $danhsachphimlienquan=phim::all();
        array_push($danhsachtenquocgia,$idquocgia);
        if(count(phim::all())==$idquocgia||$idquocgia==0) {
            $danhsachphimlienquan = DB::table('phim')->orwhere('quocgia', '=',$idquocgia+1)->orWhere('quocgia','=',$idquocgia-1)->partition(50);
            array_push($danhsachtenquocgia,$idquocgia+1);
            array_push($danhsachtenquocgia,$idquocgia-1);
            $danhsachquocgia= DB::table('quocgia')->orwhere('id','=',$idquocgia)->orWhere('id','=',$idquocgia+1)->orWhere('id','=',$idquocgia-1)->get();
        }else if ($idquocgia==0){
             $danhsachphimlienquan = DB::table('phim')->orwhere('quocgia', '=',$idquocgia+1)->orWhere('quocgia','=',$idquocgia+2)->orWhere('quocgia','=',$idquocgia+3)->partition(50);
            $danhsachquocgia= DB::table('quocgia')->where('id','=',$idquocgia)->orWhere('id','=',$idquocgia+1)->orWhere('id','=',$idquocgia+2)->orWhere('id','=',$idquocgia+3)->get();
            array_push($danhsachtenquocgia,$idquocgia+1);
            array_push($danhsachtenquocgia,$idquocgia+2);
            array_push($danhsachtenquocgia,$idquocgia+3);
        }else{
          $danhsachphimlienquan = DB::table('phim')->orwhere('quocgia', '=',$idquocgia-1)->orWhere('quocgia','=',$idquocgia-2)->orWhere('quocgia','=',$idquocgia-3)->paginate(50);
            $danhsachquocgia= DB::table('quocgia')->where('id','=',$idquocgia)->orWhere('id','=',$idquocgia-1)->orWhere('id','=',$idquocgia-2)->orWhere('id','=',$idquocgia-3)->get();
            array_push($danhsachtenquocgia,$idquocgia-1);
            array_push($danhsachtenquocgia,$idquocgia-2);
            array_push($danhsachtenquocgia,$idquocgia-3);
        }
        $danhsachchitietdienvien = chitietphimdienvien::all();
        $danhsachchitietloaiphim = chitietphimloaiphim::all();
        $danhsachtopphim =DB::table('phim')->where('quocgia','=',$idquocgia)->orderByDesc('luotxem')->paginate(20);
        $danhsachphimxemnhieunhat =DB::table('phim')->where('quocgia','=',$idquocgia)->where('danhgia','>=','4')->orderByDesc('danhgia')->get();

        return view('xemphim.quocgia',['phimxemnhieunhat'=>$danhsachphimxemnhieunhat,'danhsachtopphim'=>$danhsachtopphim,'danhsachchitietloaiphim'=>$danhsachchitietloaiphim,'danhsachchitietdienvien'=>$danhsachchitietdienvien,'danhsachphim'=>$danhsachphim,'danhsachphimcolienquan'=>$danhsachphimlienquan,'danhsachtenquocgia'=>$danhsachtenquocgia,'danhsachquocgia'=>$danhsachquocgia]);
    }

   public function danhgiaphim(Request $request){

        $idphim =$request->get('idphim');
        $danhgia =$request->get('danhgia');
        $ipnguoidung = $request-> getClientIp ();
        if(count(DB::table('danhgiaphim')->where('id_phim','=',$idphim)->where('ip','=',$ipnguoidung)->get())>0){

            DB::table('danhgiaphim')->where('ip','=',$ipnguoidung)->update(['danhgia'=>$danhgia]);
        }else{
            $danhgiaphim = new danhgiaphim();
            $danhgiaphim->ip=$ipnguoidung;
            $danhgiaphim->danhgia=$danhgia;
            $danhgiaphim->id_phim =$idphim;
            $danhgiaphim->save();
        }
       $count =count(DB::table('danhgiaphim')->where('id_phim','=',$idphim)->get());
       $sum =DB::table('danhgiaphim')->where('id_phim','=',$idphim)->sum('danhgia');
       $trungbinh=$sum/$count;
       DB::table('phim')->where('id','=',$idphim)->update(['danhgia'=>$trungbinh]);
    }

}
