<?php 
	include_once 'php_action/conexao_bd.php';

	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbClientes WHERE id = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar produto</h3>
			
			<form action="php_action/alterar_produtos.php" method="POST">

				<input type="hidden" name = "id" value="<?php echo $dados['id']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="produto" id="produto" value="<?php echo $dados['produto']; ?>">
					<label for="produto">Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca" value="<?php echo $dados['marca']; ?>"
					>
					<label for="sobrenome">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cor" id="cor" value="<?php echo $dados['cor']; ?>">
					<label for="cor">Cor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco" value="<?php echo $dados['preco']; ?>">
					<label for="preco">Preco</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de produtos</a>

			</form>

		</div>		
	</div>


<?php 

	include_once 'includes/footer.php';


 ?>