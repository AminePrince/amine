<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public $_table;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function ajouter($object=array())
	{
		$this->db->insert($this->_table, $object);

		return $this->db->insert_id();
	}

	public function modifier($id,$object=array())
	{
		$this->db->where('id', $id)->update($this->_table, $object);

	}

	public function supprimer($id)
	{
		$this->db->where('id', $id)->delete($this->_table);
	}

	public function get_all()
	{
		return $this->db->get($this->_table)->result();
	}

	public function get($id)
	{
		$etud= $this->db->where('id', $id)->get($this->_table)->result();

		return $etud[0];
	}

	public function get_by($object)
	{
		return $this->db->where($object)->get($this->_table)->result();
	}



}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */