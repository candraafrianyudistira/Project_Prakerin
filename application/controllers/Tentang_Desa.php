<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_Desa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_tentangdesa");
        $this->load->helper('url');
    }

    public function index()
    {
       
        $data["tentang_desa"] = $this->m_tentangdesa->getAll();
        $this->load->view("tentang_desa/index.php", $data);
    }

     public function detail($id){
 
        $this->load->model('m_tentangdesa');
 
        $detail = $this->m_tentangdesa->getById($id);
        $data["tentang_desa"] = $this->m_tentangdesa->getAll();
        $data['detail'] = $detail;
        $this->load->view('tentang_desa/detail.php', $data);
 
    }
}