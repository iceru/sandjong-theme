<?php
/**
 * Template Name: Homepage
 */

get_header();

$theme_uri = get_template_directory_uri();

function sandjong_homepage_field($name, $fallback = '')
{
    if (!function_exists('get_field')) {
        return $fallback;
    }

    $value = get_field($name);

    if ($value === null || $value === false || $value === '') {
        return $fallback;
    }

    return $value;
}

function sandjong_homepage_image_url($name, $fallback = '', $size = 'full')
{
    $image = sandjong_homepage_field($name);

    if (is_array($image)) {
        if (!empty($image['sizes'][$size])) {
            return $image['sizes'][$size];
        }

        if (!empty($image['url'])) {
            return $image['url'];
        }
    }

    if (is_numeric($image)) {
        $url = wp_get_attachment_image_url($image, $size);

        if ($url) {
            return $url;
        }
    }

    if (is_string($image) && $image !== '') {
        return $image;
    }

    return $fallback;
}

function sandjong_homepage_file_url($name, $fallback = '')
{
    $file = sandjong_homepage_field($name);

    if (is_array($file) && !empty($file['url'])) {
        return $file['url'];
    }

    if (is_numeric($file)) {
        $url = wp_get_attachment_url($file);

        if ($url) {
            return $url;
        }
    }

    if (is_string($file) && $file !== '') {
        return $file;
    }

    return $fallback;
}

function sandjong_homepage_link($name, $fallback_url = '#', $fallback_title = '', $fallback_target = '')
{
    $link = sandjong_homepage_field($name);

    if (is_array($link)) {
        return array(
            'url' => !empty($link['url']) ? $link['url'] : $fallback_url,
            'title' => !empty($link['title']) ? $link['title'] : $fallback_title,
            'target' => !empty($link['target']) ? $link['target'] : $fallback_target,
        );
    }

    if (is_string($link) && $link !== '') {
        return array(
            'url' => $link,
            'title' => $fallback_title,
            'target' => $fallback_target,
        );
    }

    return array(
        'url' => $fallback_url,
        'title' => $fallback_title,
        'target' => $fallback_target,
    );
}

$hero_poster = sandjong_homepage_image_url('hero_poster_image', $theme_uri . '/images/sandjong-placeholder.webp');
$hero_video = sandjong_homepage_file_url('hero_video', $theme_uri . '/images/sandjong.mp4');
$hero_title = sandjong_homepage_field('hero_title', 'Nature Inheritance, Rooted in Culture');
$hero_text = sandjong_homepage_field('hero_text', 'Allow yourself to step softly into stillness, into a sanctuary where time slows, and the senses awaken. A wave of fragrant incense, the warmth of hands that remember and cares. Time slows, and something within you softens. Welcome to your return to absolute relaxation.');
$hero_arrow_icon = sandjong_homepage_image_url('hero_arrow_icon', $theme_uri . '/images/icons/arrow.png');

$about_background = sandjong_homepage_image_url('about_background_image', $theme_uri . '/images/webp/bg-beige.webp');
$about_title = sandjong_homepage_field('about_title', 'Rooted in Nature, Shaped by Heritage');
$about_text = sandjong_homepage_field('about_text', 'Rooted in Chinese-Peranakan heritage, Sandjong blends the charm of a Chinese apothecary with the grounded spirit of the Baduy, the grace of the Peranakan, the calm of the Javanese, and the soul of the Balinese, while enriched with herbal aromas and vibrant colors all around. Each visit feels like coming home, because Sandjong is your place to unwind, refresh your body, and restore your mind in a culturally rich and rejuvenating sanctuary.');
$about_link = sandjong_homepage_link('about_button', '/about-us', 'Learn More');

$soul_eyebrow = sandjong_homepage_field('soul_eyebrow', 'A Window to the Soul');
$soul_title = sandjong_homepage_field('soul_title', 'The Unique Threads in Our Wellness Tapestry');
$soul_center_image = sandjong_homepage_image_url('soul_center_image', $theme_uri . '/images/webp/soul-1.webp');
$soul_left_image = sandjong_homepage_image_url('soul_left_image', $theme_uri . '/images/webp/soul-3.webp');
$soul_right_image = sandjong_homepage_image_url('soul_right_image', $theme_uri . '/images/webp/soul-2.webp');

$branches_title = sandjong_homepage_field('branches_title', "Sandjong's Wellness Branches");
$branches_button_text = sandjong_homepage_field('branches_button_text', 'Explore');
$branches_fallback_image = sandjong_homepage_image_url('branches_fallback_image', $theme_uri . '/images/webp/episode.webp');

$posts_background_desktop = sandjong_homepage_image_url('posts_background_desktop', $theme_uri . '/images/webp/bg-posts-2.webp');
$posts_background_mobile = sandjong_homepage_image_url('posts_background_mobile', $theme_uri . '/images/webp/bg-posts-2-mobile.webp');
$posts_footer_background = sandjong_homepage_image_url('posts_footer_background', $theme_uri . '/images/webp/bg-footer.webp');
$posts_arrow_icon = sandjong_homepage_image_url('posts_arrow_icon', $theme_uri . '/images/icons/arrow-terra.png');
$posts_eyebrow = sandjong_homepage_field('posts_eyebrow', 'Wellness Whisper');
$posts_title = sandjong_homepage_field('posts_title', 'Gentle Notes From Sandjong');
$posts_text = sandjong_homepage_field('posts_text', 'Wellness Whisper is our way of keeping you close to Sandjong’s journey. Where we share updates and open a window into our world: the traditions that inspire us, the rituals we are creating, and the milestones we are reaching together.');
$posts_link = sandjong_homepage_link('posts_button', '/news', 'Read More');
$posts_item_link_text = sandjong_homepage_field('posts_item_link_text', 'Read More');
$posts_empty_text = sandjong_homepage_field('posts_empty_text', 'No whispers shared just yet.');

$franchise_background = sandjong_homepage_image_url('franchise_background_image', $theme_uri . '/images/webp/bg-franchise.webp');
$franchise_title = sandjong_homepage_field('franchise_title', 'Growing Wellness, Building Together');
$franchise_text = sandjong_homepage_field('franchise_text', 'We invite you to join our journey of culture and care through partnerships and franchises. Together, let’s build sanctuaries that blend growth with heritage and bring meaningful wellness to more communities and souls.');
$franchise_primary_link = sandjong_homepage_link('franchise_primary_button', '/our-outlets', 'Spa Operation');
$franchise_secondary_link = sandjong_homepage_link('franchise_secondary_button', '/franchise', 'For Franchise');
?>
<style>
    .masked-image {
        -webkit-mask-image: url('<?php echo esc_url($theme_uri); ?>/images/mask/mask.png');
        -webkit-mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-image: url('<?php echo esc_url($theme_uri); ?>/images/mask/mask.png');
        mask-mode: alpha;
        mask-size: 100% 100%;
        mask-repeat: no-repeat;
        mask-position: center;
    }
</style>

<section id="header"
    class="h-screen md:h-auto md:aspect-video md:max-h-screen flex flex-col justify-end items-center relative w-full">
    <div class="absolute left-0 top-0 w-full h-full">
        <video class="w-full h-full object-cover" autoplay loop muted playsinline
            poster="<?php echo esc_url($hero_poster); ?>">
            <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
        </video>
    </div>
    <div class="text-white text-center container relative z-10 mb-14">
        <h3 class="mb-6"><?php echo esc_html($hero_title); ?></h3>
        <div class="body max-w-[827px] mx-auto"><?php echo wp_kses_post(wpautop($hero_text)); ?></div>
    </div>
    <div class="relative z-10 mb-5">
        <a href="#about" class="w-6 h-6 flex justify-center items-center rounded-full border-beige border">
            <img src="<?php echo esc_url($hero_arrow_icon); ?>" alt="">
        </a>
    </div>
</section>

<section id="about"
    class="bg-beige text-center py-20 md:py-36 flex flex-col justify-center h-screen items-center relative text-primary">
    <div class="absolute w-full h-[130%] md:h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-top" src="<?php echo esc_url($about_background); ?>" alt="">
    </div>
    <div class="container relative z-10">
        <h3 class="mb-7 max-w-[522px] mx-auto">
            <?php echo esc_html($about_title); ?>
        </h3>
        <div class="body max-w-[800px] mx-auto mb-14 !text-lg">
            <?php echo wp_kses_post(wpautop($about_text)); ?>
        </div>
        <a href="<?php echo esc_url($about_link['url']); ?>" class="button bg-gold group"
            target="<?php echo esc_attr($about_link['target']); ?>">
            <?php echo esc_html($about_link['title']); ?>
        </a>
    </div>
</section>

<section class="bg-beige py-16 md:py-28 relative max-w-screen overflow-x-hidden">
    <div>
        <h4 class="mb-8 text-center text-gold"><?php echo esc_html($soul_eyebrow); ?></h4>
        <div class="flex flex-col justify-center items-center">
            <div class="mb-8 md:w-[482px] w-[287px] h-[296px] md:h-[495px] relative flex justify-center items-center">
                <h4 class="text-beige relative z-10 text-center !text-xl md:!text-2xl max-w-[221px] md:max-w-[360px]">
                    <?php echo esc_html($soul_title); ?>
                </h4>
                <img class="w-full h-full object-cover absolute left-0 top-0"
                    src="<?php echo esc_url($soul_center_image); ?>" alt="">
            </div>
        </div>
    </div>
    <img class="md:w-[374px] w-[220px] md:h-[384px] h-[220px] object-cover absolute -left-[48%] md:-left-16 top-[43%] md:top-[50%] rounded-lg -translate-y-1/2 z-0"
        src="<?php echo esc_url($soul_left_image); ?>" alt="">
    <img class="md:w-[374px] w-[220px] md:h-[384px] h-[220px] object-cover absolute -right-[48%] md:-right-16 top-[43%] md:top-[50%] rounded-lg -translate-y-1/2 z-0"
        src="<?php echo esc_url($soul_right_image); ?>" alt="">
</section>

<section class="bg-beige py-28 relative z-20" id="branches">
    <div class="container">
        <div class="flex items-end md:items-center justify-between space-x-6 mb-16">
            <h5 class="text-gold md:whitespace-nowrap max-w-[168px] md:max-w-full">
                <?php echo esc_html($branches_title); ?>
            </h5>
            <div class="h-[1px] w-full border border-gold border-dashed mt-[4px] hidden md:block"></div>
        </div>
        <div>
            <?php
            $branch_query = new WP_Query(array(
                'post_type' => 'branch',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));

            if ($branch_query->have_posts()):
                while ($branch_query->have_posts()):
                    $branch_query->the_post();
                    ?>
                    <div
                        class="grid md:grid-cols-2 items-center not-last:mb-8 not-last:pb-8 not-last:border-b border-gold border-dashed">
                        <div class="space-y-8 text-primary order-2 md:order-1">
                            <h4 class="!text-[32px] max-w-[288px] md:max-w-full !leading-tight md:leading-normal">
                                <?php the_title(); ?>
                            </h4>
                            <div class="max-w-[489px]">
                                <?php the_content(); ?>
                            </div>
                            <a href="/our-outlets#<?php echo esc_attr(get_post_field('post_name')); ?>"
                                class="button bg-gold inline-block mb-8 md:mb-0">
                                <?php echo esc_html($branches_button_text); ?>
                            </a>
                        </div>
                        <div class="order-1 md:order-2 mb-7 md:mb-0">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array('class' => 'masked-image h-[200px] md:h-[240px] w-full object-cover')); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url($branches_fallback_image); ?>"
                                    class="masked-image h-[280px] md:h-[240px] w-full object-cover" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<section id="posts" class="bg-primary pb-32 relative z-10">
    <div class="w-full h-[384px] hidden md:block relative">
        <img class="w-full h-[120%] absolute left-0 -top-[10%] object-cover" data-scroll data-scroll-speed="2"
            src="<?php echo esc_url($posts_background_desktop); ?>" alt="">
    </div>
    <div class="w-full h-[526px] md:hidden relative">
        <img class="w-full h-full absolute left-0 top-0 object-cover object-top" data-scroll data-scroll-speed="2"
            src="<?php echo esc_url($posts_background_mobile); ?>" alt="">
    </div>
    <div class="absolute w-full h-[50%] left-0 bottom-0">
        <img class="w-full h-full object-cover object-top z-0" src="<?php echo esc_url($posts_footer_background); ?>"
            alt="">
    </div>
    <div
        class="flex flex-wrap md:flex-nowrap max-w-[90%] justify-between bg-beige/90 mx-auto md:max-w-[1100px] p-6 md:p-16 rounded-lg z-10 relative -mt-60 md:-mt-48">
        <div class="w-[95%] md:w-[98%] h-4 rounded-t-xl -top-4 left-1/2 -translate-x-1/2 bg-beige/90 absolute"></div>
        <div class="w-[95%] md:w-[98%] h-4 rounded-b-xl -bottom-4 left-1/2 -translate-x-1/2 bg-beige/90 absolute"></div>
        <div class="w-full md:w-[45%] mb-16 md:mb-0 flex flex-col justify-between">
            <div>
                <h5 class="text-gold mb-4"><?php echo esc_html($posts_eyebrow); ?></h5>
                <h4 class="mb-9"><?php echo esc_html($posts_title); ?></h4>
                <div class="body text-body mb-9 md:mb-20 max-w-[381px]">
                    <?php echo wp_kses_post(wpautop($posts_text)); ?>
                </div>
            </div>
            <div>
                <a href="<?php echo esc_url($posts_link['url']); ?>" class="button bg-terracota"
                    target="<?php echo esc_attr($posts_link['target']); ?>">
                    <?php echo esc_html($posts_link['title']); ?>
                </a>
            </div>
        </div>
        <div class="flex-col space-y-2 items-center justify-center hidden md:flex">
            <img src="<?php echo esc_url($posts_arrow_icon); ?>" class="-rotate-90 w-3 h-3 opacity-40" alt="">
            <div class="w-[1px] h-full border border-terracota border-dashed opacity-30"></div>
            <img src="<?php echo esc_url($posts_arrow_icon); ?>" class="rotate-90 w-3 h-3 opacity-40" alt="">
        </div>
        <div class="w-full md:w-[45%] flex flex-col justify-center" id="news">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()):
                while ($news_query->have_posts()):
                    $news_query->the_post();
                    ?>
                    <div class="mb-8 pb-8 border-b border-gold/30 last:border-b-0 last:mb-0 last:pb-0">
                        <small class="text-xs text-primary font-bold mb-2">
                            <?php echo esc_html(get_the_date('d M Y')); ?>
                        </small>
                        <h5 class="mb-2 line-clamp-2 text-primary">
                            <?php the_title(); ?>
                        </h5>
                        <a href="<?php the_permalink(); ?>" class="button !text-terracota !p-0 !underline">
                            <?php echo esc_html($posts_item_link_text); ?>
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <p><?php echo esc_html($posts_empty_text); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="franchise" class="h-screen flex flex-col justify-center items-center relative">
    <div class="absolute left-0 w-full h-[120%] -top-[10%] z-0" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover" src="<?php echo esc_url($franchise_background); ?>" alt="">
    </div>
    <div class="absolute left-0 top-0 w-full h-full bg-black/50 z-10">
    </div>

    <div class="text-beige relative z-20 text-center px-4">
        <h3 class="mx-auto max-w-[539px] mb-6"><?php echo esc_html($franchise_title); ?></h3>
        <div class="body mx-auto max-w-[461px] mb-9">
            <?php echo wp_kses_post(wpautop($franchise_text)); ?>
        </div>
        <div class="flex justify-center items-center space-x-8">
            <a href="<?php echo esc_url($franchise_primary_link['url']); ?>" class="button bg-terracota"
                target="<?php echo esc_attr($franchise_primary_link['target']); ?>">
                <?php echo esc_html($franchise_primary_link['title']); ?>
            </a>
            <a href="<?php echo esc_url($franchise_secondary_link['url']); ?>" class="button bg-gold group"
                target="<?php echo esc_attr($franchise_secondary_link['target']); ?>">
                <?php echo esc_html($franchise_secondary_link['title']); ?>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
