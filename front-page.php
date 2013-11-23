<?php get_header(); ?>

        <header role="banner" class="site-header parallax" gumby-parallax="0.5">
                <div class="row">
                        <!-- START: Intro -->
                        <div class="twelve columns header-intro-wrap fadeUpIn">
                                <h1 class="logo">PeoplesOpen<span>.net</span></h1>
                                <p>Free Wireless Internet and Local Network in Oakland, California</p>
                                <form action="" class="header-signup">
          <a href="http://github.com/codegangsta/martini" class="btn-side btn-join">Join the Network</a>
          <a href="#" class="skip btn-side btn-docs btn-grow" gumby-goto="#demo">Help us grow</a>

                                        <p class="hs-disclaimer">Community driven, open source, peer-to-peer internet</p>
                                </form>
                                <div class="catch-errors-top"></div>
                        </div>
                        <!-- /END: Intro -->
                </div>
        </header>
        <!-- /END: Site Header -->

	<main role="main" class="site-main-content">
		<!-- START: Features Section -->
		<section class="site-section section-features" data-target="features">
			<!-- START: Features List -->
			<ul class="row features-list">
				<!-- START: Feature Item -->
				<li class="features-item">
					<span class="features-circle">
						<span class="features-circle-icon">
							<i class="icon-flow-tree"></i>
						</span>
					</span>		
          <h3>Flexible Routing</h3>			
          <p>Route like a boss! Martini's Routing layer is very flexible and extremely <a href="https://en.wikipedia.org/wiki/DRY_(software)">DRY</a>. Name parameters, stack handlers, inject 'dem dependencies.</p>
				</li>
				<!-- /END: Feature Item -->
				<!-- START: Feature Item -->
				<li class="features-item">
					<span class="features-circle">
						<span class="features-circle-icon">
							<i class="icon-battery"></i>
						</span>
					</span>		
					<h3>Batteries Included</h3>			
					<p>Martini comes with a great set of stock middleware - Logging, Recovery, Static file serving, Authentication, Routing and more!</p>
				</li>
				<!-- /END: Feature Item -->
				<!-- START: Feature Item -->
				<li class="features-item">
					<span class="features-circle">
						<span class="features-circle-icon">
							<i class="icon-github"></i>
						</span>
					</span>		
					<h3>Reuse Existing Code</h3>			
          <p>Martini is fully compatible with Go's <strong>http.HandlerFunc</strong> interface. Web apps built in Martini can easily leverage the many awesome open source web packages built in Go</p>
				</li>
				<!-- /END: Feature Item -->
			</ul>
			<!-- /END: Features List -->
		</section>

		<section id="demo" class="site-section section-testimonials">
      <div class="row">
        <div class="video-wrapper">
          <iframe src="//player.vimeo.com/video/32409435" frameborder="0" width="500" height="201" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <!-- /END: Features Section -->
		<!-- START: Signup Section -->
		<section class="site-section section-signup">
			<div class="row">
				<div class="twelve columns animate-on-scroll" data-scrollanimation="fadeDownIn">
					<h3 class="signup-title">Want to contribute?</h3>
					<h4 class="signup-subtitle">File an issue, put up a pull request. Let's make Martini awesome!</h4>
				</div>
			</div>
			<div class="row">
				<!-- START: Signup Form Bottom -->
				<div class="eight columns centered">
					<div class="signup-form">
            <a href="http://github.com/codegangsta/martini" class="btn-side animate-on-scroll" data-scrollanimation="fadeInLeft">
						<span><i class="icon-heart"></i></span>Join the Network</a>
					</div>	
				</div>
				<!-- /END: Signup Form Bottom -->
			</div>
		</section>
		<!-- /END: Signup Section -->

	</main>

	<!-- START: Site Footer -->
	<footer role="contentinfo" class="site-footer">
		<div class="row footer-info">
			<!-- START: Copyright Notice -->
			<div class="six columns">
				<p class="footer-copyright">Photograph of Lake Merritt by <a href="https://commons.wikimedia.org/wiki/File:Closeup_aerial_view_of_Downtown_Oakland_and_Lakeside_Park.jpg">dcoetzee</a>.</p>
			</div>
			<!-- /END: Copyright Notice -->
		</div>
	</footer>
	<!-- /END: Site Footer -->

<?php get_footer(); ?>
