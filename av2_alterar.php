<?php

    $nome = $_GET["nome"];
	$endereco = $_GET["endereco"];
	$postalCode = $_GET["nome"];
	$pais = $_GET["pais"];
	$cpf = $_GET[" cpf"];
	$passaporte = $_GET["passaporte"];
	$email = $_GET["email"];
	$dataNascimento = $_GET["dataNascimento"];

    $servidor = "localhost";
    $username = "root";
    $senha = "";
    $database = "av2_banco";
    $conn = new mysqli($servidor,$username,$senha, $database);
	
    if ($conn->	connect_error) 
	{
        die("Erro de conexão");
    }
	
	$comandoSQL = "UPDATE `av2_clientes` SET SET `nome`='[$nome-1]',`endereco`='[value-2]',`postalCode`='[value-3]',`pais`='[value-4]',
					`cpf`='[value-5]',`passaporte`='[value-6]',`email`='[value-7]',`dataNascimento`='[value-8]' WHERE 1 VALUES ('',$endereco,'$postalCode','$pais'
					,'$cpf','$passaporte','$email','$dataNascimento')";
					 `av2_clientes` 
    $result = $conn->query($comandoSQL);
	
	$comandoSQL = "SELECT `nome`, `endereco`, `postalCode`, `pais`, `cpf`, `passaporte`, `email`, `dataNascimento` FROM `av2_clientes` WHERE nome = '$nome'";
	
    $result = $conn->query($comandoSQL);
    $clienteJSON = json_encode($result->fetch_assoc(), JSON_UNESCAPED_UNICODE);					
	
	

    echo $clienteJSON;
?>
