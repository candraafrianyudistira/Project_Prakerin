<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_Desa_Detail extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_tentangdesa");
        $this->load->helper('url');
    }

    public function index($id = null)
    {
        $data["tentang_desa"] = $tentang_desa->getById($id);
        if (!$data["tentang_desa"]) show_404();
        
        $this->load->view("tentang_desa/detail.php", $data);
    }
    
}

