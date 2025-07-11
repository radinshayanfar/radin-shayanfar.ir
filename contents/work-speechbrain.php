<?php
$page_title = 'Speaker Verification (ECAPA-TDNN model)';
require('./templates/header.php');
?>

<!-- main content area -->
<main class="content float-right">

	<!-- single portfolio -->
	<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
		<h2 class="archive-header">Speaker Verification</h2>
		<!-- portfolio info -->
		<ul class="list-inline portfolio-info mb-0 mt-4">
		<li class="list-inline-item"><i class="icon-calendar"></i>2022</li>
			<li class="list-inline-item"><i class="icon-user"></i>Sharif Data Analytics Lab.</li>
			<li class="list-inline-item"><i class="icon-social-github"></i><a href="https://github.com/Sharif-DAL-INEF-1400/Verification-and-Identification-Speechbrain" target="_blank">Source code on GitHub</a></li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/speechbrain.png" alt="Speaker Verification">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>
				This is part of the reasearch and development of an Intelligent Voice Commands Detection system at Sharif Data Analytics Lab. under supervision of Dr. S. A. Motahari.
				Throughout the work, my main task was the development of a speaker verification system, in which the authentication is done by user’s voice. For this purpose, I trained and evaluated the state‑of‑the‑art ECAPA‑TDNN model on Common Voice Persian dataset. The experiment results are available on GitHub.
			</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
