<div id="sidebar">



	<div id="sidebar-left">

	

		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

	   	<ul>
	   		<br /><script type="text/javascript" src="http://www.getresponse.com/view_webform.js?wid=89489"></script><br />
	   	</ul>

	    <h4><?php _e('Categories'); ?></h4>

	    <ul>

			<?php wp_list_cats('sort_column=name'); ?>

	    </ul>	    

	    
	    <!--
	    <h4><?php //_e('Archive'); ?></h4>

	  	<ul>

		   <?php //wp_get_archives('type=monthly'); ?>

		  </ul>

		  

		  <h4><?php //_e('Blogroll'); ?></h4>

	    <ul>

	    	<?php //wp_list_bookmarks('categorize=0&title_li=0&title_after=&title_before='); ?>		

	    </ul>

	    

	   	<h4><?php //_e('Meta'); ?></h4>

			<ul>

				<?php //wp_register(); ?>

				<li><?php //wp_loginout(); ?></li>

				<li><a href="<?php //bloginfo('comments_rss2_url'); ?>" title="<?php //_e('The latest comments to all posts in RSS'); ?>">
				<?php //_e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>

				<?php //wp_meta(); ?>

			</ul>  

	-->

	<?php endif; ?>	    

	</div>

	<div id="sidebar-right">

	 	         	

		<div class="search-form">  

			<?php $search_text = "Search this site...."; ?> 

	    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 

	        <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '')  

	        {this.value = '<?php echo $search_text; ?>';}"  

	        onfocus="if (this.value == '<?php echo $search_text; ?>')  

	        {this.value = '';}" /> 

	        <input type="hidden" id="searchsubmit" /> 

	    </form>  

	  </div>

		

		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

		<ul>

			<p>
				<div style="margin-top:20px;margin-bottom:20px;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
				">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				</div>
			</p>

			<p>
				<div id="google_translate_element"></div><script>
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({
				    pageLanguage: 'en'
				  }, 'google_translate_element');
				}
				</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			</p>

	    	<p>
	    		<a aria-label="Follow @glondon on GitHub" data-count-aria-label="# followers on GitHub" 
	    		data-count-api="/users/glondon#followers" data-count-href="/glondon/followers" href="https://github.com/glondon" 
	    		class="github-button" title="Follow Greg's projects on GitHub!">Follow @glondon</a>
	    	</p>

			<p>
				<a href="http://feeds.feedburner.com/MyWebmasterTips">
					<img src="http://feeds.feedburner.com/~fc/MyWebmasterTips?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a>
			</p>

			<p>
				<script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/signupmakemoney/ffffff/111111"></script></script>
			</p>

		</ul>

		<ul>

			<script type="text/javascript"><!--
			google_ad_client = "pub-0372492470050030";
			/* 120x600, sitemap right banner created 12/12/08 */
			google_ad_slot = "1681836783";
			google_ad_width = 120;
			google_ad_height = 600;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>

		</ul>

	    <!--

	    <h4>Recent Posts</h4>

			<ul>

			<?php //get_archives('postbypost', 10); ?>

			</ul>			

		    

	    <h4><?php //_e('Tags'); ?></h4>

	    <ul>

				<?php //wp_tag_cloud(''); ?>

	    </ul>

	    	--> 

	<?php endif; ?>

	</div>

</div>