<?php 

	include_once 'includes/header.php';

?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo produto</h3>
			
			<form action="php_action/criar_produtos.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="produto" id="produto">
					<label for="produto">Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca">
					<label for="marca">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cor" id="cor">
					<label for="cor">Cor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco">
					<label for="preco">Preco</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de produtos</a>

			</form>
		</div>		
	</div>
<?php 

	include_once 'includes/footer.php';

 ?>