<?php

namespace App\Http\Controllers;

use App\BookSpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('petspa.spa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new BookSpa();
        $obj->partydate = $request->get('partydate');
        $obj->name = $request->get('name');
        $obj->email = $request->get('email');
        $obj->phone = $request->get('phone');
        $obj->message = $request->get('message');
        $verifyCode = time().uniqid(true);
        $obj->verifyCode = $verifyCode;
        $obj->save();

        Mail::send('mail.verify', ['code'=>$verifyCode,'mail'=>$request->get('email')],function ($message) use ($request) {
            $message->to($request->get('email'),$request->get('name'))
                ->subject('Verify');
        });
        return View('mail.verifyRequest');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
