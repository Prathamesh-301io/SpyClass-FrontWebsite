<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content'); ?>

<div class="row">
	<div class="col-sm-12">
		<div class="card card-default color-palette-box">
			<div class="card-header">
				<h2 class="card-title">
					<?= isset($aClientData['id']) ? "Update" : "Add"; ?> Client
				</h2>
			</div>
			<form id="fCompanyDetails" method="post" action="<?= site_url($panel . '/clients/add') ?>">
				<div class="card-body">
					<div class="row">
						<input type="hidden" name="Client_id" value="<?= isset($aClientData['id']) ? $aClientData['id'] : '' ?>">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="company_name">Company name <span style="color: red;">*</span></label>
								<input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" value="<?= isset($aClientData['id']) ? $aClientData['company_name'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="company_email">Company email <span style="color: red;">*</span></label>
								<input type="email" name="company_email" class="form-control" id="company_email" placeholder="Enter company email" value="<?= isset($aClientData['id']) ? $aClientData['company_email'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="company_gstin">GSTIN <span style="color: red;">*</span></label>
								<input type="text" name="company_gstin" class="form-control" id="company_gstin" placeholder="Enter company GSTIN." value="<?= isset($aClientData['id']) ? $aClientData['company_gstin'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="city">City <span style="color: red;">*</span></label>
								<input type="text" name="city" class="form-control" id="city" placeholder="Enter city." value="<?= isset($aClientData['id']) ? $aClientData['city'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="zipcode">Zipcode <span style="color: red;">*</span></label>
								<input type="number" name="zipcode" class="form-control" id="zipcode" placeholder="Enter zipcode." value="<?= isset($aClientData['id']) ? $aClientData['zipcode'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="state">State <span style="color: red;">*</span></label>
								<input type="text" name="state" class="form-control" id="state" placeholder="Enter state." value="<?= isset($aClientData['id']) ? $aClientData['state'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="address">Address <span style="color: red;">*</span></label>
								<!-- <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="<?= isset($aClientData['id']) ? $aClientData['address'] : '' ?>"> -->
								<textarea rows="1" name="address" id="address" class="form-control" placeholder="Enter address"><?= isset($aClientData['id']) ? $aClientData['address'] : '' ?></textarea>
							</div>
						</div>
					</div>
					<br>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('extra_script'); ?>
<?= view('clients/validation');  ?>
<?= $this->endSection(); ?>