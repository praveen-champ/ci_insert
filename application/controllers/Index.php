<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('index_model');


    }
    public function index()
    {
        $this->load->view('index');
    }

	public function insert_data()
	{
	
			$data['name']= $this->input->post('name');
			$data['email']= $this->input->post('email');
			$data['password']= $this->input->post('password');
			$this->index_model->insert($data);
			redirect('index');
	
	}
}