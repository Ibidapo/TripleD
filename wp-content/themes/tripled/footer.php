<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 11/22/2017
 * Time: 11:52 AM
 */
?>

</div>
<footer class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <?php for ($i= 1; $i <= 3; $i++ ):?>
                <?php if ( is_active_sidebar( "footer_col_$i" ) ) : ?>
                    <div class="align-self-center <?= $i == 1 || $i == 3 ? 'col-md-3 text-center' : 'col-md-6 br-blue'; ?> <?= $i == 3 ? 'text-md-left' : ''; ?>">
                        <?php dynamic_sidebar( "footer_col_$i" ); ?>
                    </div>
                <?php endif; ?>
            <?php endfor ?>
        </div>
    </div>
</footer>
<!-- Required Jquery, Popper & Bootstrap scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="//assets.juicer.io/embed-no-jquery.js" type="text/javascript"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parallaxie.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</hmtl>