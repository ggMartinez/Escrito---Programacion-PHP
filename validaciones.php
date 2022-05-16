<?php 

    function validarId($id){
        // Validar que el ID recibido sea numerico
        return is_numeric($id);

    }

    function validarNombre($nombre){
        // Validar que el nombre recibido tenga menos de 20 caracteres
        if (strlen($nombre)>3||strlen($nombre)<20) {
            return true;
            # code...
        }
    }

    function validarApellido($apellido){
        // Validar que el apellido recibido tenga menos de 20 caracteres
        if (strlen($apellido)>3||strlen($apellido)<20) {
            # code...
            return true;
        }
    }

    function validarTelefono($telefono){
        if (strlen($telefono)<9){
            return is_numeric($telefono);
        }
        // Validar que el telefono recibido sea de 9 cifras
    }

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
        if (strlen($direccion)>5||strlen($direccion)<50) {
            return true;
            # code...
        }
    }

    