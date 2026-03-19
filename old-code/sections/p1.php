<style>
    :root {
        --primary-black-p1: #1a1a1a;
        --secondary-gray-p1: #f5f5f5;
        --accent-color-p1: #e67e22; /* A warm orange typical for renovation/design */
        --text-main-p1: #333333;
        --text-light-p1: #666666;
        --font-inter: 'Inter', sans-serif;
    }

    /* Hero Wrapper */
    .hero-wrapper {
        position: relative;
        height: 200vh; /* Extra height for scroll effects */
        background-color: #fff;
    }

    /* Sticky Container for Hero Content */
    .hero-sticky {
        position: sticky;
        top: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 0 5%;
    }

    /* Hero Info (Text) */
    .hero-info {
        text-align: center;
        max-width: 900px;
        z-index: 2;
        margin-bottom: 2rem;
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .hero-info h1 {
        font-size: clamp(2.5rem, 8vw, 5rem);
        font-weight: 700;
        color: #fff;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        letter-spacing: -2px;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    .hero-info p {
        font-size: clamp(1rem, 2vw, 1.25rem);
        color: rgba(255, 255, 255, 0.9);
        max-width: 600px;
        margin: 0 auto 2rem;
        text-shadow: 0 1px 5px rgba(0,0,0,0.3);
    }

    .btn-cta-p1 {
        background-color: var(--primary-black-p1);
        color: #fff;
        padding: 1rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: transform 0.3s ease, background-color 0.3s ease;
        display: inline-block;
    }

    .btn-cta-p1:hover {
        transform: scale(1.05);
        background-color: var(--accent-color-p1);
    }

    /* Hero Visual Container */
    .hero-visual-container {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
    }

    /* Hero Visual (Main Image) */
    .hero-visual {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        transition: border-radius 0.3s ease;
        transform-origin: center center;
        z-index: 2;
    }

    .hero-visual img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Side Images */
    .side-image {
        position: absolute;
        width: 25%;
        height: 50vh;
        border-radius: 15px;
        overflow: hidden;
        z-index: 1;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        transition: transform 0.1s linear;
    }

    .side-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .side-image.left {
        left: 5%;
        transform: translateX(-150%) scale(0.8);
    }

    .side-image.right {
        right: 5%;
        transform: translateX(150%) scale(0.8);
    }
</style>

<div class="hero-wrapper">
    <div class="hero-sticky">
        <!-- Text Content -->
        <div class="hero-info" id="heroInfo">
            <h1>Beautiful renovations <br>made simple</h1>
            <p>Great spaces don't happen by accident. They're carefully crafted with skill, passion, and attention to detail.</p>
            <a href="#" class="btn-cta-p1">Start Your Project</a>
        </div>

        <!-- Hero Visual Container -->
        <div class="hero-visual-container">
            <!-- Left Side Image -->
            <div class="side-image left" id="sideLeft">
                <img src="https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aW50ZXJpb3IlMjBkZXNpZ258ZW58MHx8MHx8fDA%3D" alt="Interior Detail 1">
            </div>

            <!-- Expanding/Shrinking Main Image -->
            <div class="hero-visual" id="heroVisual">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80" alt="Beautiful Interior Renovation">
            </div>

            <!-- Right Side Image -->
            <div class="side-image right" id="sideRight">
                <img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format&fit=crop&w=800&q=80" alt="Interior Detail 2">
            </div>
        </div>
    </div>
</div>

<script>
    const heroInfo = document.getElementById('heroInfo');
    const heroVisual = document.getElementById('heroVisual');
    const sideLeft = document.getElementById('sideLeft');
    const sideRight = document.getElementById('sideRight');
    const heroWrapper = document.querySelector('.hero-wrapper');

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        const windowHeight = window.innerHeight;
        const progress = Math.min(scrollY / windowHeight, 1); // 0 to 1

        if (heroInfo && heroVisual && sideLeft && sideRight) {
            // 1. Fade and lift text out
            heroInfo.style.opacity = 1 - progress * 1.5;
            heroInfo.style.transform = `translateY(${-progress * 150}px)`;

            // 2. Scale down the main image
            const scale = 1 - (progress * 0.5); // 1 to 0.5
            const width = 100 - (progress * 50); // 100 to 50
            const height = 100 - (progress * 30); // 100 to 70
            const borderRadius = progress * 30; // 0 to 30

            heroVisual.style.width = `${width}%`;
            heroVisual.style.height = `${height}vh`;
            heroVisual.style.borderRadius = `${borderRadius}px`;

            // 3. Slide in side images
            const sideSlideProgress = Math.max(0, (progress - 0.2) / 0.8); // Starts sliding after 20% scroll
            const leftTranslate = -150 + (sideSlideProgress * 150); // -150 to 0
            const rightTranslate = 150 - (sideSlideProgress * 150); // 150 to 0
            const sideScale = 0.8 + (sideSlideProgress * 0.2); // 0.8 to 1

            sideLeft.style.transform = `translateX(${leftTranslate}%) scale(${sideScale})`;
            sideRight.style.transform = `translateX(${rightTranslate}%) scale(${sideScale})`;
            sideLeft.style.opacity = sideSlideProgress;
            sideRight.style.opacity = sideSlideProgress;

            // 4. Parallax effect on main image
            const img = heroVisual.querySelector('img');
            img.style.transform = `scale(${1 + (1 - progress) * 0.1})`;
        }
    });
</script>
