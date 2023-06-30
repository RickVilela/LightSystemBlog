<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
	
		
		$data["title"] = "Admin - MultWin";

		
		$this->load->view('pages/admin', $data);
		
	}
}
