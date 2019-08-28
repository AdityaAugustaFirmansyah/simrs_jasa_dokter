<?php echo form_open('pengajuan_kenaikan_tarif/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="kd_dokter" class="col-md-4 control-label">Kd Dokter</label>
		<div class="col-md-8">
			<input type="text" name="kd_dokter" value="<?php echo $this->input->post('kd_dokter'); ?>" class="form-control" id="kd_dokter" />
		</div>
	</div>
	<div class="form-group">
		<label for="alasan" class="col-md-4 control-label">Alasan</label>
		<div class="col-md-8">
			<textarea name="alasan" class="form-control" id="alasan"><?php echo $this->input->post('alasan'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>