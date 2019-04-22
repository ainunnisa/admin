<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_Struktur extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Struktur');
    }

    public function input(){
      $this->load->view('V_inputStruktur', array('error' => ' ' ));
    }

    // lihatdata---------------------------------------------

    public function data(){
      if ($this->session->userdata('login')==null) {
          $this->session->set_flashdata('error','Anda harus login dulu');
          redirect('C_Login/index');
        } else {
          $data['struktur'] = $this->M_Struktur->data();
          $this->load->view('V_Struktur', $data);
        }
    }

    // inputdata---------------------------------------------
    
    public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './assets/images/',
        'allowed_types' => 'gif|jpg|png',
        'max_size' => 2048 
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          // $error = array('error' => $this->upload->display_errors()); //tampilkan error
          // $this->load->view('C_Struktur/input', $error);
          $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
          redirect('C_Struktur/input');
      } 
      else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['gambar' => $file['file_name'],
           'nama' => set_value('nama'),
           'jabatan' => set_value('jabatan')
         ];
          $this->M_Struktur->input($data); //memasukan data ke database
          redirect('C_Struktur/data'); //mengalihkan halaman
      }
  }


// editdata-----------------------------------------------

    public function ubah($id){
    $data['struktur'] = $this->M_Struktur->getid($id);
    $this->load->view('V_editStruktur', $data);
  }

  public function proses_ubah($id){
    $gambar = $this->M_Struktur->gambar($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/',
          'allowed_types' => 'gif|jpg|png',
          'max_size' => 2048 
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('update', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['gambar' => $file['file_name']];
            unlink('assets/images/'.$gambar->gambar); //menghapus gambar yang lama
        }
      }
      $data['nama']      = set_value('nama');
      $data['jabatan']   = set_value('jabatan');
      $this->M_Struktur->ubah($id, $data); //memasukan data ke database
      redirect('C_Struktur/data'); //mengalihkan halaman
  }

//hapusdata--------------------------

public function hapus($id){
  $gambar = $this->M_Struktur->gambar($id);
  unlink('assets/images/'.$gambar->gambar);
  $this->M_Struktur->hapus($id);
  redirect('C_Struktur/data'); //mengalihkan halaman
}


}
