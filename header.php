<?php
/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php do_action('tailpress_header'); ?>
        <header class="fixed top-0 left-0 z-40 w-full">
            <?php $current_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
            <section
                class="drop-shadow-2xl container relative flex justify-between items-center rounded-b-xl bg-primary py-5 pb-3 px-[22px] min-h-[40px]">
                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-[98.5%] rounded-b-xl  h-4 bg-primary"></div>
                <button id="mobile-menu-btn" class="md:hidden">
                    <div class="h-px w-7 bg-gold mb-2"></div>
                    <div class="h-px w-4 bg-gold"></div>
                </button>
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-[30px] md:h-[42px]"
                        alt="">
                </a>
                <ul class="items-center text-beige space-x-10 hidden md:flex">
                    <li>
                        <a class="!no-underline text-xs hover:text-gold transition-colors <?php echo ($current_uri == '/' || $current_uri == '/index.php') ? 'text-gold' : ''; ?>"
                            href="/">Home</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs hover:text-gold transition-colors <?php echo (strpos($current_uri, '/journey') !== false) ? 'text-gold' : ''; ?>"
                            href="/journey">About Us </a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs hover:text-gold transition-colors <?php echo (strpos($current_uri, '/signature-rituals') !== false) ? 'text-gold' : ''; ?>"
                            href="/signature-rituals">Our Treatment</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs hover:text-gold transition-colors <?php echo (strpos($current_uri, '/wellness-whisper') !== false) ? 'text-gold' : ''; ?>"
                            href="/wellness-whisper">News</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs hover:text-gold transition-colors <?php echo (strpos($current_uri, '/expand') !== false) ? 'text-gold' : ''; ?>"
                            href="/expand">Franchise</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs hover:text-gold transition-colors <?php echo (strpos($current_uri, '/sanctuary') !== false) ? 'text-gold' : ''; ?>"
                            href="/sanctuary">Our Outlets</a>
                    </li>
                </ul>
                <div class="hidden md:block">
                    <a href="https://wa.me/6282130376088" target="_blank" class="button bg-terracota ">
                        Book Now
                    </a>
                </div>
            </section>
            <div id="mobile-overlay"
                class="fixed inset-0 z-40 bg-black/60 opacity-0 pointer-events-none transition-opacity duration-300">
            </div>
            <div id="mobile-sidebar"
                class="fixed inset-y-0 rounded-r-xl left-0 z-50 w-[80vw] bg-primary flex flex-col py-11 px-9 justify-between -translate-x-[110%] transition-transform duration-300 ease-in-out shadow-2xl">
                <div class="absolute -right-3 w-4 h-[97%] top-1/2 -translate-y-1/2 bg-primary rounded-r-xl"></div>
                <div>
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-[38px] mb-14"
                            alt="">
                    </a>
                    <ul class="flex flex-col space-y-6 text-beige">
                        <li><a class="!no-underline hover:text-gold transition-colors <?php echo ($current_uri == '/' || $current_uri == '/index.php') ? 'text-gold' : ''; ?>"
                                href="/">Home</a></li>
                        <li><a class="!no-underline hover:text-gold transition-colors <?php echo (strpos($current_uri, '/journey') !== false) ? 'text-gold' : ''; ?>"
                                href="/journey">About Us </a></li>
                        <li><a class="!no-underline hover:text-gold transition-colors <?php echo (strpos($current_uri, '/signature-rituals') !== false) ? 'text-gold' : ''; ?>"
                                href="/signature-rituals">Our Treatment</a></li>
                        <li><a class="!no-underline hover:text-gold transition-colors <?php echo (strpos($current_uri, '/wellness-whisper') !== false) ? 'text-gold' : ''; ?>"
                                href="/wellness-whisper">News</a></li>
                        <li><a class="!no-underline hover:text-gold transition-colors <?php echo (strpos($current_uri, '/expand') !== false) ? 'text-gold' : ''; ?>"
                                href="/expand">Franchise</a></li>
                        <li><a class="!no-underline hover:text-gold transition-colors <?php echo (strpos($current_uri, '/sanctuary') !== false) ? 'text-gold' : ''; ?>"
                                href="/sanctuary">Our Outlets</a></li>
                    </ul>
                </div>
                <div>
                    <a href="https://wa.me/6282130376088" target="_blank"
                        class="button bg-terracota !text-xl px-8 py-3">Book Now</a>
                </div>
            </div>

            <style>
                header {
                    transition: transform 0.4s ease-in-out;
                }

                header.header-hidden {
                    transform: translateY(-120%);
                }
            </style>

            <script>
                jQuery(document).ready(function ($) {
                    function openSidebar() {
                        $('#mobile-sidebar').removeClass('-translate-x-[110%]').addClass('translate-x-0');
                        $('#mobile-overlay').removeClass('opacity-0 pointer-events-none').addClass('opacity-100');
                        $('body').addClass('overflow-hidden');
                    }

                    function closeSidebar() {
                        $('#mobile-sidebar').removeClass('translate-x-0').addClass('-translate-x-[110%]');
                        $('#mobile-overlay').removeClass('opacity-100').addClass('opacity-0 pointer-events-none');
                        $('body').removeClass('overflow-hidden');
                    }

                    $('#mobile-menu-btn').click(function () {
                        openSidebar();
                    });

                    $('#close-sidebar, #mobile-overlay').click(function () {
                        closeSidebar();
                    });

                    // Scroll to hide header logic
                    let lastScrollTop = 0;
                    const header = $('header');
                    const threshold = 80; // Distance from top before hiding starts

                    $(window).scroll(function () {
                        // Only apply on desktop (md breakpoint in Tailwind is 768px)
                        if ($(window).width() < 768) {
                            header.removeClass('header-hidden');
                            return;
                        }

                        let st = $(this).scrollTop();

                        if (st > threshold) {
                            if (st > lastScrollTop) {
                                // Scroll Down
                                header.addClass('header-hidden');
                            } else {
                                // Scroll Up
                                header.removeClass('header-hidden');
                            }
                        } else {
                            // Near top
                            header.removeClass('header-hidden');
                        }

                        lastScrollTop = st;
                    });
                });
            </script>
        </header>

        <div id="content" class="site-content grow">

            <?php do_action('tailpress_content_start'); ?>
            <main>