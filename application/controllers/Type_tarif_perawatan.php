<?php
 
class Type_tarif_perawatan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Type_tarif_perawatan_model');
        
    } 

    /*
     * Listing of type_tarif_perawatan
     */
    function index()
    {
        $data['type_tarif_perawatan'] = $this->Type_tarif_perawatan_model->get_all_type_tarif_perawatan();
        
        $data['_view'] = 'type_tarif_perawatan/index';
        $this->renderLayout($data);
    }

    /*
     * Adding a new type_tarif_perawatan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {     
            $params = array(
                'kd_type_prwtn' => $this->input->post('kd_type_prwtn'),
				'kd_jenis_perawatan' => $this->input->post('kd_jenis_perawatan'),
				'kd_tarif_master' => $this->input->post('kd_tarif_master'),
            );
            
            $type_tarif_perawatan_id = $this->Type_tarif_perawatan_model->add_type_tarif_perawatan($params);
            redirect('type_tarif_perawatan/index');
        }
        else
        {            
            $data['_view'] = 'type_tarif_perawatan/add';
            $this->renderLayout($data);
        }
    }  

    /*
     * Editing a type_tarif_perawatan
     */
    function edit($kd_type_prwtn)
    {   
        // check if the type_tarif_perawatan exists before trying to edit it
        $data['type_tarif_perawatan'] = $this->Type_tarif_perawatan_model->get_type_tarif_perawatan($kd_type_prwtn);
        
        if(isset($data['type_tarif_perawatan']['kd_type_prwtn']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kd_jenis_perawatan' => $this->input->post('kd_jenis_perawatan'),
					'kd_tarif_master' => $this->input->post('kd_tarif_master'),
                );

                $this->Type_tarif_perawatan_model->update_type_tarif_perawatan($kd_type_prwtn,$params);            
                redirect('type_tarif_perawatan/index');
            }
            else
            {
                $data['_view'] = 'type_tarif_perawatan/edit';
                $this->renderLayout($data);
            }
        }
        else
            show_error('The type_tarif_perawatan you are trying to edit does not exist.');
    } 

    /*
     * Deleting type_tarif_perawatan
     */
    function remove($kd_type_prwtn)
    {
        $type_tarif_perawatan = $this->Type_tarif_perawatan_model->get_type_tarif_perawatan($kd_type_prwtn);

        // check if the type_tarif_perawatan exists before trying to delete it
        if(isset($type_tarif_perawatan['kd_type_prwtn']))
        {
            $this->Type_tarif_perawatan_model->delete_type_tarif_perawatan($kd_type_prwtn);
            redirect('type_tarif_perawatan/index');
        }
        else
            show_error('The type_tarif_perawatan you are trying to delete does not exist.');
    }
    
    public function renderLayout($data)
    {
        $this->load->view('layout_tisla/header',$data);
        $this->load->view('layout_tisla/sidebar');
        $this->load->view('layout_tisla/maincontent');
        $this->load->view('layout_tisla/footer');
    }

    public function json()
    {
        $lists = $this->Type_tarif_perawatan_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($lists as $list) {
            $row = array();
            $no++;
            $row[] = $no;
            $row[] = $list->kd_type_prwtn;
            $row[] = $list->kd_jenis_perawatan;
            $row[] = $list->kd_tarif_master;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal"=>$this->Type_tarif_perawatan_model->count_all(),
            "recordsFiltered" => $this->Type_tarif_perawatan_model->count_filtered(),
            "data"=>$data,
        );
        echo json_encode($output);
    }

    public function export()
    {
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment;filename=Data_Type.Perawatan.xls");

        $data['type_tarif_perawatan'] = $this->Type_tarif_perawatan_model->get_all_type_tarif_perawatan();
        $this->load->view('export/exportExcel',$data);
    }

    public function exportPdf()
    {
        ob_start();
        $data['type_tarif_perawatan'] = $this->Type_tarif_perawatan_model->get_all_type_tarif_perawatan();
        $this->load->view('export/exportExcel',$data);
        $html = ob_get_contents();
        ob_end_clean();
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->writeHTML($html);
        $pdf->Output('Data_Type_Perawatan.pdf','D');
    }
}
