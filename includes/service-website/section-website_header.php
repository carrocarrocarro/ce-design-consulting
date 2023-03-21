<?php if( have_rows('website_header')) : ?>
    <?php while( have_rows('website_header') ): the_row(); ?>

    <?php
        $heroImg = get_sub_field('hero_img');  
        if($heroImg) : ?>

        <section 
            class="page-section section-website section-website-header website-hero-img" id="website-page-hero" 
            style="background:url('<?php echo $heroImg["url"]; ?>')"
        >

    <?php else : ?>
    
        <section class="page-section section-website section-website-header" id="website-page-hero">

    <?php endif; ?>
        
        <div class="content website-content">

            <article class="hero-content fade-in text">
            
            <?php if(get_sub_field('header_services')) : ?>
                <h5>
                    <?php the_sub_field('header_services'); ?>
                </h5>
            <?php endif; ?>

            <?php if(get_sub_field('header_h1')) : ?>
                <h1>
                   <?php the_sub_field('header_h1'); ?> 
                </h1>
            <?php endif; ?>

            <?php if(get_sub_field('header_slogan')) : ?>
                <h5>
                    <?php the_sub_field('header_slogan'); ?>
                </h5>
            <?php endif; ?>
            
            </article>
            <?php if(get_sub_field('header_img')) : ?>
            <img 
                src="<?php echo get_sub_field('header_img')['url']; ?>" 
                alt="<?php echo get_sub_field('header_img')['alt']; ?>"
            />
            <?php endif; ?>    
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>
  

        
    
