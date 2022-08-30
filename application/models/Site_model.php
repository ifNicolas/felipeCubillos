<?php

use LDAP\Result;

Class Site_model extends CI_Model
{
     function login($data)
    {
        //hacemos la consulta a la BD 
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("CORREO",$data['correo']);
        $this->db->where("CONTRASEÑA",$data['contraseña']);

        //genera la obtencion de datos
        $query=$this->db->get();

        //hace la consulta que verifica si hay columndas disponibles 
        if($query->num_rows()>0)
        {
            //retorna el resultado de la consulta
           return $query->result();
          
        }else
        {
            return NULL;
        }
         
    }

    //funcion registro

    /*function registro($data)
    {
        $array=array
        (
            "RUT"=>$data['rut'],
            "NOMBRE"=>$data['nombre'],
            "APELLIDO"=>$data['apellido'],
            "CORREO"=>$data['correo'],
            "CONTRASEÑA"=>$data['contraseña']
        );
        $this->db->insert("user",$array);
    }**/


    //funcion para subir los archivos 
    function uploadArchivo($data,$archivo)
    {
         $array=array
         (  
            "TITULO" =>$data['titulo'],
            "DESCRIPCION"=>$data['descripcion'],
            "ARCHIVO"=>$archivo
         );
         $this->db->insert("archivos",$array);
    }

    
     function downloadArchivo($titulo)
     {
        $this->db->select("*");
        $this->db->from("archivos");
        $this->db->where("TITULO",$titulo);
        $this->db->order_by("ID","ASC");

        $query =$this->bd->get();
         print_r($this->bd->last_query());

        if($query->num_rows()>0)
        {
             return $query->result();
        }else
         {
            return NULL;
         }
     }
}
