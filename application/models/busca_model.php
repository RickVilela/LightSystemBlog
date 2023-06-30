<?php

class Busca_model extends CI_Model {

	public function buscar($texto)
	{
		if(empty($texto))
		{
			return array();
		}

		$texto = $this->input->post("busca");
		$this->db->like("titulo", $texto);
		return $this->db->get("posts")->result_array();
	}
}
