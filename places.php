<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Places — Trevel Away Tourisum</title>
<meta name="description" content="Every coastline and island Tideway currently charts, with exact coordinates, from Santorini to the Whitsundays.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;1,500&family=Public+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "header.php" ?>
<div class="banner_3">
<svg class="footer-compass" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="100" cy="100" r="96" stroke="#ffffff" stroke-width="1.5"/>
              <circle cx="100" cy="100" r="70" stroke="#ffffff" stroke-width="1"/>
              <path d="M100 10 L108 100 L100 190 L92 100 Z" fill="#ffffff"/>
              <path d="M10 100 L100 92 L190 100 L100 108 Z" fill="#ffffff" opacity=".6"/>
            </svg>
<header class="page-header">
  <div class="container-fluid">
    <span class="breadcrumb-mono">Tideway / Places</span>
    <h1>Every coastline currently on our chart.</h1>
    <p class="hero-lede mt-3">Eight of the forty-two places we plan trips to, plotted with their exact coordinates. Tap a filter to narrow by region, or open Packages to see a full itinerary.</p>
  </div>
</header>

</div>


<section style="padding-top:1rem;">
  <div class="container-fluid">
    <div class="row g-5">

      <div class="col-lg-3">
        <div class="filter-bar flex-lg-column" data-filter-bar data-reveal>
          <button class="filter-pill active" data-filter="all">All regions</button>
          <button class="filter-pill" data-filter="europe">Europe</button>
          <button class="filter-pill" data-filter="asia">Asia</button>
          <button class="filter-pill" data-filter="africa">Africa</button>
          <button class="filter-pill" data-filter="americas">Americas</button>
          <button class="filter-pill" data-filter="oceania">Oceania</button>
        </div>
      </div>

      <div class="col-lg-9">

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="europe">
          <div class="idx">01</div>
          <div class="thumb">
            <img src="images/usa.webp" alt="usa">
          </div>
          <div class="meta">
            <h4>New York, USA</h4>
            <p class="desc">Whitewashed cliffs above the caldera, best watched from a terrace at sunset.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">36.3932° N · 25.4615° E</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="europe">
          <div class="idx">02</div>
          <div class="thumb">
            <img src="images/italy.webp" alt="Amalfi Coast">
          </div>
          <div class="meta">
            <h4>Amalfi Coast, Italy</h4>
            <p class="desc">Cliffside towns linked by a coast road built for stopping, not speed.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">40.6340° N · 14.6027° E</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="asia">
          <div class="idx">03</div>
          <div class="thumb">
            <img src="images/maldivs.webp" alt="Maldives">
          </div>
          <div class="meta">
            <h4>Maldives</h4>
            <p class="desc">Overwater villas set over a house reef, with almost nothing on the horizon.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">3.2028° N · 73.2207° E</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="asia">
          <div class="idx">04</div>
          <div class="thumb">
            <img src="images/mauritus.webp" alt="Bali">
          </div>
          <div class="meta">
            <h4>Mauritius</h4>
            <p class="desc">Rice-terrace mornings and coastal temples, with reef breaks by afternoon.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">8.3405° S · 115.0920° E</div>
        </div>
        </div>


        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="asia">
          <div class="idx">05</div>
          <div class="thumb">
            <img src="images/india.webp" alt="Bali">
          </div>
          <div class="meta">
            <h4>India</h4>
            <p class="desc">Rice-terrace mornings and coastal temples, with reef breaks by afternoon.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">8.3405° S · 115.0920° E</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="europe">
          <div class="idx">06</div>
          <div class="thumb">
            <img src="images/netherland.jpg" alt="Norwegian Fjords">
          </div>
          <div class="meta">
            <h4>Netherland</h4>
            <p class="desc">Glacier-cut water between cliffs a thousand metres tall, sailed at slow speed.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">60.9721° N · 8.4689° E</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="africa">
          <div class="idx">07</div>
          <div class="thumb">
            <img src="images/kenya.webp" alt="Zanzibar">
          </div>
          <div class="meta">
            <h4>kenya</h4>
            <p class="desc">Spice-town alleys by morning, dhow-sailed sandbanks by low tide.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">6.1659° S · 39.1917° E</div>
        </div>
        </div>


        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="africa">
          <div class="idx">08</div>
          <div class="thumb">
            <img src="images/congo.webp" alt="Zanzibar">
          </div>
          <div class="meta">
            <h4>Congo</h4>
            <p class="desc">Spice-town alleys by morning, dhow-sailed sandbanks by low tide.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">6.1659° S · 39.1917° E</div>
        </div>
        </div>


        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="africa">
          <div class="idx">09</div>
          <div class="thumb">
            <img src="images/madagascar.webp" alt="Zanzibar">
          </div>
          <div class="meta">
            <h4>Madagascar</h4>
            <p class="desc">Spice-town alleys by morning, dhow-sailed sandbanks by low tide.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">6.1659° S · 39.1917° E</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="americas">
          <div class="idx">10</div>
          <div class="thumb">
            <img src="images/usa01.webp" alt="Big Sur">
          </div>
          <div class="meta">
            <h4>Big Sur, California</h4>
            <p class="desc">Fog-lined cliffs above the Pacific, walked at dawn before the coast road wakes up.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">36.2704° N · 121.8081° W</div>
        </div>
        </div>

        <div class="filter-col" data-reveal>
        <div class="place-row" data-filter-item="oceania">
          <div class="idx">11</div>
          <div class="thumb">
            <img src="images/aus.webp" alt="The Whitsundays">
          </div>
          <div class="meta">
            <h4>The Whitsundays, Australia</h4>
            <p class="desc">Silica-white sand and reef-calm water, reached by a scheduled morning boat.</p>
          </div>
          <div class="coord d-none d-sm-inline-flex">20.2870° S · 149.0280° E</div>
        </div>
        </div>

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
