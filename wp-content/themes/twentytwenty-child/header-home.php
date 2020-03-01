<?php
/**
 * Header file for the Twenty Twenty WordPress child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<header class="header-home container-fluid">
    <div class="row navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">TravelCream</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#flights">Flights <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hotels">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#trips">Trips</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#activity">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#deals">Deals</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-light login-link home-btn">Login</a>
                </div>
            </nav>
        </div>
    </div>
    <div class="header-heading-search-wrapper">
        <div class="header-headings text-center d-none d-sm-block">
            <p class="heading">Do you want to visit Paris ?</p>
            <p class="sub-heading">Why not</p>
        </div>
        <form class="search-block">
            <input type="text" placeholder="Where are you leaving from ?"><!--
            --><input type="text" placeholder="Where do you want to go ?"><!--
            --><input type="text" placeholder="Date"><!--
            --><input type="submit" value="Search">
        </form>
    </div>
    <div class="eiffel-tower text-center">
        <img src="/wp-content/uploads/home-page/eiffel-tower-transp.png" alt="">
    </div>
</header>


<?php
// Output the menu modal.
get_template_part( 'template-parts/modal-menu' );
