<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitor;
use App\Customer;
use App\Saleman;
use Illuminate\validation\Rule;
class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $v_man=request()->v_man;
        $v_address=request()->v_address;
        $where=[];
        if($v_man){
            $where=[
                ['v_man',"like","%$v_man%"]
            ];
        }
        if($v_address){
            $where=[
                ['v_address',"like","%$v_address%"]
            ];
        }        
        $result=Visitor::
        leftjoin('customer',"visitor.c_id","=","customer.c_id")
        ->leftjoin('saleman',"visitor.s_id","=","saleman.s_id")
        ->where($where)
        ->paginate(2);
        // dd($result);
        $query=request()->all();     
        if(request()->ajax()){
            return view('visitor.indexpage',['result'=>$result,'query'=>$query]);           
        }
        return view('visitor.index',['result'=>$result,'query'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customer_res=Customer::get();
        $saleman_res=Saleman::get();
        return view('visitor.create',['customer_res'=>$customer_res,'saleman_res'=>$saleman_res]);
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

            'v_address'=>'regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u',
            'v_desc'=>'required',
            'v_man'=>'required'
            ]
            ,[
                'v_address.regex'=>'地址必须是中文',
                'v_desc.required'=>'描述不能为空',
                'v_man.required'=>'拜访人不能为空',
            ]);
        $data=request()->except('_token');
        $data['v_time']=time();
        $data['v_ntime']=time()+200000;
        // dd($data);
        $result=Visitor::create($data);
        if($result){
            return redirect('visitor/index');
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
        $res= Visitor::find($id);
        // dd($res);
        $customer_res=Customer::get();
        $saleman_res=Saleman::get();
        return view('visitor.edit',['customer_res'=>$customer_res,'res'=>$res,'saleman_res'=>$saleman_res]);      
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
        //echo $id;
         request()->validate([
            'v_address'=>'regex:/^[\x{4e00}-\x{9fa5}\w]{2,16}$/u',
            'v_desc'=>'required',
            'v_man'=>'required'
            ]
            ,[
                'v_address.regex'=>'地址必须是中文',
                'v_desc.required'=>'描述不能为空',
                'v_man.required'=>'拜访人不能为空',
            ]);
        $data=request()->except('_token');
         $data['v_time']=time();
        $data['v_ntime']=time()+200000;
        $res=Visitor::where('v_id',$id)->update($data);
        // dd($res);
        if($res!==false){
            return redirect('visitor/index');
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
        // echo $id;
        $result=Visitor::destroy($id);
        if($result){
            return redirect('visitor/index');
        }
    }
}
