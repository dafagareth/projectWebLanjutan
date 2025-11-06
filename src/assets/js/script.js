// Script ringan untuk pengalaman user yang lebih baik
console.log('PHP Website loaded successfully!');

// Smooth scroll untuk anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Konfirmasi sebelum submit form (opsional)
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    form.addEventListener('submit', function(e) {
        // Anda bisa tambahkan validasi client-side di sini jika perlu
    });
});