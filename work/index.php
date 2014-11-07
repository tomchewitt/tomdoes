<?php
$page_title = "WORK";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content work">

			<h1 class="main">
				<span class="word">WORK</span>
				<span class="icon"><svg><use xlink:href="/asset/dist/img/svg-defs.svg#nav-work"></use></svg></span>
			</h1>

			<section class="block lead">
				<nav class="nav-work">
					<ul>
						<li class="nav-best on">The Best</li>
						<li class="nav-rest">The Rest</li>
					</ul>
				</nav>

				<div class="projects">

					<section class="best">
						<ul>
							<li class="nav-project">
								<a class="ajax-work" href="koozac/">
									<img src="/asset/dist/img/bg.jpg">
									<span class="word">KOOZAC</span>
									<span class="subtext">Mobile game UI &amp; Web</span>
								</a>
							</li>
							<li class="nav-project"><a class="ajax-work" href="heroesandgenerals/">Heroes &amp; Generals</a></li>
							<li class="nav-project"><a class="ajax-work" href="koozac/">KZ</a></li>
							<li class="nav-project"><a class="ajax-work" href="heroesandgenerals/">HNG</a></li>
						</ul>
					</section>

					<section class="rest">
						<ul>
							<li class="nav-project"><a class="ajax-work" href="koozac/">KZ 2</a></li>
							<li class="nav-project"><a class="ajax-work" href="heroesandgenerals/">HNG 2</a></li>
						</ul>
					</section>

				</div>
				
			</section>
			
			<section class="block">
				
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
