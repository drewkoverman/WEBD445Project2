<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::all();
        return view('orders.index')->with('orders', $orders);
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
        //Validate data
        $this->validate($request, array(
          'fullName' => 'required|max:50',
          'email' => 'unique:orders|required',
          'type' => 'required',
          'moving_date' => 'required',
          'orginal' => 'required',
          'destination' => 'required'
        ));

        //Store/Get in the database
        $order = new Order;
        $orders = Order::all();

        //Store all request variables
        $order->name = $request->fullName;
        $order->email = $request->email;
        $order->type = $request->type;
        $order->orginal = $request->orginal;
        $order->destination = $request->destination;
        $order->moving_date = $request->moving_date;
        $order->flexibility = $request->flexibility;

        //Set flexibility to false if NULL
        if($order->flexibility === NULL) {
          $order->flexibility = 0;
        }

        //Date formating for moving_date
        $order->moving_date = date('m/d/y');

        //Save new orders
        $order->save();

        //Redirect back to Root application
        return redirect('');
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
        $order = Order::findOrFail($id);

        $order->delete();
        Session::flash('flash_message', 'Order successfully deleted');

        return redirect()->route('orders.index');
    }
}
