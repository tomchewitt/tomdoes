<?php
$page_title = "Index page";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include "asset/dist/inc/header.php";
	include "asset/dist/inc/nav.php";
}
?>

		<section class="content home" data-pageid="home">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/home-hero.jpg"> 
				<header class="page-header">
					<h1 class="title">TOM HEWITT</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>UX. DESIGN. DEVELOP</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block feed">
			    <h1>LATEST</h1>
					<section class="projects lead">
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
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include "asset/dist/inc/footer.php";

}
