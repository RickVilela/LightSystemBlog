<?php

class Posts_recentes_model extends CI_Model {
    
    public function getRecentPosts()
    {
        return $this->db->query("SELECT * FROM posts LIMIT 3;")->result_array();
    }
}