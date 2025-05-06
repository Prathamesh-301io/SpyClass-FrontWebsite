<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content') ?>
<div class="card card-default color-palette-box">
	<div class="card-header">
		<h2 class="card-title">
			<strong>Dashboard</strong>
		</h2>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-box-shadow-border">
					<div class="card-header py-2">
						<div class="card-title mt-1">
							<h6 class="mb-0">Total Invoices</h6>
						</div>
						<div class="card-tools">
							<div class="btn-group">
								<button type="button" class="btn bg-white border-0 btn-success btn-sm dropdown-toggle custom-dropdown" data-toggle="dropdown" data-offset="-52">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu" role="menu">
									<a href="#" class="dropdown-item custom-dropdown-item">Pending</a>
									<a href="#" class="dropdown-item custom-dropdown-item">Complete</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body py-3">
						<div class="row">
							<div class="col-6">
								<h2 class="text-bold mb-0"><?= isset($aInvoiceData) ? count($aInvoiceData) : 0 ?></h2>
							</div>
							<div class="col-6 px-0">
								<span class="float-right"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="18" cy="18" r="17.5" fill="white" stroke="#733DD9" />
										<path d="M13 25.9167C12.4178 25.9167 11.925 25.715 11.5217 25.3117C11.1184 24.9083 10.9167 24.4168 10.9167 23.8371V21.75H13.4167V10.2435L14.5706 11.2373L15.7404 10.2435L16.9102 11.2373L18.0802 10.2435L19.25 11.2373L20.4198 10.2435L21.5898 11.2373L22.7596 10.2435L23.9294 11.2373L25.0834 10.2435V23.8333C25.0834 24.4155 24.8817 24.9083 24.4784 25.3117C24.075 25.715 23.5822 25.9167 23 25.9167H13ZM23 24.6667C23.2361 24.6667 23.434 24.5868 23.5938 24.4271C23.7535 24.2674 23.8334 24.0694 23.8334 23.8333V12.1667H14.6667V21.75H22.1667V23.8333C22.1667 24.0694 22.2465 24.2674 22.4063 24.4271C22.566 24.5868 22.7639 24.6667 23 24.6667ZM15.6602 15.2917V14.0417H20.3877V15.2917H15.6602ZM15.6602 17.7917V16.5417H20.3877V17.7917H15.6602ZM22.1186 15.4037C21.9145 15.4037 21.7406 15.3319 21.5969 15.1883C21.4533 15.0446 21.3815 14.8707 21.3815 14.6667C21.3815 14.4626 21.4533 14.2887 21.5969 14.145C21.7406 14.0014 21.9145 13.9296 22.1186 13.9296C22.3226 13.9296 22.4965 14.0014 22.6402 14.145C22.784 14.2887 22.8559 14.4626 22.8559 14.6667C22.8559 14.8707 22.784 15.0446 22.6402 15.1883C22.4965 15.3319 22.3226 15.4037 22.1186 15.4037ZM22.1186 17.9037C21.9145 17.9037 21.7406 17.8319 21.5969 17.6883C21.4533 17.5446 21.3815 17.3707 21.3815 17.1667C21.3815 16.9626 21.4533 16.7887 21.5969 16.645C21.7406 16.5014 21.9145 16.4296 22.1186 16.4296C22.3226 16.4296 22.4965 16.5014 22.6402 16.645C22.784 16.7887 22.8559 16.9626 22.8559 17.1667C22.8559 17.3707 22.784 17.5446 22.6402 17.6883C22.4965 17.8319 22.3226 17.9037 22.1186 17.9037ZM13 24.6667H20.9167V23H12.1667V23.8333C12.1667 24.0694 12.2465 24.2674 12.4063 24.4271C12.566 24.5868 12.7639 24.6667 13 24.6667Z" fill="#733DD9" />
									</svg></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box-shadow-border">
					<div class="card-header py-2">
						<div class="card-title mt-1">
							<h6 class="mb-0">Total Quotations</h6>
						</div>
						<div class="card-tools">
							<div class="btn-group">
								<button type="button" class="btn bg-white border-0 btn-success btn-sm dropdown-toggle custom-dropdown" data-toggle="dropdown" data-offset="-52">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu custom-dropdown-list" role="menu">
									<a href="#" class="dropdown-item custom-dropdown-item">Pending</a>
									<a href="#" class="dropdown-item custom-dropdown-item">Complete</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body py-3">
						<div class="row">
							<div class="col-6">
								<h2 class="text-bold mb-0"><?= isset($aQuotationData) ? count($aQuotationData) : 0 ?></h2>
							</div>
							<div class="col-6 px-0">
								<span class="float-right"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="18" cy="18" r="17.5" fill="white" stroke="#733DD9" />
										<path d="M20.9167 24.3077L17.6636 21.0546L18.5417 20.1763L20.9167 22.5513L25.6411 17.8269L26.5192 18.7052L20.9167 24.3077ZM25.0834 16.3333H23.8334V12.4231C23.8334 12.359 23.8066 12.3002 23.7531 12.2469C23.6998 12.1934 23.6411 12.1667 23.5769 12.1667H21.75V14.3461H14.25V12.1667H12.4231C12.359 12.1667 12.3002 12.1934 12.2469 12.2469C12.1934 12.3002 12.1667 12.359 12.1667 12.4231V23.5769C12.1667 23.6411 12.1934 23.6998 12.2469 23.7531C12.3002 23.8066 12.359 23.8333 12.4231 23.8333H17.1667V25.0833H12.4231C12.0076 25.0833 11.6526 24.9362 11.3581 24.6419C11.0638 24.3474 10.9167 23.9924 10.9167 23.5769V12.4231C10.9167 12.0076 11.0638 11.6526 11.3581 11.3581C11.6526 11.0638 12.0076 10.9167 12.4231 10.9167H16.0946C16.21 10.5107 16.4459 10.1742 16.8021 9.90709C17.1584 9.64001 17.5577 9.50647 18 9.50647C18.4595 9.50647 18.8652 9.64001 19.2171 9.90709C19.5692 10.1742 19.8029 10.5107 19.9184 10.9167H23.5769C23.9925 10.9167 24.3475 11.0638 24.6419 11.3581C24.9362 11.6526 25.0834 12.0076 25.0834 12.4231V16.3333ZM18 12.2629C18.2147 12.2629 18.394 12.1911 18.5377 12.0473C18.6813 11.9036 18.7531 11.7243 18.7531 11.5096C18.7531 11.2949 18.6813 11.1156 18.5377 10.9719C18.394 10.8283 18.2147 10.7565 18 10.7565C17.7853 10.7565 17.6061 10.8283 17.4623 10.9719C17.3187 11.1156 17.2469 11.2949 17.2469 11.5096C17.2469 11.7243 17.3187 11.9036 17.4623 12.0473C17.6061 12.1911 17.7853 12.2629 18 12.2629Z" fill="#733DD9" />
									</svg>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box-shadow-border">
					<div class="card-header py-2">
						<div class="card-title mt-1">
							<h6 class="mb-0">Total Purchase Orders</h6>
						</div>
						<div class="card-tools">
							<div class="btn-group">
								<button type="button" class="btn bg-white border-0 btn-success btn-sm dropdown-toggle custom-dropdown" data-toggle="dropdown" data-offset="-52">
									<i class="fas fa-ellipsis-v"></i>
								</button>
								<div class="dropdown-menu" role="menu">
									<a href="#" class="dropdown-item custom-dropdown-item">Pending</a>
									<a href="#" class="dropdown-item custom-dropdown-item">Complete</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body py-3">
						<div class="row">
							<div class="col-6">
								<h2 class="text-bold mb-0"><?= isset($aPOData) ? count($aPOData) : 0 ?></h2>
							</div>
							<div class="col-6 px-0">
								<span class="float-right"><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="18" cy="18" r="17.5" fill="white" stroke="#733DD9" />
										<path d="M13 25.9167C12.4178 25.9167 11.925 25.715 11.5217 25.3117C11.1183 24.9083 10.9167 24.4168 10.9167 23.8371V21.75H13.4167V10.2435L14.5706 11.2373L15.7404 10.2435L16.9102 11.2373L18.0802 10.2435L19.25 11.2373L20.4198 10.2435L21.5898 11.2373L22.7596 10.2435L23.9294 11.2373L25.0833 10.2435V23.8333C25.0833 24.4155 24.8817 24.9083 24.4783 25.3117C24.075 25.715 23.5822 25.9167 23 25.9167H13ZM23 24.6667C23.2361 24.6667 23.434 24.5868 23.5938 24.4271C23.7535 24.2674 23.8333 24.0694 23.8333 23.8333V12.1667H14.6667V21.75H22.1667V23.8333C22.1667 24.0694 22.2465 24.2674 22.4063 24.4271C22.566 24.5868 22.7639 24.6667 23 24.6667ZM15.6602 15.2917V14.0417H20.3877V15.2917H15.6602ZM15.6602 17.7917V16.5417H20.3877V17.7917H15.6602ZM22.1185 15.4037C21.9145 15.4037 21.7406 15.3319 21.5969 15.1883C21.4533 15.0446 21.3815 14.8707 21.3815 14.6667C21.3815 14.4626 21.4533 14.2887 21.5969 14.145C21.7406 14.0014 21.9145 13.9296 22.1185 13.9296C22.3226 13.9296 22.4965 14.0014 22.6402 14.145C22.784 14.2887 22.8558 14.4626 22.8558 14.6667C22.8558 14.8707 22.784 15.0446 22.6402 15.1883C22.4965 15.3319 22.3226 15.4037 22.1185 15.4037ZM22.1185 17.9037C21.9145 17.9037 21.7406 17.8319 21.5969 17.6883C21.4533 17.5446 21.3815 17.3707 21.3815 17.1667C21.3815 16.9626 21.4533 16.7887 21.5969 16.645C21.7406 16.5014 21.9145 16.4296 22.1185 16.4296C22.3226 16.4296 22.4965 16.5014 22.6402 16.645C22.784 16.7887 22.8558 16.9626 22.8558 17.1667C22.8558 17.3707 22.784 17.5446 22.6402 17.6883C22.4965 17.8319 22.3226 17.9037 22.1185 17.9037ZM13 24.6667H20.9167V23H12.1667V23.8333C12.1667 24.0694 12.2465 24.2674 12.4063 24.4271C12.566 24.5868 12.7639 24.6667 13 24.6667Z" fill="#733DD9" />
									</svg>

								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card diff-section-card action-active element-border">
					<!-- action-active -->
					<div class="card-header border-0">
						<h1 class="card-title"><strong>Invoices</strong></h1><br><br>
						<p class="mb-0">Effortlessly create and share professional invoices to clients via Email and WhatsApp.</p>
					</div>
					<div class="card-body bg-none">
						<div class="invoice-action-section text-center">
							<img src="<?= base_url("public") ?>/images/dashboard/create-invoice.png" alt="">
						</div>
						<a href="<?= site_url($panel . '/invoice') ?>"><button class="btn  btn-block action-btn"><i class="nav-icon fas fa-plus"></i> Create New Invoice</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card diff-section-card element-border">
					<div class="card-header border-0">
						<h3 class="card-title"><strong>Quotations</strong></h3><br><br>
						<p class="mb-0">Seal the deal with customised quotations and win over potential clients.</p>
					</div>
					<div class="card-body bg-none">
						<div class="quotation-action-section text-center">
							<img src="<?= base_url("public") ?>/images/dashboard/quotation.png" alt="">
						</div>
						<a href="<?= site_url($panel . '/quotations') ?>"><button class="btn  btn-block action-btn"><i class="nav-icon fas fa-plus"></i> Create New Quotation</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card diff-section-card element-border">
					<div class="card-header border-0">
						<h3 class="card-title"><strong>Purchase Orders</strong></h3><br><br>
						<p class="mb-0">Seal the deal with customised quotations and win over potential clients.</p>
					</div>
					<div class="card-body bg-none">
						<div class="expenses-action-section text-center">
							<img src="<?= base_url("public") ?>/images/dashboard/create-invoice.png" alt="">
						</div>
						<a href="<?= site_url($panel . '/po') ?>"><button class="btn  btn-block action-btn"><i class="nav-icon fas fa-plus"></i> Create New Purchase Order</button></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card card-primary card-tabs">
					<div class="card-header bg-white px-0 pt-1">
						<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
							<li class="nav-item nav-tabs-custom">
								<a class="nav-link bg-none text-dark nav-tab-custom active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Invoices</a>
							</li>
							<li class="nav-item">
								<a class="nav-link bg-none text-dark nav-tab-custom" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Quotations</a>
							</li>
							<li class="nav-item">
								<a class="nav-link bg-none text-dark nav-tab-custom" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Purchase Orders</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="custom-tabs-one-tabContent">
							<div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
								<table class="table table-hover" style="border: 1px solid rgba(203, 213, 225, 1);">
									<thead class="table-header-bg">
										<tr>
											<th>#</th>
											<th>Invoice No.</th>
											<th>Billed by</th>
											<th>Billed to</th>
											<!-- <th style="display:none">Tax rate</th> -->
											<th>Invoice Date</th>
											<th>Due date</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php if (empty($aInvoiceData)) { ?>
											<tr class="text-center" style="box-shadow: 0px -4px 24px 0px #0000000D;">
												<td colspan="8" class="py-3">No Invoices found</td>
											</tr>
										<?php } else { ?>

											<?php $i = 1;
											foreach ($aInvoiceData as $data):
												if ($i >= 6) {
													break;
												}
											?>
												<tr id="">
													<td class="text-center align-middle"><?= $i++ ?></td>
													<td><?= $data['invoice_no'] ?></td>
													<td><?= $data['sender_comp_name'] ?></td>
													<td><?= $data['receiver_comp_name'] ?></td>
													<td><?= $data['invoice_date'] ?></td>
													<td><?= $data['due_date'] ?></td>
													<td><?= format_indian_currency($data['total_payable']) ?></td>
													<td type="button" class="text-center align-middle"><a href="<?= site_url($panel . "/invoice/update/" . $data['id']) ?>"><span class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></span>
														</a></td>
												</tr>
										<?php endforeach; } ?>
										<tr class="text-center" style="box-shadow: 0px -4px 24px 0px #0000000D;">
											<td colspan="8" class="py-3"><a href="<?= site_url($panel . "/manage_invoices")  ?>" style="color: #733DD9;font-weight: 700">View All &nbsp;<i class="fas fa-chevron-right"></i> </a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
								<table class="table table-hover" style="border: 1px solid rgba(203, 213, 225, 1);">
									<thead class="table-header-bg">
										<tr>
											<th>#</th>
											<th>Quotation No.</th>
											<th>Billed by</th>
											<th>Billed to</th>
											<!-- <th style="display:none">Tax rate</th> -->
											<th>Quotation Date</th>
											<th>Due date</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php if (empty($aQuotationData)) { ?>
											<tr class="text-center" style="box-shadow: 0px -4px 24px 0px #0000000D;">
												<td colspan="8" class="py-3">No Quotations found</td>
											</tr>
											<?php	} else { $i = 1;
											foreach ($aQuotationData as $data):
												if ($i >= 6) {
													break;
												}
											?>
												<tr id="">
													<td class="text-center align-middle"><?= $i++ ?></td>
													<td><?= $data['invoice_no'] ?></td>
													<td><?= $data['sender_comp_name'] ?></td>
													<td><?= $data['receiver_comp_name'] ?></td>
													<td><?= $data['invoice_date'] ?></td>
													<td><?= $data['due_date'] ?></td>
													<td><?= format_indian_currency($data['total_payable']) ?></td>
													<td type="button" class="text-center align-middle"><a href="<?= site_url($panel . "/quotations/update/" . $data['id']) ?>"><span class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></span>
														</a></td>
												</tr>
										<?php endforeach; } ?>
										<tr class="text-center" style="box-shadow: 0px -4px 24px 0px #0000000D;">
											<td colspan="8" class="py-3"><a href="<?= site_url($panel . "/manage_quotations")  ?>" style="color: #733DD9;font-weight: 700">View All &nbsp;<i class="fas fa-chevron-right"></i> </a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
								<table class="table table-hover" style="border: 1px solid rgba(203, 213, 225, 1);">
									<thead class="table-header-bg">
										<tr>
											<th>#</th>
											<th>PO No.</th>
											<th>Billed by</th>
											<th>Billed to</th>
											<!-- <th style="display:none">Tax rate</th> -->
											<th>PO Date</th>
											<th>Due date</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php if (empty($aPOData)) { ?>
											<tr class="text-center" style="box-shadow: 0px -4px 24px 0px #0000000D;">
												<td colspan="8" class="py-3">No Purchase Orders found</td>
											</tr>
											<?php  } else { $i = 1;
											foreach ($aPOData as $data):
												if ($i >= 6) {
													break;
												}
											?>
												<tr id="">
													<td class="text-center align-middle"><?= $i++ ?></td>
													<td><?= $data['invoice_no'] ?></td>
													<td><?= $data['sender_comp_name'] ?></td>
													<td><?= $data['receiver_comp_name'] ?></td>
													<td><?= $data['invoice_date'] ?></td>
													<td><?= $data['due_date'] ?></td>
													<td><?= format_indian_currency($data['total_payable']) ?></td>
													<td type="button" class="text-center align-middle"><a href="<?= site_url($panel . "/po/update/" . $data['id']) ?>"><span class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></span>
														</a></td>
												</tr>
										<?php endforeach; } ?>
										<tr class="text-center" style="box-shadow: 0px -4px 24px 0px #0000000D;">
											<td colspan="8" class="py-3"><a href="<?= site_url($panel . "/manage_purchase_orders")  ?>" style="color: #733DD9;font-weight: 700">View All &nbsp;<i class="fas fa-chevron-right"></i> </a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra_script') ?>
<script>
	$(document).ready(function() {
		$('.diff-section-card').on('click', function() {
			$('.diff-section-card').removeClass('action-active');
			$(this).addClass('action-active');
		});
	});
</script>
<?= $this->endSection() ?>