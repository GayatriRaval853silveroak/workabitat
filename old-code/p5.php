<?php include 'includes/header.php'; ?>

<section class="faq-section section-padding">
    <div class="container container-faq">
        <div class="faq-grid">
            <!-- Left Side -->
            <div class="faq-left">
                <span class="faq-label">FAQs</span>
            </div>

            <!-- Right Side -->
            <div class="faq-right">
                <h2 class="faq-heading">Questions you have in mind</h2>
                
                <div class="faq-list">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item">
                        <div class="faq-question-box">
                            <h3 class="faq-question">How does Workabitat differ from traditional offices?</h3>
                            <button class="faq-toggle-btn">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="faq-answer-box">
                            <p class="faq-answer">
                                Workabitat provides flexible, fully-managed workspaces that prioritize community, design, and seamless technology, unlike the rigid structures of traditional office leases.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question-box">
                            <h3 class="faq-question">What amenities are included in the membership?</h3>
                            <button class="faq-toggle-btn">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="faq-answer-box">
                            <p class="faq-answer">
                                Members enjoy high-speed internet, premium coffee, wellness rooms, meeting room credits, and access to a global network of professionals.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question-box">
                            <h3 class="faq-question">Can I scale my team easily within your spaces?</h3>
                            <button class="faq-toggle-btn">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="faq-answer-box">
                            <p class="faq-answer">
                                Absolutely. Our flexible agreements allow you to expand or contract your workspace requirements as your business needs evolve.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question-box">
                            <h3 class="faq-question">Do you offer custom office solutions for large enterprises?</h3>
                            <button class="faq-toggle-btn">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="faq-answer-box">
                            <p class="faq-answer">
                                Yes, we specialize in custom buildouts that align with your brand identity and specific operational requirements for teams of all sizes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* FAQ Section Styles */
.faq-section {
    background-color: #fff;
    padding: 100px 0;
}

.container-faq {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.faq-grid {
    display: flex;
    gap: 100px;
}

.faq-left {
    flex: 0 0 100px;
}

.faq-label {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--text-secondary);
    font-weight: 300;
}

.faq-right {
    flex: 1;
}

.faq-heading {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 60px;
    letter-spacing: -1px;
    color: var(--text-primary);
}

.faq-list {
    display: flex;
    flex-direction: column;
}

.faq-item {
    border-bottom: 1px solid #eee;
    transition: transform 0.3s ease, background-color 0.3s ease;
    border-radius: 8px; /* Optional rounded corners */
}

/* Hover Effect */
.faq-item:hover {
    transform: translateX(15px);
    background-color: #f9f9f9; /* Subtle background highlight */
}

.faq-question-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 20px;
    cursor: pointer;
}

.faq-question {
    font-size: 1.4rem;
    font-weight: 600;
    margin: 0;
    color: var(--text-primary);
}

.faq-toggle-btn {
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

.faq-toggle-btn i {
    font-size: 1.2rem;
    color: var(--text-primary);
    transition: transform 0.3s ease;
}

/* Active State for Button */
.faq-item.active .faq-toggle-btn {
    background-color: #000;
    border-color: #000;
}

.faq-item.active .faq-toggle-btn i {
    color: #fff;
}

/* Answer Section Animation */
.faq-answer-box {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.faq-item.active .faq-answer-box {
    max-height: 300px; /* Adjust based on content */
}

.faq-answer {
    padding: 0 20px 30px 20px;
    font-size: 1.1rem;
    line-height: 1.6;
    color: var(--text-secondary);
    margin: 0;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .faq-grid {
        flex-direction: column;
        gap: 40px;
    }
    
    .faq-left {
        flex: none;
    }
    
    .faq-heading {
        font-size: 2.5rem;
        margin-bottom: 40px;
    }
}

@media (max-width: 576px) {
    .faq-heading {
        font-size: 2rem;
    }
    
    .faq-question {
        font-size: 1.1rem;
    }
    
    .faq-toggle-btn {
        width: 35px;
        height: 35px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const questionBox = item.querySelector('.faq-question-box');
        const icon = item.querySelector('.faq-toggle-btn i');

        questionBox.addEventListener('click', () => {
            // Close other items (optional - uncomment if you want only one open at a time)
            /*
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-toggle-btn i').classList.replace('fa-minus', 'fa-plus');
                }
            });
            */

            item.classList.toggle('active');

            if (item.classList.contains('active')) {
                icon.classList.replace('fa-plus', 'fa-minus');
            } else {
                icon.classList.replace('fa-minus', 'fa-plus');
            }
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
