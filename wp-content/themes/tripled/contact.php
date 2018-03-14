<?php
/* Template Name: Contact */
get_header();

// check if the Booking repeater field has rows of data
if( have_rows('book_box') ):
    // loop through the rows of data
    while ( have_rows('book_box') ) : the_row();
        $booking_cap = get_sub_field('cnt_book_caption');
        $booking_bg = get_sub_field('cnt_book_bg');
    endwhile;
else :
    $booking_cap = $booking_bg = "No Booking Fields";
endif;
?>

<div class="container mt-3">
    <div class="row text-center">
        <div class="col-12 col-md-8">
            <h2>You can find us at</h2>
            <div class="box address">
                <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=3%20Ewenla%20Street%2C%20Iyana-Oworo%20busstop%2C%20Bariga%2C%20Lagos%2C%20Nigeria&key=AIzaSyD3HHIpOFhiThjf2PxnyuQ-EpBREAvXvDo" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <h2>Do you have an upcoming Event?</h2>
            <div class="box c-order" style="background: url('<?= $booking_bg['url'] ?>') no-repeat center;">
                <?= $booking_cap; ?>
                <span><a class="btn typeform-share button" href="https://dapo2.typeform.com/to/QPB4bY" data-mode="popup" target="_blank">Book Now!</a></span>
            </div>
        </div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-12 col-md-6">
            <!-- Instagram Plugin -->
            <h3>Follow us on Instagram</h3>
            <ul class="juicer-feed" data-feed-id="foodcrushcatering" data-per="2"></ul>
        </div>
        <div class="col-10 col-sm-6 col-md-3 mx-auto">
            <h3>Our servings at events</h3>
            <div class="box menu">
                <div class="v-align">
                    <?php $rows = get_field('menu_box'); if($rows) : $rowCount = 0; ?>
                        <ul class="pl-0 mb-0" style="list-style-type: none;">
                        <?php foreach($rows as $row) : $rowCount++; if ($rowCount <= 4) : ?>
                           <li><?= $row['cnt_menu']; ?></li>
                           <?php else :?>
                           <li class="d-md-none d-xl-block"><?= $row['cnt_menu']; ?></li>
                        <?php endif; endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="#" class="btn">Explore</a>
                </div>
            </div>
        </div>
        <div class="col-10 col-sm-6 col-md-3 mx-auto">
            <h3>Order a delicacy</h3>
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
    </div>
</div>
<?php get_footer()?>
<!-- Parallax Scroll Effects -->
<!-- <script>
   $('#contact').parallaxie({
       speed: 0.6
   });
</script> -->
