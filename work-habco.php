<?php
$page_title = 'Habco';
require('./templates/header.php');
?>

<!-- main content area -->
<main class="content float-right">

	<!-- single portfolio -->
	<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
		<h2 class="archive-header">Habco API</h2>
		<!-- portfolio info -->
		<ul class="list-inline portfolio-info mb-0 mt-4">
			<!-- <li class="list-inline-item"><i class="icon-user"></i>Envato Market</li> -->
			<li class="list-inline-item"><i class="icon-calendar"></i>2021</li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/habco.png" alt="Habco Design">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>
				Development of a REST API for Habco (a Canadian startup) application, a medical application for patients, doctors, pharmacists, and nurses.
				In habco, patients can choose doctors and nurses. The chosen doctors can write prescriptions for the patient and the nurses can write instructions for them. Patients can also send prescriptions to pharmacies and track its status. There’s also a drug stock management panel for pharmacists.
				The API is written is PHP, using Laravel framework. It uses SMS code verification for authentication.
			</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
