<section class="page-section fade-in section-portfolio-nav">
    <div class="content portfolio-content">

        <?php
            $portfolio_categories = get_terms( 'portfolio_category' );
        ?>
        <ul class="portfolio-categories-nav">
            <li>
                <a 
                    href="<?php echo esc_url( get_post_type_archive_link( 'portfolio' ) ); ?>" 
                    class="<?php echo ( ! isset( $_GET['portfolio_category'] ) ) ? 'portfolio-item-active' : ''; ?>"
                >
                All
                </a>
            </li>
            <?php foreach ( $portfolio_categories as $category ) : ?>
                <li>
                    <a 
                        href="<?php echo esc_url( add_query_arg( 'portfolio_category', $category->slug, get_post_type_archive_link( 'portfolio' ) ) ); ?>" 
                        class="<?php echo ( isset( $_GET['portfolio_category'] ) && $_GET['portfolio_category'] === $category->slug ) ? 'portfolio-item-active' : ''; ?>"
                    >
                        <?php echo esc_html( $category->name ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <button 
            class="btn text-center" 
            id="category-btn-portfolio">
            Categories
        </button>
    </div>
</section>