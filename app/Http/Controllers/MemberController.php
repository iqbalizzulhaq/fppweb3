<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Member;

class MemberController extends Controller
{	

	public function index(){
		return view('index');
	}

    public function daftar(Request $request){
    	if($request->password == $request->confpassword){
    		$member = new member;

    		$checke = member::where('email', '=', $request->email)->get();
    		$checku = member::where('username', '=', $request->username)->get();

    		if($checku<="0" and $checke<="0"){
    		$member->nama=$request->nama;
    		$member->username=$request->username;
    		$member->alamat=$request->alamat;
    		$member->status="Pemesan";
    		$member->password=$request->password;
    		$member->email=$request->email;

    		$member->save();
    		return redirect('register')->with('alert', "Pendaftaran sukses!");
    		}
    		else{
    			return redirect('register')->with('alert', "Email atau username sudah terdaftar, gunakan email atau username yang lain");
    		}
    	}
    	else{
    		return redirect('register')->with('alert', "Password tidak sesuai");
    	}
    }
}
