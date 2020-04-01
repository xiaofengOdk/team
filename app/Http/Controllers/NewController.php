<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\validation\Rule;
use App\Category;
use App\Newss;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
class NewController extends Controller
{
	public function create(){
		$cate_res=Category::get();
		return view('new.create',['cate_res'=>$cate_res]);
	}
	public function  store(){
		$data=request()->except('_token');
		// dd($data);
		if(request()->hasFile("n_photo")){
			$img=request()->n_photo;
			if($img->isValid()){
				$data['n_photo']=$img->store('uploads');
			}
		}
		// dd($data['n_photo']);
		if(request()->hasFile('n_photos')){
			$files=request()->n_photos;
			// dump($files);
		foreach ($files as $k=>$v) {
           // echo 123;
           	 if($v->isValid()){
             	 // echo 123;
             	   $file_result[$k]=$v->store('uploads');
            }
        }
    }
    	$data['n_photos']=implode("|",$file_result);
		// dd($data['n_photos']);
		$data['n_time']=time();
		// dd($data);
		$result=Newss::create($data);
		// dd($result);
		if($result){
			return redirect('new/index');
		}
	}
	public function index(){
		$result=Newss::
		leftjoin('category',"newss.c_id","=","category.c_id")
		->paginate(2);
		$query=request()->all();
		if(request()->ajax()){
			return view('new.indexpage',['result'=>$result,'query'=>$query]);
		}
		return view('new.index',['result'=>$result,'query'=>$query]);
	}
}