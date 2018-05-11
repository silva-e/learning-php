<?php

$router = new AltoRouter();
$router->setBasePath('/learning-php');

$MinhaSRotas = array();
$MinhaSRotas[] = 'usuarios';
// $MinhaSRotas[] = 'painel';
// $MinhaSRotas[] = 'home';


foreach($MinhaSRotas as $rota){
    echo "{$rota}.php";
    require($rota.'.php');
}


$router->map('GET', '/', function(){
    echo 'users';
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