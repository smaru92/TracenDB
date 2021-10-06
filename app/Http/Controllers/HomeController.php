<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	//index : 메인페이지
	public function index(Request $request)
	{
		return view('home.index');
	}
}
