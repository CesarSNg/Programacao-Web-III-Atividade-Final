<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$codigo = mysqli_escape_string($connection,$_POST['codigo']);
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$qtde = mysqli_escape_string($connection,$_POST['qtde']);
		$valorunit = mysqli_escape_string($connection,$_POST['valorunit']);
		$dataentrada = mysqli_escape_string($connection,$_POST['dataentrada']);
		$imagemprod = mysqli_escape_string($connection,$_POST['imagemprod']);

		$sql = "INSERT INTO tbprodutos(codigo,descricao,qtde,valorunit,dataentrada,imagemprod)VALUES('$codigo','$descricao','$qtde','$valorunit','$dataentrada','$imagemprod')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
