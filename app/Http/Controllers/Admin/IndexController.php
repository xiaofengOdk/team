<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Saleman;
use Illuminate\validation\Rule;
class IndexController extends Controller
{
	public function index(){
		return view('visitor.indexzhongxin');
	}	
}