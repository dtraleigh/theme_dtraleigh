<?php get_header(); ?>
<div id="content">

	<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>
	
	<!--post title link-->
	<h3 class="h1" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		
	<!--Post Meta-->
	<div class="post-meta-top">
		<div class="auth"><span>Posted by <strong><?php the_author_posts_link(); ?></strong> | </span></div>
		<div class="date"><span><?php the_time('F j, Y'); ?> | </span></div>
		<div class="comm"><span><strong><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></strong></span></div>
	</div>
	<div class="clearboth"></div>
	<!--read more-->
	<?php the_content('<br />Read the rest of this entry &raquo;'); ?>
	
	<!--Post Meta-->
	<div class="post-bottom">
	<!--<?php if (function_exists('the_tags')) { ?><strong>Tags: </strong><?php the_tags('', ', ', ''); ?><br /><?php } ?>-->
		<div class="cat"><span><?php the_category(', ') ?></span></div>
	</div>
	
	<?php endwhile; ?>

    <!-- Prev/Next page navigation -->
    <div id="page-nav">
	    <p><?php previous_posts_link('Previous Page') ?> | <?php next_posts_link('Next Page') ?></p>
    </div>

	<?php else : ?>

	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
	<p>If you would like to search for something, please use the search bar at the top-right side of your screen.</p>

	<?php endif; ?>

</div>
<!--include sidebar-->
<?php get_sidebar(); ?>

<!--include footer-->
<?php get_footer(); ?>