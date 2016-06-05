<?php get_header(); ?>

	<div id="content">
		
<h2>Oops!</h2>
	<p>The page you're looking for can't be found.</p>
<script type="text/javascript">
  var GOOG_FIXURL_LANG = 'en';
  var GOOG_FIXURL_SITE = '<?php echo get_settings('home'); ?>';
</script>
<script type="text/javascript" 
    src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
	
<p>
Or you check out the recent articles:
	<ul>
	<?php
	query_posts('posts_per_page=10');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>" title="Permalink for : <?php the_title(); ?>"><?php the_title(); ?></a>
	<?php endwhile; endif; ?>
	</ul>
</p>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
