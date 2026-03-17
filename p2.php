<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workabitat - Popular Services</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-light: #ffffff;
            --bg-dark: #1a1a1a;
            --text-main: #333333;
            --text-light: #666666;
            --accent-color: #f8f8f8;
            --hover-highlight: #fcfcfc;
            --transition-speed: 0.4s;
            --ease: ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-main);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        .services-section {
            padding: 8rem 0;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-header {
            padding: 0 5%;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            letter-spacing: -2px;
            color: var(--text-main);
            text-transform: uppercase;
        }

        .services-list {
            display: flex;
            flex-direction: column;
        }

        .service-item {
            display: flex;
            width: 100%;
            height: 180px; /* Adjusted height per user request */
            min-height: 150px;
            border: 1px solid #eee; /* Light border around each item */
            border-bottom: none; /* Avoid double borders between items */
            cursor: pointer;
            transition: all var(--transition-speed) var(--ease);
            position: relative;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
        }

        .service-item:first-child {
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }

        .service-item:last-child {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
            border-bottom: 1px solid #eee; /* Restore bottom border for the last item */
        }

        /* Image Side (Hidden initially) */
        .service-image {
            width: 0%;
            height: 100%;
            overflow: hidden;
            transition: all var(--transition-speed) var(--ease);
            position: relative;
            z-index: 2; /* Visibility fix */
            flex-shrink: 0;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            left: 0;
            top: 0;
            transform: scale(1.2);
            transition: transform var(--transition-speed) var(--ease);
            filter: grayscale(20%);
        }

        /* Content Side */
        .service-content {
            flex: 1;
            padding: 0 3%;
            display: flex;
            flex-direction: row; /* Horizontal alignment for compact view */
            align-items: center;
            justify-content: space-between;
            transition: all var(--transition-speed) var(--ease);
            z-index: 1;
        }

        .service-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .service-content h3 {
            font-size: 1.25rem; /* Smaller for ultra-compact */
            font-weight: 600;
            margin-bottom: 0.25rem;
            transition: all var(--transition-speed) var(--ease);
            letter-spacing: -0.2px;
        }

        .service-content p {
            font-size: 0.9rem;
            color: var(--text-light);
            max-width: 600px;
            line-height: 1.4;
            opacity: 0.8;
            transition: all var(--transition-speed) var(--ease);
            margin: 0;
        }

        .service-number {
            font-size: 0.75rem;
            font-weight: 700;
            color: #ddd;
            transition: all var(--transition-speed) var(--ease);
        }

        /* Hover State */
        .service-item:hover {
            background-color: var(--bg-dark);
            color: #fff;
        }

        .service-item:hover .service-image {
            width: 20%; /* Increased width to 20% per user request */
        }

        .service-item:hover .service-image img {
            transform: scale(1);
            filter: grayscale(0%);
        }

        .service-item:hover .service-content {
            padding-left: 2%;
        }

        .service-item:hover p {
            color: rgba(255, 255, 255, 0.7);
        }

        .service-item:hover .service-number {
            color: rgba(255, 255, 255, 0.3);
        }

        /* Mobile Adjustments */
        @media (max-width: 991px) {
            .service-item {
                flex-direction: column;
                min-height: auto;
            }

            .service-image {
                width: 100% !important;
                height: 300px;
                opacity: 1 !important;
            }

            .service-content {
                padding: 3rem 5% !important;
            }
            
            .service-item:hover .service-image img {
                transform: scale(1.05);
            }
        }
    </style>
</head>
<body>

    <section class="services-section">
        <div class="section-header">
            <h2>Popular Services</h2>
        </div>

        <div class="services-list">
            <!-- Item 1: Kitchen Renovation -->
            <a href="#" class="service-item">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1601760561441-16420502c7e0?w=600&auto=format&fit=crop&q=60" alt="Kitchen Renovation">
                </div>
                <div class="service-content">
                    <div class="service-text">
                        <h3>Kitchen Renovation</h3>
                        <p>Modern designs and premium materials tailored to your lifestyle.</p>
                    </div>
                    <span class="service-number">01</span>
                </div>
            </a>

            <!-- Item 2: Bathroom Renovation -->
            <a href="#" class="service-item">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=800&q=80" alt="Bathroom Renovation">
                </div>
                <div class="service-content">
                    <div class="service-text">
                        <h3>Bathroom Renovation</h3>
                        <p>Transform your bathroom into a personal sanctuary with luxury fixtures.</p>
                    </div>
                    <span class="service-number">02</span>
                </div>
            </a>

            <!-- Item 3: Home Improvement -->
            <a href="#" class="service-item">
                <div class="service-image">
                    <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=800&q=80" alt="Home Improvement">
                </div>
                <div class="service-content">
                    <div class="service-text">
                        <h3>Home Improvement</h3>
                        <p>Comprehensive solutions for every corner of your house.</p>
                    </div>
                    <span class="service-number">03</span>
                </div>
            </a>
        </div>
    </section>

</body>
</html>
