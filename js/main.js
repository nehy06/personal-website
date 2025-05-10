// Aktualizace roku v patičce
document.getElementById('current-year').textContent = new Date().getFullYear();

// Check if we're on the homepage
const isHomepage = document.body.classList.contains('home');

// Plynulé scrollování na kotvy (pouze na domovské stránce)
if (isHomepage) {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            // Skip if not a hash link
            if (targetId === '#' || !targetId.startsWith('#')) return;
            
            e.preventDefault();
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 70, // Kompenzace pro fixní header
                    behavior: 'smooth'
                });
                
                // Zavře mobilní menu při kliknutí na odkaz
                if (hamburger && hamburger.classList.contains('active')) {
                    hamburger.classList.remove('active');
                    navLinks.classList.remove('active');
                }
            }
        });
    });
}

// Mobilní navigace
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('active');
    });
}

// Zavření menu při kliknutí na odkaz
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

// Sticky navigace
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});

// Zvýraznění aktuální položky menu na ostatních stránkách
if (!isHomepage) {
    const currentUrl = window.location.href;
    
    document.querySelectorAll('.nav-links a').forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });
}