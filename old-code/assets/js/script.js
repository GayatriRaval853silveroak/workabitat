document.addEventListener('DOMContentLoaded', () => {
  // Mobile Menu Toggle
  const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
  const mainNav = document.querySelector('.main-nav');

  if (mobileMenuBtn && mainNav) {
    mobileMenuBtn.addEventListener('click', () => {
      mainNav.classList.toggle('active');
      const icon = mobileMenuBtn.querySelector('i');
      if (mainNav.classList.contains('active')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
      } else {
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
      }
    });
  }

  // Header Scroll Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
      header.style.boxShadow = '0 1px 3px rgba(0,0,0,0.1)';
    } else {
      header.style.boxShadow = 'none';
      header.style.borderBottom = '1px solid var(--border-light)';
    }
  });

  // Active link highlight
  const currentLocation = location.pathname;
  const navLinks = document.querySelectorAll('.nav-links a');
  
  navLinks.forEach(link => {
    const linkPath = link.getAttribute('href');
    if (currentLocation.includes(linkPath) && linkPath !== 'index.php') {
      link.classList.add('active');
    } else if (currentLocation.endsWith('/') || currentLocation.endsWith('index.php')) {
      if (linkPath === 'index.php') {
        link.classList.add('active');
      }
    }
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if(targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();
        mainNav.classList.remove('active'); // Close mobile menu if open
        if(mobileMenuBtn) {
           const icon = mobileMenuBtn.querySelector('i');
           if(icon) {
             icon.classList.remove('fa-times');
             icon.classList.add('fa-bars');
           }
        }
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });

  // Accordion Logic
  const accordionBtns = document.querySelectorAll('.accordion-btn');
  
  // Set first to active by default
  if (accordionBtns.length > 0) {
      const firstBtn = accordionBtns[0];
      const firstContent = firstBtn.nextElementSibling;
      const firstIcon = firstBtn.querySelector('i');
      firstContent.style.maxHeight = firstContent.scrollHeight + "px";
      firstIcon.style.transform = "rotate(45deg)";
  }

  accordionBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Close all others
      accordionBtns.forEach(otherBtn => {
        if(otherBtn !== btn) {
            const otherContent = otherBtn.nextElementSibling;
            const otherIcon = otherBtn.querySelector('i');
            otherContent.style.maxHeight = null;
            otherIcon.style.transform = "rotate(0deg)";
        }
      });

      const content = this.nextElementSibling;
      const icon = this.querySelector('i');

      if (content.style.maxHeight) {
        content.style.maxHeight = null;
        icon.style.transform = "rotate(0deg)";
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon.style.transform = "rotate(45deg)";
      }
    });
  });

  // --- Animation Observer ---
  const fadeElements = document.querySelectorAll('.fade-in-up');
  
  const animationObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        // Optional: stop observing once animated
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1, // Trigger when 10% is visible
    rootMargin: "0px 0px -50px 0px" // Trigger slightly before it hits the bottom
  });

  fadeElements.forEach(el => {
    animationObserver.observe(el);
  });
});
