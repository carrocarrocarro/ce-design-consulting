<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-faq section-service-faq--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-faq section-service-faq--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-faq">
        <div class="content service-content">

<?php endif; ?>

    <?php if( have_rows('faq')) : ?>
        <?php while( have_rows('faq') ): the_row(); ?>

            <?php if(get_sub_field('faq_heading')) : ?>
                <h2><?php the_sub_field('faq_heading') ?></h2>
            <?php endif; ?>

            <div class="faq">

                <!-- FAQ item 1 -->
                <?php if( have_rows('faq_item_1')) : ?>
                    
                        <?php while( have_rows('faq_item_1') ): the_row(); ?>

                            <?php if( get_sub_field('faq_question_1') || get_sub_field('faq_answer_1') ) : ?>

                                <article class="faq-item">

                                    <?php if(get_sub_field('faq_question_1')) : ?>
                                        <h3><?php the_sub_field('faq_question_1') ?></h3>
                                    <?php endif; ?>
                                    <?php if(get_sub_field('faq_answer_1')) : ?>
                                        <p><?php the_sub_field('faq_answer_1') ?></p>
                                    <?php endif; ?>
                                
                                </article>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    
                <?php endif; ?>

                <!-- FAQ item 2 -->
                <?php if( have_rows('faq_item_2')) : ?>
                    
                    <?php while( have_rows('faq_item_2') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_2') || get_sub_field('faq_answer_2') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_2')) : ?>
                                    <h3><?php the_sub_field('faq_question_2') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_2')) : ?>
                                    <p><?php the_sub_field('faq_answer_2') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 3 -->
            <?php if( have_rows('faq_item_3')) : ?>
                    
                    <?php while( have_rows('faq_item_3') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_3') || get_sub_field('faq_answer_3') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_3')) : ?>
                                    <h3><?php the_sub_field('faq_question_3') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_3')) : ?>
                                    <p><?php the_sub_field('faq_answer_3') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 4 -->
            <?php if( have_rows('faq_item_4')) : ?>
                    
                    <?php while( have_rows('faq_item_4') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_4') || get_sub_field('faq_answer_4') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_4')) : ?>
                                    <h3><?php the_sub_field('faq_question_4') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_4')) : ?>
                                    <p><?php the_sub_field('faq_answer_4') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 5 -->
            <?php if( have_rows('faq_item_5')) : ?>
                    
                    <?php while( have_rows('faq_item_5') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_5') || get_sub_field('faq_answer_5') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_5')) : ?>
                                    <h3><?php the_sub_field('faq_question_5') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_5')) : ?>
                                    <p><?php the_sub_field('faq_answer_5') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 6 -->
            <?php if( have_rows('faq_item_6')) : ?>
                    
                    <?php while( have_rows('faq_item_6') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_6') || get_sub_field('faq_answer_6') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_6')) : ?>
                                    <h3><?php the_sub_field('faq_question_6') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_6')) : ?>
                                    <p><?php the_sub_field('faq_answer_6') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 7 -->
            <?php if( have_rows('faq_item_7')) : ?>
                    
                    <?php while( have_rows('faq_item_7') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_7') || get_sub_field('faq_answer_7') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_7')) : ?>
                                    <h3><?php the_sub_field('faq_question_7') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_7')) : ?>
                                    <p><?php the_sub_field('faq_answer_7') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 8 -->
            <?php if( have_rows('faq_item_8')) : ?>
                    
                    <?php while( have_rows('faq_item_8') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_8') || get_sub_field('faq_answer_8') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_8')) : ?>
                                    <h3><?php the_sub_field('faq_question_8') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_8')) : ?>
                                    <p><?php the_sub_field('faq_answer_8') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 9 -->
            <?php if( have_rows('faq_item_9')) : ?>
                    
                    <?php while( have_rows('faq_item_9') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_9') || get_sub_field('faq_answer_9') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_9')) : ?>
                                    <h3><?php the_sub_field('faq_question_9') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_9')) : ?>
                                    <p><?php the_sub_field('faq_answer_9') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>

            <!-- FAQ item 10 -->
            <?php if( have_rows('faq_item_10')) : ?>
                    
                    <?php while( have_rows('faq_item_10') ): the_row(); ?>

                        <?php if( get_sub_field('faq_question_10') || get_sub_field('faq_answer_10') ) : ?>

                            <article class="faq-item">

                                <?php if(get_sub_field('faq_question_10')) : ?>
                                    <h3><?php the_sub_field('faq_question_10') ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('faq_answer_10')) : ?>
                                    <p><?php the_sub_field('faq_answer_10') ?></p>
                                <?php endif; ?>
                            
                            </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                
            <?php endif; ?>



            </div>

        <?php endwhile; ?>
    <?php endif; ?>

        <!-- <h2>FAQ</h2>
        <div class="faq-conatiner">
            <article class="text faq-item">
                <p class="faq-question">
                    How long will it take until the logo is ready?
                </p>
                <p class="faq-answer">
                    Creating a logo can be a short and a long process. You should expect at least 2 weeks from start to delivery.
                </p>
            </article>
            <article class="text faq-item">
                <p class="faq-question">
                    I have found a font that I want to use in the logo. How does it work?
                </p>
                <p class="faq-answer">
                    Some fonts are free to use and some require a license for use. If you want to use a font that requires a license, you are responsible for checking that you have the right to use the font. You are also responsible for any costs for fonts and licenses. I will always recommend a free font.
                </p>
            </article>
            <article class="text faq-item">
                <p class="faq-question">
                    How often can I change the logo?
                </p>
                <p class="faq-answer">
                    The package includes three corundums, which means that changes can take place up to three times on the logo. Should you not be satisfied after the last round of corrals and want further changes, this work will be charged according to the hourly rate.
                </p>
            </article>
        </div> -->
    </div>
</section>