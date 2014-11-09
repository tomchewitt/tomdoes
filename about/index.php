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

		<section class="content about" data-pageid="about">

			<h1 class="main">
				<span class="word">ABOUT</span>
				<span class="icon"><svg><use xlink:href="#nav-about"></use></svg></span>
			</h1>

		    <section class="block lead hero">
		    	<div class="full">
					<img src="/asset/dist/img/bg.jpg">
					<span class="gradient"></span>
				</div>
		    	<h1>SHAPES + CODE.<br>
		    	MUSIC + GAMES.<br>
		    	BASKETBALL + PIZZA.</h1>
			</section>

			<section class="block">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sunt iusto voluptas quia eum aliquid maxime, itaque sapiente perspiciatis labore saepe dolores dolorum officiis doloremque natus nostrum iste eveniet ea.</p>
			</section>

			<section class="block toolbox">
				<h1>TOOLBOX</h1>

				<ul class="tools">
					<li class="icon"><span class="word">Photoshop</span><svg><use xlink:href="#photoshop"></use></svg></li>
					<li class="icon"><span class="word">Illustrator</span><svg><use xlink:href="#illustrator"></use></svg></li>
					<li class="icon"><span class="word">HTML5</span><svg><use xlink:href="#html5"></use></svg></li>
					<li class="icon"><span class="word">CSS3</span><svg><use xlink:href="#css3"></use></svg></li>
					<li class="icon"><span class="word">Javascript</span><svg><use xlink:href="#javascript"></use></svg></li>
					<li class="icon"><span class="word">jQuery</span><svg><use xlink:href="#jquery"></use></svg></li>
					<li class="icon"><span class="word">SASS</span><svg><use xlink:href="#sass"></use></svg></li>
					<li class="icon"><span class="word">Grunt</span><svg><use xlink:href="#grunt"></use></svg></li>
					<li class="icon"><span class="word">Github</span><svg><use xlink:href="#githubfull"></use></svg></li>
				</ul>

				<h1>BONUS</h1>
				<p>after effects, premiere, flash, AS3, php, minimal mySql</p>
			</section>

			<section class="block">
				<h1>DANGERZONE!</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum mollitia accusamus. Est sequi maxime ad nostrum impedit assumenda laudantium quae voluptate dignissimos, numquam iusto mollitia eius! Nisi, sit, enim.</p>

				<ul class="social">
			    	<li class="icon behance"><a target="_blank" href=""><span class="word">Behance</span><svg><use xlink:href="#behance"></use></svg></a></li>
			    	<li class="icon codepen"><a target="_blank" href=""><span class="word">Codepen</span><svg><use xlink:href="#codepen"></use></svg></a></li>
			    	<li class="icon github"><a target="_blank" href=""><span class="word">GitHub</span><svg><use xlink:href="#github"></use></svg></a></li>
			    </ul>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas eum mollitia accusamus. Est sequi maxime ad nostrum impedit assumenda laudantium quae voluptate dignissimos, numquam iusto mollitia eius! Nisi, sit, enim.</p>				
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
