<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model("m_bumdes");
        $this->load->model("m_wisata");
        $this->load->model("m_berita");
        $this->load->model("m_kecamatan");
        $this->load->model("m_event");
        $this->load->helper('url');
	}

	public function index()
	{
        // load view admin/overview.php
        $data["tempat_wisata"] = $this->m_wisata->getAll();
        $data["products"] = $this->m_bumdes->getAll();
        $data["berita_desa"] = $this->m_berita->getAll();
        $data["kecamatan"] = $this->m_kecamatan->getAll();
        $data["event"] = $this->m_event->getAll();
        $this->load->view("home/index.php", $data);
	}

      public function detail($id_event){
 
        $this->load->model('m_event');
 
        $detail = $this->m_event->getById($id_event);
        $data["event"] = $this->m_event->getAll();
        $data['detail'] = $detail;
        $this->load->view('event/detail.php', $data);
 
    }

    public function berita($id_berita){
 
        $this->load->model('m_berita');
 
        $detail = $this->m_berita->getById($id_berita);
        $data["berita_desa"] = $this->m_berita->getAll();
        $data['detail'] = $detail;
        $this->load->view('berita_desa/detail.php', $data);
 
    }
}