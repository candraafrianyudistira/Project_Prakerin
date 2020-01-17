<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_kecamatan extends CI_Model
{
    private $_table = "kecamatan";

    public $id_kecamatan;
    public $nama_kecamatan;
    public $jumlah_kelurahan;
    public $nama_camat;
    public $link;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'nama_kecamatan',
            'label' => 'Nama_kecamatan',
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
}