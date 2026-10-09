<?php
declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../app/Support/helper.php';

use Repo\EservRepository;
use Core\Database;

$repo = new EservRepository(Database::connect());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>University of Caloocan City | E-Services</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
</head>
<body>
	<!-- PAGE DOTS -->
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
				<a href="e-services.php" class="active">E-SERVICES</a>
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
			<!-- LEFT LOGOS -->
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
							<button type="button">
								ABOUT <span>⌄</span>
							</button>
							<div class="dropdown-menu">
								<a href="about.php" class="current-page">About UCC</a>
								<a href="board-of-regents.php">Board of Regents</a>
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

			<!-- RIGHT AM LOGO -->
			<img class="am-logo" src="images/AM-LOGO.png" alt="Aksyon at Malasakit">
		</div>
	</header>

	<!-- E-SERVICES MAIN CONTENT -->
	<main class="eservices-page">
		<div class="eservices-bg-shape eservices-shape-1"></div>
		<div class="eservices-bg-shape eservices-shape-2"></div>
		<div class="eservices-bg-shape eservices-shape-3"></div>

		<div class="eservices-container">
			<!-- CITY OF CALOOCAN -->
			<a href="https://caloocancity.gov.ph/" class="eservices-government-card" target="_blank" rel="noopener noreferrer">
				<div class="government-glow"></div>
				<div class="government-pattern"></div>

				<div class="government-content">
					<div class="government-logo-wrap">
						<img src="images/Caloocan.png" alt="City of Caloocan">
					</div>

					<div class="government-title">
						<h1>City of Caloocan</h1>
						<span>PUBLIC SERVICE</span>
					</div>

					<div class="government-line">
						<span></span>
					</div>

					<p>Official website of the City Government of Caloocan.</p>

				</div>

				<div class="city-skyline">
					<div class="building building-1"></div>
					<div class="building building-2"></div>
					<div class="building building-3"></div>
					<div class="building building-4"></div>
					<div class="building building-5"></div>
					<div class="building building-6"></div>
					<div class="city-bridge"></div>
				</div>
			</a>

			<!-- E-SERVICES CARDS -->
			<section class="eservices-grid">
                <?php foreach ($repo->fetchServices() ?? [] as $service): ?> 
                <a href="<?= e($service['url']) ?>" class="eservice-card" target="_blank" rel="noopener noreferrer">
					<div class="service-logo service-logo-ched">
                    <img src="<?= e('/admin/storage/uploads/' . $service['logo']) ?>" alt="<?= e($service['name']) ?>">
					</div>
                    <h2><?= e($service['name']) ?></h2>
                    <span class="service-category"><?= e($service['category']) ?></span>
					<div class="service-divider">
						<span></span>
					</div>
					<div class="service-button">
						<span>Visit Website</span>
						<span class="external-icon">↗</span>
					</div>
				</a>
                <?php endforeach; ?>
			</section>
		</div>
	</main>

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

				<!-- Social Media -->
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
	</script>
</body>
</html>
