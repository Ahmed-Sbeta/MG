<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.contacts-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.add-member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->role = 'employee';
        $user->job = request('job');
        $user->phoneNumber = request('phoneNumber');
        //image
        $file = request()->file('image');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '', $name);
        $user->image = request()->file('image') ? request()->file('image')->storePubliclyAs('',$name) : null;

        $password = request('password');
        $passwordConfirmation = request('confirmPassword');
        if($password == $passwordConfirmation){
          $user->password =  Hash::make($password);
          $user->save();
        }else{
          //error
          return redirect()->back()->with('error','password not matched');
        }
        return redirect()->back()->with('success','User added successfuly');
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
