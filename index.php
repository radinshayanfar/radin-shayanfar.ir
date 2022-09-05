<?php
$page_title = '';
require('./templates/header.php');
?>


<!-- main content area -->
<main class="content float-right">

	<!-- section hero -->
	<section class="hero background parallax shadow-dark d-flex align-items-center" id="home" data-image-src="images/hero-bg900x600.jpg">
		<div class="cta mx-auto mt-2">
			<h1 class="mt-0 mb-4">I’m Radin Shayanfar<span class="dot"></span></h1>
			<p class="mb-4">Computer Engineering student at Amirkabir University of Technology</p>
			<a href="#works" class="hero-ln btn btn-default btn-lg mr-3"><i class="icon-grid"></i>View Portfolio</a>
			<div class="spacer d-md-none d-lg-none d-sm-none" data-height="10"></div>
			<a href="#contact" class="hero-ln btn btn-border-light btn-lg"><i class="icon-envelope"></i>Contact Me</a>
		</div>
		<div class="overlay"></div>
	</section>

	<!-- section about -->
	<section id="about" class="shadow-blue white-bg padding">
		<h3 class="section-title">About Me</h3>
		<div class="spacer" data-height="80"></div>

		<div class="row">
			<div class="col-md-3">
				<img src="images/me150x150.png" alt="about" />
			</div>
			<div class="col-md-9">
				<h2 class="mt-4 mt-md-0 mb-4">Hello,</h2>
				<p class="mb-0">
					I am Radin Shayanfar, a senior computer engineering student from Tehran, Iran. Over the last decade, I have developed a strong passion for computer science, especially machine learning, deep learning, computer vision, and speech processing. Currently, my main focus is computer vision and deep generative adversarial networks.
				</p>
				<p class="mb-0">
					Latest version of my full CV is available below (website contents are updated less frequently).
				</p>
				<div class="row my-4">
					<div class="col-md-6">
						<p class="mb-2">Name: <span class="text-dark">Radin Shayanfar</span></p>
						<p class="mb-0">Birthday: <span class="text-dark">28 October, 2000</span></p>
					</div>
					<div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
						<p class="mb-2">Location: <span class="text-dark">Tehran, Iran</span></p>
						<p class="mb-0">Email: <span class="text-dark"><a href="mailto:me@rshayanfar.ir">me@rshayanfar.ir</a></span></p>
					</div>
				</div>
				<a href="cv.pdf" class="btn btn-default mr-3"><i class="icon-cloud-download" target="_blank"></i>Download CV</a>
				<a href="#contact" class="btn btn-alt mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>Contact Me</a>
			</div>
		</div>
	</section>

	<!-- section skills -->
	<section id="skills" class="shadow-blue white-bg padding">
		<h3 class="section-title">My skills</h3>
		<div class="spacer" data-height="40"></div>
		
		<p class="mb-0">
			Currently, I primarily use Python and Jupyter Notebook for my regular projects and machine learning research. I basically use Keras, PyTorch, OpenCV, NumPy, and other similar libraries for that. Moreover, I have developed numerous websites and web APIs in the past few years using web languages and frameworks; HTML, CSS, PHP, Laravel, and Flask to name a few.
			I'm also familiar with C, Java, functional programming languages (like LISP, Racket, and ML), databases (such as MySQL and Redis), DevOps tools (Docker and Kubernetes), LaTeX, Git, and Photoshop. I have experience with parallelization tools (like OpenMP and CUDA) and Arduino programming too.
		</p>

		<div class="row mt-5">

			<div class="skills-container col-md-12">
				<h4 class="skills-item">Python</h4>
				<h4 class="skills-item">Keras, PyTorch, OpenCV</h4>
				<h4 class="skills-item">CUDA, OpenMP</h4>
				<h4 class="skills-item">PHP, Laravel</h4>
				<h4 class="skills-item">HTML, CSS, JavaScript</h4>
				<h4 class="skills-item">MySQL, Redis</h4>
				<h4 class="skills-item">C</h4>
				<h4 class="skills-item">Java</h4>
				<h4 class="skills-item">Lisp, Racket, ML</h4>
				<h4 class="skills-item">LaTeX</h4>
				<h4 class="skills-item">Docker, Kubernetes</h4>
			</div>

		</div>
	</section>

	<!-- section works -->
	<section id="works" class="shadow-blue white-bg padding">
		<h3 class="section-title">Portfolio</h3>
		<div class="spacer" data-height="80"></div>

		<!-- portfolio filter (desktop) -->
		<ul class="portfolio-filter list-inline">
			<li class="current list-inline-item" data-filter="*">All Projects</li>
			<li class="list-inline-item" data-filter=".ml">Machine Learning</li>
			<li class="list-inline-item" data-filter=".web">Web Development</li>
			<li class="list-inline-item" data-filter=".bot">Telgram Bot</li>
		</ul>

		<!-- portfolio filter (mobile) -->
		<div class="pf-filter-wrapper mb-4">
			<select class="portfolio-filter-mobile">
				<option value="*">All Projects</option>
				<option value=".ml">Machine Learning</option>
				<option value=".web">Web Development</option>
				<option value=".bot">Telgram Bot</option>
			</select>
		</div>

		<!-- portolio wrapper -->
		<div class="row portfolio-wrapper">

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item ml">
				<a href="work-gan.php">
					<div class="portfolio-item">
						<div class="details">
							<h4 class="title">Persian Handwritten Characters Generation</h4>
							<span class="term">GAN, Computer Vision</span>
						</div>
						<span class="plus-icon">+</span>
						<div class="thumb">
							<img src="images/gan_thumbnail.png" alt="Persian Handwritten Characters Generation" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item ml">
				<a href="work-speechbrain.php">
					<div class="portfolio-item">
						<div class="details">
							<h4 class="title">Speaker Verification</h4>
							<span class="term">Deep Learning, Speech Processing</span>
						</div>
						<span class="plus-icon">+</span>
						<div class="thumb">
							<img src="images/speechbrain_thumbnail.png" alt="Speaker Verification" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item web">
				<a href="work-habco.php">
					<div class="portfolio-item">
						<div class="details">
							<h4 class="title">Habco</h4>
							<span class="term">Laravel, REST API</span>
						</div>
						<span class="plus-icon">+</span>
						<div class="thumb">
							<img src="images/habco_thumbnail.png" alt="Habco" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
			</div>
			
			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item web">
				<a href="work-samcode.php">
					<div class="portfolio-item">
						<div class="details">
							<h4 class="title">SamCode</h4>
							<span class="term">Web Development</span>
						</div>
						<span class="plus-icon">+</span>
						<div class="thumb">
							<img src="images/samcode_thumbnail.png" alt="SamCode" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item bot">
				<a href="work-rjbot.php">
					<div class="portfolio-item">
						<div class="details">
							<h4 class="title">RJBot</h4>
							<span class="term">Telegram Bot</span>
						</div>
						<span class="plus-icon">+</span>
						<div class="thumb">
							<img src="images/rjbot_thumbnail.png" alt="RJBot" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
			</div>

			<!-- portfolio item -->
			<div class="col-md-4 col-sm-6 grid-item ml">
				<a href="work-captcha.php">
					<div class="portfolio-item">
						<div class="details">
							<h4 class="title">Captcha Solver</h4>
							<span class="term">Machine Learning</span>
						</div>
						<span class="plus-icon">+</span>
						<div class="thumb">
							<img src="images/captcha-solver_thumbnail.png" alt="Captcha Solver" />
							<div class="mask"></div>
						</div>
					</div>
				</a>
			</div>

		</div>
		
		<!-- more button -->
		<div class="load-more text-center mt-4">
			<a href="javascript:" class="btn btn-default"><i class="fas fa-circle-notch"></i> Load more</a>
			<!-- numbered pagination (hidden for infinite scroll) -->
			<ul class="portfolio-pagination list-inline d-none">
				<li class="list-inline-item">1</li>
				<li class="list-inline-item"><a href="works-2.html">2</a></li>
			</ul>
		</div>
	</section>

	<!-- section education -->
	<section id="education" class="shadow-blue white-bg padding">
		<h3 class="section-title">Experience</h3>
		<div class="spacer" data-height="80"></div>

		<!-- timeline -->
		<div class="timeline">
			<div class="entry">
				<div class="title">
					<span>2018 - 2023</span>
				</div>
				<div class="body">
					<h4 class="mt-0">Bachelor of Science</h4>
					<p>Studying Computer Engineering at Amirkabir University of Technology.</p>
				</div>
			</div>
			<div class="entry">
				<div class="title">
					<span>2014 - 2018</span>
				</div>
				<div class="body">
					<h4 class="mt-0">High School</h4>
					<p>Graduated from Allameh Helli 3 High School (NODET) in field of Mathematics and Physics.</p>
				</div>
			</div>
			<div class="entry">
				<div class="title">
					<span>2000</span>
				</div>
				<div class="body">
					<h4 class="mt-0">Born in Tehran</h4>
					<p></p>
				</div>
			</div>
			<span class="timeline-line"></span>
		</div>
	</section>

	<!-- section contact -->
	<section id="contact" class="shadow-blue white-bg padding">
		<h3 class="section-title">Get in touch</h3>
		<div class="spacer" data-height="80"></div>

		<div class="row">
			
			<div class="col-md-4 mb-4 mb-md-0">
				<!-- contact info -->
				<!-- <div class="contact-info mb-5">
					<i class="icon-phone"></i>
					<div class="details">
						<h5>Phone</h5>
						<span>+44 1632 960428</span>
					</div>
				</div> -->
				<div class="contact-info mb-5">
					<i class="icon-envelope"></i>
					<div class="details">
						<h5>Email address</h5>
						<span><a href="mailto:me@rshayanfar.ir">me@rshayanfar.ir</a></span>
					</div>
				</div>
				<div class="contact-info">
					<i class="icon-location-pin"></i>
					<div class="details">
						<h5>Location</h5>
						<span>Tehran, Iran</span>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<!-- Contact Form -->
				<form id="contact-form" class="contact-form" method="post" action="#contact">
					
					<div class="messages"></div>
					
					<div class="row">
						<div class="column col-md-6">
							<!-- Name input -->
							<div class="form-group">
								<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your name" required="required" data-error="Name is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						
						<div class="column col-md-6">
							<!-- Email input -->
							<div class="form-group">
								<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required" data-error="Email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="column col-md-12">
							<!-- Email input -->
							<div class="form-group">
								<input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Subject" required="required" data-error="Subject is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
				
						<div class="column col-md-12">
							<!-- Message textarea -->
							<div class="form-group">
								<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<div class="column col-md-12">
						<div class="form-group">
							This site is protected by reCAPTCHA and the Google
							<a href="https://policies.google.com/privacy">Privacy Policy</a> and
							<a href="https://policies.google.com/terms">Terms of Service</a> apply.
						</div>
					</div>

					<div id='recaptcha' class="g-recaptcha"
						data-sitekey="6LeYIcoZAAAAAH0_W8rAeV83ehkqGNin_U5C84DJ"
						data-callback="onSubmit"
						data-size="invisible"></div>
					
					<!-- AJAX will be here -->
					<div id="submit-result">
						<button name="submit" id="submit" value="Submit" class="btn btn-default"><i class="icon-paper-plane"></i>Send Message</button><!-- Send Button -->
					</div>

				</form>
				<!-- Contact Form end -->
			</div>

		</div>

	</section>
	
</main>

<?php
require('./templates/footer.php');
?>
