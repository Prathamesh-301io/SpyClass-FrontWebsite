<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-default color-palette-box">
            <div class="card-header">
                <h2 class="card-title">
                    <?= isset($aUnitData[0]['id']) ? "Update" : "Add"; ?> Unit
                </h2>
            </div>
            <form id="fCompanyDetails" method="post" action="<?= site_url($panel . '/masters/units/update') ?>">
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" name="unit_id" value="<?= isset($aUnitData[0]['id']) ? $aUnitData[0]['id'] : '' ?>">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="unit_name">Unit name <span style="color: red;">*</span></label>
                                <input type="text" name="unit_name" class="form-control" id="unit_name" placeholder="Enter unit name" value="<?= isset($aUnitData[0]['id']) ? $aUnitData[0]['unit_name'] : '' ?>">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="company_email">Unit notation <span style="color: red;">*</span></label>
                                <input type="text" name="unit_notation" class="form-control" id="unit_notation" placeholder="Enter unit notatoin" value="<?= isset($aUnitData[0]['id']) ? $aUnitData[0]['unit_notation'] : '' ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('extra_script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        // Define validation rules
        const validationRules = {
            unit_name: {
                required: true,
                maxlength: 20
            },     
            unit_notation: {
                maxlength: 20,
            },
        };
        // Define validation messages
        const validationMessages = {
            unit_name: {
                required: "Please enter unit name",
                maxlength: "Max 20 characters",
            },     
            unit_notation: {
                required: "Please enter unit notation",
                maxlength: "Max 20 characters",
            },
        };

        // Initialize validation for both forms
        $("#fCompanyDetails").validate({
            rules: validationRules,
            messages: validationMessages,
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
<?= $this->endSection(); ?>