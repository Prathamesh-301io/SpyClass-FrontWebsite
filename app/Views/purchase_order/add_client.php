    <!-- add client mdoal form  -->
    <div class="modal fade " id="Client_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form id="fAddNewClient" method="post" action="">
                    <div class="modal-header">
                        <h4 class="modal-title" id="">Add Client</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="company_id" value="">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_name">Company name <span style="color: red;">*</span></label>
                                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_name">Company email <span style="color: red;">*</span></label>
                                    <input type="email" name="company_email" class="form-control" id="company_email" placeholder="Enter company email" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address">Address <span style="color: red;">*</span></label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_gstin">GSTIN <span style="color: red;">*</span></label>
                                    <input type="text" name="company_gstin" class="form-control" id="company_gstin" placeholder="Enter company GSTIN." value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="city">City <span style="color: red;">*</span></label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter city." value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="state">State <span style="color: red;">*</span></label>
                                    <input type="text" name="state" class="form-control" id="state" placeholder="Enter state." value="" required >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="zipcode">Zipcode <span style="color: red;">*</span></label>
                                    <input type="number" name="zipcode" class="form-control" id="zipcode" placeholder="Enter zipcode." value="" require >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-white border-0" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn action-btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>