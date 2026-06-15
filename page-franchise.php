<?php
/**
 * Template Name: Franchise
 */

get_header();

$theme_uri = get_template_directory_uri();

if (!function_exists('sandjong_franchise_field')) {
    function sandjong_franchise_field($name, $fallback = '')
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

if (!function_exists('sandjong_franchise_image_value_url')) {
    function sandjong_franchise_image_value_url($image, $fallback = '', $size = 'full')
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

if (!function_exists('sandjong_franchise_image_url')) {
    function sandjong_franchise_image_url($name, $fallback = '', $size = 'full')
    {
        return sandjong_franchise_image_value_url(sandjong_franchise_field($name), $fallback, $size);
    }
}

$hero_background = sandjong_franchise_image_url('franchise_hero_background', $theme_uri . '/images/expand/hero.webp');
$hero_title = sandjong_franchise_field('franchise_hero_title', 'A partnership rooted in care, guided by heritage');
$hero_text = sandjong_franchise_field('franchise_hero_text', 'In the world of wellness, what is genuine always moves gently from within. Through our Spa Operation and Franchise Partnerships, Sandjong welcomes you to build spaces that honor tradition while embracing the needs of today. With the guidance of Amerta Jiwa Indonesia, we offer cultural depth, thoughtful service, and seasoned expertise to help you cultivate a sanctuary of your own, in any place you choose.');

$operation_title = sandjong_franchise_field('franchise_operation_title', 'Spa Operation');
$operation_subtitle = sandjong_franchise_field('franchise_operation_subtitle', 'Let us carry the rhythm of Sandjong into your space.');
$operation_text = sandjong_franchise_field('franchise_operation_text', "Bringing a spa to life requires more than a good idea, as it takes guidance, systems, and soul. At Sandjong, through the expertise of Amerta Jiwa Indonesia, we offer a full suite of operational services to help you create or elevate your wellness experience.\n\nWhether you're a hotel, residence, or lifestyle destination, we offer complete support: from concept to treatment, from therapist to guest. Every detail is shaped with intention, designed to reflect the essence of Sandjong, where healing is deeply rooted in tradition.");
$operation_image = sandjong_franchise_image_url('franchise_operation_image', $theme_uri . '/images/expand/spa-operation.webp');

$services_background = sandjong_franchise_image_url('franchise_services_background', $theme_uri . '/images/webp/bg-green.webp');
$services_title = sandjong_franchise_field('franchise_services_title', 'Our Services');
$services_fallback_image = sandjong_franchise_image_url('franchise_services_fallback_image', $theme_uri . '/images/expand/our-services.webp');

$franchise_intro_background = sandjong_franchise_image_url('franchise_intro_background', $theme_uri . '/images/webp/bg-timeline.webp');
$franchise_intro_title = sandjong_franchise_field('franchise_intro_title', 'For Franchise');
$franchise_intro_subtitle = sandjong_franchise_field('franchise_intro_subtitle', 'Own a Sandjong sanctuary, guided by our legacy.');
$franchise_intro_text = sandjong_franchise_field('franchise_intro_text', 'We offer the opportunity to open a Sandjong spa through a boutique franchise model that’s designed for those who believe in the power of culture-based wellness and wish to bring it to new communities.');

$benefits_intro = sandjong_franchise_field('franchise_benefits_intro', 'Each Sandjong franchise is thoughtfully curated: maintaining our standards of care, heritage, and sensory experience, while allowing your space to reflect the spirit of its surroundings.');
$benefits = sandjong_franchise_field('franchise_benefits', array(
    array('icon' => $theme_uri . '/images/icons/certificate.png', 'text' => 'Full franchise license and rights to the Sandjong brand'),
    array('icon' => $theme_uri . '/images/icons/design.png', 'text' => 'Design guidance & spatial concept development'),
    array('icon' => $theme_uri . '/images/icons/training.png', 'text' => 'Training and refreshment programs for therapists'),
    array('icon' => $theme_uri . '/images/icons/user-manual.png', 'text' => 'Service manuals, rituals, SOPs, and guest experience protocols'),
    array('icon' => $theme_uri . '/images/icons/presentation.png', 'text' => 'Marketing materials, launch support, and brand campaigns'),
    array('icon' => $theme_uri . '/images/icons/guarantee-2.png', 'text' => 'Continuous operational consulting and quality control'),
));

$contact_background = sandjong_franchise_image_url('franchise_contact_background', $theme_uri . '/images/webp/bg-beige.webp');
$contact_title = sandjong_franchise_field('franchise_contact_title', 'Let Us Build Serenity, Together');
$contact_text = sandjong_franchise_field('franchise_contact_text', 'If you feel aligned with our purpose, we welcome you into this shared journey to create sanctuaries that heal, restore, and carry the richness of Indonesian culture forward.');
$contact_heading = sandjong_franchise_field('franchise_contact_heading', 'Inquire with us');
$contact_company = sandjong_franchise_field('franchise_contact_company', 'Sandjong Wellness by Amerta Jiwa Indonesia');
$contact_location_title = sandjong_franchise_field('franchise_contact_location_title', 'Episode Hotel Gading Serpong');
$contact_address = sandjong_franchise_field('franchise_contact_address', '2nd Floor, Jl. Gading Serpong Boulevard Barat S No. 6-7 Pakulonan Barat Tangerang — 15810');
$contact_items = sandjong_franchise_field('franchise_contact_items', array(
    array('label' => 'M', 'text' => '+62 818 77 4915', 'url' => 'tel:+62818774915'),
    array('label' => 'M', 'text' => '+62 21 3037 6088', 'url' => 'tel:+622130376088'),
    array('label' => 'E', 'text' => 'info.sandjongspa@amertajiwa.com', 'url' => 'mailto:info.sandjongspa@amertajiwa.com'),
));
$contact_shortcode = sandjong_franchise_field('franchise_contact_shortcode', '[contact-form-7 id="7318e68" title="Contact form 1"]');
?>
<style>
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

<section class="relative h-screen flex flex-col justify-center items-center">
    <div class="w-full h-[110%] left-0 -top-[10%] absolute" data-scroll data-scroll-speed="2">
        <img src="<?php echo esc_url($hero_background); ?>" class="w-full object-cover h-full" alt="">
    </div>
    <div class="container flex flex-col justify-end h-full pb-10 md:pb-28 relative z-10 w-full">
        <div class="grid md:grid-cols-2 w-full">
            <h4 class="text-white md:w-[366px] mb-8 md:mb-0"><?php echo esc_html($hero_title); ?></h4>
            <div class="text-white md:w-[591px]"><?php echo wp_kses_post(wpautop($hero_text)); ?></div>
        </div>
    </div>
</section>

<section class="bg-beige py-16 relative z-10 min-h-screen flex flex-col justify-center">
    <div class="container grid md:grid-cols-2 items-center">
        <div class="mb-20 md:mb-0">
            <h4 class="text-terracota mb-6"><?php echo esc_html($operation_title); ?></h4>
            <div class="body mb-10 md:mb-16"><?php echo wp_kses_post(wpautop($operation_subtitle)); ?></div>
            <div class="body max-w-[440px]"><?php echo wp_kses_post(wpautop($operation_text)); ?></div>
        </div>
        <div>
            <img src="<?php echo esc_url($operation_image); ?>" alt="">
        </div>
    </div>
</section>

<section class="bg-primary py-20 relative z-10 flex flex-col justify-center" id="services">
    <div class="absolute w-full h-full left-0 top-0">
        <img src="<?php echo esc_url($services_background); ?>" class="w-full h-full object-cover" alt="">
    </div>
    <div class="container relative z-10">
        <h3 class="text-gold mb-11"><?php echo esc_html($services_title); ?></h3>
        <?php
        $services = new WP_Query(array(
            'post_type' => 'services',
            'posts_per_page' => -1,
            'order' => 'ASC'
        ));

        if ($services->have_posts()):
            ?>
            <div class="grid md:grid-cols-2 gap-14 md:gap-32">
                <div class="relative">
                    <?php while ($services->have_posts()):
                        $services->the_post();
                        $active_class = ($services->current_post === 0) ? '' : 'hidden';
                        ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : $services_fallback_image); ?>"
                            class="service-image masked-facility w-full h-auto object-cover <?php echo esc_attr($active_class); ?>"
                            data-id="service-<?php echo esc_attr(get_the_ID()); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endwhile; ?>
                </div>
                <div class="overflow-auto">
                    <div class="flex border-b border-beige space-x-16 text-beige mb-14 overflow-auto whitespace-nowrap no-scrollbar"
                        id="tabs">
                        <?php $services->rewind_posts(); ?>
                        <?php while ($services->have_posts()):
                            $services->the_post();
                            $opacity_class = ($services->current_post === 0) ? 'opacity-100 border-b-white' : 'opacity-40 border-b-transparent';
                            $tab_name = function_exists('get_field') ? get_field('tab_name') : '';
                            ?>
                            <div class="cursor-pointer pb-5 border-b-2 border-transparent service-tab transition-opacity duration-300 <?php echo esc_attr($opacity_class); ?>"
                                data-target="service-<?php echo esc_attr(get_the_ID()); ?>">
                                <h5 class="whitespace-nowrap">
                                    <?php echo esc_html($tab_name ?: get_the_title()); ?>
                                </h5>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div>
                        <?php $services->rewind_posts(); ?>
                        <?php while ($services->have_posts()):
                            $services->the_post();
                            $active_class = ($services->current_post === 0) ? '' : 'hidden';
                            $subtitle = function_exists('get_field') ? get_field('subtitle') : '';
                            ?>
                            <div class="service-content <?php echo esc_attr($active_class); ?>" id="service-<?php echo esc_attr(get_the_ID()); ?>">
                                <h4 class="text-gold mb-2"><?php the_title(); ?></h4>
                                <?php if ($subtitle): ?>
                                    <p class="text-beige body mb-16"><?php echo esc_html($subtitle); ?></p>
                                <?php endif; ?>
                                <div class="body text-beige w-full md:max-w-[430px] mb-16">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata();
        endif; ?>
    </div>
</section>
<script>
    jQuery(document).ready(function ($) {
        $('.service-tab').click(function () {
            var targetId = $(this).data('target');

            $('.service-tab').removeClass('opacity-100 border-b-white').addClass('opacity-40 border-b-transparent');
            $(this).removeClass('opacity-40 border-b-transparent').addClass('opacity-100 border-b-white');

            $('.service-content').addClass('hidden');
            $('#' + targetId).removeClass('hidden');

            $('.service-image').addClass('hidden');
            $('.service-image[data-id="' + targetId + '"]').removeClass('hidden');
        });
    });
</script>

<section class="relative h-screen flex flex-col justify-center">
    <div class="absolute w-full h-[130%] left-0 -top-[20%]" data-scroll data-scroll-speed="2">
        <img src="<?php echo esc_url($franchise_intro_background); ?>" class="w-full h-full object-cover" alt="">
    </div>
    <div class="container flex flex-col justify-center items-center text-center py-36 relative z-10">
        <h3 class="text-gold mb-4"><?php echo esc_html($franchise_intro_title); ?></h3>
        <div class="text-beige body mb-9"><?php echo wp_kses_post(wpautop($franchise_intro_subtitle)); ?></div>
        <div class="body text-beige max-w-[611px]"><?php echo wp_kses_post(wpautop($franchise_intro_text)); ?></div>
    </div>
</section>

<section class="bg-beige py-16 md:py-32 relative z-10">
    <div class="container">
        <div class="text-primary max-w-[600px] mb-12">
            <h5><?php echo wp_kses_post($benefits_intro); ?></h5>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 gap-y-12 md:gap-12 md:gap-x-20 md:max-w-[80%]">
            <?php foreach ($benefits as $benefit): ?>
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo esc_url(sandjong_franchise_image_value_url($benefit['icon'] ?? '')); ?>"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">
                        <?php echo esc_html($benefit['text'] ?? ''); ?>
                    </h5>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-beige py-24 relative min-h-screen">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img src="<?php echo esc_url($contact_background); ?>" class="w-full h-full object-cover" alt="">
    </div>
    <div class="container grid md:grid-cols-2 relative z-10">
        <div class="text-primary">
            <h4 class="text-terracota mb-6"><?php echo esc_html($contact_title); ?></h4>
            <div class="body mb-16 max-w-[413px]"><?php echo wp_kses_post(wpautop($contact_text)); ?></div>
            <h5 class="mb-2"><?php echo esc_html($contact_heading); ?></h5>
            <div class="body mb-16"><?php echo wp_kses_post(wpautop($contact_company)); ?></div>
            <p class="body font-bold"><?php echo esc_html($contact_location_title); ?></p>
            <div class="body max-w-[214px] mb-9"><?php echo wp_kses_post(wpautop($contact_address)); ?></div>
            <?php foreach ($contact_items as $item): ?>
                <a href="<?php echo esc_url($item['url'] ?? '#'); ?>" class="flex space-x-5 mb-4 !no-underline">
                    <p class="body text-terracota font-bold"><?php echo esc_html($item['label'] ?? ''); ?></p>
                    <p class="body"><?php echo esc_html($item['text'] ?? ''); ?></p>
                </a>
            <?php endforeach; ?>
        </div>
        <div id="forms">
            <?php echo do_shortcode($contact_shortcode); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
