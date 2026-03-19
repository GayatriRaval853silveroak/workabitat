<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Transformations | Interior Design</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-dark: #2d2d2d;
            --accent-orange: #ff6a00;
            --light-gray: #f8f9fa;
            --soft-gray: #777;
            --transition: 0.3s ease;
            --border-radius: 15px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #eee;
            padding: 50px 20px;
        }

        .transformations-section {
            max-width: 1200px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: var(--border-radius);
            padding: 80px 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            overflow: hidden;
        }

        .section-header {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            font-weight: 600;
            color: var(--primary-dark);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .section-header i {
            color: var(--accent-orange);
            font-size: 1.1rem;
        }

        .main-heading {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .main-heading span {
            color: var(--accent-orange);
        }

        .subtext {
            color: var(--soft-gray);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 50px;
            line-height: 1.6;
        }

        /* Carousel Styles */
        .carousel-view {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
        }

        .carousel-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            gap: 30px;
            padding: 20px 0;
        }

        .carousel-item {
            flex: 0 0 calc(33.333% - 20px);
            min-width: calc(33.333% - 20px);
            transition: all 0.5s ease;
            opacity: 0.6;
            transform: scale(0.9);
            cursor: pointer;
        }

        .carousel-item.active {
            opacity: 1;
            transform: scale(1.05);
            z-index: 2;
        }

        .image-wrapper {
            width: 100%;
            aspect-ratio: 4/3;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .carousel-item:hover .image-wrapper img {
            transform: scale(1.1);
        }

        .item-content {
            transition: opacity 0.3s ease;
            text-align: center;
            padding: 0 10px;
        }

        .item-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .item-description {
            font-size: 0.95rem;
            color: var(--soft-gray);
            line-height: 1.5;
        }

        /* Navigation Buttons */
        .nav-btn {
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #fff;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            color: var(--primary-dark);
            font-size: 1.2rem;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .nav-btn:hover {
            background: var(--accent-orange);
            color: #fff;
            box-shadow: 0 8px 20px rgba(255, 106, 0, 0.3);
        }

        .nav-btn.prev { left: -25px; }
        .nav-btn.next { right: -25px; }

        /* Responsive */
        @media (max-width: 992px) {
            .carousel-item {
                flex: 0 0 calc(50% - 15px);
                min-width: calc(50% - 15px);
            }
        }

        @media (max-width: 768px) {
            .transformations-section {
                padding: 60px 20px;
            }
            .main-heading { font-size: 2.2rem; }
            .carousel-item {
                flex: 0 0 100%;
                min-width: 100%;
            }
            .carousel-item.active {
                transform: scale(1);
            }
            .nav-btn {
                top: auto;
                bottom: -20px;
                transform: none;
            }
            .nav-btn.prev { left: 30%; }
            .nav-btn.next { right: 30%; }
        }
    </style>
</head>
<body>

<section class="transformations-section">
    <div class="section-header">
        Our Transformations <i class="fas fa-home"></i>
    </div>
    
    <h2 class="main-heading">
        Real Homes. <span>Remarkable Results.</span>
    </h2>
    
    <p class="subtext">
        See how we turn everyday spaces into extraordinary living experiences — one project at a time
    </p>

    <div class="carousel-view">
        <button class="nav-btn prev" id="prevBtn"><i class="fas fa-chevron-left"></i></button>
        
        <div class="carousel-container">
            <div class="carousel-track" id="carouselTrack">
                <!-- Slide 1 -->
                <div class="carousel-item">
                    <div class="image-wrapper">
                        <img src="assets/images/sonoma_vineyard.png" alt="Sonoma Valley Vineyard Retreat">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Sonoma Valley Vineyard Retreat</h3>
                        <p class="item-description">
                            A rustic-modern retreat set among Sonoma’s vineyards, designed for leisure, gatherings, and weekend escapes.
                        </p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="image-wrapper">
                        <img src="assets/images/custom_finishing_interior_1773809260382.png" alt="Santa Monica Creative Studio">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Santa Monica Creative Studio</h3>
                        <p class="item-description">
                            An industrial loft transformed into a vibrant, collaborative creative studio for a design-focused business.
                        </p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="image-wrapper">
                        <img src="assets/images/full_home_renovation_1773808872570.png" alt="Beverly Hills Luxury Residence">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Beverly Hills Luxury Residence</h3>
                        <p class="item-description">
                            A timeless family home renovation in Beverly Hills, designed to blend elegance, comfort, and modern luxury.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <button class="nav-btn next" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>



<script>
    const track = document.getElementById('carouselTrack');
    const items = Array.from(track.children);
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    let currentIndex = 1;

    function updateCarousel() {
        const isMobile = window.innerWidth <= 768;
        const itemWidth = items[0].getBoundingClientRect().width;
        const gap = 30;
        const containerWidth = track.parentElement.offsetWidth;
        
        // Calculate offset to center the current item
        // Center of container - center of item - gap/2 if needed (but flex handles gap)
        // Correct formula: (containerWidth / 2) - (itemWidth / 2) - (currentIndex * (itemWidth + gap))
        const offset = (containerWidth / 2) - (itemWidth / 2) - (currentIndex * (itemWidth + gap));
        
        track.style.transform = `translateX(${offset}px)`;

        // Update classes
        items.forEach((item, index) => {
            if (index === currentIndex) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarousel();
    });

    // Initialize
    window.addEventListener('resize', () => {
        updateCarousel();
    });
    
    // Initial call after a short delay to ensure layout is ready
    window.addEventListener('load', updateCarousel);
    setTimeout(updateCarousel, 300);

    // Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});

    track.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, {passive: true});

    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            nextBtn.click();
        }
        if (touchEndX > touchStartX + 50) {
            prevBtn.click();
        }
    }
</script>

</body>
</html>
