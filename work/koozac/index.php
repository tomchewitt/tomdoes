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

		<section class="content work" data-pageid="project">

			<h1 class="main">
				<span class="word">KOOZAC</span>
				<span class="icon"><svg><use xlink:href="/asset/dist/img/svg-defs.svg#nav-work"></use></svg></span>
			</h1>

			<section class="hero">
				<div class="project-lead">
					<img class="blur" src="/asset/dist/img/work/koozac/01a.jpg">
					<img src="/asset/dist/img/work/koozac/01a.jpg">
				</div>
			</section>

			<section class="block lead">
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit voluptatem cum dolores iusto, illo vero dignissimos ipsa aperiam, eaque, vitae blanditiis earum sit quibusdam dolor cumque tempora beatae saepe totam!</p>
				<aside class="meta">
					
				</aside>
			</section>

		</section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
