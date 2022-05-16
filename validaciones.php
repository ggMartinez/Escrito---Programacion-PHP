<?php 

  

    function validarId($id){
        // Validar que el ID recibido sea numerico
         return is_numeric($id);

        //return true;
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

        if(strlen($telefono) == 9 && is_numeric($telefono)) return true;
        return false;

       
    }

    function validarDireccion($direccion){
        // Validar que la direccion recibida tenga menos de 50 caracteres
        
        if(strlen($direccion) < 50) return true;
        return false;
    }