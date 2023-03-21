<?php if( have_rows('faq')) : ?>
    <?php while( have_rows('faq') ): the_row(); ?>

        <section class="page-section section-website section-website-faq">
            <div class="content website-content">

                <?php if(get_sub_field('title')) : ?>
                    <h2><?php the_sub_field('title') ?></h2>
                <?php endif; ?>

                <div class="faq">

                    <!-- FAQ item 1 -->
                    <?php if( have_rows('faq_item_1')) : ?>
                        <?php while( have_rows('faq_item_1') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 2 -->
                    <?php if( have_rows('faq_item_2')) : ?>
                        <?php while( have_rows('faq_item_2') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 3 -->
                    <?php if( have_rows('faq_item_3')) : ?>
                        <?php while( have_rows('faq_item_3') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 4 -->
                    <?php if( have_rows('faq_item_4')) : ?>
                        <?php while( have_rows('faq_item_4') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 5 -->
                    <?php if( have_rows('faq_item_5')) : ?>
                        <?php while( have_rows('faq_item_5') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 6 -->
                    <?php if( have_rows('faq_item_6')) : ?>
                        <?php while( have_rows('faq_item_6') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 7 -->
                    <?php if( have_rows('faq_item_7')) : ?>
                        <?php while( have_rows('faq_item_7') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 8 -->
                    <?php if( have_rows('faq_item_8')) : ?>
                        <?php while( have_rows('faq_item_8') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 9 -->
                    <?php if( have_rows('faq_item_9')) : ?>
                        <?php while( have_rows('faq_item_9') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- FAQ item 10 -->
                    <?php if( have_rows('faq_item_10')) : ?>
                        <?php while( have_rows('faq_item_10') ): the_row(); ?>

                                <?php if( get_sub_field('question') || get_sub_field('answer') ) : ?>

                                    <article class="faq-item">

                                        <?php if(get_sub_field('question')) : ?>
                                            <h3><?php the_sub_field('question') ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('answer')) : ?>
                                            <p><?php the_sub_field('answer') ?></p>
                                        <?php endif; ?>
                                    
                                    </article>

                                <?php endif; ?>
                                
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
       
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
