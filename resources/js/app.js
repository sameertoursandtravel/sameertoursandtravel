// Sticky nav shadow-on-scroll + animated counters.
document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('[data-site-nav]');
    if (nav) {
        const onScroll = () => {
            nav.classList.toggle('shadow-md', window.scrollY > 12);
            nav.classList.toggle('bg-white/95', window.scrollY > 12);
        };
        document.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length && 'IntersectionObserver' in window) {
        const animate = (el) => {
            const target = parseInt(el.dataset.counter, 10) || 0;
            const duration = 1200;
            const start = performance.now();
            const step = (now) => {
                const progress = Math.min((now - start) / duration, 1);
                el.textContent = Math.floor(progress * target).toLocaleString();
                if (progress < 1) requestAnimationFrame(step);
                else el.textContent = target.toLocaleString();
            };
            requestAnimationFrame(step);
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        counters.forEach((el) => observer.observe(el));
    }
});
