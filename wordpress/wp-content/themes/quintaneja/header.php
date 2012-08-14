<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('title'); ?> &#8212; A maior quinta sertaneja do ABC</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="Marcker: marckfree at gmail.com" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/text.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/960.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styles.css" />
        <?php wp_head(); ?>
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script> 
    </head>
    <body>
 
        <div id="cabecalho">
            
            <div class="logotipo container_12">
                <a href="http://www.festaquintaneja.com.br" 
                   title="Quintaneja &#8212; A maior quinta sertaneja do ABC">
                    
                    <img src="<?php bloginfo('template_url'); ?>/imagens/logotipo-quintaneja.png" 
                         alt="Quintaneja &#8212; A maior quinta sertaneja do ABC" />
                         
                </a>
            </div>
            
            <div class="slogan container_12">
                <h1>A melhor festa do ABC</h1>
            </div>

            <div class="navegacao">
                <div class="menu container_12">
                    <ul>
                        <li><a href="http://www.festaquintaneja.com.br" title="Inicial">Inicial</a></li>
                        <?php wp_list_pages('title_li&post_date&sort_order=DESC'); ?>
                    </ul>
                </div> <!-- endOf Menu -->
            </div> <!-- endOf Navegação -->

        </div> <!-- endOf Cabeçalho -->