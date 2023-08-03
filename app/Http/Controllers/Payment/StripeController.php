<?php

namespace App\Http\Controllers\Payment;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Models\Frontend\Order;
use App\Models\Frontend\OrderItem;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){


            $total_amount = round(Cart::total());


        \Stripe\Stripe::setApiKey('sk_test_51MIhpNKWkQXfo4eQukxjm1a6La4VPI5CqQoQzMWV8njNverCJG5StkEq9oQnw3HZRnkq0wywBYiBQhdMYPPikvh300Pw8peT4N');


        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
          'amount' => $total_amount*100,
          'currency' => 'usd',
          'description' => 'Ngen It',
          'source' => $token,
          'metadata' => ['order_id' => uniqid()],
        ]);

        //dd($charge);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->address,
            'postal' => $request->postal,
            'notes' => $request->notes,

            'payment_type' => $charge->payment_method,
            'payment_method' => 'Stripe',
            'transaction_id' => $charge->balance_transaction,
            'currency' => $charge->currency,
            'amount' => $total_amount,
            'order_number' => $charge->metadata->order_id,

            'invoice_no' => 'NI-'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(),

        ]);

        // Start Send Email

        $invoice = Order::findOrFail($order_id);

        $data = [

            'invoice_no' => $invoice->invoice_no,
            'amount' => $total_amount,
            'name' => $invoice->name,
            'email' => $invoice->email,

        ];

        Mail::to($request->email)->send(new OrderMail($data));

        // End Send Email


        $carts = Cart::content();
        foreach($carts as $cart){

            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'vendor_id' => $cart->options->vendor,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' =>Carbon::now(),

            ]);

        } // End Foreach

        // if (Session::has('coupon')) {
        //    Session::forget('coupon');
        // }

        Cart::destroy();


        Toastr::success('Your Order is Placed Successfully');
        return redirect()->route('homepage');



    }// End Method




    public function CashOrder(Request $request){

        $user = User::where('role','admin')->get();

        // if(Session::has('coupon')){
        //     $total_amount = Session::get('coupon')['total_amount'];
        // }else{
            $total_amount = round(Cart::total());
        //}


        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'country' => $request->country,
            'city' => $request->city,
            'state' => $request->state,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'postal' => $request->postal,
            'notes' => $request->notes,

            'payment_type' => 'Cash',
            'payment_method' => 'Cash',

            'currency' => 'Usd',
            //dd($total_amount),
            'amount' => $total_amount,


            'invoice_no' => 'NI'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(),

        ]);



  // Start Send Email

        $invoice = Order::findOrFail($order_id);

        $data = [

            'invoice_no' => $invoice->invoice_no,
            'amount' => $total_amount,
            'name' => $invoice->name,
            'email' => $invoice->email,

        ];

        Mail::to($request->email)->send(new OrderMail($data));

        // End Send Email



        $carts = Cart::content();
        foreach($carts as $cart){

            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                //'vendor_id' => $cart->options->vendor,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' =>Carbon::now(),

            ]);

        } // End Foreach


        Cart::destroy();



        //Notification::send($user, new OrderComplete($request->name));
        Toastr::success('Your Order is Placed Successfully');
        return redirect()->route('homepage');



    }// End Method
}
