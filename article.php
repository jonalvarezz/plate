<?php theme_include('header'); ?>

<section class="content wrapper">
	<div class="post" id="article-<?php echo article_id(); ?>">
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