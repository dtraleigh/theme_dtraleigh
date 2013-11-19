<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />


<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>



<?php wp_head(); ?>
</head>


<body>
<div id="header">
	<h1 class="theTitle"><a href="http://dtraleigh.com/">The Raleigh Connoisseur</a></h1>
	<div id="socialHeader">
		<ul id="social">
			<li><a href="http://feeds.feedburner.com/ralcon"><img src="<?php bloginfo('template_url'); ?>/images/rss.png"></a></li>
			<li><a href="http://twitter.com/dtraleigh"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"></a></li>
		</ul>
	</div>
</div>
<div id="header_hr">
	<hr>
</div>

<nav class="clearfix">  
    <ul class="clearfix">
        <li class="<?php if (is_home()) { echo "current_page_item"; } ?>"><a href="<?php echo get_settings('home'); ?>">Home</a></li>	
		<?php wp_list_pages('title_li=&depth=1&exclude='); ?>   
    </ul>  
    <a href="#" id="pull">Menu ></a>  
</nav>

<div id="banner_wrapper">
	<div id="banner"></div>
	<div class="banner_info">
		<p>Walking and dining alfresco on Fayetteville Street.</p>
	</div>
</div>
<div id="container">
 <!--header.php end-->