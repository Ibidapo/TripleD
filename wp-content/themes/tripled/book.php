<?php
/* Template Name: Book */
get_header();

// check if the Booking repeater field has rows of data
if( have_rows('book_box') ):
    // loop through the rows of data
    while ( have_rows('book_box') ) : the_row();
        $booking_cap = get_sub_field('bk_book_caption');
        $booking_bg = get_sub_field('bk_book_bg');
    endwhile;
else :
    $booking_cap = $booking_bg = "No Booking Fields";
endif;
?>

<div class="container text-center mt-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Follow us, as we celebrate with our clients </h3>
            <ul class="juicer-feed" data-feed-id="foodcrushcatering"  data-per="4"></ul>
        </div>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-12" style="height: 275px;">
                    <h3>Be a part of our yummy story</h3>
                    <div class="box book" style="background: url('<?= $booking_bg['url']; ?>')">
                        <?= $booking_cap; ?>
                        <span><a class="btn btn-lg typeform-share button" href="https://dapo2.typeform.com/to/QPB4bY" data-mode="popup" target="_blank">Book Now!</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto mt-3 mt-md-0">
                    <!-- <h3>Our Servings at events</h3> -->
                    <div class="box menu">
                        <div class="v-align">
                            <?php $rows = get_field('menu_box'); if($rows) : $rowCount = 0; ?>
                            <ul class="pl-0 mb-0" style="list-style-type: none;">
                                <?php foreach($rows as $row) : $rowCount++; if ($rowCount <= 4) : ?>
                                <li><?= $row['bk_menu']; ?></li>
                                <?php else : ?>
                                <li class="d-md-none d-xl-block"><?= $row['bk_menu']; ?></li>
                                <?php endif; endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <h3>Order our delicacies now</h3> -->
                    <div class="td-card">
                        <p>We provide the best culinary services for events and celebrations</p>
                        <span><a href="#" class="btn">Order Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer()?>
<!-- TypeForm Plugin -->
<script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
<!-- Parallax Scroll Effects -->
<!-- <script>
   $('#book').parallaxie({
       speed: 0.6
   });
</script> -->
<!-- Basic JS -->
