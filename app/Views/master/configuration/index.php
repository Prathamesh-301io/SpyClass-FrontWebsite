<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content') ?>
<div class="card card-default color-palette-box">
	<div class="card-header">
		<h2 class="card-title">
			GST Details
		</h2>
	</div>
	<form id="fAddConfiguration" method="post" action="<?= site_url($panel.'/masters/config/update'); ?>">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-12 col-sm-12 col-md-6 col-lg-4">
					<div class="form-group">
						<?= csrf_field() ?>
						<label for="gst">GST <span style="color: red;">*</span></label>
						<input type="number" name="gst" min="1" class="form-control" id="gst" placeholder="Please enter the GST" value="<?= isset($aConfiguration) && !empty($aConfiguration) ? $aConfiguration[0]['gst'] : '18'; ?>">
					</div>
				</div>
				<div class="col-sm-12 col-sm-12 col-md-6 col-lg-4 ">
					<div class="form-group">
						<label for="cgst">CGST <span style="color: red;">*</span></label>
						<input type="text" name="cgst" class="form-control" id="cgst" placeholder="Please enter the min CGST" value="<?= isset($aConfiguration) && !empty($aConfiguration) ? $aConfiguration[0]['cgst'] : '9'; ?>">
					</div>
				</div>
				<div class="col-sm-12 col-sm-12 col-md-6 col-lg-4 ">
					<div class="form-group">
						<label for="sgst">SGST <span style="color: red;">*</span></label>
						<input type="number" name="sgst" class="form-control" id="sgst" min="1" placeholder="Please enter SGST" value="<?= isset($aConfiguration) && !empty($aConfiguration) ? $aConfiguration[0]['sgst'] : '9'; ?>">
					</div>
				</div>
			</div>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra_script') ?>
<?= view('master/configuration/validation'); ?>
<?= $this->endSection() ?>