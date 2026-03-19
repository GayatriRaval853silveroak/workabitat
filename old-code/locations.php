<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section style="background-color: var(--primary-blue); color: var(--bg-white); padding: 4rem 0;" class="fade-in-up">
    <div class="container">
        <h1 style="color: var(--bg-white); margin-bottom: 0.5rem; font-size: 3rem;">Our locations</h1>
        <p style="color: rgba(255,255,255,0.9); font-size: 1.25rem;">Find the right workspace in the right location.</p>
    </div>
</section>

<!-- Filter/Search Bar Placeholder -->
<div style="background-color: var(--bg-white); padding: 1.5rem 0; border-bottom: 1px solid var(--border-light); position: sticky; top: 72px; z-index: 900;">
    <div class="container" style="display: flex; gap: 1rem; align-items: center;">
        <i class="fas fa-search" style="color: var(--text-secondary); font-size: 1.25rem;"></i>
        <input type="text" placeholder="Search by city, neighbourhood or building..." style="border:none; background:transparent; font-size:1.1rem; font-family: var(--font-body); outline:none; width: 100%;" />
    </div>
</div>

<!-- Locations List -->
<section class="section-padding fade-in-up" style="background-color: var(--bg-light-gray);">
    <div class="container">
        <!-- City Group -->
        <div style="margin-bottom: 5rem;">
            <h2 style="margin-bottom: 2rem; font-size: 2rem;">Bengaluru</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
                
                <!-- Location Card -->
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast);">
                    <div style="height: 220px; background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Galaxy</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px;">43 Residency Road, Bengaluru 560025</p>
                        <div style="border-top: 1px solid var(--border-light); padding-top: 1rem; margin-bottom: 1.5rem;">
                            <p style="font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem;">AVAILABLE WORKSPACES</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Private Office</span>
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Hot Desk</span>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-outline" style="width: 100%;">View details</a>
                    </div>
                </div>
                
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast);">
                    <div style="height: 220px; background: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Embassy TechVillage</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px;">Block L, Outer Ring Road, Bengaluru 560103</p>
                        <div style="border-top: 1px solid var(--border-light); padding-top: 1rem; margin-bottom: 1.5rem;">
                            <p style="font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem;">AVAILABLE WORKSPACES</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Private Office</span>
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Dedicated Desk</span>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-outline" style="width: 100%;">View details</a>
                    </div>
                </div>

                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast);">
                    <div style="height: 220px; background: url('https://images.unsplash.com/photo-1524813686514-a57563d77965?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Prestige Central</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px;">36 Infantry Road, Bengaluru 560001</p>
                        <div style="border-top: 1px solid var(--border-light); padding-top: 1rem; margin-bottom: 1.5rem;">
                            <p style="font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem;">AVAILABLE WORKSPACES</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Private Office</span>
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Meeting Rooms</span>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-outline" style="width: 100%;">View details</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- City Group -->
        <div style="margin-bottom: 2rem;">
            <h2 style="margin-bottom: 2rem; font-size: 2rem;">Mumbai</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
                <!-- Location Card -->
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast);">
                    <div style="height: 220px; background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">BKC</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px;">Bandra Kurla Complex, Mumbai 400051</p>
                        <div style="border-top: 1px solid var(--border-light); padding-top: 1rem; margin-bottom: 1.5rem;">
                            <p style="font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem;">AVAILABLE WORKSPACES</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Private Office</span>
                                <span style="background: var(--bg-light-gray); padding: 0.25rem 0.75rem; font-size: 0.8rem; border: 1px solid var(--border-light);">Hot Desk</span>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-outline" style="width: 100%;">View details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
