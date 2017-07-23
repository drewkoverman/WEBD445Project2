<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    //Displays all orders
    public function index()
    {
        $orders = Order::all();
        return $orders;
    }

    //Display order by specific ID
    //Ex: /api/v1/orders/1
    public function show($id) {
      $order = Order::find($id);
      return $order;
    }

    //Store new order resource
    public function store(Request $request) {

      //Store in the database
      $order = new Order;

      //Store all request variables
      $order->name = $request->input('name');
      $order->email = $request->input('email');
      $order->moving_date = $request->input('moving_date');
      $order->type = $request->input('type');
      $order->flexibility = $request->input('flexibility');
      $order->orginal = $request->input('orginal');
      $order->destination = $request->input('destination');

      //Date formating for moving_date
      $order->moving_date = date('m/d/y');

      //Save new orders
      $order->save();

      return 'Order record successfully created with id ' . $order->id;
    }

    public function destroy($id) {
      $order = Order::find($id);

      if($order) {
        $order->delete();
      }

      return "Record deleted #" . $id;
    }

}
