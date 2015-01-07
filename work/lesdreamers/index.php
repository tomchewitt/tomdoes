<?php
$page_title = "LESDREAMERS";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="lesdreamers" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/lesdreamers/hero.jpg">
				<header class="page-header">
					<h1 class="title">LESDREAMERS</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Wordpress Development</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">...</p>
			</section>
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Les Dreamers
					</li>
					<li>
						<span class="header">ROLE:</span><br>Developer
					</li>
					<li>
						<span class="header">LINK:</span><br><a target="_blank" href="http://lesdreamers.com">http://lesdreamers.com</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/01.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/02.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/03.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/04.jpg"></li>
				</ul>
			</section>

			<section class="block palette three-colors">
				<ul>
					<li class="color-1"></li>
					<li class="color-2"></li>
					<li class="color-3"></li>
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
