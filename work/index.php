<?php
$page_title = "WORK";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content work" data-pageid="work">

			<h1 class="main">
				<span class="word">WORK</span>
				<span class="icon"><svg><use xlink:href="#nav-work"></use></svg></span>
			</h1>

			<section class="block nav-work">
				<nav>
					<ul>
						<li data-worknav="all" class="on">ALL</li>
						<li data-worknav="ux">UX</li>
						<li data-worknav="design">DESIGN</li>
						<li data-worknav="develop">DEVELOP</li>
					</ul>
				</nav>
			</section>

			<section class="block lead">
				<div class="projects">
					<section class="best">
						<ul>
							<!-- KOOZAC -->
							<li id="koozac" class="nav-project">
								<a class="ajax-nav" href="koozac/" data-pageid="project">
									<img src="/asset/dist/img/work/koozac/03.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">KOOZAC</span>
										<span class="subtext">Mobile game UI &amp; Web</span>
									</h2>
								</a>
							</li>

							<!-- HEROES AND GENERALS -->
							<li id="hng" class="nav-project">
								<a class="ajax-nav" href="heroes-and-generals/" data-pageid="project">
									<img src="/asset/dist/img/work/hng/hero.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">HEROES &amp; GENERALS</span>
										<span class="subtext">Web design &amp; build</span>
									</h2>
								</a>
							</li>

							<!-- CTM TRAVEL -->
							<li id="ctm-travel" class="nav-project">
								<a class="ajax-nav" href="compare-the-market/" data-pageid="project">
									<img src="/asset/dist/img/work/ctm-travel/hero.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">COMPARE THE MARKET</span>
										<span class="subtext">The fastest travel insurance yet</span>
									</h2>
								</a>
							</li>

							<!-- LIPSUM GENERATOR -->
							<li id="lipsum" class="nav-project">
								<a class="ajax-nav" href="lipsum-generator/" data-pageid="project">
									<img src="/asset/dist/img/work/lipsum/hero.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">LIPSUM GENERATOR</span>
										<span class="subtext">Speedy, bookmarkable, easy lipsum</span>
									</h2>
								</a>
							</li>

							<!-- STOPCLOCK -->
							<li id="timer" class="nav-project">
								<a class="ajax-nav" href="simple-timer/" data-pageid="project">
									<img src="/asset/dist/img/work/timer/hero.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">SIMPLE TIMER</span>
										<span class="subtext">Full screen time tracking</span>
									</h2>
								</a>
							</li>

							<!-- COLOURFLOOD -->
							<li id="colourflood" class="nav-project">
								<a class="ajax-nav" href="colourflood/" data-pageid="project">
									<img src="/asset/dist/img/work/colourflood/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">COLOUR FLOOD</span>
										<span class="subtext">My freelance company</span>
									</h2>
								</a>
							</li>

							<!-- SWAS -->
							<li id="swas" class="nav-project">
								<a class="ajax-nav" href="start-with-a-square/" data-pageid="project">
									<img src="/asset/dist/img/work/swas/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">START WITH A SQUARE</span>
										<span class="subtext">A place for my madness</span>
									</h2>
								</a>
							</li>

							<!-- CODENAME -->
							<li id="gbm" class="nav-project">
								<a class="ajax-nav" href="ghost-bytes-media/" data-pageid="project">
									<img src="/asset/dist/img/work/gbm/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">GHOST BYTES MEDIA</span>
										<span class="subtext">A sneak peak at what's coming next</span>
									</h2>
								</a>
							</li>
						</ul>
					</section>

				</div>
				
			</section>
			
			<section class="block morework">
				<h1>SEE MORE</h1>
			</section>

			<section class="social">
				<ul>
			    	<li class="icon behance"><a target="_blank" href="https://www.behance.net/tomchewitt"><span class="word">Behance</span><svg><use xlink:href="#behance"></use></svg></a></li>
			    	<li class="icon codepen"><a target="_blank" href="http://codepen.io/tomchewitt"><span class="word">Codepen</span><svg><use xlink:href="#codepen"></use></svg></a></li>
			    	<li class="icon github"><a target="_blank" href="https://github.com/tomchewitt"><span class="word">GitHub</span><svg><use xlink:href="#github"></use></svg></a></li>
			    </ul>
			</section>

			<section class="block clients spaced">
				<h1>CLIENTS &amp; COMPANIES</h1>

			    <?php include $_SERVER['DOCUMENT_ROOT']."/asset/dist/img/svg-clients.svg"; ?>
			    
			    <ul class="clientlist">
			    	<li><svg><use xlink:href="#square"></use></svg></li>
			    	<li><svg><use xlink:href="#bafta"></use></svg></li>
			    	<li><svg><use xlink:href="#game"></use></svg></li>
			    	<li><svg><use xlink:href="#argos"></use></svg></li>
			    	<li><svg><use xlink:href="#ctm"></use></svg></li>
			    	<li><svg><use xlink:href="#ea"></use></svg></li>
			    	<li><svg><use xlink:href="#bbc"></use></svg></li>
			    	<li><svg><use xlink:href="#climax"></use></svg></li>
			    </ul>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
