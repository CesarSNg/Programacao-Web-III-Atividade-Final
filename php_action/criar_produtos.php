<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$produto = mysqli_escape_string($connection,$_POST['produto']);
		$marca = mysqli_escape_string($connection,$_POST['marca']);
		$cor = mysqli_escape_string($connection,$_POST['cor']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);

		$sql = "INSERT INTO tbClientes(produto,marca,cor,preco)VALUES('$produto','$marca','$cor','$preco')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
