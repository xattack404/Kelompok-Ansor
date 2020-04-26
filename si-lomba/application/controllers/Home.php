<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/template/navbar.php');
		$this->load->view('home/index');
		$this->load->view('home/template/footer.php');
		
		}

}
