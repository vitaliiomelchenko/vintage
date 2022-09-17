<?php get_header();

the_post();

$tags = get_the_tags();
$content = get_the_content();
$title = get_the_title();

$firstName = get_the_author_meta('first_name');
$lastName = get_the_author_meta('last_name');
$fullName = '';



if ($firstName && $lastName) : 
    $authorName = $firstName . ' ' . $lastName;
else :
    $authorName = get_the_author();
endif;

?>



<div class="" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <div id="posts-list" class="cf">
        <article>
            
        <?php $fullName;?>
        <div class="feature-image"> <a href="single.html" ><img src="<?php echo get_template_directory_uri();?>/img/dummies/560x300c.jpg" alt=""></a>
            <div class="entry-date">
               
            <div class="month"><?php the_time('M'); ?></div>
            <div class="number"><?php the_time('d'); ?></div>
            </div>
        </div>

        <div class="excerpt">
            <div class="post-heading" ><?php echo $title; ?></div>
            <?php if ($content) : echo $content; endif; ?>
        </div>

        <div class="meta"> 
            <span class="user">
                <a href="#">By <?php echo $authorName; ?>, </a>
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
        <!-- comments php -->

        <?php comments_template(); ?>
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

