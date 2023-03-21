<?php get_template_part('/templates/header'); ?>

<div class="page-wrapper" id="articles-page">
    <section class="page-section section-articles-page-header">
        <div class="content articles-content center-content">

            <article class="text">
                <h1 class="">Articles</h1>
                
                <ul class="breadcrumb-nav">
                    <li class="prevoius-location">
                        <a 
                            href="<?php echo get_post_type_archive_link( get_post_type() ); ?>"
                        >Articles</a>
                    </li>
                    <li class="current-location">
                        <?php single_term_title(); ?>
                    </li>
                </ul>
            </article>
            <button class="btn text-center" id="category-btn">Categories</button>

        </div>
    </section>
    <section class="page-section">
        <div class="content articles-content center-content">
            <div class="articles-page-container">

            <?php get_template_part('includes/archive-page/section','archive') ?>
                
            </div>    
        </div>
    </section>

    <?php get_template_part('includes/articles-page/section','articles_nav') ?>
  
  <div class="overlay"></div>
</div>
<?php get_template_part('/templates/footer'); ?>