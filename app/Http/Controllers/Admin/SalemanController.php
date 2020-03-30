<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Saleman;
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
        // echo $id;
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
        $data=request()->except('_token');
        // dd($data);
        $result=Saleman::where("s_id",$id)->update($data);
        if($result){
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
