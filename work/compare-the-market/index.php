<?php
$page_title = "COMPARE THE MARKET";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="ctm-travel" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img class="blur" src="/asset/dist/img/work/ctm-travel/hero.jpg">
				<header class="page-header">
					<h1 class="title">COMPARE THE MARKET</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>UX &amp; Web Designer</p>
				</header>
			</section>

			<section class="block">
				<p class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<ul class="meta">
					<li>
						<span class="header">COMPANY:</span><br>Compare the Market
					</li>
					<li>
						<span class="header">ROLE:</span><br>UX &amp; Web Designer.
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<img src="/asset/dist/img/work/ctm-travel/01.jpg">
				<img src="/asset/dist/img/work/ctm-travel/03.jpg">
				<img src="/asset/dist/img/work/ctm-travel/02.jpg">
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
