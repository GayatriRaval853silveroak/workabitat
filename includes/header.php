<?php
// Function to determine the active page for navigation highlight
function is_active($page) {
    $current_file = basename($_SERVER['PHP_SELF']);
    echo ($current_file == $page) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workabitat</title>
    <!-- Google Fonts: Merriweather (Serif) & Inter (Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
</head>
<body>

    <header class="site-header">
        <div class="header-container">
            <!-- Logo -->
            <a href="index.php" class="logo">Workabitat</a>
            
            <!-- Center Navigation -->
            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="index.php" class="<?php is_active('index.php'); ?>">Home</a></li>
                    <li><a href="about.php" class="<?php is_active('about.php'); ?>">About us</a></li>
                    <li><a href="contact.php" class="<?php is_active('contact.php'); ?>">Contact us</a></li>
                    <li><a href="portfolio.php" class="<?php is_active('portfolio.php'); ?>">Portfolio</a></li>
                    <li><a href="services.php" class="<?php is_active('services.php'); ?>">Service</a></li>
                </ul>
            </nav>

            <!-- Right Actions -->
            <div class="header-right">
                <a href="login.php" class="header-login">Log in</a>
                <a href="contact.php" class="btn btn-primary">Get in touch</a>
            </div>

            <button class="mobile-menu-btn" aria-label="Toggle menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Global sticky floating button -->
    <a href="contact.php" class="sticky-book-tour">Book a tour</a>

    <main>
