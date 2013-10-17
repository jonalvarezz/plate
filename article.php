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
			<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date("j M. Y", article_time()); ?></time> en <a href="Ir a la categoría <?php echo article_category_url();?>"><?php echo article_category();?></a>.
			<div id="share-me">
				<a class="icon-twitter" href="https://twitter.com/share?url=http%3A%2F<?php echo urlencode( article_url() ); ?>&text=<?php echo urlencode(article_title()); ?>&via=jonalvarezz" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
					<span class="visuallyhidden">Tuitea esto</span>
				</a>
				<a class="icon-google-plus-sign" href="https://plus.google.com/share?url=http%3A%2F<?php echo urlencode( article_url() ); ?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
					<span class="visuallyhidden">Compártelo en Google Plus</span>
				</a>
				<a class="icon-facebook-sign" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F<?php echo urlencode( article_url() ); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" >
					<span class="visuallyhidden">Riega la voz en Facebook</span>
				</a>
			</div>
		</footer>
	</article>
</section>

<?php theme_include('footer'); ?>