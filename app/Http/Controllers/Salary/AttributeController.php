<?php

namespace App\Http\Controllers\Salary;

use Illuminate\Http\Request;
use App\Models\Admin\Attribute;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['attributes'] = Attribute::latest()->get();
        return view('admin.pages.attribute.all', $data);
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
        $validator = Validator::make(
            $request->all(),
            [
                'entity_id' => 'required|exists:entities,id',
                'category_ids' => 'required|array',
                'category_ids.*' => 'exists:categories,id',
                'name' => 'required|max:255',
                'data_ids' => 'required|array',
                'data_ids.*' => 'exists:data,id',
            ],
            [
                'entity_id.required' => 'The entity ID field is required.',
                'entity_id.exists' => 'The selected entity ID is invalid.',
                'category_ids.required' => 'The category IDs field is required.',
                'category_ids.array' => 'The category IDs must be an array.',
                'category_ids.*.exists' => 'One or more selected category IDs are invalid.',
                'name.required' => 'The name field is required.',
                'name.max' => 'The name may not be greater than :max characters.',
                'data_ids.required' => 'The data IDs field is required.',
                'data_ids.array' => 'The data IDs must be an array.',
                'data_ids.*.exists' => 'One or more selected data IDs are invalid.',
            ]
        );

        if ($validator->passes()) {
            Attribute::create([
                'entity_id'    => $request->entity_id,
                'category_ids' => json_encode($request->category_ids),
                'name'         => $request->name,
                'data_ids'     => json_encode($request->data_ids),
            ]);
            Toastr::success('Data Insert Successfully.');
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
        $validator = Validator::make(
            $request->all(),
            [
                'entity_id' => 'required|exists:entities,id',
                'category_ids' => 'required|array',
                'category_ids.*' => 'exists:categories,id',
                'name' => 'required|max:255',
                'data_ids' => 'required|array',
                'data_ids.*' => 'exists:data,id',
            ],
            [
                'entity_id.required' => 'The entity ID field is required.',
                'entity_id.exists' => 'The selected entity ID is invalid.',
                'category_ids.required' => 'The category IDs field is required.',
                'category_ids.array' => 'The category IDs must be an array.',
                'category_ids.*.exists' => 'One or more selected category IDs are invalid.',
                'name.required' => 'The name field is required.',
                'name.max' => 'The name may not be greater than :max characters.',
                'data_ids.required' => 'The data IDs field is required.',
                'data_ids.array' => 'The data IDs must be an array.',
                'data_ids.*.exists' => 'One or more selected data IDs are invalid.',
            ]
        );

        if ($validator->passes()) {
            Attribute::find($id)->update([
                'entity_id'    => $request->entity_id,
                'category_ids' => json_encode($request->category_ids),
                'name'         => $request->name,
                'data_ids'     => json_encode($request->data_ids),
            ]);

            Toastr::success('Data Updated Successfully.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attribute::find($id)->delete();
    }
}
