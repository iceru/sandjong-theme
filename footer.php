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

<!-- <footer id="colophon" class="bg-light/50 mt-12" role="contentinfo">
        <div class="container mx-auto py-12">
            <?php do_action('tailpress_footer'); ?>
            <div class="text-sm text-zinc-700">
                &copy; <?php echo esc_html(date_i18n('Y')); ?> - <?php bloginfo('name'); ?>
            </div>
        </div>
    </footer> -->

<footer class="bg-primary text-beige">
    <section class="container flex py-11 space-x-16">
        <div class="w-[20%]">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Sandjong Logo">
        </div>
        <div class="w-[20%]">
            <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">Address</h6>
            <div class="mb-14">
                <h5 class="mb-6">
                    Episode Hotel <br />
                    Gading Serpong
                </h5>
                <p>
                    2nd Floor, Jl. Gading Serpong Boulevard Barat S No. 6-7 Pakulonan Barat Tangerang — 15810
                </p>
            </div>
            <div>
                <h5 class="mb-6">
                    The Orient Jakarta <br />
                    A Royal Hideaway Hotel
                </h5>
                <p>
                    5th Floor, Jl. Jend. Sudirman No. 36, Bend. Hilir Kec. Tn. Abang Kota Jakarta Pusat DKI Jakarta —
                    10210
                </p>
            </div>
        </div>

        <div>
            <div class="flex space-x-14">
                <div>
                    <div>
                        <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">Navigation</h6>
                    </div>
                    <div>
                        <ul class="space-y-5">
                            <li><a href="" class="!no-underline">Journey of Sandjong</a></li>
                            <li><a href="" class="!no-underline">Signature Rituals</a></li>
                            <li><a href="" class="!no-underline">Wellness Whisper</a></li>
                            <li><a href="" class="!no-underline">Expand with Sandjong</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">CONTACT</h6>
                    </div>
                    <div>
                        <ul class="space-y-5">
                            <li><a href="" class="!no-underline">021-3952-1229</a></li>
                            <li><a href="" class="!no-underline">0821-3037-6088</a></li>
                            <li><a href="" class="!no-underline">info.sandjong@amertajiwa.com</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h6 class="mb-5 uppercase text-gold text-xs tracking-widest">Socials</h6>
                    </div>
                    <div>
                        <ul class="space-y-5">
                            <li><a href="" class="!no-underline">Instagram</a></li>
                            <li><a href="" class="!no-underline">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <h5 class="text-gold mb-6">Subscribe to our Newsletter</h5>
            </div>
        </div>
    </section>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>