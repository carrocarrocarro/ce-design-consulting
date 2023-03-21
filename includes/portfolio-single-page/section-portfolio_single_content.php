<section class="page-section section-portfolio-single-header" id="post-<?php the_ID(); ?>">
    <div class="content portfolio-single-content center-content">
        <h1><?php the_title(); ?></h1>

        <?php if( have_rows('project_details')) : ?>
            <?php while( have_rows('project_details') ): the_row();
                $projectType= get_sub_field('project_type_list');
                $link = get_sub_field('project_url');
            ?>

            <article class="project-details">
               
                    <?php if( have_rows('project_type_list')) : ?>
                        <?php while( have_rows('project_type_list') ): the_row();

                        $project1 = get_sub_field('project_type_1');
                        $project2 = get_sub_field('project_type_2');
                        $project3 = get_sub_field('project_type_3');
                    ?>
                    <div class="project-details-types">
                        <p class="project-details-heading">Project type</p>
                        <div class="project-types">
                            <?php if ($project1) : ?>
                                <div class="project-type">
                                    <?php the_sub_field('project_type_1'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($project2) : ?>
                                <div class="project-type">
                                    <?php the_sub_field('project_type_2'); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($project3) : ?>
                                <div class="project-type">
                                    <?php the_sub_field('project_type_3'); ?>
                                </div>
                            <?php endif; ?>        
                        </div>
                    </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if($link) : ?>
                    <div class="project-link">
                        <i class="project-link-icon fa-solid fa-link"></i>
                        <a href="<?php echo $link['url'];?>">
                            <?php echo $link['title']; ?>
                        </a>
                    </div>
                    <?php endif; ?>
              
            </article>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>

<section class="page-section section-portfolio-intro">
    <div class="content portfolio-single-content">

        

        <article class="news-text text">
            <?php if(get_field('introduction')) : ?>
                <h2>Introduction</h2>
                <p>
                    <?php the_field('introduction'); ?>
                </p>
            <?php endif; ?>
            <?php if(get_field('purpose_and_goal')) : ?>
                <h2>Purpose and goal</h2>
                <p>
                    <?php the_field('purpose_and_goal'); ?>
                </p>
            <?php endif; ?>
            <?php if(get_field('my_role')) : ?>
                <h2>My role</h2>
                <p>
                    <?php the_field('my_role'); ?>
                </p>
            <?php endif; ?>
        </article>
    </div>
</section>

<?php 
    $resultImg = get_field('result_image'); 
    if($resultImg) : 
?>
 
            <img 
                src="<?php echo $resultImg['url']; ?>" 
                alt="<?php echo $resultImg['alt']; ?>"
            /> 
   
<?php endif; ?>  

<?php if(get_field('result')) : ?>

    <section class="page-section section-portfolio-result">
        <div class="content portfolio-single-content">
            <article class="text">
            
                    <h2>Result</h2>
                    <p>
                        <?php the_field('result'); ?>
                    </p>
                
            </article>
        </div>
    </section>

<?php endif; ?> 

<?php if (have_rows('project_images')) : ?>

    <section class="page-section section-single-portfolio-images">
        <div class="content single-portfolio-content">
        <div id="project-images">
        <?php while( have_rows('project_images') ): the_row(); ?>

        <?php
            $img1 = get_sub_field('img_1');
            $img2 = get_sub_field('img_2');
            $img3= get_sub_field('img_3');
            $img4 = get_sub_field('img_4');
            $img5 = get_sub_field('img_5');
            $img6= get_sub_field('img_6');
            $img7 = get_sub_field('img_7');
            $img8 = get_sub_field('img_8');
            $img9= get_sub_field('img_9');
            $img10= get_sub_field('img_10');
            $img11= get_sub_field('img_11');
            $img12= get_sub_field('img_12');
        ?>
            <!-- Img 1 -->
            <?php if ($img1) : ?>
              
                <img 
                    src="<?php echo $img1['url']; ?>" 
                    alt="<?php echo $img1['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>
            <!-- Img 2 -->
            <?php if ($img2) : ?>
              
              <img 
                  src="<?php echo $img2['url']; ?>" 
                  alt="<?php echo $img2['alt']; ?>"
                  class="project-img"
              /> 
          
            <?php endif; ?>
            <!-- Img 3 -->
            <?php if ($img3) : ?>
                
                <img 
                    src="<?php echo $img3['url']; ?>" 
                    alt="<?php echo $img3['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>
            <!-- Img 4 -->
            <?php if ($img4) : ?>
                
                <img 
                    src="<?php echo $img4['url']; ?>" 
                    alt="<?php echo $img4['alt']; ?>"
                /> 
            
            <?php endif; ?>
            <!-- Img 5 -->
            <?php if ($img5) : ?>
                
                <img 
                    src="<?php echo $img5['url']; ?>" 
                    alt="<?php echo $img5['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>
            <!-- Img 6 -->
            <?php if ($img6) : ?>
                
                <img 
                    src="<?php echo $img6['url']; ?>" 
                    alt="<?php echo $img6['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>
            <!-- Img 7 -->
            <?php if ($img7) : ?>
                
                <img 
                    src="<?php echo $img7['url']; ?>" 
                    alt="<?php echo $img7['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>
            <!-- Img 8 -->
            <?php if ($img8) : ?>
                
                <img 
                    src="<?php echo $img8['url']; ?>" 
                    alt="<?php echo $img8['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>
            <!-- Img 9 -->
            <?php if ($img9) : ?>
                
                <img 
                    src="<?php echo $img9['url']; ?>" 
                    alt="<?php echo $img9['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>

            <!-- Img 10 -->
            <?php if ($img10) : ?>
                
                <img 
                    src="<?php echo $img10['url']; ?>" 
                    alt="<?php echo $img10['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>

            <!-- Img 11 -->
            <?php if ($img11) : ?>
                
                <img 
                    src="<?php echo $img11['url']; ?>" 
                    alt="<?php echo $img11['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>

            <!-- Img 10 -->
            <?php if ($img12) : ?>
                
                <img 
                    src="<?php echo $img12['url']; ?>" 
                    alt="<?php echo $img12['alt']; ?>"
                    class="project-img"
                /> 
            
            <?php endif; ?>

        <?php endwhile; ?>
        </div>
        </div>
    </section>

<?php endif; ?> 


