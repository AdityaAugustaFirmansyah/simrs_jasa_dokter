<div class="pull-right">
	<a href="<?php echo site_url('pengajuan_kenaikan_tarif/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Pengajuan</th>
		<th>Kd Dokter</th>
		<th>Alasan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pengajuan_kenaikan_tarif as $p){ ?>
    <tr>
		<td><?php echo $p['kd_pengajuan']; ?></td>
		<td><?php echo $p['kd_dokter']; ?></td>
		<td><?php echo $p['alasan']; ?></td>
		<td>
            <a href="<?php echo site_url('pengajuan_kenaikan_tarif/edit/'.$p['kd_pengajuan']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pengajuan_kenaikan_tarif/remove/'.$p['kd_pengajuan']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
