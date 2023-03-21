<?php 
/* 
    Template Name: Portfolio Page
*/ ?>

<?php get_template_part('/templates/header'); ?>
<div class="page-wrapper" id="portfolio-page">
    <section class="page-section section-header fade-in">
        <div class="content portfolio-content page-header">
            <h1 class="name">Portfolio</h1>
        </div>      
    </section>
    

    <!-- Portfolio Nav -->
    <?php get_template_part('includes/portfolio-page/section','portfolio_nav'); ?> 

    <!-- Portfolio Items -->
    <?php get_template_part('includes/portfolio-page/section','portfolio_items'); ?>        
    
    <div class="overlay"></div>
</div>
<?php get_template_part('/templates/footer'); ?>