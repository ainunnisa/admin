<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_TugasFungsi extends CI_Model
{
	public function getTugas()
	{
		$query = $this->db->get('tugas');
		return $query->result();
	}

	public function getFungsi()
	{
		$query = $this->db->get('fungsi');
		return $query->result();
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function deleteTugas($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tugas');
		return;
	}

	function deleteFungsi($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('fungsi');
		return;
	}

	// function updateTugas($id)
	// {
	// 	$id 	=$this->input->post('id');
	// 	$tugas 	=$this->input->post('tugas');
	// 	$data 	=array(
	// 		'id'	=> $id,
	// 		'tugas' => $tugas
	// 		);
	// 	$this->db->where('id',$id);
	// 	$this->db->update('tugas',$data);
	// }

	// function updateFungsi($id)
	// {
	// 	$id 	=$this->input->post('id');
	// 	$fungsi =$this->input->post('fungsi');
	// 	$data 	=array(
	// 		'id'	=> $id,
	// 		'fungsi' => $fungsi
	// 		);
	// 	$this->db->where('id',$id);
	// 	$this->db->update('fungsi',$data);
	// }

	// function getByIdTugas($id)
	// {
	// 	return $this->db->get_where('tugas',array('id'=>$id))->row();
	// }

	// function getByIdFungsi($id)
	// {
	// 	return $this->db->get_where('fungsi',array('id'=>$id))->row();
	// }

	function edit_data_id_tugas($id)
	{
	    $this->db->select('*');
	    $this->db->from('tugas');
	    $this->db->where('id', $id);
	    $query = $this->db->get();
	    $result = $query->result();
	    return $result;
	}
	 
	function save_edit_data_tugas($id, $data)
	{
	    $this->db->where('id', $id);
	    $berhasil = $this->db->update('tugas', $data);
	    if($berhasil)
	    {
	        redirect('/C_TugasFungsi/index/');
	    }
	    else
	    {
	        redirect('/C_TugasFungsi/edit_dataTugas/');
	    }
	}


	function edit_data_id_fungsi($id)
	{
	    $this->db->select('*');
	    $this->db->from('fungsi');
	    $this->db->where('id', $id);
	    $query = $this->db->get();
	    $result = $query->result();
	    return $result;
	}
	 
	function save_edit_data_fungsi($id, $data)
	{
	    $this->db->where('id', $id);
	    $berhasil = $this->db->update('fungsi', $data);
	    if($berhasil)
	    {
	        redirect('/C_TugasFungsi/index/');
	    }
	    else
	    {
	        redirect('/C_TugasFungsi/edit_dataFungsi/');
	    }
	}


}