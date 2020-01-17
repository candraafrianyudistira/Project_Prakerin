<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_bumdes extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $name;
    public $kategori;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($product_id = NULL)
    {
        return $this->db->get_where($this->_table, ["product_id" => $product_id])->row();
    }

    public function get_by_kategori()
    {
        return $this->db
                    ->get_where($this->_table,
                        array('kategori'=>'kerajinan'))->result();
    }

    public function pangan()
    {
        return $this->db
                    ->get_where($this->_table,
                        array('kategori'=>'pangan'))->result();
    }
}