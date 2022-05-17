<?php 

    function validarId($id){
        // Validar que el ID recibido sea numerico
        return is_numeric($id);
    }

    function validarNombre($nombre){
        // Validar que el nombre recibido tenga menos de 20 caracteres
        return strlen($nombre) < 20;
    }

    function validarApellido($apellido){
        // Validar que el apellido recibido tenga menos de 20 caracteres
        return strlen($apellido) < 20;
    }

    function validarTelefono($telefono){
        // Validar que el telefono recibido sea de 9 cifras
        return strlen($telefono) = 9 && is_numeric($telefono);
    }

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
        return strlen($direccion) < 50;
    }

    