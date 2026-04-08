<?php get_header(); ?>
<style>
    .masked-sense {
        -webkit-mask-image: url('<?php echo get_template_directory_uri(); ?>/images/mask/mask-sense.png');
        -webkit-mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-image: url('<?php echo get_template_directory_uri(); ?>/images/mask/mask-sense.png');
        mask-mode: alpha;
        mask-size: 100% 100%;
        mask-repeat: no-repeat;
        mask-position: center;
    }

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


<section class="relative h-screen flex justify-center items-center">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-journey.webp" alt="">
    </div>
    <h4 class="text-beige big relative z-10 mt-14 md:mt-0 max-w-[192px] md:max-w-full text-center">
        Rooted in
        Amerta Jiwa
    </h4>
</section>

<section class="bg-beige py-[71px] h-screen flex flex-col justify-center md:py-36 relative">
    <div class="container grid md:grid-cols-2 text-primary items-center">
        <h4 class="max-w-[412px] big mb-10 md:mb-0">
            Nature Inheritance Rooted in Culture
        </h4>
        <p class="body">Born from <strong>Amerta Jiwa Indonesia</strong>, Sandjong elevates wellness into a living
            ritual. The name
            Sandjong is
            inspired by the Indonesian word <strong>“sanjung”</strong>, meaning <strong>“praise”</strong> or <strong>“to
                bring joy”</strong> which
            reflects our
            devotion to heritage and balance. <br /> <br /> <strong>Rooted in Indonesia’s rich traditions</strong>, we
            reinterpret
            ancient wellness
            philosophies into refined, multisensory experiences, and create spaces to <strong>return home</strong> to:
            to calm, to
            culture, to self.
        </p>
    </div>
</section>

<section class="bg-primary py-20 md:py-36 relative min-h-screen flex flex-col justify-center">
    <div class="md:container grid md:grid-cols-2 items-center">
        <div class="px-4 md:px-0 mb-10 md:mb-0">
            <h4 class="mb-6 text-gold italic small">Our Commitment</h4>
            <h4 class="max-w-[487px] text-beige">
                Amerta’s dedication to maintain a 5-star standard and crafting unforgettable experiences for our valued
                customers is shown and nurtured through our vision, mission, culture, motto, and values.
            </h4>
        </div>
        <div
            class="draggable-container px-4 md:pl-0 md:pr-4 md:absolute right-0 flex space-x-6 w-full md:w-1/2 whitespace-nowrap overflow-x-auto pb-6 cursor-grab select-none no-scrollbar">

            <div class="w-[312px] shrink-0 ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/webp/vision.webp"
                    class="w-full h-[270px] object-cover" alt="">

                <div class="bg-beige py-10 px-9 rounded-b-lg whitespace-normal relative">
                    <div
                        class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-beige absolute">
                    </div>
                    <h5 class="text-gold mb-4">Vision</h5>
                    <p class="body text-primary">
                        To lead Indonesia’s wellness industry with our profound expertise, innovation, and continuous
                        advancement through research and development.
                    </p>
                </div>
            </div>

            <div class="w-[312px] shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/webp/mission.webp"
                    class="w-full h-[270px] object-cover" alt="">

                <div class="bg-beige py-10 px-9 rounded-b-lg whitespace-normal relative">
                    <div
                        class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-beige absolute">
                    </div>
                    <h5 class="text-gold mb-4">Mission</h5>
                    <p class="body text-primary min-h-[96px]">
                        Dedicated to creating a uniquely memorable experience and genuine care to meet our customers’
                        needs.
                    </p>
                </div>
            </div>

            <div class="w-[312px] shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/webp/motto.webp"
                    class="w-full h-[270px] object-cover" alt="">

                <div class="bg-beige py-10 px-9 rounded-b-lg whitespace-normal relative">
                    <div
                        class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-beige absolute">
                    </div>
                    <h5 class="text-gold mb-4">Motto</h5>
                    <p class="body text-primary min-h-[96px]">
                        “Delivering exceptional customer satisfaction while honoring the needs of all”
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden h-screen flex flex-col justify-center" id="culture">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-culture.webp" alt="">
    </div>
    <div class="container flex flex-col h-screen max-h-[1000px] text-center justify-center items-center relative z-10">
        <h5 class="text-gold mb-6">Our Culture</h5>
        <h4 class="max-w-[329px] md:max-w-[729px] text-beige">
            In Amerta’s esteemed environment, we nurture and enhance our offered personalized services and the mutual
            respect by embracing the reliable principles of amiability and positive attitude.
        </h4>
    </div>
</section>

<section class="relative bg-beige py-28">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-top"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-beige.webp" alt="">
    </div>
    <div class="container relative z-10">
        <h4 class="text-terracota mb-16">Values</h4>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 gap-y-20 md:gap-20">
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img class="w-12 h-12 object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/heart.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Commitment</h5>
                <p class="body max-w-[266px]">An unwavering dedication to enhance our brand’s and our clients’ image by
                    endlessly
                    developing an
                    authentic service.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img class="w-12 h-12 object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/idea.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Innovation</h5>
                <p class="body max-w-[266px]">An unyielding aim for innovation to elevate our core principle of customer
                    satisfaction to the highest level.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img class="w-12 h-12 object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/star.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Uniqueness</h5>
                <p class="body max-w-[266px]">An adamant intention to be a unique trendsetter to the hospitality
                    industry and our clients’ establishments.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img class="w-12 h-12 object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/review.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Memorable Experience</h5>
                <p class="body max-w-[266px]">A supporting empowerment for our staff to consistently deliver first-rate,
                    memorable, and personalized service for our guests.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img class="w-12 h-12 object-contain"
                        src="<?php echo get_template_directory_uri(); ?>/images/icons/guarantee.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Consistent</h5>
                <p class="body max-w-[281px]">A committed pledge to prioritize the implementation of our top-tier
                    quality services to meet our guests’ expectations of excellence.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary py-16 relative z-10">
    <div class="absolute w-full h-full left-0 top-0">
        <img class="w-full h-full object-cover object-top"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-green.webp" alt="">
    </div>
    <div class="container relative">
        <!-- TODO: Slick Slider Grid Experiences -->
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
                    $icon = get_field('icon'); // Assuming ACF field 'icon'
                    ?>
            <div>
                <div class="grid md:grid-cols-2">
                    <div class="mb-16 md:mb-0 ">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large', array('class' => 'masked-sense w-full h-full object-cover ')); ?>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/senses.webp"
                            class="masked-sense w-full h-full object-cover " alt="">
                        <?php endif; ?>
                    </div>
                    <div class="md:pl-14">
                        <h4 class="text-gold mb-20">5 Senses Experiences</h4>

                        <div class="mb-10 w-[71px] h-[71px] rounded-full bg-[#966938] flex justify-center items-center">
                            <?php if ($icon): ?>
                            <img src="<?php echo esc_url($icon); ?>" class="w-[54px] h-[54px] object-contain">
                            <?php else: ?>
                            <img src=" <?php echo get_template_directory_uri(); ?>/images/icons/eye.png"
                                class="w-[54px] h-[54px] object-contain" alt="">
                            <?php endif; ?>
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

<section class="h-screen flex flex-col justify-center items-center relative z-0 ">
    <div class="absolute w-full h-[120%] left-0 -top-[20%] " data-scroll data-scroll-speed="2">
        <img class="w-full h-full top-0 object-cover object-top"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-ambience.webp" alt="">
    </div>

    <div class="bg-primary/90 relative z-20 w-[90vw] md:w-[70vw] mx-auto py-14 px-4 text-center rounded-xl">
        <div class="w-[95%] md:w-[98%] h-3 rounded-t-xl -top-3 left-1/2 -translate-x-1/2 bg-primary/90 absolute">
        </div>
        <div class="w-[95%] md:w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-primary/90 absolute">
        </div>
        <h5 class="text-gold relative mb-6">
            Enchanting Ambience
        </h5>
        <h4 class="text-beige mb-8 md:mb-16 !text-xl md:!text-[32px]">
            A space where time slows, and stories unfold
        </h4>
        <p class="text-beige max-w-[612px] mb-16 mx-auto">
            Inspired by apothecaries of the past and royal sanctuaries of Southeast Asia, Sandjong is alive with
            texture, scent, and sound that relives that era. In Gading Serpong, Baduy serenity meets Peranakan spirit;
            in Jakarta, Javanese grace, Balinese warmth, and Peranakan elegance intertwine. From heirlooms to herbal
            blends, every detail invites you into a deeply sensory, culturally rooted escape.
        </p>
        <a href="#" class="button bg-gold !px-8">Explore</a>
    </div>
</section>

<section class="relative py-28 z-10 bg-beige">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-bottom"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-beige.webp" alt="">
    </div>
    <div class="container relative z-10">
        <h4 class="text-center text-gold mb-16">Delicately Facilitating <span class="text-primary">
                Your Serene Moments
            </span>
        </h4>

        <!-- TODO: Slick Slider Facility -->
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
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', array('class' => 'masked-facility object-cover aspect-4/3')); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/webp/lobby.webp"
                                class="masked-facility w-full h-full object-cover aspect-4/3" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="bg-[#FFE5C9] rounded-xl relative p-8 md:px-16 md:py-12">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-timeline.webp"
            class="w-full h-full object-cover mix-blend-multiply" alt="" />
    </div>
    <div class="container relative">
        <div class="grid md:grid-cols-2">
            <div>
                <h4 class="text-gold mb-14">Echoes <span class="text-beige">of Time</span></h4>
                <p class="text-beige max-w-[455px] body">Our story unfolds slowly, a rhythmic ritual of tradition. Born
                    from
                    a
                    vision
                    by Amerta Jiwa Indonesia,
                    Sandjong was shaped by culture, soul, and serenity. Each chapter reflects care and devotion to
                    heritage-based wellness. Our milestones are echoes of all who have journeyed with us and all that
                    shaped
                    the
                    legacy with us; of hands that healed, scents that calmed, and guests who found their way back to
                    themselves.
                </p>
            </div>
            <div>
                <p class="text-beige max-w-[455px] mb-9 body">Sandjong's identity are echoes of every hand that has
                    healed,
                    every
                    scent that has calmed, every guest who found a moment to return to themselves.
                </p>
                <div class="flex space-x-6">
                    <div class="flex flex-col items-center space-y-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png" alt=""
                            class="rotate-90">
                        <div class="h-full w-[1px] border border-dashed border-gold"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png" alt=""
                            class="-rotate-90">
                    </div>
                    <div class="mt-4">
                        <div class="relative timeline-item cursor-pointer active">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/dot-gold.png" alt=""
                                class="absolute -left-[37px] md:-left-[39px] top-1 timeline-dot">
                            <h5 class="timeline-title transition-all duration-300 mb-8">
                                2022 — The First Bloom
                            </h5>
                            <div class="timeline-content">
                                <p class="text-beige max-w-[435px] mb-9">
                                    We opened the doors to Sandjong at Episode Gading Serpong, our first sanctuary
                                    inspired
                                    by
                                    the
                                    quiet strength of Baduy tradition and the vibrant elegance of Peranakan heritage. A
                                    hidden
                                    gem
                                    in the city, where healing feels like coming home.
                                </p>
                            </div>
                        </div>
                        <div class="relative timeline-item cursor-pointer">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/dot-gold.png" alt=""
                                class="absolute -left-[37px] md:-left-[39px] top-1 timeline-dot">
                            <h5 class="timeline-title transition-all duration-300 mb-8">
                                2023 — A Voice Recognized
                            </h5>
                            <div class="timeline-content hidden">
                                <p class="text-beige max-w-[435px] mb-9">
                                    Sandjong was honored as The Best Spa 2023, a celebration of the care, culture, and
                                    calm
                                    that
                                    live in every corner of our sanctuary. An affirmation of the grace we strive to
                                    bring
                                    into
                                    the world.
                                </p>
                            </div>
                        </div>
                        <div class="relative timeline-item cursor-pointer">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/dot-gold.png" alt=""
                                class="absolute -left-[37px] md:-left-[39px] top-1 timeline-dot">
                            <h5 class="timeline-title transition-all duration-300 mb-8">
                                2024 — The Second Sanctuary
                            </h5>
                            <div class="timeline-content hidden">
                                <p class="text-beige max-w-[435px] mb-9">
                                    Sandjong Spa at The Orient Jakarta was unveiled. A refined apothecary of royal
                                    elegance,
                                    drawing from Peranakan, Javanese, and Balinese heritage. A sacred space for regal
                                    restoration, crafted with precision and poetry.
                                </p>
                            </div>
                        </div>
                        <div class="relative timeline-item cursor-pointer">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/dot-gold.png" alt=""
                                class="absolute -left-[37px] md:-left-[39px] top-1 timeline-dot">
                            <h5 class="timeline-title transition-all duration-300 mb-8">
                                And Beyond…
                            </h5>
                            <div class="timeline-content hidden">
                                <p class="text-beige max-w-[435px] mb-9">
                                    We continue to grow, guided not by urgency, but by meaning. Each future Sandjong
                                    will
                                    be
                                    a
                                    new echo that faithfully rooted in its land, lovingly shaped by its people, and
                                    gracefully
                                    unfolding with time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="awards" class="bg-beige py-20 md:py-28 relative z-10">
    <div class="container">
        <h4 class="text-center text-gold mb-11">
            In Gentle <span class="text-primary">Honor</span>
        </h4>
        <p class="body text-center max-w-[698px] mb-14 mx-auto">
            Every recognition we have received is not a trophy, but a whisper of gratitude—gently offered by those who
            have
            felt the calm, the comfort, and the culture within our sanctuary. These honors are not our destination. They
            are
            gentle markers along our path—reminders that grace, when given sincerely, often returns softly.
        </p>
        <!-- TODO: Slick Slider Awards -->
        <div class="bg-primary mx-auto max-w-[860px]  rounded-xl relative">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/webp/award-1.webp" alt="">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-session.webp"
            class="w-full h-full object-cover " alt="" />
    </div>
    <div class="container relative z-10 text-center">
        <h4 class="text-gold mb-8 max-w-[383px] mx-auto">
            Loved in Silence, Remembered in Stillness
        </h4>
        <p class="body text-beige max-w-[424px] mx-auto mb-8">But beyond accolades, it is the return of a guest, the
            softened
            breath at the end of
            a treatment, and the
            shared stillness that truly honors us.</p>
        <a href="https://wa.me/6282130376088" target="_blank" class="button bg-gold !px-4">Book Your Session</a>
    </div>
</section>


<script>
    $(document).ready(function () {
        $('.senses-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            autoplay: false, // Managed by Intersection Observer
            autoplaySpeed: 3000,
            fade: true, // Smooth transition
            appendArrows: $('.senses-nav'),
            appendDots: $('.senses-nav'),
            prevArrow: '<button type="button" class="slick-prev-custom mr-4"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra.png" class="w-2.5 h-2.5 rotate-180"></button>',
            nextArrow: '<button type="button" class="slick-next-custom ml-4"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra.png" class="w-2.5 h-2.5"></button>',
        });

        $('.facility-slider').slick({
            dots: true,
            infinite: true,
            autoplay: false, // Managed by Intersection Observer
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 1,
            fade: true,
            adaptiveHeight: true,
            appendArrows: $('.facility-nav'),
            appendDots: $('.facility-nav'),
            prevArrow: '<button type="button" class="slick-prev-custom mr-4"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra.png" class="w-2.5 h-2.5 rotate-180"></button>',
            nextArrow: '<button type="button" class="slick-next-custom ml-4"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra.png" class="w-2.5 h-2.5"></button>',
        });

        $('.awards-slider').slick({
            dots: true,
            infinite: true,
            autoplay: false, // Managed by Intersection Observer
            autoplaySpeed: 3000,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: '<button type="button" class="slick-prev before:hidden !-left-2"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra-2.png" class="w-6 h-6 rotate-180"></button>',
            nextArrow: '<button type="button" class="slick-next before:hidden !-right-2"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra-2.png" class="w-6 h-6"></button>',
        });

        // Autoplay only when visible in viewport
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
            // Reset interval on manual click
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

        // IMPORTANT: Prevent browser from trying to drag images/links
        $container.on('dragstart', function (e) {
            e.preventDefault();
        });

        $container.on('mousedown', function (e) {
            isDown = true;
            $container.addClass('dragging');
            // pageX is the mouse position relative to the whole document
            startX = e.pageX - $container.offset().left;
            scrollLeft = $container.scrollLeft();
        });

        $(window).on('mouseup', function () { // Attach to window to catch release outside container
            isDown = false;
            $container.removeClass('dragging');
        });

        $container.on('mousemove', function (e) {
            if (!isDown) return;
            e.preventDefault(); // Stop text selection or other default behaviors

            const x = e.pageX - $container.offset().left;
            const walk = (x - startX) * 1; // Adjust scroll speed multiplier here

            $container.scrollLeft(scrollLeft - walk);
        });
    });
</script>


<?php get_footer(); ?>