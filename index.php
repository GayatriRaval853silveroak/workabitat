<?php include 'includes/header.php'; ?>

<!-- Hero Section with Search Card -->
<section class="hero" style="height: 90vh; background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; display: flex; align-items: center; position: relative;">
    <div class="container">
        <div style="background: var(--bg-white); padding: 3rem; max-width: 500px; border-radius: 4px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            <h1 style="font-size: 2.5rem; margin-bottom: 2rem; letter-spacing: -1px;">For all the ways you work, we're here</h1>
            
            <form action="locations.php" method="GET">
                <div style="margin-bottom: 1.5rem;">
                    <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Find workspace in</label>
                    <select style="width: 100%; padding: 1rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; color: var(--text-primary); outline: none;">
                        <option value="">Select a city</option>
                        <option value="bangalore">Bengaluru</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="ncr">NCR</option>
                        <option value="pune">Pune</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 2rem;">
                    <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Workspace for</label>
                    <select style="width: 100%; padding: 1rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; color: var(--text-primary); outline: none;">
                        <option value="">Choose a solution</option>
                        <option value="1">1 person</option>
                        <option value="2-20">2 - 20 people</option>
                        <option value="20plus">20+ people</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1rem; font-size: 1.1rem;">Explore</button>
            </form>
        </div>
    </div>
</section>

<!-- Statistics Row -->
<section style="background-color: var(--primary-blue); color: var(--bg-white); padding: 2rem 0;">
    <div class="container fade-in-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); text-align: center; gap: 2rem;">
        <div>
            <h2 style="color: var(--bg-white); font-size: 2.5rem; margin-bottom: 0.5rem;">8</h2>
            <p style="color: rgba(255,255,255,0.9); font-weight: 500;">Cities</p>
        </div>
        <div>
            <h2 style="color: var(--bg-white); font-size: 2.5rem; margin-bottom: 0.5rem;">73+</h2>
            <p style="color: rgba(255,255,255,0.9); font-weight: 500;">Centres</p>
        </div>
        <div>
            <h2 style="color: var(--bg-white); font-size: 2.5rem; margin-bottom: 0.5rem;">5.5M+</h2>
            <p style="color: rgba(255,255,255,0.9); font-weight: 500;">Sq. ft workspace</p>
        </div>
        <div>
            <h2 style="color: var(--bg-white); font-size: 2.5rem; margin-bottom: 0.5rem;">70K+</h2>
            <p style="color: rgba(255,255,255,0.9); font-weight: 500;">Members</p>
        </div>
    </div>
</section>

<!-- Workspace Solutions -->
<section class="section-padding" style="background-color: var(--bg-light-gray);">
    <div class="container fade-in-up">
        <h2 class="text-center" style="margin-bottom: 3rem;">Workspace solutions for every need</h2>
        
        <div class="solutions-grid">
            <!-- Card 1 -->
            <div style="background: var(--bg-white); padding: 2.5rem; border: 1px solid var(--border-light); transition: var(--transition-fast);">
                <i class="fas fa-building" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 1.5rem;"></i>
                <h3 style="margin-bottom: 1rem; font-size: 1.4rem;">Private offices</h3>
                <p style="margin-bottom: 2rem; min-height: 80px;">Dedicated, fully-furnished private spaces featuring top-tier amenities.</p>
                <ul style="margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-check" style="color: var(--primary-blue);"></i> For teams of 1-100+</li>
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-check" style="color: var(--primary-blue);"></i> Move-in ready</li>
                </ul>
                <a href="services.php" class="btn btn-outline" style="width: 100%;">Learn more</a>
            </div>
            
            <!-- Card 2 -->
            <div style="background: var(--bg-white); padding: 2.5rem; border: 1px solid var(--border-light); transition: var(--transition-fast);">
                <i class="fas fa-laptop" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 1.5rem;"></i>
                <h3 style="margin-bottom: 1rem; font-size: 1.4rem;">Custom buildout</h3>
                <p style="margin-bottom: 2rem; min-height: 80px;">Your space, designed and built entirely round your unique business needs.</p>
                <ul style="margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-check" style="color: var(--primary-blue);"></i> Custom design & branding</li>
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-check" style="color: var(--primary-blue);"></i> IT & security tailored</li>
                </ul>
                <a href="services.php" class="btn btn-outline" style="width: 100%;">Learn more</a>
            </div>
            
            <!-- Card 3 -->
            <div style="background: var(--bg-white); padding: 2.5rem; border: 1px solid var(--border-light); transition: var(--transition-fast);">
                <i class="fas fa-id-card" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 1.5rem;"></i>
                <h3 style="margin-bottom: 1rem; font-size: 1.4rem;">All Access</h3>
                <p style="margin-bottom: 2rem; min-height: 80px;">A monthly membership granting access to hot desks globally.</p>
                <ul style="margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-check" style="color: var(--primary-blue);"></i> Access to 70+ locations</li>
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;"><i class="fas fa-check" style="color: var(--primary-blue);"></i> Pay-as-you-go flexibility</li>
                </ul>
                <a href="services.php" class="btn btn-outline" style="width: 100%;">Learn more</a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="section-padding">
    <div class="container fade-in-up">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
            <h2>Our Latest Projects</h2>
            <a href="portfolio.php" class="btn btn-outline">View All Portfolio</a>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Workspace" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="font-size: 1.25rem;">The Innovator Hub</h3>
                </div>
            </div>
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <img src="https://images.unsplash.com/photo-1524813686514-a57563d77965?auto=format&fit=crop&w=800&q=80" alt="Workspace" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="font-size: 1.25rem;">Executive Suites</h3>
                </div>
            </div>
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Workspace" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="font-size: 1.25rem;">Collaborative Lounges</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Accordion Section -->
<section class="section-padding">
    <div class="container fade-in-up">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div style="height: 600px; background: url('https://images.unsplash.com/photo-1524813686514-a57563d77965?auto=format&fit=crop&w=1000&q=80') center/cover; border-radius: 4px;"></div>
            
            <div>
                <h2 style="margin-bottom: 2rem;">Why Workabitat?</h2>
                
                <div class="accordion">
                    <!-- Item 1 -->
                    <div class="accordion-item" style="border-top: 1px solid var(--border-light); padding: 1.5rem 0;">
                        <button class="accordion-btn" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; font-size: 1.25rem; font-family: var(--font-heading); color: var(--text-primary); cursor: pointer; text-align: left;">
                            Unmatched flexibility
                            <i class="fas fa-plus" style="color: var(--primary-blue); transition: transform 0.3s;"></i>
                        </button>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease;">
                            <p style="padding-top: 1rem;">Scale up, down, or change locations seamlessly. Our agreements are designed to adapt to your changing business needs.</p>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="accordion-item" style="border-top: 1px solid var(--border-light); padding: 1.5rem 0;">
                        <button class="accordion-btn" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; font-size: 1.25rem; font-family: var(--font-heading); color: var(--text-primary); cursor: pointer; text-align: left;">
                            Premium amenities
                            <i class="fas fa-plus" style="color: var(--primary-blue); transition: transform 0.3s;"></i>
                        </button>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease;">
                            <p style="padding-top: 1rem;">From artisan coffee and wellness rooms to enterprise-grade IT and security, everything is included in your membership.</p>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="accordion-item" style="border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); padding: 1.5rem 0;">
                        <button class="accordion-btn" style="width: 100%; display: flex; justify-content: space-between; align-items: center; background: none; border: none; font-size: 1.25rem; font-family: var(--font-heading); color: var(--text-primary); cursor: pointer; text-align: left;">
                            Global network
                            <i class="fas fa-plus" style="color: var(--primary-blue); transition: transform 0.3s;"></i>
                        </button>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease;">
                            <p style="padding-top: 1rem;">Work from anywhere with our ever-growing network of prime real estate in top cities worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Contact Lead Form Form -->
<section class="section-padding" style="background-color: var(--bg-light-gray); border-top: 1px solid var(--border-light);">
    <div class="container text-center fade-in-up" style="max-width: 800px;">
        <h2 class="text-center" style="margin-bottom: 2rem;">Find your perfect space</h2>
        <div style="background: var(--bg-white); padding: 3rem; border: 1px solid var(--border-light); border-radius: 4px;">
            <form action="contact.php" method="POST">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                    <div>
                        <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">First Name</label>
                        <input type="text" name="fname" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); font-family: var(--font-body); outline: none;">
                    </div>
                    <div>
                        <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Last Name</label>
                        <input type="text" name="lname" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); font-family: var(--font-body); outline: none;">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                    <div>
                        <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Email</label>
                        <input type="email" name="email" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); font-family: var(--font-body); outline: none;">
                    </div>
                    <div>
                        <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Phone</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); font-family: var(--font-body); outline: none;">
                    </div>
                </div>

                <div style="margin-bottom: 2rem;">
                    <label style="display:block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Company Name</label>
                    <input type="text" name="company" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); font-family: var(--font-body); outline: none;">
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1rem;">Get in touch</button>
                <p style="font-size: 0.75rem; color: var(--text-secondary); text-align: center; margin-top: 1rem; line-height: 1.4;">By clicking the button above, you agree to our Terms of Service and Privacy Policy.</p>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

