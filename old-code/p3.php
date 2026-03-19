<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workabitat - Transformation Section</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-black: #1a1a1a;
            --accent-color: #ffffff;
            --text-main: #333333;
            --bg-light: #f9f9f9;
            --font-inter: 'Inter', sans-serif;
            --transition-speed: 0.1s; /* Fast for drag feel */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-inter);
            background-color: var(--bg-light);
            color: var(--text-main);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 6rem 5%;
        }

        .heading-section {
            text-align: center;
            margin-bottom: 4rem;
        }

        .heading-section h2 {
            font-size: clamp(1.75rem, 4vw, 3rem);
            font-weight: 700;
            max-width: 800px;
            margin: 0 auto;
            letter-spacing: -1px;
            color: var(--primary-black);
            line-height: 1.2;
        }

        /* Slider Wrapper */
        .comparison-wrapper {
            position: relative;
            width: 100%;
            height: 600px; /* Base height */
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0,0,0,0.12);
            user-select: none;
        }

        /* Images and Clipping */
        .img-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* The 'Before' container (clipped) */
        .before-container {
            z-index: 2;
            width: 50%; /* Initial split */
            border-right: 2px solid rgba(255, 255, 255, 0.7);
        }

        .after-container {
            z-index: 1;
        }

        /* Handle */
        .slider-handle {
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

        .slider-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background-color: var(--primary-black);
            border: 3px solid #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .slider-button svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }


        /* Full page input fallback or logic for drag */
        #slider-input {
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
            .comparison-wrapper {
                height: 400px;
            }
            .heading-section h2 {
                padding: 0 2rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="heading-section">
            <h2>Transforming boring spaces into beautiful rooms you’ll love</h2>
        </header>

        <section class="comparison-wrapper" id="comparison-section">
            <!-- After Image (Base) -->
            <div class="img-container after-container">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80" alt="Beautifully Renovated Room (After)">
            </div>

            <!-- Before Image (Overlay) -->
            <div class="img-container before-container" id="before-box">
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1920&q=80" alt="Boring Unfinished Space (Before)">
            </div>

            <!-- Slider UI -->
            <div class="slider-handle" id="handle">
                <div class="slider-button">
                    <svg viewBox="0 0 24 24">
                        <path d="M8 7l-5 5 5 5V7zm8 0v10l5-5-5-5z"/>
                    </svg>
                </div>
            </div>

            <!-- Transparent Range Slider for Easy Interaction -->
            <input type="range" min="0" max="100" value="50" id="slider-input">
        </section>
    </div>

    <script>
        const sliderInput = document.getElementById('slider-input');
        const beforeBox = document.getElementById('before-box');
        const handle = document.getElementById('handle');

        sliderInput.addEventListener('input', (e) => {
            const val = e.target.value;
            
            // Adjust the width of the before image container
            beforeBox.style.width = val + '%';
            
            // Adjust the position of the slider handle
            handle.style.left = val + '%';
        });

        // Optional: Reset transition for smooth auto-centering or initial load if needed
        // For dragging, we want it instantaneous (reactive), so no transition is better in CSS.
    </script>
</body>
</html>
