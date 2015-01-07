<?php
$page_title = "Geodime";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="geodime" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/geodime/hero.svg">
				<header class="page-header">
					<h1 class="title">GEODIME</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Logo Design</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">I created the logo and mark for Geodime - a company who specialises in the application of high accuracy geomatics solutions. I took inspiration from some of the scans and 3D graphs of terrain that the company produces. The client were very happy with my initial approach and followed it through to completion.</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Geodime
					</li>
					<li>
						<span class="header">ROLE:</span><br>Designer
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="full"><img src="/asset/dist/img/work/geodime/01.svg"></li>
					<li class="full"><img src="/asset/dist/img/work/geodime/02.svg"></li>
					<li class="full"><img src="/asset/dist/img/work/geodime/03.svg"></li>
				</ul>
			</section>

			<section class="block palette two-colors">
				<ul>
					<li class="color-1"></li>
					<li class="color-2"></li>
				</ul>
			</section>

		</section>

		<section class="back-to-work">
			<a class="ajax-nav" href="../">SEE MORE WORK</a>
		</section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
