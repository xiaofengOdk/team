<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Saleman;
use Illuminate\validation\Rule;
class SalemanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $s_name=request()->s_name;
        $where=[];
        if($s_name){
            $where=[
                ['s_name',"like","%$s_name%"]
            ];
        }
        $query=request()->all();
        $result=Saleman::get();
        if(request()->ajax()){
             return view('saleman/indexpaage',['result'=>$result,'query'=>$query]);
        }
        return view('saleman/index',['result'=>$result,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('saleman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function score(Request $request)
    {
        //

        request()->validate([

            's_name'=>'regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u|unique:saleman',
            's_tel'=>'required|regex:/^1[3,5,6,7,8]\d{9}$/',
            's_ptel'=>'required'
            ]
            ,[
                's_name.regex'=>'管理员名字必须我中文，数字，字母，下划线2-16位',
                's_name.unique'=>'名称已存在',
                's_tel.required'=>'手机号不能为空',
                's_tel.regex'=>'手机号不对',
                's_ptel.required'=>'zuo机号不能为空',
            ]);

        $data=request()->except('_token');
        // dd($data);
        $result=Saleman::create($data);
        if($result){
            return redirect('saleman/index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $result=Saleman::find($id);
        return view('saleman.edit',['result'=>$result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         request()->validate([

            's_name'=>['regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u',
                Rule::unique('saleman')->ignore($id,'s_id'),
        ],
            's_tel'=>'required|regex:/^1[3,5,6,7,8]\d{9}$/',
            's_ptel'=>'required'
            ]
            ,[
                's_name.regex'=>'管理员名字必须我中文，数字，字母，下划线2-16位',
                's_name.unique'=>'名称已存在',
                's_tel.required'=>'手机号不能为空',
                's_tel.regex'=>'手机号不对',
                's_ptel.required'=>'zuo机号不能为空',
            ]);

        $data=request()->except('_token');
        // dd($data);

        $result=Saleman::where("s_id",$id)->update($data);
        // dd($result);
        if($result!==false){
            return redirect('saleman/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $res=Saleman::destroy($id);
        if($res){
            return redirect('saleman/index');
        }
    }
}
