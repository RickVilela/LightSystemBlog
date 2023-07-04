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

	public function remove($id)
	{
		$this->load->model("posts_model");

		$data["title"] = "Edit Posts - MultWin";
		$data["posts"] = $this->posts_model->removerPosts($id);
		
		$this->load->view('pages/posts-admin', $data);	
	}
	
	public function details($id)
	{
		$this->load->model("posts_model");

		$dados = $this->posts_model->details($id);
		echo json_encode($dados);
	
	}

	public function editPost($id)
	{
		$this->load->model("posts_model");

		$data = array(
			'titulo'=> $this->input->post('titulo'),
			'descricao'=> $this->input->post('descricao')
		);

		$dados = $this->posts_model->editPost($id, $data);
		echo json_encode($dados);
	
	}
}
