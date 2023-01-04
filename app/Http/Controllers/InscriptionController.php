<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function connexion()
    {
        return view('login');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
       $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

       ]) ;
        $user = new Client();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $res = $user->save();
        if($res){
            return back()->with('status','Users Added Successfully');
        }else{
            return back()->with('fail','Users Added Successfully');
        }
    }
}
