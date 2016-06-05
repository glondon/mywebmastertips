<?php
 /*
  Template Name: google-search
  Description: A Google CSE template.
  */
?>
<?php get_header(); ?>
<br />
<div align="center">


<div id="cse-search-results"></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 800;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>


</div>

</div> 

<div id="footer">

<div id="credits">
	
	<div id="ftnav">
		<span class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to RSS'); ?>"><?php _e('<abbr title="Subscribe to RSS">RSS</abbr>'); ?></a> | <a href="http://mywebmastertips.com/about/sitemap/">Sitemap</a></span>
	</div>
	<?php wp_footer(); ?>     
	</div>		
</div>

</body>
</html>
<!-- <?php if (current_user_can('level_10')) echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
