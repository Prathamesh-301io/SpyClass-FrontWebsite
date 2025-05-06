<table class="table table-bordered">
	<thead class="table-header-bg" >
		<tr class="border-top">
			<th style="width: 10px">#</th>
			<th>Company Name</th>
			<th>GSTIN</th>
			<th>City</th>
			<th>State</th>
			<th>Zipcode</th>
			<th class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php if (empty($aClientData)) { ?>
			<tr>
				<td colspan="7" class="text-center">No Records Found</td>
			</tr>
			<?php } else {
			$i = 1;
			foreach ($aClientData as $client) {
			?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $client['company_name']; ?></td>
					<td><?= $client['company_gstin']; ?></td>
					<td><?= $client['city']; ?></td>
					<td><?= $client['state']; ?></td>
					<td><?= $client['zipcode']; ?></td>
					<td class="text-center">
						<a href="<?= site_url($panel . '/clients/edit/' . $client['id']) ?>"><span class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></span>
						</a>
						<a href="#" onclick="confirmStatusChange(1, <?= $client['id'] ?>)" title="Delete company" class="btn btn-danger btn-sm"><i class="fas fa-trash fa-md"></i></a>
					</td>
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
				message = 'Are you sure you want to delete this client?';
				break;
			default:
				return;
		}
		if (confirm(message)) {
			window.location.href = `<?= base_url($panel . '/clients/status') ?>/${status}/${id}`;
		}
	}
</script>