<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crud_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function readContactData()
    {
        $this->db->select('*');
        $this->db->from('ayya');
        $query = $this->db->get();
        return $query->result();
    }

    
}