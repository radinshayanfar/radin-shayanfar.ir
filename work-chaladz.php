<?php
$page_title = 'Chaladz Design';
require('./templates/header.php');
?>

<!-- main content area -->
<main class="content float-right">

	<!-- single portfolio -->
	<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
		<h2 class="archive-header">Chaladz Design Backend</h2>
		<!-- portfolio info -->
		<ul class="list-inline portfolio-info mb-0 mt-4">
			<!-- <li class="list-inline-item"><i class="icon-user"></i>Envato Market</li> -->
			<li class="list-inline-item"><i class="icon-calendar"></i>2019</li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/chaladz.png" alt="Chaladz Design">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>Backend development of Chaldaz Design’s online shop, written in Laravel framework. <br>
				Has admin panel, cart, order tracking and other common features of an online shop.</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
