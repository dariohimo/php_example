<?php

class Database {

    public function __construct() {

	    try{
		    $this->mysql = $this->conectar();

		    echo 'exitosa';

	    } catch (PDOException $exepcion ) {
                    echo 'error' . $exepcion->getMessage();

	    }

    }





    function conectar() {
      //nombre de host, bd, username
    //charet utf-8
    // LARAVEL PHP INTELEPHENSE




      $hostname = 'localhost';
      $database = 'tienda';
      $username = 'productos';
      $password = 'productos';
      $charset = 'utf8_spanish_ci';

      $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ];    
      
      $pdo = new pdo("mysql:host={$hostname}; dbname={$database}; charset{$charset}", $username, $password, $options);

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $pdo;


}

}


?>
