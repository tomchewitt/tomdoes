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
				<img class="blur" src="/asset/dist/img/bg.jpg">
				<header class="page-header">
					<h1 class="title">TOM HEWITT</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>UX. DESIGN. DEVELOP</p>
				</header>
			</section>

			<section class="block">
			    <h1>FEED</h1>

				<div class="projects hero">

					<section class="best">
						<ul>
							<li class="nav-project">
								<a class="ajax-nav" href="koozac/" data-pageid="project">
									<img src="/asset/dist/img/bg.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">KOOZAC</span>
										<span class="subtext">Mobile game UI &amp; Web</span>
									</h2>
								</a>
							</li>
							<li class="nav-project">
								<a class="ajax-nav" href="heroes-and-generals/" data-pageid="project">
									<img src="/asset/dist/img/bg.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">HEROES &amp; GENERALS</span>
										<span class="subtext">Web design &amp; build</span>
									</h2>
								</a>
							</li>
							<li class="nav-project">
								<a class="ajax-nav" href="compare-the-market/" data-pageid="project">
									<img src="/asset/dist/img/bg.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">COMPARE THE MARKET</span>
										<span class="subtext">UX &amp; Design</span>
									</h2>
								</a>
							</li>
						</ul>
					</section>
				</div>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include "asset/dist/inc/footer.php";

}
