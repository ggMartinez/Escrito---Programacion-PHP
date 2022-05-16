<?php 

    function validarId($id){
        return is_numeric($id);
    }

    function validarNombre($nombre){
        // Validar que el nombre recibido tenga menos de 20 caracteres
        if(strlen($nombre) < 20) return true;
        return false;
    }

    function validarApellido($apellido){
        // Validar que el apellido recibido tenga menos de 20 caracteres
        if(strlen($apellido) < 20) return true;
        return false;
    }

    function validarTelefono($telefono){
        // Validar que el telefono recibido sea de 9 cifras
       

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
    }

    