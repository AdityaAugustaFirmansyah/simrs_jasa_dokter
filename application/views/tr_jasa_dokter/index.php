<div class="pull-right">
	<a href="<?php echo site_url('tr_jasa_dokter/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Tr Dokter</th>
		<th>Tgl Transaksi</th>
		<th>Kd Tarif Dokter</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tr_jasa_dokter as $t){ ?>
    <tr>
		<td><?php echo $t['kd_tr_dokter']; ?></td>
		<td><?php echo $t['tgl_transaksi']; ?></td>
		<td><?php echo $t['kd_tarif_dokter']; ?></td>
		<td>
            <a href="<?php echo site_url('tr_jasa_dokter/edit/'.$t['kd_tr_dokter']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tr_jasa_dokter/remove/'.$t['kd_tr_dokter']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
