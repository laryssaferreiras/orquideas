<h1>Cadastrar Gêneros</h1>
<?php if(@$_REQUEST["res"]=="ok") {?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	  Registro cadastrado com sucesso!
	</div>
<?php } elseif (@$_REQUEST["res"]=="no") {?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	  Não foi possível cadastrar.
	</div>
<?php }?>


<div class="row">
	<div class="offset-lg-3 col-lg-6">
		<form action="?page=salvar-cadastro&acao=usuarios" method="POST">
			<div class="form-group">
				<label>Gêneros</label>
				<input type="text" name="nome_usuarios" class="form-control" placeholder="Digite seu nome completo"/>
				<label>Login</label>
				<input type="text" name="login_usuarios" class="form-control" placeholder="Digite seu usuario"/>
				<label>Senha</label>
				<input type="password" name="senha_usuarios" class="form-control" placeholder="Digite sua senha com no mínimo 8 digitos"/>
				
			</div>
			<button type="submit" class="btn btn-primary">
				Cadastrar
			</button>
		</form>
	</div>
</div>
<h1>Usuários Cadastrados</h1>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Login</th>
		<th>Senha</th>
	</tr>
	<?php
		$sql = "SELECT * FROM usuarios";
		
		$result = $conn->query($sql);
		
		$qtd = $result->num_rows;
		
		print "Encontrou <b>".$qtd."</b> registros";
		
		if($qtd > 0) {
			while ($row = $result->fetch_assoc()){
				print "<tr>";
				print "<td>".$row["id_usuarios"]."</td>";
				print "<td>".$row["nome_usuarios"]."</td>";
				print "<td>".$row["login_usuarios"]."</td>";
				print "<td>".$row["senha_usuarios"]."</td>";
				print "</tr>";
			}
		}else{
				print "Não foram encontrados resultados";
		}
	?>
</table>