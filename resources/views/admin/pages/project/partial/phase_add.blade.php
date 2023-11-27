<div class="col-md-12">
    <h5 class="main_color pb-2">Phase Details</h5>
    <!-- Form Field Start -->
    <div class="row gx-2">
        <div class="col-lg-4 col-sm-6">
            <div class="form-group mb-2">
                <label class="control-label main_color fw-bold label_size">Type
                    <span class="text-danger"> * </span></label>
                <select class="form-select w-100 select-wizard clientID"
                    data-allow-clear="true" placeholder="Choose Client"
                    name="type" required>
                    <option class="common_client" value="">
                        Select Type
                    </option>
                    <option value="development">Development</option>
                    <option value="deployment">Deployment</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="form-group mb-2">
                <label
                    class="control-label main_color fw-bold label_size">Phase
                    <span class="text-danger"> * </span></label>
                <select class="form-select w-100 select-wizard clientID"
                    data-allow-clear="true" placeholder="Select Phase"
                    name="phase" required>
                    <option class="common_client" value="">
                        Select Phase
                    </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="form-group mb-2">
                <label
                    class="control-label main_color fw-bold label_size">Phase
                    Id</label>
                <input maxlength="100" type="text" name="phase_id"
                    class="form-control" placeholder="Enter Phase ID"
                    id="phase_id"
                    style="height: 26px !important;font-size: 12px !important;" />
            </div>
        </div>
        <div class="col-lg-12 col-sm-6">
            <div class="form-group mb-2">
                <label
                    class="control-label main_color fw-bold label_size">Phase
                    Title
                    <span class="text-danger"> * </span></label>
                <input maxlength="100" type="text" name="phase_title"
                    class="form-control" placeholder="Enter Phase Title"
                    id="phase_title" required
                    style="height: 26px !important;font-size: 12px !important;" />
            </div>
        </div>
    </div>
    <!-- Form Field End -->
    <div class="d-flex justify-content-end">
        <button class="btn btn-next nextBtn pull-right mt-3" type="button">
            Next
        </button>
    </div>
</div>
