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

		<section class="content contact">

			<h1 class="main">
				<span class="word">CONTACT</span>
				<span class="icon"><svg><use xlink:href="/asset/dist/img/svg-defs.svg#nav-contact"></use></svg></span>
			</h1>

			<section class="block lead">
		    	<p>I like hearing from other people. Whether you want to discuss working together, have a job vacancy, have a question, need an answer, want to say hi, or just have a chat - please use any of the below options. I promise I’ll say something nice back.</p>
			</section>

			<section class="block">
				<h1>LET'S CHAT</h1>

			    <ul class="social">
			    	<li>hello (at) tomdoes (dot) digital</li>
			    	<li>+44 (0) 7947 401 304</li>
			    	<li class="icon linkedin"><a target="_blank" href="">LinkedIN</a></li>
			    	<li class="icon twitter"><a target="_blank" href="">Twitter</a></li>
			    	<li class="icon skype"><a target="_blank" href="">Skype</a></li>
			    	<li class="icon behance"><a target="_blank" href="">Behance</a></li>
			    	<li class="icon codepen"><a target="_blank" href="">Codepen</a></li>
			    	<li class="icon github"><a target="_blank" href="">GitHub</a></li>		    	
			    </ul>
				
			    <h2>THANKS &amp; HAVE A NICE DAY!</h2>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
