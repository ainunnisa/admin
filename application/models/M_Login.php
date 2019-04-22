<?php  

class M_Login extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function proses_login($data){
		$query = $this->db->get_where('LoginAdmin',$data);
		if ($query->num_rows()==1){
			return $query->row();
		}else{
			return false;
		}
	}
}


/*
?>
*/