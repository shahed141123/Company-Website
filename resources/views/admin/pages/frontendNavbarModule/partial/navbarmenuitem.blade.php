<div class="w-75 mx-auto">

    <div class="d-flex align-items-center">
        <div class="text-success nav-link cat-tab3" style="position: relative;z-index: 999;margin-bottom: -38px;">
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#menuitemAdd" type="button"
                class="mx-3 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                <span class="btn-labeled-icon bg-black bg-opacity-20">
                    <i class="icon-plus2"></i>
                </span>
                Add
            </a>

            <div class="text-center">
                <h5 class="ms-1 mb-0" style="color: #247297;margin-left:6rem !important;">Navbar Menu Item</h5>
            </div>
        </div>

    </div>
    <div>
        <table class="table menuItemDT table-bordered table-hover text-center ">
            <thead>
                <tr>
                    <th width="10%">Sl No:</th>
                    <th width="20%">Module Name</th>
                    <th width="20%">Menu Name</th>
                    <th width="30%">Menu Item Name</th>
                    <th width="20%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($menuItems)
                    @foreach ($menuItems as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td class="text-center">
                                {{ App\Models\Admin\FrontendNavbarModule::where('id', $item->frontend_navbar_module_id)->value('name') }}
                            </td>
                            <td class="text-center">
                                {{ App\Models\Admin\FrontendNavbarMenu::where('id', $item->frontend_navbar_menu_id)->value('name') }}
                            </td>
                            <td class="text-center">{{ $item->name }}</td>
                            <td class="text-center">
                                <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#update_menu_{{ $item->id }}">
                                    <i class="icon-pencil"></i>
                                </a>
                                <!---Navbar Module Update modal--->
                                <div id="update_menu_{{ $item->id }}" class="modal fade" tabindex="-1"
                                    style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Frontend Navbar Menu Item</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body border br-7">

                                                <form method="post"
                                                    action="{{ route('frontend-navbar-menu-items.update', $item->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
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
                                                                            <option @selected($item->frontend_navbar_module_id == $module->id)
                                                                                value="{{ $module->id }}">
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
                                                                            <option @selected($item->frontend_navbar_menu_id == $menu->id)
                                                                                value="{{ $menu->id }}">
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
                                                                        placeholder="Enter Menu Name" name="name" value="{{ $item->name }}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="basicpill-firstname-input">Menu Item Link</label>
                                                                    <input type="text" maxlength="80" class="form-control form-control-sm"
                                                                        placeholder="Enter Menu Link" name="link" value="{{ $item->link }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="basicpill-firstname-input">Menu Item Image</label>
                                                                    <input type="file" maxlength="80" class="form-control form-control-sm"
                                                                        placeholder="Enter Menu Image" name="image" value="{{ $item->image }}" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="modal-footer border-0 pt-1 pb-0 pe-0">

                                                        <button type="submit"
                                                            class="submit_btn from-prevent-multiple-submits"
                                                            style="padding: 10px;">Submit</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---Navbar Module Update modal--->
                                <a href="{{ route('frontend-navbar-module.destroy', [$item->id]) }}"
                                    class="text-danger delete mx-2">
                                    <i class="delete icon-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

</div>
