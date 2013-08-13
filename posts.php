<?php theme_include('header'); ?>

<section class="content">
	
	<?php if( has_posts() ): ?>
		<ul class="post-entries">
			<?php while( posts() ): ?>
				<li>
					<article class="island post-entry">
						<h2>
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
		<p>Looks like there's nothing written yet</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>