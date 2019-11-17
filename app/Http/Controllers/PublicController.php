<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Brian2694\Toastr\Facades\Toastr;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.public');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order_now(Request $request)
    {
        $order = new Order();
        $order->package = $request->package;
        $order->phone = $request->phone;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->school_name = $request->school_name;
        $order->class = $request->class;

        if($order->save()){
            Toastr::success('Success', 'Your Order Successfull, we will contact you as soon as');
            return redirect('/');
        }else{
            Toastr::error('Opps!!', 'You went wrong, plz try again');
            return redirect('/');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
}
