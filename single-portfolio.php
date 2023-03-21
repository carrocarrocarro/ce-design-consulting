<?php 
/* 
    Template Name: Portfolio Item
*/ ?>
<?php get_template_part('/templates/header'); ?>
<div class="page-wrapper" id="portfolio-single-page">

    <?php 
        while ( have_posts() ) :
            the_post();
            // Get the portfolio data
            
    ?>

    <!-- Header -->
    <?php get_template_part('includes/portfolio-single-page/section','portfolio_single_header'); ?>

    <!-- Content -->
    <?php get_template_part('includes/portfolio-single-page/section','portfolio_single_content'); ?>
    
    
    <?php endwhile; ?>
    
    <!-- Nav -->
    <?php get_template_part('includes/portfolio-single-page/section','portfolio_single_nav'); ?>
     
    
</div> 
<?php get_template_part('/templates/footer'); ?>