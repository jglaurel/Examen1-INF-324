<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function indice2()
	{
		$otronombre=$_GET["otronombre"];
		$datos["minombre"]="laurel";
		$datos["miapellido"]="cossio";
		$datos["otronombre"]=$otronombre;
		$this->load->model("Academico_Model");
		$filas=$this->Academico_Model->consulta_alumnos();
		$datos["filas"]=$filas;

		//$this->load->view('welcome_message');
		$this->load->view('myVista',$datos);

	}
	public function indice3(){
		$otronombre=$_GET["ci"];
		$datos["minombre"]="laurel";
		$datos["miapellido"]="cossio";
		$datos["otronombre"]=$otronombre;

		$this->load->model("Academico_Model");
		$filas=$this->Academico_Model->consulta_alumnos_ci($otronombre);
		$datos["filas"]=$filas;

		$this->load->view('myVista',$datos);
	}
	public function index(){
		$this->load->view("index");
	}
}
?>