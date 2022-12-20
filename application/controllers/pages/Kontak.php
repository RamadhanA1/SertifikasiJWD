<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/kontak');
		$this->load->view('template/footer');
	}
}
