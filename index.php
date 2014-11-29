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
								<a class="ajax-nav" href="start-with-a-square/" data-pageid="project">
									<img src="/asset/dist/img/work/swas/hero.svg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">MY PORTFOLIO IS LIVE!</span>
										<span class="subtext">Read on startwithasquare.co.uk</span>
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
										<span class="word">DO I STILL NEED CREATIVE CLOUD?</span>
										<span class="subtext">Read on startwithasquare.co.uk</span>
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
										<span class="word">ARE YOU A DESIGNER OR DEVELOPER?</span>
										<span class="subtext">Read on startwithasquare.co.uk</span>
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
