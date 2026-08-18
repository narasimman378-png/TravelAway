<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Packages — Trevel Away Tourisum</title>
<meta name="description" content="Six coastal and island packages, each planned around tide, transit and daylight. Browse itineraries and pricing.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;1,500&family=Public+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "header.php" ?>

<div class="banner_2">
<svg class="footer-compass" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="100" cy="100" r="96" stroke="#ffffff" stroke-width="1.5"/>
              <circle cx="100" cy="100" r="70" stroke="#ffffff" stroke-width="1"/>
              <path d="M100 10 L108 100 L100 190 L92 100 Z" fill="#ffffff"/>
              <path d="M10 100 L100 92 L190 100 L100 108 Z" fill="#ffffff" opacity=".6"/>
            </svg>
<header class="page-header">
  <div class="container-fluid">
    <span class="breadcrumb-mono">Travel Away / Packages</span>
    <h1>Six itineraries, each built around a tide table.</h1>
    <p class="hero-lede mt-3">Every package below lists what's included, what's not, and the exact number of days on the water. Open one for the full day-by-day plan.</p>
  </div>
</header>

</div>


<section style="padding-top:1rem;">
  <div class="container-fluid">
    <div class="filter-bar mb-5" data-filter-bar>
      <button class="filter-pill active" data-filter="all">All packages</button>
      <button class="filter-pill" data-filter="europe">Europe</button>
      <button class="filter-pill" data-filter="asia">Asia</button>
      <button class="filter-pill" data-filter="africa">Africa</button>
      <button class="filter-pill" data-filter="island">Island escapes</button>
    </div>

    <div class="row g-4">

      
      <div class="col-md-6 col-lg-4 filter-col" data-reveal>
        <div class="pass-card" data-filter-item="europe">
          <div class="scene">
            <span class="tag">USA · 6 days</span>
            <img src="images/usa.webp" alt="USA">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>USA</h3>
              <div class="price">$2,450<small>per person</small></div>
            </div>
            <div class="coord">36.3932° N · 25.4615° E</div>
            <p>Caldera-side stays, a private catamaran sunset sail, and two free evenings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="80">
        <div class="pass-card" data-filter-item="europe">
          <div class="scene">
            <span class="tag">Italy · 7 days</span>
            <img src="images/italy.webp" alt="italy">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Italy</h3>
              <div class="price">$2,890<small>per person</small></div>
            </div>
            <div class="coord">40.6340° N · 14.6027° E</div>
            <p>Cliffside towns by open-top car, with a private boat day to Capri.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>7 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="asia island">
          <div class="scene">
            <span class="tag">Maldives · 5 days</span>
            <img src="images/maldivs.webp" alt="Maldives Overwater Retreat">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Maldives Overwater Retreat</h3>
              <div class="price">$3,650<small>per person</small></div>
            </div>
            <div class="coord">3.2028° N · 73.2207° E</div>
            <p>An overwater villa, house-reef snorkeling, and one sandbank picnic.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>5 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-4 filter-col" data-reveal>
        <div class="pass-card" data-filter-item="asia">
          <div class="scene">
            <span class="tag">China · 8 days</span>
            <img src="images/hogkong.webp" alt="china hong kong">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>China Hong Kong</h3>
              <div class="price">$2,180<small>per person</small></div>
            </div>
            <div class="coord">8.3405° S · 115.0920° E</div>
            <p>Rice-terrace mornings, coastal temples, and three guided surf lessons.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>8 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="80">
        <div class="pass-card" data-filter-item="europe">
          <div class="scene">
            <span class="tag">France · 9 days</span>
            <img src="images/france.webp" alt="France">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>France</h3>
              <div class="price">$3,990<small>per person</small></div>
            </div>
            <div class="coord">60.9721° N · 8.4689° E</div>
            <p>Slow ferry crossings between six fjords, plus one midnight-sun hike.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>9 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>

     
      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="africa island">
          <div class="scene">
            <span class="tag">Mauritius · 6 days</span>
            <img src="images/mauritus.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Mauritius</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="asia">
          <div class="scene">
            <span class="tag">Russia · 6 days</span>
            <img src="images/moscow.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Moscow</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="asia">
          <div class="scene">
            <span class="tag">India · 6 days</span>
            <img src="images/india.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>India</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="africa">
          <div class="scene">
            <span class="tag">Congo · 6 days</span>
            <img src="images/congo.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Congo</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="africa">
          <div class="scene">
            <span class="tag">Keny · 6 days</span>
            <img src="images/kenya.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Kenya</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="africa">
          <div class="scene">
            <span class="tag">Madagascar · 6 days</span>
            <img src="images/madagascar.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Madagascar</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>


       <div class="col-md-6 col-lg-4 filter-col" data-reveal data-reveal-delay="160">
        <div class="pass-card" data-filter-item="asia island">
          <div class="scene">
            <span class="tag">Andhaman Nico Bar · 6 days</span>
            <img src="images/andaman.webp" alt="Mauritius">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Andhaman Nico Bar</h3>
              <div class="price">$2,340<small>per person</small></div>
            </div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Stone Town alleys, a dhow-sailed sandbank, and two spice-farm mornings.</p>
            <div class="pass-notch">
              <span class="chip"><i class="bi bi-clock me-1"></i>6 days</span>
              <a href="package-details.php" class="btn btn-outline-ocean btn-sm-pill">View details</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>


<section class="bg-foam">
  <div class="container-fluid">
    <div class="row align-items-center g-4">
      <div class="col-lg-8" data-reveal>
        <span class="eyebrow">Not seeing your coastline?</span>
        <h2>We build custom itineraries too — same tide-and-transit method.</h2>
      </div>
      <div class="col-lg-4 text-lg-end" data-reveal data-reveal-delay="100">
        <a href="contact.php" class="btn btn-ocean btn-lg">Request a Custom Trip</a>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>

<button class="back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
