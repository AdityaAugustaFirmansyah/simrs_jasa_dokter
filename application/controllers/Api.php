<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path
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
require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Api extends REST_Controller
{

  function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

  public function index_get()
  {
    if(!empty($id)){
      $data = $this->db->get_where("items", ['id' => $id])->row_array();
  }else{
      $data = $this->db->get("tarif_dokter")->result();
  }

  $this->response($data, REST_Controller::HTTP_OK);
  }

  public function index_post()
  {
    $params = array(
      'kd_tarif_dokter' => $this->post('kd_tarif_dokter'),
      'kd_dokter' => $this->post('kd_dokter'),
      'no_rawat' => $this->post('no_rawat'),
      'kd_type_prwtn' => $this->post('kd_type_prwtn'),
      'perawatan' => $this->post('perawatan'),
    );
  
    $tarif_dokter_id = $this->db->insert('tarif_dokter',$params);
    if ($tarif_dokter_id) {
      $this->response($params);
    }else {
      $this->response(array('status'=>'fail',502));
    }
  }

  public function index_put()
  {
    $id = $this->put('kd_tarif_dokter');

    $params = array(
      'kd_dokter' => $this->put('kd_dokter'),
      'no_rawat' => $this->put('no_rawat'),
      'kd_type_prwtn' => $this->put('kd_type_prwtn'),
      'perawatan' => $this->put('perawatan'),);
        $this->db->where('kd_tarif_dokter',$id);
        $update = $this->db->update('tarif_dokter',$params);

        if ($update) {
          $this->response($params,200);
        }else {
          $this->response(array('status'=>'fail',502));
        }
  }

  public function index_delete()
  {
    $kd_tarif_dokter = $this->delete('tarif_dokter');
    $this->db->where('kd_tarif_dokter',$kd_tarif_dokter);
    $delete = $this->db->delete('tarif_dokter');
    if($delete){
      $this->response(array('status'=>'succes'),201);
    }else {
      $this->response(array('status'=>'fail'),502);
    }
  }

  public function countColumn()
    {
        return $this->db->count_all('tarif_dokter');
    }
}


/* End of file Api.php */
/* Location: ./application/controllers/Api.php */