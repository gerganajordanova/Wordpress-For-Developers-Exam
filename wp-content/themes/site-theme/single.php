 <?php get_header(); ?>
<div class="container pt-5 pb-5">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>

<a href="<?php echo get_post_type_archive_link('post'); ?>">Products</a>

    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    <?php endif; ?>
    

</div>
<?php get_footer(); ?>