<?php

namespace App\Http\Controllers;

use App\binhluan;
use App\daodien;
use App\dienvien;
use App\hinhanh;
use App\loaiphim;
use App\ngonngu;
use App\phim;
use App\quocgia;
use App\server;
use App\silde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Nullable;

class admin extends Controller
{
    //
    public function quanlyloaiphim(){

        $loaiphim = new loaiphim();
        $loaiphim = DB::table('loaiphim')->get();
        $error="";


        return view('admin_template.admin_loaiphim',['danhsachloaiphim'=>$loaiphim,'error'=>$error]);

    }
    public function updateloaiphim(Request $request){



        $error="";
        if($request->input('tenloaiphim')!=null){
            $themloaiphim  = new loaiphim();
            $themloaiphim->tenloai=$request->input('tenloaiphim');
            $themloaiphim->save();
            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new loaiphim();
            $xoaloaiphim = DB::table('loaiphim')->where('id',$request->input('idloaiphimcanxoa'))->delete();

        }

        if($request->input('chinhsua')!=null){
            $updatephim=new loaiphim();
            $updatephim = DB::table('loaiphim')->where('id',$request->input('chinhsua'))->update(['tenloai'=>$request->input('tenloaiphimupdate')]);

        }

        $loaiphim = new loaiphim();
        $loaiphim = DB::table('loaiphim')->get();
        return view('admin_template.admin_loaiphim',['danhsachloaiphim'=>$loaiphim,'error'=>$error]);
    }



    public function quanlyhinhanh(){

        $hinhanh = new hinhanh();
        $hinhanh = DB::table('hinhanh')->get();
        $error="";


        return view('admin_template.admin_hinhanh',['danhsachhinhanh'=>$hinhanh,'error'=>$error]);

    }
    public function updatehinhanh(Request $request){



        $error="";
        if($request->hasFile('linkanh')){

                $path = $request->linkanh->store('images');
            request()->linkanh->move(public_path('images'), $path);
                $themanh = new hinhanh();
                $themanh->hinhanh = $path;
                $themanh->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new hinhanh();
            $xoaloaiphim = DB::table('hinhanh')->where('id',$request->input('idloaiphimcanxoa'))->delete();

        }

        if($request->input('chinhsua')!=null){
            $path = $request->linkanh->store('images');
            request()->linkanh->move(public_path('images'), $path);
            $updatephim=new hinhanh();
            $updatephim = DB::table('hinhanh')->where('id',$request->input('chinhsua'))->update(['hinhanh'=>$path]);

        }

        $hinhanh = new hinhanh();
        $hinhanh = DB::table('hinhanh')->get();
        return view('admin_template.admin_hinhanh',['danhsachhinhanh'=>$hinhanh,'error'=>$error]);
    }






    public function quanlybinhluan(){

        $hinhanh = new binhluan();
        $hinhanh = DB::table('binhluan')->get();
        $error="";


        return view('admin_template.admin_binhluan',['danhsachbinhluan'=>$hinhanh,'error'=>$error]);

    }
    public function updatebinhluan(Request $request){



        $error="";
        if( $request->linkcmt!=null){


            $thembinhluan = new binhluan();
            $thembinhluan->link = $request->linkcmt;
            $thembinhluan->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new binhluan();
            $xoaloaiphim = DB::table('binhluan')->where('id',$request->input('idloaiphimcanxoa'))->delete();

        }

        if($request->input('chinhsua')!=null){
            $updatephim=new binhluan();
            $updatephim = DB::table('binhluan')->where('id',$request->input('chinhsua'))->update(['link'=>$request->linkcmtupdate]);

        }

        $hinhanh = new binhluan();
        $hinhanh = DB::table('binhluan')->get();
        return view('admin_template.admin_binhluan',['danhsachbinhluan'=>$hinhanh,'error'=>$error]);
    }






    public function quanlydaodien(){

        $daodien = new daodien();
        $daodien = DB::table('daodien')->get();
        $error="";


        return view('admin_template.admin_daodien',['danhsachdaodien'=>$daodien,'error'=>$error]);

    }
    public function updatedaodien(Request $request){



        $error="";
        if( $request->hasFile('anhdaodien')){
            $themdaodien = new daodien();
            $themdaodien->ten = $request->tendaodien;
            $path = $request->anhdaodien->store('images');
            request()->anhdaodien->move(public_path('images'), $path);

            $themdaodien->hinhanh = $path;
            $themdaodien->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new daodien();
            $xoaloaiphim = DB::table('daodien')->where('id',$request->input('idloaiphimcanxoa'))->get();

            foreach ($xoaloaiphim as $value){

                  Storage::delete($value->hinhanh);
            }


            $xoaloaiphim = DB::table('daodien')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){

            if($request->hasFile('anhdaodienupdate')) {
                $path = $request->anhdaodienupdate->store('images');
      request()->anhdaodienupdate->move(public_path('images'), $path);
                $updatephim = new daodien();
                $updatephim = DB::table('daodien')->where('id', $request->input('chinhsua'))->update(['ten' => $request->tendaodienupdate, 'hinhanh' => $path]);
            }
        }

        $hinhanh = new daodien();
        $hinhanh = DB::table('daodien')->get();
        return view('admin_template.admin_daodien',['danhsachdaodien'=>$hinhanh,'error'=>$error]);
    }




    public function quanlydienvien(){

        $daodien = new dienvien();
        $daodien = DB::table('dienvien')->get();
        $error="";


        return view('admin_template.admin_dienvien',['danhsachdienvien'=>$daodien,'error'=>$error]);

    }
    public function updatedienvien(Request $request){



        $error="";
        if( $request->hasFile('anhdienvien')){
            $themdienvien = new dienvien();
            $themdienvien->ten =$request->ten;
            $themdienvien->ngaysinh=$request->ngaysinh;
            $themdienvien->nghenghiep=$request->nghenghiep;
            $themdienvien->quocgia=$request->quocgia;
            $themdienvien->chieucao=$request->chieucao;
            $themdienvien->cannang=$request->cannang;
            $themdienvien->nhommau=$request->nhommau;
            $themdienvien->ngonngu=$request->ngonngu;
            $themdienvien->sotruong=$request->sotruong;
            $path = $request->anhdienvien->store('images');
            request()->anhdienvien->move(public_path('images'), $path);
            $themdienvien->hinhanh = $path;
            $themdienvien->save();
            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new dienvien();
            $xoaloaiphim = DB::table('dienvien')->where('id',$request->input('idloaiphimcanxoa'))->get();

            foreach ($xoaloaiphim as $value){

                Storage::delete($value->hinhanh);
            }


            $xoaloaiphim = DB::table('dienvien')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){

            if($request->hasFile('anhdienvienupdate')) {

                $updatephim = new dienvien();
                $path = $request->anhdienvienupdate->store('images');
                request()->anhdienvienupdate->move(public_path('images'), $path);
                $updatephim = DB::table('dienvien')->where('id', $request->input('chinhsua'))->update(['ten' => $request->tenupdate, 'hinhanh' => $path,'ngaysinh'=>$request->ngaysinhupdate,'nghenghiep'=>$request->nghenghiepupdate,'quocgia'=>$request->quocgiaupdate,'chieucao'=>$request->chieucaoupdate,'cannang'=>$request->cannangupdate,'nhommau'=>$request->nhommauupdate,'ngonngu'=>$request->ngonnguupdate,'sotruong'=>$request->sotruongupdate]);
            }else{
                $updatephim = new dienvien();
                $updatephim = DB::table('dienvien')->where('id', $request->input('chinhsua'))->update(['ten' => $request->tenupdate,'ngaysinh'=>$request->ngaysinhupdate,'nghenghiep'=>$request->nghenghiepupdate,'quocgia'=>$request->quocgiaupdate,'chieucao'=>$request->chieucaoupdate,'cannang'=>$request->cannangupdate,'nhommau'=>$request->nhommauupdate,'ngonngu'=>$request->ngonnguupdate,'sotruong'=>$request->sotruongupdate]);
            }
        }

        $dsdaodien = new daodien();
        $dsdaodien = DB::table('dienvien')->get();
        return view('admin_template.admin_dienvien',['danhsachdienvien'=>$dsdaodien,'error'=>$error]);
    }

    public function quanlyquocgia(){
        $quocgia = new quocgia();
        $error="";
        $quocgia =DB::table('quocgia')->get();
        return view("admin_template.admin_quocgia",["danhsachquocgia"=>$quocgia,'error'=>$error]);
    }
    public function updatequocgia(Request $request){
        $error="";
        if( $request->input('ten')!=null){
            $themquocgia = new quocgia();
            $themquocgia->tenquocgia = $request->ten;
            $themquocgia->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new quocgia();
            $xoaloaiphim = DB::table('quocgia')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){



                $updatephim = new quocgia();
                $updatephim = DB::table('quocgia')->where('id', $request->input('chinhsua'))->update(['tenquocgia' => $request->tenupdate ]);

        }
        $quocgia = new quocgia();
        $quocgia =DB::table('quocgia')->get();
        return view("admin_template.admin_quocgia",["danhsachquocgia"=>$quocgia,'error'=>$error]);

    }





    public function quanlyngonngu(){
        $ngonngu = new ngonngu();
        $error="";
        $ngonngu =DB::table('loaitieng')->get();
        return view("admin_template.admin_ngonngu",["danhsachngonngu"=>$ngonngu,'error'=>$error]);
    }
    public function updatengonngu(Request $request){
        $error="";
        if( $request->input('ten')!=null){
            $themngonngu = new ngonngu();
            $themngonngu->tenloai = $request->ten;
            $themngonngu->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new ngonngu();
            $xoaloaiphim = DB::table('loaitieng')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){



            $updatephim = new ngonngu();
            $updatephim = DB::table('loaitieng')->where('id', $request->input('chinhsua'))->update(['tenloai' => $request->tenupdate ]);

        }
        $ngonngnu = new ngonngu();
        $ngonngnu =DB::table('loaitieng')->get();
        return view("admin_template.admin_ngonngu",["danhsachngonngu"=>$ngonngnu,'error'=>$error]);

    }




    public function quanlyserver(){
        $ngonngu = new server();
        $error="";
        $ngonngu =DB::table('server')->get();
        $danhsachphim=phim::all();
        return view("admin_template.admin_server",["danhsachserver"=>$ngonngu,'error'=>$error,'danhsachphim'=>$danhsachphim]);
    }
    public function updateserver(Request $request){
        $error="";
        if( $request->input('server1')!=null){
            $themserver = new server();
            $themserver->tenserver = $request->server1;
            $themserver->link = $request->server2;
            $themserver->id_phim = $request->server3;
            $themserver->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new server();
            $xoaloaiphim = DB::table('server')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){



            $updatephim = new server();
            $updatephim = DB::table('server')->where('id', $request->input('chinhsua'))->update(['tenserver' => $request->server1update,"link"=>$request->server2update,"id_phim"=>$request->server3update ]);

        }
        $danhsachserver = new server();
        $danhsachserver =DB::table('server')->get();
        $danhsachphim=phim::all();
        return view("admin_template.admin_server",["danhsachserver"=>$danhsachserver,'error'=>$error,'danhsachphim'=>$danhsachphim]);

    }



    public function quanlysilde(){
        $ngonngu = new silde();
        $phim  = new phim();
        $error="";
        $ngonngu =silde::all();

        $phim =DB::table('phim')->get();
        return view("admin_template.admin_silde",["danhsachsilde"=>$ngonngu,"danhsachphim"=>$phim,'error'=>$error]);
    }
    public function updatesilde(Request $request){
        $error="";
        if( $request->input('phim')!=null){
            $themserver = new silde();
            $themserver->id_phim = $request->phim;
            $path =$request->hinhanh->store('images');
            request()->hinhanh->move(public_path('images'),$path);
            $themserver->hinhanh = $path;
            $themserver->save();

            $error="0";
        }else{
            $error="1";
        }

        if ($request->input('idloaiphimcanxoa')!=null){
            $xoaloaiphim = new silde();
            $xoaloaiphim = DB::table('silde')->where('id',$request->input('idloaiphimcanxoa'))->delete();


        }

        if($request->input('chinhsua')!=null){



            $updatephim = new silde();
            $path = $request->hinhanh->store('images');
            request()->hinhanh->move(public_path('images'),$path);
            $updatephim = DB::table('silde')->where('id', $request->input('chinhsua'))->update(['id_phim' => $request->phim,$path]);

        }


        $danhsachsilde = new silde();
        $danhsachsilde =DB::table('silde')->get();
        $danhsachphim = new phim();
        $danhsachphim =DB::table('phim')->get();
        return view("admin_template.admin_silde",["danhsachsilde"=>$danhsachsilde,"danhsachphim"=>$danhsachphim,'error'=>$error]);

    }
    public function xulydangnhap(Request $request){
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

        return redirect('quanly/quanlyphim');
    }else{

        return redirect('quanly/dangnhap');
    }
    }
}
