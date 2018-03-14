<?php
/* Template Name: Home*/
get_header();

// check if the Booking repeater field has rows of data
if( have_rows('book_box') ):
    // loop through the rows of data
    while ( have_rows('book_box') ) : the_row();
        $booking_cap = get_sub_field('book_caption');
        $booking_bg = get_sub_field('book_bg');
    endwhile;
else :
    $booking_cap = $booking_bg = "No Booking Fields";
endif;

// check if the Order repeater field has rows of data
if( have_rows('order_box') ):
    // loop through the rows of data
    while ( have_rows('order_box') ) : the_row();
        $order_cap = get_sub_field('order_caption');
        $order_bg = get_sub_field('order_bg');
    endwhile;
else :
    $order_cap = $order_bg = "No Order fields";
endif;

?>

<!-- <div id="item-1"></div>
<div id="item-2"></div>
<div id="item-3"></div> -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 text-center order-2 order-md-1">
            <div class="box menu">
                <div class="v-align">
                    <span class="h2">Menu</span>
                    <?php $rows = get_field('home_menu'); if($rows) : $rowCount = 0; ?>
                        <ul class="mb-0 pl-0" style="list-style-type: none;">
                        <?php foreach($rows as $row) : $rowCount++; if ($rowCount <= 5) : ?>
                            <li><?= $row['menu_item']; ?></li>
                            <?php else :?>
                            <li class="d-none d-lg-block"><?= $row['menu_item']; ?></li>
                        <?php endif; endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="#" class="btn mb-2">Explore</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2 mb-3 mb-md-0">
            <div class="main-carousel box">
                <div class="box carousel-cell"></div>
                <div class="box carousel-cell"></div>
                <div class="box carousel-cell"></div>
                <div class="box carousel-cell"></div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 order-3">
            <div class="row mt-3 mt-sm-0" style="height: 100%;">
                <div class="col-6 col-sm-12 pr-xs-1">
                    <div class="box book" style="background: url('<?= $booking_bg['url']?>') no-repeat center;">
                        <?= $booking_cap ?>
                        <span><a class="btn typeform-share button" href="https://dapo2.typeform.com/to/QPB4bY" data-mode="popup" target="_blank">Book Now!</a></span>
                    </div>
                </div>
                <div class="col-6 col-sm-12 pl-xs-1">
                    <div class="box order-box" style="top: 2%; background: url('<?= $order_bg['url']?>') no-repeat center">
                        <?= $order_cap ?>
                        <span><a href="#" class="btn">Order Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 mt-md-4">
        <div class="col-md-12 text-center">
            <div class="box py-3 px-2 px-lg-3"  style="min-height: 200px">
                <h2>At Triple D</h2>
                <?= get_field("about_box");?>
            </div>
        </div>
    </div>
    <div class="row mt-3 mt-md-4 insta-home">
        <div class="col-12 col-md-6 order-2 order-md-1 mt-3 mt-md-0">
            <!-- Instagram Plugin -->
            <h2 class="text-center">Follow our Events on Instagram</h2>
            <ul class="juicer-feed" data-feed-id="foodcrushcatering" data-per="4"></ul>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2 mt-3 mt-md-0">
            <div class="row">
                <div class="col-12"><h2 class="text-center">Our Trending Delicacies</h2></div>
                <div class="col-9 col-sm-6 mx-auto">
                    <div class="td-card">
                        <p>We provide the best culinary services for events and celebrations</p>
                        <span><a href="#" class="btn">Order Now</a></span>
                    </div>
                </div>
                <div class="col-9 col-sm-6 mx-auto">
                    <div class="td-card">
                        <p>We provide the best culinary services for events and celebrations</p>
                        <span><a href="#" class="btn">Order Now</a></span>
                    </div>
                </div>
                <div class="col-9 col-sm-6 mx-auto">
                    <div class="td-card">
                        <p>We provide the best culinary services for events and celebrations</p>
                        <span><a href="#" class="btn">Order Now</a></span>
                    </div>
                </div>
                <div class="col-9 col-sm-6 mx-auto">
                    <div class="td-card">
                        <p>We provide the best culinary services for events and celebrations</p>
                        <span><a href="#" class="btn">Order Now</a></span>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <p class="d-none d-md-block mb-2">Click here to view our long list of delicacies...</p>
                    <a class="btn btn-lg mt-2 mt-md-0" href="">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<!-- Parallax Scroll Effects -->
<!-- <script>
   $('#item-1').parallaxie({
       size: 'auto',
       speed: -0.8,
       offset: 90,
       pos_x: '10%'
   });

   $('#item-2').parallaxie({
       size: 'auto',
       speed: 0.8,
       offset: 300,
       pos_x: '55%'
   });

   $('#item-3').parallaxie({
       size: 'auto',
       speed: 0.3,
       offset: 50,
       pos_x: '85%'
   });
</script> -->
<!-- Flickity Carousel -->
<script>
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        autoPlay: 5000,
        wrapAround: true
    });
</script>
<!-- Basic js for features in the Web App -->
<script>
    $(document).ready(function(){
        var wide = $(window).width();
        setTimeout(function(){
            if ( wide <= 992){
                $('.j-stack').find('li.feed-item').slice(2).addClass('d-none');
            }
        }, 5000);
    })
</script>