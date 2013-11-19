<div id="sidebar">
    <div class="sidebarSubscribe">	 
        <form 
			action="http://www.feedburner.com/fb/a/emailverify" 	
			method="post" 	
			target="popupwindow" 	
			onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=1104491', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<input type="text" id="subscribeText1" class="emailSubscribe" align="center" onfocus="this.select()" value="Subscribe by email" name="email"/>
			<input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1104491" name="url"/>
			<input type="hidden" value="The Raleigh Connoisseur" name="title"/>
			<input type="hidden" name="loc" value="en_US"/>
			<input type="submit" value="Submit" align="center" class="subscribeButton">
		</form>
    </div>
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