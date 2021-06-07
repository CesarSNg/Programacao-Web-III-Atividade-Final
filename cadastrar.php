<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h4 class="light">Novo produto</h4>
			
			<form action="php_action/criar_produtos.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="codigo" id="codigo">
					<label for="codigo">Codigo</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao">
					<label for="descricao">Descricao</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="qtde" id="qtde">
					<label for="qtde">Quantidade</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="valorunit" id="valorunit">
					<label for="valorunit">Valor Unit</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="dataentrada" id="dataentrada">
					<label for="dataentrada">Data Entrada</label>
				</div>

				<div class="input-field col s12">
			    	<input type="file" name="imagemprod" accept="image/*" class="form-control" id="imagemprod">
					<label for="imagemprod">Imagem Produto</label>
				</div>


				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>