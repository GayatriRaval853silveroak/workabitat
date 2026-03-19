<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workabitat | Premium Interior Design & Renovation</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;600;700&family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
            color: #333;
            overflow-x: hidden;
            line-height: 1.6;
        }
        img { max-width: 100%; display: block; }
    </style>
</head>
<body>

    <style>
        /* [p1] Hero Section */
        :root {
            --primary-black-p1: #1a1a1a;
            --secondary-gray-p1: #f5f5f5;
            --accent-color-p1: #e67e22;
            --text-main-p1: #333333;
            --text-light-p1: #666666;
            --font-inter: 'Inter', sans-serif;
        }
        .hero-wrapper { position: relative; height: 200vh; background-color: #fff; }
        .hero-sticky { position: sticky; top: 0; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; overflow: hidden; padding: 0 5%; }
        .hero-info { text-align: center; max-width: 900px; z-index: 2; margin-bottom: 2rem; transition: opacity 0.5s ease-out, transform 0.5s ease-out; }
        .hero-info h1 { font-size: clamp(2.5rem, 8vw, 5rem); font-weight: 700; color: #fff; line-height: 1.1; margin-bottom: 1.5rem; letter-spacing: -2px; text-shadow: 0 2px 10px rgba(0,0,0,0.3); }
        .hero-info p { font-size: clamp(1rem, 2vw, 1.25rem); color: rgba(255, 255, 255, 0.9); max-width: 600px; margin: 0 auto 2rem; text-shadow: 0 1px 5px rgba(0,0,0,0.3); }
        .btn-cta-p1 { background-color: var(--primary-black-p1); color: #fff; padding: 1rem 2rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: transform 0.3s ease, background-color 0.3s ease; display: inline-block; }
        .btn-cta-p1:hover { transform: scale(1.05); background-color: var(--accent-color-p1); }
        .hero-visual-container { position: absolute; bottom: 0; width: 100%; height: 100vh; display: flex; align-items: center; justify-content: center; z-index: 1; }
        .hero-visual { position: relative; width: 100%; height: 100vh; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); transition: border-radius 0.3s ease; transform-origin: center center; z-index: 2; }
        .hero-visual img { width: 100%; height: 100%; object-fit: cover; }
        .side-image { position: absolute; width: 25%; height: 50vh; border-radius: 15px; overflow: hidden; z-index: 1; box-shadow: 0 15px 30px rgba(0,0,0,0.1); transition: transform 0.1s linear; }
        .side-image img { width: 100%; height: 100%; object-fit: cover; }
        .side-image.left { left: 5%; transform: translateX(-150%) scale(0.8); }
        .side-image.right { right: 5%; transform: translateX(150%) scale(0.8); }

        /* [p2] Services */
        :root {
            --bg-light-p2: #ffffff;
            --bg-dark-p2: #1a1a1a;
            --text-main-p2: #333333;
            --text-light-p2: #666666;
            --accent-color-p2: #f8f8f8;
            --hover-highlight-p2: #fcfcfc;
            --transition-speed-p2: 0.4s;
            --ease-p2: ease;
        }
        .p2-services-section { padding: 8rem 0; max-width: 1400px; margin: 0 auto; }
        .p2-section-header { padding: 0 5%; margin-bottom: 4rem; }
        .p2-section-header h2 { font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 700; letter-spacing: -2px; color: var(--text-main-p2); text-transform: uppercase; }
        .p2-services-list { display: flex; flex-direction: column; }
        .p2-service-item { display: flex; width: 100%; height: 180px; min-height: 150px; border: 1px solid #eee; border-bottom: none; cursor: pointer; transition: all var(--transition-speed-p2) var(--ease-p2); position: relative; overflow: hidden; text-decoration: none; color: inherit; }
        .p2-service-item:first-child { border-top-left-radius: 16px; border-top-right-radius: 16px; }
        .p2-service-item:last-child { border-bottom-left-radius: 16px; border-bottom-right-radius: 16px; border-bottom: 1px solid #eee; }
        .p2-service-image { width: 0%; height: 100%; overflow: hidden; transition: all var(--transition-speed-p2) var(--ease-p2); position: relative; z-index: 2; flex-shrink: 0; }
        .p2-service-image img { width: 100%; height: 100%; object-fit: cover; position: absolute; left: 0; top: 0; transform: scale(1.2); transition: transform var(--transition-speed-p2) var(--ease-p2); filter: grayscale(20%); }
        .p2-service-content { flex: 1; padding: 0 3%; display: flex; align-items: center; justify-content: space-between; transition: all var(--transition-speed-p2) var(--ease-p2); z-index: 1; }
        .p2-service-text { display: flex; flex-direction: column; justify-content: center; }
        .p2-service-content h3 { font-size: 1.25rem; font-weight: 600; margin-bottom: 0.25rem; transition: all var(--transition-speed-p2) var(--ease-p2); letter-spacing: -0.2px; }
        .p2-service-content p { font-size: 0.9rem; color: var(--text-light-p2); max-width: 600px; line-height: 1.4; opacity: 0.8; transition: all var(--transition-speed-p2) var(--ease-p2); margin: 0; }
        .p2-service-number { font-size: 0.75rem; font-weight: 700; color: #ddd; transition: all var(--transition-speed-p2) var(--ease-p2); }
        .p2-service-item:hover { background-color: var(--bg-dark-p2); color: #fff; }
        .p2-service-item:hover .p2-service-image { width: 20%; }
        .p2-service-item:hover .p2-service-image img { transform: scale(1); filter: grayscale(0%); }
        .p2-service-item:hover .p2-service-content { padding-left: 2%; }
        .p2-service-item:hover p { color: rgba(255, 255, 255, 0.7); }
        .p2-service-item:hover .p2-service-number { color: rgba(255, 255, 255, 0.3); }

        /* [p3] Before/After */
        :root {
            --primary-black-p3: #1a1a1a;
            --accent-color-p3: #ffffff;
            --text-main-p3: #333333;
            --bg-light-p3: #f9f9f9;
        }
        .p3-container { max-width: 1200px; margin: 0 auto; padding: 6rem 5%; }
        .p3-heading-section { text-align: center; margin-bottom: 4rem; }
        .p3-heading-section h2 { font-size: clamp(1.75rem, 4vw, 3rem); font-weight: 700; max-width: 800px; margin: 0 auto; letter-spacing: -1px; color: var(--primary-black-p3); line-height: 1.2; }
        .p3-comparison-wrapper { position: relative; width: 100%; height: 600px; border-radius: 16px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.12); user-select: none; }
        .p3-img-container { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
        .p3-img-container img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .p3-before-container { z-index: 2; width: 50%; border-right: 2px solid rgba(255, 255, 255, 0.7); }
        .p3-after-container { z-index: 1; }
        .p3-slider-handle { position: absolute; top: 0; bottom: 0; left: 50%; width: 4px; background-color: #fff; z-index: 10; cursor: ew-resize; transform: translateX(-50%); box-shadow: 0 0 10px rgba(0,0,0,0.3); }
        .p3-slider-button { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 50px; height: 50px; background-color: var(--primary-black-p3); border: 3px solid #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.2); }
        .p3-slider-button svg { width: 20px; height: 20px; fill: currentColor; }
        #p3-slider-input { position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; z-index: 100; cursor: ew-resize; margin: 0; }

        /* [p4] Testimonials */
        .p4-testimonials-section { background-color: #1a1a1a; color: #fff; padding: 100px 0; }
        .p4-testimonials-container-dark { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .p4-section-header h2 { font-size: 3rem; margin-bottom: 20px; text-align: center; }
        .p4-section-header p { color: #888; font-size: 1.1rem; margin-bottom: 50px; text-align: center; }
        .p4-testimonial-card { background: #252525; padding: 40px; border-radius: 20px; height: 100%; display: flex; flex-direction: column; justify-content: space-between; }
        .p4-rating { color: #ff6a00; margin-bottom: 20px; }
        .p4-testimonial-text { font-size: 1.2rem; line-height: 1.6; margin-bottom: 30px; font-style: italic; }
        .p4-client-info { display: flex; align-items: center; gap: 15px; }
        .p4-client-photo { width: 60px; height: 60px; border-radius: 50%; object-fit: cover; }
        .p4-client-name { font-size: 1.1rem; font-weight: 600; margin: 0; }
        .p4-client-role { font-size: 0.9rem; color: #ff6a00; }

        /* [p5] FAQ */
        .p5-faq-section { background-color: #fff; padding: 100px 0; }
        .p5-container-faq { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .p5-faq-grid { display: flex; gap: 100px; }
        .p5-faq-left { flex: 0 0 100px; }
        .p5-faq-label { font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; color: #666; font-weight: 300; }
        .p5-faq-right { flex: 1; }
        .p5-faq-heading { font-size: 3rem; font-weight: 700; margin-bottom: 60px; letter-spacing: -1px; color: #1a1a1a; }
        .p5-faq-list { display: flex; flex-direction: column; }
        .p5-faq-item { border-bottom: 1px solid #eee; transition: transform 0.3s ease, background-color 0.3s ease; border-radius: 8px; }
        .p5-faq-item:hover { transform: translateX(15px); background-color: #f9f9f9; }
        .p5-faq-question-box { display: flex; justify-content: space-between; align-items: center; padding: 30px 20px; cursor: pointer; }
        .p5-faq-question { font-size: 1.4rem; font-weight: 600; margin: 0; color: #1a1a1a; }
        .p5-faq-toggle-btn { width: 45px; height: 45px; border-radius: 50%; border: 1px solid #ddd; background: transparent; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; }
        .p5-faq-toggle-btn i { font-size: 1.2rem; color: #1a1a1a; transition: transform 0.3s ease; }
        .p5-faq-item.active .p5-faq-toggle-btn { background-color: #000; border-color: #000; }
        .p5-faq-item.active .p5-faq-toggle-btn i { color: #fff; }
        .p5-faq-answer-box { max-height: 0; overflow: hidden; transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .p5-faq-item.active .p5-faq-answer-box { max-height: 300px; }
        .p5-faq-answer { padding: 0 20px 30px 20px; font-size: 1.1rem; line-height: 1.6; color: #666; margin: 0; }

        /* [p6] Multi-Service Horizontal scroll */
        .p6-scroll-section-container { position: relative; background-color: #fff0f3; border-radius: 15px; margin: 40px 2.5%; height: 300vh; }
        .p6-sticky-wrapper { position: sticky; top: 0; height: 100vh; width: 100%; overflow: hidden; display: flex; flex-direction: column; justify-content: center; padding: 80px 5%; }
        .p6-container { max-width: 1400px; margin: 0 auto; width: 100%; z-index: 10; }
        .p6-header-left h2 { font-size: 48px; line-height: 1.1; font-weight: 700; color: #000; margin-bottom: 60px; }
        .p6-services-grid { display: flex; gap: 30px; width: max-content; will-change: transform; }
        .p6-service-card { background: #fff; border-radius: 15px; overflow: hidden; display: flex; flex-direction: column; width: 400px; flex-shrink: 0; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); }
        .p6-card-image { width: 100%; height: 220px; overflow: hidden; }
        .p6-card-image img { width: 100%; height: 100%; object-fit: cover; }
        .p6-card-content { padding: 24px 30px 40px; }

        /* [p7] Transformations Carousel */
        .p7-transformations-section { max-width: 1200px; margin: 50px auto; background: #fff; border-radius: 15px; padding: 80px 40px; text-align: center; overflow: hidden; }
        .p7-main-heading { font-size: 2.8rem; font-weight: 700; margin-bottom: 20px; }
        .p7-carousel-view { position: relative; display: flex; align-items: center; justify-content: center; }
        .p7-carousel-track { display: flex; transition: transform 0.5s ease; gap: 30px; padding: 20px 0; }
        .p7-carousel-item { flex: 0 0 calc(33.333% - 20px); opacity: 0.6; transform: scale(0.9); }
        .p7-carousel-item.active { opacity: 1; transform: scale(1.05); }
        .p7-image-wrapper { width: 100%; aspect-ratio: 4/3; border-radius: 15px; overflow: hidden; }
        .p7-image-wrapper img { width: 100%; height: 100%; object-fit: cover; }
        .p7-nav-btn { position: absolute; z-index: 10; background: #fff; border: none; padding: 15px; border-radius: 50%; cursor: pointer; }
        .p7-nav-btn.prev { left: -20px; }
        .p7-nav-btn.next { right: -20px; }

        /* [p8] Logo/Image Showcase Strip */
        .p8-showcase-section { background-color: #0c0c0c; color: #fff; padding: 80px 0; overflow: hidden; }
        .p8-showcase-header { text-align: center; margin-bottom: 60px; }
        .p8-showcase-header h1 { font-size: 3rem; font-weight: 700; }
        .p8-showcase-container { position: relative; overflow: hidden; mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); }
        .p8-scroll-wrapper { display: flex; width: max-content; animation: p8-scroll 40s linear infinite; padding: 20px 0; }
        .p8-image-card { flex-shrink: 0; margin-right: 30px; overflow: hidden; transition: transform 0.5s; }
        .p8-image-card:hover { transform: scale(1.05); }
        .p8-card-1 { width: 400px; height: 450px; border-radius: 30px 30px 0 0; }
        .p8-card-2 { width: 320px; height: 450px; border-radius: 160px 160px 0 0; }
        .p8-card-3 { width: 500px; height: 450px; border-radius: 30px 30px 0 0; }
        .p8-card-4 { width: 300px; height: 450px; border-radius: 150px 150px 0 0; }
        .p8-card-5 { width: 420px; height: 450px; border-radius: 30px 30px 0 0; }
        .p8-card-6 { width: 350px; height: 450px; border-radius: 175px 175px 0 0; }
        .p8-image-card img { width: 100%; height: 100%; object-fit: cover; }
        @keyframes p8-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

        /* Mobile Resets & Fixes */
        @media (max-width: 991px) {
            .p2-service-item { flex-direction: column; min-height: auto; }
            .p2-service-image { width: 100% !important; height: 300px; opacity: 1 !important; }
            .p2-service-content { padding: 3rem 5% !important; }
            .p5-faq-grid { flex-direction: column; gap: 40px; }
            .p5-faq-heading { font-size: 2.5rem; }
        }
        @media (max-width: 768px) {
            .p3-comparison-wrapper { height: 400px; }
            .p6-scroll-section-container { height: auto; margin: 20px 0; padding: 60px 0; }
            .p6-sticky-wrapper { position: relative; height: auto; padding: 0; }
            .p6-services-grid { width: 100%; flex-direction: column; transform: none !important; padding: 20px; }
            .p6-service-card { width: 100%; }
            .p7-carousel-item { flex: 0 0 100%; }
            .p7-nav-btn { bottom: -50px; top: auto; }
        }
    </style>
</head>
<body>

    <!-- [p1] Hero Section -->
    <div class="hero-wrapper">
        <div class="hero-sticky">
            <div class="hero-info" id="heroInfo">
                <h1>Beautiful renovations <br>made simple</h1>
                <p>Great spaces don't happen by accident. They're carefully crafted with skill, passion, and attention to detail.</p>
                <a href="#" class="btn-cta-p1">Start Your Project</a>
            </div>
            <div class="hero-visual-container">
                <div class="side-image left" id="sideLeft">
                    <img src="https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb?w=600&auto=format&fit=crop&q=60" alt="Interior Detail 1">
                </div>
                <div class="hero-visual" id="heroVisual">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80" alt="Beautiful Interior Renovation">
                </div>
                <div class="side-image right" id="sideRight">
                    <img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format&fit=crop&w=800&q=80" alt="Interior Detail 2">
                </div>
            </div>
        </div>
    </div>

    <!-- [p2] Popular Services -->
    <section class="p2-services-section">
        <div class="p2-section-header"><h2>Popular Services</h2></div>
        <div class="p2-services-list">
            <a href="#" class="p2-service-item">
                <div class="p2-service-image"><img src="https://images.unsplash.com/photo-1601760561441-16420502c7e0?auto=format" alt=""></div>
                <div class="p2-service-content"><div class="p2-service-text"><h3>Kitchen Renovation</h3><p>Modern designs and premium materials tailored to your lifestyle.</p></div><span class="p2-service-number">01</span></div>
            </a>
            <a href="#" class="p2-service-item">
                <div class="p2-service-image"><img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format" alt=""></div>
                <div class="p2-service-content"><div class="p2-service-text"><h3>Bathroom Renovation</h3><p>Transform your bathroom into a personal sanctuary with luxury fixtures.</p></div><span class="p2-service-number">02</span></div>
            </a>
            <a href="#" class="p2-service-item">
                <div class="p2-service-image"><img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format" alt=""></div>
                <div class="p2-service-content"><div class="p2-service-text"><h3>Home Improvement</h3><p>Comprehensive solutions for every corner of your house.</p></div><span class="p2-service-number">03</span></div>
            </a>
        </div>
    </section>

    <!-- [p3] Before/After Section -->
    <div class="p3-container">
        <header class="p3-heading-section"><h2>Transforming boring spaces into beautiful rooms you’ll love</h2></header>
        <section class="p3-comparison-wrapper">
            <div class="p3-img-container p3-after-container"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div>
            <div class="p3-img-container p3-before-container" id="p3-before-box"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format" alt=""></div>
            <div class="p3-slider-handle" id="p3-handle"><div class="p3-slider-button"><svg viewBox="0 0 24 24"><path d="M8 7l-5 5 5 5V7zm8 0v10l5-5-5-5z"/></svg></div></div>
            <input type="range" min="0" max="100" value="50" id="p3-slider-input">
        </section>
    </div>

    <!-- [p4] Testimonials -->
    <section class="p4-testimonials-section">
        <div class="p4-testimonials-container-dark">
            <div class="p4-section-header"><h2>Hear from our clients</h2><p>Real feedback from real clients who trusted us with their spaces.</p></div>
            <div class="swiper p4-testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="p4-testimonial-card"><div class="p4-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="p4-testimonial-text">"Workabitat transformed our dull office into a vibrant, inspiring space."</p><div class="p4-client-info"><img src="https://i.pravatar.cc/150?u=1" class="p4-client-photo"><div><h4 class="p4-client-name">Sarah Johnson</h4><span class="p4-client-role">Interior Design</span></div></div></div></div>
                    <div class="swiper-slide"><div class="p4-testimonial-card"><div class="p4-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="p4-testimonial-text">"The space planning they did for our tech hub was brilliant."</p><div class="p4-client-info"><img src="https://i.pravatar.cc/150?u=2" class="p4-client-photo"><div><h4 class="p4-client-name">Michael Chen</h4><span class="p4-client-role">Space Planning</span></div></div></div></div>
                    <div class="swiper-slide"><div class="p4-testimonial-card"><div class="p4-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div><p class="p4-testimonial-text">"Elegant aesthetics combined with functional designs."</p><div class="p4-client-info"><img src="https://i.pravatar.cc/150?u=3" class="p4-client-photo"><div><h4 class="p4-client-name">Emma Davids</h4><span class="p4-client-role">Interior Styling</span></div></div></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- [p5] FAQ Section -->
    <section class="p5-faq-section">
        <div class="p5-container-faq">
            <div class="p5-faq-grid">
                <div class="p5-faq-left"><span class="p5-faq-label">FAQs</span></div>
                <div class="p5-faq-right"><h2 class="p5-faq-heading">Questions you have in mind</h2>
                    <div class="p5-faq-list">
                        <div class="p5-faq-item"><div class="p5-faq-question-box"><h3 class="p5-faq-question">How does Workabitat differ from traditional offices?</h3><button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button></div><div class="p5-faq-answer-box"><p class="p5-faq-answer">Workabitat provides flexible, fully-managed workspaces that prioritize community, design, and seamless technology.</p></div></div>
                        <div class="p5-faq-item"><div class="p5-faq-question-box"><h3 class="p5-faq-question">What amenities are included in the membership?</h3><button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button></div><div class="p5-faq-answer-box"><p class="p5-faq-answer">Members enjoy high-speed internet, premium coffee, wellness rooms, and more.</p></div></div>
                        <div class="p5-faq-item"><div class="p5-faq-question-box"><h3 class="p5-faq-question">What is the typical timeline for a renovation project?</h3><button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button></div><div class="p5-faq-answer-box"><p class="p5-faq-answer">Most residential renovations take between 4 to 12 weeks from design approval.</p></div></div>
                        <div class="p5-faq-item"><div class="p5-faq-question-box"><h3 class="p5-faq-question">Do you offer free initial consultations?</h3><button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button></div><div class="p5-faq-answer-box"><p class="p5-faq-answer">Yes, we offer a complimentary 30-minute consultation.</p></div></div>
                        <div class="p5-faq-item"><div class="p5-faq-question-box"><h3 class="p5-faq-question">Can I customize the design to my specific taste?</h3><button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button></div><div class="p5-faq-answer-box"><p class="p5-faq-answer">Absolutely. Our designers work closely with you to reflect your personal style.</p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [p6] Service Horizontal Scroll -->
    <section class="p6-scroll-section-container" id="p6-scroll-section">
        <div class="p6-sticky-wrapper">
            <div class="p6-container"><div class="p6-header-left"><h2>Custom Renovation Services Designed to Fit Your Life</h2></div></div>
            <div class="p6-horizontal-scroll-track">
                <div class="p6-services-grid" id="p6-services-grid">
                    <div class="p6-service-card"><div class="p6-card-image"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div><div class="p6-card-content"><h3>Full-Home Renovation</h3><p>Complete transformations tailored to your style.</p></div></div>
                    <div class="p6-service-card"><div class="p6-card-image"><img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format" alt=""></div><div class="p6-card-content"><h3>Kitchen Remodeling</h3><p>Smart, stylish kitchens built for daily living.</p></div></div>
                    <div class="p6-service-card"><div class="p6-card-image"><img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format" alt=""></div><div class="p6-card-content"><h3>Bathroom Renovation</h3><p>Modern functional bathrooms with quality.</p></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- [p7] Transformations -->
    <section class="p7-transformations-section">
        <h2 class="p7-main-heading">Real Homes. Remarkable Results.</h2>
        <div class="p7-carousel-view">
            <button class="p7-nav-btn prev" id="p7-prevBtn"><i class="fas fa-chevron-left"></i></button>
            <div class="p7-carousel-container" style="width: 100%; overflow: hidden;"><div class="p7-carousel-track" id="p7-carouselTrack"><div class="p7-carousel-item"><div class="p7-image-wrapper"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div><h3>Sonoma Valley</h3></div><div class="p7-carousel-item"><div class="p7-image-wrapper"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div><h3>Santa Monica</h3></div><div class="p7-carousel-item"><div class="p7-image-wrapper"><img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format" alt=""></div><h3>Beverly Hills</h3></div></div></div>
            <button class="p7-nav-btn next" id="p7-nextBtn"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- [p8] Showcase -->
    <section class="p8-showcase-section">
        <div class="p8-showcase-header"><h1>Curated Excellence</h1></div>
        <div class="p8-showcase-container">
            <div class="p8-scroll-wrapper">
                <div class="p8-image-card p8-card-1"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-2"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-3"><img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-4"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-5"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-6"><img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format" alt=""></div>
                <!-- Duplicate for Loop -->
                <div class="p8-image-card p8-card-1"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-2"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-3"><img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-4"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-5"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div>
                <div class="p8-image-card p8-card-6"><img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format" alt=""></div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        /* [p1] Hero Logic */
        (function() {
            const heroInfo = document.getElementById('heroInfo');
            const heroVisual = document.getElementById('heroVisual');
            const sideLeft = document.getElementById('sideLeft');
            const sideRight = document.getElementById('sideRight');
            window.addEventListener('scroll', () => {
                const scrollY = window.scrollY;
                const windowHeight = window.innerHeight;
                const progress = Math.min(scrollY / windowHeight, 1);
                if (heroInfo && heroVisual && sideLeft && sideRight) {
                    heroInfo.style.opacity = 1 - progress * 1.5;
                    heroInfo.style.transform = `translateY(${-progress * 150}px)`;
                    const width = 100 - (progress * 50);
                    const height = 100 - (progress * 30);
                    const borderRadius = progress * 30;
                    heroVisual.style.width = width + '%';
                    heroVisual.style.height = height + 'vh';
                    heroVisual.style.borderRadius = borderRadius + 'px';
                    const sideSlideProgress = Math.max(0, (progress - 0.2) / 0.8);
                    const leftTranslate = -150 + (sideSlideProgress * 150);
                    const rightTranslate = 150 - (sideSlideProgress * 150);
                    const sideScale = 0.8 + (sideSlideProgress * 0.2);
                    sideLeft.style.transform = `translateX(${leftTranslate}%) scale(${sideScale})`;
                    sideRight.style.transform = `translateX(${rightTranslate}%) scale(${sideScale})`;
                    sideLeft.style.opacity = sideSlideProgress;
                    sideRight.style.opacity = sideSlideProgress;
                    const img = heroVisual.querySelector('img');
                    if (img) img.style.transform = `scale(${1 + (1 - progress) * 0.1})`;
                }
            });
        })();

        /* [p3] Slider Logic */
        (function() {
            const sliderInput = document.getElementById('p3-slider-input');
            const beforeBox = document.getElementById('p3-before-box');
            const handle = document.getElementById('p3-handle');
            if (sliderInput && beforeBox && handle) {
                sliderInput.addEventListener('input', (e) => {
                    const val = e.target.value;
                    beforeBox.style.width = val + '%';
                    handle.style.left = val + '%';
                });
            }
        })();

        /* [p4] Testimonials Slider */
        (function() {
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof Swiper !== 'undefined') {
                    new Swiper('.p4-testimonial-slider', {
                        slidesPerView: 1, spaceBetween: 30, loop: true, speed: 6000,
                        autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: true },
                        breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
                    });
                }
            });
        })();

        /* [p5] FAQ Accordion */
        (function() {
            const faqItems = document.querySelectorAll('.p5-faq-item');
            faqItems.forEach(item => {
                const qBox = item.querySelector('.p5-faq-question-box');
                const icon = item.querySelector('.p5-faq-toggle-btn i');
                if (qBox) {
                    qBox.addEventListener('click', () => {
                        item.classList.toggle('active');
                        if (icon) {
                            if (item.classList.contains('active')) icon.classList.replace('fa-plus', 'fa-minus');
                            else icon.classList.replace('fa-minus', 'fa-plus');
                        }
                    });
                }
            });
        })();

        /* [p6] Horizontal Scroll */
        (function() {
            const scrollSection = document.getElementById('p6-scroll-section');
            const servicesGrid = document.getElementById('p6-services-grid');
            function animateP6() {
                if (!scrollSection || !servicesGrid || window.innerWidth <= 768) return;
                const rect = scrollSection.getBoundingClientRect();
                const viewportHeight = window.innerHeight;
                let progress = -rect.top / (rect.height - viewportHeight);
                progress = Math.max(0, Math.min(1, progress));
                const maxScroll = servicesGrid.scrollWidth - window.innerWidth * 0.9 + 100;
                servicesGrid.style.transform = `translateX(${-progress * maxScroll}px)`;
                requestAnimationFrame(animateP6);
            }
            requestAnimationFrame(animateP6);
        })();

        /* [p7] Transformations Carousel */
        (function() {
            const track = document.getElementById('p7-carouselTrack');
            const nextBtn = document.getElementById('p7-nextBtn');
            const prevBtn = document.getElementById('p7-prevBtn');
            if (!track || !nextBtn || !prevBtn) return;
            const items = Array.from(track.children);
            let currentIndex = 1;
            function updateP7() {
                const itemWidth = items[0].getBoundingClientRect().width;
                const containerWidth = track.parentElement.offsetWidth;
                const offset = (containerWidth / 2) - (itemWidth / 2) - (currentIndex * (itemWidth + 30));
                track.style.transform = `translateX(${offset}px)`;
                items.forEach((item, i) => i === currentIndex ? item.classList.add('active') : item.classList.remove('active'));
            }
            nextBtn.onclick = () => { currentIndex = (currentIndex + 1) % items.length; updateP7(); };
            prevBtn.onclick = () => { currentIndex = (currentIndex - 1 + items.length) % items.length; updateP7(); };
            window.addEventListener('resize', updateP7);
            setTimeout(updateP7, 500);
        })();
    </script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    
</body>
</html>
