<?php include 'includes/header.php'; ?>

    <style>
        .space-detail { background: var(--warm-white); padding: 6rem 5%; }
        .space-detail-container { max-width: 1200px; margin: 0 auto; }
        .space-detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center; margin-bottom: 8rem; }
        .space-detail-grid.reverse { direction: rtl; }
        .space-detail-grid.reverse > * { direction: ltr; }
        .space-gallery { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .space-gallery img { border-radius: 12px; width: 100%; object-fit: cover; }
        .space-gallery img:first-child { grid-row: span 2; height: 400px; }
        .space-gallery img:not(:first-child) { height: 190px; }
        .space-location-tag { display: inline-flex; align-items: center; gap: 0.5rem; background: var(--cream); color: var(--gold); font-size: 0.78rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; padding: 0.4rem 1rem; border-radius: 20px; margin-bottom: 1.2rem; }
        .space-detail-text h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); margin-bottom: 1rem; line-height: 1.15; }
        .space-detail-text p { color: var(--mid-gray); font-size: 0.95rem; line-height: 1.9; margin-bottom: 1.5rem; }
        .space-specs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 2rem; }
        .spec-item { padding: 1rem 1.25rem; background: var(--cream); border-radius: 12px; }
        .spec-label { font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--mid-gray); margin-bottom: 0.2rem; }
        .spec-value { font-family: var(--font-display); font-size: 1.3rem; font-weight: 400; color: var(--black); }
        .space-actions { display: flex; gap: 1rem; flex-wrap: wrap; }

        .office-types { background: var(--cream); padding: 6rem 5%; }
        .office-types-container { max-width: 1200px; margin: 0 auto; }
        .office-types h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); text-align: center; margin-bottom: 3rem; }
        .office-types-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
        .office-type-card { background: #fff; border-radius: 20px; padding: 2.5rem 2rem; text-align: center; transition: all 0.3s ease; border: 1px solid var(--light-gray); }
        .office-type-card:hover { transform: translateY(-6px); box-shadow: 0 20px 50px rgba(0,0,0,0.1); border-color: var(--gold-light); }
        .office-type-icon { width: 64px; height: 64px; background: linear-gradient(135deg, rgba(201,169,110,0.15), rgba(201,169,110,0.05)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: var(--gold); }
        .office-type-card h3 { font-family: var(--font-display); font-size: 1.4rem; font-weight: 400; color: var(--black); margin-bottom: 0.75rem; }
        .office-type-card p { font-size: 0.88rem; color: var(--mid-gray); line-height: 1.7; margin-bottom: 1.5rem; }
        .office-type-price { font-family: var(--font-display); font-size: 1.5rem; color: var(--gold); font-weight: 300; margin-bottom: 1.5rem; }
        .office-type-price small { font-family: var(--font-body); font-size: 0.78rem; color: var(--mid-gray); }

        .map-section { background: var(--black); padding: 6rem 5%; }
        .map-section-container { max-width: 1200px; margin: 0 auto; }
        .map-header { text-align: center; margin-bottom: 3rem; color: #fff; }
        .map-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; margin-top: 0.5rem; }
        .map-cards { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
        .map-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 2.5rem; }
        .map-card h3 { font-family: var(--font-display); font-size: 1.6rem; font-weight: 400; color: #fff; margin-bottom: 1rem; }
        .map-info { display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.5rem; }
        .map-info-item { display: flex; align-items: flex-start; gap: 0.75rem; color: rgba(255,255,255,0.6); font-size: 0.9rem; }
        .map-info-item i { color: var(--gold); margin-top: 3px; flex-shrink: 0; }
        .map-placeholder { background: rgba(255,255,255,0.04); border-radius: 12px; height: 220px; display: flex; align-items: center; justify-content: center; margin-top: 1.5rem; border: 1px dashed rgba(255,255,255,0.15); color: rgba(255,255,255,0.3); font-size: 0.85rem; text-align: center; gap: 0.5rem; }

        @media (max-width: 768px) {
            .space-detail-grid { grid-template-columns: 1fr; gap: 2.5rem; }
            .space-detail-grid.reverse { direction: ltr; }
            .office-types-grid { grid-template-columns: 1fr; }
            .map-cards { grid-template-columns: 1fr; }
            .space-gallery img:first-child { height: 250px; }
        }
    </style>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="section-label"><span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Our Workspaces<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span></div>
        <h1>Spaces built for<br><em>your ambitions</em></h1>
        <p>Two prime locations. Flexible configurations. One consistent standard of excellence — ready for you from day one.</p>
    </div>

    <!-- Location 1: Gurugram -->
    <section class="space-detail" id="gurugram">
        <div class="space-detail-container">
            <div class="space-detail-grid">
                <div class="space-gallery">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=700&q=80" alt="WorkAbitat Gurugram">
                    <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?auto=format&fit=crop&w=400&q=80" alt="Meeting Room Gurugram">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=400&q=80" alt="Collaborative Space Gurugram">
                </div>
                <div class="space-detail-text">
                    <span class="space-location-tag"><i class="fas fa-map-marker-alt"></i> Gurugram</span>
                    <h2>Modern Managed Office<br>Extension Road, Gurugram</h2>
                    <p>Located in the heart of Gurugram's commercial corridor, WorkAbitat Extension Road offers a premium managed office experience tailored for high-growth teams. From international startups to established enterprises, this space accommodates every ambition.</p>
                    <p>With state-of-the-art infrastructure, enhanced air quality systems, and 24/7 managed services — you'll work in an environment that rivals any global headquarters.</p>
                    <div class="space-specs">
                        <div class="spec-item">
                            <div class="spec-label">Starting Price</div>
                            <div class="spec-value">₹6,000<small>/seat/mo</small></div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Capacity</div>
                            <div class="spec-value">1 – 500+ Seats</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Location</div>
                            <div class="spec-value">Extension Road</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Access</div>
                            <div class="spec-value">24/7 Access</div>
                        </div>
                    </div>
                    <div class="space-actions">
                        <a href="contact.php?location=gurugram" class="btn-primary">Book a Tour</a>
                        <a href="pricing.php" class="btn-text-link" style="margin-top:0.4rem">View Pricing <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                    </div>
                </div>
            </div>

            <!-- Location 2: Mohali -->
            <div class="space-detail-grid reverse" id="mohali">
                <div class="space-gallery">
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?auto=format&fit=crop&w=700&q=80" alt="WorkAbitat Mohali">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=400&q=80" alt="Open Office Mohali">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80" alt="Team Space Mohali">
                </div>
                <div class="space-detail-text">
                    <span class="space-location-tag"><i class="fas fa-map-marker-alt"></i> Mohali</span>
                    <h2>Premium Co-Working<br>Sector 66–83, Mohali</h2>
                    <p>Situated in Mohali's fastest-growing business district, our Sector 66–83 workspace fuses professional excellence with a vibrant community culture. Perfect for growing teams that want the energy of a co-working environment with enterprise-grade infrastructure.</p>
                    <p>The enhanced air quality system and ionized drinking water are just some of the thoughtful wellness touches that make this workspace stand out from the rest.</p>
                    <div class="space-specs">
                        <div class="spec-item">
                            <div class="spec-label">Starting Price</div>
                            <div class="spec-value">₹7,000<small>/seat/mo</small></div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Capacity</div>
                            <div class="spec-value">1 – 500+ Seats</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Location</div>
                            <div class="spec-value">Sector 66–83</div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-label">Access</div>
                            <div class="spec-value">24/7 Access</div>
                        </div>
                    </div>
                    <div class="space-actions">
                        <a href="contact.php?location=mohali" class="btn-primary">Book a Tour</a>
                        <a href="pricing.php" class="btn-text-link" style="margin-top:0.4rem">View Pricing <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Types -->
    <section class="office-types">
        <div class="office-types-container">
            <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;margin-bottom:0.5rem">Workspace Types</div>
            <h2>Find your perfect<br>work setup</h2>
            <div class="office-types-grid">
                <div class="office-type-card">
                    <div class="office-type-icon"><i class="fas fa-chair"></i></div>
                    <h3>Hot Desk</h3>
                    <p>Flexible open seating — perfect for freelancers, remote workers, and collaborative teams who want energy and flexibility in their day.</p>
                    <div class="office-type-price">From ₹6,000 <small>/ seat / month</small></div>
                    <a href="contact.php" class="btn-text-link" style="display:inline-flex;margin:0 auto">Enquire Now <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                </div>
                <div class="office-type-card" style="border-color: var(--gold); position:relative;">
                    <div style="position:absolute;top:-1px;left:50%;transform:translateX(-50%);background:var(--gold);color:#fff;font-size:0.65rem;letter-spacing:.15em;font-weight:700;text-transform:uppercase;padding:.3rem .9rem;border-radius:0 0 10px 10px;">Most Popular</div>
                    <div class="office-type-icon"><i class="fas fa-door-closed"></i></div>
                    <h3>Private Cabin</h3>
                    <p>Dedicated, fully-enclosed office for your team. Branded, private, and always available — with all shared amenities included.</p>
                    <div class="office-type-price">Custom Pricing <small>for teams of 5–50+</small></div>
                    <a href="contact.php" class="btn-text-link" style="display:inline-flex;margin:0 auto">Get a Quote <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                </div>
                <div class="office-type-card">
                    <div class="office-type-icon"><i class="fas fa-building"></i></div>
                    <h3>Enterprise Managed Office</h3>
                    <p>Full-floor or multi-floor dedicated offices for 100–500+ seats. Custom buildout, branded environment, dedicated SLA-backed management.</p>
                    <div class="office-type-price">Custom Pricing <small>for large enterprises</small></div>
                    <a href="contact.php" class="btn-text-link" style="display:inline-flex;margin:0 auto">Talk to Us <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Map Info -->
    <section class="map-section">
        <div class="map-section-container">
            <div class="map-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;color:var(--gold)">
                    <span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Find Us<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>
                </div>
                <h2>We're at your city's<br>best addresses</h2>
            </div>
            <div class="map-cards">
                <div class="map-card">
                    <h3>Gurugram</h3>
                    <div class="map-info">
                        <div class="map-info-item"><i class="fas fa-map-marker-alt"></i><span>Extension Road, Gurugram, Haryana – 122001</span></div>
                        <div class="map-info-item"><i class="fas fa-train"></i><span>5 min from NH-48 / National Highway</span></div>
                        <div class="map-info-item"><i class="fas fa-parking"></i><span>Dedicated parking available</span></div>
                        <div class="map-info-item"><i class="fas fa-phone"></i><span>+91 98765 43210</span></div>
                    </div>
                    <a href="contact.php?location=gurugram" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;display:inline-flex;align-items:center;gap:0.5rem">Book Gurugram Tour <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                    <div class="map-placeholder"><i class="fas fa-map"></i><span>Gurugram — Extension Road<br><small>Open in Maps</small></span></div>
                </div>
                <div class="map-card">
                    <h3>Mohali</h3>
                    <div class="map-info">
                        <div class="map-info-item"><i class="fas fa-map-marker-alt"></i><span>Sector 66–83, Mohali, Punjab – 160066</span></div>
                        <div class="map-info-item"><i class="fas fa-road"></i><span>Well-connected to Chandigarh & Panchkula</span></div>
                        <div class="map-info-item"><i class="fas fa-parking"></i><span>Dedicated parking available</span></div>
                        <div class="map-info-item"><i class="fas fa-phone"></i><span>+91 98765 43211</span></div>
                    </div>
                    <a href="contact.php?location=mohali" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;display:inline-flex;align-items:center;gap:0.5rem">Book Mohali Tour <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
                    <div class="map-placeholder"><i class="fas fa-map"></i><span>Mohali — Sector 66–83<br><small>Open in Maps</small></span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;color:rgba(255,255,255,0.7);margin-bottom:.5rem">
            <span style="width:28px;height:1px;background:rgba(255,255,255,.5);display:block"></span>Get Started Today<span style="width:28px;height:1px;background:rgba(255,255,255,.5);display:block"></span>
        </div>
        <h2>Your ideal office<br>is a tour away</h2>
        <p>Schedule a free walkthrough at either location. Let our team build the perfect workspace plan for you.</p>
        <div>
            <a href="contact.php" class="btn-white">Schedule a Free Tour</a>
            <a href="pricing.php" class="btn-outline-white">See Pricing</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
