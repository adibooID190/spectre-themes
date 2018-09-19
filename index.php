<?php get_header(); ?>
<div cass="container">
    <div class="row">
        <div class="col-md-8">
            <?php if(have_posts()){ ?>
                <?php get_template_part('post/content'); ?>
            <?php } else { ?>
                <section id="no-post">
                    <?php get_template_part('post/content', get_post_format()); ?>
                </section>
            <?php } ?>
        </div>
        <div class="col-md-4">
        
        </div>
    </div>
</div>
<?php get_footer(); ?>