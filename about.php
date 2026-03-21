<?php include 'includes/header.php'; ?>

    <style>
        .about-story { background: var(--warm-white); padding: 6rem 5%; }
        .about-story-container { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 6rem; align-items: center; margin-bottom: 6rem; }
        .about-story-image { position: relative; }
        .about-story-image img { border-radius: 20px; width: 100%; height: 520px; object-fit: cover; }
        .about-story-badge { position: absolute; bottom: -2rem; right: -2rem; background: var(--gold); color: #fff; padding: 1.5rem 2rem; border-radius: 16px; text-align: center; box-shadow: 0 12px 40px rgba(59,130,246,0.4); }
        .about-story-badge .badge-num { font-family: var(--font-display); font-size: 2.5rem; font-weight: 300; line-height: 1; }
        .about-story-badge .badge-label { font-size: 0.78rem; letter-spacing: 0.1em; text-transform: uppercase; opacity: 0.85; }
        .about-story-text h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); margin-bottom: 1.5rem; line-height: 1.15; }
        .about-story-text p { color: var(--mid-gray); font-size: 0.95rem; line-height: 1.9; margin-bottom: 1.5rem; }

        .about-values { background: var(--cream); padding: 6rem 5%; }
        .about-values-container { max-width: 1200px; margin: 0 auto; }
        .about-values-header { text-align: center; margin-bottom: 4rem; }
        .about-values-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: var(--black); margin-top: 0.5rem; }
        .values-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }
        .value-card { background: #fff; border-radius: 20px; padding: 2.5rem 2rem; text-align: center; border: 1px solid var(--light-gray); transition: all 0.3s ease; }
        .value-card:hover { border-color: var(--gold-light); transform: translateY(-6px); box-shadow: 0 16px 50px rgba(0,0,0,0.09); }
        .value-icon { width: 64px; height: 64px; background: linear-gradient(135deg, rgba(59,130,246,0.18), rgba(59,130,246,0.04)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: var(--gold); }
        .value-card h3 { font-family: var(--font-display); font-size: 1.4rem; font-weight: 400; color: var(--black); margin-bottom: 0.75rem; }
        .value-card p { font-size: 0.88rem; color: var(--mid-gray); line-height: 1.7; }

        .about-team { background: var(--black); padding: 6rem 5%; }
        .about-team-container { max-width: 1100px; margin: 0 auto; }
        .about-team-header { text-align: center; margin-bottom: 4rem; }
        .about-team-header h2 { font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem); font-weight: 300; color: #fff; margin-top: 0.5rem; }
        .about-team-header p { color: rgba(255,255,255,0.45); font-size: 0.9rem; margin-top: 0.75rem; }
        .team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; }
        .team-card { text-align: center; }
        .team-photo { width: 100%; height: 200px; border-radius: 16px; object-fit: cover; margin-bottom: 1.25rem; filter: grayscale(20%); transition: filter 0.3s; }
        .team-card:hover .team-photo { filter: none; }
        .team-name { font-family: var(--font-display); font-size: 1.2rem; font-weight: 400; color: #fff; margin-bottom: 0.25rem; }
        .team-role { font-size: 0.78rem; color: var(--gold); letter-spacing: 0.08em; }

        .about-stats { background: var(--gold); padding: 5rem 5%; }
        .about-stats-container { max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; text-align: center; }
        .about-stat-num { font-family: var(--font-display); font-size: 3.5rem; font-weight: 300; color: #fff; line-height: 1; margin-bottom: 0.4rem; }
        .about-stat-label { font-size: 0.78rem; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(255,255,255,0.75); }

        @media (max-width: 1024px) { .about-story-container { grid-template-columns: 1fr; gap: 3rem; } .team-grid { grid-template-columns: repeat(2, 1fr); } .values-grid { grid-template-columns: 1fr 1fr; } .about-stats-container { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) { .about-story-badge { position: static; margin-top: 1.5rem; display: inline-block; } .values-grid { grid-template-columns: 1fr; } .team-grid { grid-template-columns: 1fr 1fr; } }
    </style>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="section-label"><span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>About Us<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span></div>
        <h1>We build more than<br><em>offices</em></h1>
        <p>WorkAbitat Solutions is on a mission to create workspaces where people and businesses thrive — through hospitality, design, and community.</p>
    </div>

    <!-- Story Section -->
    <section class="about-story">
        <div class="about-story-container">
            <div class="about-story-image">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=900&q=80" alt="WorkAbitat Office">
                <div class="about-story-badge">
                    <div class="badge-num">500+</div>
                    <div class="badge-label">Happy Members</div>
                </div>
            </div>
            <div class="about-story-text">
                <div class="section-label">Our Story</div>
                <h2>Born from a hospitality<br>vision for workspaces</h2>
                <p>WorkAbitat Solutions was founded with one guiding belief: that a workspace should work as hard as the people in it. We saw a gap in the market — co-working spaces that were functional but not exceptional, equipped but not inspiring.</p>
                <p>We set out to change that by bringing the warmth and attentiveness of hospitality to the world of managed offices. Today, WorkAbitat operates two premium properties across Gurugram and Mohali, serving startups, SMEs, and enterprise teams who refuse to settle for ordinary.</p>
                <p>Every seat, every service, every interaction at WorkAbitat is designed with one question in mind: how does this help our members do their best work?</p>
                <a href="contact.php" class="btn-text-link">Start your journey with us <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
            </div>
        </div>

        <div style="max-width:1200px;margin:0 auto;">
            <div style="text-align:center;margin-bottom:3rem">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">Mission & Vision</div>
                <h2 style="font-family:var(--font-display);font-size:clamp(2rem,4vw,3rem);font-weight:300;color:var(--black);margin-top:.5rem">What drives us<br>every day</h2>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem">
                <div style="background:var(--cream);border-radius:20px;padding:2.5rem">
                    <div style="width:48px;height:48px;background:rgba(59,130,246,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--gold);font-size:1.2rem"><i class="fas fa-bullseye"></i></div>
                    <h3 style="font-family:var(--font-display);font-size:1.5rem;font-weight:400;color:var(--black);margin-bottom:0.75rem">Our Mission</h3>
                    <p style="color:var(--mid-gray);font-size:0.92rem;line-height:1.8">To deliver hospitality-driven co-working spaces where service, comfort, and community fuel business growth — transforming how teams experience their workplace every single day.</p>
                </div>
                <div style="background:var(--black);border-radius:20px;padding:2.5rem">
                    <div style="width:48px;height:48px;background:rgba(59,130,246,0.15);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--gold);font-size:1.2rem"><i class="fas fa-eye"></i></div>
                    <h3 style="font-family:var(--font-display);font-size:1.5rem;font-weight:400;color:#fff;margin-bottom:0.75rem">Our Vision</h3>
                    <p style="color:rgba(255,255,255,0.5);font-size:0.92rem;line-height:1.8">To become India's most trusted co-working partner for startups and enterprises — known for excellence, flexibility, and a workspace experience that genuinely elevates the people who use it.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="about-values">
        <div class="about-values-container">
            <div class="about-values-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem">Our Values</div>
                <h2>The principles that<br>guide everything we do</h2>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-heart"></i></div>
                    <h3>Hospitality First</h3>
                    <p>We treat every member like a valued guest. From your first tour to your daily experience, every interaction is designed to delight and support your success.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h3>Radically Flexible</h3>
                    <p>Business needs change. We're built to flex with you — scale from 1 seat to 500+, change locations, or adjust your plan with minimal friction.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-star"></i></div>
                    <h3>Uncompromising Quality</h3>
                    <p>From the furniture we choose to the water you drink — every element of WorkAbitat is selected with quality in mind. No compromises, ever.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h3>Community Driven</h3>
                    <p>Great work happens when great people are around each other. We curate a community that supports collaboration, knowledge sharing, and professional growth.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Wellness Conscious</h3>
                    <p>Air quality, ionized water, natural light — we invest in the elements that keep your team healthy, focused, and energized throughout the workday.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Trusted Partner</h3>
                    <p>We're not just a landlord — we're your workspace partner. We listen, adapt, and deliver to become an invisible force that powers your business forward.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="about-team">
        <div class="about-team-container">
            <div class="about-team-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;color:var(--gold)">
                    <span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Our People<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>
                </div>
                <h2>The team behind<br>WorkAbitat</h2>
                <p>Passionate professionals who believe workspaces can change how people feel about work.</p>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="CEO" class="team-photo">
                    <div class="team-name">Vikram Singh</div>
                    <div class="team-role">Founder & CEO</div>
                </div>
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=400&q=80" alt="COO" class="team-photo">
                    <div class="team-name">Ananya Bhat</div>
                    <div class="team-role">Chief Operations Officer</div>
                </div>
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=400&q=80" alt="Head of Design" class="team-photo">
                    <div class="team-name">Arjun Malhotra</div>
                    <div class="team-role">Head of Workspace Design</div>
                </div>
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=400&q=80" alt="Customer Success" class="team-photo">
                    <div class="team-name">Simran Gill</div>
                    <div class="team-role">Customer Success Lead</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="about-stats">
        <div class="about-stats-container">
            <div>
                <div class="about-stat-num">500+</div>
                <div class="about-stat-label">Seats Available</div>
            </div>
            <div>
                <div class="about-stat-num">2</div>
                <div class="about-stat-label">Prime Locations</div>
            </div>
            <div>
                <div class="about-stat-num">300+</div>
                <div class="about-stat-label">Active Members</div>
            </div>
            <div>
                <div class="about-stat-num">98%</div>
                <div class="about-stat-label">Member Satisfaction</div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band">
        <h2>Ready to become part<br>of the WorkAbitat family?</h2>
        <p>Book a free tour at Gurugram or Mohali and see what hospitality-driven co-working really feels like.</p>
        <div>
            <a href="contact.php" class="btn-white">Book a Free Tour</a>
            <a href="spaces.php" class="btn-outline-white">Explore Spaces</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
