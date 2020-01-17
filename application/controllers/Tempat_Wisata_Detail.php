<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_Wisata_Detail extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_wisata");
        $this->load->helper('url');
    }

    public function index($id = null)
    {
        $data["tempat_wisata"] = $tempat_wisata->getById($id);
        if (!$data["tempat_wisata"]) show_404();
        
        $this->load->view("tempatwisata/detail.php", $data);
    }
    
}

