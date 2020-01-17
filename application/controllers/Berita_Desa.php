<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_Desa extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_berita");
        $this->load->helper('url');
    }
    
      public function detail($id_berita){
 
        $this->load->model('m_berita');
 
        $detail = $this->m_berita->getById($id_berita);
        $data["berita_desa"] = $this->m_berita->getAll();
        $data['detail'] = $detail;
        $this->load->view('berita_desa/detail.php', $data);
 
    }
    
}

