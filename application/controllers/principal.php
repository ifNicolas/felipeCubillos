<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {


	public function index()
	{
		$this->load->view('headfoot/header');
		$this->load->view('inicio');
		$this->load->view('headfoot/footer');
	}
	// aca van los controladores de las siguientes vistas
	public function profesores()
	{
		$this->load->view('headfoot/header');
		$this->load->view('profesores');
		$this->load->view('headfoot/footer');
	}
	public function proyectos()
	{
		$this->load->view('headfoot/header');
		$this->load->view('proyectos');
		$this->load->view('headfoot/footer');
	}
	public function contacto()
	{
		$this->load->view('headfoot/header');
		$this->load->view('contacto');
		$this->load->view('headfoot/footer');
	}
	public function formulario()
	{

		$this->load->view('formulario/contact');

	}

}
