<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('phim');
});
Route::prefix('quanly')->group(function (){
    Route::get('/',function (){
        return redirect('quanly/quanlyphim');
    });
Route::get('quanlyloaiphim','admin@quanlyloaiphim');
Route::post('quanlyloaiphim','admin@updateloaiphim');
    Route::get('quanlyhinhanh','admin@quanlyhinhanh');
    Route::post('quanlyhinhanh','admin@updatehinhanh');
    Route::get('quanlybinhluan','admin@quanlybinhluan');
    Route::post('quanlybinhluan','admin@updatebinhluan');
    Route::get('quanlydaodien','admin@quanlydaodien');
    Route::post('quanlydaodien','admin@updatedaodien');
    Route::get('quanlydienvien','admin@quanlydienvien');
    Route::post('quanlydienvien','admin@updatedienvien');
    Route::get('quanlyquocgia','admin@quanlyquocgia');
    Route::post('quanlyquocgia','admin@updatequocgia');
    Route::get('quanlyngonngu','admin@quanlyngonngu');
    Route::post('quanlyngonngu','admin@updatengonngu');
    Route::get('quanlyserver','admin@quanlyserver');
    Route::post('quanlyserver','admin@updateserver');
    Route::get('quanlysilde','admin@quanlysilde');
    Route::post('quanlysilde','admin@updatesilde');
    Route::get('quanlyphim','xulyphim@quanlyphim');
    Route::post('quanlyphim','xulyphim@updatephim');
 Route::get('quanlytapphim','xulyphim@quanlytapphim');
    Route::post('quanlytapphim','xulyphim@updatetapphim');
    Route::get('dangnhap',function (){
        return view('admin_template.admin_dangnhap');
    });
    Route::post('dangnhap','admin@xulydangnhap');
    Route::get('dangxuat',function (){

        \Illuminate\Support\Facades\Auth::logout();
        return redirect('quanly/dangnhap');
    });
});
Route::prefix('phim')->group(function () {
    Route::get('/', "xemphim@trangchu");
    Route::get('/{idphim1}', "xemphim@phim")->name('phim');
    Route::get('/theloai/{idtheloai1}','xemphim@timtheloai')->name('theloai');
    Route::get('/quocgia/{idquocgia1}','xemphim@quocgia')->name('quocgia');
});

Route::get('search','xemphim@timkiem')->name('search');
    Route::get('xemphim',"xemphim@iframephim");

Route::get('danhgiaphim',"xemphim@danhgiaphim");


