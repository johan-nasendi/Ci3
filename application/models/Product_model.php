<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "users";

    public $no_id;
    public $nama;
    public $ttl;
    public $jenis_kelamin;
    public $agama;
    public $alamat;
    public $email;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'tll',
            'label' => 'Tll',
            'rules' => 'text'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->no_id = uniqid();
        $this->nama = $post["name"];
        $this->ttl = $post["price"];
        $this->jenis_kelamin = $post["name1"];
        $this->agama= $post["name2"];
        $this->email = $post["email"];
        $this->alamat = $post["address"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->no_id = $post["id"];
        $this->nama = $post["name"];
        $this->ttl = $post["price"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->agama = $post["agama"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('no_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("no_id" => $id));
    }

        public function _uploadImage () {
            $config['upload_path']  = './upload/product';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name']    = $this->no_id;
            $config['overwrite']    = true;
            $config['max_size']     = 1024; 
           
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('image')) {
                return $this->upload->data("file_name");
            }
            
            return "default.jpg";
            }
}
