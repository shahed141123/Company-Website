<?php

namespace App\Http\Controllers\Frontend;

use Pdf;
use Helper;
use Carbon\Carbon;
use App\Models\User;
use NumberFormatter;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Models\Client\Client;
use App\Models\Frontend\Order;
use App\Models\Partner\Partner;
use App\Models\Frontend\OrderItem;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\CommercialDocument;
use App\Models\Admin\PaymentMethodDetails;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    // Checkout Method
    public function CheckoutCreate(){

        $data['countries'] = Country::orderBy('country_name' , 'ASC')->get();
         if (Auth::guard('client')->check()) {
             if (Cart::total() > 0) {

                $data['carts'] = Cart::content();
                $data['cartQty'] = Cart::count();
                $data['cartsubTotal'] = Cart::subtotal();
                $data['cartTotal'] = Cart::total();
                $data['id'] = Auth::guard('client')->user()->id;
                $data['name'] = Auth::guard('client')->user()->name;
                $data['phone'] = Auth::guard('client')->user()->phone;
                $data['email'] = Auth::guard('client')->user()->email;
                $data['address'] = Auth::guard('client')->user()->address;
                $data['city'] = Auth::guard('client')->user()->city;
                $data['state'] = Auth::guard('client')->user()->state;
                $data['postal'] = Auth::guard('client')->user()->postal;
                $data['country'] = Auth::guard('client')->user()->country;
                $data['user'] = Client::find($data['id']);
                $data['client_type'] = 'client';
                //dd($data['user']);

                //$divisions = ShipDivision::orderBy('division_name','ASC')->get();
                return view('frontend.pages.cart.checkout',$data);

            }else{
                Toastr::warning('Shopping At list One Product');
                return redirect()->route('shop');

            }

        }elseif (Auth::guard('partner')->check()) {
            if (Cart::total() > 0) {

                $data['carts'] = Cart::content();
                $data['cartQty'] = Cart::count();
                $data['cartsubTotal'] = Cart::subtotal();
                $data['cartTotal'] = Cart::total();
                $data['id'] = Auth::guard('partner')->user()->id;
                $data['name'] = Auth::guard('partner')->user()->name;
                $data['phone'] = Auth::guard('partner')->user()->phone_number;
                $data['email'] = Auth::guard('partner')->user()->primary_email_address;
                $data['address'] = Auth::guard('partner')->user()->company_address;
                $data['city'] = Auth::guard('partner')->user()->city;
                $data['state'] = Auth::guard('partner')->user()->state;
                $data['postal'] = Auth::guard('partner')->user()->postal;
                $data['country'] = Auth::guard('partner')->user()->country;
                $data['user'] = Partner::find($data['id']);
                $data['client_type'] = 'client';
                //dd($data['user']);

                //$divisions = ShipDivision::orderBy('division_name','ASC')->get();
                return view('frontend.pages.cart.checkout',$data);

            }else{
                Toastr::warning('Shopping At list One Product');
                return redirect()->route('shop');

            }
        }
        else{
            Toastr::warning('You Need to Login First');


         return redirect()->route('client.login')->with('url.intended', route('checkout'));

        }

    } // end method


    public function CheckoutStore(Request $request){
    	//dd($request->all());
    	//$data = array();
    	$data['billing_name']          = $request->billing_name;
    	$data['billing_email']         = $request->billing_email;
    	$data['billing_phone']         = $request->billing_phone;
    	$data['billing_postal']        = $request->billing_postal;
        $data['billing_address']       = $request->billing_address;
        $data['billing_city']          = $request->billing_city;
        $data['billing_country']       = $request->billing_country;
        $data['billing_company_name']  = $request->billing_company_name;
        if (($request->ship_address) == 1) {
            $data['shipping_name']         = $request->shipping_name;
            $data['shipping_email']        = $request->shipping_email;
            $data['shipping_phone']        = $request->shipping_phone;
            $data['shipping_postal']       = $request->shipping_postal;
            $data['shipping_address']      = $request->shipping_address;
            $data['shipping_city']         = $request->shipping_city;
            $data['shipping_country']      = $request->shipping_country;
            $data['shipping_company_name'] = $request->shipping_company_name;
        } else {
            $data['shipping_name']         = $request->billing_name;
            $data['shipping_email']        = $request->billing_email;
            $data['shipping_phone']        = $request->billing_phone;
            $data['shipping_postal']       = $request->billing_postal;
            $data['shipping_address']      = $request->billing_address;
            $data['shipping_city']         = $request->billing_city;
            $data['shipping_country']      = $request->billing_country;
            $data['shipping_company_name'] = $request->billing_company_name;
        }


        $mainFileWorkOrder = $request->file('work_order');
            if (isset($mainFileWorkOrder)) {
                $globalFunWorkOrder =  Helper::singleFileUpload($mainFileWorkOrder);
            } else {
                $globalFunWorkOrder = ['status' => 0];
            }

    	$data['work_order_no'] = $request->work_order_no;

    	$data['notes'] = $request->notes;
        $data['carts'] = Cart::content();
        $data['client_type'] = $request->client_type;
    	$data['cartTotal'] = Cart::total();
        // $formattedNumber = Cart::total();
        // $formatter = new NumberFormatter('en_US', NumberFormatter::SPELLOUT);
        $formattedNumber = Cart::total();
        $data['total_amount'] = numberToWords($formattedNumber);
        // $data['total_amount'] = $formatter->format($formattedNumber);
        $data['order_number'] = Helper::generateCode();
        $data['invoice_no'] = 'NI-'.date('dmY').Order::latest()->value('order_number');
        //dd($data['order_number']);

        $order_id = Order::insertGetId([
            'client_id'            => $request->client_id,
            'partner_id'           => $request->partner_id,
            'client_type'          => $request->client_type,
            'invoice_no'           => $data['invoice_no'],
            'order_number'         => $data['order_number'],
            'work_order'           => $globalFunWorkOrder['status'] == 1 ? $globalFunWorkOrder['file_name'] : '',
            'work_order_no'        => $data['work_order_no'],

            'billing_name'         => $data['billing_name'],
            'billing_email'        => $data['billing_email'],
            'billing_phone'        => $data['billing_phone'],
            'billing_postal'       => $data['billing_postal'],
            'billing_address'      => $data['billing_address'],
            'billing_city'         => $data['billing_city'],
            'billing_country'      => $data['billing_country'],
            'billing_company_name' => $data['billing_company_name'],

            'shipping_name'         => $data['shipping_name'],
            'shipping_email'        => $data['shipping_email'],
            'shipping_phone'        => $data['shipping_phone'],
            'shipping_postal'       => $data['shipping_postal'],
            'shipping_address'      => $data['shipping_address'],
            'shipping_city'         => $data['shipping_city'],
            'shipping_country'      => $data['shipping_country'],
            'shipping_company_name' => $data['shipping_company_name'],

            'notes'          => $request->notes,
            'payment_method' => $request->payment_method,
            //'currency'       => 'Usd',
            'amount'         => $data['cartTotal'],

            'order_date'     => Carbon::now()->format('d F Y'),
            'order_month'    => Carbon::now()->format('F'),
            'order_year'     => Carbon::now()->format('Y'),
            'status'         => 'unpaid',
            'created_at'     => Carbon::now(),

        ]);





        $invoice = Order::findOrFail($order_id);

        $data['invoice_no'] = $invoice->invoice_no;





        $carts = Cart::content();
        foreach($carts as $cart){

            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' =>Carbon::now(),

            ]);

        } // End Foreach


        //Notification::send($user, new OrderComplete($request->name));
    		 //return view('pdf.proform',$data);
        $fileName = 'Proforma Invoice('.$data['order_number'].').pdf';
        $filePath = 'public/files/' . $fileName;
        $pdf = PDF::loadView('pdf.proform', $data);
        // $pdf = Pdf::loadView('pdf.proform', $data)->setOption(['dpi' => 120,'isRemoteEnabled' => true]);
        $pdf_output = $pdf->output();
        Storage::put($filePath, $pdf_output);
        $emailSent = false;
        if ($emailSent) {
            return response()->json(['message' => 'Email has already been sent.']);
        }

        $email = $data['billing_email'];
        $subject = 'Proforma Invoice From Ngen It';
        $message = 'Here is the Proforma Invoice From Ngen It which is generated against your Order.';


        //
        // create a new email message
        $mail = Mail::raw($message, function ($message) use ($email, $subject, $pdf) {
            $message->to($email)
                    ->subject($subject)
                    ->attachData($pdf->output(), 'proforma_invoice-Ngenit.pdf');
        });


        if ($mail) {
            Toastr::success('Proforma Invoice Mail Sent Successfully');
        } else {

            Toastr::error($message, 'Proforma Invoice Mail Sent Failed', ['timeOut' => 30000]);
        }

        ///return $pdf->download('Proforma-invoice.pdf');

        //return view('frontend.pages.payment.payment',$data);
        //return redirect()->route('payment.page',$order_id);

        $document_check = CommercialDocument::where('order_id', $order_id)->first();
            if (!empty($document_check)) {
                CommercialDocument::find($document_check->id)->update([
                    'client_po'=> $globalFunWorkOrder['status'] == 1 ? $globalFunWorkOrder['file_name'] : '',
                    ]);
                    Toastr::success('PDF Uploaded Successfully');
            } else {
                CommercialDocument::create([
                    'order_id' => $order_id,
                    'client_po'=> $globalFunWorkOrder['status'] == 1 ? $globalFunWorkOrder['file_name'] : '',
                ]);
                Toastr::success('PDF Uploaded Successfully');
            }
            Cart::destroy();
            return redirect()->route('payment.page',$invoice->order_number);




    }// end mehtod.

    public function PaymentPage($id)
    {
        $data['order'] = Order::where('order_number',$id)->first();
        $data['order_items'] = OrderItem::where('order_id', $data['order']->id)->get();
        //dd($data['order_items']);
        return view('frontend.pages.payment.payment',$data);

    }

    public function getGST($region_id)
    {
        $gst = PaymentMethodDetails::where('region_id', $region_id)->select('gst')->first();
        // dd($gst);
        return json_encode($gst);
    }



}
