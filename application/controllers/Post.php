<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$this->load->model("posts_model");
		$data["posts"] = $this->posts_model->index();
		$data["title"] = "Detalhes - Post";

        $this->load->view('templates/header', $data);
		$this->load->view('pages/post', $data);
		$this->load->view('templates/footer', $data);
	}

	public function details($id)
	{
		$this->load->model("posts_model");
		$this->load->model("posts_recentes_model");
		$this->load->model("comentarios_model");

		$data["postid"] = $this->posts_model->details($id);
		$data["comentarios"] = $this->comentarios_model->getComentarios($id);
		$data["qtdComentarios"] = $this->comentarios_model->getQtdComentarios($id);
		$data["posts"] = $this->posts_model->getPosts();
		$data["postsRecentes"] = $this->posts_recentes_model->getRecentPosts();
		$data["title"] = "Detalhes - Post";

        $this->load->view('templates/header', $data);
		$this->load->view('pages/post', $data);
		$this->load->view('templates/footer', $data);
	}

	public function pesquisar()
	{
		$this->load->model("busca_model");
	
		$data["title"] = "Resultado da pesquisa por ". $_POST["busca"] ."";
		$data["resultado"] = $this->busca_model->buscar($_POST);

        $this->load->view('templates/header', $data);
		$this->load->view('pages/search-result', $data);
		$this->load->view('templates/footer', $data);
	}

	
	public function addComentario()
	{
		$this->load->model("comentarios_model");
		$this->load->model("posts_model");

	
		$comentario["id_post"] = $this->uri->segment(4);
		$comentario = $_POST;
		$data["comentarios"] = $this->comentarios_model->addComentario($comentario);
	}

	public function getComentarios($id)
	{
		$this->load->model("comentarios_model");
	
		$comentarios = $this->comentarios_model->getComentarios($id);
		echo json_encode($comentarios);
	}

	public function fetch($id){
		if($this->input->is_ajax_request()){
			$posts = $this->bd->getComentarios($id);
			echo json_encode($posts);
		};
	}

}
