<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class LoginController extends Controller
{
	public function loginproc(Request $Request){
		$username = $Request->get('username');
		$password = $Request->get('password');

	}
}
