<?php

/**
 * Template name: Contact
 */

get_header();

$location = get_field('location');
$content = get_field('content');
?>


<div class="page-content">

    <h2 class="heading"><?php the_title();?></h2>

    <?php 
    if( $location ): ?>
        <div class="acf-map" data-zoom="16">
            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
        </div>
    <?php endif; ?>

    <!-- START GOOGLE MAPS -->
    <?php if( have_rows('locations_2') ): ?>
        
        <div class="acf-map" data-zoom="16">
            <?php while ( have_rows('locations') ) : the_row(); 

                // Load sub field values.
                $location = get_sub_field('location');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                ?>
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
                    <h3><?php echo esc_html( $title ); ?></h3>
                    <p><em><?php echo esc_html( $location['address'] ); ?></em></p>
                    <p><?php echo esc_html( $description ); ?></p>
                </div>
        <?php endwhile; ?>
        </div>

        
    <?php endif; ?>

    <!-- ENDS GOOGLE MAPS -->



    <?php if ($content) : ?>

        <?php echo $content; ?>

    <?php endif; ?>


    
    <h2 class="heading">Contact Form</h2>

    <!-- form -->
    <div id="contactForm" class="">
        <?php echo do_shortcode('[contact-form-7 id="128" title="Contact form"]') ; ?>
    </div>
    
    <!-- ENDS form -->
    <div class="c-1"></div>
    <div class="c-2"></div>
    <div class="c-3"></div>
    <div class="c-4"></div>
</div>


<?php get_footer();?>