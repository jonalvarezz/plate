<?php theme_include('header'); ?>

<section class="content wrapper">
	
	<?php if( has_posts() ): ?>
		<ul class="post-entries">
			<?php while( posts() ): ?>
				<li class="post clickable" id="article-<?php echo article_id(); ?>">
					<article class="post-entry">
						<h2 class="post-title">
							<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h2>

						<div class="post-content">
							<?php echo article_markdown(); ?>
						</div>
					</article>
					<footer>
						Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>.
					</footer>
				</li>
			<?php endwhile ; ?>
		</ul>

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