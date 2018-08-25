<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = User::orderBy('created_at', 'DESC')->paginate($limit);
        return view('dashboard.user.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj =new User();
        $request->validate([
            'admin'=> 'required',
            'name' => 'required|max:50|min:4',
            'email' => 'required|max:50|min:10',
            'password' => 'required|numeric|min:0',
        ], [
            'name.required' => 'Please enter name user.',
            'name.min' => 'name too short, please enter at least 4 characters.',
            'name.max' => 'name too long, maximum 50 characters.',
            'name.unique' => 'name have been exist, try another name.',
            'email.required' => 'Please enter name user.',
            'email.min' => 'email too short, please enter at least 10 characters.',
            'email.max' => 'email too long, maximum 50 characters.',
            'email.unique' => 'email have been exist, try another name.',
            'pasword.required' => 'Please enter Password user.',
            'password.errorCharacter' => 'Please enter only numberic.',
        ]);
        $obj->name = $request->get('name');
        $obj->email = $request->get('email');
        $obj->password = Hash::make($request->get('password'));
        $obj->admin = $request->get('admin');
        $obj->save();
        return redirect('/dashboard/user');
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
        $obj = User::find($id);
        if ($obj == null) {
            return view('/404');
        }
        return view('dashboard.user.edit')->with('obj', $obj);
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
        $obj = User::find($id);
        $validate_unique = '';
        if($obj->name != $request->get('name')){
            $validate_unique = '|unique:users';
        }
        $request->validate([
            'name' => 'required|max:50|min:4' . $validate_unique,
            'email' => 'required|max:50|min:10',
            'password' => 'required|numeric|min:0',

        ], [
            'name.required' => 'Please enter name user.',
            'name.min' => 'name too short, please enter at least 4 characters.',
            'name.max' => 'name too long, maximum 50 characters.',
            'name.unique' => 'name have been exist, try another name.',
            'email.required' => 'Please enter name user.',
            'email.min' => 'email too short, please enter at least 10 characters.',
            'email.max' => 'email too long, maximum 50 characters.',
            'email.unique' => 'email have been exist, try another name.',
            'pasword.required' => 'Please enter Password user.',
            'password.errorCharacter' => 'Please enter only numberic.',
        ]);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = $request->get('name');
        $obj->email = $request->get('email');
        $obj->password = $request->get('password');
        $obj->admin = $request->get('admin');
        $obj->save();
        return redirect('/dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
