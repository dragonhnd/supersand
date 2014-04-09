<?php get_header() ?>

	<div id="container">
		<div id="content">
			
			<div class="section">
			    <p class="h2">LATEST</p>
				<ul>
				<?php $my_query = new WP_Query('posts_per_page=7');				
						while ( $my_query->have_posts() ) : $my_query->the_post() ?>

				<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( 'D, M d, Y', '', '', false ), get_the_time() ) ?></abbr></span>
					<span class="sep"> —  </span>
					<span class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></span>
				</li><!-- .post -->

				<?php endwhile; ?>
				</ul>
			</div>

			<div class="section">
			    <p class="h2">about me</p>

				<ul class="me">
					<li>关注我的 <a class="reference external" href="https://twitter.com/supergrubby" target="_blank">Twitter</a></li>
					<li>发一封 <a class="reference external" href="mailto:supergrubby@gmail.com">邮件</a> 给我</li>
					<li>了解我在 <a class="reference external" href="http://github.com/supergrubby" target="_blank">Github</a> 上折腾什么</li>
				</ul>
			</div>
			<div class="section">
			    <p class="h2">find me elsewhere</p>
				<ul class="simple">
					<li><a href="https://twitter.com/supergrubby/" target="_blank">Twitter</a></li>
					<li><a href="http://github.com/supergrubby/" target="_blank">Github</a></li>
				</ul>
			</div>			

		</div><!-- #content -->
	</div><!-- #container -->


<?php //get_sidebar() ?>
<?php get_footer() ?>
