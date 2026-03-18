<style>
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

    .p2-services-section {
        padding: 8rem 0;
        max-width: 1400px;
        margin: 0 auto;
    }

    .p2-section-header {
        padding: 0 5%;
        margin-bottom: 4rem;
    }

    .p2-section-header h2 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 700;
        letter-spacing: -2px;
        color: var(--text-main-p2);
        text-transform: uppercase;
    }

    .p2-services-list {
        display: flex;
        flex-direction: column;
    }

    .p2-service-item {
        display: flex;
        width: 100%;
        height: 180px; 
        min-height: 150px;
        border: 1px solid #eee; 
        border-bottom: none; 
        cursor: pointer;
        transition: all var(--transition-speed-p2) var(--ease-p2);
        position: relative;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
    }

    .p2-service-item:first-child {
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
    }

    .p2-service-item:last-child {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        border-bottom: 1px solid #eee; 
    }

    /* Image Side (Hidden initially) */
    .p2-service-image {
        width: 0%;
        height: 100%;
        overflow: hidden;
        transition: all var(--transition-speed-p2) var(--ease-p2);
        position: relative;
        z-index: 2; 
        flex-shrink: 0;
    }

    .p2-service-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        left: 0;
        top: 0;
        transform: scale(1.2);
        transition: transform var(--transition-speed-p2) var(--ease-p2);
        filter: grayscale(20%);
    }

    /* Content Side */
    .p2-service-content {
        flex: 1;
        padding: 0 3%;
        display: flex;
        flex-direction: row; 
        align-items: center;
        justify-content: space-between;
        transition: all var(--transition-speed-p2) var(--ease-p2);
        z-index: 1;
    }

    .p2-service-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .p2-service-content h3 {
        font-size: 1.25rem; 
        font-weight: 600;
        margin-bottom: 0.25rem;
        transition: all var(--transition-speed-p2) var(--ease-p2);
        letter-spacing: -0.2px;
    }

    .p2-service-content p {
        font-size: 0.9rem;
        color: var(--text-light-p2);
        max-width: 600px;
        line-height: 1.4;
        opacity: 0.8;
        transition: all var(--transition-speed-p2) var(--ease-p2);
        margin: 0;
    }

    .p2-service-number {
        font-size: 0.75rem;
        font-weight: 700;
        color: #ddd;
        transition: all var(--transition-speed-p2) var(--ease-p2);
    }

    /* Hover State */
    .p2-service-item:hover {
        background-color: var(--bg-dark-p2);
        color: #fff;
    }

    .p2-service-item:hover .p2-service-image {
        width: 20%; 
    }

    .p2-service-item:hover .p2-service-image img {
        transform: scale(1);
        filter: grayscale(0%);
    }

    .p2-service-item:hover .p2-service-content {
        padding-left: 2%;
    }

    .p2-service-item:hover p {
        color: rgba(255, 255, 255, 0.7);
    }

    .p2-service-item:hover .p2-service-number {
        color: rgba(255, 255, 255, 0.3);
    }

    /* Mobile Adjustments */
    @media (max-width: 991px) {
        .p2-service-item {
            flex-direction: column;
            min-height: auto;
        }

        .p2-service-image {
            width: 100% !important;
            height: 300px;
            opacity: 1 !important;
        }

        .p2-service-content {
            padding: 3rem 5% !important;
        }
        
        .p2-service-item:hover .p2-service-image img {
            transform: scale(1.05);
        }
    }
</style>

<section class="p2-services-section">
    <div class="p2-section-header">
        <h2>Popular Services</h2>
    </div>

    <div class="p2-services-list">
        <!-- Item 1: Kitchen Renovation -->
        <a href="#" class="p2-service-item">
            <div class="p2-service-image">
                <img src="https://images.unsplash.com/photo-1601760561441-16420502c7e0?w=600&auto=format&fit=crop&q=60" alt="Kitchen Renovation">
            </div>
            <div class="p2-service-content">
                <div class="p2-service-text">
                    <h3>Kitchen Renovation</h3>
                    <p>Modern designs and premium materials tailored to your lifestyle.</p>
                </div>
                <span class="p2-service-number">01</span>
            </div>
        </a>

        <!-- Item 2: Bathroom Renovation -->
        <a href="#" class="p2-service-item">
            <div class="p2-service-image">
                <img src="https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=800&q=80" alt="Bathroom Renovation">
            </div>
            <div class="p2-service-content">
                <div class="p2-service-text">
                    <h3>Bathroom Renovation</h3>
                    <p>Transform your bathroom into a personal sanctuary with luxury fixtures.</p>
                </div>
                <span class="p2-service-number">02</span>
            </div>
        </a>

        <!-- Item 3: Home Improvement -->
        <a href="#" class="p2-service-item">
            <div class="p2-service-image">
                <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=800&q=80" alt="Home Improvement">
            </div>
            <div class="p2-service-content">
                <div class="p2-service-text">
                    <h3>Home Improvement</h3>
                    <p>Comprehensive solutions for every corner of your house.</p>
                </div>
                <span class="p2-service-number">03</span>
            </div>
        </a>
    </div>
</section>
