<?php 
/* 
    Template Name: About Page
*/ ?>

<?php get_template_part('/templates/header'); ?>
<div class="page-wrapper" id="about-page">
    
    <?php get_template_part('includes/about-page/section','about_about') ?>

    <?php get_template_part('includes/about-page/section','about_core_values') ?>
    
</div>
<?php get_template_part('/templates/footer'); ?>