<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_Wisata extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_wisata");
        $this->load->helper('url');
    }

    public function index()
    {
        $data["tempat_wisata"] = $this->m_wisata->getAll();
        $this->load->view("tempatwisata/index.php", $data);
    }
     public function detail($id){
 
        $this->load->model('m_wisata');
 
        $detail = $this->m_wisata->getById($id);
        $data["tempat_wisata"] = $this->m_wisata->getAll();
        $data['detail'] = $detail;
        $this->load->view('tempatwisata/detail.php', $data);
 
    }
}