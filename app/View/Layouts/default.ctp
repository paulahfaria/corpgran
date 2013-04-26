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
        <meta name="keywords" content="algumas, palavrinhas, sobre, projeto">
        <meta name="description" content="Tente não ultrapassar 150 caracteres na descrição.">
        <meta name="author" content="Plan B Comunicação">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width">

        <!-- Facebook Open Graph -->
        <meta property="og:title" content="GranCorp">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Nome do Site">
        <meta property="og:url" content="http://urlprojeto.com">
        <meta property="og:image" content="http://urlprojeto.com/imagem.jpg">

        <!-- Vincular essa página a um perfil do facebook -->
        <meta property="fb:admins" content="ID_DO_USUARIO">

        <link rel="shortcut icon" href="favicon.ico">
        


        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">

        <?php

		echo $this->Html->css(array('reset','main'));

		echo $this->Html->script(array('modernizr-2.6.2-respond-1.1.0.min'));

		echo $this->fetch('css');

		echo $this->fetch('script');

		?>

        <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/rs-plugin/css/settings.css') ?>">
        
    </head>

    <body class="<?php echo $this->params['controller'] ?>-<?php echo $this->params['action'] ?>">

     <header>
            <div id="header-container">
                <h1 class="logo">
                    <a href="<?php echo $this->Html->url('/') ?>" title="Ir para a página incial">

                    	<?php echo $this->Html->image('grancorp.png'); ?>

                    </a>
                </h1>
                <nav id="social-nav">
                    <ul>
                        <li>
                            <a href="http://www.facebook.com/GranCorp?fref=ts" class="facebook" target="_blank">facebook</a>
                        </li>
                        <li>
                            <a href="#" class="email">e-mail</a>
                        </li>
                        <li>
                            <a href="#" class="acompanhar-empreendimento">Acompanhe seu empreendimento</a>
                        </li>
                        <li>
                            <a href="#" class="login">login</a>
                        </li>
                    </ul>
                </nav>
                <address class="header-telephone">Vendas  (31) 3772 1539</address>
                <nav class="main-nav">
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

                    </ul>
                </nav>
            </div>
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
                        <a href="<?php echo $this->Html->url('/acompanhe'); ?>">Acompanhe seu empreendimento</a>
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
                    Rua Grancorp, 365 sala 567 <br>Belo horizonte
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

        <input id="urlBase" value="<?php echo $this->Html->url('/'); ?>">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo $this->Html->url('/rs-plugin/js/jquery.themepunch.plugins.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo $this->Html->url('/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>"></script>
        <?php echo $this->Html->script(array('lib/jquery.isotope.min.js','main')) ?>

        <script type="text/javascript">

        jQuery(document).ready(function(){

            <?php 

            $filtro = '';

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
