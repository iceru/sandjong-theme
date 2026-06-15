<?php
/**
 * Template Name: Our Treatment
 */

get_header();

$theme_uri = get_template_directory_uri();

if (!function_exists('sandjong_treatment_field')) {
    function sandjong_treatment_field($name, $fallback = '')
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

if (!function_exists('sandjong_treatment_image_value_url')) {
    function sandjong_treatment_image_value_url($image, $fallback = '', $size = 'full')
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

if (!function_exists('sandjong_treatment_image_url')) {
    function sandjong_treatment_image_url($name, $fallback = '', $size = 'full')
    {
        return sandjong_treatment_image_value_url(sandjong_treatment_field($name), $fallback, $size);
    }
}

$hero_background = sandjong_treatment_image_url('treatment_hero_background', $theme_uri . '/images/webp/bg-signature.webp');
$hero_title = sandjong_treatment_field('treatment_hero_title', 'Crafted with Care, Offered with Meaning.');
$hero_text = sandjong_treatment_field('treatment_hero_text', 'Every ritual at Sandjong is an invitation to return, not to escape. To return to your senses. To be present in your own skin. As you are.');

$signature_tab_label = sandjong_treatment_field('treatment_signature_tab_label', 'Signature Treatment');
$package_tab_label = sandjong_treatment_field('treatment_package_tab_label', 'Package Treatment');
$simple_tab_label = sandjong_treatment_field('treatment_simple_tab_label', 'Simple Touch');

$signature_panel_background = sandjong_treatment_image_url('treatment_signature_panel_background', $theme_uri . '/images/webp/bg-signature-2.webp');
$signature_panel_title = sandjong_treatment_field('treatment_signature_panel_title', 'Refined Rituals for Rest, Recovery, and Renewal.');
$signature_panel_text = sandjong_treatment_field('treatment_signature_panel_text', 'A collection of exclusive treatments curated to meet the changing needs of your body, mind, and energy. Each experience is designed with intention—from calming stress to celebrating special occasions—with herbal elements and cultural touches drawn from Sandjong’s apothecary roots.<br><br>Perfect for: those seeking tailored, elevated care with a sense of purpose.');

$package_panel_background = sandjong_treatment_image_url('treatment_package_panel_background', $theme_uri . '/images/webp/package.webp');
$package_panel_title = sandjong_treatment_field('treatment_package_panel_title', 'A Complete Journey, Harmonized from Head to Toe');
$package_panel_text = sandjong_treatment_field('treatment_package_panel_text', 'Each package combines multiple treatments into a cohesive flow that offers a full-body experience to restore your energy, sooth your senses, and honors your time. From foot rituals to body scrubs, massages, and facials, this is your invitation to be completely cared for.<br><br>Perfect for: those looking for extended, full-journey indulgence or shared wellness experiences.');

$simple_panel_background = sandjong_treatment_image_url('treatment_simple_panel_background', $theme_uri . '/images/webp/simple.webp');
$simple_panel_title = sandjong_treatment_field('treatment_simple_panel_title', 'Small Rituals. Lasting Calm.');
$simple_panel_text = sandjong_treatment_field('treatment_simple_panel_text', 'Even the simplest touch, when offered with care, can bring clarity and calm. These shorter treatments offer targeted relief, like herbal compresses, focused massage, or scalp rituals for moments when you need a pause, not a full escape.<br><br>Perfect for: those who need a gentle reset in the midst of a full day');

$card_fallback_image = sandjong_treatment_image_url('treatment_card_fallback_image', $theme_uri . '/images/signature-1.png');
$simple_fallback_image = sandjong_treatment_image_url('treatment_simple_fallback_image', $theme_uri . '/images/acu.png');
$timer_icon = sandjong_treatment_image_url('treatment_timer_icon', $theme_uri . '/images/icons/timer.png');
$duration_suffix = sandjong_treatment_field('treatment_duration_suffix', 'Minutes');
$simple_duration_suffix = sandjong_treatment_field('treatment_simple_duration_suffix', '’');
$slider_prev_arrow = sandjong_treatment_image_url('treatment_slider_prev_arrow', $theme_uri . '/images/package-left.png');
$slider_next_arrow = sandjong_treatment_image_url('treatment_slider_next_arrow', $theme_uri . '/images/package-right.png');
?>

<section class="relative h-screen flex flex-col justify-center items-center">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover" src="<?php echo esc_url($hero_background); ?>" alt="">
    </div>
    <h4 class="text-beige text-center relative z-10 max-w-[312px] mx-auto mt-11 mb-7">
        <?php echo esc_html($hero_title); ?>
    </h4>
    <div class="body text-center max-w-[432px] px-4 mx-auto relative z-10 text-beige">
        <?php echo wp_kses_post(wpautop($hero_text)); ?>
    </div>
</section>

<section class="bg-beige py-16 relative z-10">
    <div class="container">
        <div
            class="flex border-terracota/60 border-b mb-9 space-x-16 md:space-x-0 overflow-auto whitespace-nowrap no-scrollbar">
            <div class="tab-trigger active flex justify-center w-full" data-target="#signature">
                <h5 class="pb-7 text-terracota text-center whitespace-nowrap">
                    <?php echo esc_html($signature_tab_label); ?>
                </h5>
            </div>
            <div class="tab-trigger flex justify-center w-full" data-target="#package">
                <h5 class="pb-7 text-terracota text-center whitespace-nowrap">
                    <?php echo esc_html($package_tab_label); ?>
                </h5>
            </div>
            <div class="tab-trigger flex justify-center w-full" data-target="#simple">
                <h5 class="pb-7 text-terracota text-center whitespace-nowrap">
                    <?php echo esc_html($simple_tab_label); ?>
                </h5>
            </div>
        </div>
        <div id="signature" class="tab-content">
            <div class="rounded-lg relative flex flex-col justify-end p-6 md:p-14 min-h-[658px] md:min-h-[552px] mb-11">
                <div class="absolute w-full h-full left-0 top-0">
                    <img class="rounded-lg w-full h-full object-cover" src="<?php echo esc_url($signature_panel_background); ?>" alt="">
                </div>
                <div class="text-beige relative z-10">
                    <h4 class="max-w-[356px] mb-8">
                        <?php echo esc_html($signature_panel_title); ?>
                    </h4>
                    <div class="max-w-[469px]">
                        <?php echo wp_kses_post(wpautop($signature_panel_text)); ?>
                    </div>
                </div>
            </div>
            <div class="signature-sliders">
                <?php
                $args = array(
                    'post_type' => 'signature-treatment',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post();
                        $duration = function_exists('get_field') ? get_field('duration') : '';
                        ?>
                        <div class="md:pr-6 py-5">
                            <div class="bg-[#F8E6D2] px-4 md:px-6 py-2 grid md:grid-cols-2 relative rounded-xl gap-6 md:gap-12">
                                <div
                                    class="w-[94%] md:w-[98%] h-3 md:h-4 rounded-t-xl -top-3 md:-top-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute -z-10">
                                </div>
                                <div
                                    class="w-[94%] md:w-[98%] h-3 md:h-4 rounded-b-xl -bottom-3 md:-bottom-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute -z-10">
                                </div>
                                <div>
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $card_fallback_image); ?>"
                                        alt="<?php the_title_attribute(); ?>" class="">
                                </div>
                                <div class="flex flex-col justify-between px-3 md:px-0">
                                    <div class="mb-14 md:mb-0">
                                        <h5 class="text-primary mb-4 md:mb-11 md:mt-9">
                                            <?php the_title(); ?>
                                        </h5>
                                        <div class="max-w-[394px]">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <?php if ($duration): ?>
                                            <div
                                                class="mb-2 md:mb-7 inline-flex items-center space-x-2 rounded-lg py-1 px-1.5 bg-gold/20 text-gold">
                                                <img src="<?php echo esc_url($timer_icon); ?>" class="object-contain w-4 h-4" alt="">
                                                <span><?php echo esc_html($duration); ?> <?php echo esc_html($duration_suffix); ?></span>
                                            </div>
                                        <?php endif; ?>
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
        </div>
        <div id="package" class="tab-content hidden">
            <div
                class="rounded-lg relative flex flex-col justify-end p-6 md:p-14 min-h-[658px] md:min-h-[552px] mb-11">
                <div class="absolute w-full h-full left-0 top-0">
                    <img class="rounded-lg w-full h-full object-cover" src="<?php echo esc_url($package_panel_background); ?>" alt="">
                </div>
                <div class="text-beige relative z-10">
                    <h4 class="max-w-[356px] mb-8">
                        <?php echo esc_html($package_panel_title); ?>
                    </h4>
                    <div class="max-w-[469px]">
                        <?php echo wp_kses_post(wpautop($package_panel_text)); ?>
                    </div>
                </div>
            </div>
            <div id="package-treaments">
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'treatment-category',
                    'hide_empty' => true,
                    'orderby' => 'slug',
                    'order' => 'ASC',
                ));

                if (!is_wp_error($categories)):
                    foreach ($categories as $category):
                        ?>
                        <div class="mb-14">
                            <h5 class="text-terracota mb-4"><?php echo esc_html($category->name); ?></h5>
                            <?php if ($category->description): ?>
                                <p class="body text-primary mb-10">
                                    <?php echo wp_kses_post($category->description); ?>
                                </p>
                            <?php endif; ?>

                            <div class="package-sliders">
                                <?php
                                $p_args = array(
                                    'post_type' => 'package-treatment',
                                    'posts_per_page' => -1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'treatment-category',
                                            'field' => 'term_id',
                                            'terms' => $category->term_id,
                                        ),
                                    ),
                                    'orderby' => 'menu_order',
                                    'order' => 'ASC',
                                );
                                $p_query = new WP_Query($p_args);
                                if ($p_query->have_posts()):
                                    while ($p_query->have_posts()):
                                        $p_query->the_post();
                                        $subtitle = function_exists('get_field') ? get_field('subtitle') : '';
                                        $duration = function_exists('get_field') ? get_field('duration') : '';
                                        ?>
                                        <div class="md:pr-6 py-5">
                                            <div
                                                class="bg-[#F8E6D2] px-4 md:px-6 py-2 grid md:grid-cols-2 relative rounded-xl gap-6 md:gap-12">
                                                <div
                                                    class="w-[94%] md:w-[98%] h-3 md:h-4 rounded-t-xl -top-3 md:-top-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute -z-10">
                                                </div>
                                                <div
                                                    class="w-[94%] md:w-[98%] h-3 md:h-4 rounded-b-xl -bottom-3 md:-bottom-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute -z-10">
                                                </div>
                                                <div>
                                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $card_fallback_image); ?>"
                                                        alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover rounded-lg">
                                                </div>
                                                <div class="flex flex-col justify-between px-3 md:px-0">
                                                    <div class="mb-14 md:mb-0">
                                                        <?php if ($subtitle): ?>
                                                            <h6 class="text-gold mb-2 md:mt-9">
                                                                <?php echo esc_html($subtitle); ?>
                                                            </h6>
                                                        <?php endif; ?>
                                                        <h5 class="text-primary mb-4 md:mb-11 <?php echo $subtitle ? '' : 'md:mt-9'; ?>">
                                                            <?php the_title(); ?>
                                                        </h5>
                                                        <div class="max-w-[394px]">
                                                            <?php the_content(); ?>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <?php if ($duration): ?>
                                                            <div
                                                                class="mb-2 md:mb-7 inline-flex items-center space-x-2 rounded-lg py-1 px-1.5 bg-gold/20 text-gold">
                                                                <img src="<?php echo esc_url($timer_icon); ?>" class="object-contain w-4 h-4" alt="">
                                                                <span><?php echo esc_html($duration); ?> <?php echo esc_html($duration_suffix); ?></span>
                                                            </div>
                                                        <?php endif; ?>
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
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <div id="simple" class="tab-content hidden">
            <div class="rounded-lg relative flex flex-col justify-end p-6 md:p-14 min-h-[658px] md:min-h-[552px] mb-16">
                <div class="absolute w-full h-full left-0 top-0">
                    <img class="rounded-lg w-full h-full object-cover" src="<?php echo esc_url($simple_panel_background); ?>" alt="">
                </div>
                <div class="text-beige relative z-10">
                    <h4 class="max-w-[356px] mb-8">
                        <?php echo esc_html($simple_panel_title); ?>
                    </h4>
                    <div class="max-w-[469px]">
                        <?php echo wp_kses_post(wpautop($simple_panel_text)); ?>
                    </div>
                </div>
            </div>
            <div id="simple-touch">
                <div class="grid lg:grid-cols-6 gap-x-6 gap-y-10">
                    <?php
                    $s_args = array(
                        'post_type' => 'simple-touch',
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );
                    $s_query = new WP_Query($s_args);
                    if ($s_query->have_posts()):
                        $s_count = 0;
                        while ($s_query->have_posts()):
                            $s_query->the_post();
                            $s_count++;
                            $col_span = ($s_count <= 2) ? 'lg:col-span-3' : 'lg:col-span-2';
                            $duration = function_exists('get_field') ? get_field('duration') : '';
                            ?>
                            <div class="flex flex-col <?php echo esc_attr($col_span); ?>">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $simple_fallback_image); ?>"
                                    class="rounded-lg w-full h-[234px] md:h-[384px] object-cover mb-5"
                                    alt="<?php the_title_attribute(); ?>">
                                <div class="flex justify-between mb-5">
                                    <h5 class="text-primary"><?php the_title(); ?></h5>
                                    <?php if ($duration): ?>
                                        <div
                                            class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                            <img src="<?php echo esc_url($timer_icon); ?>" class="w-4 h-4 object-contain" alt="">
                                            <span><?php echo esc_html($duration); ?><?php echo esc_html($simple_duration_suffix); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="prose prose-sm max-w-none">
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

<script>
    $(document).ready(function () {
        $('.signature-sliders, .package-sliders').slick({
            infinite: false,
            slidesToShow: 1.25,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><img src="<?php echo esc_url($slider_prev_arrow); ?>" alt="Previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="<?php echo esc_url($slider_next_arrow); ?>" alt="Next"></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        $('.tab-trigger').on('click', function () {
            if ($(this).hasClass('active')) return;

            $('.tab-trigger').removeClass('active');
            $(this).addClass('active');

            const target = $(this).data('target');

            $('.tab-content').addClass('hidden');

            $(target).removeClass('hidden').hide().fadeIn(500, function () {
                $(this).find('.signature-sliders, .package-sliders').slick('setPosition');
            });
        });
    });
</script>
<?php get_footer(); ?>
