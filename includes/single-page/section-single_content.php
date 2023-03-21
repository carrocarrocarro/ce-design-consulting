<?php $image = get_field('article_header_image'); ?>
<img 
    src="<?php echo $image['url']; ?>" 
    alt="<?php echo $image['alt']; ?>"
/>

<section class="page-section section-article-header">
    <div class="content single-content">
        <article class="news-text text">
            <p class="date"><?php the_date();?></p>
            <h1><?php the_title(); ?></h1>
        </article>
    </div>
</section>       
<section class="page-section section-article-main">
    <div class="content center-content single-content">
        <article class="news-text text">
            <p><?php the_content();?></p>
        </article>
    </div>
</section> 