    <!-- ─── FOOTER ─── -->
    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <div class="footer-brand-name">WorkAbitat</div>
                <p class="footer-brand-desc">A hospitality-driven co-working and managed office provider offering fully serviced, ready-to-move workspaces across prime business locations in India.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div>
                <div class="footer-col-title">Our Spaces</div>
                <ul class="footer-links">
                    <li><a href="spaces.php#gurugram">Gurugram – Extension Road</a></li>
                    <li><a href="spaces.php#mohali">Mohali – Sector 66–83</a></li>
                    <li><a href="spaces.php">Private Cabins</a></li>
                    <li><a href="spaces.php">Enterprise Offices</a></li>
                    <li><a href="spaces.php">Meeting Rooms</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Company</div>
                <ul class="footer-links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="amenities.php">Amenities</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Locations</div>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><strong style="color:rgba(255,255,255,0.7)">Gurugram</strong><br>Extension Road, Gurugram, Haryana</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><strong style="color:rgba(255,255,255,0.7)">Mohali</strong><br>Sector 66–83, Mohali, Punjab</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>hello@workabitat.com</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-clock"></i>
                    <span>Mon–Sat: 9am – 7pm<br>Available 24/7 for members</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-bottom-copy">© 2025 WorkAbitat Solutions. All rights reserved.</p>
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
