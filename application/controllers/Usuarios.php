<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
	public function __construct()
	{
					parent::__construct();
					$this->load->model("usuario");
				}
				//renderiza la vista index de estudiantes
				public function usuario()
	{
		$data["listadoUsuarios"]=$this->usuario->obtenerTodos();
		$this->load->view('header');
		$this->load->view('usuarios/usuario',$data);
		$this->load->view('footer');
	}
 //renderiza la vista nuevo de estudiantes
	public function nuevo_usuario()
	{
		$this->load->view('header');
		$this->load->view('usuarios/nuevo_usuario');
		$this->load->view('footer');
	}
// asignaturas



	//funcion para capturar los valores del
	//formulario nuevo
	public function guardarUsuarios(){
		$datosNuevoUsuario=array(
			"cedula_usu"=>$this->input->post('cedula_usu'),
			"apellido_usu"=>$this->input->post('apellido_usu'),
			"nombre_usu"=>$this->input->post('nombre_usu'),
			"telefono_usu"=>$this->input->post('telefono_usu'),
			"direccion_usu"=>$this->input->post('direccion_usu'),
			"corre_electronico_usu"=>$this->input->post('corre_electronico_usu'),
			"fecha_nacimiento_usu"=>$this->input->post('fecha_nacimiento_usu')
		);
		print_r($datosNuevoUsuario);

		if($this->usuario->insertar($datosNuevoUsuario)){
			redirect("usuarios/usuario");
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
// funcion para eliminar estudiante
public function borrar($id_usu){
	if ($this->usuario->eliminarPorId($id_usu))
	{
		redirect("usuarios/usuario");
	}
	else
	{
		echo "Error al eliminar XD";
	}
}

public function editar($id)
{
	$data["usuarioEditar"]=$this->usuario->ObtenerPorId($id);
		$this->load->view('header');
		$this->load->view('usuarios/editar',$data);
		$this->load->view('footer');
}
public function procesarEditar(){
	$datosEstudianteEditado=array(
    "cedula_usu"=>$this->input->post('cedula_usu'),
    "apellido_usu"=>$this->input->post('apellido_usu'),
    "nombre_usu"=>$this->input->post('nombre_usu'),
    "telefono_usu"=>$this->input->post('telefono_usu'),
    "direccion_usu"=>$this->input->post('direccion_usu'),
    "corre_electronico_usu"=>$this->input->post('corre_electronico_usu'),
    "fecha_nacimiento_usu"=>$this->input->post('fecha_nacimiento_usu')
  );
	$id=$this->input->post("id_usu");

	if($this->usuario->editar($id,$datosUsuarioEditado)){
		redirect("usuarios/usuario");
	}else{
		echo "<h1>ERROR</h1>";
	}
}

}//cierre de la clase no borrar despues estas en problemas te conozco
