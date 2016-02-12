<?php 
	try{
	$pdo = new PDO('mysql:host=Localhost;dbname=pdo_try;charset=utf8','root','');
	$query = $pdo->query("INSERT INTO mydatabase(name,numbers) VALUES ('zalim','123')");
		}catch(exception $e){
			echo "eklemede sorun yaşadın";
		}
 ?>