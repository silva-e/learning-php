<?php 
require_once('vendor/autoload.php');

use MyApp\Usuarios;
use MyApp\db\Conexao;

session_start();

// $user = new Usuarios();
// $con = Conexao::conn()->prepare('select * from usuarios');
// $con->execute();
// $r = $con->fetchAll(PDO::FETCH_ASSOC);
// var_dump($r);

require('src/MyApp/Rotas/rotas.php');


?>