<?php
$page_title = 'RJBot';
require('./templates/header.php');
?>

<!-- main content area -->
<main class="content float-right">

	<!-- single portfolio -->
	<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
		<h2 class="archive-header">RJBot</h2>
		<!-- portfolio info -->
		<ul class="list-inline portfolio-info mb-0 mt-4">
			<!-- <li class="list-inline-item"><i class="icon-user"></i>Envato Market</li> -->
			<li class="list-inline-item"><i class="icon-calendar"></i>2019-2020</li>
			<li class="list-inline-item"><i class="icon-link"></i><a href="https://t.me/RJ_DownloadBot" target="_blank">View in Telegram</a></li>
			<li class="list-inline-item"><i class="icon-social-github"></i><a href="https://github.com/radinshayanfar/RJBot" target="_blank">Source code on GitHub</a></li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/rjbot.png" alt="RJBot">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>A Telegram bot for downloading media from RadioJavan.com website, written in PHP. <br>
				Supports almost all of Radio Javan media types such as musics, videos, albums and... .</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
