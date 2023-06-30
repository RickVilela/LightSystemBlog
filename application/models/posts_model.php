<?php

class Posts_model extends CI_Model {
    
    public function getPosts()
    {
        return $this->db->get("posts")->result_array();
    }
}