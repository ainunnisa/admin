<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_TugasFungsi extends CI_Controller{
	
	function __construct()	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('M_TugasFungsi');
	}

	public function index(){
		if ($this->session->userdata('login')==null) {
			$this->session->set_flashdata('error','Anda harus login dulu');
			redirect('C_Login/index');
		} else {
			$data = array(
			'data_tugas' => $this->M_TugasFungsi->getTugas(),
			'data_fungsi' => $this->M_TugasFungsi->getFungsi()
			);
			$this->load->view('V_TugasFungsi',$data);
		}
	}

	public function inputTugas()
	{
		$this->load->view('V_inputTugas');
	}

	public function inputFungsi()
	{
		$this->load->view('V_inputFungsi');
	}

	public function input_aksiTugas()
	{
		$id= $this->input->post('id');
		$tugas = $this->input->post('tugas');

		$data = array(
			'id' 	=> $id,
			'tugas' => $tugas
			);
		$this->M_TugasFungsi->input_data($data,'tugas');
		redirect('C_TugasFungsi/index');
	}

	public function input_aksiFungsi()
	{
		$id= $this->input->post('id');
		$fungsi = $this->input->post('fungsi');

		$data = array(
			'id' 	=> $id,
			'fungsi' => $fungsi
			);
		$this->M_TugasFungsi->input_data($data,'fungsi');
		redirect('C_TugasFungsi/index');
	}

	function hapusTugas($id)
	{
		$this->load->model('M_TugasFungsi');
		$this->M_TugasFungsi->deleteTugas($id);
		redirect('C_TugasFungsi/index');
	}

	function hapusFungsi($id)
	{
		$this->load->model('M_TugasFungsi');
		$this->M_TugasFungsi->deleteFungsi($id);
		redirect('C_TugasFungsi/index');
	}

	// function update_dataTugas($id)
	// {
	// 	$this->load->model('M_TugasFungsi');
	// 	if ($this->input->post('submit')) {
	// 		$this->M_TugasFungsi->updateTugas($id);
	// 		redirect('C_TugasFungsi/index');
	// 	}
	// 	$data['hasil']=$this->M_TugasFungsi->getByIdTugas($id);

	// 	$this->load->view('V_editTugas',$data);
	// }

	function edit_dataTugas()
    {
        $id = $this->uri->segment(3);
        $data['edit_dataTugas'] = $this->M_TugasFungsi->edit_data_id_tugas($id);
       
        // $this->load->view('header_biodata.php');
        $this->load->view('V_editTugas.php', $data);
    }
 
    function save_editTugas()
    {
        $id    = $this->input->post('id');
        $tugas   = $this->input->post('tugas');
 
        $data = array(
        'id' => $id,
        'tugas' => $tugas
        );
       
        $this->M_TugasFungsi->save_edit_data_tugas($id,$data);
        redirect('C_TugasFungsi/index');
    }

	// function update_dataFungsi($id)
	// {
	// 	$this->load->model('M_TugasFungsi');
	// 	if ($this->input->post('submit')) {
	// 		$this->M_TugasFungsi->updateFungsi($id);
	// 		redirect('C_TugasFungsi/index');
	// 	}
	// 	$data['hasil']=$this->M_TugasFungsi->getByIdFungsi($id);

	// 	$this->load->view('V_editFungsi',$data);
	// }

	function edit_dataFungsi()
    {
        $id = $this->uri->segment(3);
        $data['edit_dataFungsi'] = $this->M_TugasFungsi->edit_data_id_fungsi($id);
       
        // $this->load->view('header_biodata.php');
        $this->load->view('V_editFungsi.php', $data);
    }
 
    function save_editFungsi()
    {
        $id    = $this->input->post('id');
        $fungsi   = $this->input->post('fungsi');
 
        $data = array(
        'id' => $id,
        'fungsi' => $fungsi
        );
       
        $this->M_TugasFungsi->save_edit_data_fungsi($id,$data);
        redirect('C_TugasFungsi/index');
    }

}