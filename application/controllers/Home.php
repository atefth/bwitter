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
		$bweets = $this->db->query('select * from bweets')->result();
		$home_data = array(
			'bweets' => $bweets
			);
		$this->load->view('commons/header', $header_data);
		$this->load->view('commons/navigation', $navigation_data);
		$this->load->view('home', $home_data);
		$this->load->view('commons/footer');
	}

	public function create()
	{
		$this->load->database();
		$this->load->helper('url');
		$bweet = $_POST['bweet'];
		$email = $_POST['email'];
		$time = time();
		$this->db->query("insert into bweets (bweet, email, created) values ('$bweet', '$email', '$time')");
		redirect('home');
	}
}
