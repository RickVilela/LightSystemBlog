<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{

		$this->load->model("posts_recentes_model");

		$data["postsRecentes"] = $this->posts_recentes_model->getRecentPosts();
		$data["title"] = "Contato - Light System";

        $this->load->view('templates/header', $data);
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/footer', $data);
	}
}
