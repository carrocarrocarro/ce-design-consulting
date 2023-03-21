<section class="page-section section-portfolio fade-in">
    <div class="content portfolio-content">
        
       <div class="portfolio">

            <?php
            // Define the query arguments for portfolio posts
            $portfolio_query_args = array(
                'post_type'      => 'portfolio',
                'posts_per_page' => 12,
            );

            // If a portfolio category is selected, add the category to the query arguments
            if ( isset( $_GET['portfolio_category'] ) ) {
                $portfolio_query_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'portfolio_category',
                        'field'    => 'slug',
                        'terms'    => sanitize_text_field( $_GET['portfolio_category'] ),
                    ),
                );
            }

            // Run the query
            $portfolio_query = new WP_Query( $portfolio_query_args );

            // Start the loop
            if ( $portfolio_query->have_posts() ) :
                while ( $portfolio_query->have_posts() ) :
                    $portfolio_query->the_post();
                    // Get the portfolio data
                    $portfolio_data = get_post_meta( get_the_ID(), 'portfolio_data', true );
            ?>
            
            <?php $portfolioImg = get_field('portfolio_thumbnail'); ?>
            <a  
                href="<?php the_permalink(); ?>"
                class="portfolio-item" 
                style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"
            >
                <div class="portfolio-item-info">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </div>

                <div class="overlay-item"></div>
                <!-- <?php /* the_post_thumbnail( 'thumbnail' ) ; */  ?> -->
            </a>
            <?php 
            endwhile;
            wp_reset_postdata();
                else : 
            ?>
            <p>
                <?php esc_html_e('There are no projects yet!'); ?>
            </p>
            <?php
                endif;
                
            ?> 
        </div> 
    </div>    
</section>