<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\FrontendNavbarMenu;
use App\Models\Admin\FrontendNavbarMenuItem;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\FrontendNavbarModule;

class FrontendNavbarModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['modules'] = FrontendNavbarModule::latest()->get();
        $data['menus'] = FrontendNavbarMenu::latest()->get();
        $data['menuItems'] = FrontendNavbarMenuItem::orderBy('id','DESC')->select('frontend_navbar_menu_items.id','frontend_navbar_menu_items.frontend_navbar_module_id','frontend_navbar_menu_items.frontend_navbar_menu_id','frontend_navbar_menu_items.name')->get();
        return view('admin.pages.frontendNavbarModule.all', $data);
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
                'name' => 'nullable|string',
                'type' => 'nullable',
            ]
        );

        if ($validator->passes()) {
            FrontendNavbarModule::create([
                'name' => $request->name,
                'type' => $request->type,
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
                'name' => 'nullable|string',
                'type' => 'nullable',
            ]
        );

        if ($validator->passes()) {
            FrontendNavbarModule::find($id)->update([
                'name' => $request->name,
                'type' => $request->type,
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
        FrontendNavbarModule::find($id)->delete();
    }
}
