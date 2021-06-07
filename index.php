<?php 

	include_once 'php_action/conexao_bd.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m9 push-m3">
			<h3 class="light">Produtos</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Descricao</th>
					<th>Quantidade</th>
					<th>Valor Unit.</th>
					<th>Data Entrada</th>
					<th>Imagem</th>
				</tr>				
			</thead>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM tbprodutos";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>				
			
						<tr>
							<td><?php echo $dados['codigo']; ?></td>
							<td><?php echo $dados['descricao']; ?></td>
							<td><?php echo $dados['qtde']; ?></td>
							<td><?php echo $dados['valorunit']; ?></td>
							<td><?php echo $dados['dataentrada']; ?></td>
							<td><?php echo $dados['imagemprod']; ?></td>

							
							<td><a href="alterar.php?id=<?php echo $dados['codigo']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['codigo']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?php echo $dados['codigo']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o produto?</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="php_action/excluir_produto.php" method="POST">
							      	<input type="hidden" name="codigo" value="<?php echo $dados['codigo']; ?>">

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
	
	//rodapé

	include_once 'includes/footer.php';


 ?>