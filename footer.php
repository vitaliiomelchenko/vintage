    </div>
</div>
<!-- ENDS MAIN -->
<footer>
  <!-- wrapper -->
  <div class="wrapper cf">
    <!-- social -->
    <div class="sb-holder cf">
      <ul id="social-bar" class="cf">
        <li class="left-corner"><i></i></li>
        <li><a href="#" title="Become a fan"><img src="<?php echo get_template_directory_uri();?>/img/social/Facebook.png" alt=""></a></li>
        <li><a href="#" title="Follow my tweets"><img src="<?php echo get_template_directory_uri();?>/img/social/Twitter.png" alt=""></a></li>
        <li><a href="#" title="Add to the circle"><img src="<?php echo get_template_directory_uri();?>/img/social/Google+.png" alt=""></a></li>
        <li class="right-corner"><i></i></li>
      </ul>
    </div>
    <!-- ENDS social -->
    <!-- widgets -->
    <ul  class="widget-cols cf">
      <?php 

      $args = array(
        'numberposts' => 3,
        'post_type' => 'post',
        'orderby' => 'rand'
      );

      $posts = get_posts( $args );
      if ($posts) : ?>
      
      <li class="first-col">
        <div class="widget-block">
          <h4>RECENT POSTS</h4>
          <?php foreach ($posts as $post) : ?>
            <div class="recent-post cf">
              <a href="<?php the_permalink();?>" class="thumb">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" width="54" height="54" style="object-fit: cover;">
              </a>
              <div class="post-head"> 
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                <span><?php the_time('M d, Y');?></span>
              </div>
          </div>
          <?php endforeach; ?>
        </div>
      </li>
      <?php endif; ?>

      <li class="second-col">
        <div class="widget-block">
          <h4>ABOUT</h4>
          <p>Vintage Template it's completely free this means you don't have to pay anything.</p>
          <p>Placeholder images by twistedfork.me</p>
          <p>Visit our site and find the most beautiful free templates up to date.</p>
        </div>
      </li>
      <li class="third-col">
        <div class="widget-block">
          <div id="tweets" class="footer-col tweet">
            <h4>TWITTER WIDGET</h4>
            <ul class="tweet_list">
              <li class="tweet_first tweet_odd"><span class="tweet_time"><a href="#">about 12 hours ago</a></span> <span class="tweet_text">Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus <a href="#">domain.com</a></span></li>
              <li class="tweet_even"><span class="tweet_time"><a href="#">about a day ago</a></span> <span class="tweet_text">Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus <a href="#">domain.com</a></span></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="fourth-col">
        <div class="widget-block">
          <h4>CATEGORIES</h4>
          <ul>
            <li class="cat-item"><a href="#">Design</a></li>
            <li class="cat-item"><a href="#">Photo</a></li>
            <li class="cat-item"><a href="#">Art</a></li>
            <li class="cat-item"><a href="#">Game</a></li>
            <li class="cat-item"><a href="#">Film</a></li>
            <li class="cat-item"><a href="#">TV</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <!-- ENDS widgets -->
    <div id="footer-bottom">&copy; Copyright 2012 <a href="#">Company Name</a> All Rights Reserved | Website Template By <a target="_blank" href="http://www.luiszuno.com">luiszuno</a></div>
  </div>
  <!-- ENDS wrapper -->
</footer>
<?php wp_footer();?>
</body>
</html>