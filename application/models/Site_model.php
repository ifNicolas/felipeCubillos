<?php
Class Site_model extends CI_Model
{
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
