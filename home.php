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
            <li class="block">
                <h4 class="heading">Sponsors</h4>
                <div class="ads cf"> <a href="#"><img src="<?php echo get_template_directory_uri();?>/img//dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri();?>/img//dummies/mojo.jpeg" alt=""></a> <a href="#"><img src="<?php echo get_template_directory_uri();?>/img//dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri();?>/img//dummies/mojo.jpeg" alt=""></a> </div>
            </li>
            <li class="block">
                <h4 class="heading">Text Widget</h4>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. </li>
            <li class="block">
                <h4 class="heading">Categories</h4>
                <ul>
                <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Print<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Photo and lomo<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Habitant morbi<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Print<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Photo and lomo<span class="post-counter"> (2)</span></a></li>
                <li class="cat-item"><a href="#">Habitant morbi<span class="post-counter"> (2)</span></a></li>
                </ul>
            </li>
            </ul>
        </aside>
        <!-- ENDS sidebar -->
    </div>



<?php get_footer();?>