<?php
$page_title = "COLLECTIVE";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="collective" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/collective/hero.jpg">
				<header class="page-header">
					<h1 class="title">SQUARE ENIX COLLECTIVE</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>UX &amp; Concept design</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Square Enix Collective is a presentation and voting platform for showing off the best of Square Enix certified indie developers. I produced some branding and web design concepts for the initial idea behind the mechanic.</p>

				<p>My role was to take the idea and form a cohesive user journey through the various phases of the platform. I also created some initial logo/key-art variations and site designs. The project ended up taking a different approach in design but I am still proud of my initial ideas.</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Square Enix
					</li>
					<li>
						<span class="header">ROLE:</span><br>UX Designer
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="full"><img src="/asset/dist/img/work/collective/00.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/collective/01.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/collective/02.jpg"></li>
					<li class="full"><img src="/asset/dist/img/work/collective/04.jpg"></li>
					<li><img src="/asset/dist/img/work/collective/03.jpg"></li>
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
