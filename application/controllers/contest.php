<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contest extends CI_Controller {

	public function index()
	{

		public function count()
		{
			$this->load->model('user_model', 'userManager');
			
			//	Le nombre d'entrées dans la table du modèle userManager
			$nb_membres = $this->userManager->count();
			
			//	Une seule condition
			$nb_messages = $this->userManager->count('pseudo', 'Arthur');
			
			//	Multiples conditions
			$option = array();
			$option['titre']  = 'Mon Super Titre';
			$option['auteur'] = 'Arthur';
			$nb_messages_deux = $this->userManager->count($option);
		}

		public function accueil()
		{
			$this->load->model('user_model', 'userManager');

			$options_echappees = array();
			$options_echappees['pseudo'] = 'Arthur';
			$options_echappees['mot_de_passe'] = 'bonjour';

			$options_non_echappees = array();
			$options_non_echappees['date_inscription'] = 'NOW()';
				
			//	Renvoie false car les paramètres sont vides
			$resultat = $this->userManager->create();
				
			//	Renvoie true sans sauvegarder la date
			$resultat = $this->userManager->create($options_echappees);

			//	Renvoie true en sauvegardant la date comme une fonction SQL
			$resultat = $this->userManager->create($options_echappees, $options_non_echappees);
		}

		<?php

		public function index()
		{
			$this->load->library('layout');
			
			$this->layout->views('premiere_vue')
				     	 ->views('deuxieme_vue')
				     	 ->view('derniere_vue');
		}
	}

}

/* End of file contest.php */
/* Location: ./application/controllers/contest.php */