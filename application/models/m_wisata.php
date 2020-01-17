<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_wisata extends CI_Model
{
    private $_table = "tempat_wisata";

    public $id;
    public $name;
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
    
     public function getById($id = NULL)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
}