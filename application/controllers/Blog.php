<?php
class Blog extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_db');
        $this->load->library('session');
    }

    function home($start = 0)//index page
    {
       
        $data['posts'] = $this->m_db->get_posts(2, $start);
        $data['all_posts'] = $this->m_db->get_all_posts();

        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/blog/home';//url to set pagination
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        $data['query'] = "";
        
        $this->load->view('header');
        $this->load->view('blog', $data);
        $this->load->view('footer');
    }

    function search($start = 0)//index page
    {
        $query = $this->input->post('search');   
        $data['posts'] = $this->m_db->search_posts($query,2,$start);
        $data['all_posts'] = $this->m_db->get_all_posts();

        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/blog/search';//url to set pagination
        $config['total_rows'] = $this->m_db->get_search_post_count($query);
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links(); //Links of pages
        $data['query'] = $query; //Links of pages

        $this->load->view('header');
        $this->load->view('blog', $data);
        $this->load->view('footer');
    }

    function post($post_id)//single post page
    {
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comment($post_id);
        $data['post'] = $this->m_db->get_post($post_id);
        $class_name = ['home_class' => 'current', 'login_class' => '', 'register_class' => '', 'upload_class' => '', 'contact_class' => ''];
        $this->load->view('header', $class_name);
        $this->load->view('v_single_post', $data);
        $this->load->view('footer');
    }

    function new_post()//Creating new post page
    {
        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 2048; 
        $config['max_width']     = 6000; 
        $config['max_height']    = 6000;  
        $this->load->library('upload', $config);
            
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            // echo '<h1>'.$error['error'].'</h1>';
            // die();
         }
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $post_image = $data['upload_data']['file_name'];
         } 
        if ($this->input->post('post_category')) {
            $data = array(
                'post_category' => $this->input->post('post_category'),
                'post_image' => $post_image,
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'user_id' => $this->session->userdata('user_id'),
                'active' => 1,);
    
            $this->m_db->insert_post($data);
            redirect(base_url() . 'index.php/blog/home');
        } else {
            $this->load->view('header');
            $this->load->view('v_new_post');
            // $this->load->view('footer');
        }
    }

    function get_edit_data($post_id){
        $data['post_data'] = $this->m_db->get_edit_data($post_id);
        $this->load->view('header');
        $this->load->view('v_edit_post', $data);
    }

    function editpost($post_id)//Edit post page
    {
        $data['success'] = 0;
        $config['upload_path']   = './uploads/'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 1000; 
        $config['max_width']     = 1024; 
        $config['max_height']    = 768;  
        $this->load->library('upload', $config);
        
        $error = array();
        $image1 = $this->input->post('image_get_name');
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
         }
         else { 
            $data = array('upload_data' => $this->upload->data()); 
            $post_image = $data['upload_data']['file_name'];
         }
         if(sizeof($error)>0){
            $post_image = $image1;
        }else {
            $post_image = $post_image;
        }
         
        if ($this->input->post('post_category')) {
            $data = array('post_category' => $this->input->post('post_category'),
                'post_image' => $post_image,
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1,);
            $this->m_db->update_post($post_id, $data);
            $data['success'] = 1;
        }
        
        $data['post_data'] = $this->m_db->get_edit_data($post_id);        
        $this->load->view('header');
        $this->load->view('v_edit_post', $data);
        $this->load->view('footer');
    }

    function deletepost($post_id)//delete post page
    {
        $this->m_db->delete_post($post_id);
        redirect(base_url() . 'index.php/Blog/home');
    }

    function post_detail($post_id)
    {

        $data['posts'] = $this->m_db->get_post_detail_data($post_id);
        $data['all_posts'] = $this->m_db->get_all_posts();

        $this->load->view('header');
        $this->load->view('post_detail', $data);
          
    }
}

?>