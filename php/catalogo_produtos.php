<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
			<div class="row">
				<h1>Catálogo de produtos</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
					<!--no form, passamos o action que iremos atuar e o metodo que iremos utilizar para passar as informações--> 
					<!-- caso precise enviar os dados para um outro arquivo, é só modificar o nome no action-->
    				<form role="form" action="catalogo_produtos.php" method="get">
					  <div class="form-group">
					    <label for="Produto">Nome do produto:</label>
					    <select class="form-control" name="id_produto" id="id_produto">
					    	<option value="1">Cadeira</option>
							<option value="2">Fogão</option>
							<option value="3">Roteador wi-fi</option>
							<option value="4">TV 29"</option>
					   	</select>
					  </div>
					  <button type="submit" class="btn btn-default">Ver detalhes</button>
					</form>
    			</div>
    			<div class="col-md-4"></div>
    			<div class="col-md-4"></div>
			  </div>

			  <div class="row">
				  <h1>Detalhes do produto</h1>
			  </div>
			  
			  <div class="row">
				  <div class="col-md-4">

					  <?php
						/*para implementar o metodo post é só fazer as devidas modificações no method passado, de get pra post. A 
						diferençã entre os dois é que o post possui um metodo de segurança maior que o get, pois não passa o id na url

						$id_produto = $_POST['id_produto'];*/

						$id_produto = $_GET['id_produto'];
						  
						 $detalhes[1] = "Detalhe das cadeiras";
						 $detalhes[2] = "Detalhe do fogão";
						 $detalhes[3] = "Detalhe do roteador";
						 $detalhes[4] = "Detalhe da tv"; 

						 echo $detalhes[$id_produto];
					  ?>
				  </div>
			  </div>
		</div>
	</body>
</html>