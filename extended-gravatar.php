<?php

	/*
	Plugin Name: Extended Gravatar
	Plugin URI: 
	Description: This plugin brings Hovercard popups for your commenters via <a href="http://gravatar.com/">Gravatar</a>
	Version: 0.5
	Author: Reza Moallemi
	Author URI: http://www.moallemi.ir/blog
	*/

	function extended_gravatar_head() {
		if(!is_singular())
			return;

		$plugin_url = plugins_url('', __FILE__);
		?>
		<link rel="stylesheet" type="text/css" id="gravatar-card-css" href="<?php echo $plugin_url;?>/css/hovercard.css" />
		<link rel="stylesheet" type="text/css" id="gravatar-card-services-css" href="<?php echo $plugin_url;?>/css/services.css" />
		<script type="text/javascript" language="javascript">
			var extended_gravatar_url = '<?php echo $plugin_url;?>';
		</script>
		<?php
	}
	
	function extended_gravatar_scripts() {
		if(!is_singular())
			return;
			
		wp_enqueue_script('gprofiles', plugins_url('', __FILE__).'/js/gprofiles.js', array( 'jquery' ), 'e', true );
	}
	

	add_action('wp_head', 'extended_gravatar_head');
	add_action('wp_enqueue_scripts', 'extended_gravatar_scripts');
			
?>
