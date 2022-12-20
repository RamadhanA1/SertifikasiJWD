<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/visimisi');
		$this->load->view('template/footer');
	}
}
