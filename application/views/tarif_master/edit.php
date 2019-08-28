<?php echo form_open('tarif_master/edit/'.$tarif_master['kd_tarif_master'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tipe_perawatan" class="col-md-4 control-label">Tipe Perawatan</label>
		<div class="col-md-8">
			<input type="text" name="tipe_perawatan" value="<?php echo ($this->input->post('tipe_perawatan') ? $this->input->post('tipe_perawatan') : $tarif_master['tipe_perawatan']); ?>" class="form-control" id="tipe_perawatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="tarif" class="col-md-4 control-label">Tarif</label>
		<div class="col-md-8">
			<input type="text" name="tarif" value="<?php echo ($this->input->post('tarif') ? $this->input->post('tarif') : $tarif_master['tarif']); ?>" class="form-control" id="tarif" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>