<?php 

    function validarId($id){
        if (isset($id) && 
            is_numeric($id)) 
            return true;
    }

    function validarNombre($nombre){
        if (isset($nombre) && 
            strlen($nombre)<20) 
            return true;
    }

    function validarApellido($apellido){
        if (isset($apellido) && 
            strlen($apellido)<20) 
            return true;
    }

    function validarTelefono($telefono){
        if (isset($telefono) && 
            is_numeric($telefono) && 
            strlen((string) $telefono)==9) 
            return true;
    }

    function validarDireccion($direccion){
        if (isset($direccion) &&
            strlen($direccion)<50)
            return true;
    }

    