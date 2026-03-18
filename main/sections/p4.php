<style>
    .p4-testimonials-section {
        background-color: #1a1a1a;
        color: #fff;
        padding: 100px 0;
    }

    .p4-testimonials-container-dark {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .p4-section-header h2 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .p4-section-header p {
        color: #888;
        font-size: 1.1rem;
        margin-bottom: 50px;
    }

    .p4-testimonial-card {
        background: #252525;
        padding: 40px;
        border-radius: 20px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .p4-rating {
        color: #ff6a00;
        margin-bottom: 20px;
    }

    .p4-testimonial-text {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 30px;
        font-style: italic;
    }

    .p4-client-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .p4-client-photo {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .p4-client-name {
        font-size: 1.1rem;
        font-weight: 600;
        margin: 0;
    }

    .p4-client-role {
        font-size: 0.9rem;
        color: #ff6a00;
    }
</style>

<section class="p4-testimonials-section">
    <div class="p4-testimonials-container-dark">
        <div class="p4-section-header text-center">
            <h2>Hear from our clients</h2>
            <p>Real feedback from real clients who trusted us with their spaces.</p>
        </div>

        <div class="swiper p4-testimonial-slider">
            <div class="swiper-wrapper">
                <!-- Testimonial 1 -->
                <div class="swiper-slide">
                    <div class="p4-testimonial-card">
                        <div class="p4-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4-testimonial-text">"Workabitat transformed our dull office into a vibrant, inspiring space. Their attention to detail and understanding of our brand was exceptional."</p>
                        <div class="p4-client-info">
                            <img src="https://i.pravatar.cc/150?u=1" alt="Sarah Johnson" class="p4-client-photo">
                            <div class="p4-client-details">
                                <h4 class="p4-client-name">Sarah Johnson</h4>
                                <span class="p4-client-role">Interior Design</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="swiper-slide">
                    <div class="p4-testimonial-card">
                        <div class="p4-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4-testimonial-text">"The space planning they did for our tech hub was brilliant. We managed to fit more teams comfortably while keeping the open feel."</p>
                        <div class="p4-client-info">
                            <img src="https://i.pravatar.cc/150?u=2" alt="Michael Chen" class="p4-client-photo">
                            <div class="p4-client-details">
                                <h4 class="p4-client-name">Michael Chen</h4>
                                <span class="p4-client-role">Space Planning</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="swiper-slide">
                    <div class="p4-testimonial-card">
                        <div class="p4-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4-testimonial-text">"Elegant aesthetics combined with functional designs. Our studio now feels like a premium sanctuary. Highly recommend their expertise!"</p>
                        <div class="p4-client-info">
                            <img src="https://i.pravatar.cc/150?u=3" alt="Emma Davids" class="p4-client-photo">
                            <div class="p4-client-details">
                                <h4 class="p4-client-name">Emma Davids</h4>
                                <span class="p4-client-role">Interior Styling</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="swiper-slide">
                    <div class="p4-testimonial-card">
                        <div class="p4-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="p4-testimonial-text">"From concept to completion, the process was seamless. They really care about the 'human' element in architecture."</p>
                        <div class="p4-client-info">
                            <img src="https://i.pravatar.cc/150?u=4" alt="David Miller" class="p4-client-photo">
                            <div class="p4-client-details">
                                <h4 class="p4-client-name">David Miller</h4>
                                <span class="p4-client-role">Architecture</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Swiper !== 'undefined') {
                new Swiper('.p4-testimonial-slider', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    speed: 6000, 
                    allowTouchMove: true, 
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    breakpoints: {
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 3 }
                    }
                });
            }
        });
    })();
</script>
