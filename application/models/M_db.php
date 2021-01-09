<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_db extends CI_Model
{
    function get_posts($number, $start)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where('active',1);
        $this->db->order_by('date_added','desc');
        $this->db->limit($number, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all_posts()
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where('active',1);
        $this->db->order_by('date_added','asc');
        $query = $this->db->get();
        return $query->result_array();
    }

	function search_posts($query,$number,$start)
	{
        
		$this->db->select();
		$this->db->from('posts');
		$this->db->like("post_category", $query);
		$this->db->order_by('date_added', 'desc');
        $this->db->limit($number, $start);
		$query = $this->db->get();
		return $query->result_array();
	}
    function get_post_count()
    {
        $query = $this->db->query("SELECT count(*) as count FROM `posts` WHERE `active` = 1")->row();
        $count = $query->count;
        return $count;

    }

    function get_search_post_count($query)
    {
        $query = $this->db->query("SELECT count(*) as count FROM `posts` WHERE `post_category`  LIKE '%$query%' AND active = 1 ORDER BY date_added DESC")->row();
        $count = $query->count;
        return $count;

    }

    function get_post($post_id)
    {
        $this->db->select();
        $this->db->from('posts');
        $this->db->where(array('active'=>1,'post_id'=>$post_id));
        $this->db->order_by('date_added','desc');
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function insert_post($data)
    {
        $this->db->insert('posts',$data);
        return $this->db->insert_id();
    }
    
    function get_edit_data($post_id){
        $data = $this->db->query("SELECT * FROM `posts` WHERE `post_id` = $post_id")->row();
        return $data;
    }

    function update_post($post_id, $data)
    {
        $this->db->where('post_id',$post_id);
        $this->db->update('posts',$data);
    }
    
    function delete_post($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }

    function get_post_detail_data($post_id)
    {
        $data = $this->db->query("SELECT * FROM `posts` WHERE `post_id` = $post_id")->row();
        return $data;
    }
}
 ?> 