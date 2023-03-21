<?php if( have_rows('process')) : ?>
    <?php while( have_rows('process') ): the_row(); ?>

        <section class="page-section section-website section-website-process">
            <div class="content website-content">

                        <?php if(get_sub_field('process_title')) : ?>
                            <h2><?php the_sub_field('process_title') ?></h2>
                        <?php endif; ?>

                        <?php if(get_sub_field('process_title')) : ?>
                            <p class="slogan"><?php the_sub_field('process_slogan') ?></p>
                        <?php endif; ?>

                            <div class="process">

                                <!-- Process step 1 -->
                                <?php if( have_rows('item_1')) : ?>
                                    <?php while( have_rows('item_1') ): the_row(); ?>
                                        <article class="process-item">

                                            <?php if(get_sub_field('process_img')) : ?>
                                                <img 
                                                    src="<?php echo get_sub_field('process_img')['url']; ?>" 
                                                    alt="<?php echo get_sub_field('process_img')['alt']; ?>"
                                                />
                                            <?php endif; ?>                    
                                            <?php if(get_sub_field('title')) : ?>
                                                <h3><?php the_sub_field('title') ?></h3>
                                            <?php endif; ?>

                                            <?php if(get_sub_field('info')) : ?>
                                                <p><?php the_sub_field('info') ?></p>
                                            <?php endif; ?>

                                        </article>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                
            </div>    
        </section>

    <?php endwhile; ?>
<?php endif; ?>