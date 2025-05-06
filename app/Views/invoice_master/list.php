<table class="table table-bordered">
    <thead class="table-header-bg">
        <tr class="border-top">
            <th>#</th>
            <th>Invoice No.</th>
            <th>Billed by</th>
            <th>Billed to</th>
            <th>Invoice Date</th>
            <th>Due date</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($aInvoiceData)) { ?>
            <tr>
                <td colspan="7" class="text-center">No Records Found</td>
            </tr>
            <?php } else {
            $i = 1;
            foreach ($aInvoiceData as $data) {
            ?>
                <tr>
                    <td class="text-center align-middle"><?= $i++ ?></td>
                    <td><?= $data['invoice_no'] ?></td>
                    <td><?= $data['sender_comp_name'] ?></td>
                    <td><?= $data['receiver_comp_name'] ?></td>
                    <td><?= $data['invoice_date'] ?></td>
                    <td><?= $data['due_date'] ?></td>
                    <td>₹ <?= format_indian_currency($data['total_payable']) ?></td>
                    <td class="text-center align-middle"><a href="<?= site_url($panel . "/invoice/update/" . $data['id']) ?>"  ><span class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></span></a><a href="#" onclick="confirmStatusChange(1, <?= $data['id'] ?>)" title="Delete company" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash fa-md"></i></a></td>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>
<script>
    function confirmStatusChange(status, id) {
        let message = '';
        switch (status) {
            case 1:
                message = 'Are you sure you want to delete this invoice?';
                break;
            default:
                return;
        }
        if (confirm(message)) {
            window.location.href = `<?= base_url($panel . '/manage_invoices/status') ?>/${status}/${id}`;
        }
    }
</script>