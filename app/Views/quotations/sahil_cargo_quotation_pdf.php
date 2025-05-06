<div class="" id="InvoicePDF" style="font-family: Arial, sans-serif; width: 100%; margin: 0 auto;">
    <h2 style="text-align: center;font-weight: bold;">Quotation</h2>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td colspan="6" style="vertical-align: top; padding: 1rem;">
                <strong><?= $GetInvoiceData['sender_comp_name']; ?></strong><br>
                <?= $GetInvoiceData['sender_comp_address']; ?><?= $CompanyData['city'] ?", ".$CompanyData['city'] :'-' ?><?= $CompanyData['zipcode'] ? ", ".$CompanyData['zipcode'] :'' ?><br>
                <!-- <strong>GSTIN:</strong> <?=  $GetInvoiceData['sender_comp_gstin']; ?><br> -->
                <strong>State :</strong> <?= $CompanyData['state'] ?>, <strong>Code : </strong> 27<br>
                <strong>Email:</strong> <?= $CompanyData['company_email']? $CompanyData['company_email']: '-' ?>
            </td>
            <td colspan="5" style="vertical-align: top; padding: 1rem;">
                <table style="width: 100%;">
                    <tr>
                        <td colspan="5"><strong>Quotation No.</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td colspan="5"><?= $GetInvoiceData['invoice_no']  ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Quotation Date</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td  colspan="5"><?= $GetInvoiceData['invoice_date'] ? date('d M Y', strtotime($GetInvoiceData['invoice_date'])) : '-'; ?></td>
                    </tr>
                    <!-- <tr>
                        <td colspan="5"><strong>Quotation Due Date</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td  colspan="5"><?= $GetInvoiceData['due_date'] ? date('d M Y', strtotime($GetInvoiceData['due_date'])) : '-'; ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Buyer's Ref.</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td  colspan="5"><?= $GetInvoiceData['buyer_ref_no'] ? $GetInvoiceData['buyer_ref_no']:'-' ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Buyer's Order No.</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td  colspan="5"><?= $GetInvoiceData['buyer_order_no'] ? $GetInvoiceData['buyer_order_no']:'-' ?></td>
                    </tr> -->
                </table>
            </td>
        </tr>
        <tr style="border: 1px solid #000000;">
            <td colspan="6" style="vertical-align: top; padding: 1rem;">
                <strong>Buyer : </strong>
                <strong><?= $ClientData['company_name'] ? $ClientData['company_name'] :'-'  ?></strong><br>
                <?= $ClientData['address'] ? $ClientData['address'] :'-'  ?><?= $ClientData['city'] ? ", ".$ClientData['city'] :''  ?><?= $ClientData['zipcode'] ? ", ".$ClientData['zipcode'] :'-'  ?><br>
                <strong>GSTIN:</strong> <?= $ClientData['company_gstin'] ? $ClientData['company_gstin']:'-' ?><br>
                <strong>State:</strong> <?= $ClientData['state'] ? $ClientData['state'] :'-' ?><br>
                <strong>Email:</strong> <?= $ClientData['company_email'] ? $ClientData['company_email'] :'-' ?>
            </td>
            <td colspan="5" style="vertical-align: top; padding: 1rem;border-left: 1px solid #000000;">
                <!-- <table style="width: 100%;">
                    <tr>
                        <td colspan="5"><strong>Despatch Document No.</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td colspan="5"><?= $GetInvoiceData['despatch_doc_no'] ? $GetInvoiceData['despatch_doc_no']:'-' ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Despatched through</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td colspan="5"><?= $GetInvoiceData['dispatched_through'] ? $GetInvoiceData['dispatched_through']:'-' ?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><strong>Terms of Delivery</strong></td>
                        <td colspan="2"><strong>:</strong></td>
                        <td colspan="5"><?= $GetInvoiceData['terms_of_delievery'] ? $GetInvoiceData['terms_of_delievery']:'-' ?></td>
                    </tr>
                </table> -->
            </td>
        </tr>
    </table>

    <!-- Item Details Section -->
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; margin-top: 10px; border-collapse: collapse;">
        <tr>
            <td style="text-align: center;"><strong>Sr. No</strong></td>
            <td><strong>Date</strong></td>
            <td colspan="3"><strong>Particulars</strong></td>
            <td><strong>Vehicle No.</strong></td>
            <td style="text-align: center;"><strong>Freight Amount</strong></td>
        </tr>
        <?php $i = 1; foreach($getInvoiceDetails as $data): ?>
        <tr>
            <td style="text-align: center;"><?= $i++ ?></td>
            <td style="border: 1px solid #000; text-align: left; padding: 8px;"><?= $data['sc_date'] ? date('d M Y', strtotime($data['sc_date'])) : '-'; ?></td>
            <td colspan="3"><?= $data['description_of_goods'] ? $data['description_of_goods'] : '-'; ?></td>
            <td><?= $data['packing'] ? $data['packing'] :'-'; ?></td>
            <td style="text-align: center;">₹ <?= $data['amount'] ? format_indian_currency($data['amount']) : '0'; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Summary Section -->
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; margin-top: 10px; border-collapse: collapse;">
        <tr>
            <td colspan="5" rowspan="3" style="vertical-align: top; padding: 1rem;">
                <strong>Amount Chargeable (in words)</strong><br>
                <?php  $total_pay = $GetInvoiceData['total_payable'] ? $GetInvoiceData['total_payable']:'' ; echo indianCurrency($total_pay)  ?>
            </td>
            <td colspan="2"><strong>Gross Amount</strong></td>
            <td style="text-align: right;">₹ <?= $GetInvoiceData['total_payable'] ? format_indian_currency($GetInvoiceData['total_payable']):'' ?></td>
        </tr>
       
        <tr>
            <td colspan="2">Rounding Off</td>
            <td style="text-align: right;">₹ 
                <?= isset($GetInvoiceData['rounding_off']) 
                ? (strpos($GetInvoiceData['rounding_off'], '-') === 0
                    ? '- ' . format_indian_currency(abs($GetInvoiceData['rounding_off'])) 
                    : "+ " .format_indian_currency($GetInvoiceData['rounding_off'])) 
                : '0'; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2"><strong>Total Payable</strong></td>
            <td style="text-align: right;">₹ <?= $GetInvoiceData['total_payable'] ? format_indian_currency($GetInvoiceData['total_payable']) :'0' ?></td>
        </tr>
    </table>

    <!-- Bank Details Section -->
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; margin-top: 10px; border-collapse: collapse;">
        <tr>
             <td style="vertical-align: top; padding: 1rem; text-align: left;width: 50%;">
                <strong>Note:</strong> 
                 <?= $GetInvoiceData['note']; ?>
            </td>
            <td style="vertical-align: top; padding: 1rem; text-align: right;">
                <strong>For <?= $GetInvoiceData['sender_comp_name']; ?></strong><br><br><br>
                Authorised Signatory
            </td>
        </tr>
    </table>

    <p style="text-align: center; font-size: 12px; margin-top: 10px;">
        This is a Computer Generated Document
    </p>
</div>