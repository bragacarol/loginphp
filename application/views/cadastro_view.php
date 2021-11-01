<!DOCTYPE html>
<html lang="en">

<style> @import url('<?=base_url()?>/assets/css/style.css'); </style>

  <head>
    <meta charset="utf-8"> 

	<h1>Cadastro</h1>
	</head>

	<body class="container">	
		<div class="central">
		<form action="<?php echo base_url('autenticar');?>" method="post">
           <h2>Insira as suas informações abaixo:</h2>
		   <label for="username" class="sr-only">Nome Completo</label>
		   <input type="username" name="username" class="form-control" placeholder="Nome Completo" required>
           
		   <label for="email" class="sr-only">Email</label>
           <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
           
		   <br><br><label for="password" class="sr-only">Senha</label>
           <input type="password" name="password" class="form-control" placeholder="Senha" required>

			<button class="buttonstyle" type="submit">Cadastrar</button>
           </div>
					 <br>
			</form>
					
							
		</div> 
				
	</body>
	</html>
