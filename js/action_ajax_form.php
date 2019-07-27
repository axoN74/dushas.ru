<?php

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["body"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'email' => $_POST["email"],
    	'sub' => $_POST["sub"],
    	'body' => $_POST["body"]
    ); 
    // Переводим массив в JSON
    echo json_encode($result); 
    
}

?>