<?php include 'includes/header.php'; ?>

    <style>
        .contact-main { background: var(--warm-white); padding: 8rem 5%; position: relative; overflow: hidden; }
        .contact-main::before { content: ''; position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(59,130,246,0.05) 0%, transparent 70%); z-index: 0; pointer-events: none; }
        .contact-main::after { content: ''; position: absolute; bottom: -100px; left: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(59,130,246,0.05) 0%, transparent 70%); z-index: 0; pointer-events: none; }
        
        .contact-container { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; position: relative; z-index: 1; }

        .contact-card {
            background: #fff;
            border-radius: 30px;
            padding: 4rem 3.5rem;
            border: 1px solid rgba(59,130,246,0.1);
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
        }
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.08);
            border-color: rgba(59,130,246,0.3);
        }

        .contact-card h2 { font-family: var(--font-display); font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 300; color: var(--black); margin-bottom: 1.5rem; line-height: 1.1; }
        .contact-card p { color: var(--mid-gray); font-size: 0.95rem; line-height: 1.8; margin-bottom: 3rem; }

        .contact-loc-block { margin-bottom: 2.5rem; }
        .contact-loc-title { 
            display: flex; 
            align-items: center; 
            gap: 1rem; 
            font-family: var(--font-display); 
            font-size: 1.3rem; 
            font-weight: 400; 
            color: var(--black); 
            margin-bottom: 1rem; 
            border-bottom: 1px solid var(--light-gray);
            padding-bottom: 0.75rem;
        }
        .contact-loc-title i { color: var(--gold); font-size: 1.1rem; }
        
        .contact-loc-info { display: flex; flex-direction: column; gap: 1rem; }
        .contact-loc-info span { display: flex; align-items: flex-start; gap: 0.85rem; color: var(--mid-gray); font-size: 0.95rem; line-height: 1.6; }
        .contact-loc-info span i { color: var(--gold); margin-top: 4px; flex-shrink: 0; font-size: 0.85rem; }

        .contact-social { display: flex; gap: 1rem; margin-top: 3rem; }
        .social-circle {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1px solid var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--charcoal);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .social-circle:hover {
            background: var(--black);
            color: #fff;
            border-color: var(--black);
            transform: translateY(-3px);
        }

        .large-phone { 
            display: block;
            font-size: 1.8rem; 
            font-family: var(--font-display); 
            color: var(--gold); 
            font-weight: 300; 
            margin-bottom: 0.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }
        .large-phone:hover { color: var(--black); }

        /* General Enquiry Row */
        .general-enquiry-banner { 
            max-width: 1200px; 
            margin: 6rem auto 0; 
            padding: 5rem 3rem; 
            border-radius: 30px;
            background: var(--black);
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .general-enquiry-banner::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, transparent 100%);
            z-index: -1;
        }
        .general-enquiry-banner h3 { font-family: var(--font-display); font-size: clamp(1.8rem, 3vw, 2.5rem); font-weight: 300; margin-bottom: 1.5rem; }
        .general-enquiry-banner p { color: rgba(255,255,255,0.5); margin-bottom: 3rem; max-width: 600px; margin-inline: auto; }
        
        .enquiry-contact-grid { display: flex; justify-content: center; gap: 4rem; flex-wrap: wrap; margin-bottom: 3rem; }
        .enquiry-item { display: flex; flex-direction: column; align-items: center; gap: 0.75rem; }
        .enquiry-item i { font-size: 1.5rem; color: var(--gold); margin-bottom: 0.5rem; }
        .enquiry-item span { font-size: 1.15rem; font-weight: 500; }
        .enquiry-item label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: rgba(255,255,255,0.4); }

        @media (max-width: 1024px) { 
            .contact-container { grid-template-columns: 1fr; gap: 2rem; } 
            .enquiry-contact-grid { gap: 2rem; }
        }
        .contact-hours { background: var(--cream); padding: 10rem 5%; position: relative; }
        .contact-hours-container { max-width: 1200px; margin: 0 auto; text-align: center; }
        .contact-hours h2 { font-family: var(--font-display); font-size: clamp(2.5rem, 5vw, 3.8rem); font-weight: 300; color: var(--black); margin-bottom: 5rem; line-height: 1.1; }
        
        .hours-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.5rem; }
        .hours-card { 
            background: #fff; 
            border-radius: 24px; 
            padding: 4rem 2.5rem; 
            border: 1px solid rgba(59,130,246,0.1); 
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .hours-card:hover { 
            transform: translateY(-8px); 
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            border-color: var(--gold);
        }

        .hours-icon-box {
            width: 70px;
            height: 70px;
            background: var(--warm-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            color: var(--gold);
            font-size: 1.8rem;
            transition: all 0.3s ease;
        }
        .hours-card:hover .hours-icon-box {
            background: var(--gold);
            color: #fff;
        }

        .hours-card h4 { font-family: var(--font-display); font-size: 1.5rem; font-weight: 400; color: var(--black); margin-bottom: 1.5rem; }
        .hours-card p { font-size: 0.95rem; color: var(--mid-gray); line-height: 1.8; margin: 0; }
        .hours-card .highlight { color: var(--black); font-weight: 600; display: block; margin-top: 0.5rem; }

        @media (max-width: 1024px) { .hours-grid { grid-template-columns: 1fr; max-width: 500px; margin-inline: auto; } }
    </style>

    <!-- Page Hero -->
    <div class="page-hero">
        <div class="section-label"><span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Get In Touch<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span></div>
        <h1>Elevate your work<br><em>experience</em></h1>
        <p>Ready to move into a space that inspires growth? Connect with our dedicated site teams at either location.</p>
    </div>

    <!-- Contact Main -->
    <section class="contact-main">
        <div class="contact-container">
            <!-- Gurugram Card -->
            <div class="contact-card">
                <div class="section-label">Gurugram Location</div>
                <h2>WorkAbitat<br>Gurugram</h2>
                <p>Located in the heart of the Extension Road business corridor, our Gurugram facility sets the standard for managed excellence.</p>

                <div class="contact-loc-block">
                    <div class="contact-loc-title"><i class="fas fa-map-marked-alt"></i> Address</div>
                    <div class="contact-loc-info">
                        <span><i class="fas fa-location-dot"></i>Extension Road, Gurugram, Haryana – 122001</span>
                    </div>
                </div>

                <div class="contact-loc-block">
                    <div class="contact-loc-title"><i class="fas fa-headset"></i> Direct Support</div>
                    <div class="contact-loc-info">
                        <a href="tel:+919876543210" class="large-phone">+91 98765 43210</a>
                        <span><i class="fas fa-envelope"></i>gurugram@workabitat.com</span>
                        <span><i class="fab fa-whatsapp"></i>+91 98765 43210 (WhatsApp)</span>
                    </div>
                </div>

                <div class="contact-social">
                    <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-circle"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-circle"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Mohali Card -->
            <div class="contact-card">
                <div class="section-label">Mohali Location</div>
                <h2>WorkAbitat<br>Mohali</h2>
                <p>Our Mohali Sector 66–83 space fuses enterprise infrastructure with a vibrant entrepreneurial community.</p>

                <div class="contact-loc-block">
                    <div class="contact-loc-title"><i class="fas fa-map-marked-alt"></i> Address</div>
                    <div class="contact-loc-info">
                        <span><i class="fas fa-location-dot"></i>Sector 66–83, Mohali, Punjab – 160066</span>
                    </div>
                </div>

                <div class="contact-loc-block">
                    <div class="contact-loc-title"><i class="fas fa-headset"></i> Direct Support</div>
                    <div class="contact-loc-info">
                        <a href="tel:+919876543211" class="large-phone">+91 98765 43211</a>
                        <span><i class="fas fa-envelope"></i>mohali@workabitat.com</span>
                        <span><i class="fab fa-whatsapp"></i>+91 98765 43211 (WhatsApp)</span>
                    </div>
                </div>
                
                <div class="contact-social">
                    <a href="#" class="social-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-circle"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-circle"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <!-- General Enquiry Banner -->
        <div class="general-enquiry-banner">
            <div class="section-label" style="color:var(--gold)">Global Enquiries</div>
            <h3>Partnerships & Large Teams</h3>
            <p>For enterprise deals across multiple locations or partnership opportunities, reach out to our corporate headquarters.</p>
            
            <div class="enquiry-contact-grid">
                <div class="enquiry-item">
                    <label>Corporate Email</label>
                    <i class="fas fa-envelope"></i>
                    <span>hello@workabitat.com</span>
                </div>
                <div class="enquiry-item">
                    <label>Enterprise Support</label>
                    <i class="fab fa-whatsapp"></i>
                    <span>+91 98765 43200</span>
                </div>
            </div>
            
            <a href="about.php" class="btn-primary">Our Company Story</a>
        </div>
    </section>

    <!-- Hours -->
    <section class="contact-hours">
        <div class="contact-hours-container">
            <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;margin-bottom:0.5rem">Visit Us</div>
            <h2>We're open and ready<br>to <em>welcome you</em></h2>
            
            <div class="hours-grid">
                <!-- Office Hours -->
                <div class="hours-card">
                    <div class="hours-icon-box"><i class="fas fa-clock"></i></div>
                    <h4>Office Hours</h4>
                    <p>
                        Monday – Friday: 9am to 7pm<br>
                        Saturday: 10am to 5pm<br>
                        <span class="highlight">Sunday: Closed</span>
                    </p>
                </div>

                <!-- Member Access -->
                <div class="hours-card">
                    <div class="hours-icon-box"><i class="fas fa-key"></i></div>
                    <h4>Member 24/7 Access</h4>
                    <p>Members enjoy round-the-clock access to both locations — work whenever you need, at your own pace.</p>
                </div>

                <!-- Support Hours -->
                <div class="hours-card">
                    <div class="hours-icon-box"><i class="fas fa-headset"></i></div>
                    <h4>Support Hours</h4>
                    <p>
                        Customer support available<br>
                        Mon–Sat: 9am to 8pm<br>
                        <span class="highlight">Emergency line available 24/7</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
