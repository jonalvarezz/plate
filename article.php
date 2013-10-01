<?php theme_include('header'); ?>

<section class="content wrapper">
	<div class="post" id="article-<?php echo article_id(); ?>">
		<?php // Featured Image ?>
		<?php if ( article_custom_field('thumbnail') ) : ?>
			<figure class="feat-image strip text_center" style="background-color: <?php echo article_custom_field('thumbnail-bg', '#f9f9f9'); ?> !important;">
				<img src="<?php echo article_custom_field('thumbnail'); ?>" alt="<?php echo article_title(); ?>">
			</figure>
		<?php endif; ?>
		<article class="post-entry">
			<h2 class="post-title">
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h2>

			<div class="post-content">
				<?php echo article_markdown(); ?>
			</div>
		</article>
		<footer>
			Escrito hace <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>.
		</footer>
	</div>
</section>

<?php theme_include('footer'); ?>