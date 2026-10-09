<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UCC | College of Engineering</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="academics.css">
</head>
<body>
	<!-- PAGE DOTS -->
	<div class="page-dots" aria-hidden="true">
		<span class="dot-pattern dot-1"></span>
		<span class="dot-pattern dot-2"></span>
		<span class="dot-pattern dot-3"></span>
		<span class="dot-pattern dot-4"></span>
	</div>

	<!-- UTILITY BAR -->
	<div class="utility-bar">
		<div class="utility-inner">
			<div class="utility-links">
				<a href="#">E-SERVICES</a>
				<a href="#">STUDENT LIFE</a>
				<a href="#">COMMUNITY &amp; EXTENSION SERVICES</a>
				<a href="#">ADMISSION</a>
				<a href="#">NEWS</a>
				<a href="#">ALUMNI</a>
				<a href="#">CAREERS</a>
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

						<!-- ABOUT -->
						<div class="nav-dropdown">
							<button type="button">ABOUT <span>⌄</span></button>
							<div class="dropdown-menu">
								<a href="about.php">About UCC</a>
								<a href="board-of-regents.php">Board of Regents</a>
								<a href="executive-officials.php">Executive Officials</a>
							</div>
						</div>

						<!-- ACADEMICS -->
						<div class="nav-dropdown">
							<button type="button" class="active">ACADEMICS <span>⌄</span></button>
							<div class="dropdown-menu academics-menu">
								<a href="business-accountancy.php">College of Business and Accountancy</a>
								<a href="criminal-justice.php">College of Criminal Justice Education</a>
								<a href="education.php">College of Education</a>
								<a href="engineering.php" class="current-page">College of Engineering</a>
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

	<!-- COLLEGE OF ENGINEERING -->
	<main class="ccje-page coe-page">
		<section class="cba-hero">
			<div class="cba-building">
				<img src="images/FOOTER.jpg" alt="">
			</div>
			<div class="cba-hero-inner">
				<div class="cba-dean">
					<div class="cba-dean-photo">
						<img src="https://ucc-caloocan.edu.ph/uploads/colleges/collegeofengineering_dean.png" alt="Engr. Wenald H. Lopez, RECE, PhD">
					</div>
					<h2>Engr. Wenald H. Lopez, RECE, PhD</h2>
					<p>Dean, College of Engineering</p>
				</div>
				<div class="cba-hero-content">
					<div class="cba-breadcrumb">
						<span>ACADEMICS</span>
						<b>/</b>
						<span>COLLEGE PROFILE</span>
						<div class="cba-breadcrumb-dots">
							<i></i>
							<i></i>
							<i></i>
							<span></span>
						</div>
					</div>
					<h1>
						COLLEGE OF
						<strong>ENGINEERING</strong>
					</h1>
				</div>
			</div>
			<div class="cba-hero-wave"></div>
		</section>

		<section class="ccje-about">
			<div class="container">
				<div class="cba-section-title">
					<h2>ABOUT THE COLLEGE</h2>
					<span></span>
				</div>

				<div class="cba-about-grid">
					<div class="cba-about-logo">
						<img src="https://ucc-caloocan.edu.ph/uploads/colleges/449599278_122137574288263173_7723356929386909159_n.png" alt="College of Engineering Logo">
					</div>
					<div class="cba-about-block">
						<div class="cba-quote">“</div>
						<h3>VISION</h3>
						<p>We envision UCC College of Engineering as: “A world-class, academically excellent, socially-impactful and industry-oriented engineering college recognized for its talented people, innovative technologies and continually improving processes that contribute to civic consciousness, ecological sustainability and better quality of life.”</p>
					</div>
					<div class="cba-about-block">
						<div class="cba-quote">“</div>
						<h3>MISSION</h3>
						<p>The mission of UCC College of Engineering is to build an academically excellent, professionally progressive, environmentally conscious, globally competitive, inclusive, diverse and responsible community through quality education, functional co-curricular activities, responsive community immersion programs, and continually improving management systems.</p>
					</div>
				</div>

				<div class="cba-about-grid" style="margin-top:30px;">
					<div class="cba-about-block">
						<div class="cba-quote">“</div>
						<h3>ADMISSION & RETENTION POLICY</h3>
						<ol style="position:relative; z-index:2; margin:0; padding-left:20px; color:#3b443f; font-size:13px; line-height:1.75;">
							<li>Applicants must meet UCC admission requirements and submit the required documents.;</li>
							<li>Applicants must have a GWA of 90% or higher.</li>
							<li>Applicants must pass the UCC Admission Test, including 50 additional items for Engineering.</li>
							<li>Qualified applicants will be screened by the program chairs based on their skills and interests.</li>
							<li>Approved applicants will be endorsed to the Registrar’s Office for enrollment.</li>
						</ol>
					</div>
					<div class="cba-about-block" style="grid-column:span 2;">
						<div class="cba-quote">“</div>
						<h3>HISTORY</h3>
						<P>In the heart of the largest barangay in North Caloocan, the University of Caloocan City – College of Engineering, located in Bagong Silang, emerged in 2023 as the first university for aspiring engineers. This newly established institution began its construction on June 14, 2021, under the leadership of Congressman Oca Malapitan and Mayor Along Malapitan. Following its completion, a visit from the Joint Regional Quality Assessment Team and Technical Panel for Engineering and Technology (RQAT-TPET) on October 27, 2023, evaluated UCC's adherence to CHED standards.
						As another school year approaches, UCC-COEng stands prepared to welcome its first batch of students, eagerly awaiting the beginning of its academic journey. Today, the university serves as a proud testament to the city's dedication to advancing education and its continual march towards progress.</P>
					</div>
				</div>
			</div>
		</section>

		<section class="cba-programs">
			<div class="container">
				<div class="cba-program-heading">
					<div class="cba-heading-line"></div>
					<h2>PROGRAMS</h2>
					<div class="cba-heading-dots">
						<i></i>
						<i></i>
						<i></i>
					</div>
					<p>Explore our engineering programs designed to develop competent, innovative, and globally competitive engineering professionals.</p>
				</div>

				<div class="cba-filters">
					<button class="active">ALL PROGRAMS</button>
					<button>COMPUTER ENGINEERING</button>
					<button>ELECTRICAL ENGINEERING</button>
					<button>ELECTRONICS ENGINEERING</button>
					<button>INDUSTRIAL ENGINEERING</button>
				</div>

				<div class="cba-program-grid">
					<article class="cba-program-card" data-number="01" data-program="computer-engineering">
						<div class="cba-program-number">01</div>
						<h3>Bachelor of Science in Computer Engineering</h3>
						<p>The Bachelor of Science in Computer Engineering (BSCpE) is a program that embodies the science and technology of design, development, implementation, maintenance, and integration of software and hardware components in modern computing systems and computer-controlled equipment.</p>
						<a href="#" class="program-read-more">Read more <span>→</span></a>
					</article>
					<article class="cba-program-card" data-number="02" data-program="electrical-engineering">
						<div class="cba-program-number">02</div>
						<h3>Bachelor of Science in Electrical Engineering</h3>
						<p>Electrical Engineering is a profession that involves the conceptualization, development, design, improvement, and application of safe, healthy, ethical, and economical ways of utilizing materials and energy in unit processes and operations for the benefit of society and the environment.</p>
						<a href="#" class="program-read-more">Read more <span>→</span></a>
					</article>
					<article class="cba-program-card" data-number="03" data-program="electronics-engineering">
						<div class="cba-program-number">03</div>
						<h3>Bachelor of Science in Electronics Engineering</h3>
						<p>Electronics Engineering integrates available and emerging technologies with knowledge of mathematics, natural, social, and applied sciences to conceptualize, design, and implement new, improved, or innovative electronic, computer, and communication systems, devices, goods, services, and processes.</p>
						<a href="#" class="program-read-more">Read more <span>→</span></a>
					</article>
					<article class="cba-program-card" data-number="04" data-program="industrial-engineering">
						<div class="cba-program-number">04</div>
						<h3>Bachelor of Science in Industrial Engineering</h3>
						<p>Industrial Engineering deals with the design, improvement, and installation of integrated systems of people, materials, information, equipment, monetary and energy resources to produce quality and cost-effective goods and services in a healthy and efficient work environment.</p>
						<a href="#" class="program-read-more">Read more <span>→</span></a>
					</article>
				</div>
			</div>
		</section>

		<section class="cba-quick-links">
			<div class="container cba-quick-grid">
				<a href="#">
					<div class="cba-quick-icon">
						<i data-lucide="graduation-cap"></i>
					</div>
					<div>
						<strong>EXPLORE A PROGRAM</strong>
						<span>Browse engineering programs</span>
					</div>
					<b>→</b>
				</a>
				<a href="#">
					<div class="cba-quick-icon">
						<i data-lucide="book-open"></i>
					</div>
					<div>
						<strong>READ MORE</strong>
						<span>Learn about COEng</span>
					</div>
					<b>→</b>
				</a>
				<a href="#">
					<div class="cba-quick-icon">
						<i data-lucide="building-2"></i>
					</div>
					<div>
						<strong>ACADEMIC OFFICE</strong>
						<span>Contact us</span>
					</div>
					<b>→</b>
				</a>
				<a href="#">
					<div class="cba-quick-icon">
						<i data-lucide="users-round"></i>
					</div>
					<div>
						<strong>ADMISSIONS</strong>
						<span>Start your engineering journey</span>
					</div>
					<b>→</b>
				</a>
			</div>
		</section>
	</main>

	<!-- PROGRAM MODAL -->
	<div class="program-modal" id="programModal" aria-hidden="true">
		<div class="program-modal-backdrop" data-modal-close></div>
		<div class="program-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="programModalTitle">
			<div class="program-modal-header">
				<div class="program-modal-heading">
					<span class="program-modal-label">ACADEMIC PROGRAM</span>
					<div class="program-modal-number" id="programModalNumber">01</div>
				</div>
				<button class="program-modal-close" type="button" aria-label="Close program details" data-modal-close>×</button>
			</div>
			<div class="program-modal-body">
				<div class="program-modal-accent"></div>
				<h2 id="programModalTitle"></h2>
				<div class="program-modal-section">
					<div class="program-modal-section-heading">
						<span class="program-modal-section-line"></span>
						<h3>VISION</h3>
					</div>
					<p id="programModalVision"></p>
				</div>
				<div class="program-modal-section">
					<div class="program-modal-section-heading">
						<span class="program-modal-section-line"></span>
						<h3>MISSION</h3>
					</div>
					<p id="programModalMission"></p>
				</div>
			</div>
			<div class="program-modal-footer">
				<span>UNIVERSITY OF CALOOCAN CITY</span>
			</div>
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

	<!-- SCRIPTS -->
	<script src="script.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		document.addEventListener("DOMContentLoaded",function(){
			lucide.createIcons();
			const modal=document.getElementById("programModal");
			const modalTitle=document.getElementById("programModalTitle");
			const modalVision=document.getElementById("programModalVision");
			const modalMission=document.getElementById("programModalMission");
			const modalNumber=document.getElementById("programModalNumber");
			const programLinks=document.querySelectorAll(".program-read-more");
			const closeButtons=document.querySelectorAll("[data-modal-close]");
			const programDescriptions={
				"computer-engineering":{
					title:"Bachelor of Science in Computer Engineering",
					vision:"We envision UCC College of Engineering as: “A world-class, academically excellent, socially-impactful and industry-oriented engineering college recognized for its talented people, innovative technologies and continually improving processes that contribute to civic consciousness, ecological sustainability and better quality of life.”",
					mission:"The mission of UCC College of Engineering is to build an academically excellent, professionally progressive, environmentally conscious, globally competitive, inclusive, diverse and responsible community through quality education, functional co-curricular activities, responsive community immersion programs, and continually improving management systems."
				},
				"electrical-engineering":{
					title:"Bachelor of Science in Electrical Engineering",
					vision:"We envision UCC College of Engineering as: “A world-class, academically excellent, socially-impactful and industry-oriented engineering college recognized for its talented people, innovative technologies and continually improving processes that contribute to civic consciousness, ecological sustainability and better quality of life.”",
					mission:"The mission of UCC College of Engineering is to build an academically excellent, professionally progressive, environmentally conscious, globally competitive, inclusive, diverse and responsible community through quality education, functional co-curricular activities, responsive community immersion programs, and continually improving management systems."
				},
				"electronics-engineering":{
					title:"Bachelor of Science in Electronics Engineering",
					vision:"We envision UCC College of Engineering as: “A world-class, academically excellent, socially-impactful and industry-oriented engineering college recognized for its talented people, innovative technologies and continually improving processes that contribute to civic consciousness, ecological sustainability and better quality of life.”",
					mission:"The mission of UCC College of Engineering is to build an academically excellent, professionally progressive, environmentally conscious, globally competitive, inclusive, diverse and responsible community through quality education, functional co-curricular activities, responsive community immersion programs, and continually improving management systems."
				},
				"industrial-engineering":{
					title:"Bachelor of Science in Industrial Engineering",
					vision:"We envision UCC College of Engineering as: “A world-class, academically excellent, socially-impactful and industry-oriented engineering college recognized for its talented people, innovative technologies and continually improving processes that contribute to civic consciousness, ecological sustainability and better quality of life.”",
					mission:"The mission of UCC College of Engineering is to build an academically excellent, professionally progressive, environmentally conscious, globally competitive, inclusive, diverse and responsible community through quality education, functional co-curricular activities, responsive community immersion programs, and continually improving management systems."
				}
			};
			function openProgramModal(card){
				const key=card.dataset.program;
				const data=programDescriptions[key];
				const number=card.querySelector(".cba-program-number");
				if(!data){
					return;
				}
				modalTitle.textContent=data.title;
				modalVision.textContent=data.vision;
				modalMission.textContent=data.mission;
				modalNumber.textContent=number ? number.textContent.trim() : "";
				modal.classList.add("show");
				modal.setAttribute("aria-hidden","false");
				document.body.classList.add("program-modal-open");
			}
			function closeProgramModal(){
				modal.classList.remove("show");
				modal.setAttribute("aria-hidden","true");
				document.body.classList.remove("program-modal-open");
			}
			programLinks.forEach(function(link){
				link.addEventListener("click",function(event){
					event.preventDefault();
					const card=link.closest(".cba-program-card");
					if(card){
						openProgramModal(card);
					}
				});
			});
			closeButtons.forEach(function(button){
				button.addEventListener("click",function(){
					closeProgramModal();
				});
			});
			document.addEventListener("keydown",function(event){
				if(event.key==="Escape"&&modal.classList.contains("show")){
					closeProgramModal();
				}
			});
		});
	</script>
</body>
</html>
