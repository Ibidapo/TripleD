<?php
/*Template Name: Order */
get_header();

// check if the Booking repeater field has rows of data
if( have_rows('book_box') ):
    // loop through the rows of data
    while ( have_rows('book_box') ) : the_row();
        $booking_cap = get_sub_field('od_book_caption');
        $booking_bg = get_sub_field('od_book_bg');
    endwhile;
else :
    $booking_cap = $booking_bg = "No Booking Fields";
endif;
?>

<div class="container">
    <div class="row pb-5">
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
        <div class="col-9 col-sm-6 col-md-3 mx-auto">
            <div class="td-card">
                <p>We provide the best culinary services for events and celebrations</p>
                <span><a href="#" class="btn">Order Now</a></span>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-10 col-md-4 mx-auto mt-3 mt-md-0">
            <h3>Any upcoming events?</h3>
            <div class="box book" style="background: url('<?= $booking_bg['url']?>') no-repeat center">
                <?= $booking_cap; ?>
                <span><a class="btn typeform-share button" href="https://dapo2.typeform.com/to/QPB4bY" data-mode="popup" target="_blank">Book Now!</a></span>
            </div>
        </div>
        <div class="col-10 col-md-4 mx-auto mt-3 mt-md-0">
            <h3>Have you seen our Menu?</h3>
            <div class="box menu">
                <?php
                $rows = get_field('menu_box');
                if($rows)
                {
                    echo '<ul style="list-style-type: none; padding-left: 0; margin-bottom: 0">';
                    foreach($rows as $row)
                    {
                        echo '<li>' . $row['order_menu'] . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>
        <div class="col-10 col-md-4 mx-auto mt-3 mt-md-0">
            <h3>Follow us on Instagram</h3>
            <ul class="juicer-feed mt-0" data-feed-id="foodcrushcatering" data-per="1"></ul>
        </div>
    </div>
</div>
<?php get_footer() ?>
<!-- Parallax Scroll Effects -->
<!-- <script>
   $('#order').parallaxie({
       speed: 0.6
   });
</script> -->
<!-- Basic Js -->