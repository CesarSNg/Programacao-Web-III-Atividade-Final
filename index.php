<?php 

	include_once 'php_action/conexao_bd.php';

	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Produtos</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>Produto</th>
					<th>Marca</th>
					<th>Cor</th>
					<th>Preço</th>
				</tr>				
			</thead>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM tbClientes";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>				
			
						<tr>
							<td><?php echo $dados['produto']; ?></td>
							<td><?php echo $dados['marca']; ?></td>
							<td><?php echo $dados['cor']; ?></td>
							<td><?php echo $dados['preco']; ?></td>

							<td><a href="alterar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?php echo $dados['id']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o produto?</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="php_action/excluir_produto.php" method="POST">
							      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

							      	<button type="submit" name="btn-excluir" class="btn red">Excluir</button>

							      	<a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
		
			</tbody>

			</table>
			<br>
			<a href="cadastrar.php" class="btn">Adicionar Produto</a>
		</div>		
	</div>


<?php 

	include_once 'includes/footer.php';

 ?>