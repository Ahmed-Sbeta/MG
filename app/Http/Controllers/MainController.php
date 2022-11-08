<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function index(){
      return view('dashboard-profile');
    }

    public function login(){
      return view('auth-login');
    }

    public function register(){
      return view('auth-register');
    }

    public function registration(){
      $user = new User;
      $user->name = request('name');
      $user->email = request('email');
      $user->role = "user";
      $user->image = "download.png";
      $password = request('password');
      $passwordConfirmation = request('confirmPassword');
      if($password == $passwordConfirmation){
        $user->password =  Hash::make($password);
        $user->save();
      }else{
        //error
        return redirect('/register')->with('error','somthing went wrong');
      }
      return redirect('/')->with('success','Company created successfuly , expect an email in the next 24 houres');

    }
}
