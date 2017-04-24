<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiants extends CI_Controller {

	
	public $_notice="";

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('etudiant','e');


	}

	public function index($format="html")
	{
		$data = array();

		$data['etudiants']= $this->e->get_all();

		$data['notice']=$this->_notice;

		if($format=="html")

		{
			$this->load->view('etudiants/index', $data, FALSE);	
		}
		else
		{
			
			header('Content-Type: application/json');
			
			
			echo json_encode($data['etudiants']);
			
			$tab = array();


		}

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
		$this->load->view('etudiants/news.php');
	}
	

	public function edit($id)
	{
		// etudiant à modifier
		$data['etudiant']=$this->e->get($id);

		// liste des etudiants

		$data['etudiants']= $this->e->get_all();

		$this->load->view('etudiants/index', $data, FALSE);

		
	}

	public function update()
	{
		$this->e->modifier($this->input->post('id'),$this->input->post());

		redirect('etudiants/index');	
	}

	public function show($id,$format="html")
	{

		$data["etud"]= $this->e->get($id);

		if ($format == "html") {
		
		
		$this->load->view('etudiants/show', $data);
	
		}

		if ($format == "json") {
			
			header("Content-Type:'Application/json");

			echo json_encode($data);

		}
		 

		 

	}
	public function delete($id)
	{
		$this->e->supprimer($id);

		//redirect('etudiants/index');

		echo "Superssion Okkk !!";
	}


}

/* End of file etudiants.php */
/* Location: ./application/controllers/etudiants.php */