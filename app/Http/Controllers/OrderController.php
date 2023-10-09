<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\About;
use App\Models\Image;
use App\Models\wahana;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){
        $about = About::find(1);
        $request->request->add(['total_price' => $request->qty * $about->tiket, 'status' => 'unpaid' ]);
        $order = Order::create($request->all());


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $request->name,
                
            ),
        );
       
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $title = 'Checkout';
        return view('checkout',compact('snapToken', 'order', 'title'));
    }
    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Order::find($request->order_id);
                $order->update(['status' => 'paid']);
            }
        }
    }
    public function invoice($id){
        $title = 'Invoice';
        $order = Order::find($id);
        return view('invoice', compact('order'));
    }

    public function delete($id){
        $order=Order::findorFail($id);
        $order->delete();
        return redirect('/');
    }
}
