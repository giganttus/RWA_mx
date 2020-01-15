<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class aOrdersController extends Controller
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

        return redirect()->route('ordersrequest');

    }
    public function index()
    {
        return view('userview');
    }


    public function orders()
    {
        $orders = Orders::all();
        return view('orders')->with('orders',$orders);
    }

    public function ordersedit()
    {
        $orders = Orders::all();
        return view('ordersedit')->with([
            'orders'=>$orders
        ]);
    }


    public function ordersrequest()
    {
        return view('ordersrequest');
    }

    public function destroy(Orders $orders)
    {

        $orders->delete();
        return redirect()->route('orders');

    }




}
