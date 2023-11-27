<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\AdminMenuBuilder;
use Illuminate\Support\Facades\Validator;

class AdminMenuBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menus'] = AdminMenuBuilder::all();
        return view('admin.pages.adminMenuBuilder.all',$data);
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
                'name' => 'required|unique:admin_menu_builders',

            ],
            [
                'required' => 'This menu name field is needed.',
                'unique' => 'This menu is already taken.',
            ]
        );

        if ($validator->passes()) {
            AdminMenuBuilder::create([
                'module_id'       => $request->module_id,
                'parent__id'      => $request->parent__id,
                'name'            => $request->name,
                'url'             => $request->url,
                'icon'            => $request->icon,
                'is_module'       => $request->is_module,
                'is_parent'       => $request->is_parent,
                'route_name'      => $request->route_name,
                'permission_name' => $request->permission_name,
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

            AdminMenuBuilder::find($id)->update([
                'module_id'       => $request->module_id,
                'parent__id'      => $request->parent__id,
                'name'            => $request->name,
                'url'             => $request->url,
                'icon'            => $request->icon,
                'is_module'       => $request->is_module,
                'is_parent'       => $request->is_parent,
                'route_name'      => $request->route_name,
                'permission_name' => $request->permission_name,
            ]);
            Toastr::success('Data Updated Successfully.');

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
        AdminMenuBuilder::find($id)->delete();
    }
}
