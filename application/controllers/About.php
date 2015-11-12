<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$header_data = array(
			'title' => 'about'
			);
		$navigation_data = array(
			'page' => 'about'
			);
		$this->load->view('commons/header', $header_data);
		$this->load->view('commons/navigation', $navigation_data);
		$this->load->view('about');
		$this->load->view('commons/footer');
	}
}
