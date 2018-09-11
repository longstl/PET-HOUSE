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
        $email = Input::get('mail');
        $obj = BookSpa::where('email',$email)->first();
        if ($obj == null) {
            return view('error.404');
        }
        if (($obj->verifyCode) != $id){
            return view('error.400');
        }
        $obj->status = 1;
        $obj->save();
        return view('mail.verifyBookSpa');

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