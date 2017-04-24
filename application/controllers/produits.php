<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('produit');

		$this->output->enable_profiler(TRUE);

	}

	public function index()
	{
		$data=array();	

		$data['products']=$this->produit->get_all();

		$this->load->view('produits/index',$data);

	}

	public function news()
	{
		$this->load->view('produits/news.php');
	}

	public function create()
	{
		$this->load->model('produit');

				
		$this->produit->ajouter($this->input->post());

		redirect('produits/index');
	}

	public function edit($id='')
	{
		# code...
	}

	public function update($id='')
	{
		# code...
	}

	public function show($id)
	{
		 $data["prod"]= $this->produit->get_by_id($id);

		 $this->load->view('produits/show', $data);


	}
	public function delete($id)
	{
		$this->produit->supprimer($id);

		redirect('produits/index');
	}




}

/* End of file produits.php */
/* Location: ./application/controllers/produits.php */