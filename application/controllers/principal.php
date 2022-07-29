<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {

	//controlador login
	public function login()
	{
		
		if($_POST['correo'] && $_POST['contraseña'])
		{
			//llamado modelo
			$this->load->model('Site_model');
			$login=$this->Site_model->login($_POST);

			if($login){
				$array=array
				(
					"rut"=>$login[0]->RUT,
					"nombre"=>$login[0]->NOMBRE,
					"apellido"=>$login[0]->APELLIDO,
					"correo"=>$login[0]->CORREO,
					"contraseña"=>$login[0]->CONTRASEÑA
				);

				//Guardar Tipo de Usuario
				if(isset($login[0]->PROFESOR))
				{
					$array['tipo']="profesor";
				}else if(isset($login[0]->ALUMNO))
				{
					$array['tipo']="alumno";
				}

				$this->session->
				set_userdata($array);
				print_r($_SESSION);
			}
			

		}
		//llamado vista
		$this->load->view('login/login');
	}
	//controlador registro
	public function registro()
	{
		$this->load->view('login/registro');
	}
	
	//end log cntrl

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

	//inicio controlador de descargas

	public function carga()
	{
		
		//comienzo con controlador para envio de archivo a la bd
		
		if($_POST)
		{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			//$config['max_size']             = 100;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;
			$config['file_name']=uniqid().$_FILES['archivo']['name'];
			$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('archivo'))
				{
						echo "error";
				}
				else
				{
					$this->load->model('Site_model');
					$this->Site_model->uploadArchivo($_POST,$config['file_name']);
				}
		}
		else
		{
			echo null;
		}
		// llamado a la vista de la views  descarga
		$this->load->view('headfoot/header');
		$this->load->view('archivos/carga');
		$this->load->view('headfoot/footer');
	}
	// public function descarga()
	// {
	// 	$this->load->model('Site_model');
	//  	$data['tareas']=$this->Site_model->downloadArchivo("prueba1");  

	// 	$this->load->view('headfoot/header');
	// 	$this->load->view('archivos/descarga');
	// 	$this->load->view('headfoot/footer');
	// }

}
