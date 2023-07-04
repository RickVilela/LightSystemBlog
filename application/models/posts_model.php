<?php

class Posts_model extends CI_Model {
    
    public function getPosts()
    {
        return $this->db->get("posts")->result_array();		
    }

    public function details($id)
    {
        return $this->db->get_where("posts", array(
			"id" => $id
		))->row_array();
	}

	public function removerPosts($id)
	{
		$this->db->delete('posts', array('id' => $id));
	}

	public function editPost($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('posts', $data);
	}

}
