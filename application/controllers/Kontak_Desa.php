<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_Desa extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_kontakdesa");
        $this->load->helper('url');
    }

    public function index()
    {
        $data["kontak_desa"] = $this->m_kontakdesa->getAll();
        $this->load->view("kontak_desa/index.php", $data);
    }

      public function detail($id){
 
        $this->load->model('m_kontakdesa');
 
        $detail = $this->m_kontakdesa->getById($id);
        $data["kontak_desa"] = $this->m_kontakdesa->getAll();
        $data['detail'] = $detail;
        $this->load->view('kontak_desa/detail.php', $data);
 
    }
}