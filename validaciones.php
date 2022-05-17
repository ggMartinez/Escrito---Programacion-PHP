<?php 

    function validarId($id){
        if(is_numeric($id)){
        return true;

        };

        
    }

    function validarNombre($nombre){
        if(isset($nombre) && 
        strlen($nombre) < 20) {   
   
       return true;
              
       
    }
}

    function validarApellido($apellido){
        if (isset($apellido) &&
        strlen($apellido) < 20){
        
  
            return true;    
        }
        
    }

    function validarTelefono($telefono){
                 
              // Validar que el telefono recibido sea de 9 cifras
    }

    function validarDireccion($direccion){
                 
        // Validar que la direccion recibida tenga menos de 50 caracteres
    }

    