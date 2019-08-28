<div class="pull-right">
	<a href="<?php echo site_url('tarif_master/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Tarif Master</th>
		<th>Tipe Perawatan</th>
		<th>Tarif</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tarif_master as $t){ ?>
    <tr>
		<td><?php echo $t['kd_tarif_master']; ?></td>
		<td><?php echo $t['tipe_perawatan']; ?></td>
		<td><?php echo $t['tarif']; ?></td>
		<td>
            <a href="<?php echo site_url('tarif_master/edit/'.$t['kd_tarif_master']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tarif_master/remove/'.$t['kd_tarif_master']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
