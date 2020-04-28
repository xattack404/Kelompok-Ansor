<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth_admin extends CI_Controller
{
public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->db->get_where('login', ['username' => $username])->row_array();
        if ($login) {
            if ($login['aktif'] == 1) {
                if (password_verify($password, $login['password'])) {
                    $data = [
                        'username' => $login['username'],
                        'posisi' => $login['posisi']
                    ];
                    $this->session->set_userdata('$data');
                    redirect(base_url('user'));
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                  Maaf Password Yang Dimasukan Salah!
                  </div>');
                    redirect('auth');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Akun Belum Di Aprov!
              </div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Maaf Username Tidak Ditemukan!
              </div>');
            redirect('auth');
        }
    }
}