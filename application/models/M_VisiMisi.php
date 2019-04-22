<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_VisiMisi extends CI_Model
{
	public function getVM()
	{
		$query = $this->db->get('visimisi');
		return $query->result();
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('visimisi');
		return;
	}

	// function update($id)
	// {
	// 	$id=$this->input->post('id');
	// 	$Visi=$this->input->post('Visi');
	// 	$Misi=$this->input->post('Misi');
	// 	$data=array(
	// 		'id'=>$id,
	// 		'Visi'=>$Visi,
	// 		'Misi'=>$Misi
	// 		);
	// 	$this->db->where('id',$id);
	// 	$this->db->update('visimisi',$data);
	// }

	function edit_data_id($id)
	{
	    $this->db->select('*');
	    $this->db->from('visimisi');
	    $this->db->where('id', $id);
	    $query = $this->db->get();
	    $result = $query->result();
	    return $result;
	}
	 
	function save_edit_data($id, $data)
	{
	    $this->db->where('id', $id);
	    $berhasil = $this->db->update('visimisi', $data);
	    if($berhasil)
	    {
	        redirect('/C_VisiMisi/index/');
	    }
	    else
	    {
	        redirect('/C_VisiMisi/edit_data/');
	    }
	}

	function getById($id)
	{
		return $this->db->get_where('visimisi',array('id'=>$id))->row();
	}

}