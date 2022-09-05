<?php
$page_title = 'Generating Handwritten Persian Characters';
require('./templates/header.php');
?>

<!-- main content area -->
<main class="content float-right">

	<!-- single portfolio -->
	<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0">
		<h2 class="archive-header">Generating Handwritten Persian Characters with Generative Models</h2>
		<!-- portfolio info -->
		<ul class="list-inline portfolio-info mb-0 mt-4">
		<li class="list-inline-item"><i class="icon-calendar"></i>2022-2023</li>
			<li class="list-inline-item"><i class="icon-user"></i>Amirkabir University of Technology</li>
		</ul>
		<div class="spacer" data-height="40"></div>
		
		<!-- portfolio image -->
		<img src="images/gan.png" alt="Persian Handwritten Characters Generation">

		<!-- portfolio content -->
		<div class="portfolio-content mt-5">
			<h3>Overview</h3>
			<p>
				Analysis of the recent generative models ability to represent and reconstruct individual Persian handwritten characters shape.
				The models under study are GAN and its variations (like DCGAN and WGAN‑GP), VAE, and Real NVP (Normalizing Flows).
			</p>
			<p>
				This is my BSc. project under supervision of Prof. A. Nickabadi.
			</p>
		</div>
	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
