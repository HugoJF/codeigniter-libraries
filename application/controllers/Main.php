<?php

	class Main extends CI_Controller
	{
		public function index()
		{
			$this->load->database();
			$this->load->library('DBConfig');
			$this->load->library('TableBuilder');
			$this->load->library('Paginator');

			echo '<pre>';
			echo '<h1>DBConfig Tests:</h1>';
			echo '<h1>TableBuilder Tests:</h1>';
			echo '<h1>Paginator Tests:</h1>';
			echo '</pre>';
		}
	}