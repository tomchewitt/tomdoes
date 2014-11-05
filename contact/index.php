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

			<h1>
				<span class="word">CONTACT</span>
				<span class="icon"><svg><use xlink:href="/asset/dist/img/svg-defs.svg#nav-contact"></use></svg></span>
			</h1>

			<div class="block">
		    	<p>I like hearing from other people. Whether you want to discuss working together, have a job vacancy, have a question, need an answer, want to say hi, or just have a chat - please use any of the below options. I promise I’ll say something nice back.</p>
			</div>

		    <h2>LET'S CHAT...</h2>

		    <ul>
		    	<li>hello (at) tomdoes (dot) digital</li>
		    	<li>+44 (0) 7947 401 304</li>
		    	<li>LinkedIN</li>
		    	<li>Twitter</li>
		    	<li>Skype</li>
		    	<li>Behance</li>
		    	<li>Codepen</li>
		    	<li>GitHub</li>		    	
		    </ul>

		    <h2>THANKS &amp; HAVE A NICE DAY!</h2>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
