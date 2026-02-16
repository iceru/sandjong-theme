<?php get_header(); ?>
<style>
    .masked-facility {
        -webkit-mask-image: url('<?php echo get_template_directory_uri(); ?>/images/mask/mask-facility.png');
        -webkit-mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-image: url('<?php echo get_template_directory_uri(); ?>/images/mask/mask-facility.png');
        mask-mode: alpha;
        mask-size: 100% 100%;
        mask-repeat: no-repeat;
        mask-position: center;
    }
</style>

<section class="relative h-[587px]">
    <div class="w-full h-[110%] left-0 -top-[10%] absolute" data-scroll data-scroll-speed="2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/expand/hero.webp"
            class="w-full object-cover h-full" alt="">
    </div>
    <div class="container flex flex-col justify-end h-full pb-10 md:pb-28 relative z-10 w-full">
        <div class="grid md:grid-cols-2 w-full">
            <h4 class="text-white md:w-[366px] mb-8 md:mb-0">A partnership rooted in care, guided by heritage</h4>
            <p class="text-white md:w-[591px]">
                In the world of wellness, what is genuine always moves gently from within. Through our
                Spa Operation and Franchise Partnerships, Sandjong welcomes you to build spaces that honor tradition
                while embracing the needs of today. With the guidance of Amerta Jiwa Indonesia, we offer cultural depth,
                thoughtful service, and seasoned expertise to help you cultivate a sanctuary of your own, in any place
                you choose.
            </p>
        </div>
    </div>
</section>

<section class="bg-beige py-16 relative z-10">
    <div class="container grid md:grid-cols-2">
        <div class="mb-20 md:mb-0">
            <h4 class="text-terracota mb-6">
                Spa Operation
            </h4>
            <p class="body mb-10 md:mb-16">
                Let us carry the rhythm of Sandjong into your space.
            </p>
            <p class="body max-w-[440px]">
                Bringing a spa to life requires more than a good idea, as it takes guidance, systems, and soul. At
                Sandjong, through the expertise of Amerta Jiwa Indonesia, we offer a full suite of operational services
                to help you create or elevate your wellness experience.
                <br /> <br />
                Whether you're a hotel, residence, or lifestyle destination, we offer complete support: from concept to
                treatment, from therapist to guest. Every detail is shaped with intention, designed to reflect the
                essence of Sandjong, where healing is deeply rooted in tradition.

            </p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/expand/spa-operation.webp" alt="">
        </div>
    </div>
</section>

<section class="bg-primary py-20 relative z-10" id="services">
    <div class="absolute w-full h-full left-0 top-0">
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-green.webp"
            class="w-full h-full object-cover" alt="">
    </div>
    <div class="container relative z-10">
        <h3 class="text-gold mb-11">Our Services</h3>
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
                        $activeClass = ($services->current_post === 0) ? '' : 'hidden'; // First visible, others hidden
                        ?>
                        <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/expand/our-services.webp'; ?>"
                            class="service-image masked-facility w-full h-auto object-cover <?php echo $activeClass; ?>"
                            data-id="service-<?php echo get_the_ID(); ?>" alt="<?php the_title(); ?>">
                    <?php endwhile; ?>
                </div>
                <div class="overflow-auto">
                    <div class="flex border-b border-beige space-x-16 text-beige mb-14 overflow-auto whitespace-nowrap  no-scrollbar"
                        id="tabs">
                        <?php $services->rewind_posts(); ?>
                        <?php while ($services->have_posts()):
                            $services->the_post();
                            $opacityClass = ($services->current_post === 0) ? 'opacity-100 border-b-white' : 'opacity-40 border-b-transparent';
                            ?>
                            <div class="cursor-pointer pb-5 border-b-2 border-transparent service-tab transition-opacity duration-300 <?php echo $opacityClass; ?>"
                                data-target="service-<?php echo get_the_ID(); ?>">
                                <h5 class="whitespace-nowrap">
                                    <?php echo get_field('tab_name'); ?>
                                </h5>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div>
                        <?php $services->rewind_posts(); ?>
                        <?php while ($services->have_posts()):
                            $services->the_post();
                            $activeClass = ($services->current_post === 0) ? '' : 'hidden';
                            ?>
                            <div class="service-content <?php echo $activeClass; ?>" id="service-<?php echo get_the_ID(); ?>">
                                <h4 class="text-gold mb-2">
                                    <?php the_title(); ?>
                                </h4>
                                <p class="text-beige body mb-16">
                                    <?php echo get_field('subtitle'); ?>
                                </p>
                                <div class="body text-beige w-full md:max-w-[430px] mb-16">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata(); endif; ?>
    </div>
</section>
<script>
    jQuery(document).ready(function ($) {
        $('.service-tab').click(function () {
            var targetId = $(this).data('target');

            // Handle Tabs
            $('.service-tab').removeClass('opacity-100 border-b-white').addClass('opacity-40 border-b-transparent');
            $(this).removeClass('opacity-40 border-b-transparent').addClass('opacity-100 border-b-white');

            // Handle Content
            $('.service-content').addClass('hidden');
            $('#' + targetId).removeClass('hidden');

            // Handle Images
            $('.service-image').addClass('hidden');
            $('.service-image[data-id="' + targetId + '"]').removeClass('hidden');
        });
    });
</script>

<section class="relative">
    <div class="absolute w-full h-[130%] left-0 -top-[20%]" data-scroll data-scroll-speed="2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-timeline.webp"
            class="w-full h-full object-cover" alt="">
    </div>1
    <div class="container flex flex-col justify-center items-center text-center py-36 relative z-10">
        <h3 class="text-gold mb-4">For Franchise</h3>
        <p class="text-beige body mb-9">
            Own a Sandjong sanctuary, guided by our legacy.
        </p>
        <p class="body text-beige max-w-[611px]">
            We offer the opportunity to open a Sandjong spa through a boutique franchise model that’s designed for those
            who believe in the power of culture-based wellness and wish to bring it to new communities.
        </p>
    </div>
</section>

<section class="bg-beige py-16 md:py-32 relative z-10">
    <div class="container md:flex md:space-x-28">
        <div class="shrink-0 mb-16 md:mb-0">
            <p class="text-primary max-w-[326px]">
                Each Sandjong franchise is thoughtfully curated: maintaining our standards of care, heritage, and
                sensory
                experience, while allowing your space to reflect the spirit of its surroundings.
            </p>
        </div>
        <div class="">
            <p class="text-primary mb-11 md:mb-[61px]">You will receive:</p>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 gap-y-16 md:gap-28">
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/certificate.png"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">Full franchise license and rights to the
                        Sandjong brand</h5>
                </div>
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/design.png"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">Design guidance & spatial concept
                        development</h5>
                </div>
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/training.png"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">Training and refreshment programs for
                        therapists</h5>
                </div>
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/user-manual.png"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">Service manuals, rituals, SOPs, and guest
                        experience
                        protocols</h5>
                </div>
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/presentation.png"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">Marketing materials, launch support, and
                        brand campaigns</h5>
                </div>
                <div>
                    <div class="w-16 h-16 mb-9 rounded-full bg-gold/20 flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/guarantee.png"
                            class="w-[42px] h-[42px] object-contain" alt="">
                    </div>
                    <h5 class="text-primary max-w-[150px] md:max-w-[210px]">Continuous operational consulting and
                        quality control</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-beige py-24 relative">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-beige.webp"
            class="w-full h-full object-cover" alt="">
    </div>
    <div class="container grid md:grid-cols-2 relative z-10">
        <div class="text-primary">
            <h4 class="text-terracota mb-6">Let Us Build Serenity, Together</h4>
            <p class="body mb-16 max-w-[413px]">
                If you feel aligned with our purpose, we welcome you into this shared journey to create sanctuaries that
                heal, restore, and carry the richness of Indonesian culture forward.
            </p>
            <h5 class=" mb-2">
                Inquire with us
            </h5>
            <p class="body  mb-16">
                Sandjong Wellness by Amerta Jiwa Indonesia
            </p>
            <p class="body font-bold">
                Episode Hotel Gading Serpong
            </p>
            <p class="body max-w-[214px] mb-9 ">
                2nd Floor, Jl. Gading Serpong Boulevard Barat S No. 6-7 Pakulonan Barat Tangerang — 15810
            </p>
            <a href="tel:+62818774915" class="flex space-x-5 mb-4 !no-underline">
                <p class="body text-terracota font-bold">M</p>
                <p class="body">+62 818 77 4915</p>
            </a>
            <a href="tel:+622130376088" class="flex space-x-5 mb-4 !no-underline">
                <p class="body text-terracota font-bold">M</p>
                <p class="body">+62 21 3037 6088</p>
            </a>
            <a href="mailto:info.sandjongspa@amertajiwa.com" class="flex space-x-5 mb-4 !no-underline">
                <p class="body text-terracota font-bold">E</p>
                <p class="body">info.sandjongspa@amertajiwa.com</p>
            </a>
        </div>
        <div id="forms">
            <?php echo do_shortcode('[contact-form-7 id="7318e68" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>