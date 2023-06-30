<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("posts_model");
		$this->load->model("posts_recentes_model");

		$data["posts"] = $this->posts_model->getPosts();
		$data["postsRecentes"] = $this->posts_recentes_model->getRecentPosts();
		$data["title"] = "Novidades - MultWin";

		$this->load->view('templates/header', $data);
		$this->load->view('pages/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
