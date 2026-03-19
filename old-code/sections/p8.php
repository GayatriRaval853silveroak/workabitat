<style>
    .p8-showcase-section {
        background-color: #0c0c0c;
        color: #fff;
        padding: 80px 0;
        overflow: hidden;
    }

    .p8-showcase-header { text-align: center; margin-bottom: 60px; }
    .p8-showcase-container { position: relative; overflow: hidden; mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); }
    .p8-scroll-wrapper { display: flex; width: max-content; animation: p8-scroll 40s linear infinite; padding: 20px 0; }
    .p8-image-card { 
        flex-shrink: 0; 
        margin-right: 30px; 
        overflow: hidden; 
        transition: transform 0.5s; 
    }
    .p8-image-card:hover { transform: scale(1.05); }

    .p8-card-1 { width: 400px; height: 450px; border-radius: 30px 30px 0 0; }
    .p8-card-2 { width: 320px; height: 450px; border-radius: 160px 160px 0 0; }
    .p8-card-3 { width: 500px; height: 450px; border-radius: 30px 30px 0 0; }
    .p8-card-4 { width: 300px; height: 450px; border-radius: 150px 150px 0 0; }
    .p8-card-5 { width: 420px; height: 450px; border-radius: 30px 30px 0 0; }
    .p8-card-6 { width: 350px; height: 450px; border-radius: 175px 175px 0 0; }

    .p8-image-card img { width: 100%; height: 100%; object-fit: cover; }

    @keyframes p8-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
</style>

<section class="p8-showcase-section">
    <div class="p8-showcase-header"><h1>Curated Excellence</h1></div>
    <div class="p8-showcase-container">
        <div class="p8-scroll-wrapper">
            <!-- Primary Row -->
            <div class="p8-image-card p8-card-1"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-2"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-3"><img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-4"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-5"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-6"><img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format" alt=""></div>

            <!-- Duplicate Row for Seamless Loop -->
            <div class="p8-image-card p8-card-1"><img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-2"><img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-3"><img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-4"><img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-5"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format" alt=""></div>
            <div class="p8-image-card p8-card-6"><img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format" alt=""></div>
        </div>
    </div>
</section>
