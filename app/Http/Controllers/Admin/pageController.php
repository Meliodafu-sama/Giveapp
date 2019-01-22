<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
     //for login and sign up page
	public function admin() {
		return view ('admin.login');
	}
}
