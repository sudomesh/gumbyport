  <div style="float:right;text-align:right; margin:10px 20px 0 20px;"><p><!--[if lte IE 8]><span style="filter: FlipH; -ms-filter: "FlipH"; display: inline-block;"><![endif]--><span style="-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); display: inline-block;">©</span><!--[if lte IE 8]></span><![endif]--> CopyLeft <a href="//peoplesopen.net"><abbr>peoplesopen.net</abbr></a>, All Wrongs Reversed, <script type="text/javascript">var d = new Date(); var year = d.getFullYear(); document.write(year);</script>.</p></div>

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="<?php echo get_template_directory_uri() ?>/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="<?php echo get_template_directory_uri() ?>/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	<script src="<?php echo get_template_directory_uri() ?>/js/libs/gumby.min.js"></script>

	<!-- External Plugins Not Linked Directly to Gumby -->

	<script src="<?php echo get_template_directory_uri() ?>/js/plugins/waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/plugins/placeholders.js"></script>

	<!-- Custom theme specific interaction -->
	<script src="<?php echo get_template_directory_uri() ?>/js/theme.js"></script>

 </div> <!-- closes container -->

  </body>
</html>
