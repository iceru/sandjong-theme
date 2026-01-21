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
    <section class="container flex py-11">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Sandjong Logo">
        </div>
        <div>
            <h6>Address</h6>
            <div>
                <div>
                    Episode Hotel <br />
                    Gading Serpong
                </div>
                <p>
                    2nd Floor, Jl. Gading Serpong Boulevard Barat S No. 6-7 Pakulonan Barat Tangerang — 15810
                </p>
            </div>
            <div>
                <div>
                    The Orient Jakarta <br />
                    A Royal Hideaway Hotel
                </div>
                <p>
                    5th Floor, Jl. Jend. Sudirman No. 36, Bend. Hilir Kec. Tn. Abang Kota Jakarta Pusat DKI Jakarta —
                    10210
                </p>
            </div>
        </div>

        <div>
            <div class="flex">
                <div>
                    <div>
                        <h6>Navigation</h6>
                    </div>
                    <div>
                        <ul>
                            <li><a href="">Journey of Sandjong</a></li>
                            <li><a href="">Signature Rituals</a></li>
                            <li><a href="">Wellness Whisper</a></li>
                            <li><a href="">Expand with Sandjong</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h6>CONTACT</h6>
                    </div>
                    <div>
                        <ul>
                            <li><a href="">021-3952-1229</a></li>
                            <li><a href="">0821-3037-6088</a></li>
                            <li><a href="">info.sandjong@amertajiwa.com</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div>
                        <h6>Socials</h6>
                    </div>
                    <div>
                        <ul>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <h5>Subscribe to our Newsletter</h5>
            </div>
        </div>
    </section>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>