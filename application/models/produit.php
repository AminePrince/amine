<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Model {

	public function ajouter($produit = array( ))
	{
		$this->db->insert('produit', $produit);
	}
	
	public function modifier($id,$produit=array())
	{
		
		$this->db->update('produit', $produit)->where('id',$id);
	}	
	
	public function supprimer($id)
	{

		$this->db->delete('produit',array('id' => $id ));

	}

	public function get_all()
	{
		return $this->db->get('produit')->result();

	}

	public function get_by_id($id)
	{
		$p= $this->db->get_where('produit',array('id' => $id ))->result();

		return $p[0];
	}			
	


}

/* End of file produit.php */
/* Location: ./application/models/produit.php */