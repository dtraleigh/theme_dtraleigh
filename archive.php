<?php get_header(); ?>
<div id="content">
	<!--the loop-->
	<?php if (have_posts()) : ?>

	<h1 class="btmspace">
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>				
	<?php echo single_cat_title(); ?>
	
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	Archive for <?php the_time('F jS, Y'); ?>
		
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	Archive for <?php the_time('F, Y'); ?>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	Archive for <?php the_time('Y'); ?>
		
	<?php /* If this is a search */ } elseif (is_search()) { ?>
	Search Results
		
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	Author Archive

	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	Blog Archives

	<!--do not delete-->
	<?php } ?>
	</h1>
	<hr>
		
	<!--loop article begin-->
	<?php while (have_posts()) : the_post(); ?>
	<!--post title as a link-->
	
	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				
	<!--Post Meta-->
	<div class="post-meta-top">
		<div class="auth"><span>Posted by <strong><?php the_author_posts_link(); ?></strong> | </span></div>
		<div class="date"><span><?php the_time('F j, Y'); ?> | </span></div>
		<div class="comm"><span><strong><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></strong></span></div>
	</div>
	<div class="clearboth"></div>
	<!--optional excerpt or automatic excerpt of the post-->
	<?php the_excerpt(); ?>

	<!--Post Meta-->
	<hr />		
       <!--one post end-->
	<?php endwhile; ?>

    <!-- Previous/Next page navigation -->
    <div id="page-nav">
	    <p><?php previous_posts_link('Previous Page') ?> | <?php next_posts_link('Next Page') ?></p>
    </div>
	
	<!-- do not delete-->
	<?php else : ?>

	Not Found

	<!--do not delete-->
	<?php endif; ?>
		
	
<!--archive.php end-->

</div>
<!--include sidebar-->
<?php get_sidebar();?>
<!--include footer-->
<?php get_footer(); ?>