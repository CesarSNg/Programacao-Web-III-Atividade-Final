<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$qtde = mysqli_escape_string($connection,$_POST['qtde']);
		$valorunit = mysqli_escape_string($connection,$_POST['valorunit']);
		$dataentrada = mysqli_escape_string($connection,$_POST['dataentrada']);
		$imagemprod = mysqli_escape_string($connection,$_POST['imagemprod']);
		$codigo = mysqli_escape_string($connection,$_POST['codigo']);

		$sql = "UPDATE tbprodutos SET descricao = '$descricao', qtde = '$qtde', valorunit = '$valorunit', dataentrada = '$dataentrada', imagemprod = '$imagemprod' WHERE codigo = '$codigo'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
