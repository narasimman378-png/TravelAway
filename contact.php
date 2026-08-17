<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact — Trevel Away Tourisum</title>
<meta name="description" content="Tell us the coastline and your travel dates. A Tideway trip designer replies within one business day.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,500;0,600;1,500&family=Public+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "header.php" ?>

<header class="page-header">
  <div class="container-fluid">
    <span class="breadcrumb-mono">Tideway / Contact</span>
    <h1>Tell us the coastline. We'll check the tide table.</h1>
    <p class="hero-lede mt-3">Fill in the brief below and a trip designer will reply within one business day with availability and a first-pass itinerary — no obligation.</p>
  </div>
</header>

<section style="padding-top:1rem;">
  <div class="container-fluid">
    <div class="row g-5">

      <!-- FORM -->
      <div class="col-lg-7" data-reveal>
        <div class="pass-card">
          <div class="body p-lg-2">
            <h3 style="font-size:1.25rem;" class="mb-4">Trip brief</h3>
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-6">
                <label for="fname">First name</label>
                <input type="text" class="form-control" id="fname" required>
                <div class="invalid-feedback">Please enter your first name.</div>
              </div>
              <div class="col-md-6">
                <label for="lname">Last name</label>
                <input type="text" class="form-control" id="lname" required>
                <div class="invalid-feedback">Please enter your last name.</div>
              </div>
              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@email.com" required>
                <div class="invalid-feedback">A valid email helps us reply.</div>
              </div>
              <div class="col-md-6">
                <label for="phone">Phone (optional)</label>
                <input type="tel" class="form-control" id="phone" placeholder="+1 555 000 0000">
              </div>
              <div class="col-md-6">
                <label for="destination">Destination</label>
                <select class="form-select" id="destination" required>
                  <option value="">Choose a coastline…</option>
                  <option>Santorini, Greece</option>
                  <option>Amalfi Coast, Italy</option>
                  <option>Maldives</option>
                  <option>Bali, Indonesia</option>
                  <option>Norwegian Fjords</option>
                  <option>Zanzibar, Tanzania</option>
                  <option>Not sure yet</option>
                </select>
                <div class="invalid-feedback">Pick a coastline, or "Not sure yet".</div>
              </div>
              <div class="col-md-6">
                <label for="groupSize">Group size</label>
                <select class="form-select" id="groupSize" required>
                  <option value="">Choose…</option>
                  <option>Just me</option>
                  <option>2 travellers</option>
                  <option>3–4 travellers</option>
                  <option>5–8 travellers</option>
                  <option>9–12 travellers</option>
                </select>
                <div class="invalid-feedback">Let us know your group size.</div>
              </div>
              <div class="col-12">
                <label for="message">What should we know?</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Travel dates, pace, must-see stops, budget range…" required></textarea>
                <div class="invalid-feedback">A few lines helps us plan faster.</div>
              </div>
              <div class="col-12">
                <button class="btn btn-ocean btn-lg" type="submit">Send Trip Brief</button>
              </div>
            </form>
            <div class="d-none text-center py-4" data-form-success>
              <i class="bi bi-check-circle-fill text-ocean fs-1"></i>
              <h4 class="mt-3">Brief received.</h4>
              <p style="color:#3c6883;">A trip designer will reply within one business day with availability and a first-pass itinerary.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- SIDE INFO -->
      <div class="col-lg-5" data-reveal data-reveal-delay="120">
        <div class="hero-scene mb-4" style="height:220px;">
          
          <div class="hero-float-card" style="left:1.4rem; bottom:1.4rem;">
            <div class="title">Studio HQ</div>
            <div class="coord">51.4545° N · 2.5879° W</div>
          </div>
        </div>

        <div class="feature-item mb-4">
          <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
          <div>
            <h4>Visit</h4>
            <p>14 Harbourfront Row, Bristol, BS1 6XN, United Kingdom</p>
          </div>
        </div>
        <div class="feature-item mb-4">
          <div class="feature-icon"><i class="bi bi-envelope"></i></div>
          <div>
            <h4>Email</h4>
            <p>hello@tidewaytravel.com — replies within one business day</p>
          </div>
        </div>
        <div class="feature-item mb-4">
          <div class="feature-icon"><i class="bi bi-telephone"></i></div>
          <div>
            <h4>Call</h4>
            <p>+44 117 555 0142 — Mon–Fri, 9am–6pm GMT</p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><i class="bi bi-headset"></i></div>
          <div>
            <h4>Already travelling?</h4>
            <p>Current guests reach their trip designer directly — the contact card is in your welcome pack.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="bg-foam">
  <div class="container-fluid">
    <div class="row g-5">
      <div class="col-lg-4" data-reveal>
        <span class="eyebrow">Before you write in</span>
        <h2>A few common questions</h2>
        <p style="color:#3c6883;">If your question isn't here, the form above still reaches a person, not a queue.</p>
      </div>
      <div class="col-lg-8" data-reveal data-reveal-delay="100">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item" style="border-color:var(--mist);">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                How far ahead should I book?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="color:#3c6883;">Most trips are booked 3–6 months out, since groups are capped at 12 and popular dates fill early. We can sometimes plan on shorter notice — ask in your trip brief.</div>
            </div>
          </div>
          <div class="accordion-item" style="border-color:var(--mist);">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Can you build a custom itinerary?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="color:#3c6883;">Yes — most trips start from one of our packages and get adjusted from there. Mention it in your brief and your designer will send a revised plan.</div>
            </div>
          </div>
          <div class="accordion-item" style="border-color:var(--mist);">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                What's not included in the listed price?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="color:#3c6883;">International flights and travel insurance are priced separately — every package page lists exactly what is and isn't included.</div>
            </div>
          </div>
          <div class="accordion-item" style="border-color:var(--mist);">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                Do you offer travelling on short notice?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="color:#3c6883;">Occasionally, depending on the coastline and season. Send a trip brief with your dates and we'll tell you honestly if it's workable.</div>
            </div>
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
