<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section style="background-color: var(--primary-blue); color: var(--bg-white); padding: 4rem 0;" class="fade-in-up">
    <div class="container">
        <h1 style="color: var(--bg-white); margin-bottom: 0.5rem; font-size: 3rem;">Events</h1>
        <p style="color: rgba(255,255,255,0.9); font-size: 1.25rem;">Connect, learn, and grow with the Workabitat community.</p>
    </div>
</section>

<!-- Filter/Search Bar Placeholder -->
<div style="background-color: var(--bg-white); padding: 1.5rem 0; border-bottom: 1px solid var(--border-light); position: sticky; top: 72px; z-index: 900;">
    <div class="container" style="display: flex; gap: 1rem; align-items: center;">
        <i class="fas fa-search" style="color: var(--text-secondary); font-size: 1.25rem;"></i>
        <input type="text" placeholder="Search for workshops, networking, or speakers..." style="border:none; background:transparent; font-size:1.1rem; font-family: var(--font-body); outline:none; width: 100%;" />
    </div>
</div>

<!-- Events List -->
<section class="section-padding fade-in-up" style="background-color: var(--bg-light-gray);">
    <div class="container">
        <!-- Event Group -->
        <div style="margin-bottom: 5rem;">
            <h2 style="margin-bottom: 2rem; font-size: 2rem;">Upcoming This Week</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
                
                <!-- Event Card 1 -->
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast); display: flex; flex-direction: column;">
                    <div style="height: 200px; background: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <span style="color: var(--primary-blue); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.5rem; text-transform: uppercase;">Networking</span>
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Founders Meetup: Scaling Tech Startups</h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 1rem;"><i class="far fa-calendar-alt"></i> Thu, Oct 26 &bull; 6:00 PM</p>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px; color: var(--text-primary);">Join other tech founders in the Workabitat network to share insights, challenges, and strategies for scaling.</p>
                        <div style="margin-top: auto;">
                            <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">RSVP</a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast); display: flex; flex-direction: column;">
                    <div style="height: 200px; background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <span style="color: var(--primary-blue); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.5rem; text-transform: uppercase;">Workshop</span>
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Mastering B2B Sales Strategies</h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 1rem;"><i class="far fa-calendar-alt"></i> Fri, Oct 27 &bull; 2:00 PM</p>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px; color: var(--text-primary);">Learn practical techniques and modern strategies to improve your B2B sales funnel from industry experts.</p>
                        <div style="margin-top: auto;">
                            <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">RSVP</a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); transition: var(--transition-fast); display: flex; flex-direction: column;">
                    <div style="height: 200px; background: url('https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=600&q=80') center/cover;"></div>
                    <div style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column;">
                        <span style="color: var(--primary-blue); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.5rem; text-transform: uppercase;">Speaker Series</span>
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;">AI in the Modern Workplace</h3>
                        <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 1rem;"><i class="far fa-calendar-alt"></i> Sat, Oct 28 &bull; 10:00 AM</p>
                        <p style="font-size: 0.9rem; margin-bottom: 1.5rem; min-height: 40px; color: var(--text-primary);">A panel discussion on how artificial intelligence is shaping the future of productivity and collaboration.</p>
                        <div style="margin-top: auto;">
                            <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">RSVP</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
