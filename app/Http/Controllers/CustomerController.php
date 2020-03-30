<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller           
{
    public function index()
    {
    	$customer=Customer::paginate(3);
      return view('customer.index',['customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $post=$request->except('_token');
     	// dd($post);die;
        // dd($post);
      $res=Customer::insert($post);
       // dd($res);die;
      if($res){
        return redirect('/customer/index');
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
    public function edit($c_id)
    {
       $customer=Customer::where('c_id',$c_id)->first();
        return view('customer.edit',['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $c_id)
    {
         $post=$request->except(['_token']);

         
       //ORM 第一种save
        $res=Customer::where('c_id',$c_id)->update($post);
       // dd($res);die;
       if($res!==false){
        return redirect('/customer/index');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($c_id)
    {
         // ORM
        $res=Customer::destroy($c_id); 

       
      
       
        return redirect('/customer/index');
       
    }
}
