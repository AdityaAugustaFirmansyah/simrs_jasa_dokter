<div class="pull-right">
	<a href="<?php echo site_url('dokter/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Kd Dokter</th>
		<th>Nm Dokter</th>
		<th>Jk</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Gol Drh</th>
		<th>Agama</th>
		<th>Almt Tgl</th>
		<th>No Telp</th>
		<th>Stts Nikah</th>
		<th>Kd Sps</th>
		<th>Alumni</th>
		<th>No Ijn Praktek</th>
		<th>Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($dokter as $d){ ?>
    <tr>
		<td><?php echo $d['kd_dokter']; ?></td>
		<td><?php echo $d['nm_dokter']; ?></td>
		<td><?php echo $d['jk']; ?></td>
		<td><?php echo $d['tmp_lahir']; ?></td>
		<td><?php echo $d['tgl_lahir']; ?></td>
		<td><?php echo $d['gol_drh']; ?></td>
		<td><?php echo $d['agama']; ?></td>
		<td><?php echo $d['almt_tgl']; ?></td>
		<td><?php echo $d['no_telp']; ?></td>
		<td><?php echo $d['stts_nikah']; ?></td>
		<td><?php echo $d['kd_sps']; ?></td>
		<td><?php echo $d['alumni']; ?></td>
		<td><?php echo $d['no_ijn_praktek']; ?></td>
		<td><?php echo $d['status']; ?></td>
		<td>
            <a href="<?php echo site_url('dokter/edit/'.$d['kd_dokter']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('dokter/remove/'.$d['kd_dokter']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
