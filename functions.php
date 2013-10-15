<?php

/*
	Custom theme functions

	Note: we recommend you prefix all your functions to avoid any naming
	collisions or wrap your functions with if function_exists braces.
*/

// Load syntax highlithter files just in dev categories with is code is more problable
function load_sytax_highlighter($part) {
	if( category_slug() == 'dev' ) :

		if( $part == 'styles' ) :
		?>
			<link href="http://agorbatchev.typepad.com/pub/sh/3_0_83/styles/shCore.css" rel="stylesheet" type="text/css" />
    		<link href="http://agorbatchev.typepad.com/pub/sh/3_0_83/styles/shThemeMidnight.css" rel="stylesheet" type="text/css" />    
		<?php

		elseif( $part == 'scripts' ) : 
		?>
			<script src="//alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
    		<script src="//alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script>
			<script type="text/javascript">
		        function path()
		        {
		          var args = arguments,
		              result = []
		              ;
		               
		          for(var i = 0; i < args.length; i++)
		              result.push(args[i].replace('@', '//agorbatchev.typepad.com/pub/sh/3_0_83/scripts/'));
		               
		          return result
		        };
		         
		        SyntaxHighlighter.autoloader.apply(null, path(
		          'bash shell             @shBrushBash.js',
		          'cpp c                  @shBrushCpp.js',
		          'css                    @shBrushCss.js',
		          'java                   @shBrushJava.js',
		          'js jscript javascript  @shBrushJScript.js',
		          'perl pl                @shBrushPerl.js',
		          'php                    @shBrushPhp.js',
		          'text plain             @shBrushPlain.js',
		          'py python              @shBrushPython.js',
		          'ruby rails ror rb      @shBrushRuby.js',
		          'sass scss              @shBrushSass.js',
		          'sql                    @shBrushSql.js',
		          'xml xhtml xslt html    @shBrushXml.js'
		        ));
		        SyntaxHighlighter.all();
		    </script>
		<?php

		endif;
	endif;
}

function numeral($number) {
	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));
	return $number . $ext;
}

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($str !== 'mes' ? 's' : 'es');
}

function relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'año',
		2592000 => 'mes',
		604800 => 'semana',
		86400 => 'día',
		3600 => 'hora',
		60 => 'minuto',
		1 => 'segundo'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title);
		}
	}
}

function twitter_account() {
	return site_meta('twitter', 'jonalvarezz');
}

function twitter_url() {
	return 'https://twitter.com/' . twitter_account();
}