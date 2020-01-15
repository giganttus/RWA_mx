<?php

namespace App\Http\Controllers;
use Gate;
use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function save(Request $req){
        print_r($req->input());
        $orders = new Orders;

        $orders->name = $req->name;
        $orders->lastname = $req->lastname;
        $orders->address = $req->address;
        $orders->contact = $req->contact;
        $orders->city = $req->city;
        $orders->state = $req->state;
        $orders->zip = $req->zip;
        $orders->size = $req->size;
        $orders->details = $req->details;
        $orders->name2 = $req->name2;
        $orders->lastname2 = $req->lastname2;
        $orders->address2 = $req->address2;
        $orders->contact2 = $req->contact2;
        $orders->city2 = $req->city2;
        $orders->state2 = $req->state2;
        $orders->zip2 = $req->zip2;

        $orders->save();

        return redirect()->route('orders.request');

    }

    public function index()
    {
        if(Gate::denies('manage-orders')){
            return redirect(route('home'));
        }
        $orders = Orders::all();
        return view('orders')->with('orders',$orders);
    }


    public function ordersrequest()
    {
        return view('ordersrequest');
    }

    public function orderstracking()
    {
        return view('orderstracking');
    }

    public function orderstracker()
    {
        return view('orderstracker');
    }

    public function destroy(Orders $orders)
    {
        if(Gate::denies('delete-orders')){
            return redirect(route('home'));
        }

        $orders->delete();
        return redirect()->route('orders');
    }


    public function show(Orders $orders)
    {
        //
    }


    public function edit(Orders $orders)
    {
        if(Gate::denies('edit-orders')){
            return redirect(route('home'));
        }

        return view('ordersedit')->with([
            'orders' => $orders
        ]);
    }


    public function update(Request $request, Orders $orders)
    {

        $orders->status = $request->status;
        $orders->save();

        return redirect()->route('orders');

    }





}
