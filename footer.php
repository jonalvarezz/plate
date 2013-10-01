	<footer role="contentinfo" id="colophon">
	    <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

	    <ul role="navigation">
	        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	        <?php if(twitter_account()): ?>
	        <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	        <?php endif; ?>

	        <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>

	        <li><a href="/" title="Return to my website.">Home</a></li>
	    </ul>
	</footer>
	
	</div> <?php // /Page Wrap ?>

	<aside class="assistive-nav fade perspective" role="complementary" aria-hidden="false">
        <h1>
            <a href="<?php echo base_url(); ?>" title="Ir donde todo empieza">
                <span class="hide-text"><?php echo site_name(); ?></span>
            </a>
        </h1>
        <p><?php echo site_description(); ?></p>

        <?php if(has_menu_items()): ?>
            <nav role="navigation">
                <ul>
                    <?php while(menu_items()): ?>
                        <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                            <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                                <?php echo menu_name(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </aside>

	<?php // Scripts ?>
	<script>var base = '<?php echo theme_url(); ?>';</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo theme_url("js/vendor/jquery-1.10.2.min.js"); ?>"><\/script>')</script>
    
    <script src="<?php echo theme_url('js/vendor/less.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo theme_url('js/main.js'); ?>"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    -->
	
</body>
</html>