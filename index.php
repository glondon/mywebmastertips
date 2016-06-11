<?php get_header(); ?>

<div id="content">

<p align="center"><script type="text/javascript"><!--

google_ad_client = "pub-0372492470050030";

/* 468x60, for sign up blog created 5/13/09 */

google_ad_slot = "2999302282";

google_ad_width = 468;

google_ad_height = 60;

//-->

</script>

<script type="text/javascript"

src="http://pagead2.googlesyndication.com/pagead/show_ads.js">

</script></p>

	<?php $current_tag = single_tag_title("", false); if ($current_tag) echo '<div class="tagarchive"><h1>'.ucwords($current_tag).'</h1></div>'?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); $loopcounter++; ?>



		<div <?php if (function_exists('post_class')) post_class(); ?>>



			<div class="entry entry-<?php echo $postCount ;?>">

			

				<div class="entrytitle_wrap">

					<?php if (!is_page()) : ?>

						<div class="entrydate">

							<div class="dateMonth">

								<?php the_time('M');?>

							</div>

							<div class="dateDay">

								<?php the_time('j'); ?>

							</div>

						</div>

					<?php endif; ?>

				

					<div class="entrytitle">

					<?php if ($loopcounter==1):?>  

						<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1> 

					<?php else : ?>

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 

					<?php endif; ?>

					</div>

			

					<?php if (!is_singular()): ?>

						<div class="endate"><?php the_author(); ?> on <?php the_time('F jS, Y'); ?></div>

					<?php endif; ?>	

				</div>

			

			

				<div class="entrybody">	

					<?php if (is_archive() || is_search()) : ?>	

						<?php the_excerpt(); _e('<p><a href="'.get_permalink().'">Continue reading about '); the_title(); _e('</a></p>');  ?>

					<?php else : ?>

						<?php the_content('Read the rest of this entry &raquo;');   ?>

						<?php the_tags( '<br /><p>Tags: ', ', ', '</p>'); ?>

                                         <p><script src="http://feeds.feedburner.com/~s/MyWebmasterTips?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script> <?php if (is_singular()): ?><a href="https://plus.google.com/u/0/103636486304752722722/" target="_blank" rel="author">Greg London on Google +</a><?php endif; ?></p>

					<?php endif; ?>			

				</div>

			

				<div class="entrymeta">	

					<div class="postinfo"> 

				

						<?php if ($loopcounter==1) social_bookmarks(); ?>	

						<?php if (is_single()): ?>

						 <span class="postedby">Posted by <?php the_author() ?></span>

						<?php endif; ?>

						

						<?php if (!is_page()): ?>

							<span class="filedto"><?php the_category(', ') ?> </span>

						<?php endif; ?>

						

						<?php if (!is_singular()): ?>

							<span class="commentslink"><?php comments_popup_link('Add a Comment &#187;', '1 Comment &#187;', '% Comments &#187;');?></span>  					

						<?php else: ?>

							<span class="rss">Subscribe to <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to RSS feed'); ?>" ><?php _e('<abbr title="Subscribe to RSS Feed">RSS</abbr>'); ?></a> feed</span>

						<?php endif; ?>

				

						<?php edit_post_link('Edit', ' | ', ''); ?>

				

					</div>	

				</div>

			

			                    

				<?php if ($loopcounter == 1 || is_singular()) { include (TEMPLATEPATH . '/ad_middle.php'); } ?>                 

			

			</div>	

			

			<?php if (is_singular()): ?>



<br />

<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="600" data-numposts="5"></div>

				<div class="commentsblock">

					<?php comments_template(); ?>

				</div>

			<?php endif; ?>

		

	</div>

	

	<?php endwhile; ?>

	

	<?php if (!is_singular()): ?>         

		<div id="nav-global" class="navigation">

			<div class="nav-previous">

			<?php 

				next_posts_link('&laquo; Previous entries');

				echo '&nbsp;';

				previous_posts_link('Next entries &raquo;');

			?>

			</div>

		</div>

		

	<?php endif; ?>

		

	<?php else : ?>

	

		<h2>Not Found</h2>

		<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>

	

</div>



<?php get_footer(); ?>