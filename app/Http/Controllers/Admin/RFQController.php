<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Carbon\Carbon;
use App\Models\User;
use App\Rules\Recaptcha;
use App\Mail\RfqAssigned;
use App\Models\Admin\Rfq;
use Illuminate\Support\Str;
use App\Models\Admin\Client;
use Illuminate\Http\Request;
use App\Models\Admin\DealSas;
use App\Models\Admin\Product;
use App\Models\Partner\Partner;
use Illuminate\Validation\Rule;
use App\Models\Admin\RfqProduct;
use App\Notifications\RfqAssign;
use App\Notifications\RfqCreate;
use App\Notifications\WorkOrder;
use App\Mail\RFQNotificationMail;
use App\Notifications\DealConvert;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin\CommercialDocument;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

class RFQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->where('role', 'manager')->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['rfqs'] = Rfq::where('rfq_type', 'rfq')->where('status', 'rfq_created')->latest('id', 'DESC')->get();
        $data['deals'] = Rfq::where('rfq_type', 'rfq')->where('status', 'assigned')->orderBy('id', 'DESC')->get();
        //dd($data);
        return view('admin.pages.rfq.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->where('role', 'manager')->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['products'] = Product::latest()->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['clients'] = Client::select('clients.id', 'clients.name')->get();
        $data['partners'] = Partner::select('partners.id', 'partners.name')->get();
        return view('admin.pages.rfq.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        Helper::imageDirectory();


        $data['deal_type'] = 'new';

        $today = Carbon::today()->format('dmy');

        // Find the last RFQ code of today from the database
        $lastCode = RFQ::where('rfq_code', 'like', 'RFQ-' . $today . '-%')->orderBy('id', 'DESC')->first();

        if ($lastCode) {
            // Extract the last numeric part of the rfq_code and increment it by 1
            $lastNumber = (int) explode('-', $lastCode->rfq_code)[2];
            $newNumber = $lastNumber + 1;
        } else {
            // If there are no RFQ codes for today, start with 1
            $newNumber = 1;
        }

        $data['rfq_code'] = 'RFQ-' . $today . '-' . $newNumber;

        // dd($data['rfq_code']);


        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'rfq_code' => 'unique:rfqs',
                'image' => 'file|mimes:jpeg,png,jpg|max:2048',
                'g-recaptcha-response' => ['required', new Recaptcha]
            ],
            [
                'required' => 'The :attribute field is required',
                'mimes' => 'The :attribute must be a file of type:PNG-JPEG-JPG'
            ],
        );

        $product = Product::where('id', $request->product_id)->first();

        if ($validator->passes()) {
            $mainFile = $request->file('image');
            $imgPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImage =  Helper::singleImageUpload($mainFile, $imgPath, 450, 350);
            } else {
                $globalFunImage = ['status' => 0];
            }

            $rfq_id = Rfq::insertGetId([
                'client_id'            => $request->client_id,
                'partner_id'           => $request->partner_id,
                'product_id'           => $request->product_id,
                'solution_id'          => $request->solution_id,
                'rfq_code'             => $data['rfq_code'],
                'rfq_type'             => 'rfq',
                'deal_type'            => $data['deal_type'],
                'client_type'          => $request->client_type,
                'name'                 => $request->name,
                'email'                => $request->email,
                'phone'                => $request->phone,
                'qty'                  => $request->qty,
                'company_name'         => $request->company_name,
                'designation'          => $request->designation,
                'message'              => $request->message,
                'address'              => $request->address,
                'create_date'          => Carbon::now(),
                'close_date'           => $request->close_date,
                'image'                => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : '',
                'status'               => 'rfq_created',
                'created_at'           => Carbon::now(),
            ]);
            if ($request->product_name) {
                RfqProduct::insert([

                    'rfq_id'       => $rfq_id,
                    'product_name' => $request->product_name,
                    'qty'          => $request->qty,
                    'created_at'   => Carbon::now(),

                ]);
            }




            $name = $request->name;
            $rfq_code = $data['rfq_code'];

            $users = User::where(function ($query) {
                $query->whereJsonContains('department', 'business')
                    ->orwhereJsonContains('department', 'logistics');
            })->where('role', 'admin')->get();
            // $slug = $data['slug'];
            $user_emails = User::where(function ($query) {
                $query->whereJsonContains('department', 'business')
                    ->orwhereJsonContains('department', 'logistics');
            })->where('role', 'admin')->pluck('email')->toArray();
            // $user_emails = 'khandkershahed23@gmail.com';

            Notification::send($users, new RfqCreate($name, $rfq_code));


            $data = [

                'name'         => $name,
                'sku_code'     => !empty($product->sku_code) ?? $product->sku_code,
                'product_name' => $product->name,
                'phone'        => $request->phone,
                'qty'          => $request->qty,
                'company_name' => $request->company_name,
                'address'      => $request->address,
                'message'      => $request->message,
                'rfq_code'     => $rfq_code,
                'email'        => $request->email,
                'link'         => route('single-rfq.show', $rfq_code),

            ];
            Mail::to($request->email)->send(new RFQNotificationMail($data));
            if (!empty($user_emails)) {
                Mail::to($user_emails)->send(new RFQNotificationMail($data));
            }


            Toastr::success('Your RFQ has been submitted successfully.');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
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
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->where('role', 'manager')->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['products'] = Product::select('products.id', 'products.name')->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['clients'] = Client::select('clients.id', 'clients.name')->get();
        $data['partners'] = Partner::select('partners.id', 'partners.name')->get();
        $data['rfq'] = Rfq::find($id);
        return view('admin.pages.rfq.edit', $data);
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
        $rfq = Rfq::find($id);
        if (!empty($rfq)) {
            $validator =
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                ];
        } else {
            $validator =
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 157, 87);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($rfq)) {
                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path($uploadPath . '/') . $rfq->image);
                    File::delete(public_path($uploadPath . '/thumb/') . $rfq->image);
                    File::delete(public_path($uploadPath . '/requestImg/') . $rfq->image);
                }

                $rfq->update([
                    'sales_man_id_L1'      => $request->sales_man_id_L1,
                    'sales_man_id_T1'      => $request->sales_man_id_T1,
                    'sales_man_id_T2'      => $request->sales_man_id_T2,
                    'client_id'            => $request->client_id,
                    'partner_id'           => $request->partner_id,
                    'product_id'           => $request->product_id,
                    'solution_id'          => $request->solution_id,
                    'rfq_code'             => $request->rfq_code,
                    'client_type'          => $request->client_type,
                    'name'                 => $request->name,
                    'email'                => $request->email,
                    'phone'                => $request->phone,
                    'company_name'         => $request->company_name,
                    'designation'          => $request->designation,
                    'address'              => $request->address,
                    'create_date'          => date('Y-m-d H:i:s', strtotime($request->create_date)),
                    'delivery_deadline'    => $request->delivery_deadline,
                    'work_order_no'        => $request->work_order_no,
                    'client_po_no'         => $request->client_po_no,
                    'pq_code'              => $request->pq_code,
                    'pqr_code_one'         => $request->pqr_code_one,
                    'pqr_code_two'         => $request->pqr_code_two,
                    'qty'                  => $request->qty,
                    'message'              => $request->message,
                    'call'                 => $request->call,
                    'validity'             => $request->validity,
                    'payment'              => $request->payment,
                    'payment_mode'         => $request->payment_mode,
                    'delivery'             => $request->delivery,
                    'delivery_location'    => $request->delivery_location,
                    'product_order'        => $request->product_order,
                    'installation_support' => $request->installation_support,
                    'pmt_condition'        => $request->pmt_condition,
                    'terms_nine'           => $request->terms_nine,
                    'terms_ten'            => $request->terms_ten,
                    'terms_eleven'         => $request->terms_eleven,
                    'tax'                  => $request->tax,
                    'vat'                  => $request->vat,
                    'total_price'          => $request->total_price,
                    'price_text'           => $request->price_text,
                    'status'               => 'pending',
                    'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $rfq->image,
                ]);
            }

            Toastr::success('Data has been updated');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        // return redirect()->route('rfq.index');
        return redirect()->route('rfq-manage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $rfq = RFQ::find($id);

        if (File::exists(public_path('storage/') . $rfq->image)) {
            File::delete(public_path('storage/') . $rfq->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $rfq->image)) {
            File::delete(public_path('storage/requestImg/') . $rfq->image);
        }
        if (File::exists(public_path('storage/thumb/') . $rfq->image)) {
            File::delete(public_path('storage/thumb/') . $rfq->image);
        }
        $rfq->delete();
    }

    public function AssignSalesMan(Request $request, $id)
    {
        $rfq = Rfq::where('rfq_code', $id)->first();
        if (!empty($rfq->id)) {
            $product_name = Product::where('id', $rfq->product_id)->value('name');
        } else {
            $product_name = RfqProduct::where('rfq_id', $rfq->id)->value('product_name');
        }


        $user = User::get();
        if (!empty($rfq)) {

            $user_emails = [];

            if (!empty($request->sales_man_id_L1)) {
                $name1 = User::where('id', $request->sales_man_id_L1)->value('name');
                $user_email1 = User::where('id', $request->sales_man_id_L1)->value('email');
                $user_emails[] = $user_email1;
            } else {
                $name1 = '';
            }

            if (!empty($request->sales_man_id_T1)) {
                $name2 = User::where('id', $request->sales_man_id_T1)->value('name');
                $user_email2 = User::where('id', $request->sales_man_id_T1)->value('email');
                $user_emails[] = $user_email2;
            } else {
                $name2 = '';
            }

            if (!empty($request->sales_man_id_T2)) {
                $name3 = User::where('id', $request->sales_man_id_T2)->value('name');
                $user_email3 = User::where('id', $request->sales_man_id_T2)->value('email');
                $user_emails[] = $user_email3;
            } else {
                $name3 = '';
            }

            // dd($user_emails);


            $rfq->update([
                'sales_man_id_L1'      => $request->sales_man_id_L1,
                'sales_man_id_T1'      => $request->sales_man_id_T1,
                'sales_man_id_T2'      => $request->sales_man_id_T2,
                'status'               => 'assigned',
            ]);
        }


        $rfq_code = $rfq->rfq_code;



        Notification::send($user, new RfqAssign($name1, $name2, $name3, $rfq_code));
        $data = [

            'name'         => $rfq->name,
            'product_name' => $product_name,
            'phone'        => $rfq->phone,
            'qty'          => $rfq->qty,
            'company_name' => $rfq->company_name,
            'address'      => $rfq->address,
            'message'      => $rfq->message,
            'rfq_code'     => $rfq->rfq_code,
            'email'        => $rfq->email,

        ];
        $mail = Mail::to($user_emails);
        if ($mail) {
            $mail->send(new RfqAssigned($data));
            Toastr::success('Mail has Sent Successfully');
        } else {
            Toastr::error('Email Failed to send', ['timeOut' => 30000]);
            return redirect()->back();
        }
        Toastr::success('SalesMan has been Assigned');

        return redirect()->back();
    }

    public function DealConvert($id)
    {
        $data['users'] = User::where(function ($query) {
            $query->whereJsonContains('department', 'business');
        })->where('role', 'manager')->select('id', 'name')->orderBy('id', 'DESC')->get();
        $data['products'] = Product::select('products.id', 'products.name')->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['clients'] = Client::select('clients.id', 'clients.name')->get();
        $data['partners'] = Partner::select('partners.id', 'partners.name')->get();
        $data['rfq'] = Rfq::find($id);
        return view('admin.pages.deal.deal_convert', $data);
    }

    public function ConvertDealStore(Request $request, $id)
    {
        //dd($request->all());
        if (!empty($request->account)) {
            if ($request->account == 'client') {
                $validator =
                    [
                        'name' => 'required',
                        'email' => 'required|unique:clients',
                        'phone' => 'required',
                        'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                    ];
                $validator = Validator::make($request->all(), $validator);
                if ($validator->passes()) {
                    $client = Client::create([
                        'name'     => $request->name,
                        'email'    => $request->email,
                        'phone'    => $request->phone,
                        'status'   => 'inactive',
                        'password' => Hash::make($request->password),
                    ]);
                }
            } elseif ($request->account == 'partner') {
                $validator =
                    [
                        'name' => 'required',
                        'email' => [
                            'required',
                            'email',
                            Rule::unique('partners', 'email'),
                        ],
                        'phone' => 'required',
                        'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                    ];
                $validator = Validator::make($request->all(), $validator);
                if ($validator->passes()) {
                    $partner = Partner::create([
                        'name'     => $request->name,
                        'email'    => $request->email,
                        'phone'    => $request->phone,
                        'status'   => 'inactive',
                        'password' => Hash::make($request->password),


                    ]);
                }
            }
        }
        $rfq = Rfq::find($id);

        $validator =
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:5000',
            ];


        // $data['pq_code'] = 'NG' . '-' . date('dmy');
        $today = Carbon::today()->format('dmy');

        // Find the last RFQ code of today from the database
        $lastCode = RFQ::where('pq_code', 'like', 'NG-PQ-' . $today . '-%')->orderBy('id', 'DESC')->first();

        if ($lastCode) {
            // Extract the last numeric part of the pq_code and increment it by 1
            $lastNumber = (int) explode('-', $lastCode->pq_code)[2];
            $newNumber = $lastNumber + 1;
        } else {
            // If there are no RFQ codes for today, start with 1
            $newNumber = 1;
        }

        $data['pq_code'] = 'NG-PQ-' . $today . '-' . $newNumber;



        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {


            if (!empty($rfq)) {


                $rfq->update([
                    'sales_man_id_L1'      => $request->sales_man_id_L1,
                    'sales_man_id_T1'      => $request->sales_man_id_T1,
                    'sales_man_id_T2'      => $request->sales_man_id_T2,
                    'client_id'            => $request->client_id,
                    'partner_id'           => $request->partner_id,
                    'solution_id'          => $request->solution_id,
                    'client_type'          => $request->client_type,
                    'name'                 => $request->name,
                    'email'                => $request->email,
                    'phone'                => $request->phone,
                    'company_name'         => $request->company_name,
                    'designation'          => $request->designation,
                    'address'              => $request->address,
                    'partner_name'         => $request->partner_name,
                    'partner_email'        => $request->partner_email,
                    'partner_phone'        => $request->partner_phone,
                    'partner_company_name' => $request->partner_company_name,
                    'partner_designation'  => $request->partner_designation,
                    'partner_address'      => $request->partner_address,
                    'close_date'           => $request->close_date,
                    'pq_code'              => $data['pq_code'],
                    'pqr_code_one'         => $request->pqr_code_one,
                    'pqr_code_two'         => $request->pqr_code_two,
                    'regular'              => $request->regular,
                    'special'              => $request->special,
                    'tax_status'           => $request->tax_status,
                    'rfq_type'             => 'deal',
                    'validity'             => $request->validity,
                    'payment'              => $request->payment,
                    'payment_mode'         => $request->payment_mode,
                    'delivery'             => $request->delivery,
                    'delivery_location'    => $request->delivery_location,
                    'product_order'        => $request->product_order,
                    'installation_support' => $request->installation_support,
                    'pmt_condition'        => $request->pmt_condition,
                    'terms_nine'           => $request->terms_nine,
                    'terms_ten'            => $request->terms_ten,
                    'terms_eleven'         => $request->terms_eleven,
                    'tax'                  => $request->tax,
                    'vat'                  => $request->vat,
                    'total_price'          => $request->total_price,
                    'price_text'           => $request->price_text,
                    'status'               => 'deal_created',


                ]);
            }

            $rfq_id           = $rfq->id;
            $rfq_code         = $rfq->rfq_code;
            $item_name        = $request->item_name;
            $qty              = $request->qty;
            $unit_price       = $request->unit_price;




            for ($i = 0; $i < count($item_name); $i++) {
                $datasave = [
                    'rfq_id'           => $rfq_id,
                    'rfq_code'         => $rfq_code,
                    'item_name'        => $item_name[$i],
                    'qty'              => $qty[$i],
                    'unit_price'       => $unit_price[$i],


                ];

                DealSas::insert($datasave);
            }


            $rfq_code = Rfq::where('id', $id)->value('rfq_code');
            $user = User::get();
            $name = Auth::user()->name;
            // dd($user);
            Notification::send($user, new DealConvert($name, $rfq_code));

            Toastr::success('The Rfq has been converted into Deal.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }

        // return redirect()->route('deal.index');
        return redirect()->route('single-rfq.show', $rfq_code);
    }

    public function workOrderUpload(Request $request, $id)
    {
        //dd($request->all());
        $data['rfq'] = Rfq::where('rfq_code', $id)->first();
        $document_check = CommercialDocument::where('rfq_id', $data['rfq']->id)->first();

        $mainFileClientPo = $request->file('client_po_pdf');
        if (isset($mainFileClientPo)) {
            $globalFunClientPo = Helper::singleFileUpload($mainFileClientPo);
        } else {
            $globalFunClientPo = ['status' => 0];
        }


        if (!empty($document_check)) {
            CommercialDocument::find($document_check->id)->update([
                'client_po'  => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
            ]);
            Toastr::success('PDF Uploaded Successfully');
        } else {
            CommercialDocument::create([
                'rfq_id'    => $data['rfq']->id,
                'client_po' => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
            ]);
            Toastr::success('PDF Uploaded Successfully');
        }
        $rfq = Rfq::where('rfq_code', $id)->first();
        $rfq->update([
            'status'     => 'workorder_uploaded',
        ]);
        $user = User::latest()->get();

        $name = $data['rfq']->name;
        $rfq_code = $data['rfq']->rfq_code;

        Notification::send($user, new WorkOrder($name, $rfq_code));

        return redirect()->back();
    }

    public function proofPaymentUpload(Request $request, $id)
    {
        //dd($request->all());
        $data['rfq'] = Rfq::where('rfq_code', $id)->first();
        $document_check = CommercialDocument::where('rfq_id', $data['rfq']->id)->first();

        $mainFileClientPo = $request->file('client_po_pdf');
        if (isset($mainFileClientPo)) {
            $globalFunClientPo = Helper::singleFileUpload($mainFileClientPo);
        } else {
            $globalFunClientPo = ['status' => 0];
        }


        if (!empty($document_check)) {
            CommercialDocument::find($document_check->id)->update([
                'client_payment'          => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
            ]);
            Toastr::success('PDF Uploaded Successfully');
        } else {
            CommercialDocument::create([
                'rfq_id' => $data['rfq']->id,
                'client_payment'          => $globalFunClientPo['status'] == 1 ? $globalFunClientPo['file_name'] : '',
            ]);
            Toastr::success('PDF Uploaded Successfully');
        }
        $rfq = Rfq::where('id', $data['rfq']->id)->first();
        //dd($rfq);
        $rfq->update([
            'status'     => 'proof_of_payment_uploaded',
            'sale_date'  => Carbon::now()->format('dmy'),
            'rfq_type'  => 'order',
        ]);

        return redirect()->back();
    }
}
