<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function calendar()
	{
		$this->load->view("templates/template");
		$this->load->view("calendar");
		$this->load->view("templates/footer");

	}
}
