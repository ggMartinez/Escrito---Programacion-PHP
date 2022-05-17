<?php 

    function validarId($id){
            return is_numeric($id);
    }

    function validarNombre($nombre){
        if(isset($nombre) && strlen($nombre) < 20 ){
        return true;
   }

    }

    function validarApellido($apellido){
        if(isset($apellido) && strlen($apellido) < 20 ){
            return true;
        }
    }
    
    
    function validarTelefono($telefono){
        if(isset($telefono) && strlen($telefono) == 9 ){
            return is_numeric($telefono);
        }
    }

    function validarDireccion($direccion){
        if(isset($direccion) && strlen($direccion) < 50 ){
            return true;
        }
    }

