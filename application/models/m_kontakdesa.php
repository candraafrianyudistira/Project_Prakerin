<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_kontakdesa extends CI_Model
{
    private $_table = "kontak_desa";

    public $id;
    public $maps;
    public $email;
    public $alamat;
    public $telepon;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'telepon',
            'label' => 'Telepon',
            'rules' => 'numeric'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
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