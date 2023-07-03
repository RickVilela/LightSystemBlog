<?php

class Comentarios_model extends CI_Model {

	public function addComentario($comentario)
	{
		echo $this->db->insert("comentarios", $comentario);
	}
    
    public function getComentarios($id)
    {
        return $query = $this->db->get_where("comentarios", array(
			"id_post" => $id
		))->result_array();
	}

	public function getQtdComentarios($id)
    {
		$query = $this->db->query("SELECT * FROM comentarios WHERE id_post = $id");

		return $query->num_rows();
	}


}
