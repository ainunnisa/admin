<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_VisiMisi extends CI_Controller{
	
	function __construct()	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('M_VisiMisi');
	}

	public function index(){
		if ($this->session->userdata('login')==null) {
			$this->session->set_flashdata('error','Anda harus login dulu');
			redirect('C_Login/index');
		} else {
			$data = array(
			'data_vm' => $this->M_VisiMisi->getVM()
		);
		$this->load->view('V_VisiMisi',$data);
		}
		
	}

	public function input()
	{
		$this->load->view('V_VisiMisi');
	}

	public function input_aksi()
	{
		$id= $this->input->post('id');
		$Visi = $this->input->post('Visi');
		$Misi = $this->input->post('Misi');

		$data = array(
			'id' => $id,
			'Visi' => $Visi,
			'Misi' => $Misi
			);
		$this->M_VisiMisi->input_data($data,'visimisi');
		redirect('C_VisiMisi/index');
	}

	function hapus($id)
	{
		$this->load->model('M_VisiMisi');
		$this->M_VisiMisi->delete($id);
		redirect('C_VisiMisi/index');
	}

	// function update_data($id)
	// {
	// 	$this->load->model('M_VisiMisi');
	// 	if ($this->input->post('submit')) {
	// 		$this->M_VisiMisi->update($id);
	// 		redirect('C_VisiMisi/index');
	// 	}
	// 	$data['hasil']=$this->M_VisiMisi->getById($id);

	// 	$this->load->view('V_editVisiMisi',$data);
	// }

	 function edit_data()
    {
        $id = $this->uri->segment(3);
        $data['edit_data'] = $this->M_VisiMisi->edit_data_id($id);
       
        // $this->load->view('header_biodata.php');
        $this->load->view('V_editVisiMisi.php', $data);
    }
 
    function save_edit()
    {
        $id    = $this->input->post('id');
        $visi   = $this->input->post('visi');
        $misi  = $this->input->post('misi');
 
        $data = array(
        	'id' => $id,
        'visi' => $visi,
        'misi' => $misi
        );
       
        $this->M_VisiMisi->save_edit_data($id,$data);
        redirect('C_VisiMisi/index');
    }

}