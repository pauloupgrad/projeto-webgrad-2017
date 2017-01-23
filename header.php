<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta name="description" content="<?php bloginfo('description'); ?>"> 
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

        <!-- Css -->    
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png">	
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <h1 class="fontzero"><?php bloginfo('name'); ?> | Seu Site de Dicas e Desenvolvimento Web</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo">
                        <a href="<?php bloginfo('home'); ?>">
                            <img src="<?php echo get_theme_mod('m1_logo'); ?>" class="img-responsive center-block" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
                        </a>
                    </div><!--/ col-md-3 -->
                    <div class="col-md-8">
                        <nav class="navbar navbar-default navbar-custom">
                            <h1 class="fontzero">Navegação principal do site.</h1>
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">Navegação do site</a>	     
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <?php require_once('includes/wp_bootstrap_navwalker.php'); ?>
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'primary',
                                'theme_location' => 'primary',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse navbar-collapse-custom',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker())
                            );
                            ?>             
                        </nav> 

                    </div><!--/ col-md-9 --> 
                    <div class="col-md-1 navbar navbar-default">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                                    <span class="glyphicon glyphicon-user "></span></a> 
                            </li>
                        </ul>
                    </div>  	
                </div>
                <div class="row social-search">
                    <div class="col-md-8">
                        <div class="bannerads">
                            <img src="<?php bloginfo('template_url'); ?>/images/ads.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 ">    
                        <div class="redes">

                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="img-responsive img-circle"></a>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/images/google-plus.png" class="img-responsive img-circle"></a>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="img-responsive img-circle"></a>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/images/youtube.png" class="img-responsive img-circle"></a>
                            <a href="#">
                                <img src="<?php bloginfo('template_url'); ?>/images/rss.png" class="img-responsive img-circle"></a>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" class="img-responsive"></a>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/email.png" class="img-responsive img-circle"></a>

                        </div>
                        <form class="form-pesq">           
                            <input type="text" class="inputsearch" placeholder="O que você procura ...">            
                            <button type="submit" class="btn btn-default btn-pes">
                                <span class="glyphicon glyphicon-search">
                            </button>
                        </form>
                    </div>
                </div>
            </div><!-- /container -->
        </header><!-- fim header -->