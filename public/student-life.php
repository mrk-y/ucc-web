<?php
declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../app/Support/helper.php';

use Repo\PostsRepository;
use Core\Database;

$repo = new PostsRepository(Database::connect());
$studentLifePosts = $repo->fetchStudentLifePosts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>University of Caloocan City | Student Life</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
	<style>
		.student-modal{
			position:fixed;
			inset:0;
			z-index:9999;
			display:flex;
			align-items:center;
			justify-content:center;
			padding:30px;
			visibility:hidden;
			opacity:0;
			pointer-events:none;
			transition:opacity .3s ease,visibility .3s ease;
		}
		.student-modal.active{
			visibility:visible;
			opacity:1;
			pointer-events:auto;
		}
		.student-modal-backdrop{
			position:absolute;
			inset:0;
			background:rgba(0,35,25,.72);
			backdrop-filter:blur(8px);
			-webkit-backdrop-filter:blur(8px);
		}
		.student-modal-dialog{
			position:relative;
			width:min(920px,100%);
			max-height:calc(100vh - 60px);
			background:#fbfcfa;
			border:1px solid rgba(7,95,73,.15);
			box-shadow:0 30px 80px rgba(0,31,22,.35);
			overflow:hidden;
			transform:translateY(25px) scale(.97);
			transition:transform .35s cubic-bezier(.22,1,.36,1);
			z-index:2;
			display:flex;
			flex-direction:column;
		}
		.student-modal.active .student-modal-dialog{
			transform:translateY(0) scale(1);
		}
		.student-modal-close{
			position:absolute;
			top:18px;
			right:18px;
			z-index:5;
			width:42px;
			height:42px;
			border:1px solid rgba(255,255,255,.4);
			background:rgba(0,55,39,.88);
			color:#fff;
			display:flex;
			align-items:center;
			justify-content:center;
			cursor:pointer;
			transition:background .25s ease,transform .25s ease;
		}
		.student-modal-close:hover{
			background:var(--gold,#e5b548);
			color:#073d2d;
			transform:rotate(90deg);
		}
		.student-modal-close svg{
			width:19px;
			height:19px;
		}
		.student-modal-header{
			padding:42px 55px 30px;
			background:linear-gradient(135deg,#003f2a,#075f49);
			color:#fff;
			position:relative;
			overflow:hidden;
		}
		.student-modal-header::after{
			content:"";
			position:absolute;
			width:240px;
			height:240px;
			right:-90px;
			top:-110px;
			border:1px solid rgba(229,181,72,.28);
			border-radius:50%;
			box-shadow:0 0 0 25px rgba(229,181,72,.04),0 0 0 50px rgba(229,181,72,.025);
		}
		.student-modal-header-line{
			width:48px;
			height:4px;
			background:var(--gold,#e5b548);
			margin-bottom:18px;
		}
		.student-modal-category{
			display:block;
			font-family:"Manrope",sans-serif;
			font-size:11px;
			font-weight:800;
			letter-spacing:2px;
			color:#f2ca68;
			margin-bottom:10px;
		}
		.student-modal-header h2{
			max-width:760px;
			margin:0;
			font-family:"Oswald",sans-serif;
			font-size:clamp(30px,4vw,48px);
			line-height:1.05;
			font-weight:600;
			text-transform:uppercase;
			letter-spacing:.2px;
			padding-right:40px;
		}
		.student-modal-meta{
			display:flex;
			align-items:center;
			gap:8px;
			margin-top:20px;
			font-family:"Manrope",sans-serif;
			font-size:12px;
			color:rgba(255,255,255,.75);
		}
		.student-modal-meta svg{
			width:16px;
			height:16px;
			color:#f2ca68;
		}
		.student-modal-image-wrap{
			width:100%;
			max-height:320px;
			overflow:hidden;
			background:#eaf3f0;
			display:none;
		}
		.student-modal-image-wrap.has-image{
			display:block;
		}
		.student-modal-image-wrap img{
			display:block;
			width:100%;
			height:320px;
			object-fit:cover;
		}
		.student-modal-body{
			padding:38px 55px 42px;
			overflow-y:auto;
			color:#263d38;
			font-family:"Manrope",sans-serif;
			font-size:15px;
			line-height:1.8;
		}
		.student-modal-body h3{
			margin:25px 0 9px;
			font-family:"Oswald",sans-serif;
			font-size:23px;
			line-height:1.2;
			letter-spacing:.4px;
			color:#075f49;
			text-transform:uppercase;
		}
		.student-modal-body h3:first-child{
			margin-top:0;
		}
		.student-modal-body p{
			margin:0 0 17px;
		}
		.student-modal-body ul{
			margin:0 0 20px;
			padding-left:23px;
		}
		.student-modal-body li{
			margin-bottom:7px;
		}
		.student-modal-body strong{
			color:#075f49;
		}
		.student-modal-body .modal-highlight{
			margin:22px 0;
			padding:20px 22px;
			border-left:4px solid #e5b548;
			background:#f1f6f3;
		}
		.student-modal-body .modal-video-link{
			display:inline-flex;
			align-items:center;
			gap:9px;
			padding:12px 18px;
			margin-top:8px;
			background:#075f49;
			color:#fff;
			text-decoration:none;
			font-size:12px;
			font-weight:800;
			letter-spacing:1px;
			transition:background .25s ease,transform .25s ease;
		}
		.student-modal-body .modal-video-link:hover{
			background:#e5b548;
			color:#073d2d;
			transform:translateY(-2px);
		}
		.student-modal-body .modal-video-link svg{
			width:16px;
			height:16px;
		}
		.student-modal-footer{
			min-height:66px;
			padding:0 55px;
			border-top:1px solid rgba(7,95,73,.12);
			display:flex;
			align-items:center;
			justify-content:space-between;
			gap:20px;
			background:#fff;
			font-family:"Manrope",sans-serif;
			font-size:10px;
			font-weight:800;
			letter-spacing:1.5px;
			color:#71817c;
		}
		.student-modal-footer a{
			display:inline-flex;
			align-items:center;
			gap:7px;
			color:#075f49;
			text-decoration:none;
			transition:color .2s ease;
		}
		.student-modal-footer a:hover{
			color:#d49d21;
		}
		.student-modal-footer svg{
			width:14px;
			height:14px;
		}
		body.modal-open{
			overflow:hidden;
		}
		.student-modal-trigger{
			cursor:pointer;
		}
		@media(max-width:700px){
			.student-modal{
				padding:15px;
			}
			.student-modal-dialog{
				max-height:calc(100vh - 30px);
			}
			.student-modal-header{
				padding:35px 25px 25px;
			}
			.student-modal-header h2{
				font-size:32px;
				padding-right:30px;
			}
			.student-modal-body{
				padding:28px 25px 32px;
				font-size:14px;
				line-height:1.7;
			}
			.student-modal-image-wrap img{
				height:220px;
			}
			.student-modal-footer{
				padding:0 25px;
				min-height:58px;
				flex-direction:column;
				justify-content:center;
				gap:5px;
			}
			.student-modal-close{
				top:12px;
				right:12px;
				width:38px;
				height:38px;
			}
		}
		@media(max-width:450px){
			.student-modal-header{
				padding:30px 20px 22px;
			}
			.student-modal-header h2{
				font-size:27px;
			}
			.student-modal-body{
				padding:24px 20px 28px;
			}
			.student-modal-image-wrap img{
				height:180px;
			}
			.student-modal-footer{
				padding:12px 20px;
			}
		}
	</style>
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
			<a href="student-life.php" class="active">STUDENT LIFE</a>
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
<!-- STUDENT LIFE MAIN CONTENT -->
<main class="student-life-page">
	<div class="student-life-container">
		<!-- PAGE HEADER -->
		<div class="student-life-heading reveal">
			<div>
				<span class="student-life-eyebrow">UCC COMMUNITY</span>
				<h1>STUDENT LIFE</h1>
			</div>
			<div class="student-life-heading-line"></div>
		</div>
        <section class="student-life-top-grid">
        <?php foreach ($studentLifePosts as $post): ?>
            <article class="student-card student-card-wide reveal student-modal-trigger" data-modal="studentModal-<?= (int) $post['id'] ?>">
                <?php if (!empty($post['featured_image'])): ?>
                    <div class="student-wide-image">
                        <img src="<?= e('/admin/storage/uploads/' . $post['featured_image']) ?>" alt="<?= e($post['title']) ?>">
                    </div>
                    <div class="student-wide-overlay"></div>
                <?php endif; ?>
                <div class="student-wide-content">
                    <h2>
                        <?= e($post['title']) ?>
                    </h2>
                    <div class="student-meta student-meta-light">
                        <i data-lucide="calendar-days"></i>
                        <span>
                            Published <?= e(timeAgo($post['published_at'])) ?>
                        </span>
                    </div>
                    <?php if (!empty($post['excerpt'])): ?>
                        <p>
                            <?= e($post['excerpt']) ?>
                        </p>
                    <?php endif; ?>
                    <a href="#" class="student-read-more student-read-more-wide" data-modal-trigger="studentModal-<?= (int) $post['id'] ?>">
                        <span>READ MORE</span>
                        <span class="student-arrow">→</span>
                    </a>
                </div>
            </article>

            <div class="student-modal" id="studentModal-<?= (int) $post['id'] ?>" aria-hidden="true">
                <div class="student-modal-backdrop" data-modal-close></div>
                <div class="student-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="studentModalTitle-<?= (int) $post['id'] ?>">
                    <div class="student-modal-header">
                        <div class="student-modal-heading">
                            <span class="student-modal-number">
                                <?= str_pad((string) $post['title'], 2, '0', STR_PAD_LEFT) ?>
                            </span>
                        </div>
                        <button class="student-modal-close" type="button" aria-label="Close" data-modal-close>×</button>
                    </div>
                    <div class="student-modal-body">
                        <div class="student-modal-accent"></div>
                        <h2 id="studentModalTitle-<?= (int) $post['id'] ?>">
                            <?= e($post['title']) ?>
                        </h2>
                        <div class="student-modal-content">
                            <?= $post['content'] ?>
                        </div>
                    </div>
                    <div class="student-modal-footer">
                        <span>UNIVERSITY OF CALOOCAN CITY</span>
                    </div>
                </div>
            </div>
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
<script> lucide.createIcons(); </script>
<script>
document.querySelectorAll('.student-modal-trigger').forEach(card => {

    card.addEventListener('click', function (event) {

        if (event.target.closest('a')) {
            return;
        }

        const modalId = this.dataset.modal;
        const modal = document.getElementById(modalId);

        if (!modal) {
            return;
        }

        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');

    });

});

document.querySelectorAll('[data-modal-trigger]').forEach(button => {

    button.addEventListener('click', function (event) {

        event.preventDefault();
        event.stopPropagation();

        const modalId = this.dataset.modalTrigger;
        const modal = document.getElementById(modalId);

        if (!modal) {
            return;
        }

        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');

    });

});

document.querySelectorAll('[data-modal-close]').forEach(button => {

    button.addEventListener('click', function () {

        const modal = this.closest('.student-modal');

        if (!modal) {
            return;
        }

        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('modal-open');

    });

});

document.addEventListener('keydown', function (event) {

    if (event.key !== 'Escape') {
        return;
    }

    const modal = document.querySelector('.student-modal.active');

    if (!modal) {
        return;
    }

    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');

});
</script>
</body>
</html>
