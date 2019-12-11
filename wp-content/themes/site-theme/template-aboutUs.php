<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>
<div class="container pt-5 pb-5">
   <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    	<h1 class="title"><?php the_title(); ?></h1>
    	<div class="content"><?php the_content(); ?></div>		
   <?php endwhile; endif; ?>   
   <div class="about-us-container">
   <h5 class="about-us-bio">Who are we ...</h5>
   <h5 class="about-us-work">Our work ...</h5>
</div>
</div>
<?php get_footer(); ?>