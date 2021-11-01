<!DOCTYPE html>
<html lang="en">

<style> @import url('<?=base_url()?>/assets/css/style.css'); </style>

  <head>
    <meta charset="utf-8"> 

	<h1 class="">Login</h1>
	</head>

	<body class="container">	
		<div class="central">
		<form class="form-signin" action="<?php echo base_url('autenticar');?>" method="post">
           <h2 class="form-signin-heading">Por favor faça o login</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="email" class="sr-only">Email</label>
           <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
           <br><br><label for="password" class="sr-only">Senha</label>
           <input type="password" name="password" class="form-control" placeholder="Senha" required>
           <div class="checkbox">
             <label>
							 <br>
               <input type="checkbox" value="remember-me"> Lembrar-me
             </label>
						 <button class="buttonstyle" type="submit">Entrar</button>
           </div>
					 <br>
					</form>
					<button onclick="window.location.href='cadastro_view.php'">Quero me cadastrar</button>
							
		</div> 
				
	</body>
	</html>
