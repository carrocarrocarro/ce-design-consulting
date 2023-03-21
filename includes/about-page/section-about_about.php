<section class="page-section section-about">
    <div class="content about-content">
        <article class="text">
            
            <h1>About</h1>
            
            <?php $aboutText = get_field('about_text'); ?>
           
           <?php if($aboutText) : 
                the_field('about_text');
                
            ?>

            <?php else : ?>

            <p>About me</p>
            
            <?php endif; ?>

            <div class="quote-container">
                <i class="fa-solid fa-quote-left quote-icon"></i>
                
                <p class="quote-text text">The most amazing thing about my job is that I get to help incredible people make their dreams come true.</p>

                <i class="fa-solid fa-quote-right quote-icon"></i>
            </div>
            
        </article>
            <?php $profileImage = get_field('profile_image'); ?>
            <?php if($profileImage) : ?>
            <img 
                src="<?php echo $profileImage['url']; ?>" 
                alt="<?php echo $profileImage['alt']; ?>"
            />
            <?php endif ?>
    </div>
</section>