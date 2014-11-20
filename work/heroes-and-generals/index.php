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

			<section class="hero">
				<div class="gradient"></div>
				<img class="blur" src="/asset/dist/img/work/hng/hero.jpg">
				<header class="page-header">
					<h1 class="title">HEROES &amp; GENERALS</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Branding, Web design &amp; development</p>
				</header>
			</section>

			<section class="block">
				<p class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Suqare Enix
					</li>
					<li>
						<span class="header">ROLE:</span><br>Web Designer &amp; Front End Developer.
					</li>
				</ul>
			</section>
			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/hng/01.jpg"></li>
					<li class="double">
						<img src="/asset/dist/img/work/hng/02.jpg">
						<img src="/asset/dist/img/work/hng/03.jpg">
					</li>
					<li class="full"><img src="/asset/dist/img/work/hng/04.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/hng/06.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/hng/05.jpg"></li>
				</ul>
			</section>

			<section class="block palette five-colors">
				<ul>
					<li class="color-1"></li>
					<li class="color-2"></li>
					<li class="color-3"></li>
					<li class="color-4"></li>
					<li class="color-5"></li>
				</ul>
			</section>

		</section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
