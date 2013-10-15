<?php theme_include('header'); ?>

<section class="content wrapper">
	<article class="post" id="post-entry-<?php echo article_id(); ?>">
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
			<?php echo article_markdown(); ?>
		</div>
		<footer>
			Escrito el <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date("d/m/Y", article_time()); ?></time> en <a href="Ir a la categoría <?php echo article_category_url();?>"><?php echo article_category();?></a>.
			<div id="share-me">
				<a href="https://twitter.com/share?url=http%3A%2F<?php echo urlencode( article_url() ); ?>&text=<?php echo urlencode(article_title()); ?>&via=jonalvarezz" title="Tuitea esto">
					<i class="icon-twitter-sign"><span class="visuallyhidden">Tuitea esto</span></i>
				</a>
				<a href="" title="Compártelo en Google Plus">
					<i class="icon-google-plus-sign"><span class="visuallyhidden">Compártelo en Google Plus</span></i>
				</a>
				<a href="" title="Riega la voz en Facebook">
					<i class="icon-facebook-sign"><span class="visuallyhidden">Riega la voz en Facebook</span></i>
				</a>
			</div>
		</footer>
	</article>
</section>

<?php theme_include('footer'); ?>