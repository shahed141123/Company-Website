<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\FrontendNavbarMenu;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\FrontendNavbarModule;

class FrontendNavbarMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['frontendNavbarModules'] = FrontendNavbarModule::select('frontend_navbar_modules.id', 'frontend_navbar_modules.name')->get();
        $data['frontendNavbarMenus']     = FrontendNavbarMenu::latest()->get();
        return view('admin.pages.frontendNavbarMenu.all', $data);
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
                'frontend_navbar_module_id' => 'nullable|integer',
                'name'                      => 'nullable|string',
                'short_description'         => 'nullable|string',
                'link'                      => 'nullable',
            ]
        );

        if ($validator->passes()) {
            FrontendNavbarMenu::create([
                'frontend_navbar_module_id' => $request->frontend_navbar_module_id,
                'name'                      => $request->name,
                'short_description'         => $request->short_description,
                'link'                      => $request->link,
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
                'frontend_navbar_module_id' => 'nullable|integer',
                'name'                      => 'nullable|string',
                'short_description'         => 'nullable|string',
                'link'                      => 'nullable',
            ]
        );

        if ($validator->passes()) {
            FrontendNavbarMenu::find($id)->update([
                'frontend_navbar_module_id' => $request->frontend_navbar_module_id,
                'name'                      => $request->name,
                'short_description'         => $request->short_description,
                'link'                      => $request->link,
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
        FrontendNavbarMenu::find($id)->delete();
    }
}
