<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<footer class="bg-primary-2 text-beige relative z-20">
    <div class="absolute bottom-9 w-full z-10 bg-gradient-to-b from-primary-2 h-[90px] to-transparent"></div>

    <div class="absolute bottom-0 z-0 left-0 w-full h-[127px]">
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-bottom-footer.webp"
            class="w-full h-full object-bottom object-cover" alt="">
    </div>
    <section
        class="container relative z-20 pb-52 flex flex-wrap md:flex-nowrap py-11 space-y-12 md:space-y-0 md:space-x-16">
        <div class="w-full md:w-[20%] shrink-0">
            <img class="w-[136px] md:w-[200px]"
                src="<?php echo get_template_directory_uri(); ?>/images/webp/logo-2.webp" alt="Sandjong Logo">
        </div>
        <div class="w-full md:w-[20%] shrink-0">
            <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">Address</h6>
            <div class="mb-14">
                <h5 class="mb-6">
                    Episode Hotel <br />
                    Gading Serpong
                </h5>
                <p class="text-sm md:text-base max-w-[232px]">
                    2nd Floor, Jl. Gading Serpong Boulevard Barat S No. 6-7 Pakulonan Barat Tangerang — 15810
                </p>
            </div>
            <div>
                <h5 class="mb-6">
                    The Orient Jakarta <br />
                    A Royal Hideaway Hotel
                </h5>
                <p class="text-sm md:text-base max-w-[232px]">
                    5th Floor, Jl. Jend. Sudirman No. 36, Bend. Hilir Kec. Tn. Abang Kota Jakarta Pusat DKI Jakarta —
                    10210
                </p>
            </div>
        </div>

        <div class="w-full">
            <div class="hidden md:flex flex-wrap md:flex-nowrap space-y-12 md:space-y-0 md:space-x-14">
                <div>
                    <div>
                        <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">Navigation</h6>
                    </div>
                    <div>
                        <ul class="space-y-2 md:space-y-5">
                            <li><a href="/journey" class="!no-underline">Journey of Sandjong</a></li>
                            <li><a href="/signature-rituals" class="!no-underline">Signature Rituals</a></li>
                            <li><a href="/wellness-whisper" class="!no-underline">Wellness Whisper</a></li>
                            <li><a href="/expand" class="!no-underline">Expand with Sandjong</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">CONTACT</h6>
                    </div>
                    <div>
                        <ul class="space-y-5">
                            <li><a href="tel:+622139521229" class="!no-underline">021-3952-1229</a></li>
                            <li><a href="tel:+6282130376088" class="!no-underline">0821-3037-6088</a></li>
                            <li><a href="mailto:info.sandjong@amertajiwa.com"
                                    class="!no-underline">info.sandjong@amertajiwa.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">Socials</h6>
                    </div>
                    <div>
                        <ul class="space-y-5">
                            <li><a href="https://www.instagram.com/sandjongwellness/?hl=en" target="_blank"
                                    class="!no-underline">Instagram</a></li>
                            <li><a href="https://www.facebook.com/sandjongwellness" target="_blank"
                                    class="!no-underline">Facebook</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <h5 class="text-gold mb-6">Subscribe to our Newsletter</h5>
                <div class="relative ml-2">
                    <div
                        class="absolute -left-2 top-1/2 -translate-y-1/2 w-4 z-0 h-[48px] bg-primary-2 border-2 border-beige rounded-lg">
                    </div>
                    <div class="absolute -left-[1px] z-10 top-1/2 -translate-y-1/2 w-4 h-[45px] bg-primary-2 ">
                    </div>
                    <?php echo do_shortcode('[fluentform id="3"]'); ?>
                    <div
                        class="absolute -right-2 top-1/2 -translate-y-1/2 w-4 z-0 h-[48px] bg-primary-2 border-2 border-beige rounded-lg">
                    </div>
                    <div class="absolute -right-[1px] z-10 top-1/2 -translate-y-1/2 w-2.5 h-[45px] bg-primary-2 ">
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<section class="bg-primary-2 border-t border-beige/20">
    <div class="container py-4">
        <p class="body text-gold">PT Amerta Jiwa Indonesia</p>
    </div>
</section>

<script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const isMobile = window.innerWidth < 1024;

        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Handle ".is-inview" animation triggers (Previously Locomotive)
        // Disabled on mobile for cleaner UX
        if (!isMobile) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const targetClass = entry.target.getAttribute('data-scroll-class') || 'is-inview';
                    if (entry.isIntersecting) {
                        entry.target.classList.add(targetClass);
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('[data-scroll]').forEach(el => observer.observe(el));
        } else {
            // Force show elements on mobile if they rely on "is-inview"
            document.querySelectorAll('[data-scroll]').forEach(el => {
                const targetClass = el.getAttribute('data-scroll-class') || 'is-inview';
                el.classList.add(targetClass);
            });
        }

        // Handle "data-scroll-speed" parallax
        lenis.on('scroll', (e) => {
            if (!isMobile) {
                document.querySelectorAll('[data-scroll-speed]').forEach(el => {
                    const speed = parseFloat(el.getAttribute('data-scroll-speed')) || 0;
                    // Use parent bounds to avoid jitter when the element itself translates
                    const parent = el.parentElement;
                    const rect = parent.getBoundingClientRect();
                    const viewHeight = window.innerHeight;

                    if (rect.top < viewHeight && rect.bottom > 0) {
                        const progress = (viewHeight - rect.top) / (viewHeight + rect.height);
                        const yPos = (progress - 0.5) * speed * 100;
                        el.style.transform = `translate3d(0, ${yPos}px, 0)`;
                    }
                });
            }
        });

        window.lenis = lenis;
    });
</script>
<?php wp_footer(); ?>
</body>


</html>