<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	$this->load->model('etudiant','e');


	}

	public function index()
	{
		$data = array();

		$data['contacts']= $this->e->get_all();

		$data['notice']=$this->_notice;

		$this->load->view('contacts/index', $data, FALSE);		
	}

	public function create()
	{
		//$nom = array('name' =>  $this->input->post("nom"));

		$this->form_validation->set_rules('nom', 'le nom', 'trim|required|min_length[2]|max_length[12]');

		if ($this->form_validation->run() == TRUE ) {
		
		$this->e->ajouter($this->input->post());

		$this->_notice="Ajout effectué avec succéss";

		$this->index();
		} 
		else {
			$this->index();
		}
		

	}

	public function news()
	{
		$this->load->view('contacts/news.php');
	}
	

	public function edit($id)
	{
		// etudiant à modifier
		$data['etudiant']=$this->e->get($id);

		// liste des contacts

		$data['contacts']= $this->e->get_all();

		$this->load->view('contacts/index', $data, FALSE);

		
	}

	public function update()
	{
		$this->e->modifier($this->input->post('id'),$this->input->post());

		redirect('contacts/index');	
	}

	public function show($id)
	{
		 $data["prod"]= $this->produit->get_by_id($id);

		 $this->load->view('produits/show', $data);


	}
	public function delete($id)
	{
		$this->e->supprimer($id);

		redirect('contacts/index');
	}


}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */