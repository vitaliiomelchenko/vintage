<!-- Подключаем header -->
<?php get_header(); ?>

    <?php if (have_rows('slider')) : ?>

    <!-- SLIDER -->
    <div class="slider-wrapper theme-default theme-project theme-home">
      <div class="ribbon"></div>
      <div id="slider" class="nivoSlider"> 

        <?php while(have_rows('slider')) : the_row(); 

          $img = get_sub_field('image');
          $link = get_sub_field('link');
          


          //var_dump($link);


          if ($img && $link) :
            $target = $link['target'] ? $link['target'] : "_self"; ?>

            <a href="<?php echo $link['url'];?>" target="<?php echo $target;?>">
              <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
            </a> 

          <?php endif; ?>

        <?php endwhile; ?>

      </div>
    </div>
    
    <!-- ENDS SLIDER -->
    <?php endif; ?>
    <!-- headline -->
    <div class="headline"> Portfolio </div>
    <!-- ENDS headline -->

    <?php 

    $args = array(
      'post_type'       => 'portfolio',
      'posts_per_page'  => '6'
    );

    $query = new WP_Query( $args );


    // The Loop
    if ( $query->have_posts() ) : ?>
       <!-- Feature -->
      <ul id="filter-container-feature" class="feature">

        <?php while ( $query->have_posts() ) :
          $query->the_post(); ?>

          <li> <a href="single.html" class="thumb"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
            </a>
            <div class="caption">Lorem ipsum dolor amet</div>
          </li>

        <?php endwhile;  wp_reset_postdata(); ?>

      </ul>

      <?php else : ?>

        <div id="posts-list" class="cf">

                <div class="page-content">
                    <!-- entry-content -->
                    <div class="entry-content cf">

                        <h2 class="heading">nothing was found.</h2>
                    </div>

                </div>

            </div>
      <!-- ENDS feature -->
      <?php endif; ?>


   

    

    


<!-- Подключаем футер -->
<?php get_footer(); ?>