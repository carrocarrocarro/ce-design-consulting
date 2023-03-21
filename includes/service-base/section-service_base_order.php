<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-order section-service-order--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-order section-service-order--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-order">
        <div class="content service-content">

<?php endif; ?>

    <?php if( have_rows('order')) : ?>
        <?php while( have_rows('order') ): the_row(); ?>

            <article class="text">
                <?php 
                    $link = get_sub_field('order_link');
                    $link_title = $link['title'];
                    $link_url = $link['url'];  
                    if($link) :
                         
                ?>
                    <a 
                        href="<?php echo esc_url($link_url); ?>"
                        class="btn order-btn"
                    >
                    <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
                
               

            </article>
            
            <?php if(get_sub_field('criteria_image')) : ?>
                <img 
                    src="<?php echo get_sub_field('criteria_image')['url']; ?>" 
                    alt="<?php echo get_sub_field('criteria_image')['alt']; ?>"
                />
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

    </div>
</section>    