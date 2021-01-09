<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Product_model extends CI_Model{
// 
function login($username, $password, $user_type)
    {
        $match = array(
            'email'=>$username,
            'password' => $password,
            'user_type' => $user_type
        );
        
        $this->db->select()->from('users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }

 
    function product_list(){
        $hasil=$this->db->get('employee_detail');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'emp_id'  => $this->input->post('emp_id'), 
                'emp_name'  => $this->input->post('emp_name'), 
                'emp_phone' => $this->input->post('emp_phone'), 
            );
        $result=$this->db->insert('employee_detail',$data);
        return $result;
    }
 
    function update_product(){
        $emp_id=$this->input->post('emp_id');
        $emp_name=$this->input->post('emp_name');
        $emp_phone=$this->input->post('emp_phone');
 
        $this->db->set('emp_name', $emp_name);
        $this->db->set('emp_phone', $emp_phone);
        $this->db->where('emp_id', $emp_id);
        $result=$this->db->update('employee_detail');
        return $result;
    }

    function fetch_product(){
        $query=$this->input->post('query');
        
        $result1=$this->db->query("SELECT * FROM `employee_detail` WHERE `emp_name` LIKE '%$query%' OR `emp_phone` LIKE '%$query%'");
        return $result1->result();
    }
 
    function delete_product(){
        $emp_id=$this->input->post('product_code');
        $this->db->where('emp_id', $emp_id);
        $result=$this->db->delete('employee_detail');
        return $result;
    }
     
}
