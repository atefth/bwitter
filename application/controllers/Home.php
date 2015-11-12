<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$header_data = array(
			'title' => 'home'
			);
		$navigation_data = array(
			'page' => 'home'
			);
			// TODO
			// Query DB for all bweets
		$home_data = array(
			// TODO
			// Replace empty array with results
			'bweets' => array()
			);
		$this->load->view('commons/header', $header_data);
		$this->load->view('commons/navigation', $navigation_data);
		$this->load->view('home', $home_data);
		$this->load->view('commons/footer');
	}
}
