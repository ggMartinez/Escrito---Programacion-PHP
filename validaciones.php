<?php 

    function validarId($id){
        // Validar que el ID recibido sea numerico
        if (is_numeric($id))
        return true;
    }

    function validarNombre($nombre){
        // Validar que el nombre recibido tenga menos de 20 caracteres
        if (strlen($nombre)>0 && strlen ($nombre) <20)
        return true;
    }

    function validarApellido($apellido){
        // Validar que el apellido recibido tenga menos de 20 caracteres
        if (strlen($apellido)>0 && strlen ($apellido) <20)
        return true;
    }

    function validarTelefono($telefono){
        // Validar que el telefono recibido sea de 9 cifras
        if (is_numeric($telefono) && strlen ($telefono) == 9)
        return true;
    }

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
        if (strlen($direccion)>0 && strlen ($direccion) <50)
        return true;
    }

    