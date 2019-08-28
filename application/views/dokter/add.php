<?php echo form_open('dokter/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nm_dokter" class="col-md-4 control-label">Nm Dokter</label>
		<div class="col-md-8">
			<input type="text" name="nm_dokter" value="<?php echo $this->input->post('nm_dokter'); ?>" class="form-control" id="nm_dokter" />
		</div>
	</div>
	<div class="form-group">
		<label for="jk" class="col-md-4 control-label">Jk</label>
		<div class="col-md-8">
			<input type="text" name="jk" value="<?php echo $this->input->post('jk'); ?>" class="form-control" id="jk" />
		</div>
	</div>
	<div class="form-group">
		<label for="tmp_lahir" class="col-md-4 control-label">Tmp Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tmp_lahir" value="<?php echo $this->input->post('tmp_lahir'); ?>" class="form-control" id="tmp_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="tgl_lahir" class="col-md-4 control-label">Tgl Lahir</label>
		<div class="col-md-8">
			<input type="text" name="tgl_lahir" value="<?php echo $this->input->post('tgl_lahir'); ?>" class="form-control" id="tgl_lahir" />
		</div>
	</div>
	<div class="form-group">
		<label for="gol_drh" class="col-md-4 control-label">Gol Drh</label>
		<div class="col-md-8">
			<input type="text" name="gol_drh" value="<?php echo $this->input->post('gol_drh'); ?>" class="form-control" id="gol_drh" />
		</div>
	</div>
	<div class="form-group">
		<label for="agama" class="col-md-4 control-label">Agama</label>
		<div class="col-md-8">
			<input type="text" name="agama" value="<?php echo $this->input->post('agama'); ?>" class="form-control" id="agama" />
		</div>
	</div>
	<div class="form-group">
		<label for="almt_tgl" class="col-md-4 control-label">Almt Tgl</label>
		<div class="col-md-8">
			<input type="text" name="almt_tgl" value="<?php echo $this->input->post('almt_tgl'); ?>" class="form-control" id="almt_tgl" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_telp" class="col-md-4 control-label">No Telp</label>
		<div class="col-md-8">
			<input type="text" name="no_telp" value="<?php echo $this->input->post('no_telp'); ?>" class="form-control" id="no_telp" />
		</div>
	</div>
	<div class="form-group">
		<label for="stts_nikah" class="col-md-4 control-label">Stts Nikah</label>
		<div class="col-md-8">
			<input type="text" name="stts_nikah" value="<?php echo $this->input->post('stts_nikah'); ?>" class="form-control" id="stts_nikah" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_sps" class="col-md-4 control-label">Kd Sps</label>
		<div class="col-md-8">
			<input type="text" name="kd_sps" value="<?php echo $this->input->post('kd_sps'); ?>" class="form-control" id="kd_sps" />
		</div>
	</div>
	<div class="form-group">
		<label for="alumni" class="col-md-4 control-label">Alumni</label>
		<div class="col-md-8">
			<input type="text" name="alumni" value="<?php echo $this->input->post('alumni'); ?>" class="form-control" id="alumni" />
		</div>
	</div>
	<div class="form-group">
		<label for="no_ijn_praktek" class="col-md-4 control-label">No Ijn Praktek</label>
		<div class="col-md-8">
			<input type="text" name="no_ijn_praktek" value="<?php echo $this->input->post('no_ijn_praktek'); ?>" class="form-control" id="no_ijn_praktek" />
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-4 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>