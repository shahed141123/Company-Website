@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Bulk Email Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="content">
            <div class="card">
                <div class="card-body">
                    <form id="form-validate-mail" action="{{ route('bulkEmail.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="col-form-label col-form-label-sm">Partner Mail</label>
                                    <select name="recipients[]" class="form-control multiselect" multiple="multiple"
                                        data-include-select-all-option="true" data-enable-filtering="true"
                                        data-enable-case-insensitive-filtering="true">
                                        @foreach ($partners as $partner)
                                            <option value="{{ optional($partner)->email }}">{{ optional($partner)->email }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="col-form-label col-form-label-sm">Client Mail</label>
                                    <select name="recipients[]" class="form-control multiselect" multiple="multiple"
                                        data-include-select-all-option="true" data-enable-filtering="true"
                                        data-enable-case-insensitive-filtering="true">
                                        @foreach ($clients as $client)
                                            <option value="{{ optional($client)->email }}">{{ optional($client)->email }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="col-form-label col-form-label-sm">Newsletter Mail</label>
                                    <select name="recipients[]" class="form-control multiselect" multiple="multiple"
                                        data-include-select-all-option="true" data-enable-filtering="true"
                                        data-enable-case-insensitive-filtering="true">
                                        @foreach ($news_letters as $news_letter)
                                            <option value="{{ optional($news_letter)->email }}">
                                                {{ optional($news_letter)->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="col-form-label col-form-label-sm col-lg-3">Subject</label>
                                    <input name="subject" type="text" name="subject"
                                        class="form-control form-control-sm maxlength"
                                        placeholder="e.g: Sent Your Resume letter" maxlength="150">
                                </div>
                            </div>
                        </div>
                        <!-- Row 1 -->
                        <h2 class="d-flex justify-content-center">Message</h2>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input name="row_one_title" type="text" class="form-control form-control-sm"
                                        placeholder="Row One Title">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input name="row_one_sub_title" type="text" class="form-control form-control-sm"
                                        placeholder="Row One Sub Title">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input name="date" type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input name="row_one_btn" type="text" class="form-control form-control-sm"
                                        placeholder="Row One Button Name">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input name="row_one_btn_link" type="text" class="form-control form-control-sm"
                                        placeholder="Row One Button Link">
                                </div>
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input name="banner_image_one" type="file" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input name="banner_image_two" type="file" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <textarea name="note" rows="1" cols="3" class="form-control form-control-sm"
                                        placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Row 3 -->
                        <div class="row mb-3">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Button Name</th>
                                            <th>Button Link</th>
                                            <th class="d-flex justify-content-center">
                                                <a href="#" class="text-success add-row">
                                                    <i class="fas fa-plus-square text-success fa-3x"></i>
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <input name="product_image" type="file"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-lg-12">
                                                    <input name="product_title" type="text"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-lg-12">
                                                    <input name="product_sub_title" type="text"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-lg-12">
                                                    <input name="product_button_name" type="text"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-lg-12">
                                                    <input name="product_button_link" type="text"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="#" class="text-danger delete-row">
                                                    <i class="fa-solid fa-trash text-danger fa-2x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Row 4 -->
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input name="row_four_title" type="text" class="form-control form-control-sm"
                                        placeholder="Row Four Title">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input name="row_four_sub_title" type="text" class="form-control form-control-sm"
                                        placeholder="Row Four Sub Title">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input name="row_four_time" class="form-control form-control-sm" type="date">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input name="row_four_btn_name" class="form-control form-control-sm" type="text"
                                        placeholder="Row Four Button Name">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input name="row_four_btn_link" class="form-control form-control-sm" type="text"
                                        placeholder="Row Four Button Link">
                                </div>
                            </div>
                        </div>
                        <!-- Row 5 -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input name="footer_link_one_name" type="text"
                                        class="form-control form-control-sm" placeholder="Footer Link One Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <input name="footer_link_one" type="text" class="form-control form-control-sm"
                                            placeholder="Footer Link One">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input name="footer_link_two_name" type="text"
                                        class="form-control form-control-sm" placeholder="Footer Link Two Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input name="footer_link_two" type="text" class="form-control form-control-sm"
                                        placeholder="Footer Link Two">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input name="footer_link_three_name" type="text"
                                        class="form-control form-control-sm" placeholder="Footer Link Three Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input name="footer_link_three" type="text" class="form-control form-control-sm"
                                        placeholder="Footer Link Three">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-end">
                            <button type="reset" class="btn btn-light">Reset</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection


@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            // Add new row
            $('.add-row').click(function() {
                // create a new row and an empty cell
                const newRow = $('<tr><td></td></tr>');

                // create the remaining cells
                const cols = `
                    <td><input name="product-image" type="file" class="form-control form-control-sm"></td>
                    <td><input name="product-title" type="text" class="form-control form-control-sm" ></td>
                    <td><input name="product-sub-title" type="text" class="form-control form-control-sm"></td>
                    <td><input name="product-button-name" type="text" class="form-control form-control-sm" ></td>
                    <td><input name="product-button-link" type="text" class="form-control form-control-sm" ></td>
                    <td class="d-flex justify-content-center">
                        <a href="#" class="text-danger delete-row"><i class="fa-solid fa-trash text-danger fa-2x"></i></a>
                    </td>
                `;

                // add the cells to the row
                newRow.append(cols);

                // add the row to the table
                $('table tbody').append(newRow);

                // update the ID field of the added row
                $('table tbody tr').each((i, elem) => $(elem).find('td:first').text(i + 1));
            });


            // Remove row
            $('table').on('click', '.delete-row', function() {
                $(this).closest('tr').remove();

                // update the ID field of existing rows
                $('table tbody tr').each(function(i) {
                    $(this).find('td:first').text(i + 1);
                });
            });

        });
    </script>
@endpush
