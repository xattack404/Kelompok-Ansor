<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth_admin extends CI_Controller
{
public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_userlog');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
           
            $this->load->view('admin/loginadmin');
            
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        if(isset($_POST['submit'])){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hasil = $this->m_userlog->_login($username,$password);
        echo $hasil;
        }else{
            $this->load->view('admin/loginadmin');
        }
        
    }
}