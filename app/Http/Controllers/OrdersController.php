<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = orders::all();
        return view('orders.orders',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $d = Auth::user()->name;
        // dd(Auth::id());
        return view('orders.add-order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new orders;
        $order->name = request('fullname');
        $order->service = request('Service');
        $order->phoneNumber = request('phonenumber');
        $order->description = request('description');
        $order->brand = request('manufacturerbrand');
        $file = request()->file('file');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '', $name);
        $order->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
        $order->payment = request('payment');
        $order->note = request('note');
        $order->save();
        return redirect()->back()->with('success','your order was sent seccussfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = orders::find($id);
        return view('orders.order-details',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = orders::find($id);
        return view('orders.order-edit',compact('order'));
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
        $order = orders::find($id);
        $order->name = request('fullname');
        $order->service = request('Service');
        $order->phoneNumber = request('phonenumber');
        $order->description = request('description');
        $order->brand = request('manufacturerbrand');
        if(request('file')){
          $file = request()->file('file');
          $name = $file->getClientOriginalName();
          $name = str_replace(' ', '', $name);
          $order->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
        }
        $order->payment = request('payment');
        $order->note = request('note');
        $order->save();
        return redirect()->back()->with('success','order is updated seccussfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = orders::find($id);
        $order->delete();
        return redirect()->back()->with('success','order is deleted seccussfuly');
    }
}
