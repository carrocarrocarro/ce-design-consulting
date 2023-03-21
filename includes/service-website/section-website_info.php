<?php if( have_rows('web_package_info')) : ?>
    <?php while( have_rows('web_package_info') ): the_row(); ?>
        
        <section class="page-section section-website section-website-package-info">
            <div class="content website-content">

            <?php if( have_rows('general_info')) : ?>
                <?php while( have_rows('general_info') ): the_row(); ?>
                <article class="text">
                    <?php if(get_sub_field('title')) : ?>
                        <h2>
                            <?php the_sub_field('title'); ?> 
                        </h2>
                    <?php endif; ?>

                
                    <?php if(get_sub_field('info')) : ?>
                        <p>
                            <?php the_sub_field('info') ?>
                        </p>
                    <?php endif; ?>

                </article>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('small')) : ?>
                <?php while( have_rows('small') ): the_row(); ?>
                <article class="text">
                    <?php if(get_sub_field('title')) : ?>
                        <h2>
                            <?php the_sub_field('title'); ?> 
                        </h2>
                    <?php endif; ?>

                    <?php if(get_sub_field('small_info')) : ?>
                        <p>
                            <?php the_sub_field('small_info') ?>
                        </p>
                    <?php endif; ?>

                </article>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('smart')) : ?>
                <?php while( have_rows('smart') ): the_row(); ?>
                <article class="text">
                    <?php if(get_sub_field('title')) : ?>
                        <h2>
                            <?php the_sub_field('title'); ?> 
                        </h2>
                    <?php endif; ?>

                    <?php if(get_sub_field('smart_info')) : ?>
                        <p>
                            <?php the_sub_field('smart_info') ?>
                        </p>
                    <?php endif; ?>

                </article>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('luxury')) : ?>
                <?php while( have_rows('luxury') ): the_row(); ?>
                <article class="text">
                    <?php if(get_sub_field('title')) : ?>
                        <h2>
                            <?php the_sub_field('title'); ?> 
                        </h2>
                    <?php endif; ?>

                 
                    <?php if(get_sub_field('luxury_info')) : ?>
                        <p>
                            <?php the_sub_field('luxury_info')  ?>
                        </p>
                    <?php endif; ?>

                </article>

                <?php endwhile; ?>
            <?php endif; ?>



            </div>    
        </section>

        <?php if( have_rows('bonus_info')) : ?>
                <?php while( have_rows('bonus_info') ): the_row(); ?>

        <section class="page-section section-website section-website-package-bonus">
            <div class="content website-content">

                <article class="text">
                    <?php if(get_sub_field('title')) : ?>
                        <h2>
                            <?php the_sub_field('title'); ?> 
                        </h2>
                    <?php endif; ?>

                    <?php if(get_sub_field('info')) : ?>
                        <p>
                            <?php the_sub_field('info') ?>
                        </p>
                    <?php endif; ?>

                </article>

            </div>    
        </section>

            <?php endwhile; ?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>