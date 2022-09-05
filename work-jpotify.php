<?php
$page_title = 'Jpotify';
require('./templates/header.php');
?>

<!-- main content area -->
<main class="content float-right">

	<!-- single portfolio -->
	<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
		<h2 class="archive-header">Jpotify</h2>
		<!-- portfolio info -->
		<ul class="list-inline portfolio-info mb-0 mt-4">
			<!-- <li class="list-inline-item"><i class="icon-user"></i>Envato Market</li> -->
			<li class="list-inline-item"><i class="icon-calendar"></i>2019</li>
			<li class="list-inline-item"><i class="icon-social-github"></i><a href="https://github.com/radinshayanfar/Jpotify" target="_blank">Source code on GitHub</a></li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/jpotify.png" alt="Jpotify">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>A graphical music player, written in Java. <br>
			Has features like playlists and sharing music with friends over network.</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
