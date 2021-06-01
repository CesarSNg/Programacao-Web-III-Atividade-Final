<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$produto = mysqli_escape_string($connection,$_POST['produto']);
		$marca = mysqli_escape_string($connection,$_POST['marca']);
		$cor = mysqli_escape_string($connection,$_POST['cor']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);
		$id = mysqli_escape_string($connection,$_POST['id']);

		$sql = "UPDATE tbClientes SET produto = '$produto', marca = '$marca', cor = '$cor', preco = '$preco' WHERE id = '$id'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
