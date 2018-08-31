<?php

require_once('validaPage.php');
 ?>

<html>
  <head>
    <title>Sistema de login</title>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  </head>
<div class="text-center" style="padding:50px 0">
	<div class="logo">registrar funcionário</div>

<body>
	<div class="login-form-1">
		<form action="validarCadastro.php" method="POST" id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_nome" class="sr-only">Nome</label>
						<input type="text" class="form-control" id="reg_nome" name="nome" placeholder="Nome" required>
					</div>
					<div class="form-group">
						<label for="reg_cargo" class="sr-only">Cargo</label>
						<input type="text" class="form-control" id="reg_cargo" name="cargo" placeholder="Cargo" required>
					</div>

					<div class="form-group">
						<label for="reg_salario" class="sr-only">Salario</label>
						<input type="text" class="form-control" id="reg_salario" name="salario" placeholder="Salario" required>
					</div>
					<div class="form-group">
            <label>Endereço</label>
						<label for="reg_rua" class="sr-only">Rua</label>
						<input type="text" class="form-control" id="reg_rua" name="rua" placeholder="Rua" required>

            <label for="reg_bairro" class="sr-only">Bairro</label>
            <input type="text" class="form-control" id="reg_bairro" name="bairro" placeholder="Bairro" required>
          </div>

					<div class="form-group login-group-checkbox" required>
						<input type="radio" name="sexo" value="homem" id="homem" placeholder="homem">
						<label for="homem">homem</label>

						<input type="radio" name="sexo" id="mulher" value="mulher" placeholder="mulher">
						<label for="mulher">mulher</label>
					</div>

          <div class="form-group login-group-checkbox">
						<input type="radio" name="nivel" value="funcionario" id="funcionario" placeholder="funcionario" required>
						<label for="funcionario">Funcionário</label>

						<input type="radio" name="nivel" id="estagiario" value="estagiario" placeholder="estagiario" required>
						<label for="estagiario">Estagiário</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
        <br>
        <a href="inicio.php"><button  type="button" class="btn btn-info">Voltar</button></a>
			</div>
		</form>
	</div>
</div>
</body>

</html>
