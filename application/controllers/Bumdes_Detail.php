<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bumdes_Detail extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_bumdes");
        $this->load->helper('url');
    }

    public function index($id = null)
    {
        $data["bumdes"] = $bumdes->getById($id);
        if (!$data["bumdes"]) show_404();
        
        $this->load->view("bumdes/detail.php", $data);
    }
    
}

