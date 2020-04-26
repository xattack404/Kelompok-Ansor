<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
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
            $data['judul'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
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


    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[login.username]', [
            'is_unique' => 'Username Telah Dipakai!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Pasword Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'posisi' => 3,
                'aktif' => 1,
                'tanggal' => time()
            ];

            $this->db->insert('login', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun Anda Telah dibuat. Silahkan Login!
          </div>');
            redirect('auth');
        }
    }
}
