<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_principal extends CI_Controller {
	public function Index_principal()
	{
		$this->load->view('index');
    }
?>