<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_INSERT extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
       
        $this->load->model('crud_model');


    }
    public function index()
    {
        $data['ayyas']=$this->crud_model->readContactData();
        $this->load->view('crud_insert',$data);
       

    }
}