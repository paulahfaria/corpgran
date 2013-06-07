<!DOCTYPE html>
<!--[if lt IE 7]>
    <script>
        window.location = "/ie.html";
    </script>
<![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7" xmlns:fb="http://www.facebook.com/2008/fbml> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8" xmlns:fb="http://www.facebook.com/2008/fbml> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9" xmlns:fb="http://www.facebook.com/2008/fbml> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GranCorp</title>
        <meta name="keywords" content="empreendimento construtora lar casa apartamento construção civil imobiliária">

        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width">


        <?php if($this->params['controller']=='empreendimentos' && $this->params['action']=='detalhe'){ ?>
        <meta name="description" content="<?php echo $empreendimento['Empreendimento']['descricao'] ?>">
        <!-- Facebook Open Graph -->
        <meta property="og:title" content="GranCorp - <?php echo $empreendimento['Empreendimento']['nome'] ?>">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="GranCorp">
        <meta property="og:url" content="<?php echo $this->Html->url('/empreendimentos/detalhe/'.$empreendimento['Empreendimento']['slug'], true) ?>">
        <meta property="og:image" content="<?php echo $this->Html->url('/files/imagem/arquivo/'.$empreendimento['ImagemDestaque']['id'].'/thumb_'.$empreendimento['ImagemDestaque']['arquivo'], true) ?>">

        <?php }else{ ?>
         <meta name="description" content="Incorporação Imobiliária e Construção Civil">
        <!-- Facebook Open Graph -->
        <meta property="og:title" content="GranCorp">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="GranCorp">
        <meta property="og:url" content="<?php echo $this->Html->url('/', true) ?>">
        <meta property="og:image" content="http://urlprojeto.com/imagem.jpg">      


        <?php }?>

        <link rel="shortcut icon" href="<?php echo $this->Html->url('/') ?>favicon.gif">    

        <?php

		echo $this->Html->css(array('reset','main'));

		echo $this->Html->script(array('lib/modernizr'));

		echo $this->fetch('css');

		echo $this->fetch('script');

		?>

        <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/rs-plugin/css/settings.css') ?>">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>

    <body class="<?php echo $this->params['controller'] ?>-<?php echo $this->params['action'] ?>">

     <header>
            <div id="header-container">
                <h1 class="logo">
                    <a href="<?php echo $this->Html->url('/') ?>" title="Ir para a página incial">

                    	<?php echo $this->Html->image('grancorp.png'); ?>

                    </a>
                </h1>
                

                        <?php if($this->Session->read('Usuario.nome')){ ?> 

                            <div class="logado">
                                <div class="logado-container">
                                    <a href="<?php echo $this->Html->url('/usuarios/logout'); ?>" class="buttom-top" id="logout">Sair</a>
                                    <a class="buttom-top acompanhar" href="<?php echo $this->Html->url('/empreendimentos/acompanhar'); ?>" id="acompanhar">Meus Empreendimentos</a>                                    
                                                  
                                    <p class="hello">
                                        Olá <?php echo $this->Session->read('Usuario.nome'); ?>
                                    </p>
                                </div>
                            </div>

                        <?php }else{ ?>
                        <nav id="social-nav">
                    <ul>
                        <li>
                            <a href="http://www.facebook.com/GranCorp?fref=ts" class="facebook" target="_blank">facebook</a>
                        </li>
                        <li>
                            <a href="mailto:grancorp@grancorp.com.br" class="email">e-mail</a>
                        </li>

                            <li>
                                <a href="#" class="acompanhar-empreendimento">Acompanhe seu empreendimento</a>
                            </li>
                            <li>
                                <a href="#" class="login">login</a>
                            </li>


                        <?php } ?>
                    </ul>
                    <div class="">

                    <?php if(!$this->Session->read('Usuario.nome')){ ?>                     

                        <?php echo $this->Form->create('usuario', array('url' => '/usuarios/login', 'class'=>'form-padrao login-restrita')); ?>
                            <input name="email" type="text" placeholder="e-mail"/>
                            <input name="senha" type="password" placeholder="senha"/>
                            <input type="submit" value="entrar" />
                            
                        <?php echo $this->Form->end(); } ?>

                    </div>
                </nav>
                <address class="header-telephone">Vendas &nbsp (31) 3772 1539</address>
            </div>
             <nav class="main-nav">
                    <ul>
                        <li class="<?php echo(isset($page) && $page == 'institucional')?'active':''; ?>">
                            <a href="<?php echo $this->Html->url('/institucional'); ?>">Institucional</a>
                        </li>
                        <li class="<?php echo( $this->params['controller'] == 'empreendimentos')?'active':''; ?>">
                            <a href="<?php echo $this->Html->url('/empreendimentos'); ?>">Empreendimentos</a>
                        </li>
                        <li class="<?php echo(isset($page) && $page == 'investidores')?'active':''; ?>">
                            <a href="<?php echo $this->Html->url('/investidores'); ?>">Investidores</a>
                        </li>
                        <li class="<?php echo($this->params['action']== 'negocie')?'active':''; ?>">
                            <a href="<?php echo $this->Html->url('/negocie'); ?>">Negocie seu terreno</a>
                        </li>
                        <li class="<?php echo($this->params['controller'] == 'noticias')?'active':''; ?>">
                            <a class="small" href="<?php echo $this->Html->url('/noticias'); ?>">Notícias</a>
                        </li>
                        <li class="<?php echo( $this->params['action'] == 'carreiras')?'active':''; ?>">
                            <a class="small" href="<?php echo $this->Html->url('/carreiras'); ?>">Carreiras</a>
                        </li>
                        <li class="<?php echo(isset($page) && $page == 'contato')?'active':''; ?>">
                            <a class="small" href="<?php echo $this->Html->url('/contato'); ?>">Contato</a>
                        </li>

                    </ul>
                </nav>
        </header>
        
        <div role="main" class="main">
         
        	<?php echo $this->fetch('content'); ?>



        </div>

        <footer>
          <div id="footer-container">

            <?php echo $this->Html->image('grancorp-footer.png'); ?>

             <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="<?php echo $this->Html->url('/institucional'); ?>">Institucional</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/empreendimentos'); ?>">Empreendimentos</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/investidores'); ?>">Investidores</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/negocie'); ?>">Negocie seu terreno</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/noticias'); ?>">Notícias</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/trabalhe-conosco'); ?>">Trabalhe conosco</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url('/contato'); ?>">Contato</a>
                    </li>
                    <li>
                        <a href="#" id="acompanhe-empreendimento">Acompanhe seu empreendimento</a>
                    </li>
                </ul>
            </nav>

            <adress class="footer-adress">
                <p class="adress-title">
                    Entre em <br> <span>contato</span>
                </p>
                <p class="adress-fone">
                    (31) 3772 1539
                </p>
                <p class="adress-street">
                    Rua Goiás, 1214B, Boa Vista<br>Sete Lagoas
                </p>
            </adress>

          </div>

          <div class="sub-footer">
            <div class="sub-footer-container">
                <p class="copy">
                    Grancorp - todos os direitos reservados 2013
                </p>
            </div>
          </div>
        </footer>

        <input id="urlBase" type="hidden" value="<?php echo $this->Html->url('/'); ?>">

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
               <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=true"></script>
        <script type="text/javascript" src="<?php echo $this->Html->url('/rs-plugin/js/jquery.themepunch.plugins.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $this->Html->url('/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>"></script>

        <?php echo $this->Html->script(array('lib/jquery.colorbox-min','lib/jquery.isotope.min.js','main')) ?>

        <script type="text/javascript">

        jQuery(document).ready(function(){

            <?php 

            $filtro = '';
           
            if(isset($busca)){

                $filtro = "[name*=\"".Inflector::slug($busca)."\"]";
            }

            if(isset($bairroFiltro)){

                $filtro .= '.bairro-'.$bairroFiltro;

                echo "jQuery('#filter-bairro .filter-link').removeClass('active');";  

                echo "jQuery('#filter-bairro .filter-link[data-filter=\"bairro-$bairroFiltro\"]').addClass('active');";   

                echo "var bairroActive = jQuery('#filter-bairro .active').html();";  

                echo "jQuery('.bairro-active').html(bairroActive);";                      

            }


            if(isset($etapaFiltro)) {

                $filtro .= '.etapa-'.$etapaFiltro;

                echo "jQuery('#filter-obras .filter-link').removeClass('active');";  

                echo "jQuery('#filter-obras .filter-link[data-filter=\"etapa-$etapaFiltro\"]').addClass('active');";    

                echo "var etapaActive = jQuery('#filter-obras .active').html();";

                echo "jQuery('.etapa-active').html(etapaActive);";               

            }

            ?>

    
            window.container.isotope({ filter:  '<?php echo $filtro; ?>' });


        });

        </script>

        </script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
