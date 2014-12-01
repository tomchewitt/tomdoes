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
			    <h1>LATEST FROM THE WEB</h1>
					<section class="projects lead">
						<ul>
							<!-- SWAS -->
							<li id="swas" class="nav-project">
								<a target="_blank" href="http://startwithasquare.co.uk/my-new-portfolio-goes-live/" data-pageid="project">
									<img src="/asset/dist/img/work/swas/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">MY NEW PORTFOLIO IS LIVE!</span>
										<span class="subtext">Read on startwithasquare.co.uk</span>
									</h2>
								</a>
							</li>

							<!-- BH: SEC -->
							<li id="sec" class="nav-project">
								<a target="_blank" href="https://www.behance.net/gallery/21631129/Square-Enix-Collective" data-pageid="project">
									<img src="/asset/dist/img/feed/sec.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#behance"></use></svg></span>
									<h2>
										<span class="word">SQUARE ENIX COLLECTIVE</span>
										<span class="subtext">View on behance.com</span>
									</h2>
								</a>
							</li>

							<!-- CP: DRIPS -->
							<li id="drips" class="nav-project">
								<a target="_blank" href="http://codepen.io/tomchewitt/pen/RNWrve" data-pageid="project">
									<img src="/asset/dist/img/feed/drips.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#codepen"></use></svg></span>
									<h2>
										<span class="word">STRIPEY DRIPS</span>
										<span class="subtext">Inspect on codepen.io</span>
									</h2>
								</a>
							</li>

							<!-- CP: PYRAMID -->
							<li id="pyramid" class="nav-project">
								<a target="_blank" href="http://codepen.io/tomchewitt/pen/vbAGj" data-pageid="project">
									<img src="/asset/dist/img/feed/pyramid.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#codepen"></use></svg></span>
									<h2>
										<span class="word">3D LOGO PYRAMID</span>
										<span class="subtext">Inspect on codepen.io</span>
									</h2>
								</a>
							</li>

							<!-- CP: HOVERS -->
							<li id="hover" class="nav-project">
								<a target="_blank" href="http://codepen.io/tomchewitt/pen/KAmvo" data-pageid="project">
									<img src="/asset/dist/img/feed/hover.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#codepen"></use></svg></span>
									<h2>
										<span class="word">SWIRLY HOVER EFFECT</span>
										<span class="subtext">Inspect on codepen.io</span>
									</h2>
								</a>
							</li>

							<!-- BH: Cosplay -->
							<li id="cosplay" class="nav-project">
								<a target="_blank" href="https://www.behance.net/gallery/21709229/Final-Fantasy-XIV-Cosplay-Competition" data-pageid="project">
									<img src="/asset/dist/img/feed/cosplay.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#behance"></use></svg></span>
									<h2>
										<span class="word">FINAL FANTASY XIV: COSPLAY COMPETITION</span>
										<span class="subtext">View on behance.com</span>
									</h2>
								</a>
							</li>


							<!-- SWAS -->
							<li id="swas" class="nav-project">
								<a target="_blank" href="http://startwithasquare.co.uk/do-you-still-need-creative-cloud/" data-pageid="project">
									<img src="/asset/dist/img/work/swas/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">DO YOU STILL NEED CREATIVE CLOUD?</span>
										<span class="subtext">Read on startwithasquare.co.uk</span>
									</h2>
								</a>
							</li>

							<!-- BH: Anniversary -->
							<li id="anniversary" class="nav-project">
								<a target="_blank" href="https://www.behance.net/gallery/21628275/Anniversary" data-pageid="project">
									<img src="/asset/dist/img/feed/anniversary.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#behance"></use></svg></span>
									<h2>
										<span class="word">ANNIVERSARY</span>
										<span class="subtext">View on behance.com</span>
									</h2>
								</a>
							</li>

							<!-- CP: SPINNER -->
							<li id="spinner" class="nav-project">
								<a target="_blank" href="http://codepen.io/tomchewitt/pen/WbQwzo" data-pageid="project">
									<img src="/asset/dist/img/feed/spinner.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#codepen"></use></svg></span>
									<h2>
										<span class="word">PURE CSS ANIMATED SPINNER</span>
										<span class="subtext">Inspect on codepen.io</span>
									</h2>
								</a>
							</li>

							<!-- SWAS -->
							<li id="swas" class="nav-project">
								<a target="_blank" href="http://startwithasquare.co.uk/are-you-a-designer-or-a-developer/" data-pageid="project">
									<img src="/asset/dist/img/work/swas/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">ARE YOU A DESIGNER OR A DEVELOPER?</span>
										<span class="subtext">Read on startwithasquare.co.uk</span>
									</h2>
								</a>
							</li>

							<!-- BH: MENSA -->
							<li id="mensa" class="nav-project">
								<a target="_blank" href="https://www.behance.net/gallery/21619481/Mensa-Academy" data-pageid="project">
									<img src="/asset/dist/img/feed/mensa.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#behance"></use></svg></span>
									<h2>
										<span class="word">MENSA ACADEMY</span>
										<span class="subtext">View on behance.com</span>
									</h2>
								</a>
							</li>

							<!-- CP: FLIPBOOK -->
							<li id="flipbook" class="nav-project">
								<a target="_blank" href="http://codepen.io/tomchewitt/pen/gbardp" data-pageid="project">
									<img src="/asset/dist/img/feed/flipbook.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<span class="icon"><svg><use xlink:href="#codepen"></use></svg></span>
									<h2>
										<span class="word">FLIPBOOK STYLE CAROUSEL</span>
										<span class="subtext">Inspect on codepen.io</span>
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
