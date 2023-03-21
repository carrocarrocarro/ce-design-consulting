<aside class="archives-container">
      <button class="close-cate">
          <span class="close-btn"></span>
      </button>
      <div class="categories-container">
          <p class="archives-container-heading">Categories</p>
            <?php
                $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => false,
                    'hierarchical' => true,
                    'exclude' => get_cat_ID('uncategorized'),
                );

                $categories = get_categories($args);

                echo '<ul>';

                foreach ($categories as $category) {
                    $cat_name = $category->name;
                    $cat_link = get_category_link($category->term_id);
                    $cat_children = get_categories(array('parent' => $category->term_id));
                    echo "<li><a href='$cat_link'>$cat_name</a>";

                    if (!empty($cat_children)) {
                        echo '<ul>';

                        foreach ($cat_children as $child) {
                            $child_name = $child->name;
                            $child_link = get_category_link($child->term_id);
                            echo "<li><a href='$child_link'>$child_name</a></li>";
                        }

                        echo '</ul>';
                    }

                    echo '</li>';
                }

                echo '</ul>';
            ?>
      </div>
      <div class="archives-year-container">
          <p class="archives-container-heading">Archives</p>
            <?php
              
                $years = array();
                $posts = get_posts(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                ));
                
                foreach ($posts as $post) {
                    $year = get_the_date('Y', $post);
                    if (!in_array($year, $years)) {
                        $years[] = $year;
                    }
                }
                
                echo '<ul class="year">';
                
                foreach ($years as $year) {
                    echo "<li>$year<span class='arrow-down arrow'>&#9662;</span><span class='arrow-up arrow'>&#9652;</span><ul class='month'>";
                    wp_get_archives(array(
                        'type' => 'monthly',
                        'echo' => 1,
                        'show_post_count' => false,
                        'year' => $year,
                        'date_format' => 'F ',
                    ));
                    echo "</ul></li>";
                }
                
                echo '</ul>';
            
            ?> 
      </div>
  </aside>