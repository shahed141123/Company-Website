{{-- add Permission Modal Content --}}
<div id="permissionAdd" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header  text-white" style="background-color: #247297">
                <h5 class="modal-title">Add Permission</h5>
                <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                        style="font-weight: 800;font-size: 10px;"></i></a>
            </div>
            <div class="modal-body p-0 px-2">
                <form action="{{ route('store.permission') }}" method="post"
                    class="from-prevent-multiple-submits pt-2 form-validate-permission-update"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-lg-12 d-flex align-items-center pt-1">
                            <label class="col-form-label col-lg-4 p-0 text-start text-black">Permission
                                Name</label>
                            <div class="input-group">
                                <input name="name" type="text" class="form-control form-control-sm"
                                    placeholder="Enter Permission Name" required style="padding: 2px 10px 0px 10px;">
                            </div>
                        </div>

                        <div class="col-lg-12 d-flex align-items-center pt-1">
                            <label class="col-form-label col-lg-4 p-0 text-start text-black">Group Name</label>
                            <select name="group_name" class="form-control form-select-sm select"
                                data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                data-placeholder="Choose Group" required>

                                <option value="product-management">Product Management</option>
                                <option value="sourcing-management">Sourcing Management</option>
                                <option value="rfq-management">RFQ Management</option>
                                <option value="sales-management">Sales Management</option>
                                <option value="accounts-management">Accounts Management</option>
                                <option value="marketing-management">Marketing Management</option>
                                <option value="industry-solutions">Industry Management</option>
                                <option value="feature-management">Feature Management</option>
                                <option value="blog-management">Blog Management</option>
                                <option value="sitesettings-management">Site settings Management</option>
                                <option value="support-management">Support Management</option>
                                <option value="account-approval-management">Account Management</option>
                                <option value="row-builder-management">Row Builder Management</option>
                                <option value="page-builder-management">Page Builder Management</option>
                                <option value="order-management">Order Management</option>
                                <option value="role-permission-management">Role Management</option>
                                <option value="job-management">Job Management</option>
                                <option value="terms-policy-management">Terms and Policy Management</option>
                                <option value="dashboard">Dashboard</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                        <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Add Permission Modal End --}}

{{-- add Roles Modal Content --}}
<div id="rolesAdd" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header  text-white" style="background-color: #247297">
                <h5 class="modal-title">Add Roles</h5>
                <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                        style="font-weight: 800;font-size: 10px;"></i></a>
            </div>
            <div class="modal-body p-0 px-2">
                <form action="{{ route('store.roles') }}" method="post"
                    class="from-prevent-multiple-submits pt-2 form-validate-permission-update"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-lg-12 d-flex align-items-center pt-1">
                            <label class="col-form-label col-lg-4 p-0 text-start text-black">Roles Name</label>
                            <div class="input-group">
                                <input name="name" type="text" class="form-control form-control-sm"
                                    placeholder="Enter Role Name" required style="padding: 2px 10px 0px 10px;">
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                        <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Add Roles Modal End --}}

{{-- add Roles in Permission Modal Content --}}
<div id="rolesinpermissionAdd" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header  text-white" style="background-color: #247297">
                <h5 class="modal-title">Add Roles</h5>
                <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                        style="font-weight: 800;font-size: 10px;"></i></a>
            </div>
            <div class="modal-body p-0 px-2">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store.roles') }}" method="post"
                            class="from-prevent-multiple-submits pt-2 form-validate-permission-update"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">

                                <div class="col-lg-12 d-flex align-items-center pt-1">
                                    <label class="col-form-label col-lg-4 p-0 text-start text-black">Roles Name</label>
                                    <select name="role_id" class="form-control form-select-sm select"
                                        data-container-css-class="select-sm"
                                        data-minimum-results-for-search="Infinity" data-placeholder="Choose Group"
                                        required>
                                        <option></option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefaultAll">
                                <label class="form-check-label" for="flexCheckDefaultAll">Permission All</label>
                            </div>


                            <hr class="my-2">

                            @foreach ($permission_groups as $group)
                                <div class="row">
                                    <!--  // Start row  -->
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label"
                                                for="flexCheckDefault">{{ $group->group_name }}</label>
                                        </div>
                                    </div>




                                    <div class="col-9">

                                        @php
                                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                        @endphp

                                        @foreach ($permissions as $permission)
                                            <div class="form-check">
                                                <input class="form-check-input" name="permission[]" type="checkbox"
                                                    value="{{ $permission->id }}"
                                                    id="flexCheckDefault{{ $permission->id }}">
                                                <label class="form-check-label"
                                                    for="flexCheckDefault{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach
                                        <br>
                                    </div>

                                </div><!--  // end row  -->
                            @endforeach




                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="button" class="submit_close_btn "
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- Add Roles in Permission Modal End --}}
