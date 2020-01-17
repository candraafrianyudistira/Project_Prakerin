<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_berita extends CI_Model
{
    private $_table = "berita_desa";

    public $id_berita;
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

     public function getById($id_berita = NULL)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $id_berita])->row();
    }
}