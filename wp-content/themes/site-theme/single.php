<?php get_header(); ?>
<div class="container pt-5 pb-5">

<?php if (has_post_thumbnail()) :?>

    <img src="<?php the_post_thumbnail_url('largest'); ?>" class="img-fluid" alt="">
<?php endif; ?>
<?php if (have_posts()):while (have_posts()): the_post();
the_content();
endwhile; endif; ?>


<?php if (is_active_sidebar( 'sidebar-1' )) :?>
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

<?php endif; ?>
</div>
<?php get_footer(); ?>