<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiant extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		

	 	 $this->_table="etudiant";
	}

		

}

/* End of file etudiant.php */
/* Location: ./application/models/etudiant.php */