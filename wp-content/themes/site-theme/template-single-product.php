<?php
/*
Template Name: Products
*/
?>
<?php get_header(); ?>
<div class="container pt-5 pb-5">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>

    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    <?php endif; ?>
    
    <div>
    <ul> 
    <li>
    Price: <?php echo get_post_meta($post->ID, 'Price' , true); ?>
    </li>
    <li>
    Quantity: <?php echo get_post_meta($post->ID, 'Quantity' , true); ?>
    </li>
    <li>
    Weight: <?php echo get_post_meta($post->ID, 'Weight' , true); ?>
    </li>
    </ul>
    </div>

</div>
<?php get_footer(); ?>