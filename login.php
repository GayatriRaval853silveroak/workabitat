<?php include 'includes/header.php'; ?>

<style>
/* Login Page Specific Styles */
.login-section {
    min-height: calc(100vh - 72px);
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: var(--bg-light-gray);
    padding: 2rem;
}

.login-container {
    background: var(--bg-white);
    padding: 3rem;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    width: 100%;
    max-width: 440px;
    animation: fadeInUp 0.5s ease backwards;
}

.login-header {
    text-align: center;
    margin-bottom: 2rem;
}

.login-header h1 {
    font-size: 2.2rem;
    margin-bottom: 0.5rem;
    color: var(--primary-blue);
    font-family: var(--font-heading);
}

.login-header p {
    color: var(--text-secondary);
    font-size: 0.95rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    font-weight: 500;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
    font-size: 0.95rem;
}

.form-control {
    width: 100%;
    padding: 0.85rem 1rem;
    border: 1px solid var(--border-light);
    border-radius: 6px;
    font-family: var(--font-body);
    font-size: 1rem;
    transition: var(--transition-fast);
    background-color: var(--bg-white);
}

.form-control:focus {
    outline: none;
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 3px rgba(51, 60, 207, 0.1);
}

.login-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    font-size: 0.9rem;
}

.remember-me {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-secondary);
    cursor: pointer;
}

.remember-me input {
    width: 16px;
    height: 16px;
    cursor: pointer;
    accent-color: var(--primary-blue);
}

.forgot-password {
    color: var(--primary-blue);
    font-weight: 500;
    transition: var(--transition-fast);
}

.forgot-password:hover {
    text-decoration: underline;
    color: var(--primary-blue-hover);
}

.btn-block {
    width: 100%;
    padding: 0.875rem;
    font-size: 1.05rem;
    border-radius: 6px;
}

.login-footer {
    margin-top: 2rem;
    text-align: center;
    font-size: 0.95rem;
    color: var(--text-secondary);
    border-top: 1px solid var(--border-light);
    padding-top: 1.5rem;
}

.login-footer a {
    color: var(--primary-blue);
    font-weight: 600;
    transition: var(--transition-fast);
}

.login-footer a:hover {
    text-decoration: underline;
    color: var(--primary-blue-hover);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<section class="login-section">
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome back</h1>
            <p>Log in to access your Workabitat account</p>
        </div>
        
        <form action="#" method="POST" class="login-form">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="john@company.com" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            
            <div class="login-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
                <a href="#" class="forgot-password">Forgot password?</a>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
        </form>
        
        <div class="login-footer">
            <p>Don't have an account? <a href="#">Sign up here</a></p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
