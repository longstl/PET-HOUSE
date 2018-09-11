<?php
/**
 * Created by PhpStorm.
 * User: Thuong
 * Date: 2018-08-24
 * Time: 02:00
 */

namespace App\Http\Controllers;

use App\BookSpa;
use Illuminate\Support\Facades\Input;

class VerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //http://127.0.0.1:8000/verify/153535972615b83baee9c158?mail=thuonghvd00564@fpt.edu.vn
        // lay email params trên url . o vd tren la thuonghvd00564@fpt.edu.vn
        $email = Input::get('mail');
        // đoạn này lấy ra 1 obj theo email trên url mình gửi lên.lấy phần tử đầu tiên của kq trả về.
        $obj = BookSpa::where('email',$email)->first();
        if ($obj == null) {
            return view('404');
        }
        // đoạn này lấy verifycode cua cái obj bên trên.
        // sau đó so sánh với code trên url mình gửi về email cho họ.
        // vì trong db có nhiều email trùng nhau nên verifycode trong db no ko khớp với code minh gui cho ho trong url
        // o vd này code la 153535972615b83baee9c158. ko co trong db luon nen o day no se trả ve view 400.lat tao cai trang 400 la dc
        //vay h em xoa hết đi chay lại xem nha.okey em nhận ra 1 điều em vùa tạo thêm contact r
        if (($obj->verifyCode) != $id){
            return view('400');
        }
        $obj->status = 1;
        $obj->save();
        return view('mail.confirmed');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendemail(){
        
    }
}