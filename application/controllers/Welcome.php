<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view("templates/template");
		$this->load->view("templates/content");
		$this->load->view("templates/footer");


	}
}
