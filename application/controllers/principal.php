<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {

	//controladores basicos
	public function index()
	{
		$this->load->view('headfoot/header');
		$this->load->view('inicio');
		$this->load->view('headfoot/footer');
		print_r($_SESSION);
	}
	public function inicio()
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
	//vistas para admin
	public function inicioadmin()
	{
		if(isset($_SESSION['correo']))
		{
			$this->load->view('admin/headfoot/header');
			$this->load->view('admin/inicioadmin');
			$this->load->view('admin/headfoot/footer');
		}else
		{
			redirect(base_url()."principal/login","location");
		}
		
	}



	//----------------------------------Inicio funciones------------------------------------------------//
	//end ctl basic
	public function endsession()
	{
		session_destroy();
		redirect(base_url()."principal/index","location");
	}
	//controlador login
	public function login()
	{
		session_start();
		if(isset($_POST['correo']) && (isset($_POST['contraseña'])))
		{
			
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
				
				// if(isset($login[0]->PROFESOR))
				// {
				// 	$array['tipo']="profesor";
				// }else if(isset($login[0]->ALUMNO))
				// {
				// 	$array['tipo']="alumno";
				// }
				
				//aca se toman los datos de el inicio de sesion para lograr el logeo 
				$this->session->set_userdata($array);
				print_r($_SESSION);
			}
		}
		//llamado funcion loadviews
		
		$this->loadViews('login/login');	
	}

	//controlador carga de imagen login obligatorio
	public function loadViews($view,$data=null)
	{
		 if((isset($_SESSION['correo'])))
		 {

			redirect(base_url()."principal/inicioadmin","location");

			$this->load->view('admin/headfoot/header');
			$this->load->view('admin/inicioadmin');
			$this->load->view('admin/headfoot/footer');
		 }
		 else
		 {	
			if($view=="login/login")
			{
				$this->load->view("$view");
			}
			else
			{
				redirect(base_url()."principal/login","location");
			}
		 }


	}

	//inicio controlador de descargas
	public function carga()
	{
		//comienzo con controlador para envio de archivo a la bd
		if((isset($_SESSION['correo'])))
		{
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
				$this->load->view('admin/headfoot/header');
				$this->load->view('admin/carga');
				$this->load->view('admin/headfoot/footer');

		}else
		{
			redirect(base_url()."principal/login","location");	
		}
		
		
	}
	 public function descarga()
	{
		$this->load->model('Site_model');
	 	$data['tareas']=$this->Site_model->downloadArchivo("prueba1");  

		$this->load->view('headfoot/header');
		$this->load->view('archivos/descarga');
		$this->load->view('headfoot/footer');
	}

	/*public function login()
	{
		session_start();
		if(isset($_SESSION['']))

		$usuario=$_POST['correo'];
		$usuario=$_POST['contraseña'];

		
	
	}*/


}
