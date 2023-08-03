<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function AllPermission(){

        $data['permissions'] = Permission::all();
        $data['roles'] = Role::all();
        $data['class'] = 'permission';
        $data['permission_groups'] = User::getpermissionGroups();

        // return view('admin.pages.roles.permission.all_permission',$data);
        return view('admin.pages.roles.roles_permission',$data);

    } // End Method


    public function AddPermission(){
        return view('admin.pages.roles.permission.add_permission');
    }// End Method


    public function StorePermission(Request $request){


        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            $role = Permission::create([
                'name' => $request->name,
                'group_name' => $request->group_name,

            ]);
            Toastr::success('Data Inserted Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }

        return redirect()->route('all.permission');

    }// End Method


    public function EditPermission($id){

       $permission = Permission::findOrFail($id);
       return view('admin.pages.roles.permission.edit_permission',compact('permission'));

    }// End Method



    public function UpdatePermission(Request $request){
        $per_id = $request->id;


        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            Permission::find($per_id)->update([
                'name' => $request->name,
            'group_name' => $request->group_name,
            ]);
            Toastr::success('Data Inserted Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }

        return redirect()->route('all.permission');


    }// End Method


    public function DeletePermission($id){

         Permission::findOrFail($id)->delete();
     return redirect()->route('all.permission');


    }// End Method

 ///////////////////// All Roles ////////////////////



   public function AllRoles(){

        $data['roles'] = Role::all();
        $data['permissions'] = Permission::all();
        $data['class'] = 'roles';
        $data['permission_groups'] = User::getpermissionGroups();

        // return view('admin.pages.roles.all_roles',$data);
        return view('admin.pages.roles.roles_permission',$data);

    } // End Method



    public function AddRoles(){
        return view('admin.pages.roles.add_roles');
    }// End Method


    public function StoreRoles(Request $request){

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|unique:roles,name|max: 70',
            ],
        );

        if ($validator->passes()) {
            Role::create([
                'name'    => $request->name,
            ]);
            Toastr::success('Data Inserted Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->route('all.roles');


    }// End Method


    public function EditRoles($id){
        $roles = Role::findOrFail($id);
        return view('admin.pages.roles.edit_roles',compact('roles'));
    }// End Method


    public function UpdateRoles(Request $request){

        $role_id = $request->id;

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            Role::find($role_id)->update([
                'name'    => $request->name,
            ]);
            Toastr::success('Data Updated Successfully');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->route('all.roles');

    }// End Method


    public function DeleteRoles($id){

     Role::findOrFail($id)->delete();
     return redirect()->route('all.roles');

    }// End Method




    ///////////////// Add role Permission all method ///////////////


    public function AddRolesPermission(){
         $roles = Role::all();
         $permissions = Permission::all();
         $permission_groups = User::getpermissionGroups();
         return view('admin.pages.roles.add_roles_permission',compact('roles','permissions','permission_groups'));
    }// End Method



    public function RolePermissionStore(Request $request){



        $data = array();
        $permissions = $request->permission;

        foreach($permissions as $key => $item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;
            DB::table('role_has_permissions')->insert($data);

        }

        Toastr::success('Role Permission Added Successfully');

        return redirect()->route('all.roles.permission');

    }// End Method




   public function AllRolesPermission(){

        $data['permissions'] = Permission::all();
        $data['roles'] = Role::all();
        $data['class'] = 'rolesinpermission';
        $data['permission_groups'] = User::getpermissionGroups();
        // return view('admin.pages.roles.all_roles_permission',compact('roles'));
        return view('admin.pages.roles.roles_permission',$data);


    } // End Method



    public function AdminRolesEdit($id){

        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('admin.pages.roles.role_permission_edit',compact('role','permissions','permission_groups'));
    } // End Method



    public function AdminRolesUpdate(Request $request,$id){
        $role = Role::findOrFail($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
           $role->syncPermissions($permissions);
        }

        Toastr::success('Role Permission Updated Successfully');

        return redirect()->route('all.roles.permission');

    }// End Method


    public function AdminRolesDelete($id){

        $role = Role::findOrFail($id);
        if (!is_null($role)) {
            $role->delete();
        }



        //return redirect()->back()->with($notification);

    }// End Method








}
