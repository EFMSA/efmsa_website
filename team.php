<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EFMSA Team</title>
  <meta name="description" content="Meet the EFMSA team driving student success and engagement at RMIT.">
  <meta property="og:title" content="EFMSA Team">
  <meta property="og:description" content="Meet the EFMSA team driving student success and engagement at RMIT.">
  <meta property="og:image" content="https://www.efmsa.club/images/team_og.jpg">

  <!-- Fonts + CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
  <!-- Font Awesome 5.15.4 for consistency -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

  <style>
    html, body { max-width: 100%; overflow-x: hidden; }
    body { font-family: 'Poppins', sans-serif; }

    /* Navbar social icons (kept here so this page looks right even without global CSS) */
    .navbar .social-icons { display: flex; align-items: center; gap: 14px; }
    .navbar .social-icons a { color:#000; line-height:1; font-size:22px; text-decoration:none; }
    .navbar .social-icons a:hover { color:#007bff; }
    .navbar .social-icons a + a { margin-left:14px; } /* fallback for older browsers without gap */

    /* Hero */
    header.hero {
      position: relative;
      background: url('images/im3.jpg') center/cover no-repeat;
      color: #fff;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .hero-overlay { background-color: rgba(0,0,0,0.6); padding: 4rem 1rem; width: 100%; }
    @media (max-width: 768px) {
      header.hero h1 { font-size: 2rem; }
      header.hero p { font-size: 1rem; }
    }

    /* Team */
    .team-section { padding: 4rem 0; background: #f9f9f9; }
    .team-card {
      text-align: center; padding: 2rem 1rem; border-radius: 15px;
      transition: transform .3s ease, box-shadow .3s ease;
      background:#fff; box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      cursor: pointer;
    }
    .team-card:hover { transform: translateY(-5px); }
    .team-card .img-wrapper { display:flex; justify-content:center; align-items:center; }
    .team-card img {
      width: 130px; height: 130px; border-radius: 50%; object-fit: cover;
      filter: grayscale(100%); transition: transform .3s ease, filter .3s ease;
    }
    .team-card:hover img { transform: scale(1.05); filter: grayscale(0); }
    .team-card h5 { margin-top: 1rem; font-weight: 600; }
    .team-card p { margin: 0; font-size: .95rem; color:#666; }
    .btn-linkedin { margin-top: .5rem; border-radius: 50px; font-size: .85rem; color:#0077b5; border-color:#0077b5; }
    .btn-linkedin:hover { background:#0077b5; color:#fff; }

    /* Modal */
    .modal-body img { max-width: 150px; border-radius: 50%; }

    /* Footer */
    footer { background:#000; color:#fff; padding:3rem 0; text-align:center; }
    .footer-columns { display:flex; justify-content:space-between; flex-wrap:wrap; }
    .footer-column { flex:1; margin:1rem; min-width:250px; }
    .social-icons a { margin: 0 10px; font-size: 24px; color: #333; }
    .social-icons a:hover { color: #007bff; }
    @media (max-width: 768px) { .footer-columns { flex-direction:column; align-items:center; } }
  </style>
</head>
<body>

  <?php include 'main_navbar.php'; ?>

  <!-- HERO -->
  <header class="hero">
    <div class="hero-overlay">
      <h1>Meet the EFMSA Team</h1>
      <p>Dedicated leaders building a brighter student community</p>
    </div>
  </header>

  <main>
    <!-- TEAM GRID -->
    <section class="team-section">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <!-- Kush -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalKush" aria-controls="modalKush" aria-label="View profile for Kush Ravi">
              <div class="img-wrapper">
                <img src="images/kush.png" alt="Portrait of Kush Ravi" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Kush Ravi</h5>
              <p>President</p>
              <p>Bachelor of Business (Finance)</p>
              <a href="https://www.linkedin.com/in/kushalar/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

          <!-- Atif -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalAtif" aria-controls="modalAtif" aria-label="View profile for Atif Admani">
              <div class="img-wrapper">
                <img src="images/atif.png" alt="Portrait of Atif" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Atif Admani</h5>
              <p>Vice President</p>
              <p>Bachelor of Business (Finance)</p>
              <a href="https://www.linkedin.com/in/atif-admani/" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

          <!-- Sophia -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalSophia" aria-controls="modalSophia" aria-label="View profile for Sophia Ruan">
              <div class="img-wrapper">
                <img src="images/pic6.jpg" alt="Portrait of Sophia Ruan" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Sophia Ruan</h5>
              <p>Secretary</p>
              <p>Bachelor of Business (Marketing)</p>
              <a href="https://www.linkedin.com/in/sophia-ruan-732853266/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

          <!-- Shen -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalShen" aria-controls="modalShen" aria-label="View profile for Shen Yi Oh">
              <div class="img-wrapper">
                <img src="images/shen.png" alt="Portrait of Shen Yi Oh" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Shen Yi Oh</h5>
              <p>Marketing Director</p>
              <p>Bachelor of Business (Marketing)</p>
              <a href="https://www.linkedin.com/in/shen-yi-oh-086500329/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

          <!-- Zenda -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalZenda" aria-controls="modalZenda" aria-label="View profile for Zenda-Larissa Waliman">
              <div class="img-wrapper">
                <img src="images/zenda.jpeg" alt="Portrait of Zenda-Larissa Waliman" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Zenda-Larissa Waliman</h5>
              <p>Treasurer</p>
              <p>Bachelor of Business (Finance)</p>
              <a href="https://www.linkedin.com/in/zenda-larissa-waliman-744115332/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

          <!-- Mansimar -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalMansimar" aria-controls="modalMansimar" aria-label="View profile for Mansimar Soni">
              <div class="img-wrapper">
                <img src="images/mansi.png" alt="Portrait of Mansimar Soni" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Mansimar Soni</h5>
              <p>Events Director</p>
              <p>Bachelor of Business (Admin)</p>
              <a href="https://www.linkedin.com/in/mansimar-soni-5b414427a/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

                    <!-- Kevin Nguyen -->
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalKevin" aria-controls="modalKevin" aria-label="View profile for Kevin Nguyen">
              <div class="img-wrapper">
                <img src="images/kevin.png" alt="Portrait of Kevin Nguyen" loading="lazy" decoding="async" width="130" height="130">
              </div>
              <h5>Kevin Nguyen</h5>
              <p>Human Resources</p>
              <p>Bachelor of Business</p>
              <a href="https://www.linkedin.com/in/kevinnguyennn/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-linkedin"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
          </div>

          <!-- Imaad Abdul Hafeez -->
<div class="col-md-4 mb-4" data-aos="fade-up">
  <div class="team-card tilt-image" role="button" tabindex="0" data-toggle="modal" data-target="#modalImaad" aria-controls="modalImaad"aria-label="View profile for Imaad Abdul Hafeez">
    <div class="img-wrapper">
      <img src="images/imaad.jpeg"
           alt="Portrait of Imaad Abdul Hafeez"
           loading="lazy"
           decoding="async"
           width="130"
           height="130">
    </div>

    <h5>Imaad Abdul Hafeez</h5>
    <p>IT Director</p>
    <p>Bachelor of Applied Mathematics and Statistics</p>

    <a href="https://www.linkedin.com/in/imaad-abdul-hafeez-6b1963226/"
       target="_blank"
       rel="noopener"
       class="btn btn-outline-primary btn-sm btn-linkedin">
      <i class="fab fa-linkedin"></i> LinkedIn
    </a>
  </div>
</div>

        </div>
      </div>
    </section>




<!-- MODALS -->

<!-- Kush Ravi Modal -->
<div class="modal fade" id="modalKush" tabindex="-1" role="dialog"
     aria-labelledby="modalKushLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/kush.png"
             alt="Portrait of Kush Ravi"
             width="150"
             height="150">

        <h5 id="modalKushLabel" class="mt-3">Kush Ravi</h5>
        <p>President</p>
        <p>Bachelor of Business (Finance)</p>

        <a href="https://www.linkedin.com/in/kushalar/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Atif Admani Modal -->
<div class="modal fade" id="modalAtif" tabindex="-1" role="dialog"
     aria-labelledby="modalAtifLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/atif.png"
             alt="Portrait of Atif Admani"
             width="150"
             height="150">

        <h5 id="modalAtifLabel" class="mt-3">Atif Admani</h5>
        <p>Vice President</p>
        <p>Bachelor of Business (Finance)</p>

        <a href="https://www.linkedin.com/in/atif-admani/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Sophia Ruan Modal -->
<div class="modal fade" id="modalSophia" tabindex="-1" role="dialog"
     aria-labelledby="modalSophiaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/pic6.jpg"
             alt="Portrait of Sophia Ruan"
             width="150"
             height="150">

        <h5 id="modalSophiaLabel" class="mt-3">Sophia Ruan</h5>
        <p>Secretary</p>
        <p>Bachelor of Business (Marketing)</p>

        <a href="https://www.linkedin.com/in/sophia-ruan-732853266/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Shen Yi Oh Modal -->
<div class="modal fade" id="modalShen" tabindex="-1" role="dialog"
     aria-labelledby="modalShenLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/shen.png"
             alt="Portrait of Shen Yi Oh"
             width="150"
             height="150">

        <h5 id="modalShenLabel" class="mt-3">Shen Yi Oh</h5>
        <p>Marketing Director</p>
        <p>Bachelor of Business (Marketing)</p>

        <a href="https://www.linkedin.com/in/shen-yi-oh-086500329/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Zenda-Larissa Waliman Modal -->
<div class="modal fade" id="modalZenda" tabindex="-1" role="dialog"
     aria-labelledby="modalZendaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/zenda.jpeg"
             alt="Portrait of Zenda-Larissa Waliman"
             width="150"
             height="150">

        <h5 id="modalZendaLabel" class="mt-3">
          Zenda-Larissa Waliman
        </h5>

        <p>Treasurer</p>
        <p>Bachelor of Business (Finance)</p>

        <a href="https://www.linkedin.com/in/zenda-larissa-waliman-744115332/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Mansimar Soni Modal -->
<div class="modal fade" id="modalMansimar" tabindex="-1" role="dialog"
     aria-labelledby="modalMansimarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/mansi.png"
             alt="Portrait of Mansimar Soni"
             width="150"
             height="150">

        <h5 id="modalMansimarLabel" class="mt-3">Mansimar Soni</h5>
        <p>Events Director</p>
        <p>Bachelor of Business (Admin)</p>

        <a href="https://www.linkedin.com/in/mansimar-soni-5b414427a/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Kevin Nguyen Modal -->
<div class="modal fade" id="modalKevin" tabindex="-1" role="dialog"
     aria-labelledby="modalKevinLabel" aria-hidden="true">

  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">

        <img src="images/kevin.png"
             alt="Portrait of Kevin Nguyen"
             width="150"
             height="150">

        <h5 id="modalKevinLabel" class="mt-3">Kevin Nguyen</h5>

        <p>Human Resources</p>
        <p>Bachelor of Business</p>

        <a href="https://www.linkedin.com/in/kevinnguyennn/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">

          <i class="fab fa-linkedin"></i> LinkedIn
        </a>

      </div>
    </div>
  </div>
</div>

<!-- Imaad Abdul Hafeez Modal -->
<div class="modal fade" id="modalImaad" tabindex="-1" role="dialog"
     aria-labelledby="modalImaadLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" aria-modal="true">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <img src="images/imaad.jpeg"
             alt="Portrait of Imaad Abdul Hafeez"
             width="150"
             height="150">

        <h5 id="modalImaadLabel" class="mt-3">
          Imaad Abdul Hafeez
        </h5>

        <p>IT Director</p>
        <p>Bachelor of Applied Mathematics and Statistics</p>

        <a href="https://www.linkedin.com/in/imaad-abdul-hafeez-6b1963226/"
           target="_blank"
           rel="noopener"
           class="btn btn-outline-primary btn-sm">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
      </div>
    </div>
  </div>
</div>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="footer-columns">
        <div class="footer-column">
          <h5>About EFMSA</h5>
          <p>EFMSA represents the dynamic community of Economics, Finance, and Marketing students at RMIT. Our mission is to empower members through academic support, industry engagement, and social connection — guiding them from orientation to graduation, and beyond into meaningful careers.</p>
        </div>
        <div class="footer-column">
          <h5>Contact</h5>
          <p><strong>General Enquiries:</strong> <a href="mailto:efmsa.club@rmit.edu.au">efmsa.club@rmit.edu.au</a></p>
        </div>
      </div>
      <div class="text-center mt-4">
        <p>Website built and designed by EFMSA Web Team</p>
        <p>&copy; 2025 EFMSA RMIT. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- JS (defer for perf) -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (window.AOS) AOS.init();
      if (window.VanillaTilt) {
        VanillaTilt.init(document.querySelectorAll(".tilt-image"), {
          max: 15, speed: 300, glare: true, "max-glare": 0.4, scale: 1.05
        });
      }
      // Keyboard accessibility: open modal on Enter/Space when focusing a card
      document.querySelectorAll('.team-card[role="button"]').forEach(card => {
        card.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            const target = card.getAttribute('data-target');
            if (target && window.jQuery) jQuery(target).modal('show');
          }
        });
      });
    });
  </script>
</body>
</html>
