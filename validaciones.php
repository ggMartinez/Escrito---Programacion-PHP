<?php 

    function validarId($id){
       
        if (is_numeric($id)) {
            return true;
        }       
    }

    function validarNombre($nombre){

        if (strlen($nombre)<20) {
            return true;
        }
    }
    function validarApellido($apellido){
      
        if (strlen($nombre)<20) {
            return true;
        }     
    }

    function validarTelefono($telefono){
        
        if (is_numeric($telefono) && strlen($telefono) <= 9) {
            return true;
        }    
    }

    function validarDireccion($direccion){

        if (strlen($apellido)<50) {
            return true;
        }
    }
    