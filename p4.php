<?php include 'includes/header.php'; ?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="testimonials-section section-padding">
    <div class="container">
        <div class="testimonials-container-dark">
            <div class="section-header text-center mb-4">
                <h2 class="fade-in-up">Hear from our clients</h2>
                <p class="fade-in-up">Real feedback from real clients who trusted us with their spaces.</p>
            </div>

            <div class="swiper testimonial-slider fade-in-up">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Workabitat transformed our dull office into a vibrant, inspiring space. Their attention to detail and understanding of our brand was exceptional."</p>
                            <div class="client-info">
                                <img src="https://i.pravatar.cc/150?u=1" alt="Sarah Johnson" class="client-photo">
                                <div class="client-details">
                                    <h4 class="client-name">Sarah Johnson</h4>
                                    <span class="client-role">Interior Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"The space planning they did for our tech hub was brilliant. We managed to fit more teams comfortably while keeping the open feel."</p>
                            <div class="client-info">
                                <img src="https://i.pravatar.cc/150?u=2" alt="Michael Chen" class="client-photo">
                                <div class="client-details">
                                    <h4 class="client-name">Michael Chen</h4>
                                    <span class="client-role">Space Planning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Elegant aesthetics combined with functional designs. Our studio now feels like a premium sanctuary. Highly recommend their expertise!"</p>
                            <div class="client-info">
                                <img src="https://i.pravatar.cc/150?u=3" alt="Emma Davids" class="client-photo">
                                <div class="client-details">
                                    <h4 class="client-name">Emma Davids</h4>
                                    <span class="client-role">Interior Styling</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"From concept to completion, the process was seamless. They really care about the 'human' element in architecture."</p>
                            <div class="client-info">
                                <img src="https://i.pravatar.cc/150?u=4" alt="David Miller" class="client-photo">
                                <div class="client-details">
                                    <h4 class="client-name">David Miller</h4>
                                    <span class="client-role">Architecture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 6000, // Very slow and smooth for premium feel
        allowTouchMove: true, // Ensure touch swipe still works
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
});
</script>



<?php include 'includes/footer.php'; ?>
