<?php 
/* 
    Template Name: Contact Page
*/ ?>
<?php get_template_part('/templates/header'); ?>

<div class="page-wrapper" id="contact-page">

    <?php get_template_part('includes/contact-page/section','contact_info') ?>

    <?php get_template_part('includes/contact-page/section','contact_form') ?>
    
</div>
<?php get_template_part('/templates/footer'); ?>