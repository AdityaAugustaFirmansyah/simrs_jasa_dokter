<?php echo form_open('tr_jasa_dokter/edit/'.$tr_jasa_dokter['kd_tr_dokter'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tgl_transaksi" class="col-md-4 control-label">Tgl Transaksi</label>
		<div class="col-md-8">
			<input type="text" name="tgl_transaksi" value="<?php echo ($this->input->post('tgl_transaksi') ? $this->input->post('tgl_transaksi') : $tr_jasa_dokter['tgl_transaksi']); ?>" class="form-control" id="tgl_transaksi" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_tarif_dokter" class="col-md-4 control-label">Kd Tarif Dokter</label>
		<div class="col-md-8">
			<input type="text" name="kd_tarif_dokter" value="<?php echo ($this->input->post('kd_tarif_dokter') ? $this->input->post('kd_tarif_dokter') : $tr_jasa_dokter['kd_tarif_dokter']); ?>" class="form-control" id="kd_tarif_dokter" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>