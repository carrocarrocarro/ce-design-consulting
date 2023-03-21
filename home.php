<?php get_template_part('/templates/header'); ?>

<div class="page-wrapper" id="articles-page">
    <section class="page-section section-articles-page-header">
        <div class="content articles-content center-content">

            <article class="text">
                <h1>Articles</h1>
                <h5>Thoughts and words from me about entrepreneurship, brand, web and design. Get inspired, learn and share with others.</h5>
            </article>
            <button href="#" class="btn text-center" id="category-btn">Categories</button>

        </div>
    </section>
    <section class="page-section">
        <div class="content articles-content center-content">
            <div class="articles-page-container">

            <?php get_template_part('includes/articles-page/section','articles') ?>
                
            </div>    
        </div>
    </section>

    <?php get_template_part('includes/articles-page/section','articles_nav') ?>
  
  <div class="overlay"></div>
</div>
<?php get_template_part('/templates/footer'); ?>