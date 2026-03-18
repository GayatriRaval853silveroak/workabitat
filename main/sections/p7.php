<style>
    .p7-transformations-section {
        max-width: 1200px;
        margin: 50px auto;
        background: #fff;
        border-radius: 15px;
        padding: 80px 40px;
        text-align: center;
        overflow: hidden;
    }

    .p7-main-heading { font-size: 2.8rem; font-weight: 700; margin-bottom: 20px; }
    .p7-carousel-view { position: relative; display: flex; align-items: center; justify-content: center; }
    .p7-carousel-track { display: flex; transition: transform 0.5s ease; gap: 30px; padding: 20px 0; }
    .p7-carousel-item { flex: 0 0 calc(33.333% - 20px); opacity: 0.6; transform: scale(0.9); }
    .p7-carousel-item.active { opacity: 1; transform: scale(1.05); }
    .p7-image-wrapper { width: 100%; aspect-ratio: 4/3; border-radius: 15px; overflow: hidden; }
    .p7-image-wrapper img { width: 100%; height: 100%; object-fit: cover; }
    .p7-nav-btn { position: absolute; z-index: 10; background: #fff; border: none; padding: 15px; border-radius: 50%; cursor: pointer; }
    .p7-nav-btn.prev { left: -20px; }
    .p7-nav-btn.next { right: -20px; }

    @media (max-width: 768px) {
        .p7-carousel-item { flex: 0 0 100%; }
        .p7-nav-btn { bottom: -50px; top: auto; }
    }
</style>

<section class="p7-transformations-section">
    <h2 class="p7-main-heading">Real Homes. Remarkable Results.</h2>
    <div class="p7-carousel-view">
        <button class="p7-nav-btn prev" id="p7-prevBtn"><i class="fas fa-chevron-left"></i></button>
        <div class="p7-carousel-container" style="width: 100%; overflow: hidden;">
            <div class="p7-carousel-track" id="p7-carouselTrack">
                <div class="p7-carousel-item"><div class="p7-image-wrapper"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div><h3>Sonoma Valley</h3></div>
                <div class="p7-carousel-item"><div class="p7-image-wrapper"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div><h3>Santa Monica</h3></div>
                <div class="p7-carousel-item"><div class="p7-image-wrapper"><img src="https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?auto=format" alt=""></div><h3>Beverly Hills</h3></div>
            </div>
        </div>
        <button class="p7-nav-btn next" id="p7-nextBtn"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>

<script>
    (function() {
        const track = document.getElementById('p7-carouselTrack');
        const nextBtn = document.getElementById('p7-nextBtn');
        const prevBtn = document.getElementById('p7-prevBtn');
        if (!track || !nextBtn || !prevBtn) return;
        const items = Array.from(track.children);
        let currentIndex = 1;

        function updateP7() {
            const itemWidth = items[0].getBoundingClientRect().width;
            const containerWidth = track.parentElement.offsetWidth;
            const offset = (containerWidth / 2) - (itemWidth / 2) - (currentIndex * (itemWidth + 30));
            track.style.transform = `translateX(${offset}px)`;
            items.forEach((item, i) => i === currentIndex ? item.classList.add('active') : item.classList.remove('active'));
        }
        nextBtn.onclick = () => { currentIndex = (currentIndex + 1) % items.length; updateP7(); };
        prevBtn.onclick = () => { currentIndex = (currentIndex - 1 + items.length) % items.length; updateP7(); };
        window.addEventListener('resize', updateP7);
        setTimeout(updateP7, 500);
    })();
</script>
