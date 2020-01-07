<?php

namespace App\Http\Controllers;
use App\Orders;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function save(Request $req){
        print_r($req->input());
        $orders = new Orders;

        $orders->name = $req->name;
        $orders->lastname = $req->lastname;
        $orders->contact = $req->contact;
        $orders->details = $req->details;
        $orders->size = $req->size;
        $orders->name2 = $req->name2;
        $orders->lastname2 = $req->lastname2;
        $orders->address = $req->address;
        $orders->contact2 = $req->contact2;
        $orders->city = $req->city;
        $orders->state = $req->state;
        $orders->zip = $req->zip;
        $orders->save();


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

    public function editorders()
    {
        $orders = Orders::all();
        return view('editorders')->with('editorders',$orders);
    }


}
