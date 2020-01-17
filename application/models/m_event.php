<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_event extends CI_Model
{
    private $_table = "event";

    public $id_event;
    public $name;
    public $kategori;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

           
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_event = NULL)
    {
        return $this->db->get_where($this->_table, ["id_event" => $id_event])->row();
    }
}