<div id="sidebar">
	<div class="sidebarSubscribe">
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="//dtraleigh.us4.list-manage.com/subscribe/post?u=6c2ac2e17917be479265243f1&amp;id=aa2eab7f78"
			method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
			target="_blank" novalidate="">
				<div id="mc_embed_signup_scroll">
				<label for="mce-EMAIL">Subscribe to our mailing list</label> 
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address"
				required="" /> 
				<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;">
					<input type="text" name="b_6c2ac2e17917be479265243f1_aa2eab7f78" tabindex="-1" value="" />
				</div>
				<div class="clear">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" />
				</div></div>
			</form>
		</div>
		<!--End mc_embed_signup-->
	</div>
	<!-- Donate box -->
	<div id="donate">
		<div class="donate_button">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="display: inline-grid;">
            <input type="hidden" name="cmd" value="_s-xclick" /> 
            <input type="hidden" name="hosted_button_id" value="9KK9DK6PMZ6J8" /> 
            <input type="image" src="<?php bloginfo(template_url);?>/images/PayPal-Donate-Button-Download-PNG.png" border="0" name="submit"
            alt="PayPal - The safer, easier way to pay online!" width="75px"/> 
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" /></form>
			<a href="https://venmo.com/dtraleigh"><img src="<?php bloginfo(template_url);?>/images/venmo_button.png" alt="@DTRaleigh on Venmo"></a>
		</div>
		<div id="donate_descr">
			<p>This blog has been going strong for 10 years. Any support for my work would be appreciated.</p>
		</div>
	</div>
	<!-- end Donate box -->
	<!-- community box -->
	<div id="community">
		<a href="https://community.dtraleigh.com/">
			<img src="https://dtraleigh.com/images/logos/community_logo2_350w.jpg" />
		</a>
		<div id="donate_descr">
			<p>Continue to discuss with other downtown Raleigh aficionados on the DTRaleigh Community, an online forum for civilized conversation. </p>
			<p><a href="https://community.dtraleigh.com/">Check it out!</a></p>
		</div>
	</div>
	<!-- end community box -->
	<div id="sidebarTopics">
		<h2>Blog Post Topics</h2>
		<ul>
			<?php wp_list_categories('orderby=name&title_li'); ?>
		</ul>
	</div>
	<div id="sidebarwrap">
		<?php include(TEMPLATEPATH."/l_sidebar.php");?><?php include(TEMPLATEPATH."/r_sidebar.php");?>
	</div>
</div>