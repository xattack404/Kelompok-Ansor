<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function index()
    {
        $data['login'] = $this->db->get_where('login', ['username' =>
        $this->session->userdata('username')])->row_array();
        echo 'Selamat Datang' . $data['login']['nama'];
    }
}
