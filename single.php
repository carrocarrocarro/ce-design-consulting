<?php get_template_part('/templates/header'); ?>
<div class="page-wrapper" id="article-page">
    <?php 
        if(have_posts()) :
        while(have_posts()) :
        the_post();
    ?>
     
    <!-- Content-->
    <?php get_template_part('includes/single-page/section','single_content'); ?>
        
    <?php endwhile; ?>        
    <?php endif; ?>

     <!-- Nav -->
     <?php get_template_part('includes/single-page/section','single_nav'); ?>
</div> 
<?php get_template_part('/templates/footer'); ?>