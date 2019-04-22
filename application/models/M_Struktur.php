<?php

class M_Struktur extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('struktur', $data);
      return true;
    }catch(Exception $e){
    }
  }

// lihatdata-----------------------------
  public function data(){
   $this->db->select('*');
   $this->db->from('struktur');
   $data = $this->db->get();
   return $data->result();
  }

//editdata------------------------------
  public function getid($id){
    $this->db->where('id', $id);
    return $this->db->get('struktur')->result();
  }
  public function gambar($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('struktur')->row();
  }
  public function ubah($id, $data) {
    try{
      $this->db->where('id',$id)->limit(1)->update('struktur', $data);
      return true;
    }catch(Exception $e){}
}

//hapusdata----------------------------
// public function gambar($id){
//   $this->db->where('id', $id);
//   return $this->db->get('struktur')->row();
// }

public function hapus($id){
  $this->db->where('id', $id);
  $this->db->delete('struktur');
}


}
?>
