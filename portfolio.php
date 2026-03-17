<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section style="background-color: var(--primary-blue); color: var(--bg-white); padding: 5rem 0; border-bottom: 1px solid var(--border-light);" class="fade-in-up">
    <div class="container" style="max-width: 800px; text-align: center;">
        <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem;">Our Portfolio</h1>
        <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9);">Explore our beautifully designed workspaces tailored for modern professionals and enterprises.</p>
    </div>
</section>

<!-- Portfolio Grid -->
<section style="padding: 4rem 4%;" class="fade-in-up" style="background-color: var(--bg-light-gray);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <!-- Portfolio Item 1 -->
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Workspace 1" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">The Innovator Hub</h3>
                    <p style="color: var(--text-secondary); line-height: 1.5;">A vibrant open-plan space designed for creative agencies and startups.</p>
                </div>
            </div>
            
            <!-- Portfolio Item 2 -->
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1524813686514-a57563d77965?auto=format&fit=crop&w=800&q=80" alt="Workspace 2" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Executive Suites</h3>
                    <p style="color: var(--text-secondary); line-height: 1.5;">Premium private offices offering privacy with high-end amenities.</p>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Workspace 3" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Collaborative Lounges</h3>
                    <p style="color: var(--text-secondary); line-height: 1.5;">Comfortable networking zones that foster community engagement.</p>
                </div>
            </div>

             <!-- Portfolio Item 4 -->
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?auto=format&fit=crop&w=800&q=80" alt="Workspace 4" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Corporate Floor</h3>
                    <p style="color: var(--text-secondary); line-height: 1.5;">Dedicated entire floors designed specifically for enterprise operations.</p>
                </div>
            </div>
            
             <!-- Portfolio Item 5 -->
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=800&q=80" alt="Workspace 5" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Minimalist Studios</h3>
                    <p style="color: var(--text-secondary); line-height: 1.5;">Sleek, distraction-free zones suitable for focused independent work.</p>
                </div>
            </div>

             <!-- Portfolio Item 6 -->
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?auto=format&fit=crop&w=800&q=80" alt="Workspace 6" style="width: 100%; height: 250px; object-fit: cover;">
                <div style="padding: 1.5rem; background: var(--bg-white);">
                    <h3 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Tech Incubator</h3>
                    <p style="color: var(--text-secondary); line-height: 1.5;">State-of-the-art facilities equipped with advanced infrastructure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
