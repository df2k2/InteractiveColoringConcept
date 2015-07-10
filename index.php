<?php
/*
$primary-color-light = #0097A7;
$primary-color:        "#0097A7", "#00BCD4", "#B2EBF2", "#FFFFFF",;
$primary-color-light:  #B2EBF2;
$primary-color-text:   #FFFFFF;
$accent-color:         #536DFE;
$primary-text-color:   #212121;
$secondary-text-color: #727272;
$divider-color:        #B6B6B6;
*/

$colors = array(1 => "#0097A7", 2 => "#00BCD4", 3 => "#B2EBF2", 4 => "#FFFFFF", 5 => "#536DFE", 6 => "#212121", 7 => "#727272", 8 => "#B6B6B6");


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Interactive Coloring Concept</title>
		<meta name="description" content="A fun interactive coloring concept for changing colors on a mockup website" />
		<meta name="keywords" content="coloring, drag and drop, svg, material design, mockup, website" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
	<style>

	<?php foreach ($colors as $k => $v): ?>
	.color-<?php echo $k; ?> { background: <?php echo $v; ?>; color: <?php echo $v; ?>; }
	<?php endforeach; ?>

<?php /*

		.color-1 { background: #333; color: #333;}
		.color-2 { background: #f0f0f0; color: #f0f0f0; }
		.color-3 { background: #c0c3d5; color: #c0c3d5; }
		.color-4 { background: #5FA1E0; color: #5FA1E0; }
		.color-5 { background: #c1d5c0; color: #c1d5c0; }
		.color-6 { background: #47AE73; color: #47AE73; }
		.color-7 { background: #eae7c4; color: #eae7c4; }
		.color-8 { background: #FB6964; color: #FB6964; }
*/ ?>
	</style>
		<div class="container">
			<header class="codrops-header">
				<?php /*
                <div class="codrops-links">
					<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Development/AnimatedGridLayout/" title="Previous Demo"><span>Previous Demo</span></a>
					<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=23913" title="Back to the article"><span>Back to the Codrops article</span></a>
				</div>
				<h1>Interactive Coloring Concept <span>A fun drag &amp; drop experiment</span></h1>
 */ ?>
			</header>
			<div class="content">
				<div class="mockup-browser">
					<header class="mockup-header mockup-section--dark paint-area">
						<div class="mockup-content mockup-grid mockup-grid--spread">
							<span class="mockup-logo paint-area paint-area--text">
								<i class="fa fa-umbrella"></i><span>Column Spring</span>
							</span>
							<nav class="mockup-nav paint-area paint-area--text">
								<span>About</span>
								<span>Solutions</span>
								<span>Pricing</span>
								<span>Contact</span>
							</nav>
						</div>
					</header>
					<section class="mockup-section paint-area">
						<div class="mockup-content mockup-grid">
							<div class="mockup-grid__item mockup-width--half">
								<h1 class="mockup-heading mockup-heading--large paint-area paint-area--text">We help tell your brand's story <span class="mockup-heading__subline">The most efficient toolset for businesses</span></h1>
								<button class="mockup-button paint-area"><span class="mockup-logo paint-area paint-area--text"><span>Discover more</span> <i class="fa fa-chevron-right"></i></span></button>
							</div>
							<figure class="mockup-grid__item mockup-width--half">
								<div class="mockup-img mockup-img--large">
									<i class="fa fa-picture-o"></i>
								</div>
							</figure>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section mockup-section--dark paint-area">
						<div class="mockup-content mockup-grid">
							<h2 class="mockup-heading mockup-heading--single paint-area paint-area--text">Custom solutions</h2>
							<figure class="mockup-grid__item mockup-width--third">
								<div class="mockup-img"><i class="fa fa-picture-o"></i></div>
								<figcaption class="mockup-caption mockup-caption--box paint-area">
									<h3 class="paint-area paint-area--text">Reactive tools</h3>
									<p class="paint-area paint-area--text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</figcaption>
							</figure>
							<figure class="mockup-grid__item mockup-width--third">
								<div class="mockup-img"><i class="fa fa-picture-o"></i></div>
								<figcaption class="mockup-caption mockup-caption--box paint-area">
									<h3 class="paint-area paint-area--text">Invisible guides</h3>
									<p class="paint-area paint-area--text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</figcaption>
							</figure>
							<figure class="mockup-grid__item mockup-width--third">
								<div class="mockup-img"><i class="fa fa-picture-o"></i></div>
								<figcaption class="mockup-caption mockup-caption--box paint-area">
									<h3 class="paint-area paint-area--text">Fancy other stuff</h3>
									<p class="paint-area paint-area--text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</figcaption>
							</figure>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section paint-area">
						<div class="mockup-content">
							<blockquote class="mockup-blockquote">
								<p class="paint-area paint-area--text">There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed.</p>
								<footer class="paint-area paint-area--text">Ray Goforth</footer>
							</blockquote>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section mockup-section--dark paint-area">
						<div class="mockup-content mockup-grid">
							<h2 class="mockup-heading mockup-heading--single paint-area paint-area--text">Our philosophy</h2>
							<figure class="mockup-grid__item mockup-width--half">
								<div class="mockup-img mockup-img--large"><i class="fa fa-picture-o"></i></div>
							</figure>
							<div class="mockup-grid__item mockup-width--half">
								<p class="paint-area paint-area--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<button class="mockup-button paint-area"><span>Read more</span> <i class="fa fa-chevron-right"></i></button>
							</div>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section paint-area">
						<div class="mockup-content mockup-grid">
							<h2 class="mockup-heading mockup-heading--single paint-area paint-area--text">Meet the amazing team</h2>
							<figure class="mockup-grid__item mockup-width--forth">
								<div class="mockup-img"><i class="fa fa-user"></i></div>
								<figcaption class="mockup-caption"><h3 class="paint-area paint-area--text">Jerry McIntosh</h3></figcaption>
							</figure>
							<figure class="mockup-grid__item mockup-width--forth">
								<div class="mockup-img"><i class="fa fa-user"></i></div>
								<figcaption class="mockup-caption"><h3 class="paint-area paint-area--text">Ben McLovin</h3></figcaption>
							</figure>
							<figure class="mockup-grid__item mockup-width--forth">
								<div class="mockup-img"><i class="fa fa-user"></i></div>
								<figcaption class="mockup-caption"><h3 class="paint-area paint-area--text">Sarah Connor</h3></figcaption>
							</figure>
							<figure class="mockup-grid__item mockup-width--forth">
								<div class="mockup-img"><i class="fa fa-user"></i></div>
								<figcaption class="mockup-caption"><h3 class="paint-area paint-area--text">Fred Guhlman</h3></figcaption>
							</figure>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section mockup-section--dark paint-area">
						<div class="mockup-content mockup-grid">
							<h2 class="mockup-heading mockup-heading--single paint-area paint-area--text">Learn about our product</h2>
							<figure class="mockup-grid__item mockup-width--half">
								<div class="mockup-img mockup-img--large"><i class="fa fa-picture-o"></i></div>
							</figure>
							<div class="mockup-grid__item mockup-width--half">
								<p class="paint-area paint-area--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<button class="mockup-button paint-area"><span>Read more</span> <i class="fa fa-chevron-right"></i></button>
							</div>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section paint-area">
						<div class="mockup-content mockup-grid">
							<h2 class="mockup-heading mockup-heading--single paint-area paint-area--text">From the blog</h2>
							<figure class="mockup-grid__item mockup-width--half">
								<div class="mockup-img"><i class="fa fa-file-text-o"></i></div>
								<figcaption class="mockup-caption mockup-caption--box paint-area">
									<h3 class="paint-area paint-area--text">Reactive tools</h3>
									<p class="paint-area paint-area--text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</figcaption>
							</figure>
							<figure class="mockup-grid__item mockup-width--half">
								<div class="mockup-img"><i class="fa fa-file-text-o"></i></div>
								<figcaption class="mockup-caption mockup-caption--box paint-area">
									<h3 class="paint-area paint-area--text">Invisible guides</h3>
									<p class="paint-area paint-area--text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</figcaption>
							</figure>
						</div><!-- /mockup-grid -->
					</section>
					<section class="mockup-section mockup-section--dark paint-area">
						<div class="mockup-content mockup-grid">
							<h2 class="mockup-heading mockup-heading--single paint-area paint-area--text">Pricing</h2>
							<figure class="mockup-grid__item mockup-width--third">
								<div class="mockup-pricing paint-area">
									<h3 class="mockup-heading mockup-heading--box paint-area"><span>Basic</span></h3>
									<div class="mockup-bigtext"><span class="paint-area paint-area--text">$39</span></div>
									<div class="mockup-list-wrap paint-area">
										<ul class="mockup-list paint-area paint-area--text">
											<li>1 brand</li>
											<li>10 projects</li>
											<li>Basic toolset</li>
										</ul>
									</div>
									<button class="mockup-button paint-area"><span>Sign up</span> <i class="fa fa-chevron-right"></i></button>
								</div>
							</figure>
							<figure class="mockup-grid__item mockup-width--third">
								<div class="mockup-pricing paint-area">
									<h3 class="mockup-heading mockup-heading--box paint-area"><span>Professional</span></h3>
									<div class="mockup-bigtext"><span class="paint-area paint-area--text">$99</span></div>
									<div class="mockup-list-wrap paint-area">
										<ul class="mockup-list paint-area paint-area--text">
											<li>10 brands</li>
											<li>50 projects</li>
											<li>Advanced toolset</li>
										</ul>
									</div>
									<button class="mockup-button paint-area"><span>Sign up</span> <i class="fa fa-chevron-right"></i></button>
								</div>
							</figure>
							<figure class="mockup-grid__item mockup-width--third">
								<div class="mockup-pricing paint-area">
									<h3 class="mockup-heading mockup-heading--box paint-area"><span>Premium</span></h3>
									<div class="mockup-bigtext"><span class="paint-area paint-area--text">$199</span></div>
									<div class="mockup-list-wrap paint-area">
										<ul class="mockup-list paint-area paint-area--text">
											<li>Unlimited brands</li>
											<li>Unlimited projects</li>
											<li>Full toolset</li>
										</ul>
									</div>
									<button class="mockup-button paint-area"><span>Sign up</span> <i class="fa fa-chevron-right"></i></button>
								</div>
							</figure>
						</div>
					</section>
				</div><!-- /mockup-browser -->
			</div><!-- /content -->

			<!--
			.color-1 { background: #333; color: #333;}
.color-2 { background: #f0f0f0; color: #f0f0f0; }
.color-3 { background: #c0c3d5; color: #c0c3d5; }
.color-4 { background: #5FA1E0; color: #5FA1E0; }
.color-5 { background: #c1d5c0; color: #c1d5c0; }
.color-6 { background: #47AE73; color: #47AE73; }
.color-7 { background: #eae7c4; color: #eae7c4; }
.color-8 { background: #FB6964; color: #FB6964; }
-->


			<div class="customizer">
				<ul class="color-tool">
					<?php foreach ($colors as $k => $v): ?>
						<li class="color-<?php echo $k; ?>">
							<div class="drag-element" data-color="<?php echo $v; ?>">
								<div class="drop color-<?php echo $k; ?>"></div>
								<i class="drop-helper-1 color-<?php echo $k; ?>"></i>
								<i class="drop-helper-2 color-<?php echo $k; ?>"></i>
								<i class="drop-helper-3 color-<?php echo $k; ?>"></i>
								<i class="drop-helper-4 color-<?php echo $k; ?>"></i>
							</div>
						</li>
					<?php endforeach; ?>
<?php /*					<li class="color-1"><div class="drag-element" data-color="#333"><div class="drop color-1"></div><i class="drop-helper-1 color-1"></i><i class="drop-helper-2 color-1"></i><i class="drop-helper-3 color-1"></i><i class="drop-helper-4 color-1"></i></div></li>
					<li class="color-2"><div class="drag-element" data-color="#f0f0f0"><div class="drop color-2"></div><i class="drop-helper-1 color-2"></i><i class="drop-helper-2 color-2"></i><i class="drop-helper-3 color-2"></i><i class="drop-helper-4 color-2"></i></div></li>
					<li class="color-3"><div class="drag-element" data-color="#c0c3d5"><div class="drop color-3"></div><i class="drop-helper-1 color-3"></i><i class="drop-helper-2 color-3"></i><i class="drop-helper-3 color-3"></i><i class="drop-helper-4 color-3"></i></div></li>
					<li class="color-4"><div class="drag-element" data-color="#5FA1E0"><div class="drop color-4"></div><i class="drop-helper-1 color-4"></i><i class="drop-helper-2 color-4"></i><i class="drop-helper-3 color-4"></i><i class="drop-helper-4 color-4"></i></div></li>
					<li class="color-5"><div class="drag-element" data-color="#C1D5C0"><div class="drop color-5"></div><i class="drop-helper-1 color-5"></i><i class="drop-helper-2 color-5"></i><i class="drop-helper-3 color-5"></i><i class="drop-helper-4 color-5"></i></div></li>
					<li class="color-6"><div class="drag-element" data-color="#47AE73"><div class="drop color-6"></div><i class="drop-helper-1 color-6"></i><i class="drop-helper-2 color-6"></i><i class="drop-helper-3 color-6"></i><i class="drop-helper-4 color-6"></i></div></li>
					<li class="color-7"><div class="drag-element" data-color="#EAE7C4"><div class="drop color-7"></div><i class="drop-helper-1 color-7"></i><i class="drop-helper-2 color-7"></i><i class="drop-helper-3 color-7"></i><i class="drop-helper-4 color-7"></i></div></li>
					<li class="color-8"><div class="drag-element" data-color="#FB6964"><div class="drop color-8"></div><i class="drop-helper-1 color-8"></i><i class="drop-helper-2 color-8"></i><i class="drop-helper-3 color-8"></i><i class="drop-helper-4 color-8"></i></div></li>
 */ ?>
					<li><button class="reset-button" title="Reset colors">Reset colors</button></li>
				</ul>
			</div>
			<!-- Related demos -->
			<section class="content content--related">
			</section>
			<div class="info-wrap">
				<div class="info">
					<h3>Interactive Coloring Concept</h3>
					<p><img src="img/drag.svg" alt="drag icon"/>Drag any color from the left toolbar to an area or text in the mockup. A blue outline will indicate a droppable element.</p>
					<p><img src="img/time.svg" alt="drag icon"/>On mobile, wait a tiny bit until you drag the color drop.</p>
					<button class="info-close">Got it!</button>
				</div>
			</div>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/interact-1.2.4.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
