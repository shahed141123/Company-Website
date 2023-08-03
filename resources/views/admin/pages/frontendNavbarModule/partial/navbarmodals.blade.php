<!---Module Add modal--->
<div id="moduleAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Frontend Navbar Module</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body border br-7">

                <form method="post" action="{{ route('frontend-navbar-module.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container p-2 mx-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-firstname-input">Module Name</label>
                                    <input type="text" maxlength="80" class="form-control form-control-sm"
                                        placeholder="Enter Module Name" name="name" value="{{ old('name') }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-email-input">Module Type</label>
                                    <select name="type" class="form-control select"
                                        data-minimum-results-for-search="Infinity"
                                        data-placeholder="Chose Module Type" required>
                                        <option></option>
                                        <option value="column">Column</option>
                                        <option value="content">Content</option>
                                        <option value="double_column">Double Column</option>
                                        <option value="content_with_column">Content With Column</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                        <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 10px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!---Module Add modal--->

<!---Menu Add modal--->
<div id="menuAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Frontend Navbar Module</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body border br-7">

                <form method="post" action="{{ route('frontend-navbar-menu.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container p-2 mx-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-email-input">Module Name</label>
                                    <select name="frontend_navbar_module_id" class="form-control select"
                                        data-minimum-results-for-search="Infinity"
                                        data-placeholder="Chose Module Name" required>
                                        <option></option>
                                        @foreach ($modules as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-firstname-input">Menu Name</label>
                                    <input type="text" maxlength="80" class="form-control form-control-sm"
                                        placeholder="Enter Menu Name" name="name" value="{{ old('name') }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-firstname-input">Short Description</label>
                                    <textarea class="form-control" name="short_description" rows="1"
                                            placeholder="Enter Short Description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-firstname-input">Menu Link</label>
                                    <input type="text" maxlength="80" class="form-control form-control-sm"
                                        placeholder="Enter Menu Link" name="link" value="{{ old('link') }}" />
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                        <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 10px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!---Menu Add modal--->

<!---Menu Item Add modal--->
<div id="menuitemAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Frontend Navbar Module</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body border br-7">

                <form method="post" action="{{ route('frontend-navbar-menu-items.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container p-2 mx-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label"
                                        for="basicpill-email-input">Module Name</label>
                                    <select name="frontend_navbar_module_id" class="form-control select"
                                        data-minimum-results-for-search="Infinity" data-placeholder="Chose Module Name" required>
                                        <option></option>
                                        @foreach ($modules as $module)
                                            <option value="{{ $module->id }}">
                                                {{ $module->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label"
                                        for="basicpill-firstname-input">Menu Name</label>
                                        <select name="frontend_navbar_menu_id" class="form-control select"
                                        data-minimum-results-for-search="Infinity" data-placeholder="Chose Module Name" required>
                                        <option></option>
                                        @foreach ($menus as $menu)
                                            <option value="{{ $menu->id }}">
                                                {{ $menu->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label"
                                        for="basicpill-firstname-input">Menu Item Name</label>
                                        <input type="text" maxlength="80" class="form-control form-control-sm"
                                        placeholder="Enter Menu Name" name="name"/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label"
                                        for="basicpill-firstname-input">Menu Item Link</label>
                                    <input type="text" maxlength="80" class="form-control form-control-sm"
                                        placeholder="Enter Menu Link" name="link"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-1">
                                    <label class="form-label"
                                        for="basicpill-firstname-input">Menu Item Image</label>
                                    <input type="file" maxlength="80" class="form-control form-control-sm"
                                        placeholder="Enter Menu Image" name="image"/>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                        <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 10px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!---Menu Add modal--->
