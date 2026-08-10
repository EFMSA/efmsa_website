<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="images/logo21.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Join EFMSA for professional growth and social opportunities since 2005. Branch out to a brighter future with EFMSA.">
  <meta name="keywords" content="EFMSA, RMIT, Business, Commerce, Social Events">
  <title>EFMSA - RMIT Business Student Society</title>

  <!-- Open Graph -->
  <meta property="og:title" content="EFMSA - RMIT Business Student Society">
  <meta property="og:description" content="Join EFMSA for professional growth and social opportunities since 2005. Branch out to a brighter future with EFMSA.">
  <meta property="og:image" content="https://www.efmsa.club/images/logo21.png">
  <meta property="og:url" content="https://www.efmsa.club">
  <meta property="og:type" content="website">

  <!-- Show-once + start timer (runs very early) -->
  <script>
    // Start time for min display calculation
    window.__pre_start = Date.now();

    // Only show once per session (change key to reset)
    (function () {
      try {
        var KEY = 'preloader_seen_v1';
        if (sessionStorage.getItem(KEY)) {
          var s = document.createElement('style');
          s.textContent = '#preloader{display:none!important}';
          document.head.appendChild(s);
        } else {
          sessionStorage.setItem(KEY, '1');
        }
      } catch (e) {}
    })();
  </script>

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Google Fonts (with preconnect) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <style>
    html, body { max-width: 100%; overflow-x: hidden; }
    img, video { max-width: 100%; height: auto; display: block; }
    body { font-family: 'Poppins', sans-serif; }

    /* Hero */
    header.hero {
      position: relative;
      background: url('images/team.jfif') center 30% / cover no-repeat;
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    .hero-overlay {
      background: rgba(0, 0, 0, 0.1);
      width: 100%;
      padding: 4rem 1rem;
      text-align: center;
    }
    .hero h1 { font-size: 3rem; margin-bottom: 1rem; }
    .hero p { font-size: 1.2rem; margin-bottom: 2rem; }
    .hero .btn {
      padding: 10px 20px; font-size: 1rem; border-radius: 25px;
      background-color: #007bff; color: #fff; text-decoration: none;
      transition: all 0.3s ease; box-shadow: 0 4px 14px rgba(0,123,255,0.2);
    }
    .hero .btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,123,255,0.3); background-color: #0056b3; }
    .hero img { animation: pulse 6s ease-in-out infinite; }
    @keyframes pulse { 0%{transform:scale(1)}50%{transform:scale(1.02)}100%{transform:scale(1)} }

    /* Video section */
    .video-section {
      display:flex; justify-content:center; align-items:center;
      height:55vh; background-color:white; overflow:hidden;
    }
    .video-section video { width:100%; max-width:1000px; height:auto; object-fit:cover; }
    @media (max-width: 768px) {
      .video-section { height:auto; padding:0; }
      .hero h1 { font-size: 2rem; }
      .hero p { font-size: 1rem; }
    }

    /* Stats */
    h2 { font-size: 3.5rem; font-weight: 900; }
    .stats-section { padding: 4rem 0; background: #f9f9f9; }
    .stats h3 { font-size: 2.5rem; color: #007bff; }
    .stats p { margin-top: 10px; font-size: 1.1rem; }

    /* Cards/sections */
    .social-experiences, .professional-development, .committee-section { padding: 4rem 0; }
    .social-experiences .img-fluid, .committee-images img { margin-bottom: 15px; border-radius: 15px; }
    .professional-development img { border-radius: 15px; }
    .tilt-image { transition: transform 0.3s ease; will-change: transform; }

    /* Event cards */
    .event-card {
      border: 1px solid #e0e0e0; border-radius: 12px; overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    .event-card:hover { transform: translateY(-5px); box-shadow: 0 8px 16px rgba(0,0,0,0.08); }
    .event-card img { width:100%; height:200px; object-fit:cover; }
    .event-card-body { padding: 1rem; }
    .event-card-body h5 { font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem; color: #333; }
    .event-card-body p { font-size: 0.95rem; color: #555; margin-bottom: 0.3rem; }

    /* Testimonials */
    .testimonial-bg { background: linear-gradient(to right, #f9fbff, #eef5ff); padding: 80px 20px; }
    .testimonial-slider { max-width: 800px; margin: 0 auto; padding: 2rem 0; }
    .testimonial-slider .slick-slide > div { height: 100%; display: flex; }
    .testimonial-slider .card {
      flex: 1; width: 350px; padding: 1.8rem; border-radius: 20px;
      background: #ffffffee; border: 1px solid #e0e0e0;
      box-shadow: 0 8px 16px rgba(0,0,0,0.06);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-align: left; color: #222;
    }
    .testimonial-slider .card:hover { transform: scale(1.02); box-shadow: 0 12px 24px rgba(0,0,0,0.08); }
    .testimonial-slider p { font-size:1rem; color:#222; margin-bottom:1rem; line-height:1.6; }
    .testimonial-slider h5 { font-size:1rem; font-weight:600; color: #004080; margin:0; }

    /* Sponsors */
    .sponsors-section { background: linear-gradient(135deg, #f8f9fa, #e8f0fe); position: relative; padding: 4rem 0; overflow: hidden; }
    .sponsor-logo { transition: transform 0.3s ease, filter 0.3s ease; filter: grayscale(0%); }
    .sponsor-logo:hover { transform: scale(1.1); filter: grayscale(0%); }
    .pastel-bg { background: linear-gradient(to right, #f9fbff, #eef5ff); }

    /* Floating social buttons */
    .floating-social {
      display:inline-block; background:#ffffff; border:2px solid #004080; color:#004080; font-weight:600;
      padding:10px 16px; border-radius:50px; box-shadow:0 4px 14px rgba(0,0,0,0.1);
      transition: all 0.3s ease; animation: pulseFade 2.5s infinite; font-size:1rem;
    }
    .floating-social i { margin-right: 8px; }
    .float-insta { background: linear-gradient(135deg,#feda75,#d62976,#962fbf,#4f5bd5); color:white; border:none; }
    .float-insta:hover { background:#d62976; }
    .float-linkedin { background-color:#0077b5; color:white; border:none; }
    .float-linkedin:hover { background-color:#005582; }
    @keyframes pulseFade { 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(1.05);opacity:.9} }

    /* Footer */
    footer { background:#000; color:#fff; padding:3rem 0; text-align:center; }
    footer a { color:#007bff; text-decoration:none; }
    footer a:hover { color:#0056b3; }
    .footer-columns { display:flex; justify-content:space-between; flex-wrap:wrap; }
    .footer-column { flex:1; margin:1rem; min-width:250px; }
    @media (max-width: 768px) { .footer-columns { flex-direction:column; align-items:center; } }

    /* Preloader */
    #preloader {
      position:fixed; top:0; left:0; width:100%; height:100%;
      background-color:white; display:flex; justify-content:center; align-items:center; z-index:9999;
      opacity: 1; transition: opacity .45s ease;
    }
    #preloader.is-done { opacity: 0; pointer-events: none; }
    #preloader-gif { max-width:100%; max-height:100%; }

    /* Navbar social icons */
    .navbar .social-icons { display:flex; align-items:center; gap:14px; color:#000; }
    .navbar .social-icons a { color:#000; line-height:1; font-size:22px; text-decoration:none; }
    .navbar .social-icons a:hover { color:#007bff; }
    .navbar.navbar-dark .social-icons a { color:#000 !important; }
.glass{
  background: rgba(255,255,255,.04);
  border: 1px solid rgba(255,255,255,.35);
  backdrop-filter: blur(4px) saturate(50%);
  -webkit-backdrop-filter: blur(4px) saturate(50%);
  border-radius: 22px;
  box-shadow: 0 12px 30px rgba(0,0,0,.12);
}
.glass-border-glow{ position:relative; }
.glass-border-glow::after{
  content:""; position:absolute; inset:-1px; border-radius:inherit; pointer-events:none;
  background: linear-gradient(135deg, rgba(124,58,237,.15), rgba(13,110,253,.15));
  filter: blur(2px); opacity:.15; z-index:-1;
}
@supports not ((-webkit-backdrop-filter: none) or (backdrop-filter: none)){
  .glass{ background: rgba(255,255,255,.92); }
}

/* Hero card bits */
.hero-card .btn-glass{
  border-radius: 999px; padding: .85rem 1.3rem; font-weight:600;
  border:1px solid rgba(255,255,255,.45); color:#fff;
  background: linear-gradient(135deg, rgba(124,58,237,.45), rgba(13,110,253,.45));
  backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px);
  box-shadow: 0 10px 30px rgba(13,110,253,.35);
  text-decoration:none; display:inline-block;
}
.hero-card .btn-glass:hover{ transform: translateY(-2px); box-shadow: 0 18px 40px rgba(13,110,253,.45); }
.hero-card .btn-ghost{ background: rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.35); }

.hero-badges .badge-chip{
  display:inline-block; font-size:.9rem; padding:.5rem .85rem; border-radius:999px; color:#fff;
  border:1px solid rgba(255,255,255,.35); background: rgba(255,255,255,.12); margin:.25rem;
}

footer.site-footer { background:#000; color:#fff; padding:3rem 0; }
footer.site-footer .inner { border-radius: 24px; padding: 2rem; }
footer.site-footer a{ color:#cfe2ff; text-decoration:none; }
footer.site-footer a:hover{ color:#fff; }

  </style>

  <noscript><style>#preloader{display:none!important}</style></noscript>
</head>
<body>


  <?php include 'main_navbar.php'; ?>

<!-- Hero Section -->
<header class="hero">
  <div class="hero-overlay">
    <div class="container">
      <div class="glass glass-border-glow hero-card mx-auto p-4 p-md-5" style="max-width: 960px;">
        <h1 style="font-size: clamp(2.4rem, 6vw, 5rem); font-weight: 900; line-height: 1.05; letter-spacing:.3px; margin: 0 0 .35rem; color: #ffffff; text-shadow: 0 6px 22px rgba(0,0,0,.35);">
          <span>RMIT</span>
          <span style="margin-left:.4rem;">
            <span style="color:#DC143C;">EFM</span><span>SA</span>
          </span>
        </h1>

        <h2 style="font-size: clamp(0.95rem, 1.8vw, 1.2rem); font-weight:700; letter-spacing:.35em; text-transform: uppercase; color:#e6eaf7; opacity:.9; margin: 0 0 1rem;">
          ECONOMICS | FINANCE | MARKETING
        </h2>

        <h4 style="font-size: clamp(1.1rem, 2vw, 1.35rem); font-weight:700; color:#ffffff; margin:0 0 .5rem;">
          Market Your Potential. Lead the Future.
        </h4>

        <p class="lead" style="color:#e9edf8; opacity:.92; margin-bottom:1rem;">
          Join EFMSA for professional growth and unforgettable social experiences — since 2005.
        </p>

        <div class="d-flex justify-content-center flex-wrap">
          <a href="https://campus.hellorubric.com/?tab=memberships&s=10173" class="btn-glass mx-1 my-1">Join Now</a>
        </div>
      </div>
    </div>
  </div>
</header>



  <main>
    <!-- Stats Section -->
    <section class="stats-section text-center">
      <div class="container">
        <h2>EFMSA - A Premier Student Society at RMIT University</h2>
        <div class="row stats">
          <div class="col-md-3 col-6 mb-4">
            <h3 id="membersCount" class="countup" data-count="750" style="font-size: 3rem;">750</h3>
            <p>Members in 2025</p>
          </div>
          <div class="col-md-3 col-6 mb-4">
            <h3 id="eventsCount" class="countup" data-count="6" style="font-size: 3rem;">6</h3>
            <p>Professional and Social Events per year</p>
          </div>
          <div class="col-md-3 col-6 mb-4">
            <h3 id="instaCount" class="countup" data-count="580" style="font-size: 3rem;">580</h3>
            <p>Instagram Followers</p>
          </div>
          <div class="col-md-3 col-6 mb-4">
            <h3 id="fbCount" class="countup" data-count="2900" style="font-size: 3rem;">2900</h3>
            <p>Facebook Followers</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Social Experiences Section -->
    <section class="social-experiences text-center">
      <div class="container">
        <h2 data-aos="fade-up">Social Experiences</h2>
        <p>Providing unforgettable social events so you can have fun while at uni!</p>

        <!-- Instagram Button -->
        <div class="floating-social float-insta mb-4" data-aos="fade-right">
          <a href="https://www.instagram.com/rmitefmsa/" target="_blank" rel="noopener" style="color: white;">
            <i class="fab fa-instagram"></i> Follow us on Instagram
          </a>
        </div>

        <!-- Video -->
        <section class="video-section">
          <video id="background-video" autoplay loop muted playsinline preload="metadata">
            <source src="images/Render.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </section>
      </div>
    </section>

    <!-- Professional Development Section -->
    <section class="professional-development pastel-bg py-5 text-center">
      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Professional Development</h2>
        <p class="text-center mb-5">
          Bridging the gap between university and employment by empowering students with real-world opportunities.
        </p>
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0">
            <img src="images/e4.jpg" alt="Professional Development" class="img-fluid tilt-image" loading="lazy" decoding="async">
          </div>
          <div class="col-md-6">
            <h3 class="mb-3">Grow Professionally with EFMSA</h3>
            <p>
              At EFMSA, we’re committed to helping students transition confidently into their careers. Through networking nights, firm-specific info sessions, and hands-on experiences, we support you every step of the way during your time at RMIT and beyond.
            </p>
            <div class="floating-social float-linkedin" data-aos="fade-left">
              <a href="https://www.linkedin.com/company/efmsa" target="_blank" rel="noopener" style="color: white;">
                <i class="fab fa-linkedin"></i> Connect with us on LinkedIn
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Events -->
    <section class="event-section py-5">
      <div class="container">
        <h2 class="text-center mb-4">Featured Events of 2026</h2>
        <div class="row">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="event-card">
              <img src="images/m7.png" alt="Meet the Panel" loading="lazy" decoding="async">
              <div class="event-card-body">
                <h5>Meet the Panel</h5>
                <p>Q&amp;A with industry professionals sharing their career insights and journey.</p>
                <p><i class="far fa-calendar-alt"></i> Jun 4, 2025</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="event-card">
              <img src="images/m6.png" alt="Crisis &amp; Clarity" loading="lazy" decoding="async">
              <div class="event-card-body">
                <h5>Crisis &amp; Clarity</h5>
                <p>An interactive discussion exploring decision-making under uncertainty.</p>
                <p><i class="far fa-calendar-alt"></i> Jun 4, 2025</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="event-card">
              <img src="images/m1.png" alt="LinkedIn 360!" loading="lazy" decoding="async">
              <div class="event-card-body">
                <h5>LinkedIn 360!</h5>
                <p>A full-circle workshop to elevate your LinkedIn and personal brand.</p>
                <p><i class="far fa-calendar-alt"></i> May 12, 2025</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonial-bg">
      <h2 class="text-center mb-5" data-aos="fade-up">What Our Members Say</h2>
      <div class="testimonial-slider">
        <div class="card p-4" data-aos="fade-up">
          <p>"EFMSA gave me the confidence and connections to land my first internship. The events are both fun and career-focused!"</p>
          <h5>– Olivia M., Bachelor of Business</h5>
        </div>
        <div class="card p-4" data-aos="fade-up">
          <p>"I met industry mentors and made close friends at EFMSA networking nights. Truly the best club on campus."</p>
          <h5>– Liam R., Economics Major</h5>
        </div>
        <div class="card p-4" data-aos="fade-up">
          <p>"The workshops on resume building and job interviews were incredibly valuable. I wouldn’t have been this prepared without EFMSA."</p>
          <h5>– Sarah K., Finance Student</h5>
        </div>
        <div class="card p-4" data-aos="fade-up">
          <p>"From day one, EFMSA made me feel welcome. It’s more than a student club — it’s a launchpad for your career."</p>
          <h5>– Marcus D., Marketing &amp; Comms</h5>
        </div>
      </div>
    </section>

    <!-- Committee Section -->
    <section class="committee-section py-5" style="background-color: #f8f9fa;">
      <div class="container text-center" style="max-width: 850px;">
        <h2 data-aos="fade-up" data-aos-delay="200" style="font-size: 2.5rem; font-weight: 700; color: #212529;">
          Want to become part of our committee?
        </h2>
        <p class="mt-3" style="font-size: 1.1rem; color: #555;">
          EFMSA hires twice a year. There is an intake at the start of every year strictly for first-year students, and then we have a mid-year intake where anyone is welcome to apply!
        </p>
        <p style="color: #555;">
          Keep an eye out on our social media pages to see when we are hiring.
        </p>
        <a href="https://campus.hellorubric.com/?tab=memberships&s=10173"
           class="btn btn-primary mt-3"
           style="border-radius: 25px; padding: 12px 24px; font-weight: 500;">
          Join the Committee
        </a>
        <div class="mt-5">
          <img src="images/im2.jpg" alt="Committee" class="img-fluid tilt-image rounded shadow" loading="lazy" decoding="async">
        </div>
      </div>
    </section>


    </section>

    <!-- Sponsors -->
    <section class="sponsors-section">
      <div class="container text-center">
        <h2 class="mb-5 fw-bold" data-aos="fade-up">Our Sponsors</h2>
        <div class="row justify-content-center">
          <div class="col-6 col-sm-4 col-md-3 mb-4" data-aos="zoom-in">
            <a href="https://rusu.rmit.edu.au/" target="_blank" rel="noopener">
              <img src="images/c1.png" alt="RUSU" class="img-fluid sponsor-logo" style="max-height: 100px;" loading="lazy" decoding="async">
            </a>
          </div>
          <div class="col-6 col-sm-4 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <a href="https://www.dtf.vic.gov.au" target="_blank" rel="noopener">
              <img src="images/c2.png" alt="DTF" class="img-fluid sponsor-logo" style="max-height: 100px;" loading="lazy" decoding="async">
            </a>
          </div>
          <div class="col-6 col-sm-4 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
            <a href="https://www.redbull.com/au-en" target="_blank" rel="noopener">
              <img src="images/c3.png" alt="Red Bull" class="img-fluid sponsor-logo" style="max-height: 100px;" loading="lazy" decoding="async">
            </a>
          </div>
          <div class="col-6 col-sm-4 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <a href="https://aws.amazon.com/" target="_blank" rel="noopener">
              <img src="images/aws.png" alt="AWS" class="img-fluid sponsor-logo" style="max-height: 100px;" loading="lazy" decoding="async">
            </a>
          </div>
          <div class="col-6 col-sm-4 col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <a href="https://littlecupcakes.com.au/" target="_blank" rel="noopener">
              <img src="images/s1.png" alt="Little Cupcakes" class="img-fluid sponsor-logo" style="max-height: 100px;" loading="lazy" decoding="async">
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

<footer class="site-footer">
  <div class="container">
    <div class="inner glass">
      <div class="row">
        <div class="col-md-7 mb-3">
          <h5 class="mb-2">About EFMSA</h5>
          <p class="mb-0">
            EFMSA represents the dynamic community of Economics, Finance, and Marketing students at RMIT.
            Our mission is to empower members through academic support, industry engagement, and social connection —
            guiding them from orientation to graduation, and beyond into meaningful careers.
          </p>
        </div>
        <div class="col-md-5">
          <h5 class="mb-2">Contact</h5>
          <p class="mb-1"><strong>General Enquiries:</strong> <a href="mailto:efmsa.club@rmit.edu.au">efmsa.club@rmit.edu.au</a></p>
        </div>
      </div>
      <hr style="border-color: rgba(255,255,255,.2);">
      <div class="d-flex flex-wrap justify-content-between align-items-center">
        <div>Website by EFMSA Web Team</div>
        <div>© 2025 EFMSA RMIT. All rights reserved.</div>
      </div>
    </div>
  </div>
</footer>


  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.umd.js"></script>
  <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
  <script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

  <script>
    (function () {
      var MIN_MS = 2500; // minimum time to show the preloader once

      function done() {
        var pre = document.getElementById('preloader');
        if (!pre) return;
        var elapsed = Date.now() - (window.__pre_start || Date.now());
        var wait = Math.max(0, MIN_MS - elapsed);
        setTimeout(function () {
          pre.classList.add('is-done');    // fade out
          setTimeout(function () {
            if (pre && pre.parentNode) pre.parentNode.removeChild(pre);
          }, 500); // after CSS transition
        }, wait);
      }

      if (document.readyState === 'complete') {
        done();
      } else {
        window.addEventListener('load', done);
      }
    })();
  </script>

  <script>
	  document.addEventListener("DOMContentLoaded", function () {
  const ENABLE_COUNTUP = false; // ⟵ turn off number animation

  // Init AOS
  if (window.AOS) AOS.init();

  // Init VanillaTilt ...

    document.addEventListener("DOMContentLoaded", function () {
      // Init AOS
      if (window.AOS) AOS.init();

      // Init VanillaTilt
      if (window.VanillaTilt) {
        VanillaTilt.init(document.querySelectorAll(".tilt-image"), {
          max: 15, speed: 300, glare: true, "max-glare": 0.4, scale: 1.05
        });
      }

      // Lazy-set src for secondary video
      const video2 = document.getElementById("background-video2");
      if (video2) {
        const srcEl = video2.querySelector("source");
        if (srcEl && srcEl.dataset.src) {
          srcEl.src = srcEl.dataset.src;
          video2.load();
        }
      }

      const statsSection = document.querySelector(".stats-section");
      const counters = document.querySelectorAll(".countup");
      const CountUpClass = window.CountUp || (window.countUp && window.countUp.CountUp);

      function startCounters() {
        counters.forEach(el => {
          const endVal = parseInt(el.dataset.count || el.textContent, 10) || 0;
          el.textContent = '0';
          if (CountUpClass) {
            const cu = new CountUpClass(el.id, endVal, { useEasing: true, separator: ',' });
            if (!cu.error) cu.start(); else console.error(cu.error);
          } else {
            el.textContent = endVal.toLocaleString();
          }
        });
      }

      if (statsSection && 'IntersectionObserver' in window) {
        let done = false;
        const io = new IntersectionObserver((entries) => {
          if (!done && entries[0].isIntersecting) {
            startCounters();
            done = true;
            io.disconnect();
          }
        }, { threshold: 0.3 });
        io.observe(statsSection);
      } else {
        startCounters();
      }

      if (window.jQuery && jQuery.fn && jQuery.fn.slick) {
        jQuery('.testimonial-slider').slick({
          dots: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 4000,
          infinite: true,
          slidesToShow: 2,
          responsive: [{ breakpoint: 768, settings: { slidesToShow: 1 } }]
        });
      }
    });
  </script>
<!--	Site made by William Jesus Guardado-->
</body>

</html>
