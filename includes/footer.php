    <!-- ─── FOOTER ─── -->
    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <div class="footer-brand-name">Workabitat</div>
                <p class="footer-brand-desc">Award-winning interior design and renovation studio. Transforming homes since 2012 with craftsmanship, creativity, and care.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-houzz"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <div class="footer-col-title">Services</div>
                <ul class="footer-links">
                    <li><a href="#">Kitchen Renovation</a></li>
                    <li><a href="#">Bathroom Renovation</a></li>
                    <li><a href="#">Full-Home Renovation</a></li>
                    <li><a href="#">Interior Styling</a></li>
                    <li><a href="#">Home Office Design</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Company</div>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Process</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Get in Touch</div>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>12 Loftwood Avenue<br>Sydney NSW 2000, Australia</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+61 2 9876 5432</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>hello@workabitat.com</span>
                </div>
                <div class="footer-contact-item" style="margin-top:1.5rem">
                    <i class="fas fa-clock"></i>
                    <span>Mon–Fri: 9am – 6pm<br>Sat: 10am – 3pm</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-bottom-copy">© 2025 Workabitat. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // ─── HEADER SCROLL ───
        const header = document.getElementById('siteHeader');
        window.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('scrolled', window.scrollY > 60);
            }
        });

        // ─── MOBILE MENU ───
        const hamburger = document.getElementById('hamburger');
        const mobileNav = document.getElementById('mobileNav');
        const mobileClose = document.getElementById('mobileClose');

        if (hamburger && mobileNav) {
            hamburger.addEventListener('click', () => {
                mobileNav.classList.add('open');
            });
        }
        
        if (mobileClose && mobileNav) {
            mobileClose.addEventListener('click', closeMobileNav);
        }

        function closeMobileNav() {
            if (mobileNav) {
                mobileNav.classList.remove('open');
            }
        }
    </script>
</body>
</html>
