<section class="page-section section-portfolio-single-nav">
    <div class="content portfolio-single-content">
        <div class="portfolio-single-nav">
            <div class="next-prev">
                <?php 
                    previous_post_link(); 
                    next_post_link();
                ?>
            </div>
            <a href="<?php echo get_post_type_archive_link('portfolio'); ?>">
            Back to all projects</a>
        </div>
    </div>    
</section>