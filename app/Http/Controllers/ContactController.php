<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
        //
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $obj = new Contact();
        $obj->firstName = $request->get('firstName');
        $obj->lastName = $request->get('lastName');
        $obj->email = $request->get('email');
        $obj->phone = $request->get('phone');
        $obj->message = $request->get('message');
        $verifyCode = time().uniqid(true);
        $obj->verifyCode = $verifyCode;
        $obj->save();

        Mail::send('mail.verifycontact', ['code'=>$verifyCode,'mail'=>$request->get('email')],function ($message) use ($request) {
            $message->to($request->get('email'),$request->get('lastName'))
                ->subject('Verifycontact');
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
