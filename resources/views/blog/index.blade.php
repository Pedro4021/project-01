<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>URIEL BLOG</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="{{route('generic')}}">INFORMACION PERSONAL</a></li>
							<li><a href="{{route('elements')}}">INFORMACION ESCOLAR</a></li>
							<li><a href="#two">AUTOBIOGRAFIA</a></li>
							
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>URIEL BLOG</h1>
							
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Leer mas</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>	Nombre: {{$uriel->nombre}}
									apellido: {{$uriel->apellidop}}

									<p> ApellidoM: {{$uriel->apellidom}}</p>
</p>

</p></h2>
									
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2></h2>
									<p>nacimiento: {{$uriel->nacimiento}}
										Lugar de nacimiento:  {{$uriel->lugardenacimiento}}
									</p>
									<ul class="actions">
										
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Papa: {{$uriel->papa}}
										Mama: {{$uriel->mama}}
										Hermano: {{$uriel->hermano}}

									</h2>
										<ul class="actions">
									
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
						<div class="features">
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>PRimaria:{{$uriel->primaria}}</h3>
										</section>
								<section>
									<span class="icon solid major fa-lock"></span>
									<h3>Secundaria: {{$uriel->secundaria}}</h3>
										</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>PReparatoria:  {{$uriel->prepa}}</h3>
									</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Universidad: {{$uriel->universidad}}</h3>
								</section>
								
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>