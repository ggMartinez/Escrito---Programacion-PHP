<?php 

    function validarId($id){
        if(is_numeric($id))
            return true;
        // Validar que el ID recibido sea numerico
    }

    function validarNombre($nombre){
        if(strlen($nombre)>0 && strlen($nombre)<20)
            return true;
        // Validar que el nombre recibido tenga menos de 20 caracteres
    }

    function validarApellido($apellido){
        if(strlen($apellido)>0 && strlen ($apellido) <20)
            return true;
        // Validar que el apellido recibido tenga menos de 20 caracteres
    }

    function validarTelefono($telefono){
        if(is_numeric($telefono) && strlen ($telefono) == 9)
            return true;
        // Validar que el telefono recibido sea de 9 cifras
    }

    function validarDireccion($direccion){
        if(strlen($direccion)>0 && strlen ($direccion) <50)
            return true;
        // Validar que la direccion recibida tenga menos de 50 caracteres
    }

    