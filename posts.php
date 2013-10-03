<?php theme_include('header'); ?>

<section class="content wrapper">
	
	<?php if( has_posts() ): ?>

		<?php // Loop ?>
		<?php while( posts() ): ?>
			<article class="post clickable" id="post-entry-<?php echo article_id(); ?>">
				<header>
					<?php // Featured Image ?>
					<?php if ( article_custom_field('thumbnail') ) : ?>
						<figure class="feat-image strip text_center" style="background-color: <?php echo article_custom_field('thumbnail-bg', '#f9f9f9'); ?> !important;">
							<img src="<?php echo article_custom_field('thumbnail'); ?>" alt="<?php echo article_title(); ?>">
						</figure>
					<?php endif; ?>
					<h1 class="post-title">
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>
				</header>
				<div class="post-content">
					<?php echo article_description(); ?>
				</div>
				<footer>
					Escrito hace <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>.
				</footer>
			</article>
		<?php endwhile ; ?>

		<?php if(has_pagination()): ?>
			<nav class="pagination">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Nothing here. Take calm, be awesome and write.</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>