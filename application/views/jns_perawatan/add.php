<?php echo form_open('jns_perawatan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nm_perawatan" class="col-md-4 control-label">Nm Perawatan</label>
		<div class="col-md-8">
			<input type="text" name="nm_perawatan" value="<?php echo $this->input->post('nm_perawatan'); ?>" class="form-control" id="nm_perawatan" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_kategori" class="col-md-4 control-label">Kd Kategori</label>
		<div class="col-md-8">
			<input type="text" name="kd_kategori" value="<?php echo $this->input->post('kd_kategori'); ?>" class="form-control" id="kd_kategori" />
		</div>
	</div>
	<div class="form-group">
		<label for="material" class="col-md-4 control-label">Material</label>
		<div class="col-md-8">
			<input type="text" name="material" value="<?php echo $this->input->post('material'); ?>" class="form-control" id="material" />
		</div>
	</div>
	<div class="form-group">
		<label for="bhp" class="col-md-4 control-label">Bhp</label>
		<div class="col-md-8">
			<input type="text" name="bhp" value="<?php echo $this->input->post('bhp'); ?>" class="form-control" id="bhp" />
		</div>
	</div>
	<div class="form-group">
		<label for="tarif_tindakandr" class="col-md-4 control-label">Tarif Tindakandr</label>
		<div class="col-md-8">
			<input type="text" name="tarif_tindakandr" value="<?php echo $this->input->post('tarif_tindakandr'); ?>" class="form-control" id="tarif_tindakandr" />
		</div>
	</div>
	<div class="form-group">
		<label for="tarif_tindakanpr" class="col-md-4 control-label">Tarif Tindakanpr</label>
		<div class="col-md-8">
			<input type="text" name="tarif_tindakanpr" value="<?php echo $this->input->post('tarif_tindakanpr'); ?>" class="form-control" id="tarif_tindakanpr" />
		</div>
	</div>
	<div class="form-group">
		<label for="kso" class="col-md-4 control-label">Kso</label>
		<div class="col-md-8">
			<input type="text" name="kso" value="<?php echo $this->input->post('kso'); ?>" class="form-control" id="kso" />
		</div>
	</div>
	<div class="form-group">
		<label for="menejemen" class="col-md-4 control-label">Menejemen</label>
		<div class="col-md-8">
			<input type="text" name="menejemen" value="<?php echo $this->input->post('menejemen'); ?>" class="form-control" id="menejemen" />
		</div>
	</div>
	<div class="form-group">
		<label for="total_byrdr" class="col-md-4 control-label">Total Byrdr</label>
		<div class="col-md-8">
			<input type="text" name="total_byrdr" value="<?php echo $this->input->post('total_byrdr'); ?>" class="form-control" id="total_byrdr" />
		</div>
	</div>
	<div class="form-group">
		<label for="total_byrpr" class="col-md-4 control-label">Total Byrpr</label>
		<div class="col-md-8">
			<input type="text" name="total_byrpr" value="<?php echo $this->input->post('total_byrpr'); ?>" class="form-control" id="total_byrpr" />
		</div>
	</div>
	<div class="form-group">
		<label for="total_byrdrpr" class="col-md-4 control-label">Total Byrdrpr</label>
		<div class="col-md-8">
			<input type="text" name="total_byrdrpr" value="<?php echo $this->input->post('total_byrdrpr'); ?>" class="form-control" id="total_byrdrpr" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_pj" class="col-md-4 control-label">Kd Pj</label>
		<div class="col-md-8">
			<input type="text" name="kd_pj" value="<?php echo $this->input->post('kd_pj'); ?>" class="form-control" id="kd_pj" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_poli" class="col-md-4 control-label">Kd Poli</label>
		<div class="col-md-8">
			<input type="text" name="kd_poli" value="<?php echo $this->input->post('kd_poli'); ?>" class="form-control" id="kd_poli" />
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