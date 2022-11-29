<?php

class Usuario extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function insertar($datos){
    return $this->db->insert("usuario",$datos);
  }
  //funicion que consulta todos los estudiantes de la bdd
  public function obtenerTodos(){
    $usuarios=$this->db->get("usuario");
    if ($usuarios->num_rows()>0)
    {
      return $usuarios;
    }
    else
    {
      return false;
    }
  }
  // funicion para eliminar un estudiante se recien elid
  public function eliminarPorId($id)
  {
    $this->db->where("id_usu",$id);
    return $this->db->delete("usuario");
  }
  //editar
    public function ObtenerPorId($id)
    {
      $this->db->where("id_usu",$id);
      $usuario=$this->db->get("usuario");
      if ($usuario->num_rows()>0)
      {
        return $usuario->row();
      }
      else
      {
        return false;
      }
    }
    // proceso de actualizacion
    public function editar($id,$datos)
    {
      $this->db->where("id_usu",$id);
      return $this->db->update("usuario",$datos);
    }


}// cierre de la clase
