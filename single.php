<?php get_header(); ?>
<div id="content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<!--post title-->
	<h1 id="post-<?php the_ID(); ?>">
		<a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h1>		
		
	<div class="post-meta-top">
		<div class="auth"><span>Posted by <strong><?php the_author_posts_link(); ?></strong> | </span></div>
		<div class="date"><span><?php the_time('F j, Y'); ?></span></div>
	</div>
			
	<div class="clearboth"></div>		
	<!--content with more link-->
	<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
	
	<!--post paging-->
	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

	<!--Post Meta-->
	<div class="post-bottom clearfix">
	<!--<?php if (function_exists('the_tags')) { ?><strong>Tags: </strong><?php the_tags('', ', ', ''); ?><br /><?php } ?>-->
	<div class="cat"><span><?php the_category(', ') ?></span></div>
	</div>
	
	
		
	<!--include comments template-->
	<?php comments_template(); ?>
		
	<!--do not delete-->
	<?php endwhile; else: ?>
	
	Sorry, no posts matched your criteria.

	<!--do not delete-->
	<?php endif; ?>
	
	
<!--single.php end-->
</div>

<!--include sidebar-->
<?php get_sidebar();?>
<!--include footer-->
<?php get_footer(); ?>