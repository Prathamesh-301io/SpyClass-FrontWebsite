    <!-- add client mdoal form  -->
    <div class="modal fade " id="GST_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <form id="fAddNewClient" method="post" action=""> -->
                <div class="modal-header">
                    <h4 class="modal-title" id=""><strong>Select your GST type</strong></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gst_type" id="gst_value" value="GST">
                                <label class="form-check-label" for="gst_value">
                                    GST <br> <strong><?= !empty($GstData[0]['gst'])?$GstData[0]['gst']:0 ?>%</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gst_type" id="sgst_and_cgst" value="CGST_SGST">
                                    <label class="form-check-label" for="sgst_and_cgst">
                                        CGST & SGST <br> 
                                        <strong><?= !empty($GstData[0]['cgst'])?$GstData[0]['cgst']:0 ?>% & <?= !empty($GstData[0]['sgst'])?$GstData[0]['sgst']:0 ?></strong>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="gross_amount_hidden" name="gross_amount">
                <input type="hidden" id="gst_hidden" name="gst">
                <input type="hidden" id="cgst_hidden" name="cgst">
                <input type="hidden" id="sgst_hidden" name="sgst">
                <input type="hidden" id="total_payable_hidden" name="total_payable">
                <div class="modal-footer">
                        <button type="button" class="btn bg-white border-0" data-dismiss="modal">Close</button>
                        <!-- <button type="submit" class="btn action-btn">Save</button> -->
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>