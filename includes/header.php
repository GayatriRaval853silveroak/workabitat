<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workabitat | Premium Interior Design & Renovation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root {
            --black: #111010;
            --warm-white: #faf8f5;
            --cream: #f2ede6;
            --gold: #c9a96e;
            --gold-light: #e8d5b0;
            --charcoal: #2c2825;
            --mid-gray: #7a746d;
            --light-gray: #e8e3dc;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'DM Sans', sans-serif;
            --font-accent: 'Playfair Display', serif;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-body);
            background-color: var(--warm-white);
            color: var(--charcoal);
            overflow-x: hidden;
            line-height: 1.6;
        }

        img { max-width: 100%; display: block; }

        /* ─── HEADER ─── */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
            height: 80px;
            transition: background 0.4s ease, box-shadow 0.4s ease, height 0.4s ease;
        }

        .site-header.scrolled {
            background: rgba(250, 248, 245, 0.96);
            backdrop-filter: blur(12px);
            box-shadow: 0 1px 0 rgba(0,0,0,0.08);
            height: 68px;
        }

        .header-logo {
            font-family: var(--font-display);
            font-size: 1.6rem;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            letter-spacing: 1px;
            transition: color 0.4s;
        }

        .site-header.scrolled .header-logo { color: var(--black); }

        .header-nav {
            display: flex;
            align-items: center;
            gap: 2.5rem;
            list-style: none;
        }

        .header-nav a {
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            transition: color 0.3s;
            position: relative;
        }

        .header-nav a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: width 0.3s ease;
        }

        .header-nav a:hover::after { width: 100%; }
        .header-nav a:hover { color: #fff; }

        .site-header.scrolled .header-nav a { color: var(--mid-gray); }
        .site-header.scrolled .header-nav a:hover { color: var(--black); }

        .header-cta {
            background: var(--gold);
            color: #fff !important;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-size: 0.8rem !important;
            font-weight: 600 !important;
            letter-spacing: 0.06em;
            transition: background 0.3s ease, transform 0.2s ease !important;
        }

        .header-cta::after { display: none !important; }
        .header-cta:hover { background: var(--charcoal) !important; color: #fff !important; transform: translateY(-1px); }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 4px;
        }

        .hamburger span {
            display: block;
            width: 24px;
            height: 1.5px;
            background: #fff;
            transition: all 0.3s;
        }

        .site-header.scrolled .hamburger span { background: var(--black); }

        /* ─── HERO ─── */
        .hero-wrapper { position: relative; height: 200vh; background: var(--black); }

        .hero-sticky {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-info {
            text-align: center;
            max-width: 860px;
            z-index: 10;
            margin-bottom: 2rem;
            padding: 0 5%;
            transition: opacity 0.4s ease-out, transform 0.4s ease-out;
        }

        .hero-eyebrow {
            font-family: var(--font-body);
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .hero-eyebrow::before,
        .hero-eyebrow::after {
            content: '';
            display: block;
            width: 32px;
            height: 1px;
            background: var(--gold);
            opacity: 0.6;
        }

        .hero-info h1 {
            font-family: var(--font-display);
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 300;
            color: #fff;
            line-height: 1.08;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }

        .hero-info h1 em {
            font-style: italic;
            color: var(--gold-light);
        }

        .hero-info p {
            font-size: clamp(0.95rem, 1.5vw, 1.1rem);
            color: rgba(255,255,255,0.65);
            max-width: 500px;
            margin: 0 auto 2.5rem;
            font-weight: 300;
            letter-spacing: 0.01em;
        }

        .hero-actions { display: flex; gap: 1rem; align-items: center; justify-content: center; flex-wrap: wrap; }

        .btn-primary {
            background: var(--gold);
            color: #fff;
            padding: 0.9rem 2.2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.88rem;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary:hover { background: #fff; color: var(--black); transform: translateY(-2px); }

        .btn-ghost {
            color: rgba(255,255,255,0.75);
            padding: 0.9rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 400;
            font-size: 0.88rem;
            border: 1px solid rgba(255,255,255,0.2);
            letter-spacing: 0.04em;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-ghost:hover { border-color: rgba(255,255,255,0.6); color: #fff; }

        .hero-visual-container {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .hero-visual {
            position: absolute;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            transition: border-radius 0.2s ease;
            transform-origin: center center;
        }

        .hero-visual::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.15) 50%, rgba(0,0,0,0.5) 100%);
        }

        .hero-visual img { width: 100%; height: 100%; object-fit: cover; }

        .side-image {
            position: absolute;
            width: 22%;
            height: 48vh;
            border-radius: 12px;
            overflow: hidden;
            z-index: 3;
            box-shadow: 0 20px 50px rgba(0,0,0,0.4);
            transition: transform 0.1s linear;
        }

        .side-image img { width: 100%; height: 100%; object-fit: cover; }
        .side-image.left { left: 5%; transform: translateX(-160%) scale(0.85); opacity: 0; }
        .side-image.right { right: 5%; transform: translateX(160%) scale(0.85); opacity: 0; }

        .hero-scroll-hint {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255,255,255,0.5);
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            animation: fadeInUp 1.5s ease 1s forwards;
            opacity: 0;
        }

        .hero-scroll-hint::after {
            content: '';
            display: block;
            width: 1px;
            height: 40px;
            background: linear-gradient(to bottom, rgba(255,255,255,0.5), transparent);
            animation: scrollPulse 2s ease-in-out infinite;
        }

        @keyframes scrollPulse { 0%,100% { opacity: 0.4; transform: scaleY(1); } 50% { opacity: 1; transform: scaleY(1.2); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateX(-50%) translateY(10px); } to { opacity: 1; transform: translateX(-50%) translateY(0); } }

        /* ─── STATS BAR ─── */
        .stats-bar {
            background: var(--black);
            padding: 3rem 5%;
            display: flex;
            justify-content: center;
            gap: 0;
        }

        .stat-item {
            flex: 1;
            max-width: 220px;
            text-align: center;
            padding: 0 2rem;
            border-right: 1px solid rgba(255,255,255,0.1);
        }

        .stat-item:last-child { border-right: none; }

        .stat-number {
            font-family: var(--font-display);
            font-size: 3rem;
            font-weight: 300;
            color: var(--gold);
            line-height: 1;
            margin-bottom: 0.4rem;
        }

        .stat-label {
            font-size: 0.75rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.5);
        }

        /* ─── ABOUT STRIP ─── */
        .about-strip {
            background: var(--cream);
            padding: 6rem 5%;
            display: flex;
            align-items: center;
            gap: 6rem;
            max-width: 1300px;
            margin: 0 auto;
        }

        .about-strip-text { flex: 1; }

        .section-label {
            font-size: 0.7rem;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .about-strip-text h2 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 300;
            line-height: 1.2;
            color: var(--black);
            margin-bottom: 1.5rem;
        }

        .about-strip-text p {
            color: var(--mid-gray);
            font-size: 0.95rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .btn-text-link {
            color: var(--black);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.88rem;
            letter-spacing: 0.05em;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 1px solid var(--gold);
            padding-bottom: 3px;
            transition: gap 0.3s;
        }

        .btn-text-link:hover { gap: 0.9rem; }

        .about-strip-image {
            flex: 0 0 45%;
            height: 400px;
            border-radius: 12px;
            overflow: hidden;
        }

        .about-strip-image img { width: 100%; height: 100%; object-fit: cover; }

        /* ─── SERVICES ─── */
        .services-section {
            background: var(--warm-white);
            padding: 8rem 5%;
            max-width: 1300px;
            margin: 0 auto;
        }

        .section-header-row {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 4rem;
        }

        .section-header-row h2 {
            font-family: var(--font-display);
            font-size: clamp(2.5rem, 5vw, 3.8rem);
            font-weight: 300;
            letter-spacing: -1px;
            color: var(--black);
            line-height: 1.05;
        }

        .services-list { display: flex; flex-direction: column; }

        .service-item {
            display: flex;
            align-items: center;
            height: 130px;
            border-top: 1px solid var(--light-gray);
            cursor: pointer;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            padding: 0 1rem;
        }

        .service-item:last-child { border-bottom: 1px solid var(--light-gray); }

        .service-item-num {
            font-family: var(--font-display);
            font-size: 0.8rem;
            color: var(--light-gray);
            width: 60px;
            flex-shrink: 0;
            font-weight: 400;
            letter-spacing: 0.1em;
            transition: color 0.4s;
        }

        .service-item-img {
            width: 0;
            height: 90px;
            border-radius: 8px;
            overflow: hidden;
            transition: width 0.4s ease;
            flex-shrink: 0;
            margin-right: 0;
        }

        .service-item-img img { width: 100%; height: 100%; object-fit: cover; }

        .service-item-text { flex: 1; padding: 0 2rem; }

        .service-item-text h3 {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 400;
            color: var(--black);
            margin-bottom: 0.2rem;
            transition: all 0.4s;
        }

        .service-item-text p {
            font-size: 0.85rem;
            color: var(--mid-gray);
            transition: all 0.4s;
        }

        .service-item-arrow {
            font-size: 1rem;
            color: var(--light-gray);
            transition: all 0.4s;
        }

        .service-item:hover {
            background: var(--black);
            padding: 0 1.5rem;
        }

        .service-item:hover .service-item-num { color: rgba(255,255,255,0.2); }
        .service-item:hover .service-item-img { width: 120px; margin-right: 1.5rem; }
        .service-item:hover .service-item-text h3 { color: #fff; }
        .service-item:hover .service-item-text p { color: rgba(255,255,255,0.5); }
        .service-item:hover .service-item-arrow { color: var(--gold); transform: translateX(6px); }

        /* ─── BEFORE/AFTER ─── */
        .ba-section {
            background: var(--cream);
            padding: 8rem 5%;
        }

        .ba-container { max-width: 1100px; margin: 0 auto; }

        .ba-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
            align-items: end;
        }

        .ba-header h2 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 300;
            line-height: 1.15;
            color: var(--black);
        }

        .ba-header p {
            color: var(--mid-gray);
            font-size: 0.95rem;
            line-height: 1.8;
        }

        .ba-wrapper {
            position: relative;
            width: 100%;
            height: 580px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0,0,0,0.15);
            user-select: none;
        }

        .ba-img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
        .ba-img img { width: 100%; height: 100%; object-fit: cover; }
        .ba-before { z-index: 2; width: 50%; border-right: 2px solid rgba(255,255,255,0.8); }
        .ba-after { z-index: 1; }

        .ba-labels {
            position: absolute;
            top: 1.5rem;
            left: 0;
            right: 0;
            z-index: 15;
            display: flex;
            justify-content: space-between;
            padding: 0 1.5rem;
            pointer-events: none;
        }

        .ba-label {
            background: rgba(0,0,0,0.5);
            color: #fff;
            font-size: 0.7rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            backdrop-filter: blur(8px);
        }

        .ba-handle {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 3px;
            background: #fff;
            z-index: 10;
            cursor: ew-resize;
            transform: translateX(-50%);
        }

        .ba-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 48px;
            height: 48px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.25);
            color: var(--black);
        }

        #ba-input {
            position: absolute;
            inset: 0;
            opacity: 0;
            z-index: 20;
            cursor: ew-resize;
            margin: 0;
            width: 100%;
            height: 100%;
        }

        /* ─── TESTIMONIALS ─── */
        .testimonials-section {
            background: var(--black);
            padding: 8rem 5%;
            overflow: hidden;
        }

        .testimonials-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .testimonials-header h2 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 300;
            color: #fff;
            margin-top: 0.8rem;
        }

        .testimonials-header p {
            color: rgba(255,255,255,0.4);
            font-size: 0.9rem;
            margin-top: 0.75rem;
        }

        .t-card {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            padding: 2.5rem;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .t-stars { color: var(--gold); margin-bottom: 1.5rem; font-size: 0.85rem; letter-spacing: 3px; }

        .t-text {
            font-family: var(--font-display);
            font-size: 1.2rem;
            font-weight: 300;
            line-height: 1.7;
            color: rgba(255,255,255,0.85);
            font-style: italic;
            flex: 1;
            margin-bottom: 2rem;
        }

        .t-client { display: flex; align-items: center; gap: 1rem; }
        .t-photo { width: 48px; height: 48px; border-radius: 50%; object-fit: cover; border: 2px solid rgba(255,255,255,0.1); }
        .t-name { font-weight: 500; color: #fff; font-size: 0.9rem; margin: 0 0 2px; }
        .t-role { font-size: 0.78rem; color: var(--gold); }

        /* ─── PROCESS ─── */
        .process-section {
            padding: 8rem 5%;
            background: var(--warm-white);
        }

        .process-container { max-width: 1100px; margin: 0 auto; }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 4rem;
        }

        .process-step { text-align: center; padding: 2.5rem 1.5rem; }

        .step-num {
            font-family: var(--font-display);
            font-size: 3.5rem;
            font-weight: 300;
            color: var(--gold-light);
            line-height: 1;
            margin-bottom: 1rem;
        }

        .step-icon {
            width: 52px;
            height: 52px;
            background: var(--cream);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
            font-size: 1.2rem;
            color: var(--gold);
        }

        .process-step h3 {
            font-family: var(--font-display);
            font-size: 1.3rem;
            font-weight: 400;
            color: var(--black);
            margin-bottom: 0.75rem;
        }

        .process-step p {
            font-size: 0.85rem;
            color: var(--mid-gray);
            line-height: 1.7;
        }

        /* ─── FAQ ─── */
        .faq-section {
            background: var(--cream);
            padding: 8rem 5%;
        }

        .faq-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 6rem;
        }

        .faq-sidebar {
            padding-top: 0.5rem;
        }

        .faq-sidebar h2 {
            font-family: var(--font-display);
            font-size: 2.2rem;
            font-weight: 300;
            line-height: 1.2;
            color: var(--black);
            margin-top: 1rem;
        }

        .faq-sidebar p {
            color: var(--mid-gray);
            font-size: 0.85rem;
            margin-top: 1rem;
            line-height: 1.7;
        }

        .faq-list { display: flex; flex-direction: column; }

        .faq-item { border-bottom: 1px solid rgba(0,0,0,0.08); }

        .faq-q {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
            cursor: pointer;
            gap: 2rem;
        }

        .faq-q h3 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--black);
            line-height: 1.4;
        }

        .faq-toggle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid var(--light-gray);
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            flex-shrink: 0;
            color: var(--mid-gray);
            font-size: 0.9rem;
        }

        .faq-item.open .faq-toggle {
            background: var(--black);
            border-color: var(--black);
            color: #fff;
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }

        .faq-item.open .faq-answer { max-height: 200px; }

        .faq-answer p {
            padding-bottom: 1.5rem;
            font-size: 0.92rem;
            color: var(--mid-gray);
            line-height: 1.8;
        }

        /* ─── SHOWCASE STRIP ─── */
        .showcase-section {
            background: var(--black);
            padding: 6rem 0;
            overflow: hidden;
        }

        .showcase-header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 0 5%;
        }

        .showcase-header h2 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 300;
            color: #fff;
            margin-top: 0.5rem;
        }

        .scroll-track-container {
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, black 12%, black 88%, transparent);
        }

        .scroll-track {
            display: flex;
            width: max-content;
            animation: scrollLeft 40s linear infinite;
            gap: 20px;
            padding: 10px 0;
            align-items: flex-end;
        }

        .scroll-track:hover { animation-play-state: paused; }

        .sc-card { flex-shrink: 0; overflow: hidden; cursor: pointer; transition: transform 0.5s ease; }
        .sc-card:hover { transform: scale(1.03) translateY(-6px); }
        .sc-card img { width: 100%; height: 100%; object-fit: cover; }
        .sc-1 { width: 340px; height: 420px; border-radius: 24px 24px 0 0; }
        .sc-2 { width: 260px; height: 380px; border-radius: 130px 130px 0 0; }
        .sc-3 { width: 420px; height: 440px; border-radius: 24px 24px 0 0; }
        .sc-4 { width: 280px; height: 400px; border-radius: 140px 140px 0 0; }
        .sc-5 { width: 360px; height: 420px; border-radius: 24px 24px 0 0; }

        @keyframes scrollLeft {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* ─── CTA BAND ─── */
        .cta-band {
            background: var(--gold);
            padding: 5rem 5%;
            text-align: center;
        }

        .cta-band h2 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 300;
            color: #fff;
            margin-bottom: 0.75rem;
        }

        .cta-band p {
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
            margin-bottom: 2.5rem;
        }

        .cta-band .btn-white {
            background: #fff;
            color: var(--gold);
            padding: 0.9rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.88rem;
            transition: all 0.3s;
            display: inline-block;
            margin: 0 0.5rem;
        }

        .cta-band .btn-white:hover { background: var(--black); color: #fff; }

        .cta-band .btn-outline-white {
            border: 2px solid rgba(255,255,255,0.7);
            color: #fff;
            padding: 0.85rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-size: 0.88rem;
            transition: all 0.3s;
            display: inline-block;
            margin: 0 0.5rem;
        }

        .cta-band .btn-outline-white:hover { background: rgba(255,255,255,0.15); }

        /* ─── FOOTER ─── */
        .site-footer {
            background: var(--black);
            color: rgba(255,255,255,0.6);
            padding: 6rem 5% 3rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 4rem;
            margin-bottom: 5rem;
            padding-bottom: 5rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .footer-brand-name {
            font-family: var(--font-display);
            font-size: 1.8rem;
            font-weight: 600;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }

        .footer-brand-desc {
            font-size: 0.88rem;
            line-height: 1.8;
            max-width: 280px;
            margin-bottom: 2rem;
        }

        .footer-social { display: flex; gap: 0.75rem; }

        .social-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.5);
            font-size: 0.8rem;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-icon:hover { background: var(--gold); border-color: var(--gold); color: #fff; }

        .footer-col-title {
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.3);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-links { list-style: none; display: flex; flex-direction: column; gap: 0.75rem; }

        .footer-links a {
            color: rgba(255,255,255,0.55);
            text-decoration: none;
            font-size: 0.88rem;
            transition: color 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover { color: var(--gold); }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .footer-contact-item i {
            color: var(--gold);
            font-size: 0.85rem;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .footer-contact-item span {
            font-size: 0.88rem;
            line-height: 1.6;
        }

        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-bottom-copy {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.3);
        }

        .footer-bottom-links { display: flex; gap: 2rem; }
        .footer-bottom-links a {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.3);
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-bottom-links a:hover { color: rgba(255,255,255,0.6); }

        /* ─── MOBILE MENU ─── */
        .mobile-nav {
            display: none;
            position: fixed;
            inset: 0;
            background: var(--black);
            z-index: 999;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2.5rem;
        }

        .mobile-nav.open { display: flex; }

        .mobile-nav a {
            font-family: var(--font-display);
            font-size: 2.5rem;
            font-weight: 300;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        .mobile-nav a:hover { color: var(--gold); }

        .mobile-close {
            position: absolute;
            top: 24px;
            right: 5%;
            background: none;
            border: none;
            color: rgba(255,255,255,0.6);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 8px;
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 1024px) {
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .process-grid { grid-template-columns: repeat(2, 1fr); }
            .about-strip { flex-direction: column; gap: 3rem; }
            .about-strip-image { flex: none; width: 100%; }
        }

        @media (max-width: 768px) {
            .header-nav, .header-cta { display: none; }
            .hamburger { display: flex; }
            .ba-header { grid-template-columns: 1fr; gap: 1.5rem; }
            .ba-wrapper { height: 380px; }
            .faq-container { grid-template-columns: 1fr; gap: 2rem; }
            .footer-grid { grid-template-columns: 1fr; gap: 2.5rem; }
            .footer-bottom { flex-direction: column; text-align: center; }
            .stats-bar { flex-wrap: wrap; gap: 2rem; }
            .stat-item { border-right: none; }
            .section-header-row { flex-direction: column; align-items: flex-start; gap: 1rem; }
            .process-grid { grid-template-columns: 1fr; }

            /* Services Mobile Adjustments */
            .service-item { height: auto; padding: 1.2rem 0; }
            .service-item-img { width: 80px; height: 80px; margin-right: 1rem; }
            .service-item-text { padding: 0 1rem; }
            .service-item-text h3 { font-size: 1.2rem; }
            .service-item-text p { font-size: 0.8rem; }
            .service-item-num { width: 40px; font-size: 0.7rem; }
            .service-item-arrow { color: var(--gold); }
        }
    </style>
</head>
<body>

    <!-- ─── HEADER ─── -->
    <header class="site-header" id="siteHeader">
        <a href="#" class="header-logo">Workabitat</a>
        <nav>
            <ul class="header-nav">
                <li><a href="#Home">Home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#contact" class="header-cta">Get a Quote</a></li>
            </ul>
        </nav>
        <button class="hamburger" id="hamburger" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </header>

    <!-- Mobile Nav -->
    <nav class="mobile-nav" id="mobileNav">
        <button class="mobile-close" id="mobileClose"><i class="fas fa-times"></i></button>
        <a href="#Home" onclick="closeMobileNav()">Home</a>
        <a href="#about" onclick="closeMobileNav()">about</a>
        <a href="#contact" onclick="closeMobileNav()">contact</a>
        <a href="#portfolio" onclick="closeMobileNav()">portfolio</a>
        <a href="#services" onclick="closeMobileNav()">services</a>
        <a href="#contact" onclick="closeMobileNav()" style="color:var(--gold)">Get a Quote →</a>
    </nav>
