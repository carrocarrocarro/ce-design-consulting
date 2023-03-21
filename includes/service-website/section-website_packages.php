<?php if( have_rows('web_packages')) : ?>
    <?php while( have_rows('web_packages') ): the_row(); ?>

    <section class="page-section section-web-packages section-website">
         <div class="content website-content">

            <div class="web-packages">
                <?php if( have_rows('small')) : ?>
                    <?php while( have_rows('small') ): the_row(); ?>
                    
                    <article class="text web-package">

                        <?php if(get_sub_field('project_title')) : ?>
                            <h3>
                                <?php the_sub_field('project_title'); ?> 
                            </h3>
                        <?php endif; ?>

                        <?php if(get_sub_field('project_slogan')) : ?>
                            <p class="project-slogan">
                                <?php the_sub_field('project_slogan'); ?> 
                            </p>
                        <?php endif; ?>

                        <?php if( have_rows('project_list')) : ?>
                            <?php while( have_rows('project_list') ): the_row(); ?>
                                <ul class="project-list">

                                    <?php if(get_sub_field('project_item_1')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_1'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_2')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_2'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_3')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_3'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_3')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_3'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_4')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_4'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_5')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_5'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_6')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_6'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_7')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_7'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_8')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_8'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_9')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_9'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_10')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_10'); ?> 
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php 
                            if(get_sub_field('project_link')) :
                            $link = get_sub_field('project_link');
                            $link_title = $link['title'];
                            $link_url = $link['url'];  
                            
                                
                        ?>
                            <a 
                                href="<?php echo esc_url($link_url); ?>"
                                class="btn order-btn"
                            >
                            <?php echo esc_html($link_title); ?>
                            </a>
                        <?php endif; ?>

                        
                    </article>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('smart')) : ?>
                    <?php while( have_rows('smart') ): the_row(); ?>
                    
                    <article class="text web-package">

                        <?php if(get_sub_field('project_title')) : ?>
                            <h3>
                                <?php the_sub_field('project_title'); ?> 
                            </h3>
                        <?php endif; ?>

                        <?php if(get_sub_field('project_slogan')) : ?>
                            <p class="project-slogan">
                                <?php the_sub_field('project_slogan'); ?> 
                            </p>
                        <?php endif; ?>

                        <?php if( have_rows('project_list')) : ?>
                            <?php while( have_rows('project_list') ): the_row(); ?>
                                <ul class="project-list">

                                    <?php if(get_sub_field('project_item_1')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_1'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_2')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_2'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_3')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_3'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_3')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_3'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_4')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_4'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_5')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_5'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_6')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_6'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_7')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_7'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_8')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_8'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_9')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_9'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_10')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_10'); ?> 
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php
                            if(get_sub_field('project_link_2')) : 
                            $link2 = get_sub_field('project_link_2');
                            $link2_title = $link2['title'];
                            $link2_url = $link2['url'];     
                        ?>
                            <a 
                                href="<?php echo esc_url($link2_url); ?>"
                                class="btn order-btn"
                            >
                            <?php echo esc_html($link2_title); ?>
                            </a>
                        <?php endif; ?>

                        
                    </article>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('luxury')) : ?>
                    <?php while( have_rows('luxury') ): the_row(); ?>
                    
                    <article class="text web-package">

                        <?php if(get_sub_field('project_title')) : ?>
                            <h3>
                                <?php the_sub_field('project_title'); ?> 
                            </h3>
                        <?php endif; ?>

                        <?php if(get_sub_field('project_slogan')) : ?>
                            <p class="project-slogan">
                                <?php the_sub_field('project_slogan'); ?> 
                            </p>
                        <?php endif; ?>

                        <?php if( have_rows('project_list')) : ?>
                            <?php while( have_rows('project_list') ): the_row(); ?>
                                <ul class="project-list">

                                    <?php if(get_sub_field('project_item_1')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_1'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_2')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_2'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_3')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_3'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_3')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_3'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_4')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_4'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_5')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_5'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_6')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_6'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_7')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_7'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_8')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_8'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_9')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_9'); ?> 
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_sub_field('project_item_10')) : ?>
                                        <li>
                                            <?php the_sub_field('project_item_10'); ?> 
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php
                            if(get_sub_field('project_link_2')) : 
                            $link2 = get_sub_field('project_link_2');
                            $link2_title = $link2['title'];
                            $link2_url = $link2['url'];     
                        ?>
                            <a 
                                href="<?php echo esc_url($link2_url); ?>"
                                class="btn order-btn"
                            >
                            <?php echo esc_html($link2_title); ?>
                            </a>
                        <?php endif; ?>

                        
                    </article>

                    <?php endwhile; ?>
                <?php endif; ?>
           
            </div>

        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>