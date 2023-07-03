<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{
		$data["title"] = "Contato - Light System";

        $this->load->view('templates/header', $data);
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/footer', $data);
	}
}
