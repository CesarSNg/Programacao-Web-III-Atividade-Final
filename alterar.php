<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbprodutos WHERE codigo = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar produto</h3>
			
			<form action="php_action/alterar_produtos.php" method="POST">

				<input type="hidden" name = "codigo" value="<?php echo $dados['codigo']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>">
					<label for="descricao">Descricao</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="qtde" id="qtde" value="<?php echo $dados['qtde']; ?>">
					<label for="qtde">Quantidade</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="valorunit" id="valorunit" value="<?php echo $dados['valorunit']; ?>">
					<label for="valorunit">Valor Unit</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="dataentrada" id="dataentrada" value="<?php echo $dados['dataentrada']; ?>">
					<label for="dataentrada">Data Entrada</label>
				</div>
		
	    		<div class="input-field col s12">
					<input type="file" name="imagemprod" accept="imagem/*" class="form-control" id="imagemprod" value="<?php echo $dados['imagemprod']; ?>">
					<label for="imagemprod">Imagem Produto</label>
				</div>
				
				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>