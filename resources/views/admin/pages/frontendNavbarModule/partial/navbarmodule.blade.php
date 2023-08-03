<div class="w-50 mx-auto">

    <div class="d-flex align-items-center">
        <div class="text-success nav-link cat-tab3"
            style="position: relative;z-index: 999;margin-bottom: -24px;">
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#moduleAdd" type="button"
                class="mx-3 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                <span class="btn-labeled-icon bg-black bg-opacity-20">
                    <i class="icon-plus2"></i>
                </span>
                Add
            </a>

            <div class="text-center">
                <h5 class="ms-1 mb-0" style="color: #247297;">Navbar Module</h5>
            </div>
        </div>

    </div>
    <div>
        <table class="table moduleDT table-bordered table-hover text-center ">
            <thead>
                <tr>
                    <th width="20%">Sl No:</th>
                    <th width="30%">Module Name</th>
                    <th width="30%">Module Type</th>
                    <th width="20%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($modules)
                    @foreach ($modules as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td class="text-center">{{ $item->name }}</td>
                            <td class="text-center">{{ $item->type }}</td>
                            <td class="text-center">
                                <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#update_module_{{ $item->id }}">
                                    <i class="icon-pencil"></i>
                                </a>
                                <!---Navbar Module Update modal--->
                                <div id="update_module_{{ $item->id }}" class="modal fade" tabindex="-1"
                                    style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Frontend Navbar Module</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body border br-7">

                                                <form method="post"
                                                    action="{{ route('frontend-navbar-module.update', $item->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="container p-2 mx-2">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="basicpill-firstname-input">Module Name</label>
                                                                    <input type="text" maxlength="80" class="form-control form-control-sm"
                                                                        placeholder="Enter Module Name" name="name" value="{{ $item->name }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="basicpill-email-input">Module Type</label>
                                                                    <select name="type" class="form-control select"
                                                                        data-placeholder="Chose Module Type" required>
                                                                        <option></option>
                                                                        <option @selected($item->type == 'column') value="column" >Column</option>
                                                                        <option @selected($item->type == 'content') value="content" >Content</option>
                                                                        <option @selected($item->type == 'double_column') value="double_column" >Double Column</option>
                                                                        <option @selected($item->type == 'content_with_column') value="content_with_column" >Content With Column</option>
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
