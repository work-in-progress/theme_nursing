<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 * 	
 */
?>

</div><!-- #main -->

	<div id="footer1" role="contentinfo">
	
	</div><!-- #footer -->

</div><!-- #wrapper -->

<div id="footer">
  <div class="nav">
    <ul>
      <li>
        <a href="http://www.csuci.edu/index.htm" id="current">
          <abbr title="Channel Islands">CI</abbr> Home
        </a>
      </li>
      <li>
        <a href="http://www.csuci.edu/police/emergency-preparedness/index.htm">Emergency Preparedness</a>
      </li>
      <li>
        <a href="http://www.csuci.edu/legal.htm">Legal Notice</a>
      </li>
      <li>
        <a href="http://www.csuci.edu/policies.htm">Policies</a>
      </li>
      <li>
        <a href="http://www.csuci.edu/copyright/copyright_infringement.htm">Copyright Infringement</a>
      </li>
      <li class="last">
        <a href="http://webapps.csuci.edu/ratethispage/index.aspx">Rate This Page</a>
      </li>
    </ul>
  </div>
  <div class="inner">
    <p>
      CSU Channel Islands - One University Drive - Camarillo CA 93012 USA - Phone: (805) 437-8400<br />&copy; 2005-2010 CSU Channel Islands. All rights reserved.
    </p>
  </div>
</div>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script src="http://cdn.jquerytools.org/1.2.3/all/jquery.tools.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/socialbusiness.js"> </script>

</body>
</html>
