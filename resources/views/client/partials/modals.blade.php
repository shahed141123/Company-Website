<!---Collapsible div--->







<div id="update_page" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!---Sub Category Update modal--->

<div id="categoryshow" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!---Sub Category Update modal--->

<!---Sub Sub Category Update modal--->

<div id="update_subsubcategory" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!---Sub Sub Category Update modal--->

<!---Sub Sub Sub Category Update modal--->
<div id="update_subsubsubcategory" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <p></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!---Sub Sub Sub Category Update modal--->





<!--All Setting page Modals -->

@php
    $setting=App\Models\Admin\Setting::first();
@endphp

<div class="modal fade" id="modal-name">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Website Name</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('setting.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="inputEstimatedBudget"> Name First Line</label>
                        <input type="text" name="name" value="{{$setting->name}}" id="inputEstimatedBudget" class="form-control">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="inputEstimatedBudget"> Tag Line</label>
                        <input type="text" name="short_name" value="{{$setting->short_name}}" id="inputEstimatedBudget" class="form-control">
                        @error('short_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-address">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Website Address</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('setting.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-4">
                        <label>Address</label>
                        <textarea class="form-control" name="address" rows="3" placeholder="Enter ...">{{$setting->address}}</textarea>
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Email - 1</label>
                        <input type="text" name="email1" id="inputEstimatedBudget" class="form-control" value="{{$setting->email1}}">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Email - 2</label>
                        <input type="text" name="email2" id="inputEstimatedBudget" class="form-control" value="{{$setting->email2}}">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Mobile No:</label>
                        <input type="text" name="mobile" id="inputEstimatedBudget" class="form-control" value="{{$setting->mobile}}">

                    </div>

                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Phone No:</label>
                        <input type="text" name="phone" id="inputEstimatedBudget" class="form-control" value="{{$setting->phone}}">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Contact Hour</label>
                        <input type="text" name="hour" id="inputEstimatedBudget" class="form-control" value="{{$setting->hour}}">
                        @error('hour')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-logo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Website Logo</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Website Logo </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="file" name="logo" class="form-control"  id="image"/>
                            @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0"> </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <img id="showImage" src="{{ (!empty($setting->logo)) ? url('upload/logoimage/'.$setting->logo):url('upload/no_image.jpg') }}" alt="Ngen IT" style="width:100px; height: 100px;"  >
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-favicon">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Website Favicon</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Website Favicon </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="file" name="favicon" class="form-control"  id="image1"/>
                            @error('favicon')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0"> </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <img id="showImage1" src="{{ (!empty($setting->favicon)) ? url('upload/faviconimage/'.$setting->favicon):url('upload/no_image.jpg') }}" alt="Ngen It" style="width:100px; height: 100px;"  >
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-social">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Website Name</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('setting.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Facebook Url</label>
                        <input type="text" name="facebook" id="inputEstimatedBudget" class="form-control" value="{{$setting->facebook}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Twitter Url</label>
                        <input type="text" name="twitter" id="inputEstimatedBudget" class="form-control" value="{{$setting->twitter}}">
                    </div>
                    <div class="mb-4">
                        <label for="inputEstimatedBudget">Linked In Url</label>
                        <input type="text" name="linked_in" id="inputEstimatedBudget" class="form-control" value="{{$setting->linked_in}}">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-light">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
