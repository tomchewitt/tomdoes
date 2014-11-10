<?php
$page_title = "HEROES & GENERALS";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="hng" class="content project" data-pageid="project">

			<h1 class="main">
				<span class="word">HEROES &amp; GENERALS</span>
				<span class="icon"><svg><use xlink:href="#nav-work"></use></svg></span>
			</h1>

			<section class="hero">
				<div class="gradient"></div>
				<img class="blur" src="/asset/dist/img/work/hng/hero.jpg">
				<div class="project-lead">
					<img src="/asset/dist/img/work/hng/hero.jpg">
				</div>
			</section>

			<section class="block">
				<p class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<aside class="meta">
					
				</aside>
			</section>

			<section class="img-wrap">
				<img src="/asset/dist/img/work/hng/01.jpg">
				<img src="/asset/dist/img/work/hng/04.jpg">
				<img src="/asset/dist/img/work/hng/02.jpg">
				<img src="/asset/dist/img/work/hng/05.jpg">
				<img src="/asset/dist/img/work/hng/03.jpg">
			</section>

			<section class="block palette">
				<div class="palette-wrap">
					<span class="color-1"></span>
					<span class="color-2"></span>
					<span class="color-3"></span>
					<span class="color-4"></span>
					<span class="color-5"></span>
				</div>
			</section>

		</section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
