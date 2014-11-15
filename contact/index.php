<?php
$page_title = "CONTACT";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content contact" data-pageid="contact">

			<h1 class="main">
				<span class="word">CONTACT</span>
				<span class="icon"><svg><use xlink:href="#nav-contact"></use></svg></span>
			</h1>

			<section class="block lead spaced">
		    	<p>I like hearing from other people. Whether you want to discuss working together or a job vacancy, have a question, need an answer, or just want to say hi - please use any of the below options. I promise I'll say something nice back.</p>
			</section>

			<section class="block spaced">
				<h1>LET'S CHAT</h1>

			    <ul class="social">
			    	<li class="noicon">hello <span class="accent">(at)</span> tomdoes <span class="accent">(dot)</span> digital</li>
			    	<li class="noicon">+44 (0) 7947 401 304</li>
			    	<li class="icon twitter"><a target="_blank" href=""><span class="word">Twitter</span><svg><use xlink:href="#twitter"></use></svg></a></li>
			    	<li class="icon linkedin"><a target="_blank" href=""><span class="word">LinkedIN</span><svg><use xlink:href="#linkedin"></use></svg></a></li>
			    	<li class="icon skype"><a target="_blank" href=""><span class="word">Skype</span><svg><use xlink:href="#skype"></use></svg></a></li>
			    	<li class="icon behance"><a target="_blank" href=""><span class="word">Behance</span><svg><use xlink:href="#behance"></use></svg></a></li>
			    	<li class="icon codepen"><a target="_blank" href=""><span class="word">Codepen</span><svg><use xlink:href="#codepen"></use></svg></a></li>
			    	<li class="icon github"><a target="_blank" href=""><span class="word">GitHub</span><svg><use xlink:href="#github"></use></svg></a></li>
			    </ul>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
