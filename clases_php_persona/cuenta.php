<?php
//https://github.com/AndresEstebanPatino/clases-objetos-php/blob/main/ejercicios.txt#L6


class Cuenta{

   
   //atributos, comportamiento
  
   var $titular;
   var $cantidad;
  
 
   //metodo constructor
  
   function __construct()
    {
     
     $this->titular = '';
     $this->cantidad = 0 ;
             
   }

  function mostrar($titular, $cantidad) {
    
    $cantidad = 0;

    echo "$titular saldo: $cantidad";



  }



}

?>