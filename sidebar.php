<div id="sidebar">


<div class="sidebarSubscribe">
	<form 
		action="http://feedburner.google.com/fb/a/mailverify" 	
		method="post" 	
		target="popupwindow" 	
		onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=ralcon', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
		<input type="text" id="subscribeText1" class="emailSubscribe" align="center" value="Enter your email address" name="email" />
		<input type="hidden" value="ralcon" name="uri"/>
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