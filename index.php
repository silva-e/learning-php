<?php 
require_once('vendor/autoload.php');

use MyApp\Usuarios;
use MyApp\db\Conexao;

session_start();

$router = new AltoRouter();
$router->setBasePath('/learning-php');

// $user = new Usuarios();
// $con = Conexao::conn()->prepare('select * from usuarios');
// $con->execute();
// $r = $con->fetchAll(PDO::FETCH_ASSOC);
// var_dump($r);

$router->map('GET', '/', function(){
echo 'root';
});

$router->map('GET', '/users', function(){
    echo 'users';
});
    


$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}


?>