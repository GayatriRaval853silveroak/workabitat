<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<section style="background-color: var(--bg-white); padding: 4rem 0 2rem; border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 0.5rem;">Get in touch</h1>
        <p style="font-size: 1.1rem; color: var(--text-secondary);">Connect with a workspace expert.</p>
    </div>
</section>

<section class="section-padding" style="background-color: var(--bg-light-gray);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr; max-width: 800px; margin: 0 auto; gap: 4rem;">
            
            <!-- Contact Form -->
            <div style="background-color: var(--bg-white); padding: 3rem; border: 1px solid var(--border-light); border-radius: 4px;">
                <h3 style="margin-bottom: 2rem; font-size: 1.5rem;">How can we help?</h3>
                
                <?php
                $message_sent = false;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Logic for processing form would go here
                    $message_sent = true;
                }
                ?>
                
                <?php if($message_sent): ?>
                    <div style="background-color: #d4edda; color: #155724; padding: 1rem; border-radius: 4px; border: 1px solid #c3e6cb; margin-bottom: 2rem;">
                        <i class="fas fa-check-circle" style="margin-right:0.5rem;"></i> Thank you for your interest! A member of our team will be in touch shortly.
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                        <div>
                            <label for="fname" style="display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--text-secondary);">First Name *</label>
                            <input type="text" id="fname" name="fname" required style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; outline: none;">
                        </div>
                        <div>
                            <label for="lname" style="display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--text-secondary);">Last Name *</label>
                            <input type="text" id="lname" name="lname" required style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; outline: none;">
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--text-secondary);">Work Email *</label>
                        <input type="email" id="email" name="email" required style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; outline: none;">
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                         <div>
                             <label for="phone" style="display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--text-secondary);">Phone Number</label>
                             <input type="tel" id="phone" name="phone" style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; outline: none;">
                         </div>
                         <div>
                            <label for="interest" style="display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--text-secondary);">I am interested in...</label>
                            <select id="interest" name="interest" style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; outline: none; background-color: var(--bg-white); color: var(--text-primary);">
                                <option value="">Select an option</option>
                                <option value="private-office">Private Office</option>
                                <option value="dedicated-desk">Dedicated Desk</option>
                                <option value="coworking">Coworking</option>
                                <option value="enterprise">Enterprise Solutions</option>
                            </select>
                        </div>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600; font-size: 0.85rem; color: var(--text-secondary);">Desks Needed</label>
                        <select id="desks" name="desks" style="width: 100%; padding: 0.8rem; border: 1px solid var(--border-light); font-family: var(--font-body); font-size: 1rem; outline: none; background-color: var(--bg-white); color: var(--text-primary);">
                                <option value="1">1 person</option>
                                <option value="2-10">2-10 people</option>
                                <option value="11-20">11-20 people</option>
                                <option value="20plus">20+ people</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1.25rem;">Submit Request</button>
                    <p style="font-size: 0.8rem; color: var(--text-secondary); margin-top: 1rem; text-align: center;">By clicking submit, you agree to our <a href="#" style="text-decoration:underline;">Terms of Service</a> and <a href="#" style="text-decoration:underline;">Privacy Policy</a>.</p>
                </form>
            </div>

            <!-- Direct Contact Methods Row -->
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; border-top: 1px solid var(--border-light); padding-top: 3rem;">
                 <div>
                    <i class="fas fa-phone-alt" style="color: var(--primary-blue); font-size: 1.5rem; margin-bottom: 1rem;"></i>
                    <h4 style="font-family: var(--font-body); font-size: 1.1rem; margin-bottom: 0.5rem;">Sales enquiries</h4>
                    <a href="tel:1800123777888" style="color: var(--primary-blue); font-weight: 500; font-size: 1.1rem;">1800 123 777 888</a>
                 </div>
                 <div>
                    <i class="fas fa-envelope" style="color: var(--primary-blue); font-size: 1.5rem; margin-bottom: 1rem;"></i>
                    <h4 style="font-family: var(--font-body); font-size: 1.1rem; margin-bottom: 0.5rem;">Email us</h4>
                    <a href="mailto:sales@workabitat.com" style="color: var(--primary-blue); font-weight: 500; font-size: 1.1rem;">sales@workabitat.com</a>
                 </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
