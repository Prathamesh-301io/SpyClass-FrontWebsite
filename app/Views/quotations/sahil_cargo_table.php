<div id="sahil_cargo_table_view" class="sahil_cargo_table_viewe">
    <div class="card-body px-2 table-responsive">
        <table class="table" id="sahil_cargo_table" style="border: 1px solid rgba(203, 213, 225, 1);">
            <thead class="table-header-bg">
                <tr>
                    <th>Sr. No</th>
                    <th>Date</th>
                    <th>Particulars</th>
                    <th>Vehicle No.</th>
                    <th>Freight Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- date-picker  onclick="DatePickerForCargo(0)" -->
            <tbody>
                <tr id="sahil_cargo_first_row" >
                    <td class="text-center align-middle">1</td>
                    <td>
                        <input type="text" class="form-control form-control-border s_invoice_date date-picker" id="s_invoice_date_0" value="<?= date('d-m-Y') ?>" name="s_invoice_date[]" required>
                    </td>
                    <td> 
                        <input class="form-control form-control-border s_perticular" id="s_perticular" name="s_perticular[]" required autocomplete="off" placeholder="please enter perticular">
                        <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                    <td>
                        <input class="form-control form-control-border s_vehicle_no" id="s_vehicle_no" name="s_vehicle_no[]" required autocomplete="off" placeholder="please enter vehicle no.">
                        <div class="autocomplete-suggestions" style="display:none; border: 1px solid #ddd; position: absolute; max-height: 150px; overflow-y: auto;"></div>
                    </td>
                    <td> 
                        <input type="text" class="form-control form-control-border floatOnly" id="s_fright_amount" name="s_fright_amount[]" value="" placeholder="Amount" required autocomplete="off">
                    </td>
                    <td type="button" class="text-center align-middle"><button class="border-0 bg-transparent purple-new"></button></td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn action-btn btn-tool float-right mt-2" id="s_add_new_table_row"><i class="fas fa-plus"></i> Add</button>
    </div>
    <div class="card-footer mt-2 mx-2" style="background-color: rgba(250, 247, 255, 1);">
        <div class="row py-2 total-pay-bg">
            <div class="col-md-6 col-sm-6">Total Payable :</div>
            <div class="col-md-6 col-sm-6 text-right " id="s-total-payable" >0.00</div>
        </div>
        <input type="hidden" id="sahil_total_payable_hidden" name="sahil_total_payable_hidden" value="0.00">
    </div>
</div>