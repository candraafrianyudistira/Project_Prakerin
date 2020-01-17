<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bumdes extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_bumdes");
        $this->load->helper('url');
    }

    public function index()
    {
        $data["producte"] = $this->m_bumdes->get_by_kategori();
        $data["pangan"] = $this->m_bumdes->pangan();
        $this->load->view("bumdes/index.php", $data);
    }

     public function detail($product_id){
 
        $this->load->model('m_bumdes');
 
        $detail = $this->m_bumdes->getById($product_id);
        $data["bumdes"] = $this->m_bumdes->getAll();
        $data['detail'] = $detail;
        $data["producte"] = $this->m_bumdes->get_by_kategori();
        $data["pangan"] = $this->m_bumdes->pangan();
        $this->load->view('bumdes/detail.php', $data);
 
    }
}