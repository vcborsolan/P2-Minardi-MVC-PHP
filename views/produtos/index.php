
		<h1>Lista de Produtos</h1>
		
		
			<table class="table table-hover" id="tabres">
				<thead>
					<tr>
						<th>Código</th>
						<th>Descrição</th>
						<th>Valor Unitário</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody id="lsprodutos">
				</tbody>
			</table>

		<h1>Cadastro de Produtos</h1>
		<form name="frmCadPro" id="frmCadPro" method="post" role="form" action="">
			<div class="row">
				<div class="form-group col-md-2 col-lg-2">
				    <label>Produto:</label>
				    <input type="text" class="form-control" id="txtproduto" name="txtproduto" placeholder="Produto" maxlength="14">
				</div>

				<div class="form-group col-md-6 col-lg-6">
				    <label>Valor:</label>
				    <input type="text" class="form-control" id="txtvalor" name="txtvalor" placeholder="Valor" maxlength="10">
				</div>

				 <div id="botaocad" class="form-group col-md-5 col-lg-6">
				 	<button type="submit" id="btnCad" name="btnCad" class="btn btn-default">
				 		Cadastrar
				 	</button>
				 </div>

				</div>

			</div>
		</form>
		
	

	<br>
	<h1>Carrinho de Compras</h1>
	<table class="table table-hover" id="tabcarrinho">
				<thead>
					<tr>
						<th>Código</th>
						<th>Descrição</th>
						<th>Valor Unitário</th>
						<th>Qtd.</th>
						<th>Valor Total</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody id="lscarrinho">
				</tbody>
			</table>


