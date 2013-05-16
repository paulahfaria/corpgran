<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo Configure::read('Application.name') ?> - <?php echo !empty($title_for_layout) ? $title_for_layout : ''; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <style>
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  </style>
  <?php echo $this->Html->css('normalize.css') ?>
  <?php echo $this->Html->css('bootstrap-'.Configure::read('Layout.theme').'.min', null, array('data-extra' => 'theme')) ?>
  <?php echo $this->Html->css('bootstrap-responsive.min') ?>
  <?php echo $this->Html->css('admin') ?>

  <?php
  if (is_file(WWW_ROOT . 'css' . DS . $this->params->controller . '.css')) {
  echo $this->Html->css($this->params->controller);
  }
  if (is_file(WWW_ROOT . 'css' . DS . $this->params->controller . DS . $this->params->action . '.css')) {
  echo $this->Html->css($this->params->controller . '/' . $this->params->action);
  }
  ?>

<?php   echo $this->Html->script('ckeditor/ckeditor.js'); ?>
  <?php echo $this->Html->script('lib/modernizr') ?>
</head>
<body>
  
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="<?php echo $this->Html->url('/') ?>" class="brand">GranCorp</a> <div class="nav-collapse">
          <?php if($this->Session->check('Auth.User')){ ?>
            <ul class="nav">
  
                <li class="">

                  <a href="<?php echo $this->Html->url('/admin/destaques') ?>">Destaques Home</a>      

                </li>     

                <li class="">

                  <a href="<?php echo $this->Html->url('/admin/empreendimentos') ?>">Empreendimentos</a>      
                    <ul>
                        <li><a href="<?php echo $this->Html->url('/admin/empreendimentos') ?>">Listar</a> </li>
                   
                        <li><a href="<?php echo $this->Html->url('/admin/bairros') ?>">Bairros</a> </li>
                        
                        <li><a href="<?php echo $this->Html->url('/admin/quartos') ?>">Tipo de Quartos</a> </li>
                   
                    </ul> 
                </li>                
                <li class="">

                  <a href="<?php echo $this->Html->url('/admin/noticias') ?>">Notícias</a>   

                </li>         
                 <li class="">

                  <a href="javascript:void(0);">Usuários e contatos</a>   
                    <ul>
                        <li><a href="<?php echo $this->Html->url('/admin/usuarios') ?>">Listar</a> </li>

                        <li><a href="<?php echo $this->Html->url('/admin/usuarios/contatos_exportar') ?>">Contatos para newsletter</a> </li>
                    </ul> 
                </li>                        
                 <li class="">

                  <a href="javascript:void(0);">Carreiras</a>   
                    <ul>
                        <li><a href="<?php echo $this->Html->url('/admin/vagas') ?>">Vagas</a> </li>

                        <li><a href="<?php echo $this->Html->url('/admin/curriculos') ?>">Banco de Currículos</a> </li>
                        
                        <li><a href="<?php echo $this->Html->url('/admin/areas') ?>">Listar Áreas</a> </li>
                    </ul> 
                </li>     
                 <li class="">

                  <a href="javascript:void(0);">Terrenos</a>   
                               <ul>
                        <li><a href="<?php echo $this->Html->url('/admin/terrenos') ?>">Listar</a> </li>

                        <li><a href="<?php echo $this->Html->url('/admin/terrenos/exportar') ?>">Exportar</a> </li>
                        
              
                    </ul> 
                </li>                                                    
              </ul>

              
                </div><!--/.nav-collapse -->
                <?php } ?>
              </div>
            </div>
          </div>


      <div class="container" role="main" id="main">

        <?php echo $this->Session->flash();?>
        
        <?php echo $this->fetch('content'); ?>

        <hr>

        <footer>
          <p>&copy; <?php echo Configure::read('Application.name') ?> 2013</p>
        </footer>

      </div> 


<input type="hidden" id="baseUrl" value="<?php echo  $this->Html->url('/', true); ?>">

<!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $this->params->webroot ?>js/lib/jquery.min.js"><\/script>')</script>



<?php echo $this->Html->script(
  array(
    'lib/bootstrap.min',
    'admin.js'
    ));
    ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
  </html>