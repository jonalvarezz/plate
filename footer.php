	<footer role="contentinfo" class="wrapper text_right" id="colophon">
	    <p class="font_small">&copy; <?php echo date('Y'); ?> <a href="/" title="Jonathan Alvarez González">Jonathan Álvarez González</a>. All rights reserved.</p>
	</footer>
	
	</div> <?php // /Page Wrap ?>

	<aside class="assistive-nav fade perspective" role="complementary" aria-hidden="false">
        <div class="wrapper">
            <header id="avatar" class="text_center">
                <a href="<?php echo base_url(); ?>" title="Ir donde todo empieza" desc="Jonathan Alvarez Portrait">
                    <span class="hide-text"><?php echo site_name(); ?></span>
                </a>
            </header>
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
            
            <footer id="follow-me-babe" class="text_center">
                <i class="social-icons share clickable"><span class="visuallyhidden">Click to follow</span></i>
                <div id="follow-opts" class="invisible">
                    <a href="//twitter.com/jonalvarezz" target="_blank" title="Sígueme en Twitter">
                        <i class="social-icons tw clickable"><span class="visuallyhidden">Sígueme en Twitter</span></i>
                    </a>
                    <a href="//plus.google.com/102058927482745502681" target="_blank" title="Agrégame en Google Plus">
                        <i class="social-icons gplus clickable"><span class="visuallyhidden">Agrégame en Google Plus</span></i>
                    </a>
                </div>
            </footer>

        </div>
    </aside>

	<?php // Scripts ?>
	<script>var base = '<?php echo theme_url(); ?>';</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo theme_url("js/vendor/jquery-1.10.2.min.js"); ?>"><\/script>')</script>
    
    <script src="<?php echo theme_url('js/vendor/less.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo theme_url('js/jquery.transit.js'); ?>"></script>
	<script src="<?php echo theme_url('js/main.js'); ?>"></script>
    
    <?php load_sytax_highlighter('scripts'); ?>

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