<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commentairess extends CI_Model {

public function ajouter($commentaire = array())
	{
		$this->db->insert('commentaire', $commentaire);
	}
	public function modifier($id,$commentaire = array())
	{

		$this->db->update('commentaire', $commentaire,array('id' => $id ));
	}
	public function supprimer($id)
	{
		$this->db->delete('commentaire',array('id' => $id ));
	}
	public function afficher()
	{
		return $this->db->get('commentaire');
	}
	public function get_com_by_id($id)
	{
		return $this->db->get_where('commentaire',array('id' => $id))->result();

	}
	

}

/* End of file commentaire.php */
/* Location: ./application/models/commentaire.php */