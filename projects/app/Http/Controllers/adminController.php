<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class adminController extends Controller
{

public function show(){
	
	$admin=Admin::all();
    // return $admin;
	return view('adDetail',['admin'=>$admin]);
}
	

}
