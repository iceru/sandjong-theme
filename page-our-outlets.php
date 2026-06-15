<?php
/**
 * Template Name: Our Outlets
 */

get_header();

$theme_uri = get_template_directory_uri();

if (!function_exists('sandjong_outlets_field')) {
    function sandjong_outlets_field($name, $fallback = '')
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

if (!function_exists('sandjong_outlets_image_value_url')) {
    function sandjong_outlets_image_value_url($image, $fallback = '', $size = 'full')
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

if (!function_exists('sandjong_outlets_image_url')) {
    function sandjong_outlets_image_url($name, $fallback = '', $size = 'full')
    {
        return sandjong_outlets_image_value_url(sandjong_outlets_field($name), $fallback, $size);
    }
}

$hero_background = sandjong_outlets_image_url('outlets_hero_background', $theme_uri . '/images/webp/bg-sanctuary.webp');
$hero_title = sandjong_outlets_field('outlets_hero_title', 'Sandjong Wellness by Amerta');
$hero_text = sandjong_outlets_field('outlets_hero_text', 'One soul, two expressions. Each rooted in the land it stands on. Every Sandjong sanctuary reflects its surroundings and though distinct in character, all share one heart: to offer moments of pause, presence, and cultural connection. Two destinations, two stories, one philosophy of care.');

$location_label = sandjong_outlets_field('outlets_location_label', 'Location');
$directions_button_text = sandjong_outlets_field('outlets_directions_button_text', 'Directions');
$perfect_for_label = sandjong_outlets_field('outlets_perfect_for_label', 'Perfect for');
$menu_label = sandjong_outlets_field('outlets_menu_label', 'Menu');
$menu_button_text = sandjong_outlets_field('outlets_menu_button_text', 'Menu');
$experience_label = sandjong_outlets_field('outlets_experience_label', 'Experience');
$concept_essence_label = sandjong_outlets_field('outlets_concept_essence_label', 'Concept Essence');
$branch_fallback_image = sandjong_outlets_image_url('outlets_branch_fallback_image', '');

$closing_background = sandjong_outlets_image_url('outlets_closing_background', $theme_uri . '/images/webp/bg-journey.webp');
$closing_title = sandjong_outlets_field('outlets_closing_title', 'Living Stories of Our Sanctuaries');
$closing_text = sandjong_outlets_field('outlets_closing_text', 'Each Sandjong sanctuary is a chapter of our journey, a celebration of local culture, and a place shaped for stillness. As we continue to grow, we hold to one promise: to stay rooted in heritage, and to welcome you with the same gentle grace every single time.');

$slider_prev_arrow = sandjong_outlets_image_url('outlets_slider_prev_arrow', $theme_uri . '/images/package-left.png');
$slider_next_arrow = sandjong_outlets_image_url('outlets_slider_next_arrow', $theme_uri . '/images/package-right.png');
?>
<style>
    #branches [id] {
        scroll-margin-top: 120px;
    }
</style>
<section class="h-screen w-full">
    <div class="absolute w-full h-[120%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img src="<?php echo esc_url($hero_background); ?>" class="w-full h-full object-cover" alt="">
    </div>
    <div class="container relative z-10 flex flex-col h-full text-beige items-center justify-center text-center">
        <h4 class="mb-6">
            <?php echo esc_html($hero_title); ?>
        </h4>
        <div class="body max-w-[595px]">
            <?php echo wp_kses_post(wpautop($hero_text)); ?>
        </div>
    </div>
</section>

<section class="bg-beige relative z-10 py-28" id="branches">
    <div class="container space-y-20 md:space-y-32">
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
                <div class="grid md:grid-cols-2 gap-10 md:gap-20" id="<?php echo esc_attr(get_post_field('post_name')); ?>">
                    <div class="order-2 md:order-1">
                        <h4 class="text-gold mb-4">
                            <?php the_title(); ?>
                        </h4>
                        <?php $subtitle = function_exists('get_field') ? get_field('subtitle') : ''; ?>
                        <?php if ($subtitle): ?>
                            <p class="body text-primary mb-12">
                                <?php echo esc_html($subtitle); ?>
                            </p>
                        <?php endif; ?>
                        <div class="body mb-10 md:mb-16">
                            <?php the_content(); ?>
                        </div>
                        <div class="grid md:grid-cols-3 text-primary gap-8 gap-y-9 md:gap-y-16">
                            <div>
                                <p class="font-bold body mb-1">
                                    <?php echo esc_html($location_label); ?>
                                </p>
                                <p class="body mb-5">
                                    <?php echo wp_kses_post(get_field('location')); ?>
                                </p>
                                <?php $map_link = function_exists('get_field') ? get_field('map_link') : '';
                                if ($map_link): ?>
                                    <div>
                                        <a href="<?php echo esc_url($map_link); ?>" target="_blank"
                                            class="button bg-primary !px-8">
                                            <?php echo esc_html($directions_button_text); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    <?php echo esc_html($perfect_for_label); ?>
                                </p>
                                <p class="body max-w-[143px]">
                                    <?php echo wp_kses_post(get_field('perfect_for')); ?>
                                </p>
                            </div>
                            <div>
                                <p class="font-bold body mb-4">
                                    <?php echo esc_html($menu_label); ?>
                                </p>
                                <?php $menu = function_exists('get_field') ? get_field('menu') : '';
                                if ($menu): ?>
                                    <a href="<?php echo esc_url($menu); ?>" target="_blank" class="button bg-gold !px-6">
                                        <?php echo esc_html($menu_button_text); ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    <?php echo esc_html($experience_label); ?>
                                </p>
                                <p class="body max-w-[143px]">
                                    <?php echo wp_kses_post(get_field('experience')); ?>
                                </p>
                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    <?php echo esc_html($concept_essence_label); ?>
                                </p>
                                <p class="body max-w-[143px]">
                                    <?php echo wp_kses_post(get_field('concept_essence')); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 md:order-2">
                        <?php
                        $branch_images = function_exists('get_field') ? get_field('branch_images') : '';
                        if ($branch_images): ?>
                            <div class="sliders mb-12">
                                <?php foreach ($branch_images as $image_post):
                                    $img_id = is_object($image_post) ? $image_post->ID : $image_post;
                                    $img_url = get_the_post_thumbnail_url($img_id, 'large');
                                    if (!$img_url) {
                                        $img_url = wp_get_attachment_image_url($img_id, 'large');
                                    }

                                    if ($img_url):
                                        ?>
                                        <div class="h-[242px] md:h-[478px]">
                                            <img src="<?php echo esc_url($img_url); ?>" class="w-full h-full object-cover rounded-lg"
                                                alt="<?php echo esc_attr(get_the_title($img_id)); ?>">
                                        </div>
                                        <?php
                                    endif;
                                endforeach; ?>
                            </div>
                        <?php elseif (has_post_thumbnail()): ?>
                            <div class="h-[242px] md:h-[478px] mb-12">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                                    class="w-full h-full object-cover rounded-lg" alt="<?php the_title_attribute(); ?>">
                            </div>
                        <?php elseif ($branch_fallback_image): ?>
                            <div class="h-[242px] md:h-[478px] mb-12">
                                <img src="<?php echo esc_url($branch_fallback_image); ?>"
                                    class="w-full h-full object-cover rounded-lg" alt="">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<section class="h-screen flex flex-col justify-center relative">
    <div class="absolute w-full h-[120%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img src="<?php echo esc_url($closing_background); ?>" class="w-full h-full object-cover" alt="">
    </div>
    <div class="container flex flex-col justify-center items-center h-full relative z-10 text-center">
        <h4 class="text-gold mb-4"><?php echo esc_html($closing_title); ?></h4>
        <div class="body max-w-[587px] text-beige">
            <?php echo wp_kses_post(wpautop($closing_text)); ?>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        $('.sliders').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><img src="<?php echo esc_url($slider_prev_arrow); ?>" alt="Previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="<?php echo esc_url($slider_next_arrow); ?>" alt="Next"></button>',
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            adaptiveHeight: false
        });
    });
</script>
<?php get_footer(); ?>
