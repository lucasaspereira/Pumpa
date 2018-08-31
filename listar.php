<?php

$conexao = mysqli_connect('localhost', 'root', '', 'pumpa');

$query = "SELECT * FROM funcionarios" or die ( mysql_error());

$result = mysqli_query($conexao, $query);

?>

<html>
  <head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <script href="javascript/script.js" rel="stylesheet"></script>
  </head>

  <body>

<div class="container">
    <div class="row">
        <div class="col-12">

            <table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Del</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th scope="row">   <?=$dados['id_funcionario']?>		</th>
                        <td>			         <?=$dados['nome']	  ?>    	</td>
                        <td>			         <?=$dados['cargo'] ?>		</td>
                        <td>			         R$: <?=$dados['salario']     ?>		</td>
                        <td>			         <?=$dados['rua']     ?>		</td>
                        <td>			         <?=$dados['bairro']     ?>		</td>
                        <td>			         <?=$dados['sexo']     ?>		</td>
                        <td>			         <?=$dados['nivel']     ?>		</td>

                        <td>

                            <form class="edit" >
                                <input type="hidden" name="id_funcionario" value="<?=$dados['id_funcionario']?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="?page=removerUsuario">
                                <input type="hidden" name="id_funcionario" value="<?=$dados['id_funcionario']?>">
                                <button class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile ?>
                </tbody>
            </table>
                    <a href="inicio.php"><button  type="button" class="btn btn-info">Voltar</button></a>

        </div>

    </div>

</div>

  </body>


</html>
