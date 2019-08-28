<div class="pull-right">
	<a href="<?php echo site_url('tarif_dokter/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Tarif Dokter</th>
		<th>Kd Dokter</th>
		<th>No Rawat</th>
		<th>Kd Type Prwtn</th>
		<th>Perawatan</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tarif_dokter as $t){ ?>
    <tr>
		<td><?php echo $t['kd_tarif_dokter']; ?></td>
		<td><?php echo $t['kd_dokter']; ?></td>
		<td><?php echo $t['no_rawat']; ?></td>
		<td><?php echo $t['kd_type_prwtn']; ?></td>
		<td><?php echo $t['perawatan']; ?></td>
		<td>
            <a href="<?php echo site_url('tarif_dokter/edit/'.$t['kd_tarif_dokter']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tarif_dokter/remove/'.$t['kd_tarif_dokter']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
