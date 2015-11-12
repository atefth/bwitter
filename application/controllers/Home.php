<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$header_data = array(
			'title' => 'home'
			);
		$navigation_data = array(
			'page' => 'home'
			);
		$this->load->view('commons/header', $header_data);
		$this->load->view('commons/navigation', $navigation_data);
		$this->load->view('home');
		$this->load->view('commons/footer');
	}
}
