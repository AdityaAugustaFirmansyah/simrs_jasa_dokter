 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Default Layout</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Default Layout</div>
            </div>
          </div>

          <div class="section-body">
            <div class="card">
              <?php
            if (isset($_view)) {
              if ($_view == 'tarif_dokter_master/index') {
                $this->load->view('tarif_dokter_master/index.php');
              }elseif ($_view == 'tarif_dokter_master/edit') {
                $this->load->view('tarif_dokter_master/edit');
              }elseif ($_view == 'tarif_dokter_master/add') {
                $this->load->view('tarif_dokter_master/add');
              }elseif ($_view == 'tarif_dokter/index') {
                $this->load->view('tarif_dokter/index');
              }elseif ($_view == 'tarif_dokter/add') {
                $this->load->view('tarif_dokter/add');
              }elseif ($_view == 'tarif_dokter/edit') {
                $this->load->view('tarif_dokter/edit');
              }elseif ($_view == 'tr_jasa_dokter/index') {
                $this->load->view('tr_jasa_dokter/index');
              }elseif ($_view == 'tr_jasa_dokter/add') {
                $this->load->view('tr_jasa_dokter/add');
              }elseif ($_view == 'tr_jasa_dokter/edit') {
                $this->load->view('tr_jasa_dokter/edit');
              }elseif ($_view == 'harga_jasa_dokter/index') {
                $this->load->view('harga_jasa_dokter/index');
              }elseif ($_view == 'harga_jasa_dokter/add') {
                $this->load->view('harga_jasa_dokter/add');
              }elseif ($_view == 'harga_jasa_dokter/edit') {
                $this->load->view('harga_jasa_dokter/edit');
              }elseif ($_view == 'pengajuan_kenaikan_tarif/index') {
                $this->load->view('pengajuan_kenaikan_tarif/index');
              }elseif ($_view == 'pengajuan_kenaikan_tarif/add') {
                $this->load->view('pengajuan_kenaikan_tarif/add');
              }elseif ($_view == 'pengajuan_kenaikan_tarif/edit') {
                $this->load->view('pengajuan_kenaikan_tarif/edit');
              }elseif ($_view == 'type_tarif_perawatan/index') {
                $this->load->view('type_tarif_perawatan/index');
              }elseif ($_view == 'type_tarif_perawatan/add') {
                $this->load->view('type_tarif_perawatan/add');
              }elseif ($_view == 'type_tarif_perawatan/edit') {
                $this->load->view('type_tarif_perawatan/edit');
              }
            }
              ?>
            </div>
          </div>
        </section>
      </div>