<div class="searchform">
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
	<input 
		type="text" 
		value="Search." 
		name="s" 
		class="s" 
		onfocus="if (this.value == 'Search.') {this.value = '';}" 
		onblur="if (this.value == '') {this.value = 'Search.';}"/>
	<input 
		type="image" 
		class="button" 
		src="<?php bloginfo('template_url'); ?>/images/button-submit.gif" 
		alt="Submit button" />
</form>
</div>