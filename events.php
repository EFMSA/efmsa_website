<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EFMSA Events</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    .hero {
      background: url('images/p1.jpg') center/cover no-repeat;
      color: #fff;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
    }
    .hero-overlay {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 3rem;
      width: 100%;
    }
    .event-section {
      padding: 4rem 0;
      background-color: #f9f9f9;
    }
    .event-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
      overflow: hidden;
    }
    .event-card:hover {
      transform: translateY(-5px);
    }
    .event-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .event-card-body {
      padding: 1.5rem;
    }
    .event-card-body h5 {
      font-weight: 600;
      margin-bottom: 0.5rem;
    }
    .event-card-body p {
      font-size: 0.95rem;
      color: #555;
    }
	      .social-icons a {
      margin: 0 10px;
      font-size: 24px;
      color: #333 !important;
      transition: color 0.3s ease;
    }
    .social-icons a:hover {
      color: #007bff !important;
    }
  </style>
</head>
<body>
<?php include 'main_navbar.php'; ?>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-overlay">
      <h1>EFMSA Events</h1>
      <p>Explore our exciting lineup of professional, academic and social events</p>
    </div>
  </section>
<!-- EVENTS SECTION -->
<section class="event-section">
  <div class="container">
    <div class="row">

      <!-- Existing 3 events -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/blank_card_landscape.png" alt="Industry Night">
          <div class="event-card-body">
            <h5>Industry Networking Night</h5>
            <p>Connect with industry leaders and gain insights into graduate careers.</p>
            <p><i class="far fa-calendar-alt"></i> Aug 21, 2025</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/blank_card_landscape.png" alt="Case Competition">
          <div class="event-card-body">
            <h5>EFMSA Case Competition</h5>
            <p>Showcase your skills solving real-world business problems.</p>
            <p><i class="far fa-calendar-alt"></i> Sep 10, 2025</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/blank_card_landscape.png" alt="Social Mixer">
          <div class="event-card-body">
            <h5>Semester Welcome Mixer</h5>
            <p>Kick off the semester with food, music and good company.</p>
            <p><i class="far fa-calendar-alt"></i> Jul 30, 2025</p>
          </div>
        </div>
      </div>

      <!-- ✅ New events -->

      <!-- Welcome Bash -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/blank_card_landscape.png" alt="Welcome Bash">
          <div class="event-card-body">
            <h5>Welcome Bash</h5>
            <p>Our biggest kickoff to the semester with games, food, music, and new friends!</p>
            <p><i class="far fa-calendar-alt"></i> Mar 14, 2025</p>
          </div>
        </div>
      </div>

      <!-- Trivia Night -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/blank_card_landscape.png" alt="Trivia Night">
          <div class="event-card-body">
            <h5>Trivia Night</h5>
            <p>Put your brain to the test in a night of fun, food, and fierce competition.</p>
            <p><i class="far fa-calendar-alt"></i> Apr 30, 2025</p>
          </div>
        </div>
      </div>

      <!-- LinkedIn 360! -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m1.png" alt="LinkedIn 360">
          <div class="event-card-body">
            <h5>LinkedIn 360!</h5>
            <p>A full-circle workshop to elevate your LinkedIn and personal brand.</p>
            <p><i class="far fa-calendar-alt"></i> May 12, 2025</p>
          </div>
        </div>
      </div>

      <!-- Crisis & Clarity -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m6.png" alt="Crisis & Clarity">
          <div class="event-card-body">
            <h5>Crisis & Clarity</h5>
            <p>An interactive discussion exploring decision-making under uncertainty.</p>
            <p><i class="far fa-calendar-alt"></i> Jun 4, 2025</p>
          </div>
        </div>
      </div>

      <!-- Meet the Panel -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m6.png" alt="Meet the Panel">
          <div class="event-card-body">
            <h5>Meet the Panel</h5>
            <p>Q&A with industry professionals sharing their career insights and journey.</p>
            <p><i class="far fa-calendar-alt"></i> Jun 4, 2025</p>
          </div>
        </div>
      </div>

      <!-- Corporate Cocktails -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m3.png" alt="Corporate Cocktails">
          <div class="event-card-body">
            <h5>Corporate Cocktails</h5>
            <p>Network with industry professionals over drinks in a formal setting.</p>
            <p><i class="far fa-calendar-alt"></i> Oct 9, 2024</p>
          </div>
        </div>
      </div>

      <!-- Women in EFM -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m5.png" alt="Women in EFM">
          <div class="event-card-body">
            <h5>Women in EFM</h5>
            <p>Empowering women in Economics, Finance and Marketing through stories and networking.</p>
            <p><i class="far fa-calendar-alt"></i> Aug 6, 2024</p>
          </div>
        </div>
      </div>

      <!-- Miami Vice -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m2.png" alt="Miami Vice">
          <div class="event-card-body">
            <h5>Miami Vice</h5>
            <p>A retro themed party night hosted in collaboration with other societies.</p>
            <p><i class="far fa-calendar-alt"></i> Oct 11, 2019</p>
          </div>
        </div>
      </div>

      <!-- RMIT Business: Pub Crawl -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/m4.png" alt="RMIT Business Pub Crawl">
          <div class="event-card-body">
            <h5>RMIT Business: Pub Crawl</h5>
            <p>Explore Melbourne nightlife with fellow students in this massive crawl!</p>
            <p><i class="far fa-calendar-alt"></i> Mar 23, 2023</p>
          </div>
        </div>
      </div>

      <!-- EFMSA Boat Cruise -->
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="event-card">
          <img src="images/blank_card_landscape.png" alt="EFMSA Boat Cruise">
          <div class="event-card-body">
            <h5>EFMSA Boat Cruise</h5>
            <p>A memorable night cruising the Yarra with students, drinks, and music.</p>
            <p><i class="far fa-calendar-alt"></i> Mar 31, 2017</p>
          </div>
        </div>
      </div>

    </div> <!-- end .row -->
  </div> <!-- end .container -->
</section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
