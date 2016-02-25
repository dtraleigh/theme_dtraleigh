<div id="sidebar">


<div class="sidebarSubscribe">
	<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
		<form action="//dtraleigh.us4.list-manage.com/subscribe/post?u=6c2ac2e17917be479265243f1&amp;id=aa2eab7f78" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL">Subscribe to our mailing list</label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;"><input type="text" name="b_6c2ac2e17917be479265243f1_aa2eab7f78" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</div>
		</form>
	</div>
	<!--End mc_embed_signup-->
</div>



<!-- Start recentComments section -->
    <div id="recentComments">		
	    <ul>
		<?php if (function_exists('get_recent_comments')) { ?>
            <li><h2><?php _e('Recent Comments'); ?></h2>
                <ul>
                    <?php get_recent_comments(); ?>
                </ul>
            </li>
        <?php } ?>   
        <?php if (function_exists('get_recent_trackbacks')) { ?>
        <?php } ?>
	    </ul>				
	Comments feed <a href="http://dtraleigh.com/comments/feed/"><img src="<?php bloginfo('template_url'); ?>/images/rss.png"></a>
    </div>
    <div id="sidebarTopics">
		<h2>Blog Post Topics</h2>
        <ul>
           	<?php wp_list_categories('orderby=name&title_li'); ?>
		</ul>
    </div>
    <div id="sidebarwrap">
        <?php include(TEMPLATEPATH."/l_sidebar.php");?>
	<?php include(TEMPLATEPATH."/r_sidebar.php");?>
    </div>
</div>