<?php

class Comentarios_model extends CI_Model {

	public function addComentario($comentario)
	{
		$this->db->insert("comentarios", $comentario);
	}
    
    public function getComentarios($id)
    {
        return $this->db->get_where("comentarios", array(
			"id_post" => $id
		))->result_array();
	}
}
