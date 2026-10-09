<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | Board of Regents</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="About.css">
</head>
<body>
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>

	<!-- TOP UTILITY BAR -->
	<div class="utility-bar">
		<div class="utility-inner">
			<div class="utility-links">
				<a href="e-services.php">E-SERVICES</a>
				<a href="student-life.php">STUDENT LIFE</a>
				<a href="community-extension.php">COMMUNITY EXTENSION SERVICES</a>
				<a href="admission.php">ADMISSION</a>
				<a href="news.php">NEWS</a>
				<a href="alumni.php">ALUMNI</a>
				<a href="careers.php">CAREERS</a>
			</div>
		</div>
	</div>

	<!-- BRAND HEADER -->
	<header class="brand-header">
		<div class="container brand-inner">
			<!-- LOGOS -->
			<div class="brand-logos">
				<img src="images/BagongPilipinas.png" alt="Bagong Pilipinas">
				<img src="images/Caloocan.png" alt="Caloocan City">
				<img src="images/UCC2.png" alt="University of Caloocan City seal">
			</div>

			<!-- MAIN NAVIGATION -->
			<nav class="main-nav" id="mainNav">
				<div class="nav-inner">
					<div class="nav-links">
						<a href="index.php">HOME</a>

						<!-- ABOUT DROPDOWN -->
						<div class="nav-dropdown">
							<button type="button" class="active">
								ABOUT <span>⌄</span>
							</button>
							<div class="dropdown-menu">
								<a href="about.php">About UCC</a>
								<a href="board-of-regents.php" class="current-page">Board of Regents</a>
								<a href="executive-officials.php">Executive Officials</a>
							</div>
						</div>

						<!-- ACADEMICS DROPDOWN -->
						<div class="nav-dropdown">
							<button type="button">
								ACADEMICS <span>⌄</span>
							</button>
							<div class="dropdown-menu academics-menu">
								<a href="business-accountancy.php">College of Business and Accountancy</a>
								<a href="criminal-justice.php">College of Criminal Justice Education</a>
								<a href="education.php">College of Education</a>
								<a href="engineering.php">College of Engineering</a>
								<a href="law.php">College of Law</a>
								<a href="liberal-arts-sciences.php">College of Liberal Arts and Sciences</a>
								<a href="graduate-school.php">Graduate School</a>
							</div>
						</div>

						<a href="campus.php">CAMPUS</a>
						<a href="contacts.php">CONTACTS</a>
					</div>

					<!-- SEARCH -->
					<form class="search-box" onsubmit="return false;">
						<input type="search" placeholder="Search..." aria-label="Search UCC">
						<button type="submit" aria-label="Search">⌕</button>
					</form>
				</div>
			</nav>

			<img class="am-logo" src="images/AM-LOGO.png" alt="Aksyon at Malasakit">
		</div>
	</header>

	<!-- BOARD OF REGENTS PAGE -->
	<main class="board-page">
		<section class="board-hero">
			<div class="container board-hero-content">
				<div class="board-eyebrow">
					<span>UCC LEADERSHIP</span>
					<i></i>
				</div>
				<h1>CHAIRMAN OF THE BOARD OF REGENTS</h1>
			</div>
		</section>

		<!-- CHAIRMAN OF THE BOARD -->
		<section class="chairman-section">
			<div class="container">
				<div class="chairman-card">
					<div class="chairman-photo">
						<img src="images/ALONG.png" alt="Hon. Dale Gonzalo Along R. Malapitan">
					</div>

					<!-- CHAIRMAN INFORMATION -->
					<div class="chairman-content">
						<div class="chairman-copy">
							<h2>
								Hon. Dale Gonzalo
								<span>"ALONG" R. MALAPITAN</span>
							</h2>
							<h3>City Mayor</h3>
							<div class="chairman-line"></div>
							<p class="chairman-position">Chairperson, Board of Regents</p>
							<p>
								Mayor Dale Gonzalo “Along” Malapitan is the
								25th local chief executive of the historic
								City of Caloocan and the Chairman of the
								Board of Regents of the University of
								Caloocan City (UCC).
							</p>
							<a href="#" class="chairman-button" data-modal-trigger="chairman-corner">
								CHAIRMAN'S CORNER
								<span>→</span>
							</a>
						</div>
						<div class="chairman-decoration"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- MEMBERS OF THE BOARD OF REGENTS -->
		<section class="regents-section">
			<div class="container">
				<div class="regents-heading">
					<div class="regents-heading-line"></div>
					<h2>MEMBERS OF THE BOARD OF REGENTS</h2>
					<div class="regents-heading-line"></div>
				</div>

				<!-- BOARD MEMBERS GRID -->
				<div class="regents-grid">
					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-NAS.png" alt="Atty. Jessamine Jared S. Nas">
							<span class="regent-number">1</span>
						</div>
						<div class="regent-role">VICE CHAIRMAN</div>
						<div class="regent-info">
							<h3>Atty. Jessamine Jared S. Nas</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-CIEGO.png" alt="EnP. Aurora C. Ciego, DPA">
							<span class="regent-number">2</span>
						</div>
						<div class="regent-role">CITY ADMINISTRATOR</div>
						<div class="regent-info">
							<h3>EnP. Aurora C. Ciego, DPA</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-CAMINA.png" alt="Atty. Michael Arthur Camina">
							<span class="regent-number">3</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Atty. Michael Arthur Camina</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-CUNANAN.png" alt="Hon. Carolyn C. Cunanan">
							<span class="regent-number">4</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Hon. Carolyn C. Cunanan</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-PRADO.png" alt="Hon. Atty. Patrick L. Prado">
							<span class="regent-number">5</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Hon. Atty. Patrick L. Prado</h3>
							<small>Majority Floor Leader / Caloocan City Council</small>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-LOPEZ.png" alt="Engr. Wenald H. Lopez, PhD">
							<span class="regent-number">6</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Engr. Wenald H. Lopez, PhD</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-JUNIO.png" alt="Mr. John Nicklaus S. Junio">
							<span class="regent-number">7</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Mr. John Nicklaus S. Junio</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-DANTAY.png" alt="Rodrigo M. Dantay Jr., DPA, EdD">
							<span class="regent-number">8</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Rodrigo M. Dantay Jr., DPA, EdD</h3>
							<small>DPA, EdD</small>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-CARANDANG.png" alt="Cecille G. Carandang, CESO VI">
							<span class="regent-number">9</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Cecille G. Carandang, CESO VI</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-REYES.png" alt="Dionisio S. Reyes, DPA, LPT">
							<span class="regent-number">10</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Dionisio S. Reyes, DPA, LPT</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-MACKAY.png" alt="Dr. Eloisa P. Mackay">
							<span class="regent-number">11</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Dr. Eloisa P. Mackay</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-RABANAL.png" alt="Mr. Paul Daniel C. Rabanal">
							<span class="regent-number">12</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Mr. Paul Daniel C. Rabanal</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-GARCIA.png" alt="Ms. Princess Garcia">
							<span class="regent-number">13</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Ms. Princess Garcia</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-YAKIT.png" alt="Ms. Leslie Anne C. Yakit">
							<span class="regent-number">14</span>
						</div>
						<div class="regent-role">MEMBER</div>
						<div class="regent-info">
							<h3>Ms. Leslie Anne C. Yakit</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-GONZALES.png" alt="Ms. Violeta Y. Gonzales">
							<span class="regent-number">15</span>
						</div>
						<div class="regent-role">EX-OFFICIO MEMBER</div>
						<div class="regent-info">
							<h3>Ms. Violeta Y. Gonzales</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>

					<article class="regent-card">
						<div class="regent-photo">
							<img src="images/Board-of-Regents/BOR-YEE.png" alt="Catlleya C. Yee, PhD-ELL, LPT">
							<span class="regent-number">16</span>
						</div>
						<div class="regent-role">SECRETARY</div>
						<div class="regent-info">
							<h3>Catlleya C. Yee, PhD-ELL, LPT</h3>
							<span>BOARD MEMBER</span>
						</div>
					</article>
				</div>
			</div>
		</section>
	</main>

	<!-- CHAIRMAN'S CORNER MODAL -->
	<div class="student-modal" id="chairmanModal" aria-hidden="true">
		<div class="student-modal-backdrop" data-modal-close></div>
		<div class="student-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="chairmanModalTitle">
			<div class="student-modal-header">
				<div class="student-modal-heading">
					<span class="student-modal-label">UCC LEADERSHIP</span>
					<h2 id="chairmanModalTitle">THE UNIVERSITY CHAIRMAN</h2>
				</div>
				<button type="button" class="student-modal-close" data-modal-close aria-label="Close modal">×</button>
			</div>

			<div class="student-modal-body">
				<div class="student-modal-accent"></div>

				<div class="chairman-modal-profile">
					<div class="chairman-modal-image">
						<img src="images/ALONG.png" alt="Mayor Dale Gonzalo “Along” Malapitan">
					</div>

					<div class="chairman-modal-content">
						<h3>Mayor Dale Gonzalo “Along” Malapitan</h3>
						<span class="chairman-modal-position">Chairman of the Board of Regents</span>

						<p>
							Mayor Dale Gonzalo “Along” Malapitan is the 25th local chief executive of the historic City of Caloocan and the Chairman of the Board of Regents of the University of Caloocan City (UCC).
						</p>

						<p>
							With over 15 years of public service, he began his career as Barangay Chairman of Barangay 137. He later served as a council of the 1st District and as President of Caloocan City’s Liga ng mga Barangay.
						</p>

						<p>
							During this time, he led the Sangguniang Panlungsod in passing landmark ordinances that prioritized improving the city’s education system. These included providing free tuition for students at all UCC campuses and establishing the first law school in CAMANAVA, the University of Caloocan College of Law.
						</p>

						<p>
							As a two-term Representative of the 1st District, he authored several notable laws, including one that increased the bed capacity of Dr. Jose Rodriguez Memorial Hospital to 800, and another that established the 3rd District.
						</p>

						<p>
							Before his term ended, he advocated for the establishment of the Polytechnic University of the Philippines (PUP) Caloocan North.
						</p>

						<p>
							Now, in his first term as City Mayor, the City Government of Caloocan has strengthened its focus on providing a wide range of educational and career opportunities for all Batang Kankaloo. This effort is highlighted by the inauguration of new programs at the UCC College of Engineering and various initiatives aimed at safeguarding the interests of the youth through health and public safety programs.
						</p>

						<p>
							He continues to live by his longtime motto, Aksyon at Malasakit, striving to make the entire city thrive under a progressive governance that puts the needs of the people above all else, emphasizing swift, direct, and lasting government action.
						</p>

						<p>
							Mayor Along is married to Aubrey N. Malapitan and has three children, Alexis Adrienne, Oscar Dale, and Gabrielle.
						</p>
					</div>
				</div>
			</div>

			<div class="student-modal-footer"></div>
		</div>
	</div>

	<!-- FOOTER -->
	<footer id="contact">
		<div class="footer-building">
			<img src="images/FOOTER.jpg" alt="University of Caloocan City Building">
		</div>

		<div class="container footer-content">
			<div class="footer-contact">
				<img src="images/UCC2.png" alt="University of Caloocan City" class="footer-logo">

				<div class="footer-contact-info">
					<h3>University of Caloocan City</h3>

					<div class="contact-item">
						<i data-lucide="map-pin"></i>
						<p>Biglang Awa Street, Cor 11th Ave Catleya,<br>Caloocan, 1400 Metro Manila, Philippines</p>
					</div>

					<div class="contact-item">
						<i data-lucide="phone"></i>
						<p>8528-4654</p>
					</div>

					<div class="contact-item">
						<i data-lucide="mail"></i>
						<p>admin@ucc-caloocan.edu.ph</p>
					</div>
				</div>

				<!-- SOCIAL MEDIA -->
				<div class="footer-socials">
					<a href="#" aria-label="Facebook">
						<i data-lucide="facebook"></i>
					</a>
					<a href="#" aria-label="Instagram">
						<i data-lucide="instagram"></i>
					</a>
					<a href="#" aria-label="YouTube">
						<i data-lucide="youtube"></i>
					</a>
				</div>
			</div>

			<!-- INQUIRY FORM -->
			<div class="footer-links">
				<h4>INQUIRY FORM</h4>
				<a href="#">Student Affairs</a>
				<a href="#">Academic Office</a>
				<a href="#">Accounting Matters</a>
				<a href="#">Alumni Association</a>
				<a href="#">Daily Consultation</a>
				<a href="#">Graduate School</a>
			</div>

			<!-- SERVICES -->
			<div class="footer-links">
				<h4>SERVICES</h4>
				<a href="#">Library</a>
				<a href="#">Guidance and Counselling</a>
				<a href="#">Registrar's Office</a>
				<a href="#">Alumni Connect</a>
				<a href="#">Faculty Portal</a>
				<a href="#">Student Portal</a>
			</div>
		</div>

		<!-- FOOTER BOTTOM -->
		<div class="container footer-bottom">
			<span>© 2026 University of Caloocan City. All Rights Reserved.</span>

			<div class="footer-legal">
				<a href="#">Privacy Policy</a>
				<a href="#">Terms of Use</a>
				<a href="#">Accessibility</a>
			</div>
		</div>
	</footer>

	<button class="back-top" id="backTop" aria-label="Back to top">↑</button>

	<script src="script.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		lucide.createIcons();

		const chairmanModal = document.getElementById("chairmanModal");

		function openChairmanModal() {
			chairmanModal.classList.add("active");
			chairmanModal.setAttribute("aria-hidden", "false");
			document.body.classList.add("student-modal-open");
		}

		function closeChairmanModal() {
			chairmanModal.classList.remove("active");
			chairmanModal.setAttribute("aria-hidden", "true");
			document.body.classList.remove("student-modal-open");
		}

		document.querySelectorAll('[data-modal-trigger="chairman-corner"]').forEach(button => {
			button.addEventListener("click", function(event) {
				event.preventDefault();
				event.stopPropagation();
				openChairmanModal();
			});
		});

		chairmanModal.addEventListener("click", function(event) {
			if (event.target.closest("[data-modal-close]")) {
				closeChairmanModal();
			}
		});

		document.addEventListener("keydown", function(event) {
			if (event.key === "Escape" && chairmanModal.classList.contains("active")) {
				closeChairmanModal();
			}
		});
	</script>
</body>
</html>
