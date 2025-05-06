<?= $this->extend('layouts/board/index') ?>
<?= $this->section('content') ?>
<div class="card card-default color-palette-box">
    <div class="card-header">
        <h2 class="card-title">
            Manage Units
        </h2>
        <div class="card-tools">
            <a href="<?= site_url($panel . '/masters/units/new'); ?>">
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-plus"> </i> &nbsp;Add Unit
                </button>
            </a>
        </div>
    </div>
    <div class="card-header border-0">
        <br>
    </div>
    <div class="card-body table-responsive p-0" id="fCompanyDetails">
        <table class="table table-bordered">
            <thead class="table-header-bg">
                <tr class="border-top">
                    <th style="width: 10px">#</th>
                    <th>Unit name</th>
                    <th>Unit Notation</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($aUnitData as $unit): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $unit['unit_name'] ?></td>
                    <td><?= $unit['unit_notation'] ?></td>
                    <td class="text-center">
                        <a href="<?= site_url($panel . '/masters/units/edit/' . $unit['id']) ?>"><span class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></span>
                        </a>
                        <?php if($unit['is_active'] == 2) { ?>
                            <a onclick="confirmStatusChange(0, <?= $unit['id'] ?>)" title="Activate User" class="btn btn-success btn-sm"><i class="fas fa-check-circle fa-md"></i></a>
                            <a onclick="confirmStatusChange(1, <?= $unit['id'] ?>)" ><span class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></span>
                        <?php  }else{ ?>
                            <a onclick="confirmStatusChange(2, <?= $unit['id'] ?>)" ><span class="btn btn-warning btn-sm"><i class="fas fa-times-circle fa-md"></i></span>
                            </a>
                        <?php } ?>
                        </a>
                    </td>
                </tr>
                <?php  endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('extra_script') ?>
<script>
    	function confirmStatusChange(status, id) {
		let message = '';
		switch (status) {
			case 0:
                message = 'Are you sure you want to activate this unit?';
				break;
			case 2:
                message = 'Are you sure you want to deactivate this unit?';
				break;
			case 1:
				message = 'Are you sure you want to delete this unit?';
				break;
			default:
				return;
		}
		if (confirm(message)) {
			window.location.href = `<?= base_url($panel . '/masters/units/status') ?>/${status}/${id}`;
		}
	}
</script>
<?= $this->endSection() ?>