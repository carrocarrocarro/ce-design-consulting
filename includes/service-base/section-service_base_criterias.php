<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-criterias section-service-criterias--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-criterias section-service-criterias--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-criterias">
        <div class="content service-content">

<?php endif; ?>

    <?php if( have_rows('criterias')) : ?>
        <?php while( have_rows('criterias') ): the_row(); ?>

            <article class="text">
                <?php if(get_sub_field('criterias_heading')) : ?>
                    <h3><?php the_sub_field('criterias_heading') ?></h3>
                <?php endif; ?>
                
                <?php if( have_rows('criterias_list')) : ?>
                    <?php while( have_rows('criterias_list') ): the_row(); ?>
                    
                    <ul>
                        <?php if (get_sub_field('criteria_item_1')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_1'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_2')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_2'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_3')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_3'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_4')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_4'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_5')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_5'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_6')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_6'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_7')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_7'); ?>
                            </li>
                        <?php endif; ?>
                        <?php if (get_sub_field('criteria_item_8')) : ?>
                            <li>
                                <?php the_sub_field('criteria_item_8'); ?>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <?php endwhile; ?>
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