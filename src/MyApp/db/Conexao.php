<?php
namespace MyApp\db;
use \PDO;
/**
 * 
 */
class Conexao
{
	
	public static function conn()
	{
		return new PDO("mysql:host=localhost;dbname=fisiocare;charset=utf8", "root", "efd12345"); 
		
	}
}