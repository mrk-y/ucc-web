<?php
declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../app/Support/helper.php';

use Repo\PostsRepository;
use Core\Database;

$repo = new PostsRepository(Database::connect());
$admissionPosts = $repo->fetchAdmissionPosts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>University of Caloocan City | Admission</title>
	<link rel="icon" type="image/png" href="images/UCC2.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="utility.css">
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
				<a href="admission.php" class="active">ADMISSION</a>
				<a href="news.php">NEWS</a>
				<a href="alumni.php">ALUMNI</a>
				<a href="careers.php">CAREERS</a>
			</div>
		</div>
	</div>

	<!-- HEADER -->
	<header class="brand-header">
		<div class="container brand-inner">
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

	<!-- MAIN CONTENT -->
	<main class="admission-news-page">
		<div class="admission-news-container">
			<div class="admission-news-heading">
				<h1>ADMISSION NEWS</h1>
				<div class="admission-heading-line"></div>
				<div class="admission-heading-dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
        <?php foreach ($admissionPosts as $post): ?>
            <div class="admission-post admission-modal-trigger" data-modal="admissionModal-<?= (int) $post['id'] ?>">
                <?php if (!empty($post['featured_image'])): ?>
                    <div class="admission-post-image">
                        <img src="<?= e('/admin/storage/uploads/' . $post['featured_image']) ?>" alt="<?= e($post['title']) ?>">
                    </div>
                <?php endif; ?>
                <div class="admission-post-content">
                    <h2>
                        <?= e($post['title']) ?>
                    </h2>
                    <div class="admission-meta">
                        <i data-lucide="calendar-days"></i>
                        <span>
                            Published <?= e(timeAgo($post['published_at'])) ?>
                        </span>
                    </div>
                    <div class="admission-title-line"></div>
                    <?php if (!empty($post['excerpt'])): ?>
                        <p>
                            <?= e($post['excerpt']) ?>
                        </p>
                    <?php endif; ?>
                    <a href="#" class="admission-read-more" data-modal-trigger="admissionModal-<?= (int) $post['id'] ?>">
                        READ MORE
                        <span class="admission-arrow">
                            <i data-lucide="arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="admission-divider"></div>

            <div class="student-modal" id="admissionModal-<?= (int) $post['id'] ?>" aria-hidden="true">
                <div class="student-modal-backdrop" data-modal-close></div>
                <div class="student-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="admissionModalTitle-<?= (int) $post['id'] ?>">
                    <div class="student-modal-header">
                        <div class="student-modal-heading">
                            <span class="student-modal-label">
                                ADMISSION
                            </span>
                        </div>
                        <button class="student-modal-close" type="button" aria-label="Close" data-modal-close>×</button>
                    </div>
                    <div class="student-modal-body">
                        <div class="student-modal-accent"></div>
                        <h2 id="admissionModalTitle-<?= (int) $post['id'] ?>">
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
	<!-- FULL IMAGE LIGHTBOX -->
	<div class="policy-lightbox" id="policyLightbox" aria-hidden="true">
		<div class="policy-lightbox-backdrop" data-policy-close></div>

		<div class="policy-lightbox-content">
			<button type="button" class="policy-lightbox-close" aria-label="Close image" data-policy-close>
				<i data-lucide="x"></i>
			</button>

			<img id="policyLightboxImage" src="" alt="Admission Image">
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
			</div>

			<div class="footer-links">
				<h4>INQUIRY FORM</h4>
				<a href="#">Student Affairs</a>
				<a href="#">Academic Office</a>
				<a href="#">Accounting Matters</a>
				<a href="#">Alumni Association</a>
				<a href="#">Daily Consultation</a>
				<a href="#">Graduate School</a>
			</div>

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

	<!-- JAVASCRIPT -->
	<script src="https://unpkg.com/lucide@latest"></script>
	<script src="script.js"></script>
	<script>
document.addEventListener('DOMContentLoaded', function () {

    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    const policyLightbox = document.getElementById('policyLightbox');
    const policyLightboxImage = document.getElementById('policyLightboxImage');


    // OPEN ADMISSION MODAL
    document.querySelectorAll('.admission-modal-trigger').forEach(card => {

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
            document.body.classList.add('student-modal-open');

            const modalBody = modal.querySelector('.student-modal-body');

            if (modalBody) {
                modalBody.scrollTop = 0;
            }

        });

    });


    // READ MORE
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
            document.body.classList.add('student-modal-open');

        });

    });


    // CLOSE ADMISSION MODALS
    document.querySelectorAll('[data-modal-close]').forEach(button => {

        button.addEventListener('click', function (event) {

            event.preventDefault();
            event.stopPropagation();

            const modal = this.closest('.student-modal');

            if (!modal) {
                return;
            }

            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('student-modal-open');

        });

    });


    // POLICY IMAGE LIGHTBOX
    document.addEventListener('click', function (event) {

        const imageTrigger = event.target.closest('.policy-image-trigger');

        if (!imageTrigger) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        if (!policyLightbox || !policyLightboxImage) {
            return;
        }

        const imageSrc =
            imageTrigger.dataset.policyImage ||
            imageTrigger.getAttribute('href');

        if (!imageSrc) {
            return;
        }

        policyLightboxImage.src = imageSrc;

        policyLightbox.classList.add('active');
        policyLightbox.setAttribute('aria-hidden', 'false');

    });


    // CLOSE LIGHTBOX
    if (policyLightbox) {

        policyLightbox
            .querySelectorAll('[data-policy-close]')
            .forEach(button => {

                button.addEventListener('click', function (event) {

                    event.preventDefault();
                    event.stopPropagation();

                    policyLightbox.classList.remove('active');
                    policyLightbox.setAttribute('aria-hidden', 'true');

                    if (policyLightboxImage) {
                        policyLightboxImage.src = '';
                    }

                });

            });

    }


    // ESCAPE
    document.addEventListener('keydown', function (event) {

        if (event.key !== 'Escape') {
            return;
        }

        if (
            policyLightbox &&
            policyLightbox.classList.contains('active')
        ) {
            policyLightbox.classList.remove('active');
            policyLightbox.setAttribute('aria-hidden', 'true');

            if (policyLightboxImage) {
                policyLightboxImage.src = '';
            }

            return;
        }

        const modal = document.querySelector('.student-modal.active');

        if (!modal) {
            return;
        }

        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('student-modal-open');

    });

});

    </script>
</body>
</html>
