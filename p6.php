<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Livohaus</title>
    <!-- Google Fonts for Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #000;
            --accent-color: #ff6a00;
            --text-dark: #1a1a1a;
            --text-muted: #666;
            --bg-pink: #fff0f3;
            --white: #ffffff;
            --border-radius: 15px;
            --transition: all 0.3s ease;
            --shadow-soft: 0 4px 20px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 10px 40px rgba(0, 0, 0, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Scroll Animation Structure */
        .scroll-section-container {
            position: relative;
            background-color: var(--bg-pink);
            border-radius: var(--border-radius);
            margin: 40px 2.5%;
            height: 300vh; /* Vertical height for the "track" */
        }

        .sticky-wrapper {
            position: sticky;
            top: 0;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 5%;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            z-index: 10;
        }

        /* Top Header Area */
        .section-header-top {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .small-tag {
            font-size: 16px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
        }

        .settings-icon {
            font-size: 14px;
            color: var(--text-dark);
            display: flex;
            align-items: center;
        }

        /* Middle Header Area */
        .section-header-main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 60px;
            gap: 40px;
        }

        .header-left {
            flex: 1;
            min-width: 300px;
        }

        .header-left h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 48px;
            line-height: 1.1;
            font-weight: 700;
            color: var(--primary-color);
        }

        .header-right {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .header-right p {
            font-size: 18px;
            color: var(--text-muted);
            margin-bottom: 40px;
            max-width: 600px;
        }

        /* CTA Button */
        .cta-group {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            text-decoration: none;
            transition: var(--transition);
            padding: 8px 8px 8px 24px;
            background: transparent;
            border-radius: 50px;
            border: 1px solid #e0e0e0;
        }

        .btn-text {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .btn-icon {
            width: 44px;
            height: 44px;
            border: 1px solid #e0e0e0;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .cta-group:hover {
            background-color: #ff6a00 !important;
            border-color: #ff6a00 !important;
        }

        .cta-group:hover .btn-text {
            color: #ffffff !important;
        }

        .cta-group:hover .btn-icon {
            border-color: rgba(255, 255, 255, 0.4) !important;
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.2) !important;
        }

        /* Horizontal Scroll Content */
        .horizontal-scroll-track {
            position: relative;
            width: 100%;
            margin-top: 40px;
        }

        .services-grid {
            display: flex;
            gap: 30px;
            width: max-content; /* Allow width to expand for 5 cards */
            transition: transform 0.1s linear; /* Smooth movement */
            will-change: transform;
        }

        .service-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            width: 400px; /* Fixed width for horizontal movement */
            flex-shrink: 0;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-image-wrap {
            padding: 15px;
        }

        .card-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
            border-radius: 12px;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .card-content {
            padding: 24px 30px 40px;
        }

        .card-content h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 22px;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .card-content p {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.5;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .scroll-section-container {
                height: auto; /* Reset for mobile */
                margin: 20px 0;
                border-radius: 0;
                padding: 60px 5%;
            }
            .sticky-wrapper {
                position: relative;
                height: auto;
                padding: 0;
                overflow: visible;
            }
            .horizontal-scroll-track {
                overflow-x: auto;
                padding-bottom: 20px;
                -webkit-overflow-scrolling: touch;
            }
            .services-grid {
                width: max-content;
                transform: none !important; /* Disable JS translation */
            }
            .service-card {
                width: 300px;
            }
            .header-left h2 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>

<!-- Spacer to demonstrate scroll -->
<div style="height: 50vh; display: flex; align-items: center; justify-content: center;">
    <h2 style="font-family: Poppins; color: #ccc;">Scroll Down to Explore Services</h2>
</div>

<section class="scroll-section-container" id="scroll-section">
    <div class="sticky-wrapper">
        <div class="container">
            <!-- TOP HEADER -->
            <div class="section-header-top">
                <span class="small-tag">Our Services</span>
                <div class="settings-icon">
                    <i class="fas fa-cog"></i>
                </div>
            </div>

            <!-- MAIN HEADER -->
            <div class="section-header-main">
                <div class="header-left">
                    <h2>Custom Renovation Services Designed to Fit Your Life</h2>
                </div>
                <div class="header-right">
                    <p>From design to delivery, we offer end-to-end solutions tailored to your space, style, and schedule. Whether you're updating one room or remodeling your entire home, Livohaus makes it seamless.</p>
                    <a href="#" class="cta-group">
                        <span class="btn-text">Request Free Quote</span>
                        <span class="btn-icon">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Horizontal Scroll Area -->
        <div class="horizontal-scroll-track">
            <div class="services-grid" id="services-grid">
                <!-- Card 1 -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?q=80&w=2070&auto=format&fit=crop" alt="Full-Home Renovation">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Full-Home Renovation</h3>
                        <p>Complete home transformations tailored to your style and needs.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?q=80&w=2070&auto=format&fit=crop" alt="Kitchen Remodeling">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Kitchen Remodeling</h3>
                        <p>Smart, stylish kitchens built for daily living.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=2070&auto=format&fit=crop" alt="Bathroom Renovation">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Bathroom Renovation</h3>
                        <p>Modern, functional bathrooms with lasting comfort and quality.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" alt="Outdoor Living Spaces">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Outdoor Living Spaces</h3>
                        <p>Extend your home with inviting patios, decks, and garden zones.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="service-card">
                    <div class="card-image-wrap">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?q=80&w=1932&auto=format&fit=crop" alt="Custom Finishing">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Custom Finishing</h3>
                        <p>Built-ins, trim, flooring, lighting — we sweat the small stuff.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bottom Spacer -->
<div style="height: 100vh; background-color: #fff; display: flex; align-items: center; justify-content: center;">
    <h2 style="font-family: Poppins; color: #ccc;">Keep Scrolling...</h2>
</div>

<script>
    const scrollSection = document.getElementById('scroll-section');
    const servicesGrid = document.getElementById('services-grid');

    function animate() {
        if (window.innerWidth <= 768) return; // Skip for mobile

        const sectionRect = scrollSection.getBoundingClientRect();
        const sectionTop = sectionRect.top;
        const sectionHeight = sectionRect.height;
        const viewportHeight = window.innerHeight;

        // Calculate progress (0 to 1)
        // 0 = section starts entering
        // 1 = section track ends
        let progress = -sectionTop / (sectionHeight - viewportHeight);
        
        // Clamp progress
        progress = Math.max(0, Math.min(1, progress));

        // Calculate total horizontal scroll width
        const gridWidth = servicesGrid.scrollWidth;
        const containerWidth = window.innerWidth * 0.9; // approx container width
        const maxScroll = gridWidth - containerWidth + 100; // Extra padding

        // Apply translation with easing
        const translateX = -progress * maxScroll;
        servicesGrid.style.transform = `translateX(${translateX}px)`;

        requestAnimationFrame(animate);
    }

    // Start animation loop
    window.addEventListener('scroll', () => {
        // We use requestAnimationFrame for smooth performance
    });

    requestAnimationFrame(animate);

    // Initial check
    window.addEventListener('resize', () => {
        if (window.innerWidth <= 768) {
            servicesGrid.style.transform = 'none';
        }
    });
</script>

</body>
</html>
