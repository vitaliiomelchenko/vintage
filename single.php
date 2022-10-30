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

        <?php comments_template();?>
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

        <?php 

        $textWidgetTitle = get_field('text_widget', get_option('page_for_posts'));
        $textWidgeContent= get_field('text_widget_content',get_option('page_for_posts'));

        
        if ($textWidgeContent) : 
        ?>

        <li class="block">
            <?php if ($textWidgetTitle) : ?>
                <h4 class="heading"><?php echo $textWidgetTitle; ?></h4>
            <?php endif; ?>
            
            <?php echo $textWidgeContent;?>
        </li>

        <?php endif; ?>
        
        <?php 
        
        $terms = get_terms( array(
            'taxonomy' => 'category',
            'hide_empty' => true,
        ));
        
        
        if ($terms) : ?>

            <li class="block">
                <h4 class="heading">Categories</h4>
                <ul>

                    <?php foreach ($terms as $term) : 
                        $name = $term->name;
                        $term_id = $term->term_id;
                        $count = $term->count;?>

                        <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
                                            
                    <?php endforeach; ?>
                </ul>
            </li>
            
        <?php endif; ?>

        </ul>
    </aside>
</div>


<?php get_footer();?>

