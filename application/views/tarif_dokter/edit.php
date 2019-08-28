<?php echo form_open('tarif_dokter/edit/'.$tarif_dokter['kd_tarif_dokter'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="kd_dokter" class="col-md-4 control-label">Kd Dokter</label>
		<div class="col-md-8">
			<input type="text" name="kd_dokter" value="<?php echo ($this->input->post('kd_dokter') ? $this->input->post('kd_dokter') : $tarif_dokter['kd_dokter']); ?>" class="form-control" id="kd_dokter" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_rawat" class="col-md-4 control-label">No Rawat</label>
		<div class="col-md-8">
			<input type="text" name="no_rawat" value="<?php echo ($this->input->post('no_rawat') ? $this->input->post('no_rawat') : $tarif_dokter['no_rawat']); ?>" class="form-control" id="no_rawat" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_type_prwtn" class="col-md-4 control-label">Kd Type Prwtn</label>
		<div class="col-md-8">
			<input type="text" name="kd_type_prwtn" value="<?php echo ($this->input->post('kd_type_prwtn') ? $this->input->post('kd_type_prwtn') : $tarif_dokter['kd_type_prwtn']); ?>" class="form-control" id="kd_type_prwtn" />
		</div>
	</div>
	<div class="form-group">
		<label for="perawatan" class="col-md-4 control-label">Perawatan</label>
		<div class="col-md-8">
			<textarea name="perawatan" class="form-control" id="perawatan"><?php echo ($this->input->post('perawatan') ? $this->input->post('perawatan') : $tarif_dokter['perawatan']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>