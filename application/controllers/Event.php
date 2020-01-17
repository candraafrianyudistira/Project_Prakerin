<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event_Detail extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
        $this->load->model("m_event");
        $this->load->helper('url');
    }
    
      public function detail($id_event){
 
        $this->load->model('m_event');
 
        $detail = $this->m_event->getById($id_event);
        $data["event"] = $this->m_event->getAll();
        $data['detail'] = $detail;
        $this->load->view('event/detail.php', $data);
 
    }
    
}

