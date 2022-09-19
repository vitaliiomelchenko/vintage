<?php get_header();
the_post();

$tags = get_the_tags();
$content = get_the_content();
$title = get_the_title();

$imgURL = get_the_post_thumbnail_url();

$firstName = get_the_author_meta('first_name');
$lastName = get_the_author_meta('last_name');
$fullName = '';

// Necessary part to get author URL
$authorID = get_the_author_meta('ID');
$authorURL = get_author_posts_url($authorID );

// echo 'authorID' . ' ' . $authorID . '</br>';
// echo 'authorURL' . ' ' . $authorURL . '</br>';

if ($firstName && $lastName) : 
    $authorName = $firstName . ' ' . $lastName;
else :
    $authorName = get_the_author();
endif;

?>



<div class="" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <div id="posts-list" class="cf">
      <article>


        <div class="feature-image">

            <?php if ($imgURL) : ?>

                <img src="<?php echo $imgURL;?>" alt="">

            <?php endif;?>

            <div class="entry-date">
                <div class="month"><?php the_time('M'); ?></div>
                <div class="number"><?php the_time('d'); ?></div>
            </div>

        </div>


        <div class="excerpt">
            <div class="post-heading"><?php echo $title; ?></div>
            <?php if ($content) : echo $content; endif; ?>
        </div>

        <div class="meta"> 
            <span class="user">
                <a href="<?php echo $authorURL;?>">By <?php echo $authorName; ?>,</a>
            </span>

            
            <span class="comments"><?php echo get_comments_number(); ?> comments</span>

            <?php if ($tags) : ?>

                <span class="tags">
                    <?php foreach($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name;?></a>,
                    <?php endforeach; ?>
                </span>
            <?php endif;?>
        </div>
        <i class="tape"></i> </article>
      <!-- comments list -->
      <div id="comments-wrap">
        <h4 class="heading">5 Comments</h4>
        <ol class="commentlist">
          <li class="comment even thread-even depth-1" id="li-comment-1">
            <div id="comment-1" class="comment-body cf"> <img alt="" src="img/gravatar.jpg" class="avatar avatar-35 photo" height="35" width="35">
              <div class="comment-author vcard">Jhon</div>
              <div class="comment-meta commentmetadata"> <span class="comment-date">3 days ago </span> <span class="comment-reply-link-wrap"><a class="comment-reply-link" href="#respond">Reply</a></span> </div>
              <div class="comment-inner">
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
              </div>
            </div>
            <!-- child -->
            <ul class='children'>
              <li class="comment even alt depth-2" id="li-comment-2-1">
                <div id="comment-2" class="comment-body cf"> <img alt="" src="img/gravatar.jpg" class="avatar avatar-35 photo" height="35" width="35">
                  <div class="comment-author vcard">Jhon</div>
                  <div class="comment-meta commentmetadata"> <span class="comment-date">1 hour ago </span> <span class="comment-reply-link-wrap"><a class="comment-reply-link" href="#respond">Reply</a></span> </div>
                  <div class="comment-inner">
                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                  </div>
                </div>
              </li>
              <li class="comment odd alt depth-2" id="li-comment-2-2">
                <div id="comment-3" class="comment-body cf"> <img alt="" src="img/gravatar.jpg" class="avatar avatar-35 photo" height="35" width="35">
                  <div class="comment-author vcard">Jhon</div>
                  <div class="comment-meta commentmetadata"> <span class="comment-date">1 hour ago </span> <span class="comment-reply-link-wrap"><a class="comment-reply-link" href="#respond">Reply</a></span> </div>
                  <div class="comment-inner">
                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
                  </div>
                </div>
              </li>
            </ul>
            <!-- ENDS child -->
          </li>
          <li class="comment odd thread-even depth-1" id="li-comment-3">
            <div id="comment-4" class="comment-body cf"> <img alt="" src="img/gravatar.jpg" class="avatar avatar-35 photo" height="35" width="35">
              <div class="comment-author vcard">Jhon</div>
              <div class="comment-meta commentmetadata"> <span class="comment-date">3 days ago </span> <span class="comment-reply-link-wrap"><a class="comment-reply-link" href="#respond">Reply</a></span> </div>
              <div class="comment-inner">
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
              </div>
            </div>
          </li>
          <li class="comment even thread-even depth-1" id="li-comment-4">
            <div id="comment-5" class="comment-body cf"> <img alt="" src="img/gravatar.jpg" class="avatar avatar-35 photo" height="35" width="35">
              <div class="comment-author vcard">Jhon</div>
              <div class="comment-meta commentmetadata"> <span class="comment-date">3 days ago </span> <span class="comment-reply-link-wrap"><a class="comment-reply-link" href="#respond">Reply</a></span> </div>
              <div class="comment-inner">
                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
              </div>
            </div>
          </li>
        </ol>
      </div>
      <!-- ENDS comments list -->
      <!-- Respond -->
      <div id="respond">
        <h4 class="heading">Leave a Reply <small><a id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h4>
        <form action="#" method="post" id="commentform">
          <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
          <p class="comment-form-author">
            <label for="author">Name<span class="required">*</span></label>
            <input id="author" name="author" type="text" value="" size="30" aria-required="true">
          </p>
          <p class="comment-form-email">
            <label for="email">Email<span class="required">*</span></label>
            <input id="email" name="email" type="text" value="" size="30" aria-required="true">
          </p>
          <p class="comment-form-url">
            <label for="url">Website</label>
            <input id="url" name="url" type="text" value="" size="30">
          </p>
          <p class="comment-form-comment">
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
          </p>
          <!-- allowed tags -->
          <p class="form-allowed-tags">You may use these <abbr>HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
          <!-- ENDS allowed tags -->
          <p class="form-submit">
            <input name="submit" type="submit" id="submit" value="Post Comment">
          </p>
        </form>
      </div>
      <!-- ENDS Respond -->
    </div>
    <!-- ENDS posts list -->
    <!-- sidebar -->
    <aside id="sidebar">
        <ul>
        <li class="block">
            <h4 class="heading">Sponsors</h4>
            <div class="ads cf"> <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri();?>/img/dummies/mojo.jpeg" alt=""></a> <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri();?>/img/dummies/mojo.jpeg" alt=""></a> </div>
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
</div>


<?php get_footer();?>

