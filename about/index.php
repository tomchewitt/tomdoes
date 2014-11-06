<?php
$page_title = "ABOUT";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content about">

			<h1 class="main">
				<span class="word">ABOUT</span>
				<span class="icon"><svg><use xlink:href="/asset/dist/img/svg-defs.svg#nav-about"></use></svg></span>
			</h1>

		    <section class="block lead">
		    	<h1>SHAPES + CODE.<br>
		    	MUSIC + GAMES.<br>
		    	BASKETBALL + PIZZA.</h1>
			</section>

			<section class="block">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sunt iusto voluptas quia eum aliquid maxime, itaque sapiente perspiciatis labore saepe dolores dolorum officiis doloremque natus nostrum iste eveniet ea.</p>
			</section>

			<section class="block toolbox">
				<h1>TOOLBOX</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum mollitia accusamus. Est sequi maxime ad nostrum impedit assumenda laudantium quae voluptate dignissimos, numquam iusto mollitia eius! Nisi, sit, enim.</p>

				<h1>BONUS</h1>
				<p>after effects, premiere, flash, AS3, php, minimal mySql</p>
			</section>

			<section class="block">
				<h1>SOMETHING, SOMETHING, DANGERZONE!</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum mollitia accusamus. Est sequi maxime ad nostrum impedit assumenda laudantium quae voluptate dignissimos, numquam iusto mollitia eius! Nisi, sit, enim.</p>

				<ul class="social">
			    	<li class="icon behance"><a target="_blank" href=""><span class="word">Behance</span><svg><use xlink:href="/asset/dist/img/svg-defs.svg#behance"></use></svg></a></li>
			    	<li class="icon codepen"><a target="_blank" href=""><span class="word">Codepen</span><svg><use xlink:href="/asset/dist/img/svg-defs.svg#codepen"></use></svg></a></li>
			    	<li class="icon github"><a target="_blank" href=""><span class="word">GitHub</span><svg><use xlink:href="/asset/dist/img/svg-defs.svg#github"></use></svg></a></li>
			    </ul>				
			</section>

			<section class="block">
				<h1>SLAM DUNK</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum mollitia accusamus. Est sequi maxime ad nostrum impedit assumenda laudantium quae voluptate dignissimos, numquam iusto mollitia eius! Nisi, sit, enim.</p>				
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
