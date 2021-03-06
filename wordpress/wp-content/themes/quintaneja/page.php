<?php get_header(); ?>

    <div id="conteudo" class="grid_12"><!-- Conteúdo -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>           
            <?php
                $nomePagina = basename($_SERVER['REQUEST_URI']);
            ?>

            <div class="conteudo-<?php echo $nomePagina; ?>">
                <div class="header-pagina">
                    <h1><?php the_title(); ?></h1>
                </div>

                <div class="conteudo-<?php echo $nomePagina; ?>-interno alpha grid_12">
                    <div class="header-conteudo-interno">
                    </div>
        <?php endwhile; else: ?>
                            <div class="post_conteudo grid_9">
                                <p><?php _e('Desculpe, não existem postagens sobre esse assunto.'); ?></p>
                            </div>
        <?php endif; ?>
                    <div class="conteudo-interno">
                        <?php 
                            if (is_page('a-quintaneja')) {
                                include 'a-quintaneja.php';
                            }
                            elseif (is_page('agenda')) {
                                include 'agenda.php';
                            }
                            elseif (is_page('aniversario')) {
                                include 'aniversario.php';
                            }
                            elseif (is_page('ingressos')) {
                                include 'ingressos.php';
                            }
                            elseif (is_page('fotos-e-videos')) {
                                include 'fotos-e-videos.php';
                            }
                            elseif (is_page('contato')) {
                                include 'contato.php';
                            }
                        ?>
                    </div>
                </div> <!-- / Conteúdo interno -->
            </div>
        </div><!-- / Conteúdo -->
    </div><!-- / Container -->

<?php get_footer(); ?>