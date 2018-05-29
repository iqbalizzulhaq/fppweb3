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
    	$request->validate([
		    'nama' => 'max:50',
		    'username' => 'max:16',
		    'password' => 'max:16',
		    'email' => 'max:50',
		    'alamat' => 'max:150'
		]);
    	if($request->password == $request->confpassword){
    		$member = new member;

    		$checke = member::where('email', '=', $request->email)->first();
    		$checku = member::where('username', '=', $request->username)->first();


    		if(!$checku and !$checke){
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
