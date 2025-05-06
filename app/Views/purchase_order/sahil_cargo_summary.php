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

    @media print {
        body * {
            visibility: hidden;
        }
        #InvoicePDF, #InvoicePDF * {
            visibility: visible;
        }
        #InvoicePDF {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>
<div class="card card-default color-palette-box">
    <div class="card-header">
        <h2 class="card-title">
            Share Purchase Order
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
                    <!-- <span class="right-direction-icon"><i class="fas fa-chevron-right"></i></span> -->
                </div>
            </div>
            <div class="col-md-3 d-none">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div class="outer-circle" style="width: 35px; height: 50px;">
                        <div class="small-circle active" style="width: 37px; height: 37px;">2</div>
                    </div>
                    <span>Add Banking Details</span>
                    <!-- <span class="right-direction-icon"><i class="fas fa-chevron-right"></i></span> -->
                </div>
            </div>
            <div class="col-md-3">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <div class="outer-circle" style="width: 35px; height: 50px;">
                        <div class="small-circle active" style="width: 37px; height: 37px;">2</div>
                    </div>
                    <span>Design & Share</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="card invoice-form">
            <div class="card-header  invoice-header-bg ui-sortable-handle" style="border-radius:16px 16px 0px 0px">
                <h3 class="card-title text-left"><strong>Share PO</strong></h3>
                <div class="card-tools ">
                    <a href="<?= site_url($panel.'/po/file/'.$GetInvoiceData['invoice_file']); ?>" target="blank">
                        <button type="button" class="btn btn-tool bg-white"><i class="fas fa-download"></i></button>
                    </a>
                    <a href="<?= site_url($panel.'/po/file/'.$GetInvoiceData['invoice_file']); ?>" target="blank">
                        <button type="button" class="btn btn-tool bg-white"><i class="fas fa-print"></i> Print</button>
                    </a>
                    <button type="button" class="btn btn-tool bg-white"  onclick="sendInvoiceEmail('<?= $GetInvoiceData['id']; ?>', '<?= $GetInvoiceData['invoice_file']; ?>', '<?= $ClientData['company_email']; ?>')"><i class="fas fa-envelope"></i> Email </button>
                    <a href="https://web.whatsapp.com/" target="blank">
                        <button type="button" class="btn btn-tool bg-white"><i class="fas fa-whatsapp"></i> Whatsapp </button>
                    </a>
                </div>
            </div>
            <div class="card-body mt-3">
                <?= view("purchase_order/sahil_cargo_po_pdf") ?>
            </div>
        </div>
    </div>
    <div class="modal fade" id="invoice-success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body text-center">
                    <img src="<?= site_url("public") ?>/images/dashboard/invoice-success.png" alt="">
                    <br>
                    <h3><svg width="35" height="35" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4841 29.5392L31.7705 15.2528L29.5312 13.0136L17.4841 25.0608L11.4278 19.0045L9.18862 21.2438L17.4841 29.5392ZM20.5037 40.6875C17.7115 40.6875 15.0869 40.1577 12.6301 39.098C10.1732 38.0383 8.03617 36.6002 6.21894 34.7837C4.40171 32.9672 2.96291 30.831 1.90253 28.3752C0.84251 25.9195 0.3125 23.2956 0.3125 20.5037C0.3125 17.7115 0.842333 15.0869 1.902 12.6301C2.96167 10.1732 4.39976 8.03617 6.21628 6.21894C8.0328 4.40171 10.169 2.96291 12.6248 1.90253C15.0805 0.84251 17.7044 0.3125 20.4963 0.3125C23.2885 0.3125 25.9131 0.842332 28.3699 1.902C30.8268 2.96167 32.9638 4.39976 34.7811 6.21628C36.5983 8.0328 38.0371 10.169 39.0975 12.6248C40.1575 15.0805 40.6875 17.7044 40.6875 20.4963C40.6875 23.2885 40.1577 25.9131 39.098 28.3699C38.0383 30.8268 36.6002 32.9638 34.7837 34.7811C32.9672 36.5983 30.831 38.0371 28.3752 39.0975C25.9195 40.1575 23.2956 40.6875 20.5037 40.6875ZM20.5 37.5C25.2458 37.5 29.2656 35.8531 32.5594 32.5594C35.8531 29.2656 37.5 25.2458 37.5 20.5C37.5 15.7542 35.8531 11.7344 32.5594 8.44063C29.2656 5.14687 25.2458 3.5 20.5 3.5C15.7542 3.5 11.7344 5.14687 8.44063 8.44063C5.14687 11.7344 3.5 15.7542 3.5 20.5C3.5 25.2458 5.14687 29.2656 8.44063 32.5594C11.7344 35.8531 15.7542 37.5 20.5 37.5Z" fill="#733DD9" />
                        </svg> <strong>Invoice Created Succesfully</strong>
                    </h3>
                    <p>Loreum ipsum dummy text here Loreum ipsum dummy text here Loreum ipsum dummy text here</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra_script') ?>
    <script>
        function printDiv(divId) {
            const printContents = document.getElementById(divId).innerHTML;
            const originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        async function sendInvoiceEmail(invoiceId, invoiceFile, defaultEmail) {
            const { value: email } = await Swal.fire({
                title: "Send PO via Email",
                input: "email",
                inputLabel: "Client's Email Address",
                inputValue: defaultEmail, // Prefill the email field with the default email
                inputPlaceholder: "Enter client's email address",
                showCancelButton: true,
                confirmButtonText: "Send",
                cancelButtonText: "Cancel",
                inputValidator: (value) => {
                    if (!value) {
                        return "Email address is required!";
                    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        return "Please enter a valid email address.";
                    }
                }
            });
            if (email) {
                Swal.fire({
                    title: "Confirm Sending",
                    text: `Are you sure you want to send the PO to ${email}?`,
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Send It",
                    cancelButtonText: "Cancel",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Sending...",
                            text: "Please wait while the PO is being sent.",
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });
                        fetch('<?= site_url($panel . "/po/sendEmail") ?>', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest' // To identify AJAX requests in CI4
                            },
                            body: JSON.stringify({
                                invoiceId: invoiceId,
                                invoiceFile: invoiceFile,
                                invoiceEmail: email,
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                Swal.fire({
                                    icon: "success",
                                    title: "Success",
                                    text: "PO sent successfully!",
                                    timer: 3000
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: `Failed to send PO: ${data.message}`,
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error sending email:', error);
                            Swal.fire({
                                icon: "warning",
                                title: "Error",
                                text: "An error occurred while sending the invoice.",
                            });
                        });
                    }
                });
            }
        }
    </script>
<?= $this->endSection() ?>