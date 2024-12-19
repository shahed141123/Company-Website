<x-admin-app-layout :title="'Solution'">
    <!-- Main Content Start -->
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Manage Solutions Pages</h3>
            <div class="card-toolbar">
                <a href="{{ route('admin.solution-cms.create') }}" class="btn btn-sm btn-primary">
                    create
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="data_table table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                            <th width="5%">Sl</th>
                            <th>Template</th>
                            <th>Solution No</th>
                            <th>Status</th>
                            <th>Change</th>
                            <th>Created Date</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>
                                <div>
                                    <img class="img-fluid" width="50px" src="./assets/template1Preview.png"
                                        class="img-fluid" alt="" />
                                </div>
                            </td>
                            <td>Template One</td>
                            <td>
                                <span class="badge badge-primary">Not Active</span>
                            </td>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-50px" type="checkbox" value=""
                                        id="flexSwitchChecked" checked="checked" />
                                    <label class="form-check-label" for="flexSwitchChecked">
                                    </label>
                                </div>
                            </td>
                            <td>16 Nov 2024</td>
                            <td class="text-end">
                                <a href="javascript:void(0)"
                                    class="btn btn-sm btn-icon btn-primary btn-active-color-primary"
                                    data-bs-toggle="modal" data-bs-target="#previewFull">
                                    <i class="fa-solid fa-expand fs-6 text-white" title="Show Application"
                                        aria-hidden="true"></i>
                                    <span class="sr-only">Show Application</span>
                                </a>
                                <!-- Template Show -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="previewFull" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Solutin Template One
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div>
                                                    <img src="./assets/template1Preview.png" class="img-fluid"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Template Show Eend -->
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-pen fs-6 text-white" title="Edit Application"
                                        aria-hidden="true"></i><span class="sr-only">Edit Application</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-trash fs-6 text-white" title="Delete Application"
                                        aria-hidden="true"></i><span class="sr-only">Delete Application</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>
                                <div>
                                    <img class="img-fluid" width="50px" src="./assets/template1Preview.png"
                                        class="img-fluid" alt="" />
                                </div>
                            </td>
                            <td>Template Two</td>
                            <td>
                                <span class="badge badge-primary">Not Active</span>
                            </td>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-50px" type="checkbox" value=""
                                        id="flexSwitchChecked" checked="checked" />
                                    <label class="form-check-label" for="flexSwitchChecked">
                                    </label>
                                </div>
                            </td>
                            <td>16 Nov 2024</td>
                            <td class="text-end">
                                <a href="javascript:void(0)"
                                    class="btn btn-sm btn-icon btn-primary btn-active-color-primary"
                                    data-bs-toggle="modal" data-bs-target="#previewFull2">
                                    <i class="fa-solid fa-expand fs-6 text-white" title="Show Application"
                                        aria-hidden="true"></i>
                                    <span class="sr-only">Show Application</span>
                                </a>
                                <!-- Template Show -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="previewFull2" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Solutin Template Two
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div>
                                                    <img src="./assets/template2Preview.png" class="img-fluid"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Template Show Eend -->
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-pen fs-6 text-white" title="Edit Application"
                                        aria-hidden="true"></i><span class="sr-only">Edit Application</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-trash fs-6 text-white" title="Delete Application"
                                        aria-hidden="true"></i><span class="sr-only">Delete Application</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>3</td>
                            <td>
                                <div>
                                    <img class="img-fluid" width="50px" src="./assets/template1Preview.png"
                                        class="img-fluid" alt="" />
                                </div>
                            </td>
                            <td>Template Three</td>
                            <td>
                                <span class="badge badge-primary">Active</span>
                            </td>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-50px" type="checkbox" value=""
                                        id="flexSwitchChecked" checked="checked" />
                                    <label class="form-check-label" for="flexSwitchChecked">
                                    </label>
                                </div>
                            </td>
                            <td>16 Nov 2024</td>
                            <td class="text-end">
                                <a href="javascript:void(0)"
                                    class="btn btn-sm btn-icon btn-primary btn-active-color-primary"
                                    data-bs-toggle="modal" data-bs-target="#previewFull3">
                                    <i class="fa-solid fa-expand fs-6 text-white" title="Show Application"
                                        aria-hidden="true"></i>
                                    <span class="sr-only">Show Application</span>
                                </a>
                                <!-- Template Show -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="previewFull3" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Solutin Template Three
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div>
                                                    <img src="./assets/template3Preview.png" class="img-fluid"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Template Show Eend -->
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-pen fs-6 text-white" title="Edit Application"
                                        aria-hidden="true"></i><span class="sr-only">Edit Application</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-trash fs-6 text-white" title="Delete Application"
                                        aria-hidden="true"></i><span class="sr-only">Delete Application</span>
                                </a>
                            </td>
                        </tr>
                        <tr class="">
                            <td>4</td>
                            <td>
                                <div>
                                    <img class="img-fluid" width="50px" src="./assets/template1Preview.png"
                                        class="img-fluid" alt="" />
                                </div>
                            </td>
                            <td>Template Four</td>
                            <td>
                                <span class="badge badge-primary">Active</span>
                            </td>
                            <td>
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-50px" type="checkbox" value=""
                                        id="flexSwitchChecked" checked="checked" />
                                    <label class="form-check-label" for="flexSwitchChecked">
                                    </label>
                                </div>
                            </td>
                            <td>16 Nov 2024</td>
                            <td class="text-end">
                                <a href="javascript:void(0)"
                                    class="btn btn-sm btn-icon btn-primary btn-active-color-primary"
                                    data-bs-toggle="modal" data-bs-target="#previewFull4">
                                    <i class="fa-solid fa-expand fs-6 text-white" title="Show Application"
                                        aria-hidden="true"></i>
                                    <span class="sr-only">Show Application</span>
                                </a>
                                <!-- Template Show -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="previewFull4" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Solutin Template Four
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div>
                                                    <img src="./assets/template4Preview.png" class="img-fluid"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Template Show Eend -->
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-pen fs-6 text-white" title="Edit Application"
                                        aria-hidden="true"></i><span class="sr-only">Edit Application</span>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-primary btn-active-color-primary">
                                    <i class="fa-solid fa-trash fs-6 text-white" title="Delete Application"
                                        aria-hidden="true"></i><span class="sr-only">Delete Application</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Main Content End -->
</x-admin-app-layout>
