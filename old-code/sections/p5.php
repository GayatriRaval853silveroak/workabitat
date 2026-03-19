<style>
    /* FAQ Section Styles */
    .p5-faq-section {
        background-color: #fff;
        padding: 100px 0;
    }

    .p5-container-faq {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .p5-faq-grid {
        display: flex;
        gap: 100px;
    }

    .p5-faq-left {
        flex: 0 0 100px;
    }

    .p5-faq-label {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666;
        font-weight: 300;
    }

    .p5-faq-right {
        flex: 1;
    }

    .p5-faq-heading {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 60px;
        letter-spacing: -1px;
        color: #1a1a1a;
    }

    .p5-faq-list {
        display: flex;
        flex-direction: column;
    }

    .p5-faq-item {
        border-bottom: 1px solid #eee;
        transition: transform 0.3s ease, background-color 0.3s ease;
        border-radius: 8px;
    }

    /* Hover Effect */
    .p5-faq-item:hover {
        transform: translateX(15px);
        background-color: #f9f9f9;
    }

    .p5-faq-question-box {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 20px;
        cursor: pointer;
    }

    .p5-faq-question {
        font-size: 1.4rem;
        font-weight: 600;
        margin: 0;
        color: #1a1a1a;
    }

    .p5-faq-toggle-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        border: 1px solid #ddd;
        background: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .p5-faq-toggle-btn i {
        font-size: 1.2rem;
        color: #1a1a1a;
        transition: transform 0.3s ease;
    }

    .p5-faq-item.active .p5-faq-toggle-btn {
        background-color: #000;
        border-color: #000;
    }

    .p5-faq-item.active .p5-faq-toggle-btn i {
        color: #fff;
    }

    .p5-faq-answer-box {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .p5-faq-item.active .p5-faq-answer-box {
        max-height: 300px;
    }

    .p5-faq-answer {
        padding: 0 20px 30px 20px;
        font-size: 1.1rem;
        line-height: 1.6;
        color: #666;
        margin: 0;
    }

    @media (max-width: 992px) {
        .p5-faq-grid { flex-direction: column; gap: 40px; }
        .p5-faq-left { flex: none; }
        .p5-faq-heading { font-size: 2.5rem; margin-bottom: 40px; }
    }
</style>

<section class="p5-faq-section">
    <div class="p5-container-faq">
        <div class="p5-faq-grid">
            <div class="p5-faq-left">
                <span class="p5-faq-label">FAQs</span>
            </div>
            <div class="p5-faq-right">
                <h2 class="p5-faq-heading">Questions you have in mind</h2>
                <div class="p5-faq-list">
                    <!-- FAQ Item 1 -->
                    <div class="p5-faq-item">
                        <div class="p5-faq-question-box">
                            <h3 class="p5-faq-question">How does Workabitat differ from traditional offices?</h3>
                            <button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="p5-faq-answer-box">
                            <p class="p5-faq-answer">Workabitat provides flexible, fully-managed workspaces that prioritize community, design, and seamless technology, unlike the rigid structures of traditional office leases.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="p5-faq-item">
                        <div class="p5-faq-question-box">
                            <h3 class="p5-faq-question">What amenities are included in the membership?</h3>
                            <button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="p5-faq-answer-box">
                            <p class="p5-faq-answer">Members enjoy high-speed internet, premium coffee, wellness rooms, meeting room credits, and access to a global network of professionals.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="p5-faq-item">
                        <div class="p5-faq-question-box">
                            <h3 class="p5-faq-question">What is the typical timeline for a renovation project?</h3>
                            <button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="p5-faq-answer-box">
                            <p class="p5-faq-answer">Project timelines vary based on scope, but most residential renovations take between 4 to 12 weeks from design approval to final walkthrough.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="p5-faq-item">
                        <div class="p5-faq-question-box">
                            <h3 class="p5-faq-question">Do you offer free initial consultations?</h3>
                            <button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="p5-faq-answer-box">
                            <p class="p5-faq-answer">Yes, we offer a complimentary 30-minute consultation to discuss your vision, budget, and how we can bring your dream space to life.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="p5-faq-item">
                        <div class="p5-faq-question-box">
                            <h3 class="p5-faq-question">Can I customize the design to my specific taste?</h3>
                            <button class="p5-faq-toggle-btn"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="p5-faq-answer-box">
                            <p class="p5-faq-answer">Absolutely. Our designers work closely with you to ensure every detail, from color palettes to material selection, reflects your personal style and functional needs.</p>
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
            const faqItems = document.querySelectorAll('.p5-faq-item');
            faqItems.forEach(item => {
                const questionBox = item.querySelector('.p5-faq-question-box');
                const icon = item.querySelector('.p5-faq-toggle-btn i');
                questionBox.addEventListener('click', () => {
                    item.classList.toggle('active');
                    if (item.classList.contains('active')) {
                        icon.classList.replace('fa-plus', 'fa-minus');
                    } else {
                        icon.classList.replace('fa-minus', 'fa-plus');
                    }
                });
            });
        });
    })();
</script>
