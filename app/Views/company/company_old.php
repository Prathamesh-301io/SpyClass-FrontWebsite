<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content'); ?>

<div class="row">
	<div class="col-sm-12">
		<div class="card card-default color-palette-box">
			<div class="card-header">
				<h2 class="card-title">
					<?= isset($aCompanyData['id']) ? "Update" : "Add"; ?> Company
				</h2>
			</div>
			<form id="fCompanyDetails" method="post" action="<?= site_url($panel . '/companies/add') ?>">
				<div class="card-body">
					<div class="row">
						<input type="hidden" name="company_id" value="<?= isset($aCompanyData['id']) ? $aCompanyData['id'] : '' ?>">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="company_name">Company name <span style="color: red;">*</span></label>
								<input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter company name" value="<?= isset($aCompanyData['id']) ? $aCompanyData['company_name'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="company_email">Company email <span style="color: red;">*</span></label>
								<input type="email" name="company_email" class="form-control" id="company_email" placeholder="Enter company email" value="<?= isset($aCompanyData['id']) ? $aCompanyData['company_email'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="company_gstin">GSTIN <span style="color: red;">*</span></label>
								<input type="text" name="company_gstin" class="form-control" id="company_gstin" placeholder="Enter company GSTIN." value="<?= isset($aCompanyData['id']) ? $aCompanyData['company_gstin'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="city">City <span style="color: red;">*</span></label>
								<input type="text" name="city" class="form-control" id="city" placeholder="Enter city." value="<?= isset($aCompanyData['id']) ? $aCompanyData['city'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="zipcode">Zipcode <span style="color: red;">*</span></label>
								<input type="number" name="zipcode" class="form-control" id="zipcode" placeholder="Enter zipcode." value="<?= isset($aCompanyData['id']) ? $aCompanyData['zipcode'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="state">State <span style="color: red;">*</span></label>
								<input type="text" name="state" class="form-control" id="state" placeholder="Enter state." value="<?= isset($aCompanyData['id']) ? $aCompanyData['state'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="state">State code<span style="color: red;">*</span></label>
								<input type="number" name="state_code" class="form-control" id="state_code" placeholder="Enter state code." value="<?= isset($aCompanyData['id']) ? $aCompanyData['state_code'] : '' ?>">
							</div>
						</div>
						<div class="col-sm-8">
							<div class="form-group">
								<label for="address">Address <span style="color: red;">*</span></label>
								<!-- <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="<?= isset($aCompanyData['id']) ? $aCompanyData['address'] : '' ?>"> -->
								<textarea rows="1" name="address" id="address" class="form-control" placeholder="Enter address"><?= isset($aCompanyData['id']) ? $aCompanyData['address'] : '' ?></textarea>
							</div>
						</div>
					</div>
					<br>
					<h2 class="card-title">Bank Account Details</h2><br><br>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="bank_name">Enter bank name</label>
								<input type="text" class="form-control" name="bank_name" id="bank_name" value="<?= isset($aCompanyData['id']) ? $aCompanyData['bank_name'] : '' ?>" placeholder="Enter bank name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="account_holder_name">Account holder name</label>
								<input type="text" class="form-control" name="account_holder_name" id="account_holder_name" value="<?= isset($aCompanyData['id']) ? $aCompanyData['acc_holder_name'] : '' ?>" placeholder="Enter account holder name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="account_number">Account number</label>
								<input type="text" class="form-control" name="account_number" id="account_number" value="<?= isset($aCompanyData['id']) ? $aCompanyData['account_number'] : '' ?>" placeholder="Enter account number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="c_account_number">Confirm account number</label>
								<input type="text" class="form-control" name="c_account_number" id="c_account_number" value="<?= isset($aCompanyData['id']) ? $aCompanyData['account_number'] : '' ?>" placeholder="Confirm account number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="ifsc_code">IFSC code</label>
								<input type="text" class="form-control" name="ifsc_code" id="ifsc_code" value="<?= isset($aCompanyData['id']) ? $aCompanyData['ifsc_code'] : '' ?>" placeholder="Enter IFSC code">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="bank_branch">Bank branch</label>
								<input type="text" class="form-control" name="bank_branch" id="bank_branch" value="<?= isset($aCompanyData['id']) ? $aCompanyData['bank_branch'] : '' ?>" placeholder="Enter bank branch">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="ifsc_code">UPI ID</label>
								<input type="text" class="form-control" name="upi_id" id="upi_id" value="<?= isset($aCompanyData['id']) ? $aCompanyData['upi_id'] : '' ?>" placeholder="Enter UPI ID">
							</div>
						</div>
					</div>
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
<?= view('company/validation');  ?>
<?= $this->endSection(); ?>