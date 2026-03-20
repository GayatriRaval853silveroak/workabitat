<?php include 'includes/header.php'; ?>

    <style>
        .amenities-detail { background: var(--warm-white); padding: 6rem 5%; }
        .amenities-detail-container { max-width: 1200px; margin: 0 auto; }
        .amenities-detail-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 2.5rem; margin-bottom: 6rem; }
        .amenity-detail-card { display: flex; gap: 1.5rem; padding: 2.5rem; background: #fff; border-radius: 20px; border: 1px solid var(--light-gray); transition: all 0.3s ease; }
        .amenity-detail-card:hover { border-color: var(--gold-light); box-shadow: 0 12px 40px rgba(0,0,0,0.08); transform: translateY(-4px); }
        .amenity-detail-icon { width: 56px; height: 56px; background: linear-gradient(135deg, rgba(201,169,110,0.2), rgba(201,169,110,0.05)); border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; color: var(--gold); flex-shrink: 0; }
        .amenity-detail-text h3 { font-family: var(--font-display); font-size: 1.3rem; font-weight: 400; color: var(--black); margin-bottom: 0.5rem; }
        .amenity-detail-text p { font-size: 0.88rem; color: var(--mid-gray); line-height: 1.7; }

        .wellness-strip { background: linear-gradient(135deg, var(--black) 0%, #1a1410 100%); padding: 6rem 5%; }
        .wellness-container { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: center; }
        .wellness-text h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: #fff; margin-bottom: 1.2rem; line-height: 1.15; }
        .wellness-text p { color: rgba(255,255,255,0.6); font-size: 0.95rem; line-height: 1.9; margin-bottom: 1.5rem; }
        .wellness-points { display: flex; flex-direction: column; gap: 1rem; }
        .wellness-point { display: flex; align-items: flex-start; gap: 1rem; }
        .wellness-point-icon { width: 42px; height: 42px; background: rgba(201,169,110,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 1rem; flex-shrink: 0; }
        .wellness-point-text h4 { font-size: 0.95rem; color: #fff; font-weight: 500; margin-bottom: 0.25rem; }
        .wellness-point-text p { font-size: 0.83rem; color: rgba(255,255,255,0.5); line-height: 1.6; }
        .wellness-image { border-radius: 20px; overflow: hidden; height: 480px; }
        .wellness-image img { width: 100%; height: 100%; object-fit: cover; }

        .comparison-section { background: var(--cream); padding: 6rem 5%; }
        .comparison-container { max-width: 900px; margin: 0 auto; }
        .comparison-header { text-align: center; margin-bottom: 3rem; }
        .comparison-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); margin-top: 0.5rem; }
        .comparison-table { background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 40px rgba(0,0,0,0.08); }
        .comparison-row { display: grid; grid-template-columns: 2fr 1fr 1fr; align-items: center; padding: 1.2rem 2rem; border-bottom: 1px solid var(--light-gray); }
        .comparison-row:last-child { border-bottom: none; }
        .comparison-row.header { background: var(--black); color: #fff; font-size: 0.8rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; }
        .comparison-row.header .col-brand { color: var(--gold); }
        .comparison-row:not(.header):nth-child(even) { background: var(--warm-white); }
        .comparison-feature { font-size: 0.9rem; color: var(--charcoal); }
        .comparison-check { text-align: center; font-size: 1.1rem; }
        .check-yes { color: var(--gold); }
        .check-no { color: var(--light-gray); }
        .check-partial { color: #e8a06d; }

        @media (max-width: 768px) {
            .amenities-detail-grid { grid-template-columns: 1fr; }
            .wellness-container { grid-template-columns: 1fr; gap: 2.5rem; }
            .comparison-row { grid-template-columns: 2fr 1fr 1fr; padding: 1rem; gap: 0; }
            .comparison-feature { font-size: 0.8rem; }
        }
    </style>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="section-label"><span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Amenities<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span></div>
        <h1>Every detail<br>thought <em>through</em></h1>
        <p>From ionized drinking water to state-of-the-art conference rooms — WorkAbitat delivers a workspace experience that elevates your every workday.</p>
    </div>

    <!-- Amenities Detail -->
    <section class="amenities-detail">
        <div class="amenities-detail-container">
            <div style="text-align:center;margin-bottom:3.5rem">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">What's Included</div>
                <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,3rem);font-weight:300;color:var(--black);margin-top:0.5rem">All amenities included<br>in every seat</h2>
            </div>
            <div class="amenities-detail-grid">
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-wifi"></i></div>
                    <div class="amenity-detail-text">
                        <h3>High-Speed WiFi</h3>
                        <p>Enterprise-grade, redundant internet connectivity with dedicated bandwidth. No throttling, no downtime — just seamless connectivity for your entire team.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-snowflake"></i></div>
                    <div class="amenity-detail-text">
                        <h3>Fully Air-Conditioned with Enhanced Air Quality</h3>
                        <p>Advanced HVAC systems maintain optimal temperature and air purity. Our enhanced air quality systems reduce allergens and maintain fresh, clean air throughout the day.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-droplet"></i></div>
                    <div class="amenity-detail-text">
                        <h3>Advanced Ionized Drinking Water</h3>
                        <p>Purified, ionized drinking water stations throughout the workspace — designed to support enhanced hydration and daily wellness for every team member.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-video"></i></div>
                    <div class="amenity-detail-text">
                        <h3>Meeting & Conference Rooms with VC</h3>
                        <p>Professionally equipped meeting rooms with high-definition video conferencing, whiteboards, and seamless connectivity — bookable on-demand for your team.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-bolt"></i></div>
                    <div class="amenity-detail-text">
                        <h3>100% Power Backup</h3>
                        <p>Uninterrupted power supply via high-capacity UPS and generator backup. Your work never stops — even during power outages.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-chair"></i></div>
                    <div class="amenity-detail-text">
                        <h3>Ergonomic Furniture</h3>
                        <p>Premium ergonomic chairs, height-adjustable desks, and thoughtfully designed workstations that support long hours of productive, comfortable work.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-mug-hot"></i></div>
                    <div class="amenity-detail-text">
                        <h3>Pantry & Refreshment Area</h3>
                        <p>Stocked pantry with tea, coffee, and refreshments. A welcoming space for informal conversations, quick breaks, and recharging between meetings.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-broom"></i></div>
                    <div class="amenity-detail-text">
                        <h3>24/7 Housekeeping Services</h3>
                        <p>Round-the-clock professional housekeeping ensures your workspace is always spotless, sanitized, and presentation-ready — without you lifting a finger.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-shield-halved"></i></div>
                    <div class="amenity-detail-text">
                        <h3>24/7 Security & Access</h3>
                        <p>Biometric access control, CCTV surveillance, and professional on-site security personnel keep your team and assets safe around the clock.</p>
                    </div>
                </div>
                <div class="amenity-detail-card">
                    <div class="amenity-detail-icon"><i class="fas fa-print"></i></div>
                    <div class="amenity-detail-text">
                        <h3>Printing & Office Support</h3>
                        <p>High-speed printers, scanners, and copiers available for all members. On-site office support for courier, stationery, and administrative needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wellness Strip -->
    <section class="wellness-strip">
        <div class="wellness-container">
            <div class="wellness-text">
                <div class="section-label">Wellness-First Design</div>
                <h2>An office that cares<br>about your health</h2>
                <p>At WorkAbitat, we believe your environment directly impacts your productivity and wellbeing. That's why we've invested in features most co-working spaces overlook.</p>
                <div class="wellness-points">
                    <div class="wellness-point">
                        <div class="wellness-point-icon"><i class="fas fa-wind"></i></div>
                        <div class="wellness-point-text">
                            <h4>Enhanced Air Quality System</h4>
                            <p>HEPA filtration and continuous air circulation for a healthier, cleaner breathing environment every day.</p>
                        </div>
                    </div>
                    <div class="wellness-point">
                        <div class="wellness-point-icon"><i class="fas fa-droplet"></i></div>
                        <div class="wellness-point-text">
                            <h4>Ionized Drinking Water</h4>
                            <p>Alkaline, ionized water supports better hydration and cognitive performance throughout your workday.</p>
                        </div>
                    </div>
                    <div class="wellness-point">
                        <div class="wellness-point-icon"><i class="fas fa-sun"></i></div>
                        <div class="wellness-point-text">
                            <h4>Natural Light Optimization</h4>
                            <p>Workspace design that maximizes natural light exposure, reducing eye strain and boosting mood and energy.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wellness-image">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=900&q=80" alt="WorkAbitat Wellness Environment">
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="comparison-section">
        <div class="comparison-container">
            <div class="comparison-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">How We Compare</div>
                <h2>WorkAbitat vs.<br>Typical Co-working</h2>
            </div>
            <div class="comparison-table">
                <div class="comparison-row header">
                    <div>Feature</div>
                    <div class="col-brand" style="text-align:center">WorkAbitat</div>
                    <div style="text-align:center">Typical Co-work</div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">High-Speed Dedicated WiFi</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-partial"><i class="fas fa-minus-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">Enhanced Air Quality System</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-no"><i class="fas fa-times-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">Ionized Drinking Water</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-no"><i class="fas fa-times-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">100% Power Backup</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-partial"><i class="fas fa-minus-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">24/7 Housekeeping</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-no"><i class="fas fa-times-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">Conference Rooms with VC Equipment</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-partial"><i class="fas fa-minus-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">24/7 Security & Biometric Access</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-partial"><i class="fas fa-minus-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">Ergonomic Premium Furniture</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-partial"><i class="fas fa-minus-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">Scalable 1–500+ Seats</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-no"><i class="fas fa-times-circle"></i></div>
                </div>
                <div class="comparison-row">
                    <div class="comparison-feature">Hospitality-Driven Management</div>
                    <div class="comparison-check check-yes"><i class="fas fa-check-circle"></i></div>
                    <div class="comparison-check check-no"><i class="fas fa-times-circle"></i></div>
                </div>
            </div>
            <p style="text-align:center;margin-top:1.5rem;font-size:0.8rem;color:var(--mid-gray)"><i class="fas fa-minus-circle" style="color:#e8a06d"></i> Partially available &nbsp; <i class="fas fa-times-circle" style="color:var(--light-gray)"></i> Not available</p>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <h2>Experience the difference<br>for yourself</h2>
        <p>Book a free tour and see how WorkAbitat redefines what a workspace can be.</p>
        <div>
            <a href="contact.php" class="btn-white">Book a Free Tour</a>
            <a href="pricing.php" class="btn-outline-white">View Pricing</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
