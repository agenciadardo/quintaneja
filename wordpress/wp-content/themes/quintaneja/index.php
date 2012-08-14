<?php get_header(); ?>

<div id="container" class="container_12">
    
    <div id="banner-rotativo" class="alpha grid_12 omega">

        <div class="banner">
            <img src="<?php bloginfo('template_url'); ?>/imagens/banner.jpg" alt="" />
        </div> <!-- endOf Banner -->

    </div> <!-- endOf Banner Rotativo -->

    <div id="conteudo" class="alpha grid_8 omega">
        <div class="boas-vindas">
            <div class="cabecalho-box">
                <h1>Bem-vindo a nossa festa!</h1>
            </div>

            <div class="mensagem-boas-vindas">
                <p>
                    A nossa festa sertaneja acontece todas as quintas-feiras
                    do mês, trazendo sempre uma ótima atração.
                    São diversos artistas da região que agitam a nossa
                    noite, sempre com muita música, alegria e 
                    descontração.
                    <br />
                    Gente bonita, mulheres VIP até as 00h, segurança,
                    premiações e muito mais! Venha curtir com a gente
                    e traga seus amigos para nossa festa!
                    <br />
                    Isso tudo faz da Quintaneja a melhor quinta-feira
                    do ABC!!!
                </p>
            </div> <!-- endOf Mensagem de boas-vindas -->
        </div> <!-- endOf Boas-vindas -->

        <div class="fotos-artistas">
            <div class="artistas">
                <img src="<?php bloginfo('template_url'); ?>/imagens/artistas.png" alt="" />
            </div>
        </div>


        <div class="galeria-fotos">
            <div class="cabecalho-box">
                <h1>Galeria de fotos</h1>
            </div>
            
            <div class="album-fotos">
               <!--  <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" />
                <img src="" alt="" /> -->
            </div> <!-- endOf Álbum de fotos -->
        </div><!--  endOf Galeria de fotos -->

        <div class="facebook-app">
            <p>Facebook</p>                
        </div> <!-- endOf Facebook App -->

    </div> <!-- endOf Conteúdo -->

<?php get_sidebar(); ?>

</div> <!-- endOf Container -->

<?php get_footer(); ?>