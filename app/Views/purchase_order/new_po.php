<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content') ?>
<style>
    select.form-control option:disabled {
        color: rgba(115, 61, 217, 1) !important;
    }

    textarea:focus {
        border: 1px solid rgba(115, 61, 217, 1) !important;
    }

    .card-footer {
        box-shadow: 0px -4px 24px 0px rgba(0, 0, 0, 0.05);
        background-color: #fff;
    }

    .autocomplete-suggestions {
        position: absolute;
        background-color: white;
        z-index: 999;
        width: fit-content;
        max-height: 150px;
        overflow-y: auto;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .autocomplete-item {
        padding: 8px;
        cursor: pointer;
    }

    .autocomplete-item:hover {
        background-color: #f0f0f0;
    }
</style>
<div class="card card-default color-palette-box">
    <div class="card-header">
        <h2 class="card-title">
            Create PO
        </h2>
    </div>
    <div class="card-header numerical-progress  justify-content-between border-0">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div class="outer-circle" style="width: 35px; height: 50px;">
                        <div class="small-circle active" style="width: 37px; height: 37px;">1</div>
                    </div>
                    <span>PO Details</span>
                    <i class="fa fa-angle-right fa-lg float-right"></i>
                </div>
            </div>
            <div class="col-md-3 d-none">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div class="outer-circle" style="width: 35px; height: 50px;">
                        <div class="small-circle" style="width: 37px; height: 37px;">2</div>
                    </div>
                    <span>Add Banking Details</span>
                    <i class="fa fa-angle-right fa-lg float-right"></i>
                </div>
            </div>
            <div class="col-md-3">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div class="outer-circle" style="width: 35px; height: 50px;">
                        <div class="small-circle" style="width: 37px; height: 37px;">2</div>
                    </div>
                    <span>Design & Share</span>
                    <i class="fa fa-angle-right fa-lg float-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="<?= base_url($panel) ?>/po/save" id="invoice_form" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="invoice_master_id" value="<?= !empty($GetInvoiceData[0]['invoice_no']) ? $GetInvoiceData[0]['invoice_no'] : "" ?>">
            <div class="card invoice-form">
                <div class="card-header invoice-header-bg" style="border-radius:16px 16px 0px 0px">
                    <h3 class="text-center pt-1"><strong>Purchase Order</strong></h3>
                </div>
                <div class="card-body mt-3">
                    <div class="row ">
                        <div class="col-md-6 col-sm-12">
                            <div class="card element-border">
                                <div class="card-header border-0">
                                    <h3 class="text-left card-title pt-1"><strong>Billed By</strong> <span style="font-size: 18px;" id="company_info"></span></h3>
                                    <div class="card-tools pt-1 pr-2 d-none">
                                        <a href="<?= site_url($panel) ?>/companies/new"><button type="button" class="btn btn-tool  action-btn btn-tool"><i class="nav-icon fas fa-plus"></i> Create Company</button></a>
                                    </div>
                                </div>
                                <div class="card-body pt-1 px-3">
                                    <select class="form-control select2" id="select_company" name="company_name" style="border:1px solid rgba(203, 213, 225, 1);width:100%" onchange="fetchCompanyDetails(this.value,'company')">
                                        <option value="" selected disabled>Select a company</option>
                                        <?php foreach ($aCompaniesList as $comp): ?>
                                            <option value="<?= $comp['id'] ?>"  <?= $_ENV['COMPANY_ID'] == $comp['id'] ? 'selected' : ''; ?>><?= $comp['company_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <blockquote class="border-0 pt-1 mb-0 text-center company_not_exits">
                                        <h5 class="text-dark"><strong>Add/select Company Details</strong></h5>
                                        <!-- <p>Resolution up to 1080*1080 pixel.<br>JPG or PNG file </p> -->
                                        <!-- <a href="<?= site_url($panel) ?>/companies/new"><button class="btn action-btn"><i class="nav-icon fas fa-plus"></i> Create New Company</button></a> -->
                                    </blockquote>
                                    <div id="when_comp_have_session" class="mt-2">
                                        <?= $CompanyData ?>
                                    </div>
                                    <div id="billed-by-company" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 pl-5">
                            <div class="form-group row">
                                <label for="invoice_no" class="col-sm-4 col-form-label">PO Number <span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="unique_invoice_no" class="form-control form-control-border" id="invoice_no" value="<?= !empty($GetInvoiceData[0]['invoice_no']) ? $GetInvoiceData[0]['invoice_no'] : "" ?>" placeholder="Enter PO number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="invoice_date" class="col-sm-4 col-form-label">PO Date <span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control datepicker form-control-border" maxlength="30" name="invoice_date" id="invoice_date" placeholder="dd-mm-yyyy" value="<?= !empty($GetInvoiceData[0]['invoice_date']) ? $GetInvoiceData[0]['invoice_date'] : date('d-m-Y') ?>" required autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row d-none">
                                <label for="due_date" class="col-sm-4 col-form-label">Due Date <span style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control datepicker form-control-border" maxlength="30" name="due_date" id="due_date" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric" value="<?= !empty($GetInvoiceData[0]['due_date']) ? $GetInvoiceData[0]['due_date'] : date('d-m-Y') ?>" required autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="form-group row d-none">
                                <label for="buyer_order_no" class="col-sm-4 col-form-label">Buyer Order No.</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-border" id="buyer_order_no" name="buyer_order_no" value="<?= !empty($GetInvoiceData[0]['buyer_order_no']) ? $GetInvoiceData[0]['buyer_order_no'] : "" ?>" placeholder="Enter buyer order number">
                                </div>
                            </div>
                            <div class="form-group row d-none">
                                <label for="invoice_no" class="col-sm-4 col-form-label">Buyer Ref.</label>
                                <div class="col-sm-8">
                                    <input type="text" name="buyer_ref_no" value="<?= !empty($GetInvoiceData[0]['buyer_ref_no']) ? $GetInvoiceData[0]['buyer_ref_no'] : "" ?>" class="form-control form-control-border" id="invoice_no" placeholder="Enter buyer reference number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2 divider-line"></div>
                    <div class="row pt-3">
                        <div class="col-md-6 col-sm-12">
                            <div class="card element-border">
                                <div class="card-header border-0">
                                    <h3 class="text-left card-title pt-1"><strong>Billed To</strong> <span style="font-size: 18px;" id="Client_info"></span></h3>
                                    <div class="card-tools pt-1 pr-2">
                                        <button type="button" class="btn action-btn btn-tool " data-toggle="modal" data-target="#Client_modal"><i class="fas fa-plus"></i> New</button>
                                    </div>
                                </div>
                                <div class="card-body pt-0 px-3">
                                    <select class="form-control select2" id="select_client" name="client_input" style="border:1px solid rgba(203, 213, 225, 1);width:100%" onchange="fetchCompanyDetails(this.value,'client')">
                                        <option value="" selected disabled>Select a client</option>
                                        <?php foreach ($aClinetsList as $client): ?>
                                            <option value="<?= $client['id'] ?>" <?= !empty($set_client_id) && $set_client_id == $client['id'] ? 'selected' : ''; ?>><?= $client['company_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <blockquote class="border-0 pt-1 mb-0 text-center client_not_exits">
                                        <h5 class="text-dark"><strong>Add/select Client Details</strong></h5>
                                        <!-- <p>Resolution up to 1080*1080 pixel.<br>JPG or PNG file </p> -->
                                        <button type="button" class="btn action-btn" data-toggle="modal" data-target="#Client_modal">Create New Client</button>
                                    </blockquote>
                                    <div id="when_client_have_session" class="mt-2">
                                        <?= $ClientData ?>
                                    </div>
                                    <div id="billed-to-company" class="mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 pl-5">
                            <div class="form-group row d-none">
                                <label for="dispatch_doc_no" class="col-sm-4 col-form-label">Dispatch Doc No.<span class="mandatory_field" style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-border" id="dispatch_doc_no" name="dispatch_doc_no" value="<?= !empty($GetInvoiceData[0]['despatch_doc_no']) ? $GetInvoiceData[0]['despatch_doc_no'] : "" ?>" placeholder="Enter dispatch document number" required>
                                </div>
                            </div>
                            <div class="form-group row d-none">
                                <label for="dispatched_thorugh" class="col-sm-4 col-form-label">Dispatch Through<span class="mandatory_field" style="color: red;">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-border" id="dispatched_thorugh" name="dispatched_thorugh" value="<?= !empty($GetInvoiceData[0]['dispatched_through']) ? $GetInvoiceData[0]['dispatched_through'] : "" ?>" placeholder="Mention dispatched through" required>
                                </div>
                            </div>
                            <div class="form-group row d-none">
                                <label for="terms_of_delivery" class="col-sm-4 col-form-label">Terms of Delivery</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-border" id="terms_of_delivery" name="terms_of_delivery" value="<?= !empty($GetInvoiceData[0]['terms_of_delievery']) ? $GetInvoiceData[0]['terms_of_delievery'] : "" ?>" placeholder="Enter terms of deiivery">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2 divider-line"></div>
                    <div class="row pt-3">
                        <div class="col-md-12 px-0">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="card-tools">
                                        <button type="button" id="GST_button" class="btn action-btn btn-tool purple-new" data-toggle="modal" data-target="#GST_modal" style="background: transparent;border: 1px solid rgba(115, 61, 217, 1);"><i class="fas fa-percent"></i> Add GST</button>
                                        <!-- <button type="button" class="btn btn-tool  action-btn">
                                        <i class="fas fa-plus"></i> Add Discount
                                    </button> -->
                                    </div>
                                </div>
                                <div id="InvoiceTableData">
                                    <div class="card-body px-2 table-responsive">
                                        <table class="table" id="InvoiceTable" style="border: 1px solid rgba(203, 213, 225, 1);">
                                            <thead class="table-header-bg">
                                                <tr>
                                                    <th>#</th>
                                                    <th colspan="6" style="width: 20%;">Description</th>
                                                    <th>HSN</th>
                                                    <th>Packing</th>
                                                    <th style="width: 6%;">Qty</th>
                                                    <th>Unit</th>
                                                    <th style="width: 10%;">Rate</th>
                                                    <th style="width: 10%;">Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="first_tr_row">
                                                    <td class="text-center align-middle">1</td>
                                                    <td colspan="6">
                                                        <input type="text" class="form-control form-control-border description_of_goods" id="description_of_goods" value="" name="description_of_goods[]" placeholder="Description" autocomplete="off" required>
                                                        <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border hsn_no" id="hsn_no" name="hsn_no[]" value="" placeholder="HSN" autocomplete="off" required>
                                                        <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                                                    </td>
                                                    <td> 
                                                        <input type="text" class="form-control form-control-border" id="packing_tr" name="packing_tr[]" value="" placeholder="Packing" autocomplete="off" required>
                                                    </td>
                                                    <td> 
                                                        <input type="text" class="form-control form-control-border floatOnly" id="quantity" name="quantity[]" value="" autocomplete="off" placeholder="Qty" required>
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-control-border units" id="units" name="units[]" value="" placeholder="unit" autocomplete="off" required>
                                                        <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border floatOnly" id="rate" name="rate[]" value="" placeholder="Rate" autocomplete="off" required>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border floatOnly" id="amount" name="amount[]" value="" placeholder="Amount" autocomplete="off" required>
                                                    </td>
                                                    <td type="button" class="text-center align-middle"><button class="border-0 bg-transparent purple-new"></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn action-btn btn-tool float-right mt-2" id="add_new_table_row"><i class="fas fa-plus"></i> Add</button>
                                    </div>
                                    <div class="card-footer mt-2 mx-2" style="background-color: rgba(250, 247, 255, 1);">
                                        <div class="row mb-1">
                                            <div class="col-md-6 col-sm-6">Gross Amount :</div>
                                            <div class="col-md-6 col-sm-6 text-right gross-amount">0.00</div>
                                        </div>
                                        <div class="row mb-1 ">
                                            <div class="col-md-6 col-sm-6">GST <span id="gst_rate_value"></span>% :</div>
                                            <div class="col-md-6 col-sm-6 text-right global-gst">0.00</div>
                                        </div>
                                        <div class="row mb-1 ">
                                            <div class="col-md-6 col-sm-6">CGST <span id="cgst_rate_value"></span>% :</div>
                                            <div class="col-md-6 col-sm-6 text-right cgst">0.00</div>
                                        </div>
                                        <div class="row mb-1 ">
                                            <div class="col-md-6 col-sm-6">SGST <span id="sgst_rate_value"></span>% :</div>
                                            <div class="col-md-6 col-sm-6 text-right sgst">0.00</div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-md-6 col-sm-6">Rounding Off :</div>
                                            <div class="col-md-6 col-sm-6 text-right Rounding-off">0.00</div>
                                        </div>
                                        <div class="row py-2 total-pay-bg">
                                            <div class="col-md-6 col-sm-6">Total Payable :</div>
                                            <div class="col-md-6 col-sm-6 text-right total-payable">0.00</div>
                                        </div>
                                        <input type="hidden" id="gross_amount_hidden" name="gross_amount" value="0.00">
                                        <input type="hidden" id="gst_hidden" name="gst_hidden" value="0.00">
                                        <input type="hidden" id="cgst_hidden" name="cgst_hidden" value="0.00">
                                        <input type="hidden" id="sgst_hidden" name="sgst_hidden" value="0.00">
                                        <input type="hidden" id="round_off_hidden" name="round_off_hidden" value="0.00">
                                        <input type="hidden" id="total_payable_hidden" name="total_payable" value="0.00">
                                    </div>
                                </div>
                                <?= view("purchase_order/sahil_cargo_table") ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2 divider-line"></div>
                    <div class="row pt-3">
                        <div class="col-md-12 px-0">
                            <div class="card">
                                <div class="card-header px-2 border-0">
                                    <h4 class="text-left pt-1"><strong><span class="purple-new"><i class="fas fa-file"></i></span> &nbsp;Additional Note</strong></h4>
                                </div>
                                <div class="card-body pt-0 px-2">
                                    <textarea class="form-control additional-note-bg" placeholder="Enter additional note..." name="additional_note" rows="4" id="additional_note" style="width: 100%;"><?= !empty($GetInvoiceData[0]['note']) ? $GetInvoiceData[0]['note'] : "" ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-4 text-right" style="border-radius: 0px 0px 16px 16px">
                    <button type="button" class="btn btn-tool bg-transparent text-dark  action-btn">Cancel</button>
                    <button type="submit" class="btn btn-tool  action-btn" id="save_invoice">Save & Next</button>
                </div>
            </div>
        </form>
    </div>
    <?= view("purchase_order/add_client") ?>
    <?= view("purchase_order/add_gst") ?>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra_script') ?>
<script>
    $(document).ready(function(){
        $(document).on('keyup', '.description_of_goods', function () {
            var input = $(this).val();  // Get the input value for each row
            var inputField = $(this);
            var suggestionsBox = inputField.siblings('.autocomplete-suggestions');

            if (input.length > 0) {
                $.ajax({
                    url: 'po/getProducts',
                    data: { search: input },
                    dataType: 'json',
                    success: function (data) {
                        var suggestions = data.filter(function (item) {
                            return item.description_of_goods.toLowerCase().includes(input.toLowerCase());
                        });
                        
                        if (suggestions.length > 0) {
                            suggestionsBox.empty().show();
                            suggestions.forEach(function (item) {
                                var suggestionItem = $('<div class="autocomplete-item"></div>').text(item.description_of_goods);
                                suggestionItem.on('click', function () {
                                    inputField.val(item.description_of_goods);
                                    suggestionsBox.hide();
                                });
                                suggestionsBox.append(suggestionItem);
                            });
                        } else {
                            suggestionsBox.hide();
                        }
                    }
                });
            } else {
                suggestionsBox.hide();
            }
        });

        $(document).on('keyup', '.hsn_no', function () {
            var input = $(this).val();  // Get the input value for each row
            var inputField = $(this);
            var suggestionsBox = inputField.siblings('.autocomplete-suggestions');

            if (input.length > 0) {
                $.ajax({
                    url: 'po/getProductsHSN',
                    data: { search: input },
                    dataType: 'json',
                    success: function (data) {
                        var suggestions = data.filter(function (item) {
                            return item.hsn_no.toLowerCase().includes(input.toLowerCase());
                        });
                        
                        if (suggestions.length > 0) {
                            suggestionsBox.empty().show();
                            suggestions.forEach(function (item) {
                                var suggestionItem = $('<div class="autocomplete-item"></div>').text(item.hsn_no);
                                suggestionItem.on('click', function () {
                                    inputField.val(item.hsn_no);
                                    suggestionsBox.hide();
                                });
                                suggestionsBox.append(suggestionItem);
                            });
                        } else {
                            suggestionsBox.hide();
                        }
                    }
                });
            } else {
                suggestionsBox.hide();
            }
        });

        $(document).on('keyup', '.units', function () {
            console.log("Hello");
            var input = $(this).val();  // Get the input value for each row
            var inputField = $(this);
            var suggestionsBox = inputField.siblings('.autocomplete-suggestions');

            if (input.length > 0) {
                $.ajax({
                    url: 'po/getProductsUnit',
                    data: { search: input },
                    dataType: 'json',
                    success: function (data) {
                        var suggestions = data.filter(function (item) {
                            return item.unit.toLowerCase().includes(input.toLowerCase());
                        });
                        
                        if (suggestions.length > 0) {
                            suggestionsBox.empty().show();
                            suggestions.forEach(function (item) {
                                var suggestionItem = $('<div class="autocomplete-item"></div>').text(item.unit);
                                suggestionItem.on('click', function () {
                                    inputField.val(item.unit);
                                    suggestionsBox.hide();
                                });
                                suggestionsBox.append(suggestionItem);
                            });
                        } else {
                            suggestionsBox.hide();
                        }
                    }
                });
            } else {
                suggestionsBox.hide();
            }
        });

        $(document).on('keyup', '.s_perticular', function () {
            var input = $(this).val();  // Get the input value for each row
            var inputField = $(this);
            var suggestionsBox = inputField.siblings('.autocomplete-suggestions');

            if (input.length > 0) {
                $.ajax({
                    url: 'po/getProducts',
                    data: { search: input },
                    dataType: 'json',
                    success: function (data) {
                        var suggestions = data.filter(function (item) {
                            return item.description_of_goods.toLowerCase().includes(input.toLowerCase());
                        });
                        
                        if (suggestions.length > 0) {
                            suggestionsBox.empty().show();
                            suggestions.forEach(function (item) {
                                var suggestionItem = $('<div class="autocomplete-item"></div>').text(item.description_of_goods);
                                suggestionItem.on('click', function () {
                                    inputField.val(item.description_of_goods);
                                    suggestionsBox.hide();
                                });
                                suggestionsBox.append(suggestionItem);
                            });
                        } else {
                            suggestionsBox.hide();
                        }
                    }
                });
            } else {
                suggestionsBox.hide();
            }
        });

        $(document).on('keyup', '.s_vehicle_no', function () {
            var input = $(this).val();  // Get the input value for each row
            var inputField = $(this);
            var suggestionsBox = inputField.siblings('.autocomplete-suggestions');

            if (input.length > 0) {
                $.ajax({
                    url: 'po/getVehicles',
                    data: { search: input },
                    dataType: 'json',
                    success: function (data) {
                        var suggestions = data.filter(function (item) {
                            return item.packing.toLowerCase().includes(input.toLowerCase());
                        });
                        
                        if (suggestions.length > 0) {
                            suggestionsBox.empty().show();
                            suggestions.forEach(function (item) {
                                var suggestionItem = $('<div class="autocomplete-item"></div>').text(item.packing);
                                suggestionItem.on('click', function () {
                                    inputField.val(item.packing);
                                    suggestionsBox.hide();
                                });
                                suggestionsBox.append(suggestionItem);
                            });
                        } else {
                            suggestionsBox.hide();
                        }
                    }
                });
            } else {
                suggestionsBox.hide();
            }
        });
    });

    $('.select2').select2();
    $(document).on('focus', '.date-picker', function() {
        if (!$(this).data('datepicker')) {
            $(this).datepicker({
                dateFormat: 'dd-mm-yy',
                autoclose: true,
                todayHighlight: true
            });
        }
    });

    $('#invoice_date').datepicker({
        dateFormat: 'dd-mm-yy',
        autoclose: true,
        todayHighlight: true
    });
    $('#due_date').datepicker({
        dateFormat: 'dd-mm-yy',
        autoclose: true,
        todayHighlight: true
    });
    $(document).ready(function() {
        let rowCount = 1;

        function updateRowIndices() {
            $('#InvoiceTable tbody tr').each(function(index) {
                $(this).find('td:first').text(index + 1); // Update index column
                $(this).find('input').each(function() {
                    const oldId = $(this).attr('id');
                    if (oldId) {
                        const newId = oldId.replace(/\d+$/, index + 1); // Update ID with new index
                        $(this).attr('id', newId);
                    }
                });
            });
        }
        let taxRates = {};

        // Set default GST selection
        const savedOption = localStorage.getItem('gst_selection') || 'GST';
        if (savedOption === 'GST') {
            $('#gst_value').prop('checked', true);
        } else if (savedOption === 'CGST_SGST') {
            $('#sgst_and_cgst').prop('checked', true);
        }

        // Update localStorage on selection change
        $('input[name="gst_option"]').change(function() {
            const selectedOption = $(this).val();
            localStorage.setItem('gst_selection', selectedOption);
            fetchGstRates(selectedOption);
        });

        let gettype = localStorage.getItem('gstType') || 'GST';

        function fetchGstRates(gettype) {
            $.ajax({
                url: '<?= site_url($panel . "/fGetGstRates") ?>',
                type: 'GET',
                dataType: 'json',
                data: {
                    gst_type: gettype
                },
                success: function(response) {
                    taxRates = response;
                    localStorage.setItem('gstRates', JSON.stringify(response));
                    if (gettype === 'GST') {
                        console.log(`GST Rate: ${taxRates.gst}`);
                    } else if (gettype === 'CGST_SGST') {
                        console.log(`CGST Rate: ${taxRates.cgst}, SGST Rate: ${taxRates.sgst}`);
                    }
                    updateTotalAmounts();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching GST rates:', error);
                }
            });
        }

        // Fetch rates for the default or saved option on page load
        fetchGstRates(gettype);
        $('input[name="gst_type"]').on('change', function() {
            const selectedGstType = $(this).attr('id') === 'gst_value' ? 'GST' : 'CGST_SGST';
            localStorage.setItem('gstType', selectedGstType);
            fetchGstRates(selectedGstType);
            updateTotalAmounts();
        });

        const gstType = localStorage.getItem('gstType'); // Get the gstType value from localStorage

        if (gstType === 'GST') {
            $('#gst_value').prop('checked', true);
            $('#sgst_and_cgst').prop('checked', false); // Uncheck the other radio button
        } else if (gstType === 'CGST_SGST') {
            $('#sgst_and_cgst').prop('checked', true);
            $('#gst_value').prop('checked', false); // Uncheck the other radio button
        }

        $(document).on('input', 'input[name="rate[]"], input[name="quantity[]"]', function() {
            // , input[name="tax_rate[]"]
            calculateRowAmount($(this).closest('tr'));
            updateTotalAmounts(); // Update the total amounts whenever a row is changed
        });

        $('#add_new_table_row').click(function() {
            rowCount++;
            const newRow = `
            <tr>
                <td class="text-center align-middle">${rowCount}</td>
                <td colspan="6">
                    <input class="form-control form-control-border description_of_goods" id="descroption_of_goods_${rowCount}" name="description_of_goods[]" placeholder="Description" autocomplete="off" required>
                     <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                </td>
                <td>
                    <input class="form-control form-control-border hsn_no" id="hsn_no_${rowCount}" name="hsn_no[]" autocomplete="off" placeholder="HSN No." required>
                    <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                </td>
                <td><input type="text" class="form-control form-control-border" id="packing_tr${rowCount}" name="packing_tr[]" value="" placeholder="Packing" autocomplete="off"></td>
                <td><input type="number" class="form-control form-control-border floatOnly" id="quantity_${rowCount}" name="quantity[]" value="" placeholder="Qty" min="1" autocomplete="off"></td>
                <td> 
                    <input class="form-control form-control-border floatOnly units" id="units_${rowCount}" name="units[]" value="" placeholder="Units" autocomplete="off" required>
                    <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                </td>
                <td>
                    <input type="text" class="form-control form-control-border floatOnly" id="rate_${rowCount}" name="rate[]" value="" placeholder="Rate" autocomplete="off">
                </td>
                <td>
                    <input type="text" class="form-control form-control-border floatOnly" id="amount_${rowCount}" name="amount[]" value="" placeholder="Amount" autocomplete="off">
                </td>
                <td class="text-center align-middle">
                    <button type="button"  class="border-0 bg-transparent purple-new delete-row"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        `;
            $('#InvoiceTable tbody').append(newRow);
            updateRowIndices();
            updateTotalAmounts();

        });


        $(document).on('click', '.delete-row', function() {
            const rowCount = $('tbody tr').length;
            if (rowCount > 1) {
                $(this).closest('tr').remove();
                updateRowIndices();
                updateRowIndicesSahilCargo()
                updateTotalAmounts();
            } else {
                alert("Cannot delete the last row!");
            }
        });

        function calculateRowAmount(row) {
            const rate = parseFloat(row.find('input[name="rate[]"]').val()) || 0;
            const quantity = parseFloat(row.find('input[name="quantity[]"]').val()) || 0;
            // const taxRate = parseFloat(row.find('input[name="tax_rate[]"]').val()) || 0;
            // console.log(taxRate) 
            const amount = rate * quantity
            row.find('input[name="amount[]"]').val(amount.toFixed(2));
        }

        function updateTotalAmounts() {
            const gstRates = JSON.parse(localStorage.getItem('gstRates')) || {
                gst: 18,
                cgst: 9,
                sgst: 9
            };

            const gstType = localStorage.getItem('gstType') || 'GST';

            let grossAmount = 0;
            $('input[name="amount[]"]').each(function() {
                grossAmount += parseFloat($(this).val()) || 0;
            });

            let cgst = 0,
                sgst = 0,
                gst = 0;

            if (gstType === 'GST') {

                gst = grossAmount * (gstRates.gst / 100);

                $('.gross-amount').text(grossAmount.toFixed(2));
                $('.global-gst').text(gst.toFixed(2)).parent().show();
                $('#gst_rate_value').text(gstRates.gst).parent().show();

                $('.cgst, .sgst').parent().hide();

                $('#gross_amount_hidden').val(grossAmount.toFixed(2));
                $('#gst_hidden').val(gst.toFixed(2));
                $('#cgst_hidden').val('');
                $('#sgst_hidden').val('');
            } else if (gstType === 'CGST_SGST') {

                cgst = grossAmount * (gstRates.cgst / 100);
                sgst = grossAmount * (gstRates.sgst / 100);

                $('.gross-amount').text(grossAmount.toFixed(2));
                $('.cgst').text(cgst.toFixed(2)).parent().show();
                $('.sgst').text(sgst.toFixed(2)).parent().show();
                $('#cgst_rate_value').text(gstRates.cgst).parent().show();
                $('#sgst_rate_value').text(gstRates.sgst).parent().show();
                $('.global-gst').parent().hide();

                $('#gross_amount_hidden').val(grossAmount.toFixed(2));
                $('#cgst_hidden').val(cgst.toFixed(2));
                $('#sgst_hidden').val(sgst.toFixed(2));
                $('#gst_hidden').val('');
            }
            const totalPayable = grossAmount + cgst + sgst + gst;
            const roundOff = Math.round(totalPayable) - totalPayable; 
            // $('.Rounding-off').text(roundOff.toFixed(2)); 
            $('.Rounding-off').text(formatIndianCurrency(roundOff));
            $('#round_off_hidden').val(roundOff.toFixed(2));
            console.log(totalPayable)
            $('.total-payable').text((totalPayable + roundOff).toFixed(2));
            $('#total_payable_hidden').val((totalPayable + roundOff).toFixed(2));

            // $('.total-payable').text(totalPayable.toFixed(2));
            // $('#total_payable_hidden').val(totalPayable.toFixed(2));
        }

        // clients forom submit    
        $('#fAddNewClient').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            let formData = $(this).serialize();
            $.ajax({
                url: '<?= site_url($panel . '/clients/fAddNewClient') ?>',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 200) {
                        $('#Client_modal').modal('hide');
                        const newOption = new Option(response.data.company_name, response.data.id, false, false);
                        $('#select_client').append(newOption).trigger('change');
                        toastr.success(response.message);
                    } else {
                        toastr.info(response.message);
                    }
                },
                error: function() {
                    alert('An error occurred while processing the request.');
                }
            });
        });
        //clients forom submit End    
    });
    $('#sahil_cargo_table_view').hide();
    fetchCompanyDetails(<?= $_ENV['COMPANY_ID'] ?>, 'company');
    fetchCompanyDetails(0, 'client');
    //get information of selected company
    function fetchCompanyDetails(companyId, type) {
        if (companyId) {
            $.ajax({
                url: `<?= site_url($panel . '/invoice/getCompanyDetails') ?>`,
                type: 'post',
                data: {
                    companyId: companyId,
                    type: type,
                },
                success: function(response) {
                    if (companyId == <?= $_ENV['SAHIL_CARGO_ID'] ?> && type == "company") {
                        $('#sahil_cargo_table_view').show();
                        $('#InvoiceTableData').find('input,select').prop('disabled', true);
                        $('#InvoiceTableData').hide();
                        $('#sahil_cargo_table_view').find('input').prop('disabled', false);
                        $('#GST_button').removeClass('d-block').addClass('d-none');
                        $('.mandatory_field').addClass('d-none');
                        $('#dispatch_doc_no').removeAttr('required');
                        $('#dispatched_thorugh').removeAttr('required');
                    } else if ((companyId !== <?= $_ENV['SAHIL_CARGO_ID'] ?> && type == "company") || type == "company") {
                        $('#InvoiceTableData').show();
                        $('#sahil_cargo_table_view').find('input').prop('disabled', true);
                        $('#InvoiceTableData').find('input,select').prop('disabled', false);
                        $('#sahil_cargo_table_view').hide();
                        $('#GST_button').addClass('d-block');
                        $('.mandatory_field').removeClass('d-none');
                        // $('#dispatch_doc_no').attr('required', 'required');
                        // $('#dispatched_thorugh').attr('required', 'required');
                    }
                    if (response.status == "company") {
                        let companyData = JSON.parse(response.company_data);
                        $('.company_not_exits').css("display", "none");
                        $('#company_info').html("( " + response.business_name + " )");
                        $('#billed-by-company').html(companyData);
                        $('#when_comp_have_session').css("display", "none");
                    } else if (response.status == "client") {
                        let companyData = JSON.parse(response.company_data);
                        $('.client_not_exits').css("display", "none");
                        $('#Client_info').html("( " + response.business_name + " )");
                        $('#billed-to-company').html(companyData);
                        $('#when_client_have_session').css("display", "none");
                    } else {
                        $('.company_not_exits').css("display", "block");
                        $('.client_not_exits').css("display", "block");
                        toastr.info(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching details:', error);
                }
            });
        }
    }

    // SubmitHandler validation 
    $(document).ready(function() {
        $("#invoice_form").on("submit", function(event) {
            const company = $("#select_company").val();
            const client = $("#select_client").val();
            const submitButton = $("#save_invoice");
            if (!company || !client) {
                alert("Please select borth company and client!");
                event.preventDefault();
                return;
            }
            submitButton.prop("disabled", true);
            submitButton.html("Creating PO... <i class='fa fa-spinner fa-spin'></i>");
        });
    });

    //Sahil cargo js 
    function updateRowIndicesSahilCargo() {
        $('#sahil_cargo_table tbody tr').each(function(index) {
            $(this).find('td:first').text(index + 1); // Update index column
            $(this).find('input').each(function() {
                const oldId = $(this).attr('id');
                if (oldId) {
                    const newId = oldId.replace(/\d+$/, index + 1); // Update ID with new index
                    $(this).attr('id', newId);
                }
            });
        });
    }
    function calculateTotalAmount() {
        let totalAmount = 0;
        $('input[name="s_fright_amount[]"]').each(function () {
            const amount = parseFloat($(this).val()) || 0;
            totalAmount += amount;
        });
        $('#s-total-payable').text(totalAmount.toFixed(2));
        $('#sahil_total_payable_hidden').val(totalAmount.toFixed(2));
    }
    let SahilrowCount = 1;
    $('#s_add_new_table_row').click(function() {
        SahilrowCount++;
        const newRow = `
                <tr>
                <td class="text-center align-middle">${SahilrowCount}</td>
                <td>
                    <input type="text" class="form-control form-control-border s_invoice_date date-picker" id="s_invoice_date_${SahilrowCount}" value="<?= date('d-m-Y') ?>" name="s_invoice_date[]" autocomplete="off" required>
                </td>
                <td>
                    <input class="form-control form-control-border s_perticular" id="s_perticular_${SahilrowCount}" name="s_perticular[]" required autocomplete="off" placeholder="please enter perticular">
                    <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                </td>
                <td>
                    <input class="form-control form-control-border s_vehicle_no" id="s_vehicle_no_${SahilrowCount}" name="s_vehicle_no[]" required autocomplete="off" placeholder="please enter vehicle no.">
                    <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                </td>
                <td> <input type="text" class="form-control form-control-border floatOnly" id="s_fright_amount_${SahilrowCount}" name="s_fright_amount[]" value="" placeholder="Amount" required></td>
                 <td class="text-center align-middle">
                    <button type="button"  class="border-0 bg-transparent purple-new delete-row"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        `;
        $('#sahil_cargo_table tbody').append(newRow);
        // DatePickerForCargo(SahilrowCount)
        updateRowIndicesSahilCargo()
        calculateTotalAmount();
    });

    $(document).on('input', 'input[name="s_fright_amount[]"]', function () {
        calculateTotalAmount();
    });
    $(document).on('click', '.delete-row', function () {
        $(this).closest('tr').remove(); 
        calculateTotalAmount(); 
    });

</script>
<?= $this->endSection() ?>