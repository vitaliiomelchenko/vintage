<?php

/**
 * Template name: Contact
 */

get_header(); 

$content = get_field('content'); ?>


<div class="page-content">

    <h2 class="heading"><?php the_title();?></h2>

    <?php if( have_rows('locations') ): ?>
        <div class="acf-map" data-zoom="8">
            <?php while ( have_rows('locations') ) : the_row(); 

                // Load sub field values.
                $location = get_sub_field('location');
                ?>
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>
    
    <?php if ($content) : ?>

        <?php echo $content; ?>

    <?php endif; ?>

    <h2 class="heading">Contact Form</h2>
    <!-- form -->

    <?php 

    $form = get_field('form');
    if ($form) : ?>

    <div id="contactForm">
        <?php echo $form; ?>
    </div>

    <?php endif; ?>

    <!-- ENDS form -->
    <div class="c-1"></div>
    <div class="c-2"></div>
    <div class="c-3"></div>
    <div class="c-4"></div>
</div>


<?php get_footer();?>