<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Welcome to Website</title>
		<link rel="shortcut icon" href="an.ico" type="image/png">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/gradients.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/responsive.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/light/light.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/dark/dark.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/bar/bar.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/themes/default/default.css" media="screen" />	
        <link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/nivo-slider.css" media="screen" />	
		<link rel='stylesheet' id='BNS-Corner-Logo-Style-css'  href='<?php echo  get_template_directory_uri(); ?>/social_icons_from_Techandallcom.css' type='text/css' media='screen' />
		<link rel="stylesheet" type="text/css" href="<?php echo  get_template_directory_uri(); ?>/comments.css"/>

		<script src="<?php echo  get_template_directory_uri(); ?>/js/selectnav.min.js"></script>
		<script src="<?php echo  get_template_directory_uri(); ?>/js/ready.js"></script>
		<script src='<?php echo  get_template_directory_uri(); ?>/http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	    <script type='text/javascript' src='<?php echo  get_template_directory_uri(); ?>/js/menu_jquery.js'></script>
		<script>
			domready(function(){
				selectnav('nav', {
					label: '--- Navigation --- '
				});
				prettyPrint()
			})
		</script>
	</head>
	<body>
	<script type="text/javascript" src="<?php echo  get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"> </script>
   <script type="text/javascript">
$(document).ready(function() {
	var s = $("#navigation");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		
		if (windowpos >= pos.top) {
			s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});
});
</script>
		<div class="coloumn fix">
		     <div class="header">
			     <div class="header_top fix">
				     <div class="header_top_left fix floatleft ">
					     <a href="#">Blog</a> \ 
					     <a href="#">Courses</a> \ 
					     <a href="#">Events</a> \ 
					 </div>
				     <div class="header_top_right fix floatright ">
					   
					     <li class="phone_icon"> 01823387518 </li> 
					     <li class="email_icon"> somratcste@gmail.com  </li>
					
					 </div>
				 </div>
				
			     <div class="header_mid fix">
			         <div class="header_mid_logo fix floatleft">
					     <h1 class="mobile_view_header"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><span class="header_mid_logo_others"></span></h1>
	        <p class="desc"><?php bloginfo('description');?></p>
					 </div>
			         <div class="header_mid_social fix  floatright social-icons">
					     
						 
  <ul>
  
  <li class="facebook" style="background-color: #f0f0f0">
<a href="http://www.twitter.com/techandallcom" target="_blank">Facebook</a>
</li>


<li class="twitter" style="background-color: #f0f0f0">
<a href="http://www.twitter.com/techandallcom" target="_blank">Twitter</a>
</li>



<li class="youtube" style="background-color: #f0f0f0">
<a href="http://www.twitter.com/techandallcom" target="_blank">YouTube</a>
</li>

<li class="googleplus" style="background-color: #f0f0f0">
<a href="http://www.twitter.com/techandallcom" target="_blank">Google +r</a>
</li>


<li class="linkedin" style="background-color: #f0f0f0">
<a href="http://www.twitter.com/techandallcom" target="_blank">LinkedIN</a>
</li>


<li class="skype" style="background-color: #f0f0f0">
<a href="http://www.twitter.com/techandallcom" target="_blank">Skype</a>
</li>


</ul>
						 
						 
					 </div>     
				 </div>
			     <div class="header_menu fix">
			         <div id="cssmenu" class="floatleft" class="has-sub">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'cssmenu', 'id' =>'cssmenu','class'=>'has-sub' ) ); ?>
								
					   </div>
			         <div class="header_menu_search floatright">
					    
						   <!--  <input type="text" placeholder="Search" />
						     <input type="button" value="Search" placeholder="Search" /> -->
							 

 <form method="get" id="searchform" action="<?php echo home_url(); ?>/">
		<input type="search" placeholder="Search" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" name="s" id="s" onfocus="if (this.value == '<?php esc_attr_e( 'Search', 'brightpage' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php esc_attr_e( 'Search', 'brightpage' ); ?>';}" />
		
		<input type="hidden" name="post_type" value="post">
</form>

						 
					 </div>
				     
				 </div>
				
			</div>
