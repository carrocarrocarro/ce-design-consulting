<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-terms section-service-terms--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-terms section-service-terms--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-terms">
        <div class="content service-content">

<?php endif; ?>

        <?php if( have_rows('terms')) : ?>
            <?php while( have_rows('terms') ): the_row(); ?>

                <article class="text">
        
                    <?php if( have_rows('price')) : ?>
                        <?php while( have_rows('price') ): the_row(); ?>
                            <?php if(get_sub_field('price_heading')) : ?>
                                <h3><?php the_sub_field('price_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('price_text')) : ?>
                                <p><?php the_sub_field('price_text') ?></p>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if( have_rows('terms_and_payment')) : ?>
                        <?php while( have_rows('terms_and_payment') ): the_row(); ?>
                            <?php if(get_sub_field('terms_and_payment_heading')) : ?>
                                <h3><?php the_sub_field('terms_and_payment_heading') ?></h3>
                            <?php endif; ?>

                            <?php $termsText = get_sub_field('terms_and_payment_text')  ?>
                            <?php if($termsText) : ?>
                                <p><?php echo apply_filters('the_content', $termsText); ?></p>
                            <?php endif; ?>
                        
                            <?php endwhile; ?>
                    <?php endif; ?>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>
   
    </div>
</section>
<!-- <article class="text">
            <h2>Cost</h2>
            <p>All prices are stated excluding VAT 25%</p>
            <p>Business analysis – SEK 4,000</p>
            <h3>Payment</h3>
            <p>Unless otherwise specified, 50% of the price is charged in booking fee and the remaining 50% is charged on delivery of the website.</p>
            <h3>Terms</h3>
            <p>When you order a service from CE Design Consulting, what is stated in the agreement applies. Terms may vary depending on the type of service you have purchased.</p> 
        </article>
 -->