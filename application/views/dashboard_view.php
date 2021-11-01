<!DOCTYPE html>
<html lang="en">

<style> @import url('<?=base_url()?>/assets/css/style.css'); </style>

  <head>
    <meta charset="utf-8">

    <h1>Home</h1>
  </head>

<body class="container">
		
    <div>
            </div>
								
                <!--Acesso de menu Admin-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Postagens</a></li>
                  <li><a href="#">Páginas</a></li>
                  <li><a href="#">Mídia</a></li>

                <!--Acesso de menu Colaborador-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Páginas</a></li>
                  <li><a href="#">Mídia</a></li>

                <!--Acesso de menu Autor-->
                <?php else:?>
                  <li><a href="#">Dashboard</a></li>
                  <li><a href="#">Postagens</a></li>
                <?php endif;?>
              </ul>
              <ul>
                <li><a href="<?php echo site_url('login/logout');?>">Sair</a></li>
              </ul>
            </div>
          </div>
        </nav>
 
        <div class="jumbotron">
          <h1 class="central2">Seja bem vindo novamente <?php echo $this->session->userdata('username');?></h1>
        </div>
 
      </div>
    </div>

  </body>
</html>
