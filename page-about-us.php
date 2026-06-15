<?php
/**
 * Template Name: About Us
 */

get_header();

$theme_uri = get_template_directory_uri();

if (!function_exists('sandjong_about_field')) {
    function sandjong_about_field($name, $fallback = '')
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
}

if (!function_exists('sandjong_about_image_value_url')) {
    function sandjong_about_image_value_url($image, $fallback = '', $size = 'full')
    {
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
}

if (!function_exists('sandjong_about_image_url')) {
    function sandjong_about_image_url($name, $fallback = '', $size = 'full')
    {
        return sandjong_about_image_value_url(sandjong_about_field($name), $fallback, $size);
    }
}

if (!function_exists('sandjong_about_link')) {
    function sandjong_about_link($name, $fallback_url = '#', $fallback_title = '', $fallback_target = '')
    {
        $link = sandjong_about_field($name);

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
}

$hero_background = sandjong_about_image_url('about_hero_background', $theme_uri . '/images/webp/bg-journey.webp');
$hero_title = sandjong_about_field('about_hero_title', 'Rooted in Amerta Jiwa');

$intro_title = sandjong_about_field('about_intro_title', 'Nature Inheritance Rooted in Culture');
$intro_text = sandjong_about_field('about_intro_text', 'Born from <strong>Amerta Jiwa Indonesia</strong>, Sandjong elevates wellness into a living ritual. The name Sandjong is inspired by the Indonesian word <strong>“sanjung”</strong>, meaning <strong>“praise”</strong> or <strong>“to bring joy”</strong> which reflects our devotion to heritage and balance. <br><br><strong>Rooted in Indonesia’s rich traditions</strong>, we reinterpret ancient wellness philosophies into refined, multisensory experiences, and create spaces to <strong>return home</strong> to: to calm, to culture, to self.');

$commitment_eyebrow = sandjong_about_field('about_commitment_eyebrow', 'Our Commitment');
$commitment_title = sandjong_about_field('about_commitment_title', 'Amerta’s dedication to maintain a 5-star standard and crafting unforgettable experiences for our valued customers is shown and nurtured through our vision, mission, culture, and motto');
$commitment_cards = sandjong_about_field('about_commitment_cards', array(
    array('image' => $theme_uri . '/images/vision.png', 'title' => 'Vision', 'text' => 'To lead Indonesia’s wellness industry with our profound expertise, innovation, and continuous advancement through research and development.'),
    array('image' => $theme_uri . '/images/webp/mission.webp', 'title' => 'Mission', 'text' => 'Dedicated to creating a uniquely memorable experience and genuine care to meet our customers’ needs.'),
    array('image' => $theme_uri . '/images/motto.png', 'title' => 'Motto', 'text' => 'Delivering exceptional customer satisfaction while honoring the needs of all.'),
));

$culture_background = sandjong_about_image_url('about_culture_background', $theme_uri . '/images/webp/bg-culture.webp');
$culture_eyebrow = sandjong_about_field('about_culture_eyebrow', 'Our Culture');
$culture_title = sandjong_about_field('about_culture_title', 'In Amerta’s esteemed environment, we nurture and enhance our offered personalized services and the mutual respect by embracing the reliable principles of amiability and positive attitude.');

$values_background = sandjong_about_image_url('about_values_background', $theme_uri . '/images/webp/bg-beige.webp');
$values_title = sandjong_about_field('about_values_title', 'Values');
$values_items = sandjong_about_field('about_values_items', array(
    array('icon' => $theme_uri . '/images/icons/heart.png', 'title' => 'Commitment', 'text' => 'An unwavering dedication to enhance our brand’s and our clients’ image by endlessly developing an authentic service.'),
    array('icon' => $theme_uri . '/images/icons/idea.png', 'title' => 'Innovation', 'text' => 'An unyielding aim for innovation to elevate our core principle of customer satisfaction to the highest level.'),
    array('icon' => $theme_uri . '/images/icons/star.png', 'title' => 'Uniqueness', 'text' => 'An adamant intention to be a unique trendsetter to the hospitality industry and our clients’ establishments.'),
    array('icon' => $theme_uri . '/images/icons/review.png', 'title' => 'Memorable Experience', 'text' => 'A supporting empowerment for our staff to consistently deliver first-rate, memorable, and personalized service for our guests.'),
    array('icon' => $theme_uri . '/images/icons/guarantee.png', 'title' => 'Consistent', 'text' => 'A committed pledge to prioritize the implementation of our top-tier quality services to meet our guests’ expectations of excellence.'),
));

$senses_background = sandjong_about_image_url('about_senses_background', $theme_uri . '/images/webp/bg-green.webp');
$senses_title = sandjong_about_field('about_senses_title', '5 Senses Experiences');
$senses_fallback_image = sandjong_about_image_url('about_senses_fallback_image', $theme_uri . '/images/webp/senses.webp');
$senses_fallback_icon = sandjong_about_image_url('about_senses_fallback_icon', $theme_uri . '/images/icons/eye.png');

$ambience_background = sandjong_about_image_url('about_ambience_background', $theme_uri . '/images/webp/bg-ambience.webp');
$ambience_eyebrow = sandjong_about_field('about_ambience_eyebrow', 'Enchanting Ambience');
$ambience_title = sandjong_about_field('about_ambience_title', 'A space where time slows, and stories unfold');
$ambience_text = sandjong_about_field('about_ambience_text', 'Inspired by apothecaries of the past and royal sanctuaries of Southeast Asia, Sandjong is alive with texture, scent, and sound that relives that era. In Gading Serpong, Baduy serenity meets Peranakan spirit; in Jakarta, Javanese grace, Balinese warmth, and Peranakan elegance intertwine. From heirlooms to herbal blends, every detail invites you into a deeply sensory, culturally rooted escape.');
$ambience_link = sandjong_about_link('about_ambience_button', '#', 'Explore');

$facilities_background = sandjong_about_image_url('about_facilities_background', $theme_uri . '/images/webp/bg-beige.webp');
$facilities_title_gold = sandjong_about_field('about_facilities_title_gold', 'Delicately Facilitating');
$facilities_title_primary = sandjong_about_field('about_facilities_title_primary', 'Your Serene Moments');
$facilities_fallback_image = sandjong_about_image_url('about_facilities_fallback_image', $theme_uri . '/images/webp/lobby.webp');

$timeline_background = sandjong_about_image_url('about_timeline_background', $theme_uri . '/images/webp/bg-timeline.webp');
$timeline_title_gold = sandjong_about_field('about_timeline_title_gold', 'Echoes');
$timeline_title_beige = sandjong_about_field('about_timeline_title_beige', 'of Time');
$timeline_intro = sandjong_about_field('about_timeline_intro', 'Our story unfolds slowly, a rhythmic ritual of tradition. Born from a vision by Amerta Jiwa Indonesia, Sandjong was shaped by culture, soul, and serenity. Each chapter reflects care and devotion to heritage-based wellness. Our milestones are echoes of all who have journeyed with us and all that shaped the legacy with us; of hands that healed, scents that calmed, and guests who found their way back to themselves.');
$timeline_side_text = sandjong_about_field('about_timeline_side_text', "Sandjong's identity are echoes of every hand that has healed, every scent that has calmed, every guest who found a moment to return to themselves.");
$timeline_arrow_icon = sandjong_about_image_url('about_timeline_arrow_icon', $theme_uri . '/images/icons/arrow-gold.png');
$timeline_dot_icon = sandjong_about_image_url('about_timeline_dot_icon', $theme_uri . '/images/icons/dot-gold.png');
$timeline_items = sandjong_about_field('about_timeline_items', array(
    array('title' => '2022 — The First Bloom', 'text' => 'We opened the doors to Sandjong at Episode Gading Serpong, our first sanctuary inspired by the quiet strength of Baduy tradition and the vibrant elegance of Peranakan heritage. A hidden gem in the city, where healing feels like coming home.'),
    array('title' => '2023 — A Voice Recognized', 'text' => 'Sandjong was honored as The Best Spa 2023, a celebration of the care, culture, and calm that live in every corner of our sanctuary. An affirmation of the grace we strive to bring into the world.'),
    array('title' => '2024 — The Second Sanctuary', 'text' => 'Sandjong Spa at The Orient Jakarta was unveiled. A refined apothecary of royal elegance, drawing from Peranakan, Javanese, and Balinese heritage. A sacred space for regal restoration, crafted with precision and poetry.'),
    array('title' => 'And Beyond…', 'text' => 'We continue to grow, guided not by urgency, but by meaning. Each future Sandjong will be a new echo that faithfully rooted in its land, lovingly shaped by its people, and gracefully unfolding with time.'),
));

$awards_title_gold = sandjong_about_field('about_awards_title_gold', 'In Gentle');
$awards_title_primary = sandjong_about_field('about_awards_title_primary', 'Honor');
$awards_text = sandjong_about_field('about_awards_text', 'Every recognition we have received is not a trophy, but a whisper of gratitude—gently offered by those who have felt the calm, the comfort, and the culture within our sanctuary. These honors are not our destination. They are gentle markers along our path—reminders that grace, when given sincerely, often returns softly.');
$awards_fallback_image = sandjong_about_image_url('about_awards_fallback_image', $theme_uri . '/images/webp/award-1.webp');
$slider_arrow_icon = sandjong_about_image_url('about_slider_arrow_icon', $theme_uri . '/images/icons/arrow-terra.png');
$awards_arrow_icon = sandjong_about_image_url('about_awards_arrow_icon', $theme_uri . '/images/icons/arrow-terra-2.png');

$session_background = sandjong_about_image_url('about_session_background', $theme_uri . '/images/webp/bg-session.webp');
$session_title = sandjong_about_field('about_session_title', 'Loved in Silence, Remembered in Stillness');
$session_text = sandjong_about_field('about_session_text', 'But beyond accolades, it is the return of a guest, the softened breath at the end of a treatment, and the shared stillness that truly honors us.');
$session_link = sandjong_about_link('about_session_button', 'https://wa.me/6282130376088', 'Book Your Session', '_blank');
?>
<style>
    .masked-sense {
        -webkit-mask-image: url('<?php echo esc_url($theme_uri); ?>/images/mask/mask-sense.png');
        -webkit-mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-image: url('<?php echo esc_url($theme_uri); ?>/images/mask/mask-sense.png');
        mask-mode: alpha;
        mask-size: 100% 100%;
        mask-repeat: no-repeat;
        mask-position: center;
    }

    .masked-facility {
        -webkit-mask-image: url('<?php echo esc_url($theme_uri); ?>/images/mask/mask-facility.png');
        -webkit-mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-image: url('<?php echo esc_url($theme_uri); ?>/images/mask/mask-facility.png');
        mask-mode: alpha;
        mask-size: 100% 100%;
        mask-repeat: no-repeat;
        mask-position: center;
    }
</style>

<section class="relative h-screen flex justify-center items-center">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover" src="<?php echo esc_url($hero_background); ?>" alt="">
    </div>
    <h4 class="text-beige big relative z-10 mt-14 md:mt-0 max-w-[192px] md:max-w-full text-center">
        <?php echo esc_html($hero_title); ?>
    </h4>
</section>

<section class="bg-beige py-[71px] md:max-h-[500px] h-screen flex flex-col justify-center md:py-36 relative">
    <div class="container grid md:grid-cols-2 text-primary items-center">
        <h4 class="max-w-[412px] big mb-10 md:mb-0">
            <?php echo esc_html($intro_title); ?>
        </h4>
        <div class="body"><?php echo wp_kses_post(wpautop($intro_text)); ?></div>
    </div>
</section>

<section class="bg-primary py-20 md:py-36 relative min-h-screen flex flex-col justify-center">
    <div class="md:container grid md:grid-cols-2 items-center">
        <div class="px-4 md:px-0 mb-10 md:mb-0">
            <h4 class="mb-6 text-gold italic small"><?php echo esc_html($commitment_eyebrow); ?></h4>
            <h4 class="max-w-[487px] text-beige mid">
                <?php echo esc_html($commitment_title); ?>
            </h4>
        </div>
        <div
            class="draggable-container px-4 md:pl-0 md:pr-4 md:absolute right-0 flex space-x-6 w-full md:w-1/2 whitespace-nowrap overflow-x-auto pb-6 cursor-grab select-none no-scrollbar">

            <?php foreach ($commitment_cards as $card): ?>
                <div class="w-[312px] shrink-0">
                    <img src="<?php echo esc_url(sandjong_about_image_value_url($card['image'] ?? '')); ?>"
                        class="w-full h-[270px] object-cover" alt="">

                    <div class="bg-beige py-10 px-9 rounded-b-lg whitespace-normal relative">
                        <div
                            class="w-[95%] md:w-[95%] h-2 rounded-b-xl -bottom-2 left-1/2 -translate-x-1/2 bg-beige absolute">
                        </div>
                        <h5 class="text-gold mb-4"><?php echo esc_html($card['title'] ?? ''); ?></h5>
                        <div class="body text-primary min-h-[96px]">
                            <?php echo wp_kses_post(wpautop($card['text'] ?? '')); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="relative overflow-hidden h-screen flex flex-col justify-center" id="culture">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover" src="<?php echo esc_url($culture_background); ?>" alt="">
    </div>
    <div class="container flex flex-col h-screen max-h-[1000px] text-center justify-center items-center relative z-10">
        <h5 class="text-gold mb-6"><?php echo esc_html($culture_eyebrow); ?></h5>
        <h4 class="max-w-[329px] md:max-w-[729px] text-beige">
            <?php echo esc_html($culture_title); ?>
        </h4>
    </div>
</section>

<section class="relative bg-beige py-28">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-top" src="<?php echo esc_url($values_background); ?>" alt="">
    </div>
    <div class="container relative z-10">
        <h4 class="text-terracota mb-10"><?php echo esc_html($values_title); ?></h4>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 gap-y-10 md:gap-10">
            <?php foreach ($values_items as $item): ?>
                <div>
                    <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                        <img class="w-12 h-12 object-contain"
                            src="<?php echo esc_url(sandjong_about_image_value_url($item['icon'] ?? '')); ?>" alt="">
                    </div>
                    <h5 class="text-gold mb-1"><?php echo esc_html($item['title'] ?? ''); ?></h5>
                    <div class="body max-w-[281px]"><?php echo wp_kses_post(wpautop($item['text'] ?? '')); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-primary py-16 relative z-10">
    <div class="absolute w-full h-full left-0 top-0">
        <img class="w-full h-full object-cover object-top" src="<?php echo esc_url($senses_background); ?>" alt="">
    </div>
    <div class="container relative">
        <div class="senses-slider">
            <?php
            $senses_query = new WP_Query(array(
                'post_type' => 'sense',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));

            if ($senses_query->have_posts()):
                while ($senses_query->have_posts()):
                    $senses_query->the_post();
                    $icon = function_exists('get_field') ? get_field('icon') : '';
                    $icon_url = sandjong_about_image_value_url($icon, $senses_fallback_icon);
                    ?>
                    <div>
                        <h4 class="text-gold md:hidden mb-12"><?php echo esc_html($senses_title); ?></h4>
                        <div class="grid md:grid-cols-2">
                            <div class="mb-12 md:mb-0 md:mr-16">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large', array('class' => 'masked-sense w-full h-full object-cover ')); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url($senses_fallback_image); ?>"
                                        class="masked-sense w-full h-full object-cover" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="md:pl-14">
                                <h4 class="text-gold hidden md:block md:mb-20"><?php echo esc_html($senses_title); ?></h4>

                                <div class="mb-10 w-[71px] h-[71px] rounded-full bg-[#966938] flex justify-center items-center">
                                    <img src="<?php echo esc_url($icon_url); ?>" class="w-[54px] h-[54px] object-contain"
                                        alt="">
                                </div>
                                <h5 class="text-gold mb-4"><?php the_title(); ?></h5>
                                <div class="body text-beige max-w-[336px]">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="grid grid-cols-2 absolute left-1/2 -translate-x-1/2 w-full -bottom-8 xl:bottom-14 px-6 md:px-0">
            <div class="hidden md:block"></div>
            <div>
                <div class="senses-nav flex items-center md:pl-14">
                </div>
            </div>
        </div>

    </div>
</section>

<section class="h-screen flex flex-col justify-center items-center relative z-0">
    <div class="absolute w-full h-[120%] left-0 -top-[20%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full top-0 object-cover object-top" src="<?php echo esc_url($ambience_background); ?>"
            alt="">
    </div>

    <div class="bg-primary/90 relative z-20 w-[90vw] md:w-[70vw] mx-auto py-14 px-4 text-center rounded-xl">
        <div class="w-[95%] md:w-[98%] h-3 rounded-t-xl -top-3 left-1/2 -translate-x-1/2 bg-primary/90 absolute">
        </div>
        <div class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-primary/90 absolute">
        </div>
        <h5 class="text-gold relative mb-6">
            <?php echo esc_html($ambience_eyebrow); ?>
        </h5>
        <h4 class="text-beige mb-8 md:mb-16 !text-xl md:!text-[32px]">
            <?php echo esc_html($ambience_title); ?>
        </h4>
        <div class="text-beige max-w-[612px] mb-16 mx-auto">
            <?php echo wp_kses_post(wpautop($ambience_text)); ?>
        </div>
        <a href="<?php echo esc_url($ambience_link['url']); ?>"
            target="<?php echo esc_attr($ambience_link['target']); ?>" class="button bg-gold !px-8">
            <?php echo esc_html($ambience_link['title']); ?>
        </a>
    </div>
</section>

<section class="relative py-28 z-10 bg-beige">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-bottom" src="<?php echo esc_url($facilities_background); ?>"
            alt="">
    </div>
    <div class="container relative z-10">
        <h4 class="text-center text-gold mb-16"><?php echo esc_html($facilities_title_gold); ?> <span
                class="text-primary">
                <?php echo esc_html($facilities_title_primary); ?>
            </span>
        </h4>

        <div class="relative">
            <div class="facility-slider">
                <?php
                $facility_query = new WP_Query(array(
                    'post_type' => 'facility',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                ));

                if ($facility_query->have_posts()):
                    while ($facility_query->have_posts()):
                        $facility_query->the_post();
                        ?>
                        <div>
                            <div class="grid md:grid-cols-2 gap-6 min-w-0">
                                <div class="min-w-0">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large', array('class' => 'masked-facility w-full max-w-full object-cover aspect-4/3 max-w-[648px]')); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url($facilities_fallback_image); ?>"
                                            class="masked-facility w-full h-full object-cover aspect-4/3 max-w-[648px]" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="bg-[#FFE5C9] rounded-xl relative p-8 md:px-16 md:py-12 min-w-0">
                                    <div
                                        class="w-[95%] md:w-[98%] h-3 rounded-t-xl -top-3 left-1/2 -translate-x-1/2 bg-[#FFE5C9] absolute">
                                    </div>
                                    <div
                                        class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-[#FFE5C9] absolute">
                                    </div>
                                    <h4 class="text-gold mb-11"><?php the_title(); ?></h4>
                                    <div class="body max-w-[398px] mb-14 md:mb-0">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="grid md:grid-cols-2 left-1/2 w-full -translate-x-1/2 bottom-8 xl:bottom-24 absolute gap-6">
                <div></div>

                <div class="facility-nav flex items-center px-8 md:px-16">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative py-20 min-h-screen flex flex-col justify-center" id="timeline">
    <div class="absolute inset-0 bg-body/20 h-[120%] -top-[20%] left-0" data-scroll data-scroll-speed="2">
        <img src="<?php echo esc_url($timeline_background); ?>" class="w-full h-full object-cover mix-blend-multiply"
            alt="" />
    </div>
    <div class="container relative">
        <div class="grid md:grid-cols-2">
            <div>
                <h4 class="text-gold mb-14"><?php echo esc_html($timeline_title_gold); ?> <span
                        class="text-beige"><?php echo esc_html($timeline_title_beige); ?></span></h4>
                <div class="text-beige max-w-[455px] body"><?php echo wp_kses_post(wpautop($timeline_intro)); ?></div>
            </div>
            <div>
                <div class="text-beige max-w-[455px] mb-9 body">
                    <?php echo wp_kses_post(wpautop($timeline_side_text)); ?>
                </div>
                <div class="flex space-x-6">
                    <div class="flex flex-col items-center space-y-3">
                        <img src="<?php echo esc_url($timeline_arrow_icon); ?>" alt="" class="rotate-90">
                        <div class="h-full w-[1px] border border-dashed border-gold"></div>
                        <img src="<?php echo esc_url($timeline_arrow_icon); ?>" alt="" class="-rotate-90">
                    </div>
                    <div class="mt-4">
                        <?php foreach ($timeline_items as $index => $item): ?>
                            <div class="relative timeline-item cursor-pointer <?php echo $index === 0 ? 'active' : ''; ?>">
                                <img src="<?php echo esc_url($timeline_dot_icon); ?>" alt=""
                                    class="absolute -left-[37px] md:-left-[39px] top-1 timeline-dot">
                                <h5 class="timeline-title transition-all duration-300 mb-8">
                                    <?php echo esc_html($item['title'] ?? ''); ?>
                                </h5>
                                <div class="timeline-content <?php echo $index === 0 ? '' : 'hidden'; ?>">
                                    <div class="text-beige max-w-[435px] mb-9">
                                        <?php echo wp_kses_post(wpautop($item['text'] ?? '')); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="awards" class="bg-beige py-20 md:py-28 relative z-10">
    <div class="container">
        <h4 class="text-center text-gold mb-11">
            <?php echo esc_html($awards_title_gold); ?> <span
                class="text-primary"><?php echo esc_html($awards_title_primary); ?></span>
        </h4>
        <div class="body text-center max-w-[698px] mb-14 mx-auto">
            <?php echo wp_kses_post(wpautop($awards_text)); ?>
        </div>
        <div class="bg-primary mx-auto max-w-[860px] rounded-xl relative">
            <div class="w-[95%] md:w-[98%] h-3 rounded-t-xl -top-3 left-1/2 -translate-x-1/2 bg-primary absolute"></div>
            <div class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-primary absolute">
            </div>
            <div class="py-14 px-8">
                <div class="awards-slider">
                    <?php
                    $awards_query = new WP_Query(array(
                        'post_type' => 'award',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));

                    if ($awards_query->have_posts()):
                        while ($awards_query->have_posts()):
                            $awards_query->the_post();
                            ?>
                            <div class="flex flex-col h-[400px] justify-center items-center text-center">
                                <div class="flex justify-center">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'object-contain h-[300px]')); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url($awards_fallback_image); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <h5 class="text-gold mt-4"><?php the_title(); ?></h5>
                                <div class="body text-beige max-w-[385px] mx-auto">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="relative py-40 h-screen flex flex-col justify-center">
    <div class="absolute inset-0 h-[120%] -top-0 left-0" data-scroll data-scroll-speed="2">
        <img src="<?php echo esc_url($session_background); ?>" class="w-full h-full object-cover" alt="" />
    </div>
    <div class="container relative z-10 text-center">
        <h4 class="text-gold mb-8 max-w-[383px] mx-auto">
            <?php echo esc_html($session_title); ?>
        </h4>
        <div class="body text-beige max-w-[424px] mx-auto mb-8">
            <?php echo wp_kses_post(wpautop($session_text)); ?>
        </div>
        <a href="<?php echo esc_url($session_link['url']); ?>" target="<?php echo esc_attr($session_link['target']); ?>"
            class="button bg-gold !px-4">
            <?php echo esc_html($session_link['title']); ?>
        </a>
    </div>
</section>


<script>
    $(document).ready(function () {
        $('.senses-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            autoplay: false,
            autoplaySpeed: 3000,
            fade: true,
            appendArrows: $('.senses-nav'),
            appendDots: $('.senses-nav'),
            prevArrow: '<button type="button" class="slick-prev-custom mr-4"><img src="<?php echo esc_url($slider_arrow_icon); ?>" class="w-2.5 h-2.5 rotate-180"></button>',
            nextArrow: '<button type="button" class="slick-next-custom ml-4"><img src="<?php echo esc_url($slider_arrow_icon); ?>" class="w-2.5 h-2.5"></button>',
        });

        $('.facility-slider').slick({
            dots: true,
            infinite: true,
            autoplay: false,
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 1,
            fade: true,
            adaptiveHeight: false,
            appendArrows: $('.facility-nav'),
            appendDots: $('.facility-nav'),
            prevArrow: '<button type="button" class="slick-prev-custom mr-4"><img src="<?php echo esc_url($slider_arrow_icon); ?>" class="w-2.5 h-2.5 rotate-180"></button>',
            nextArrow: '<button type="button" class="slick-next-custom ml-4"><img src="<?php echo esc_url($slider_arrow_icon); ?>" class="w-2.5 h-2.5"></button>',
        });

        $('.awards-slider').slick({
            dots: true,
            infinite: true,
            autoplay: false,
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: '<button type="button" class="slick-prev before:hidden !-left-2"><img src="<?php echo esc_url($awards_arrow_icon); ?>" class="w-6 h-6 rotate-180"></button>',
            nextArrow: '<button type="button" class="slick-next before:hidden !-right-2"><img src="<?php echo esc_url($awards_arrow_icon); ?>" class="w-6 h-6"></button>',
        });

        const sliderObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $(entry.target).slick('slickPlay');
                } else {
                    $(entry.target).slick('slickPause');
                }
            });
        }, {
            threshold: 0.2
        });

        $('.senses-slider, .facility-slider, .awards-slider').each(function () {
            sliderObserver.observe(this);
        });

        let timelineInterval;
        const timelineItems = $('.timeline-item');

        function nextTimelineItem() {
            const current = $('.timeline-item.active');
            let next = current.next('.timeline-item');
            if (next.length === 0) {
                next = timelineItems.first();
            }
            triggerTimelineItem(next);
        }

        function triggerTimelineItem($item) {
            if ($item.hasClass('active')) return;

            $('.timeline-item').removeClass('active');
            $item.addClass('active');
            $('.timeline-content').not($item.find('.timeline-content')).slideUp(400);
            $item.find('.timeline-content').slideDown(400);
        }

        $('.timeline-item').on('click', function () {
            triggerTimelineItem($(this));
            clearInterval(timelineInterval);
            timelineInterval = setInterval(nextTimelineItem, 3000);
        });

        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    clearInterval(timelineInterval);
                    timelineInterval = setInterval(nextTimelineItem, 3000);
                } else {
                    clearInterval(timelineInterval);
                }
            });
        }, {
            threshold: 0.2
        });

        const timelineSection = document.querySelector('#timeline');
        if (timelineSection) {
            timelineObserver.observe(timelineSection);
        }

        const $container = $('.draggable-container');
        let isDown = false;
        let startX;
        let scrollLeft;

        $container.on('dragstart', function (e) {
            e.preventDefault();
        });

        $container.on('mousedown', function (e) {
            isDown = true;
            $container.addClass('dragging');
            startX = e.pageX - $container.offset().left;
            scrollLeft = $container.scrollLeft();
        });

        $(window).on('mouseup', function () {
            isDown = false;
            $container.removeClass('dragging');
        });

        $container.on('mousemove', function (e) {
            if (!isDown) return;
            e.preventDefault();

            const x = e.pageX - $container.offset().left;
            const walk = (x - startX) * 1;

            $container.scrollLeft(scrollLeft - walk);
        });
    });
</script>


<?php get_footer(); ?>