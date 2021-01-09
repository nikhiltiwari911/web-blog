<?php
class User_details extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('product_model');
        $this->load->model('m_db');
        $this->load->library('session');
	}

	function index(){    
        $this->load->view('login');
        //$this->load->view('product_view');
    }

    function login(){
        if($this->session->userdata("user_id"))//If already logged in
        {

            redirect(base_url().'index.php/Blog/home');//redirect to the blog page
        }
        $data['error'] = 0;
        if($this->input->post())//data inputed for login
        {
            $username = $this->input->post('email', TRUE);
            $password = $this->input->post('password', TRUE);
            $user_type = $this->input->post('user_type', TRUE);
            $user = $this->product_model->login($username, $password, $user_type);
            if(!$user){ 
                $data['error'] = 1;
            }//when user doesn't exist
            else //when user exist
            {
                $this->session->set_userdata('user_id', $user['user_id']);
                $this->session->set_userdata('username', $user['email']);
                $this->session->set_userdata('user_type',$user['user_type']);
                redirect(base_url().'index.php/Blog/home');
            }
        }
        redirect(base_url().'index.php/Blog/home');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'index.php/User_details');
    }

    function product_data(){
        $data=$this->product_model->product_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->product_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->product_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->product_model->delete_product();
        echo json_encode($data);
    }

    function fetch(){
        $data=$this->product_model->fetch_product();
        echo json_encode($data);
    }

}

?>



