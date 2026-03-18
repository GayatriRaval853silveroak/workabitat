<style>
    :root {
        --primary-black-p3: #1a1a1a;
        --accent-color-p3: #ffffff;
        --text-main-p3: #333333;
        --bg-light-p3: #f9f9f9;
        --font-inter: 'Inter', sans-serif;
    }

    .p3-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 6rem 5%;
    }

    .p3-heading-section {
        text-align: center;
        margin-bottom: 4rem;
    }

    .p3-heading-section h2 {
        font-size: clamp(1.75rem, 4vw, 3rem);
        font-weight: 700;
        max-width: 800px;
        margin: 0 auto;
        letter-spacing: -1px;
        color: var(--primary-black-p3);
        line-height: 1.2;
    }

    /* Slider Wrapper */
    .p3-comparison-wrapper {
        position: relative;
        width: 100%;
        height: 600px; 
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(0,0,0,0.12);
        user-select: none;
    }

    /* Images and Clipping */
    .p3-img-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .p3-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* The 'Before' container (clipped) */
    .p3-before-container {
        z-index: 2;
        width: 50%; /* Initial split */
        border-right: 2px solid rgba(255, 255, 255, 0.7);
    }

    .p3-after-container {
        z-index: 1;
    }

    /* Handle */
    .p3-slider-handle {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%; /* Initial center */
        width: 4px;
        background-color: #fff;
        z-index: 10;
        cursor: ew-resize;
        transform: translateX(-50%);
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .p3-slider-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        background-color: var(--primary-black-p3);
        border: 3px solid #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .p3-slider-button svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
    }

    /* Full page input fallback or logic for drag */
    #p3-slider-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: 100;
        cursor: ew-resize;
        margin: 0;
    }

    /* Mobile Adjustments */
    @media (max-width: 768px) {
        .p3-comparison-wrapper {
            height: 400px;
        }
        .p3-heading-section h2 {
            padding: 0 2rem;
        }
    }
</style>

<div class="p3-container">
    <header class="p3-heading-section">
        <h2>Transforming boring spaces into beautiful rooms you’ll love</h2>
    </header>

    <section class="p3-comparison-wrapper" id="p3-comparison-section">
        <!-- After Image (Base) -->
        <div class="p3-img-container p3-after-container">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80" alt="Beautifully Renovated Room (After)">
        </div>

        <!-- Before Image (Overlay) -->
        <div class="p3-img-container p3-before-container" id="p3-before-box">
            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1920&q=80" alt="Boring Unfinished Space (Before)">
        </div>

        <!-- Slider UI -->
        <div class="p3-slider-handle" id="p3-handle">
            <div class="p3-slider-button">
                <svg viewBox="0 0 24 24">
                    <path d="M8 7l-5 5 5 5V7zm8 0v10l5-5-5-5z"/>
                </svg>
            </div>
        </div>

        <!-- Transparent Range Slider for Easy Interaction -->
        <input type="range" min="0" max="100" value="50" id="p3-slider-input">
    </section>
</div>

<script>
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
</script>
