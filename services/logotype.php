<?php 
/* 
    Template Name: Logotype Page
*/ ?>

<?php get_template_part('/templates/header'); ?>
    <div class="page-wrapper logotype-page" id="service-page">

        <!-- Header -->
        <?php get_template_part('includes/service-base/section','service_base_header'); ?>
        
        <!-- Criterias -->
        <?php get_template_part('includes/service-base/section','service_base_criterias'); ?> 

        <!-- Deliverables -->
        <?php get_template_part('includes/service-base/section','service_base_deliverables'); ?>
        
        <!-- Process -->
        <?php get_template_part('includes/service-base/section','service_base_process'); ?>
        
        <!-- Order -->
        <?php get_template_part('includes/service-base/section','service_base_order'); ?> 

        <!-- FAQ -->
        <?php get_template_part('includes/service-base/section','service_base_faq'); ?> 

        <!-- Terms & Payment -->
        <?php get_template_part('includes/service-base/section','service_base_terms'); ?>
        
        <!-- Tips -->
        <?php get_template_part('includes/service-base/section','service_base_tips'); ?>
        
        <!-- Order -->
        <?php get_template_part('includes/service-base/section','service_base_order'); ?>  
        
    </div>
<?php get_template_part('/templates/footer'); ?>