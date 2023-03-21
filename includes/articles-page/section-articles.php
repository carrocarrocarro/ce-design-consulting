<?php if(have_posts()) :while(have_posts()) : the_post(); ?>
                
    <?php                
        $articleCardClass = 'article-card-container';    
        
        if( $wp_query->current_post == 0 && !is_paged() ) {
            $articleCardClass = 'article-card-container first-post'; 
        }        
    ?>

    <div class="<?php echo $articleCardClass; ?>">
        <a href="<?php the_permalink();?>" class="article-card-container-link">
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

                    <p class="date">
                        <?php the_date();?>
                    </p>

                    <h4 class="h3-small">
                        <?php the_title();?>
                    </h4>
                    
                    <?php 
                        if( $wp_query->current_post == 0 && !is_paged() ):  
                    ?>
                        
                    <?php the_excerpt(); ?>
                   
                    <?php endif; ?> 
                            
                    <a 
                        href="<?php the_permalink();?>" class="article-link btn-secondary"
                    >
                        Read more
                    </a>

                </div>
            </article>
        </a>
    </div>
            
<?php endwhile; else : ?>
     <p>
        <?php esc_html_e('There are no articles yet!'); ?>
    </p>
<?php endif; ?> 