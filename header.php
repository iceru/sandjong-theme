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

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-zinc-900 antialiased'); ?>>
    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php do_action('tailpress_header'); ?>

        <!-- <header class="container mx-auto py-6">
            <div class="md:flex md:justify-between md:items-center">
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()): ?>
                            <?php the_custom_logo(); ?>
                        <?php else: ?>
                            <div class="flex items-center gap-2">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                    class="!no-underline lowercase font-medium text-lg">
                                    <?php bloginfo('name'); ?>
                                </a>
                                <?php if ($description = get_bloginfo('description')): ?>
                                    <span class="text-sm font-light text-dark/80">|</span>
                                    <span class="text-sm font-light text-dark/80"><?php echo esc_html($description); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (has_nav_menu('primary')): ?>
                        <div class="md:hidden">
                            <button type="button" aria-label="Toggle navigation" id="primary-menu-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>

                <div id="primary-navigation"
                    class="hidden md:flex md:bg-transparent gap-6 items-center border border-light md:border-none rounded-xl p-4 md:p-0">
                    <nav>
                        <?php if (current_user_can('administrator') && !has_nav_menu('primary')): ?>
                            <a href="<?php echo esc_url(admin_url('nav-menus.php')); ?>"
                                class="text-sm text-zinc-600"><?php esc_html_e('Edit Menus', 'tailpress'); ?></a>
                        <?php else: ?>
                            <?php
                            wp_nav_menu([
                                'container_id' => 'primary-menu',
                                'container_class' => '',
                                'menu_class' => 'md:flex md:-mx-4 [&_a]:!no-underline',
                                'theme_location' => 'primary',
                                'li_class' => 'md:mx-4',
                                'fallback_cb' => false,
                            ]);
                            ?>
                        <?php endif; ?>
                    </nav>

                    <div class="inline-block mt-4 md:mt-0"><?php get_search_form(); ?></div>
                </div>
            </div>
        </header> -->

        <header class="fixed top-0 left-0 z-40 w-full">
            <section
                class="drop-shadow-2xl container relative flex justify-between items-center rounded-b-xl bg-primary py-5 pb-3 px-[22px] min-h-[40px]">
                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-[98.5%] rounded-b-xl  h-4 bg-primary"></div>
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="h-[42px]" alt="">
                </a>
                <ul class="flex items-center text-beige space-x-10">
                    <li>
                        <a class="!no-underline text-xs" href="/">Home</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs" href="/journey">Journey of Sandjong </a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs" href="/signature-rituals">Signature Rituals</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs" href="/wellness-whisper">Wellness Whisper</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs" href="/expand">Expand with Sandjong</a>
                    </li>
                    <li>
                        <a class="!no-underline text-xs" href="/sanctuary">Sanctuary of Sandjong</a>
                    </li>
                </ul>
                <div>
                    <a href="" class="button bg-terracota">
                        Book Now
                    </a>
                </div>
            </section>
        </header>

        <div id="content" class="site-content grow">

            <?php do_action('tailpress_content_start'); ?>
            <main>