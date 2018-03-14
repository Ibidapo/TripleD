<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mt-md-4" style="font-family: sans-serif">
            <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer();