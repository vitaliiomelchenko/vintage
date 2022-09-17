

<div id="comments-wrap">

    <?php if (get_comments_number() > 0) : ?>
        <h4 class="heading"><?php echo get_comments_number() . ' Comments'; ?></h4>
    <?php else : ?>
        <h4 class="heading">No Comments yet</h4>
    <?php endif; ?>


    <?php if (get_comments_number() > 0) : ?>
        <ol class="commentlist">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                    'callback'    => 'vintage_comments'
                ) );
            ?>
        </ol><!-- .comment-list -->
    <?php endif; ?>

    <?php comment_form();?>
</div>

