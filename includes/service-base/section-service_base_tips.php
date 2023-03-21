<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-tips section-service-tips--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-tips section-service-tips--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-tips">
        <div class="content service-content">

<?php endif; ?> 
<?php if( have_rows('tips')) : ?>
    <article class="text">
        <?php while( have_rows('tips') ): the_row(); ?>

            <?php if(get_sub_field('tips_heading')) : ?>
                <h2><?php the_sub_field('tips_heading') ?></h2>
            <?php endif; ?>

            <?php if(get_sub_field('tips_text')) : ?>
                <p><?php the_sub_field('tips_text') ?></p>
            <?php endif; ?>
            
    
    <?php endwhile; ?>
    </article>
<?php endif; ?>
    </div>
</section>
<!-- <p>Tips! Feel free to combine the business analysis with the target group analysis. Right now in package price 15% discount.</p> -->