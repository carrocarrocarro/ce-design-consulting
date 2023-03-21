
<?php $portfolioImg = get_field('portfolio_header_image'); ?>

<?php if($portfolioImg) : ?>
    <img 
        src="<?php echo $portfolioImg['url']; ?>" 
        alt="<?php echo $portfolioImg['alt']; ?>"
    />
<?php endif ?>
