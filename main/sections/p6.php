<style>
    .p6-scroll-section-container {
        position: relative;
        background-color: #fff0f3;
        border-radius: 15px;
        margin: 40px 2.5%;
        height: 300vh;
    }

    .p6-sticky-wrapper {
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

    .p6-container {
        max-width: 1400px;
        margin: 0 auto;
        width: 100%;
        z-index: 10;
    }

    .p6-section-header-main {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 60px;
        gap: 40px;
    }

    .p6-header-left h2 {
        font-size: 48px;
        line-height: 1.1;
        font-weight: 700;
        color: #000;
    }

    .p6-services-grid {
        display: flex;
        gap: 30px;
        width: max-content;
        will-change: transform;
    }

    .p6-service-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        width: 400px;
        flex-shrink: 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .p6-card-image {
        width: 100%;
        height: 220px;
        overflow: hidden;
    }

    .p6-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .p6-card-content {
        padding: 24px 30px 40px;
    }

    @media (max-width: 768px) {
        .p6-scroll-section-container { height: auto; margin: 20px 0; padding: 60px 0; }
        .p6-sticky-wrapper { position: relative; height: auto; padding: 0; }
        .p6-services-grid { width: 100%; flex-direction: column; transform: none !important; padding: 20px; }
        .p6-service-card { width: 100%; }
    }
</style>

<section class="p6-scroll-section-container" id="p6-scroll-section">
    <div class="p6-sticky-wrapper">
        <div class="p6-container">
            <div class="p6-section-header-main">
                <div class="p6-header-left">
                    <h2>Custom Renovation Services Designed to Fit Your Life</h2>
                </div>
            </div>
        </div>

        <div class="p6-horizontal-scroll-track">
            <div class="p6-services-grid" id="p6-services-grid">
                <div class="p6-service-card">
                    <div class="p6-card-image"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div>
                    <div class="p6-card-content"><h3>Full-Home Renovation</h3><p>Complete transformations tailored to your style.</p></div>
                </div>
                <div class="p6-service-card">
                    <div class="p6-card-image"><img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format" alt=""></div>
                    <div class="p6-card-content"><h3>Kitchen Remodeling</h3><p>Smart, stylish kitchens built for daily living.</p></div>
                </div>
                <div class="p6-service-card">
                    <div class="p6-card-image"><img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format" alt=""></div>
                    <div class="p6-card-content"><h3>Bathroom Renovation</h3><p>Modern functional bathrooms with quality.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        const scrollSection = document.getElementById('p6-scroll-section');
        const servicesGrid = document.getElementById('p6-services-grid');

        function animateP6() {
            if (!scrollSection || !servicesGrid || window.innerWidth <= 768) return;
            const sectionRect = scrollSection.getBoundingClientRect();
            const sectionTop = sectionRect.top;
            const sectionHeight = sectionRect.height;
            const viewportHeight = window.innerHeight;
            let progress = -sectionTop / (sectionHeight - viewportHeight);
            progress = Math.max(0, Math.min(1, progress));
            const gridWidth = servicesGrid.scrollWidth;
            const containerWidth = window.innerWidth * 0.9;
            const maxScroll = gridWidth - containerWidth + 100;
            servicesGrid.style.transform = `translateX(${-progress * maxScroll}px)`;
            requestAnimationFrame(animateP6);
        }
        requestAnimationFrame(animateP6);
    })();
</script>
