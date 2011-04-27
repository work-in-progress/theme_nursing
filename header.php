<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage SocialBusiness
 */

global $show_wide_header;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" href="http://www.csuci.edu/css/global/v2/main.css" media="screen, projection" /> 
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="http://www.csuci.edu/css/global/v2/ie6.css" media="screen, projection" /><![endif]--> 
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="http://www.csuci.edu/css/global/v2/ie7.css" media="screen, projection" /><![endif]--> 
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="http://www.csuci.edu/css/global/v2/ie8.css" media="screen, projection" /><![endif]--> 
<link rel="stylesheet" type="text/css" href="http://www.csuci.edu/css/global/v2/print.css" media="print" /> 
<link rel="shortcut icon" href="http://www.csuci.edu/favicon.ico" type="image/x-icon" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="http://www.csuci.edu/scripts/jquery.cisearch.min.js"></script> 
 
<style type="text/css" media="all"> 
@import "http://www.csuci.edu/css/subpage_general.css";
</style> 


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
	<div id="header">
	<div class="inner"> 
		<h1><a href="http://www.csuci.edu/index.htm" title="CSU Channel Islands"><img src="http://www.csuci.edu/images/global/logo-bw.gif" alt="CSU Channel Islands" /></a></h1> 
		<a href="#back_to_top" id="back_to_top"></a> 
		<div id="skip"> 
			<ul> 
				<li><a href="#skip_navigation" title="Skip to Content">Skip to Content</a></li> 
				<li><a href="http://www.csuci.edu/accessiblebrowsing.htm" title="Accessible Browsing Information">Accessible Browsing Information</a></li> 
			</ul> 
		</div> 
		<div id="wayfind"> 
			<h2 class="hidden">Way-finding Tools</h2> 
			<form action="http://webapps.csuci.edu/CSUCIApps/Department/IT/Web/GoogleSearch/Index.aspx" method="get"> 
				<fieldset> 
					<label for="search">Search CI</label> 
					<input type="text" id="search" name="search" /> 
					<button type="submit" class="hidetext">Go</button> 
				</fieldset> 
			</form> 
			<ul> 
				<li><a href="http://webapps.csuci.edu/directory/">Directory</a></li> 
				<li><a href="http://webapps.csuci.edu/azindex/">A-Z Index</a></li> 
				<li><a href="http://www.csuci.edu/about/maps.htm">Maps</a></li> 
				<li><a href="http://www.csuci.edu/contact.htm">Contact Us</a></li> 
				<li class="myci"><a href="http://myci.csuci.edu/?tn"><em>my</em>CI</a></li> 
			</ul> 
		</div> 
	</div> 
	<div class="nav"> 
		<h2 class="hidden">Site Wide Navigation</h2> 
		<ul> 
			<li><a href="http://www.csuci.edu/index.htm"><abbr title="Channel Islands">CI</abbr> Home</a></li> 
			<li><a href="http://www.csuci.edu/students/prospective.htm">Future Students</a></li> 
			<li><a href="http://www.csuci.edu/students/enrolled.htm">Current Students</a></li> 
			<li><a href="http://www.csuci.edu/parents.htm">Parents</a></li> 
			<li><a href="http://www.csuci.edu/visitors.htm">Visitors &amp; Community</a></li> 
			<li><a href="http://www.csuci.edu/faculty.htm">Faculty</a></li> 
			<li><a href="http://www.csuci.edu/staff.htm">Staff</a></li> 
			<li class="last"><a href="http://www.csuci.edu/alumni/index.htm">Alumni</a></li> 
		</ul> 
	</div> 
	</div><!-- #header -->



<div id="wrapper" class="hfeed">
		<div id="premasthead">&nbsp;</div>
		<div id="masthead">

			<div class='clear'></div>
			<div id="upperaccess">
			
				<a href='/' id="home_logo_link">Home</a>
					<div class='menurightfloater'><span>Find us on</span>
					<a id='socialbuttonfacebook' href='http://www.facebook.com/#!/pages/California-Institute-for-Social-Business/128385543846915'  target='_blank'>Facebook</a>
					<a id='socialbuttontwitter' href='http://twitter.com/CIsocBusiness'  target='_blank'>Twitter</a>
					<a id='socialbuttonlinkedin' href='http://www.linkedin.com/groups?gid=3251616' target='_blank'>LinkedIn</a>
					<a id='socialbuttonyoutube' href='http://www.youtube.com/cisocialbusiness'  target='_blank'>YouTube</a>
					</div>
		
			</div>
			<div id="access" role="navigation" style='z-index: 10000;'>
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

					<div style='clear:both'></div>
			</div><!-- #access -->

			
			<?php 
			if(isset($show_wide_header) && $show_wide_header) {		
			?>
			<div id="header_wide_pane">
      <div class="hometabpage" id="tabpage4">
        <img src="<?php bloginfo('template_directory'); ?>/images/main_d.jpg" alt=""/>
        <div class="textcontainer">
          <h4><span>Header 4</span></h4>
          <p>Text 4</p>
        </div>
      </div>

      <div class="hometabpage" id="tabpage3">
        <img src="<?php bloginfo('template_directory'); ?>/images/main_c.jpg" alt=""/>
          <div class="textcontainer">
            <h4><span>Header 3</span></h4>
            <p>Text 3</p>
          </div>
      </div>
      <div class="hometabpage" id="tabpage2">
        <img src="<?php bloginfo('template_directory'); ?>/images/main_b.jpg" alt=""/>
        <div class="textcontainer">
          <h4><span>Header 2</span></h4>
          <p>Text 2</p>
        </div>
      </div>
      <div class="hometabpage" id="tabpage1" style="display:block;">
        <img src="<?php bloginfo('template_directory'); ?>/images/main_a.jpg" alt=""/>
        <div class="textcontainer">
          <h4><span>Header 1</span></h4>
          <p>Text 1</p>
        </div>
      </div>

      <div class="hometabpagecommandarea" style='width:110px;'>
        <a class="command_d">4</a>
        <a class="command_c">3</a>
        <a class="command_b">2</a>
        <a class="command_a">1</a>
      </div>
			
			


			</div>
			<div id='header_marker'>&nbsp;</div>
			<?php 
			} else {	
			?>
			<img id='header_nursing_short' class='header_nursing_short_flag' src="<?php bloginfo('template_directory'); ?>/images/header_nursing_short.jpg" alt=''/>
			<a href="/"  class='home_link'></a>

			<?php 
			}
			?>
			
				<div class='clear'></div>
			</div><!-- #masthead -->

	<div id="main">
		<a name="skip_navigation"></a>
