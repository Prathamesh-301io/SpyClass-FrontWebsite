<h5><strong>Business Details</strong><span class="float-right "></span></h5>
<!-- <a href="<?= site_url("/boards/companies/edit/".$company['id']) ?>" class="purple-new" ><i class="fas fa-edit"></i></a> -->
<!-- <form action="" method="post" id="billed-to-form"> -->
    <div class="row mb-1">
        <div class="col-md-6 col-sm-12">
            <span>Business Name :</span>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <span><?= $company['company_name']?esc($company['company_name']):' - ' ?></span>
            <input type="hidden"  name="billed_by_comp_name" value="<?= $company['company_name'] ?$company['company_name']:'' ?>"  >
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-6 col-sm-12">
            <span>Address :</span>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <span><?= $company['address'] ? esc($company['address']):' - ' ?> <?= $company['city'] ? ", ".$company['city']:'' ?> <?= $company['zipcode'] ? ", ".$company['zipcode']:'' ?></span>
            <input type="hidden" name="billed_by_address" value="<?= $company['address'] ? $company['address']:'' ?>"  >
        </div>
    </div>
    <div class="row mb-1 <?= $_ENV['SAHIL_CARGO_ID'] == $company['id'] ? 'd-none' : '' ?>">
        <div class="col-md-6 col-sm-12">
            <span>GSTIN : </span>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <span><?= $company['company_gstin'] ? esc($company['company_gstin']) : " - " ?></span>
            <input type="hidden" name="billed_by_company_gstin" value="<?= $company['company_gstin'] ? $company['company_gstin']:'' ?>"  >
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-6 col-sm-12 ">
            <span>State Name : </span>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <span><?= $company['state'] ? esc($company['state']) : " - " ?></span>
            <input type="hidden" name="billed_by_state" value="<?= $company['state'] ? $company['state']:'' ?>"  >
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-md-6 col-sm-12">
            <span>E-mail : </span>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <span><?= $company['company_email'] ? esc($company['company_email']) : " - " ?></span>
            <input type="hidden" name="billed_to_company_email" value="<?= $company['company_email'] ? $company['company_email']:'' ?>"  >
        </div>
    </div>
<!-- </form> -->
