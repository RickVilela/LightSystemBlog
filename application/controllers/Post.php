<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model("posts_model");
		$this->load->model("posts_recentes_model");
	 }

	public function index()
	{
		

		$data["posts"] = $this->posts_model->getPosts();
		$data["postsRecentes"] = $this->posts_recentes_model->getRecentPosts();
		$data["title"] = "Detalhes - Post";

        $this->load->view('templates/header', $data);
		$this->load->view('pages/post', $data);
		$this->load->view('templates/footer', $data);
	}
}
