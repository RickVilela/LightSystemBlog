<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
	
		
		$data["title"] = "Admin - MultWin";

		
		$this->load->view('pages/admin', $data);
		
	}

	public function edit()
	{
	
		$this->load->model("posts_model");

		$data["title"] = "Edit Posts - MultWin";
		$data["posts"] = $this->posts_model->getPosts();
		
		$this->load->view('pages/posts-admin', $data);
		
	}

	public function remove()
	{
	
		$this->load->model("posts_model");

		$data["title"] = "Edit Posts - MultWin";
		$data["posts"] = $this->posts_model->getPosts();
		
		$this->load->view('pages/posts-admin', $data);
		
	}
}
