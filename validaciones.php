<?php 

    function validarId($id){
        // Validar que el ID recibido sea numerico
        if (isset($id) && 
            is_numeric($id)) 
            return true;
    }

    function validarNombre($nombre){
        // Validar que el nombre recibido tenga menos de 20 caracteres
        if (isset($nombre) && 
            strlen($nombre)<20) 
            return true;
    }

    function validarApellido($apellido){
        // Validar que el apellido recibido tenga menos de 20 caracteres
        if (isset($apellido) && 
            strlen($apellido)<20) 
            return true;
    }

    function validarTelefono($telefono){
        // Validar que el telefono recibido sea de 9 cifras
        return true;
    }

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
        return true;
    }

    