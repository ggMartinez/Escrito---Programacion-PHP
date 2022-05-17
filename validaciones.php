<?php 

    function validarId($id){
        if(is_numeric($id)){
        return true;

        };

        // Validar que el ID recibido sea numerico
    }

    function validarNombre($nombre){
      if(isset($nombre) && 
         strlen($nombre) < 20
         
    )
        return true;
        // Validar que el nombre recibido tenga menos de 20 caracteres
    }

    function validarApellido($apellido){

        if (isset($apellido) &&
        strlen($apellido) < 20
        
    )
            return true;
        // Validar que el apellido recibido tenga menos de 20 caracteres
    }

    function validarTelefono($telefono){
        if (is_numeric($telefono)){
            return true;
        }
        
    
  

        // Validar que el telefono recibido sea de 9 cifras
    }

    function validarDireccion($direccion){
        if (isset($direccion) &&
        strlen($direccion) < 50
       
    )
            return true;
        // Validar que la direccion recibida tenga menos de 50 caracteres
    }

    