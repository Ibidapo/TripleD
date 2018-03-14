<?php
/*Template Name: Menu */
get_header()
?>

<div class="container mt-4 mb-3" >
    <div class="row">
        <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
            <div class="menu-carousel text-center">
                <div class="box carousel-cell">
                    <span class="h2">Traditional</span>
                    <?php $rows = get_field('traditional'); if($rows) : ?>
                        <ul class="mb-0 pl-0" style="list-style-type: none;">
                        <?php foreach($rows as $row) : ?>
                            <li><?= $row['traditional_menu']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="box carousel-cell">
                    <span class="h2">Continental</span>
                    <?php $rows = get_field('continental'); if($rows) : ?>
                        <ul class="mb-0 pl-0" style="list-style-type: none;">
                        <?php foreach($rows as $row) : ?>
                            <li><?= $row['continental_menu']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="box carousel-cell">
                    <span class="h2">Snacks</span>
                    <?php $rows = get_field('snacks'); if($rows) : ?>
                        <ul class="mb-0 pl-0" style="list-style-type: none;">
                        <?php foreach($rows as $row) : ?>
                            <li><?= $row['snacks_menu']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="box carousel-cell">
                    <span class="h2">Drinks</span>
                    <?php $rows = get_field('drinks'); if($rows) : ?>
                        <ul class="mb-0 pl-0" style="list-style-type: none;">
                        <?php foreach($rows as $row) : ?>
                            <li><?= $row['drinks_menu']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
<!-- Flickity Carousel -->
<script>
    $('.menu-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        autoPlay: 5000,
        wrapAround: true
    });
</script>
<!-- Parallax Scroll Effects -->
<!-- <script>
   $('#menu').parallaxie({
       speed: 0.6
   });
</script> -->