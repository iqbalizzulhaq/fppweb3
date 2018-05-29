<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{	

	public function index(){
		return view('index');
	}

    public function daftar(Request $request){
    	if($request->password == $request->confpassword){
    		$member = new member;

    		$member->nama=$request->nama;
    		$member->username=$request->username;
    		$member->alamat=$request->alamat;
    		$member->status="Pemesan";
    		$member->password=$request->password;
    		$member->email=$request->email;

    		$member->save();
    		return redirect('register')->with('alert', "Pendaftaran sukses");
    	}



    }
}
