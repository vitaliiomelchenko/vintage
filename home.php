<?php get_header();?>

    <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">


        <?php if(have_posts()) : ?>
        <!-- posts list -->
        <div id="posts-list" class="cf">

            <?php while(have_posts()) : the_post(); ?>
            

                <?php get_template_part('template-parts/post/post-card');?>


            <?php endwhile; ?>

            
        

            <!-- page-navigation -->
            <div class="page-navigation cf">

                <div class="nav-next"><?php previous_posts_link( 'Older Entries'); ?></div>

                <div class="nav-previous"><?php next_posts_link( 'Newer Entries' ); ?></div>
            </div>
            <!--ENDS page-navigation -->

        </div>
        <?php else : ?>

            <div id="posts-list" class="cf">

                <div class="page-content">
                    <!-- entry-content -->
                    <div class="entry-content cf">

                        <h2 class="heading">nothing was found.</h2>
                    </div>

                </div>

            </div>

        <?php endif; ?>
        <!-- ENDS posts list -->
        <!-- sidebar -->
        <aside id="sidebar">
            <ul>
            <?php 

            $sponsors = get_field('sponsors_list', get_option('page_for_posts'));

            if ($sponsors) : ?>


            <li class="block">
                <h4 class="heading">Sponsors</h4>
                <div class="ads cf">

                <?php 
                $i = 0;
                foreach($sponsors as $sponsor) : 
                    $i++;
                    $image = $sponsor['sponsor_image'];
                    $url = $sponsor['sponsor_url'];
                    
                    if ($i % 2 == 0) : $class = "last"; else : $class = ""; endif; 
                    //$class = ($i % 2 == 0) ? "last" : $class = ""; 
                    ?>
                     <a class="<?php echo $class;?>" href="<?php echo $url;?> ">
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </a>

                <?php endforeach; ?> 
            </li>

            <?php endif;?>

            <!-- Start shorts -->

            <?php 

            $textWidgetTitle = get_field('widget_title', 'option');
            $textWidgeContent= get_field('content_widget','option');
 
            if ($textWidgeContent) : ?>

            <li class="block">
        
                <?php if ($textWidgetTitle) : ?>

                    <h4 class="heading"><?php echo $textWidgetTitle; ?></h4>

                <?php endif; ?>
                
                <?php echo $textWidgeContent;?>
            </li>

            <?php endif; ?>


            <!-- End shorts -->

            
    
            <?php 

            $args = array(
                'taxonomy' => 'category',
                'hide_empty' => true,
                'exclude' => array('1')
            );

            $terms = get_categories($args);
            //var_dump($terms);
            if ($terms) : ?>
            <li class="block">
                <h4 class="heading">Categories</h4>
                <ul>
                    <?php foreach ($terms as $term) : 
                        $termid = $term->term_id; ?>
                        <li class="cat-item">
                            <a href="<?php echo get_term_link($term) ;?>">
                                <?php echo $term->name;?>
                                <span class="post-counter"> (<?php echo $term->count;?>)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php endif; ?>
            
        </aside>
        <!-- ENDS sidebar -->
    </div>



<?php get_footer();?>