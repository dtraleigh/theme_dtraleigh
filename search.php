<?php get_header(); ?>
<div id="content">
	<!--the loop-->
	<?php if (have_posts()) : ?>

	<h1 class="btmspace">Search Results</h1>
		
	<!--loop article begin-->
	<?php while (have_posts()) : the_post(); ?>
	<!--post title as a link-->
	<div class="comm"><span><?php comments_popup_link('0', '1', '%'); ?></span></div>
	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				
	<!--Post Meta-->
	<div class="post-meta-top">
	<div class="auth"><span>Posted by <strong><?php the_author_posts_link(); ?></strong></span></div>
	<div class="date"><span><?php the_time('F j, Y'); ?></span></div>
	
	</div>
<div class="clearfix"></div>
	<!--optional excerpt or automatic excerpt of the post-->
	<?php the_excerpt(); ?>

	<!--Post Meta-->
	<div class="post-bottom">
	<!--<?php if (function_exists('the_tags')) { ?><strong>Tags: </strong><?php the_tags('', ', ', ''); ?><br /><?php } ?>-->
	<div class="cat"><span><?php the_category(', ') ?></span></div>
	
	<div class="clearfix"></div>
	</div>
		
	<!--one post end-->
	<?php endwhile; ?>

    <!-- Previous/Next page navigation -->
    <div class="page-nav">
	    <div class="nav-previous"><?php previous_posts_link('Previous Page') ?></div>
	    <div class="nav-next"><?php next_posts_link('Next Page') ?></div>
    </div>
	
	<!-- do not delete-->
	<?php else : ?>

	Not Found

	<!--do not delete-->
	<?php endif; ?>
		
	
<!--search.php end-->

</div>
<!--include sidebar-->
<?php get_sidebar();?>

<!--include footer-->
<?php get_footer(); ?>