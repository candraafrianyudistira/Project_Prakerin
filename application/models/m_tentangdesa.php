
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_tentangdesa extends CI_Model
{
    private $_table = "tentang_desa";

    public $id;
    public $description;

    public function rules()
    {
        return [
            
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