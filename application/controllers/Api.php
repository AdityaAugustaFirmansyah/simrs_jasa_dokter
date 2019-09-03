<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path
require APPPATH . 'libraries/REST_Controller.php';

/**
 *
 * Controller Api
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller REST
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Api extends REST_Controller
{
    
  public function __construct($config ='rest')
  {
    parent::__construct($config);
    $this->load->database();
  }

  public function index_get()
  {
        $kontak = $this->db->get('tarif_dokter')->result();
        $this->response($kontak,200);
      
  }

}


/* End of file Api.php */
/* Location: ./application/controllers/Api.php */