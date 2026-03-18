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
        }
    </style>
</head>
<body>

    <!-- ─── HEADER ─── -->
    <header class="site-header" id="siteHeader">
        <a href="#" class="header-logo">Workabitat</a>
        <nav>
            <ul class="header-nav">
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#faq">FAQ</a></li>
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
        <a href="#services" onclick="closeMobileNav()">Services</a>
        <a href="#portfolio" onclick="closeMobileNav()">Portfolio</a>
        <a href="#process" onclick="closeMobileNav()">Process</a>
        <a href="#faq" onclick="closeMobileNav()">FAQ</a>
        <a href="#contact" onclick="closeMobileNav()" style="color:var(--gold)">Get a Quote →</a>
    </nav>

    <!-- ─── HERO ─── -->
    <div class="hero-wrapper">
        <div class="hero-sticky">
            <div class="hero-info" id="heroInfo">
                <div class="hero-eyebrow">Award-Winning Renovation Studio</div>
                <h1>Spaces that<br><em>inspire living</em></h1>
                <p>We craft interiors that balance beauty with purpose — transforming ordinary rooms into extraordinary homes.</p>
                <div class="hero-actions">
                    <a href="#contact" class="btn-primary">Start Your Project</a>
                    <a href="#portfolio" class="btn-ghost">View Our Work</a>
                </div>
            </div>
            <div class="hero-visual-container">
                <div class="side-image left" id="sideLeft">
                    <img src="https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb?w=600&auto=format&fit=crop&q=60" alt="Interior Detail">
                </div>
                <div class="hero-visual" id="heroVisual">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80" alt="Beautiful Interior">
                </div>
                <div class="side-image right" id="sideRight">
                    <img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format&fit=crop&w=800&q=80" alt="Interior Detail 2">
                </div>
            </div>
            <div class="hero-scroll-hint">Scroll</div>
        </div>
    </div>

    <!-- ─── STATS BAR ─── -->
    <div class="stats-bar">
        <div class="stat-item">
            <div class="stat-number">450+</div>
            <div class="stat-label">Projects Completed</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">12</div>
            <div class="stat-label">Years of Excellence</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">98%</div>
            <div class="stat-label">Client Satisfaction</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">28</div>
            <div class="stat-label">Design Awards</div>
        </div>
    </div>

    <!-- ─── ABOUT STRIP ─── -->
    <div style="background: var(--cream);">
        <div class="about-strip">
            <div class="about-strip-text">
                <div class="section-label">About Workabitat</div>
                <h2>Design that starts with<br>how you <em style="font-family:var(--font-display); font-style:italic;">actually live</em></h2>
                <p>We believe great design should feel as good as it looks. Since 2012, our studio has been transforming homes across the country — bringing together skilled craftspeople, refined materials, and a process built around your comfort.</p>
                <p>From first consultation to the final reveal, we're with you every step of the way.</p>
                <a href="#" class="btn-text-link">Meet our team <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
            </div>
            <div class="about-strip-image">
                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=900&q=80" alt="Our Studio">
            </div>
        </div>
    </div>

    <!-- ─── SERVICES ─── -->
    <section class="services-section" id="services">
        <div class="section-header-row">
            <div>
                <div class="section-label">What We Do</div>
                <h2>Popular<br>Services</h2>
            </div>
            <a href="#" class="btn-text-link" style="margin-bottom: 0.5rem;">View all services <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
        </div>
        <div class="services-list">
            <a href="#" class="service-item">
                <span class="service-item-num">01</span>
                <div class="service-item-img"><img src="https://images.unsplash.com/photo-1601760561441-16420502c7e0?auto=format&w=300" alt="Kitchen"></div>
                <div class="service-item-text"><h3>Kitchen Renovation</h3><p>Modern designs and premium materials tailored to your lifestyle</p></div>
                <span class="service-item-arrow"><i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="#" class="service-item">
                <span class="service-item-num">02</span>
                <div class="service-item-img"><img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&w=300" alt="Bathroom"></div>
                <div class="service-item-text"><h3>Bathroom Renovation</h3><p>Luxury fixtures and spa-inspired designs for your sanctuary</p></div>
                <span class="service-item-arrow"><i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="#" class="service-item">
                <span class="service-item-num">03</span>
                <div class="service-item-img"><img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&w=300" alt="Home Improvement"></div>
                <div class="service-item-text"><h3>Full-Home Renovation</h3><p>Complete transformations from blueprint to beautiful finish</p></div>
                <span class="service-item-arrow"><i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="#" class="service-item">
                <span class="service-item-num">04</span>
                <div class="service-item-img"><img src="https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?auto=format&w=300" alt="Interior Design"></div>
                <div class="service-item-text"><h3>Interior Styling</h3><p>Curated furnishings, finishes, and decor that tell your story</p></div>
                <span class="service-item-arrow"><i class="fas fa-arrow-right"></i></span>
            </a>
            <a href="#" class="service-item">
                <span class="service-item-num">05</span>
                <div class="service-item-img"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&w=300" alt="Office"></div>
                <div class="service-item-text"><h3>Home Office Design</h3><p>Productive, beautiful spaces built for focus and flow</p></div>
                <span class="service-item-arrow"><i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
    </section>

    <!-- ─── BEFORE / AFTER ─── -->
    <section class="ba-section" id="portfolio">
        <div class="ba-container">
            <div class="ba-header">
                <div>
                    <div class="section-label">Transformations</div>
                    <h2>Boring spaces turned<br>into rooms you'll love</h2>
                </div>
                <p>Every project begins with understanding how you live — and ends with a space that exceeds everything you imagined. Drag the slider to see the transformation.</p>
            </div>
            <div class="ba-wrapper">
                <div class="ba-img ba-after"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&w=1200" alt="After renovation"></div>
                <div class="ba-img ba-before" id="baBeforeBox"><img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&w=1200" alt="Before renovation"></div>
                <div class="ba-labels">
                    <span class="ba-label">Before</span>
                    <span class="ba-label">After</span>
                </div>
                <div class="ba-handle" id="baHandle">
                    <div class="ba-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 7l-5 5 5 5V7zm8 0v10l5-5-5-5z"/></svg>
                    </div>
                </div>
                <input type="range" min="0" max="100" value="50" id="ba-input">
            </div>
        </div>
    </section>

    <!-- ─── PROCESS ─── -->
    <section class="process-section" id="process">
        <div class="process-container">
            <div style="text-align:center; margin-bottom: 0.5rem;">
                <div class="section-label" style="justify-content:center; display:flex">How It Works</div>
            </div>
            <div style="text-align:center">
                <h2 style="font-family:var(--font-display); font-size: clamp(2rem,4vw,3rem); font-weight:300; color:var(--black)">A simple process,<br>remarkable results</h2>
            </div>
            <div class="process-grid">
                <div class="process-step">
                    <div class="step-num">01</div>
                    <div class="step-icon"><i class="fas fa-comments"></i></div>
                    <h3>Consultation</h3>
                    <p>We meet to understand your vision, lifestyle, and goals. Every great space begins with listening.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">02</div>
                    <div class="step-icon"><i class="fas fa-pencil-ruler"></i></div>
                    <h3>Design Concept</h3>
                    <p>Our designers create a tailored concept with detailed layouts, material boards, and 3D renderings.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">03</div>
                    <div class="step-icon"><i class="fas fa-hammer"></i></div>
                    <h3>Construction</h3>
                    <p>Our skilled craftspeople bring the design to life with precision and care, keeping you informed throughout.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">04</div>
                    <div class="step-icon"><i class="fas fa-star"></i></div>
                    <h3>Final Reveal</h3>
                    <p>We style and stage your finished space, then hand over the keys to your beautifully renovated home.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ─── TESTIMONIALS ─── -->
    <section class="testimonials-section">
        <div style="max-width:1200px; margin:0 auto;">
            <div class="testimonials-header">
                <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:0.75rem;color:var(--gold)">
                    <span style="display:block;width:32px;height:1px;background:var(--gold);opacity:.5"></span>
                    Client Stories
                    <span style="display:block;width:32px;height:1px;background:var(--gold);opacity:.5"></span>
                </div>
                <h2>Hear from our clients</h2>
                <p>Real feedback from homeowners who trusted us with their spaces.</p>
            </div>
            <div class="swiper p4-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="t-card">
                        <div class="t-stars">★★★★★</div>
                        <p class="t-text">"Workabitat transformed our dated kitchen into a magazine-worthy space. The team was professional, creative, and kept us informed every step of the way. Couldn't be more thrilled."</p>
                        <div class="t-client"><img src="https://i.pravatar.cc/150?u=sarah" class="t-photo"><div><p class="t-name">Sarah Johnson</p><span class="t-role">Kitchen Renovation, Sydney</span></div></div>
                    </div></div>
                    <div class="swiper-slide"><div class="t-card">
                        <div class="t-stars">★★★★★</div>
                        <p class="t-text">"The space planning they did for our open-plan home was brilliant. They found solutions we never would have thought of, and the result feels both larger and more intimate."</p>
                        <div class="t-client"><img src="https://i.pravatar.cc/150?u=michael" class="t-photo"><div><p class="t-name">Michael Chen</p><span class="t-role">Full-Home Renovation, Melbourne</span></div></div>
                    </div></div>
                    <div class="swiper-slide"><div class="t-card">
                        <div class="t-stars">★★★★★</div>
                        <p class="t-text">"Elegant aesthetics combined with genuine functionality. My bathroom now feels like a five-star hotel. The attention to detail is extraordinary — every tile, every fixture is perfect."</p>
                        <div class="t-client"><img src="https://i.pravatar.cc/150?u=emma" class="t-photo"><div><p class="t-name">Emma Davies</p><span class="t-role">Bathroom Renovation, Brisbane</span></div></div>
                    </div></div>
                    <div class="swiper-slide"><div class="t-card">
                        <div class="t-stars">★★★★★</div>
                        <p class="t-text">"From our first meeting to the final handover, Workabitat was exceptional. They listened, they delivered, and they went above and beyond. Our home is truly transformed."</p>
                        <div class="t-client"><img src="https://i.pravatar.cc/150?u=james" class="t-photo"><div><p class="t-name">James & Priya Okafor</p><span class="t-role">Interior Styling, Adelaide</span></div></div>
                    </div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ─── FAQ ─── -->
    <section class="faq-section" id="faq">
        <div class="faq-container">
            <div class="faq-sidebar">
                <div class="section-label">FAQ</div>
                <h2>Questions on your mind</h2>
                <p>Can't find what you're looking for? Reach out and we'll be happy to help.</p>
                <a href="#contact" class="btn-text-link" style="margin-top:1.5rem; display:inline-flex">Contact us <i class="fas fa-arrow-right" style="font-size:0.75rem"></i></a>
            </div>
            <div class="faq-list">
                <div class="faq-item open">
                    <div class="faq-q"><h3>How does Workabitat differ from traditional renovation companies?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>We combine interior design expertise with renovation execution under one roof. This means seamless communication, a cohesive vision, and no finger-pointing between designers and contractors — just beautifully delivered results.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>What is the typical timeline for a renovation project?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>Most residential renovations take between 6 to 16 weeks from design approval to final reveal, depending on scope. We provide a detailed schedule upfront so there are no surprises.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>Do you offer free initial consultations?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>Yes — we offer a complimentary 45-minute consultation where we discuss your vision, review the space, and outline a tailored approach. No obligations, just ideas.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>Can I customize the design to my personal taste?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>Absolutely. Every project is built around you. Our designers work closely with you through mood boards, material samples, and 3D renderings until the concept feels exactly right.</p></div>
                </div>
                <div class="faq-item">
                    <div class="faq-q"><h3>Do you manage the entire project from start to finish?</h3><button class="faq-toggle"><i class="fas fa-plus"></i></button></div>
                    <div class="faq-answer"><p>Yes. We handle everything from design through procurement, construction management, and final styling. You can be as hands-on or hands-off as you prefer.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ─── SHOWCASE STRIP ─── -->
    <section class="showcase-section" id="portfolio2">
        <div class="showcase-header">
            <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;color:var(--gold)">
                <span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>Our Portfolio<span style="width:28px;height:1px;background:var(--gold);opacity:.5;display:block"></span>
            </div>
            <h2>Curated Excellence</h2>
        </div>
        <div class="scroll-track-container">
            <div class="scroll-track">
                <div class="sc-card sc-1"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&w=500" alt=""></div>
                <div class="sc-card sc-2"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&w=400" alt=""></div>
                <div class="sc-card sc-3"><img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&w=600" alt=""></div>
                <div class="sc-card sc-4"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&w=400" alt=""></div>
                <div class="sc-card sc-5"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&w=500" alt=""></div>
                <div class="sc-card sc-1"><img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&w=500" alt=""></div>
                <!-- Duplicate -->
                <div class="sc-card sc-1"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&w=500" alt=""></div>
                <div class="sc-card sc-2"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&w=400" alt=""></div>
                <div class="sc-card sc-3"><img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&w=600" alt=""></div>
                <div class="sc-card sc-4"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&w=400" alt=""></div>
                <div class="sc-card sc-5"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&w=500" alt=""></div>
                <div class="sc-card sc-1"><img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&w=500" alt=""></div>
            </div>
        </div>
    </section>

    <!-- ─── CTA BAND ─── -->
    <section class="cta-band" id="contact">
        <div class="section-label" style="display:flex;align-items:center;justify-content:center;gap:.75rem;color:rgba(255,255,255,0.7);margin-bottom:.5rem">
            <span style="width:28px;height:1px;background:rgba(255,255,255,.5);display:block"></span>Ready to Begin<span style="width:28px;height:1px;background:rgba(255,255,255,.5);display:block"></span>
        </div>
        <h2>Let's create your<br>dream space together</h2>
        <p>Book your free consultation today. No pressure, just great ideas.</p>
        <div>
            <a href="#" class="btn-white">Book a Free Consultation</a>
            <a href="#" class="btn-outline-white">View Our Work</a>
        </div>
    </section>

    <!-- ─── FOOTER ─── -->
    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <div class="footer-brand-name">Workabitat</div>
                <p class="footer-brand-desc">Award-winning interior design and renovation studio. Transforming homes since 2012 with craftsmanship, creativity, and care.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-houzz"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <div class="footer-col-title">Services</div>
                <ul class="footer-links">
                    <li><a href="#">Kitchen Renovation</a></li>
                    <li><a href="#">Bathroom Renovation</a></li>
                    <li><a href="#">Full-Home Renovation</a></li>
                    <li><a href="#">Interior Styling</a></li>
                    <li><a href="#">Home Office Design</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Company</div>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Process</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Get in Touch</div>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>12 Loftwood Avenue<br>Sydney NSW 2000, Australia</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+61 2 9876 5432</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>hello@workabitat.com</span>
                </div>
                <div class="footer-contact-item" style="margin-top:1.5rem">
                    <i class="fas fa-clock"></i>
                    <span>Mon–Fri: 9am – 6pm<br>Sat: 10am – 3pm</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-bottom-copy">© 2025 Workabitat. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // ─── HEADER SCROLL ───
        const header = document.getElementById('siteHeader');
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 60);
        });

        // ─── MOBILE MENU ───
        document.getElementById('hamburger').addEventListener('click', () => {
            document.getElementById('mobileNav').classList.add('open');
        });
        document.getElementById('mobileClose').addEventListener('click', closeMobileNav);
        function closeMobileNav() {
            document.getElementById('mobileNav').classList.remove('open');
        }

        // ─── HERO PARALLAX ───
        const heroInfo = document.getElementById('heroInfo');
        const heroVisual = document.getElementById('heroVisual');
        const sideLeft = document.getElementById('sideLeft');
        const sideRight = document.getElementById('sideRight');

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const wh = window.innerHeight;
            const progress = Math.min(scrollY / wh, 1);

            heroInfo.style.opacity = 1 - progress * 1.8;
            heroInfo.style.transform = `translateY(${-progress * 120}px)`;

            const w = 100 - progress * 50;
            const h = 100 - progress * 25;
            const br = progress * 28;
            heroVisual.style.width = w + '%';
            heroVisual.style.height = h + 'vh';
            heroVisual.style.borderRadius = br + 'px';

            const sp = Math.max(0, (progress - 0.25) / 0.75);
            sideLeft.style.transform = `translateX(${-150 + sp * 150}%) scale(${0.85 + sp * 0.15})`;
            sideRight.style.transform = `translateX(${150 - sp * 150}%) scale(${0.85 + sp * 0.15})`;
            sideLeft.style.opacity = sp;
            sideRight.style.opacity = sp;

            const img = heroVisual.querySelector('img');
            if (img) img.style.transform = `scale(${1 + (1 - progress) * 0.08})`;
        });

        // ─── BEFORE/AFTER SLIDER ───
        const baInput = document.getElementById('ba-input');
        const baBeforeBox = document.getElementById('baBeforeBox');
        const baHandle = document.getElementById('baHandle');

        baInput.addEventListener('input', (e) => {
            const v = e.target.value;
            baBeforeBox.style.width = v + '%';
            baHandle.style.left = v + '%';
        });

        // ─── FAQ ───
        document.querySelectorAll('.faq-item').forEach(item => {
            item.querySelector('.faq-q').addEventListener('click', () => {
                const wasOpen = item.classList.contains('open');
                document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
                if (!wasOpen) item.classList.add('open');
            });
        });

        // ─── TESTIMONIALS SWIPER ───
        new Swiper('.p4-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            speed: 5000,
            autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: true },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    </script>
</body>
</html>