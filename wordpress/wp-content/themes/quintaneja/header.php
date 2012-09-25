<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('title'); ?> &#8212; A maior quinta sertaneja do ABC</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="Marcker: marckfree at gmail.com" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bevan"  />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/text.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/960.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles.css" />
        <?php wp_head(); ?>
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script> 
    </head>
    
    <!-- Facebook like box -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- endOf Facebook like box -->

    <body>
 
        <div id="cabecalho">
            
            <div class="logotipo container_12">
                <a href="<?php bloginfo('url'); ?>" 
                   title="Quintaneja &#8212; A maior quinta sertaneja do ABC">
                    
                    <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-quintaneja.png" 
                         alt="Quintaneja &#8212; A maior quinta sertaneja do ABC" />

                </a>
            </div>
            
            <div class="slogan container_12">
                <h1>A melhor festa do ABC</h1>
            </div>

            <div class="navegacao">
                <div class="menu">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>  " title="Inicial">Inicial</a></li>
                        <?php wp_list_pages('title_li&sort_column=post_date'); ?>
                    </ul>
                </div> <!-- endOf Menu -->
            </div> <!-- endOf Navegação -->

        </div> <!-- endOf Cabeçalho -->
        
        <div id="container" class="container_12">
            
            <div id="banner-rotativo" class="alpha grid_12 omega">

                <div class="banner">
                    <?php 
                        if ( function_exists( 'meteor_slideshow' ) ) { 
                            meteor_slideshow("banner-home"); 
                        } 
                    ?>
                </div> <!-- endOf Banner -->

            </div> <!-- endOf Banner Rotativo -->