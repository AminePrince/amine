<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commentaire extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('commentairess');

		$this->load->helper('url');
	}

	public function index()
	{		
		$var["records"] =$this->commentairess->afficher()->result();
		
		
		$this->load->view('commentaires/index', $var, FALSE);
		
	}
	public function news()
	{
		$this->load->view('commentaires/news');



	}
	public function create()
	{

		$this->commentairess->ajouter($this->input->post());

		redirect(base_url().'commentaire','refresh');

	}
	public function edit()
	{
		
		$this->commentairess->modifier($this->input->post()["id"],$this->input->post());

		redirect(base_url().'commentaire','refresh');
	}
	public function update($id)
	{
		$var["records"] =$this->commentairess->get_com_by_id($id);
	
		var_dump($var);

		$this->load->view('commentaires/edit', $var, FALSE);
	}
	public function delete($id)
	{
		$this->commentairess->supprimer($id);

		redirect(base_url().'commentaire','refresh');
	}
	public function show($id)
	{
		# code...
	}


}

/* End of file commentaire.php */
/* Location: ./application/controllers/commentaire.php */