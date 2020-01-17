<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_Desa_Detail extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_kontakdesa");
        $this->load->helper('url');
    }

    public function index($id = null)
    {
        $data["kontak_desa"] = $kontak_desa->getById($id);
        if (!$data["kontak_desa"]) show_404();
        
        $this->load->view("kontak_desa/detail.php", $data);
    }
    
}

