<section class="page-section section-articles">
        <div class="front-page-content center-content">
        <article class="text">
            <h2>Want to learn more about the web?</h2>
            <p>If you are curious and want to learn more about the web, you are welcome to read my articles. You can read more about the web, design and tools. There are tips for you as a small business owner and also tips for developers. You can find my three most recent articles here below. For more inspiration, you can also follow me on Instagram.</p>
        </article>
    </div>
</section>
<section class="page-section section-articles">
        <div class="front-page-content  center-content">
            <h3 class="text-center">Articles</h3>
            <div class="articles-container">
                <?php
                    $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3
                    ); 
                    $the_query = new WP_Query($args);

                    if($the_query -> have_posts()) :
                    while($the_query -> have_posts()) :
                        $the_query -> the_post(); 
                ?>

            
                
                    <a href="<?php the_permalink();?>" 
                class="article-card-container-link">
                        <article class="article-card">

                            <?php if(has_post_thumbnail()) : ?>
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                                <?php else : ?>
                                <?php    
                                echo '<img src="' . get_template_directory_uri() . '/assets/img/flowers.JPG" alt="Default img">';

                                ?>
                            <?php endif; ?>

                            <div class="article-card-content">
                                <p class="date"><?php the_date();?></p>
                                <h4 class="h3-small"><?php the_title();?></h4>
                                <span class="article-link btn-secondary">Read more</span>
                            </div>
                        </article>
                    </a>
                
                
                <?php 
                endwhile;
                else : 
                ?>
                <p><?php esc_html_e('There are no news yet!'); ?></p>
                <?php
                endif;
                ?> 
            </div>
            <a 
                class="btn" 
                href="<?php echo get_page_link('34'); ?>"
            >See all articles</a>
        </div>
    </section>