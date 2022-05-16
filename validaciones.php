<?php 

    function validarId($id){
            return in_numeric($id);
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
            return in_numeric($telefono);
        }
    }

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
    }

    