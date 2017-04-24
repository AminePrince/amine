<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Don extends CI_Controller {

	public function page()
	{
		$this->load->view('service');	

	}

	public function page2()
	{
		$data = array('nom' =>"Hamid"  );
		$this->load->view('acceuil');
	}

}

/* End of file don.php */
/* Location: ./application/controllers/don.php */