<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/produk');
		$this->load->view('template/footer');
	}
}
