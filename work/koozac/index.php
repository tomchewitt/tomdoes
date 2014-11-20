<?php
$page_title = "KOOZAC";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="koozac" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/koozac/03.jpg">
				<header class="page-header">
					<h1 class="title">KOOZAC</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Mobile game UI design &amp; asset creation. Web design and build.</p>
				</header>
				<span class="pointer"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
			</section>
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Suqare Enix
					</li>
					<li>
						<span class="header">ROLE:</span><br>Mobile game UI/Web Designer &amp; Front-end Developer.
					</li>
					<li>
						<span class="header">LINK:</span><br><a href="http://koozac.com" target="_blank">http://koozac.com</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/koozac/02.jpg"></li>
					<li class="double">
						<img src="/asset/dist/img/work/koozac/03.jpg">
						<img src="/asset/dist/img/work/koozac/04.jpg">
					</li>
					<li class="curved"><img src="/asset/dist/img/work/koozac/01.jpg"></li>
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
