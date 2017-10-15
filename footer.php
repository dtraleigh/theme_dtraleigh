<div class="clearfix"></div>
</div>

<div id="topicsInFooter">
	<div id="topicLists">
		<h2>Blog Post Topics</h2>
		<ul id="triple">
			<?php wp_list_categories('orderby=name&title_li'); ?>
		</ul>
		<ul id="double">
			<?php wp_list_categories('orderby=name&title_li'); ?>
		</ul>
	</div>
</div>

<div id="footer">
	<div id="copyright">
		<a rel="license" href="https://creativecommons.org/licenses/by-nc-nd/3.0/deed.en_US">
			<img alt="Creative Commons License" src="https://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" />
		</a>
		<p>Copyright <?php echo date('Y'); ?> Leo Suarez.</p>
		<p>This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-nc-nd/3.0/deed.en_US">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.</p>
	</div>
</div>
<div id="lowerFooter">
	<div id="footerNav">
		<ul>
			<li class="<?php if (is_home()) { echo "current_page_item"; } ?>"><a href="<?php echo get_settings('home'); ?>">Home</a></li>	
			<?php wp_list_pages('title_li=&depth=1&exclude='); ?>
		</ul>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>