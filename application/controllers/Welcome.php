<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_webgis');
		$data['records'] = $this->Model_webgis->getAllData();
		$this->load->view('welcome_message', $data);
	}
}
