<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 session_start();
 class main extends CI_Controller {

      //functions
      function __construct() {
parent::__construct();
// Load url helper
$this->load->helper('url');
$this->load->library('form_validation');
}
      public function login()
      {
           $this->load->view('login');
      }
      public function teacher(){
       $this->load->view('teacher');
     }
      public function login_validation()
      {
           $this->load->library('form_validation');
           $this->form_validation->set_rules('username', 'Username', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           if($this->form_validation->run())
           {
                //true
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //model function
                $this->load->model('main_model');
                if($this->main_model->can_login($username, $password))
                {
                     $session_data = array(
                          'username'     =>     $username
                     );
                     $this->session->set_userdata($session_data);
                     redirect(base_url() . 'main/enter');
                }
                else
                {
                     $this->session->set_flashdata('error', 'Invalid Username and Password');
                       $this->login();
                     //redirect(base_url() . 'main/login');
                }
           }
           else
           {
                //false
                $this->login();
           }
      }
      function enter(){
           if($this->session->userdata('username') != '')
           {
                echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
                echo '<label><a href="'.base_url

().'main/logout">Logout</a></label>';
           }
           else
           {
                redirect(base_url() . 'main/login');
           }
      }
      function logout()
      {
           $this->session->unset_userdata('username');
           redirect(base_url() . 'main/login');
      }
 }
