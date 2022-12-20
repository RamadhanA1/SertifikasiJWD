<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/artikel');
		$this->load->view('template/footer');
	}
}
