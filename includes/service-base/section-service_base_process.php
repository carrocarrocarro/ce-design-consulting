<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-process section-service-process--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service ection-service-process section-service-process--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-process">
        <div class="content service-content">

<?php endif; ?>

    <?php if( have_rows('process')) : ?>
        <?php while( have_rows('process') ): the_row(); ?>

            <?php if(get_sub_field('process_heading')) : ?>
                <h2><?php the_sub_field('process_heading') ?></h2>
            <?php endif; ?>

            <div class="process">

                <!-- Process step 1 -->
                <?php if( have_rows('process_step_1')) : ?>
                    <article class="process-item">
                        <?php while( have_rows('process_step_1') ): the_row(); ?>
                            <?php if(get_sub_field('process_step_1_heading')) : ?>
                                <h3><?php the_sub_field('process_step_1_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('process_step_1_description')) : ?>
                                <p><?php the_sub_field('process_step_1_description') ?></p>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </article>
                <?php endif; ?>

                <!-- Process step 2 -->
                <?php if( have_rows('process_step_2')) : ?>
                    <article class="process-item">
                        <?php while( have_rows('process_step_2') ): the_row(); ?>
                            <?php if(get_sub_field('process_step_2_heading')) : ?>
                                <h3><?php the_sub_field('process_step_2_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('process_step_2_description')) : ?>
                                <p><?php the_sub_field('process_step_2_description') ?></p>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </article>
                <?php endif; ?>

                <!-- Process step 3 -->
                <?php if( have_rows('process_step_3')) : ?>
                    <article class="process-item">
                        <?php while( have_rows('process_step_3') ): the_row(); ?>
                            <?php if(get_sub_field('process_step_3_heading')) : ?>
                                <h3><?php the_sub_field('process_step_3_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('process_step_3_description')) : ?>
                                <p><?php the_sub_field('process_step_3_description') ?></p>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </article>
                <?php endif; ?>

                <!-- Process step 4 -->
                <?php if( have_rows('process_step_4')) : ?>
                    <article class="process-item">
                        <?php while( have_rows('process_step_4') ): the_row(); ?>
                            <?php if(get_sub_field('process_step_4_heading')) : ?>
                                <h3><?php the_sub_field('process_step_4_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('process_step_4_description')) : ?>
                                <p><?php the_sub_field('process_step_4_description') ?></p>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </article>
                <?php endif; ?>

                <!-- Process step 5 -->
                <?php if( have_rows('process_step_5')) : ?>
                    <article class="process-item">
                        <?php while( have_rows('process_step_5') ): the_row(); ?>
                            <?php if(get_sub_field('process_step_5_heading')) : ?>
                                <h3><?php the_sub_field('process_step_5_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('process_step_5_description')) : ?>
                                <p><?php the_sub_field('process_step_5_description') ?></p>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </article>
                <?php endif; ?>

                <!-- Process step 6 -->
                <?php if( have_rows('process_step_6')) : ?>
                    <article class="process-item">
                        <?php while( have_rows('process_step_6') ): the_row(); ?>
                            <?php if(get_sub_field('process_step_6_heading')) : ?>
                                <h3><?php the_sub_field('process_step_6_heading') ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('process_step_6_description')) : ?>
                                <p><?php the_sub_field('process_step_6_description') ?></p>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </article>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>

    </div>    
</section>