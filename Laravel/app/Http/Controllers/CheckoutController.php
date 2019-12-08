<?php

namespace App\Http\Controllers;

use Cart;
use Auth;
use App\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sem pridat overenie prihlasenia!!!!!!!
        Cart::store(Auth::user()->id);
        return view('checkout');
    }

    public function placeOrder(Request $request){

        $this->validate($request,[
            'fullname'=>'required',
            'mail'=>'required|email',
            'phone'=>'required|numeric',
            'street'=>'required',
            'streetnum'=>'required|numeric',
            'postal'=>'required|numeric',
            'city'=>'required',
            'state'=>'required',
        ]);

        $order =new Order;
        $order->userid = Auth::user()->id;
        $order->cartid = Auth::user()->id;
        $order->pricesum = (int)Cart::subtotal();
        $order->fullname = $request->fullname;
        $order->mail = $request->mail;
        $order->phone = $request->phone;
        $order->street = $request->street;
        $order->streetnum = $request->streetnum;
        $order->postal = $request->postal;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->save();

        //orders::createOrder();
        return redirect('payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
