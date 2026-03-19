<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Showcase | Workabitat</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0c0c0c;
            --text-color: #ffffff;
            --accent-color: #ffd700;
            --gap: 30px;
            --scroll-speed: 40s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 80px 0;
        }

        .showcase-header {
            text-align: center;
            margin-bottom: 60px;
            max-width: 800px;
            padding: 0 20px;
        }

        .showcase-header h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 600;
            letter-spacing: -0.02em;
            margin-bottom: 20px;
            background: linear-gradient(to bottom, #fff 0%, #888 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .showcase-header p {
            font-size: 1.1rem;
            color: #888;
            font-weight: 300;
            line-height: 1.6;
        }

        /* Showcase Container */
        .showcase-container {
            width: 100%;
            position: relative;
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
        }

        .scroll-wrapper {
            display: flex;
            width: max-content;
            animation: scroll var(--scroll-speed) linear infinite;
            padding: 20px 0;
        }

        .scroll-wrapper:hover {
            animation-play-state: paused;
        }

        .image-card {
            flex-shrink: 0;
            margin-right: var(--gap);
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            cursor: pointer;
            overflow: hidden;
            background-color: #1a1a1a; /* Placeholder bg */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .image-card:hover {
            transform: scale(1.05);
            z-index: 10;
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            pointer-events: none; /* Prevent image drag interference */
        }

        /* Robust Unified Height - Varied Widths for Aesthetics */
        .card-1 { width: 400px; height: 450px; border-radius: 30px 30px 0 0; }
        .card-2 { width: 320px; height: 450px; border-radius: 160px 160px 0 0; }
        .card-3 { width: 500px; height: 450px; border-radius: 30px 30px 0 0; }
        .card-4 { width: 300px; height: 450px; border-radius: 150px 150px 0 0; }
        .card-5 { width: 420px; height: 450px; border-radius: 30px 30px 0 0; }
        .card-6 { width: 350px; height: 450px; border-radius: 175px 175px 0 0; }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-50% - (var(--gap) / 2))); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .showcase-container {
                mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
                -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            }
            .card-1, .card-2, .card-3, .card-4, .card-5, .card-6 { height: 320px; }
            .card-1 { width: 250px; }
            .card-2 { width: 200px; border-radius: 100px 100px 0 0; }
            .card-3 { width: 300px; }
            .card-4 { width: 180px; border-radius: 90px 90px 0 0; }
            .card-5 { width: 280px; }
            .card-6 { width: 220px; border-radius: 110px 110px 0 0; }
            --scroll-speed: 30s;
        }
    </style>
</head>
<body>

    <header class="showcase-header">
        <h1>Curated Excellence</h1>
        <p>A visual journey through premium architecture and interior spaces, designed to redefine modern living.</p>
    </header>

    <div class="showcase-container">
        <div class="scroll-wrapper">
            <!-- Primary Row -->
            <div class="image-card card-1">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&q=80&w=800" alt="Luxury Living Room">
            </div>
            <div class="image-card card-2">
                <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&q=80&w=800" alt="Premium Bedroom">
            </div>
            <div class="image-card card-3">
                <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=800" alt="Modern Workspace">
            </div>
            <div class="image-card card-4">
                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&q=80&w=800" alt="Outdoor Space">
            </div>
            <div class="image-card card-5">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=800" alt="Modern Home">
            </div>
            <div class="image-card card-6">
                <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&q=80&w=800" alt="Luxury Villa">
            </div>

            <!-- Duplicate Row for Seamless Loop -->
            <div class="image-card card-1">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&q=80&w=800" alt="Luxury Living Room">
            </div>
            <div class="image-card card-2">
                <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&q=80&w=800" alt="Premium Bedroom">
            </div>
            <div class="image-card card-3">
                <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=800" alt="Modern Workspace">
            </div>
            <div class="image-card card-4">
                <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&q=80&w=800" alt="Outdoor Space">
            </div>
            <div class="image-card card-5">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=800" alt="Modern Home">
            </div>
            <div class="image-card card-6">
                <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&q=80&w=800" alt="Luxury Villa">
            </div>
        </div>
    </div>

</body>
</html>
