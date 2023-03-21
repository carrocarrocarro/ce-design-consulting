<!-- If logotype page -->
<?php if (is_page_template('services/logotype.php')) : ?>
    <section class="page-section section-service section-service-deliverables section-service-deliverables--logotype">
        <div class="content service-content">

<!-- If graphic prfoile page -->
<?php elseif (is_page_template('services/graphic-profile.php')) : ?>
    <section class="page-section section-service section-service-deliverables section-service-deliverables--graphic-profile">
        <div class="content service-content">

<!-- Else -->
<?php else : ?>
    <section class="page-section section-service section-service-deliverables">
        <div class="content service-content">

<?php endif; ?>

    <?php if(get_field('deliverable_image')) : ?>
        <img 
            src="<?php echo get_field('deliverable_image')['url']; ?>" 
            alt="<?php echo get_field('deliverable_image')['alt']; ?>"
        />
    <?php endif; ?>

        <article class="text">
            <?php if(get_field('deliverables_list_heading')) : ?>
                <h3><?php the_field('deliverables_list_heading') ?></h3>
            <?php endif; ?>
            
            <?php if( have_rows('deliverables_list')) : ?>
                <?php while( have_rows('deliverables_list') ): the_row(); ?>
            <ul>
                <?php if (get_sub_field('deliverable_item_1')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_1'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_2')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_2'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_3')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_3'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_4')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_4'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_5')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_5'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_6')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_6'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_7')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_7'); ?>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field('deliverable_item_8')) : ?>
                    <li>
                        <?php the_sub_field('deliverable_item_8'); ?>
                    </li>
                <?php endif; ?>
            </ul>

            <?php endwhile; ?>
        <?php endif; ?>

        </article>


    
    </div>
</section>     