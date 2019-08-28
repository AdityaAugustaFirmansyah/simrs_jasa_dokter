<div class="pull-right">
	<a href="<?php echo site_url('type_tarif_perawatan/add'); ?>" class="btn btn-success">Add</a>
	<a href="<?php echo site_url('type_tarif_perawatan/export'); ?>" class="btn btn-success">Export excel</a>
	<a href="<?php echo site_url('type_tarif_perawatan/exportPdf'); ?>" class="btn btn-success">Export pdf</a>
</div>

<div class="table-responsive">
	<table class="table table-striped table-bordered" id="tabledata">
		<thead>
			<tr>
				<th width="10">No</th>
				<th width="10">Kd type Perawatan</th>
				<th width="10">Kd jenis Master</th>
				<th width="10">kd tarif master</th>
				<th width="10">action</th>
			</tr>
		</thead>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		var table = $('#tabledata').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": {
				"url": "<?php echo site_url('type_tarif_perawatan/json')?>",
				"type": "POST"
			},
			"columnDefs": [{
					"targets": [0],
					"orderable": false

				},
				{
					"targets": -1,
					"data": null,
					"orderable": false,
					defaultContent: "<button class='btn-edit btn btn-info btn-xs'>Edit</button>|<button class='btn-delete btn btn-danger btn-xs'>Delete</button>"
				}
			]
		});
		$('#tabledata tbody').on('click', '.btn-edit', function () {
			var data = table.row( $(this).parents('tr') ).data();
        	location.replace("<?php echo site_url('type_tarif_perawatan/edit/')?>"+data[1])
			
		});

		$('#tabledata tbody').on('click', '.btn-delete', function () {
			var data = table.row( $(this).parents('tr') ).data();
        	location.replace("<?php echo site_url('type_tarif_perawatan/remove/')?>"+data[1])
		});
	});
</script>