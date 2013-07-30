<?php

	class Main extends CI_Controller
	{
		public function index()
		{
			$this->load->database();
			$this->load-library('DBConfig');
			$this->load-library('TableBuilder');
			$this->load-library('Paginator');



		}
	}