
<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-header section-service-header--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-header section-service-header--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service section-service-header">
        <div class="content service-content">
<?php endif; ?>
        <article class="text">
            
            <h1>
                <?php the_title();?>  
            </h1>

            <?php  if(get_field('header_text')) :?>
                <p>
                    <?php the_field('header_text'); ?>
                </p>          
            <?php endif; ?>

            <?php  if(get_field('header_text_2')) :?>
                <p>
                    <?php the_field('header_text_2'); ?>
                </p>          
            <?php endif; ?>

        </article>
    </div>
</section>