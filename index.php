<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trevel Away Tourisum — Coastal &amp; Island Journeys, Precisely Charted</title>
<meta name="description" content="Tideway Travel designs small-group coastal and island journeys — from the Amalfi cliffs to the Maldives atolls — charted down to the coordinate.">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;1,500&family=Public+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<!-- Bootstrap & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php include "header.php" ?>


<header class="hero">
  <div class="container-fluid position-relative">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-reveal>
        <span class="hero-kicker">40 shores · 6 continents · one atlas</span>
        <h1>Journeys charted to the <em>exact</em> coordinate.</h1>
        <p class="hero-lede">Tideway plans small-group coastal and island escapes — the itinerary is built around tide tables, ferry timings and golden hour, not guesswork. You get the coordinates; we get you there.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="packages.php" class="btn btn-ocean btn-lg">Browse Packages</a>
          <a href="places.php" class="btn btn-outline-ocean btn-lg">Explore Places</a>
        </div>

        <div class="hero-stats">
          <div>
            <div class="num"><span data-count-to="42">0</span></div>
            <div class="lbl">Destinations charted</div>
          </div>
          <div>
            <div class="num"><span data-count-to="9600" data-suffix="+">0</span></div>
            <div class="lbl">Travellers guided</div>
          </div>
          <div>
            <div class="num"><span data-count-to="4.9" data-decimals="1">0</span></div>
            <div class="lbl">Average rating</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-reveal data-reveal-delay="150">
        <div class="hero-visual">
          <div class="hero-scene">
            
            <!-- <div class="sun"></div> -->

             <svg class="hero-compass" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <circle cx="100" cy="100" r="96" stroke="#ffffff" stroke-width="1.5"/>
              <circle cx="100" cy="100" r="70" stroke="#ffffff" stroke-width="1"/>
              <path d="M100 10 L108 100 L100 190 L92 100 Z" fill="#ffffff"/>
              <path d="M10 100 L100 92 L190 100 L100 108 Z" fill="#ffffff" opacity=".6"/>
            </svg>
            
          </div>
          <div class="hero-float-card">
            <div class="title">Italy</div>
            <div class="coord">40.6340° N · 14.6027° E</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tideline mt-5">
    
  </div>
</header>


<section class="py-4 bg-white border-bottom" style="padding-top:0 !important;">
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-4 g-4 text-center">
      <div class="col"><i class="bi bi-shield-check fs-4 text-ocean"></i><div class="small fw-semibold mt-2">Fully bonded &amp; insured</div></div>
      <div class="col"><i class="bi bi-people fs-4 text-ocean"></i><div class="small fw-semibold mt-2">Groups capped at 12</div></div>
      <div class="col"><i class="bi bi-geo-alt fs-4 text-ocean"></i><div class="small fw-semibold mt-2">Local guides only</div></div>
      <div class="col"><i class="bi bi-arrow-counterclockwise fs-4 text-ocean"></i><div class="small fw-semibold mt-2">Free re-plan, once</div></div>
    </div>
  </div>
</section>


<section class="bg-foam">
  <div class="container-fluid">
    <div class="d-flex flex-wrap justify-content-between align-items-end section-head">
      <div>
        <span class="eyebrow">Currently in season</span>
        <h2>Four shores worth the flight right now</h2>
      </div>
      <a href="places.php" class="btn btn-outline-ocean d-none d-md-inline-flex">View all places</a>
    </div>

    <div class="row g-4">

      <!-- Santorini -->
      <div class="col-md-6 col-lg-3" data-reveal>
        <div class="pass-card">
          <div class="scene">
            <span class="tag">Greece</span>
            <img src="images/Santorini.jpg" alt="">
          </div>
          <div class="body">
            <div class="row-top">
              <h3>Santorini</h3>
            </div>
            <div class="coord">36.3932° N · 25.4615° E</div>
            <p>Whitewashed cliffs over the caldera, best watched from a terrace at 7:45pm.</p>
            <div class="stars">★★★★★ <span class="text-deep fw-semibold ms-1">4.9</span></div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3" data-reveal data-reveal-delay="100">
        <div class="pass-card">
          <div class="scene">
            <span class="tag">Maldives</span>
            <img src="images/baners.jpg" alt="Maldives">
          </div>
          <div class="body">
            <div class="row-top"><h3>Maldives</h3></div>
            <div class="coord">3.2028° N · 73.2207° E</div>
            <p>Overwater villas, house-reef snorkeling, and a horizon with nothing on it.</p>
            <div class="stars">★★★★★ <span class="text-deep fw-semibold ms-1">5.0</span></div>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-3" data-reveal data-reveal-delay="200">
        <div class="pass-card">
          <div class="scene">
            <span class="tag">Netherland</span>
            <img src="images/netherland.jpg" alt="Netherland">
          </div>
          <div class="body">
            <div class="row-top"><h3>Netherland</h3></div>
            <div class="coord">60.9721° N · 8.4689° E</div>
            <p>Glacier-cut water between cliffs a thousand metres tall, sailed at slow speed.</p>
            <div class="stars">★★★★★ <span class="text-deep fw-semibold ms-1">4.8</span></div>
          </div>
        </div>
      </div>

      
      <div class="col-md-6 col-lg-3" data-reveal data-reveal-delay="300">
        <div class="pass-card">
          <div class="scene">
            <span class="tag">Vietnam</span>
            <img src="images/vietnam.jpg" alt="Vietnam">
          </div>
          <div class="body">
            <div class="row-top"><h3>Vietnam</h3></div>
            <div class="coord">6.1659° S · 39.1917° E</div>
            <p>Spice-town alleys by morning, dhow-sailed sandbanks by low tide.</p>
            <div class="stars">★★★★☆ <span class="text-deep fw-semibold ms-1">4.7</span></div>
          </div>
        </div>
      </div>

    </div>
    <a href="places.php" class="btn btn-outline-ocean d-md-none mt-4 w-100">View all places</a>
  </div>
</section>


<section>
  <div class="container-fluid">
    <div class="row g-5 align-items-start">
      <div class="col-lg-5" data-reveal>
        <span class="eyebrow">How we plan</span>
        <h2>We build the itinerary around the water, not the other way round.</h2>
        <p class="text-deep-75" style="color:#3c6883;">Tide tables decide when you snorkel. Ferry schedules decide when you eat. Local guides decide where you actually go. It's a small amount of extra planning that removes almost all of the guesswork from a coastal trip.</p>
        <a href="about.php" class="btn btn-ocean mt-2">More about Tideway</a>
      </div>
      <div class="col-lg-7">
        <div class="row g-4">
          <div class="col-sm-6" data-reveal data-reveal-delay="50">
            <div class="feature-item">
              <div class="feature-icon"><i class="bi bi-moon-stars"></i></div>
              <div>
                <h4>Tide-timed itineraries</h4>
                <p>Snorkel slots, sandbank walks and low-tide crossings are scheduled to the actual tide chart for your travel dates.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6" data-reveal data-reveal-delay="120">
            <div class="feature-item">
              <div class="feature-icon"><i class="bi bi-person-check"></i></div>
              <div>
                <h4>Local, licensed guides</h4>
                <p>Every excursion is led by someone from that coastline, not a rotating pool of regional contractors.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6" data-reveal data-reveal-delay="190">
            <div class="feature-item">
              <div class="feature-icon"><i class="bi bi-people"></i></div>
              <div>
                <h4>Capped at 12 travellers</h4>
                <p>Small enough to change the day's plan on the spot if the weather or the water asks for it.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6" data-reveal data-reveal-delay="260">
            <div class="feature-item">
              <div class="feature-icon"><i class="bi bi-headset"></i></div>
              <div>
                <h4>24/7 on-trip support</h4>
                <p>A direct line to your trip designer for the entire journey, not a call centre queue.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="bg-foam">
  <div class="container-fluid">
    <div class="section-head mx-auto text-center" data-reveal>
      <span class="eyebrow justify-content-center">Field notes</span>
      <h2>What the tide brought back</h2>
    </div>

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-reveal>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="quote-card">
                <span class="quote-mark">"</span>
                <p>Our guide knew the exact hour the sandbank would surface off Zanzibar. We'd have missed it on our own.</p>
                <div class="who">
                  <div class="avatar-mark">R</div>
                  <div>
                    <div class="fw-semibold text-deep">Renata O.</div>
                    <div class="small text-ocean text-mono">Zanzibar Island Hop</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="quote-card">
                <span class="quote-mark">"</span>
                <p>Twelve people max meant we could swap a museum morning for an extra hour on the water. Loved that.</p>
                <div class="who">
                  <div class="avatar-mark">D</div>
                  <div>
                    <div class="fw-semibold text-deep">Danil K.</div>
                    <div class="small text-ocean text-mono">Amalfi Coast Drive</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="quote-card">
                <span class="quote-mark">"</span>
                <p>The itinerary listed sunset to the minute for every stop. Small detail, but it changed every photo we took.</p>
                <div class="who">
                  <div class="avatar-mark">M</div>
                  <div>
                    <div class="fw-semibold text-deep">Maya S.</div>
                    <div class="small text-ocean text-mono">Santorini Sunset Escape</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row g-4">
            <div class="col-md-4">
              <div class="quote-card">
                <span class="quote-mark">"</span>
                <p>Fjord crossings were timed around the ferry, not the other way round. Nothing felt rushed.</p>
                <div class="who">
                  <div class="avatar-mark">L</div>
                  <div>
                    <div class="fw-semibold text-deep">Lars H.</div>
                    <div class="small text-ocean text-mono">Norwegian Fjords Explorer</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="quote-card">
                <span class="quote-mark">"</span>
                <p>Booked five days before departure and they still had it planned to the hour. Impressive turnaround.</p>
                <div class="who">
                  <div class="avatar-mark">P</div>
                  <div>
                    <div class="fw-semibold text-deep">Priya N.</div>
                    <div class="small text-ocean text-mono">Bali Wellness Journey</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="quote-card">
                <span class="quote-mark">"</span>
                <p>Every villa had the reef right off the dock, exactly as promised in the brief. No surprises.</p>
                <div class="who">
                  <div class="avatar-mark">T</div>
                  <div>
                    <div class="fw-semibold text-deep">Tom A.</div>
                    <div class="small text-ocean text-mono">Maldives Overwater Retreat</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center gap-2 mt-4">
        <button class="btn btn-outline-ocean btn-sm-pill" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev"><i class="bi bi-arrow-left"></i></button>
        <button class="btn btn-outline-ocean btn-sm-pill" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next"><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section>


<section class="bg-abyss">
  <div class="container-fluid">
    <div class="row align-items-center g-4">
      <div class="col-lg-7" data-reveal>
        <span class="eyebrow" style="color:var(--light-blue);">Before you go</span>
        <h2 class="mb-2">Get one coastline in your inbox every month.</h2>
        <p style="color:#a9c9db;">Tide charts, off-season fares and the three-week window when each destination is actually at its best. No spam, unsubscribe anytime.</p>
      </div>
      <div class="col-lg-5" data-reveal data-reveal-delay="120">
        <form class="d-flex">
          <input type="email" required class="form-control newsletter-input flex-grow-1" placeholder="you@email.com" aria-label="Email address">
          <button class="btn btn-ocean rounded-start-0" style="border-radius:0 100px 100px 0;" type="submit">Subscribe</button>
        </form>
        <div class="coord mt-3">next dispatch · santorini, gr</div>
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
