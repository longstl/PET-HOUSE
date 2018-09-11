<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class VerifyContactController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        // lay spa trong db theo email.
        $email = Input::get('mail');

        $obj = Contact::where('email',$email)->first();
        if ($obj == null) {
            return view('404');
        }
        if (($obj->verifyCode) !== $id){
            return view('400');
        }
        $obj->status = 1;
        $obj->save();
        return view('mail.confirmed');
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
