<div class="texto-pagina">
    <?php query_posts('posts_per_page=3&category_name=agenda'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( get_post_meta($post->ID, 'Imagem', true) ) : ?>
    
    <div class="item-agenda">
        <div class="header-agenda">
            <h1><?php the_title(); ?></h1>
        </div>
        
        <div class="imagem-agenda">
            <img src="<?php echo get_post_meta($post->ID, 'Imagem', true) ?>" 
                 title="<?php the_title(); ?>" 
                 alt="<?php the_title(); ?>"
                 width="220"
                 height="200" />
        </div>
    </div>
        <?php endif; ?>
    <?php endwhile; else: ?>
    
    <?php endif; ?>
</div>