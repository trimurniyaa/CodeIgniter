<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_webgis extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function getAllData()
    {
        $query = $this->db->get('tb_luaswilayah'); 
        return $query->result_array(); 
    }
}