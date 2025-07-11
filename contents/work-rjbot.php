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
			<!-- <li class="list-inline-item"><i class="icon-link"></i><a href="https://t.me/RJ_DownloadBot" target="_blank">View in Telegram</a></li> -->
			<li class="list-inline-item"><i class="icon-social-github"></i><a href="https://github.com/radinshayanfar/RJBot" target="_blank">Source code on GitHub</a></li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/rjbot.png" alt="RJBot">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>
				Development of a Telegram bot for searching and downloading media from the RadioJavan.com website, written in PHP.
				The bot supports almost all types of media such as music, video, album, and podcast.
				It was developed for the purpose of training OOP concepts.
			</p>
			<p>
				Unfortunately, I can't host the bot publicly on Telegram, due to copyright infringement. Use the source code on GitHub to host it by yourself.
			</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
