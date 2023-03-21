<?php 
/* 
    Template Name: Illustrations & Graphics Page
*/ ?>

<?php get_template_part('/templates/header'); ?>
    <div class="page-wrapper graphic-profile-page" id="service-page">

        <!-- Header -->
        <?php get_template_part('includes/service-base/section','service_base_header'); ?>
        
        <!-- Criterias -->
        <?php get_template_part('includes/service-base/section','service_base_criterias'); ?> 

        <!-- Deliverables -->
        <?php get_template_part('includes/service-base/section','service_base_deliverables'); ?>
        
        <!-- Process -->
        <?php get_template_part('includes/service-base/section','service_base_process'); ?> 

        <!-- FAQ -->
        <?php get_template_part('includes/service-base/section','service_base_faq'); ?> 

        <!-- Terms & Payment -->
        <?php get_template_part('includes/service-base/section','service_base_terms'); ?>
        
        <!-- Tips -->
        <?php get_template_part('includes/service-base/section','service_base_tips'); ?> 
        
    </div>
<?php get_template_part('/templates/footer'); ?>