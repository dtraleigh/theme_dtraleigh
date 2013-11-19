<div id="w_sidebar" class="clearfix">
	<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
	<li>
        <h2>Archives</h2>
	    <ul>
	    <?php wp_get_archives('type=monthly'); ?>
	    </ul>
	</li>

	<li>
        <h2>Links</h2>
	    <ul>
        <?php get_links(-1, '<li>', '</li>', ' - '); ?>
        </ul>
    </li>
 	<?php endif; ?>
	</ul>
</div>