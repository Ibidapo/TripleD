<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 11/22/2017
 * Time: 11:42 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(is_front_page()) { echo get_bloginfo("name"); echo " | "; echo get_bloginfo("description"); } else { echo wp_title(" | ", false, right); echo get_bloginfo("name"); } ?></title>
    <!-- CSS files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
    <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/app.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Mobile Navigation -->
<nav class="m-navbar d-md-none">
    <div class="row">
        <div class="col-4">
            <a class="menu-icon" type="button" data-toggle="modal" data-target="#nav-modal">
                <div id="threeLines">
                    <button id="el"></button>
                </div>
            </a>
        </div>
        <div class="col-8 align-self-center text-right">
            <a class="logo" href="http://localhost/restuarant"><img class="img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.jpg"></a>
        </div>
    </div>
</nav>
<div class="container-fluid" id="<?php if (is_front_page()){echo "home";}else if(is_page_template('menu.php')){echo "menu";}else if(is_page_template('book.php')){echo "book";}else if(is_page_template('contact.php')){echo "contact";}else{echo "order";}?>">
    <!-- Mobile Navigation Modal -->
    <div class="modal fade" id="nav-modal" tabindex="-1" role="dialog" aria-labelledby="nav-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul>
                        <li><a href="http://localhost/restuarant/menu">Our Menu</a></li>
                        <li><a href="http://localhost/restuarant/order">Order Meal</a></li>
                        <li><a href="http://localhost/restuarant/booking">Book Event</a></li>
                        <li><a href="http://localhost/restuarant/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Desktop Navigation -->
    <?php
        wp_nav_menu( array(
            'theme_location' => 'primary_menu',
            'container_class' => 'menu-navbar-container d-none d-md-block',
            'menu_class' => 'nav justify-content-center top-navbar d-none d-md-flex',
            'walker' => new navigation_Walker()
        ) ); ?>