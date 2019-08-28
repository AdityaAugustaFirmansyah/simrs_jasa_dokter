<div class="pull-right">
	<a href="<?php echo site_url('jns_perawatan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Jenis Prw</th>
		<th>Nm Perawatan</th>
		<th>Kd Kategori</th>
		<th>Material</th>
		<th>Bhp</th>
		<th>Tarif Tindakandr</th>
		<th>Tarif Tindakanpr</th>
		<th>Kso</th>
		<th>Menejemen</th>
		<th>Total Byrdr</th>
		<th>Total Byrpr</th>
		<th>Total Byrdrpr</th>
		<th>Kd Pj</th>
		<th>Kd Poli</th>
		<th>Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jns_perawatan as $j){ ?>
    <tr>
		<td><?php echo $j['kd_jenis_prw']; ?></td>
		<td><?php echo $j['nm_perawatan']; ?></td>
		<td><?php echo $j['kd_kategori']; ?></td>
		<td><?php echo $j['material']; ?></td>
		<td><?php echo $j['bhp']; ?></td>
		<td><?php echo $j['tarif_tindakandr']; ?></td>
		<td><?php echo $j['tarif_tindakanpr']; ?></td>
		<td><?php echo $j['kso']; ?></td>
		<td><?php echo $j['menejemen']; ?></td>
		<td><?php echo $j['total_byrdr']; ?></td>
		<td><?php echo $j['total_byrpr']; ?></td>
		<td><?php echo $j['total_byrdrpr']; ?></td>
		<td><?php echo $j['kd_pj']; ?></td>
		<td><?php echo $j['kd_poli']; ?></td>
		<td><?php echo $j['status']; ?></td>
		<td>
            <a href="<?php echo site_url('jns_perawatan/edit/'.$j['kd_jenis_prw']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jns_perawatan/remove/'.$j['kd_jenis_prw']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
