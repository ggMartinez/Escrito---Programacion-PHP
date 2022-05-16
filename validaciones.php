<?php 
    
    function validarId($id){
        // Validar que el ID recibido sea numerico
       return is_numeric($id);
    }

    function validarNombre($nombre){
        if(strlen($nombre)<20) return true;
        return false;
    }

    function validarApellido($apellido){
        if(strlen($apellido)<20) return true;
        return false;
    }

    function validarTelefono($telefono){
        if(strlen($telefono) < 9 && is_numeric($telefono)) return true;
        return false;
    }

    function validarDireccion($direccion){
        if(strlen($apellido)<50) return true;
        return false;
    }
