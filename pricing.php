<?php include 'includes/header.php'; ?>

    <style>
        .pricing-section { background: var(--warm-white); padding: 6rem 5%; }
        .pricing-section-container { max-width: 1200px; margin: 0 auto; }

        .pricing-header { text-align: center; margin-bottom: 4rem; }
        .pricing-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); margin-top: 0.5rem; }
        .pricing-header p { color: var(--mid-gray); font-size: 0.95rem; max-width: 560px; margin: 1rem auto 0; line-height: 1.8; }

        .pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-bottom: 5rem; }

        .pricing-card { background: #fff; border-radius: 24px; padding: 2.5rem; border: 1px solid var(--light-gray); transition: all 0.4s ease; position: relative; overflow: hidden; }
        .pricing-card.featured { background: var(--black); border-color: var(--gold); }
        .pricing-card:hover { transform: translateY(-8px); box-shadow: 0 24px 60px rgba(0,0,0,0.12); }

        .pricing-badge { display: inline-block; background: var(--gold); color: #fff; font-size: 0.65rem; letter-spacing: 0.15em; text-transform: uppercase; font-weight: 700; padding: 0.3rem 0.9rem; border-radius: 20px; margin-bottom: 1.5rem; }
        .pricing-name { font-size: 0.88rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; color: var(--mid-gray); margin-bottom: 0.5rem; }
        .pricing-card.featured .pricing-name { color: rgba(255,255,255,0.5); }

        .pricing-price { font-family: var(--font-display); font-size: 3.2rem; font-weight: 300; color: var(--black); line-height: 1; margin-bottom: 0.3rem; }
        .pricing-card.featured .pricing-price { color: #fff; }
        .pricing-price span { font-size: 1rem; font-family: var(--font-body); font-weight: 400; color: var(--mid-gray); }
        .pricing-card.featured .pricing-price span { color: rgba(255,255,255,0.4); }
        .pricing-taxes { font-size: 0.78rem; color: var(--mid-gray); margin-bottom: 0.75rem; }
        .pricing-card.featured .pricing-taxes { color: rgba(255,255,255,0.35); }

        .pricing-desc { font-size: 0.85rem; color: var(--mid-gray); margin-bottom: 2rem; line-height: 1.6; border-top: 1px solid var(--light-gray); padding-top: 1.5rem; }
        .pricing-card.featured .pricing-desc { color: rgba(255,255,255,0.4); border-top-color: rgba(255,255,255,0.1); }

        .pricing-features { list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 0.75rem; }
        .pricing-features li { display: flex; align-items: flex-start; gap: 0.75rem; font-size: 0.88rem; color: var(--charcoal); }
        .pricing-card.featured .pricing-features li { color: rgba(255,255,255,0.75); }
        .pricing-features li i { color: var(--gold); font-size: 0.75rem; flex-shrink: 0; margin-top: 3px; }

        .pricing-btn { display: block; text-align: center; padding: 0.9rem; border-radius: 50px; text-decoration: none; font-weight: 600; font-size: 0.88rem; transition: all 0.3s; }
        .pricing-btn-outline { border: 2px solid var(--light-gray); color: var(--black); }
        .pricing-btn-outline:hover { border-color: var(--gold); color: var(--gold); }
        .pricing-btn-gold { background: var(--gold); color: #fff; }
        .pricing-btn-gold:hover { background: var(--charcoal); color: #fff; }

        /* Addons */
        .addons-section { background: var(--cream); padding: 6rem 5%; }
        .addons-container { max-width: 1100px; margin: 0 auto; }
        .addons-header { text-align: center; margin-bottom: 3rem; }
        .addons-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); margin-top: 0.5rem; }
        .addons-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
        .addon-card { background: #fff; border-radius: 16px; padding: 2rem; border: 1px solid var(--light-gray); display: flex; align-items: flex-start; gap: 1.25rem; transition: all 0.3s; }
        .addon-card:hover { border-color: var(--gold-light); box-shadow: 0 8px 30px rgba(0,0,0,0.08); }
        .addon-icon { width: 48px; height: 48px; background: rgba(59, 130, 246,0.12); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 1.2rem; flex-shrink: 0; }
        .addon-text h4 { font-size: 0.95rem; font-weight: 600; color: var(--black); margin-bottom: 0.3rem; }
        .addon-text p { font-size: 0.82rem; color: var(--mid-gray); line-height: 1.6; }
        .addon-text .addon-price { font-family: var(--font-display); font-size: 1.1rem; color: var(--gold); margin-top: 0.4rem; }

        /* Enterprise Band */
        .enterprise-band { background: linear-gradient(135deg, #0B1E3C, #061225); padding: 5rem 5%; text-align: center; }
        .enterprise-band h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: #fff; margin-bottom: 1rem; }
        .enterprise-band p { color: rgba(255,255,255,0.6); font-size: 0.95rem; max-width: 560px; margin: 0 auto 2.5rem; line-height: 1.8; }
        .enterprise-features { display: flex; justify-content: center; flex-wrap: wrap; gap: 2rem; margin-bottom: 3rem; }
        .enterprise-feat { display: flex; align-items: center; gap: 0.6rem; color: rgba(255,255,255,0.75); font-size: 0.88rem; }
        .enterprise-feat i { color: var(--gold); }

        /* FAQ */
        .pricing-faq { background: var(--warm-white); padding: 6rem 5%; }
        .pricing-faq-container { max-width: 800px; margin: 0 auto; }
        .pricing-faq h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 300; color: var(--black); margin-bottom: 3rem; text-align: center; }

        @media (max-width: 1024px) { .pricing-grid { grid-template-columns: 1fr; max-width: 460px; margin: 0 auto 4rem; } .addons-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 768px) { .addons-grid { grid-template-columns: 1fr; } .enterprise-features { flex-direction: column; align-items: center; } }
    </style>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="section-label"><span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Pricing<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span></div>
        <h1>Simple, transparent<br><em>pricing</em></h1>
        <p>No hidden fees. No surprises. Pay per seat and scale up or down whenever your team needs it.</p>
    </div>

    <!-- Pricing Cards -->
    <section class="pricing-section">
        <div class="pricing-section-container">
            <div class="pricing-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">Choose Your Plan</div>
                <h2>One seat or an entire floor —<br>we've got you covered</h2>
                <p>All prices are exclusive of applicable taxes. Custom pricing available for teams of 50+ seats and enterprise managed offices.</p>
            </div>

            <div class="pricing-grid">
                <!-- Hot Desk -->
                <div class="pricing-card">
                    <div class="pricing-name">Hot Desk</div>
                    <div class="pricing-price">₹6,000 <span>/ seat / mo</span></div>
                    <div class="pricing-taxes">+ applicable taxes &nbsp;|&nbsp; Gurugram</div>
                    <div class="pricing-desc">Flexible open seating at WorkAbitat Gurugram Extension Road. Perfect for individuals, freelancers, and small remote teams who want a professional address.</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i>Dedicated ergonomic desk & chair</li>
                        <li><i class="fas fa-check"></i>High-speed WiFi</li>
                        <li><i class="fas fa-check"></i>AC indoor environment</li>
                        <li><i class="fas fa-check"></i>Ionized drinking water</li>
                        <li><i class="fas fa-check"></i>24/7 security & access</li>
                        <li><i class="fas fa-check"></i>Pantry access</li>
                        <li><i class="fas fa-check"></i>Power backup</li>
                        <li><i class="fas fa-check"></i>Printing support</li>
                    </ul>
                    <a href="contact.php" class="pricing-btn pricing-btn-outline">Get Started</a>
                </div>

                <!-- Premium Co-Working – Featured -->
                <div class="pricing-card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-name">Premium Co-Working</div>
                    <div class="pricing-price">₹7,000 <span>/ seat / mo</span></div>
                    <div class="pricing-taxes">+ applicable taxes &nbsp;|&nbsp; Mohali</div>
                    <div class="pricing-desc">Premium co-working experience at WorkAbitat Mohali Sector 66–83. Full suite of amenities with a vibrant business community around you.</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i>All Hot Desk inclusions</li>
                        <li><i class="fas fa-check"></i>Enhanced air quality system</li>
                        <li><i class="fas fa-check"></i>Meeting room credits (4 hrs/month)</li>
                        <li><i class="fas fa-check"></i>24/7 housekeeping</li>
                        <li><i class="fas fa-check"></i>Community event access</li>
                        <li><i class="fas fa-check"></i>Lockers & storage</li>
                        <li><i class="fas fa-check"></i>Visitor management</li>
                        <li><i class="fas fa-check"></i>Dedicated IT support</li>
                    </ul>
                    <a href="contact.php" class="pricing-btn pricing-btn-gold">Book a Tour</a>
                </div>

                <!-- Private Cabin -->
                <div class="pricing-card">
                    <div class="pricing-name">Private Cabin & Enterprise</div>
                    <div class="pricing-price" style="font-size:2rem;">Custom <span>pricing</span></div>
                    <div class="pricing-taxes">For teams of 5–500+ seats</div>
                    <div class="pricing-desc">Dedicated, fully-branded private offices for teams that need exclusivity, privacy, and a managed office experience at scale.</div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i>All Premium inclusions</li>
                        <li><i class="fas fa-check"></i>Dedicated private cabin/floor</li>
                        <li><i class="fas fa-check"></i>Custom branding & signage</li>
                        <li><i class="fas fa-check"></i>Unlimited meeting room use</li>
                        <li><i class="fas fa-check"></i>Dedicated account manager</li>
                        <li><i class="fas fa-check"></i>Custom SLA agreement</li>
                        <li><i class="fas fa-check"></i>Priority IT & admin support</li>
                        <li><i class="fas fa-check"></i>Both locations available</li>
                    </ul>
                    <a href="contact.php" class="pricing-btn pricing-btn-outline">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-ons -->
    <section class="addons-section">
        <div class="addons-container">
            <div class="addons-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">Add-Ons</div>
                <h2>Enhance your<br>workspace experience</h2>
            </div>
            <div class="addons-grid">
                <div class="addon-card">
                    <div class="addon-icon"><i class="fas fa-video"></i></div>
                    <div class="addon-text">
                        <h4>Meeting Room Booking</h4>
                        <p>Book conference rooms with full VC equipment on-demand for client calls, team meetings, and presentations.</p>
                        <div class="addon-price">From ₹500/hr</div>
                    </div>
                </div>
                <div class="addon-card">
                    <div class="addon-icon"><i class="fas fa-lock"></i></div>
                    <div class="addon-text">
                        <h4>Dedicated Storage Locker</h4>
                        <p>Secure personal lockers for your equipment and personal belongings — available at both locations.</p>
                        <div class="addon-price">₹1,000/month</div>
                    </div>
                </div>
                <div class="addon-card">
                    <div class="addon-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="addon-text">
                        <h4>Virtual Office Address</h4>
                        <p>Use our prime Gurugram or Mohali address for GST registration, courier handling, and business correspondence.</p>
                        <div class="addon-price">₹2,500/month</div>
                    </div>
                </div>
                <div class="addon-card">
                    <div class="addon-icon"><i class="fas fa-user-tie"></i></div>
                    <div class="addon-text">
                        <h4>Day Pass Access</h4>
                        <p>Need the space for just a day? Our day pass gives you full access to all shared amenities without a monthly commitment.</p>
                        <div class="addon-price">₹800/day</div>
                    </div>
                </div>
                <div class="addon-card">
                    <div class="addon-icon"><i class="fas fa-coffee"></i></div>
                    <div class="addon-text">
                        <h4>Café Membership</h4>
                        <p>Unlimited premium tea, coffee, and beverages throughout your workday — a well-stocked pantry just for you.</p>
                        <div class="addon-price">₹1,500/month</div>
                    </div>
                </div>
                <div class="addon-card">
                    <div class="addon-icon"><i class="fas fa-parking"></i></div>
                    <div class="addon-text">
                        <h4>Reserved Parking</h4>
                        <p>Dedicated reserved parking spot at your location — no more searching for a space every morning.</p>
                        <div class="addon-price">₹2,000/month</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enterprise Band -->
    <section class="enterprise-band">
        <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;color:var(--gold);margin-bottom:.75rem">
            <span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>For Large Teams<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>
        </div>
        <h2>Enterprise-scale solutions<br>at both locations</h2>
        <p>For teams of 50 to 500+ people, we build fully custom, managed office environments with dedicated SLA agreements and branded interiors.</p>
        <div class="enterprise-features">
            <div class="enterprise-feat"><i class="fas fa-check-circle"></i>Custom SLA agreements</div>
            <div class="enterprise-feat"><i class="fas fa-check-circle"></i>Branded office buildout</div>
            <div class="enterprise-feat"><i class="fas fa-check-circle"></i>Dedicated account manager</div>
            <div class="enterprise-feat"><i class="fas fa-check-circle"></i>Move-in within 72 hours</div>
            <div class="enterprise-feat"><i class="fas fa-check-circle"></i>Both Gurugram & Mohali</div>
        </div>
        <a href="contact.php" class="btn-primary">Talk to Our Enterprise Team</a>
    </section>

    <!-- Pricing FAQ -->
    <section class="pricing-faq">
        <div class="pricing-faq-container">
            <div style="text-align:center;margin-bottom:3rem">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">Pricing FAQ</div>
                <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,3rem);font-weight:300;color:var(--black);margin-top:.5rem">Answers to common<br>pricing questions</h2>
            </div>
            <div class="faq-list">
                <div class="faq-item open">
                    <div class="faq-q"><h3>Are there any hidden charges?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>No hidden charges. The listed price covers your seat and all included amenities. Taxes (GST) are charged as applicable. Add-ons like meeting rooms, parking, or day passes are billed separately and only when used.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>What is the minimum lock-in period?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>We offer flexible monthly memberships with no long lock-in for hot desks and co-working seats. For private cabins and enterprise offices, we offer quarterly or annual agreements with better rates.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>Can I use both Gurugram and Mohali locations?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>Yes! We offer multi-location memberships for teams that travel between cities frequently. Contact us to discuss a plan that gives your team access to both our prime locations.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>How do I pay — monthly or annually?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>We accept monthly and annual payment cycles. Annual plans come with preferential pricing and priority booking for meeting rooms. Payments are accepted via NEFT, RTGS, UPI, and business cheques.</p></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            const faqQ = item.querySelector('.faq-q');
            if (faqQ) {
                faqQ.addEventListener('click', () => {
                    const wasOpen = item.classList.contains('open');
                    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
                    if (!wasOpen) item.classList.add('open');
                });
            }
        });
    </script>

<?php include 'includes/footer.php'; ?>
