<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Saleman;
use App\Admin;
use Illuminate\validation\Rule;
class LoginController extends Controller
{
	public function loginindex(){
		return view('new.login');
	}
	public function loginstore(){
		$admin_name=request()->admin_name;
		$admin_pwd=request()->admin_pwd;
		$res=Admin::where('admin_name',$admin_name)->first();
		// dd($res);
		// dd(encrypt('123321'));
		if($res==null){
			return redirect('new/loginindex')->with('msg',"账号或者密码错误");
		}
		if($res){
			$res['admin_pwd']=decrypt($res['admin_pwd']);
			// dd($res['admin_pwd']);
			if($res['admin_pwd']==$admin_pwd){
				session(['adminuser'=>$res]);
				return redirect('new/create');
			}else{
			return redirect('new/loginindex')->with('msg',"账号或者密码错误");
			}
		}
	}
	public function tui(){
		$res=request()->session()->flush();
		// dd($res);/
			return redirect('login/index');
	}
}