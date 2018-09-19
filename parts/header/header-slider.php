
<div class="owl-carousel owl-theme">
 
    <?php $new_query = new WP_Query( array( 'showposts' => 5 ));
    while ( $new_query->have_posts() ) { $new_query->the_post(); ?>
 
    <?php echo background_slider(); ?>
        <div class="container">
            <h1><?php echo the_title();?></h1>
            <p><?php echo the_excerpt(); ?></p>
            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Baca Lebih <i class="far fa-arrow-right"></i></a>
        </div>
    </div>
 
    <?php } ?>
    <?php wp_reset_postdata(); ?>
 
</div>