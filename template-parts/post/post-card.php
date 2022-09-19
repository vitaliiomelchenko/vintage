<?php

/**
 * Simple functions:
 * 
 * the_title() - get_the_title();
 * the_permalink() - get_the_permalink();
 * the_excerpt() - get_the_excerpt();
 * the_post_thumbnail_url() - get_the_post_thumbnail_url();
 * 
 */

//the_post_thumbnail_url();
$postImgtUrl = get_the_post_thumbnail_url();
$excerpt = get_the_excerpt();
$tags = get_the_tags();


// Necessary part to get author URL
$authorID = get_the_author_meta('ID');
$authorURL = get_author_posts_url($authorID );

$firstName = get_the_author_meta('first_name');
$lastName = get_the_author_meta('last_name');
$fullName = '';

if ($firstName && $lastName) : 
    $authorName = $firstName . ' ' . $lastName;
else :
    $authorName = get_the_author();
endif;



?>


<article>
    <div class="feature-image">


        <?php if ($postImgtUrl) : ?>
            <a href="<?php the_permalink();?>" >
                <img src="<?php echo $postImgtUrl;?>" alt="">
            </a>
        <?php endif; ?>


        <div class="entry-date">
            <div class="month"><?php the_time('M'); ?></div>
            <div class="number"><?php the_time('d'); ?></div>
        </div>
    </div>
    <div class="excerpt">
        <a href="<?php the_permalink();?>" class="post-heading"><?php the_title();?></a>

        <?php if ($excerpt) : echo $excerpt; endif; ?>
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
    <i class="tape"></i>
</article>