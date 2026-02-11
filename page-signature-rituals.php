<?php get_header(); ?>

<section class="relative h-[501px] flex flex-col justify-center items-center">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-signature.png" alt="">
    </div>
    <h4 class="text-beige text-center relative z-10 max-w-[312px] mx-auto mt-11 mb-7">Crafted with Care, Offered with
        Meaning.</h4>
    <p class="body text-center max-w-[432px] mx-auto relative z-10 text-beige">
        Every ritual at Sandjong is an invitation to return, not to escape.
        To return to your senses. To be present in your own skin. As you are.
    </p>
</section>

<section class="bg-beige py-20 md:py-28 relative">
    <div class="container">
        <h4
            class="text-center max-w-[328px] md:max-w-[1000px] mx-auto font-bold md:font-normal !text-xl md:!text-[32px] !leading-normal">
            Our treatments are rooted in ancestral wisdom and delivered with calm precision. Each one designed to
            restore balance through touch, tradition, and intention. We draw from nature, from culture, and from the
            knowledge that wellness begins when you come home to yourself.
        </h4>
    </div>
</section>

<section class="py-10 bg-beige">
    <div class="container">
        <div
            class="flex border-terracota/60 border-b mb-9 space-x-16 md:space-x-0 overflow-auto whitespace-nowrap no-scrollbar">
            <div class="tab-trigger active flex justify-center w-full" data-target="#signature">
                <h5 class="pb-7 text-terracota text-center whitespace-nowrap">
                    Signature Treatment
                </h5>
            </div>
            <div class="tab-trigger flex justify-center w-full" data-target="#package">
                <h5 class="pb-7 text-terracota text-center whitespace-nowrap">
                    Package Treatment
                </h5>
            </div>
            <div class="tab-trigger flex justify-center w-full" data-target="#simple">
                <h5 class="pb-7 text-terracota text-center whitespace-nowrap">
                    Simple Touch
                </h5>
            </div>
        </div>
        <div id="signature" class="tab-content">
            <div class="rounded-lg relative flex flex-col justify-end p-6 md:p-14 min-h-[552px] mb-11">
                <div class="absolute w-full h-full left-0 top-0">
                    <img class="rounded-lg w-full h-full object-cover"
                        src="<?php echo get_template_directory_uri(); ?>/images/bg-signature-2.png" alt="">
                </div>
                <div class="text-beige relative z-10">
                    <h4 class="max-w-[356px] mb-8">
                        Refined Rituals for Rest, Recovery, and Renewal.
                    </h4>
                    <p class="max-w-[469px]">
                        A collection of exclusive treatments curated to meet the changing needs of your body, mind, and
                        energy. Each experience is designed with intention—from calming stress to celebrating special
                        occasions—with herbal elements and cultural touches drawn from Sandjong’s apothecary roots.
                        <br />
                        <br />
                        Perfect for: those seeking tailored, elevated care with a sense of purpose.

                    </p>
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
                        ?>
                        <div class="pr-6">
                            <div class="bg-[#F8E6D2] px-4 md:px-6 py-2 grid md:grid-cols-2 relative rounded-xl gap-6 md:gap-12">
                                <div class="w-[98%] h-4 rounded-t-xl -top-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute">
                                </div>
                                <div class="w-[98%] h-4 rounded-b-xl -bottom-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute">
                                </div>
                                <div>
                                    <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/signature-1.png'; ?>"
                                        alt="<?php the_title(); ?>">
                                </div>
                                <div class="flex flex-col justify-between">
                                    <div>
                                        <h5 class="text-primary mb-4 md:mb-11 md:mt-9">
                                            <?php the_title(); ?>
                                        </h5>
                                        <div class="max-w-[394px]">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <div>
                                        <?php if (get_field('duration')): ?>
                                            <div
                                                class="mb-7 inline-flex items-center space-x-2 rounded-lg py-1 px-1.5 bg-gold/20 text-gold">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png"
                                                    alt="">
                                                <span><?php the_field('duration'); ?></span>
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
            <div class="rounded-lg relative flex flex-col justify-end p-6 md:p-14 min-h-[552px] mb-[71px]">
                <div class="absolute w-full h-full left-0 top-0">
                    <img class="rounded-lg w-full h-full object-cover"
                        src="<?php echo get_template_directory_uri(); ?>/images/package.png" alt="">
                </div>
                <div class="text-beige relative z-10">
                    <h4 class="max-w-[356px] mb-8">
                        A Complete Journey, Harmonized from Head to Toe
                    </h4>
                    <p class="max-w-[469px]">
                        Each package combines multiple treatments into a cohesive flow that offers a full-body
                        experience to restore your energy, sooth your senses, and honors your time. From foot rituals to
                        body scrubs, massages, and facials, this is your invitation to be completely cared for.
                        <br />
                        <br />
                        Perfect
                        for: those looking for extended, full-journey indulgence or shared wellness experiences.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex items-center space-x-2 mb-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png"
                        class="rotate-180" alt="">
                    <div class="w-full border border-dashed h-[1px] border-gold"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png" alt="">
                </div>
                <div id="package-treaments">
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'treatment-category',
                        'hide_empty' => true,
                    ));

                    foreach ($categories as $category):
                        ?>
                        <div class="grid md:grid-cols-2 mb-10">
                            <div class="mb-10 md:mb-0">
                                <h5 class="text-terracota"><?php echo $category->name; ?></h5>
                            </div>
                            <div>
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
                                $count = 0;
                                $total = $p_query->post_count;
                                if ($p_query->have_posts()):
                                    while ($p_query->have_posts()):
                                        $p_query->the_post();
                                        $count++;
                                        ?>
                                        <div
                                            class="flex items-start space-x-14 pb-12 mb-12 <?php echo ($count < $total) ? 'border-b border-gold/50' : ''; ?>">
                                            <div>
                                                <h4 class="text-primary mb-10"><?php the_title(); ?></h4>
                                                <div class="prose prose-sm max-w-none">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                            <?php if (get_field('duration')): ?>
                                                <div
                                                    class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-1 px-2 shrink-0 mt-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png"
                                                        alt="">
                                                    <span><?php the_field('duration'); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 mb-10">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png"
                                class="rotate-180" alt="">
                            <div class="w-full border border-dashed h-[1px] border-gold"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div id="simple" class="tab-content hidden">
            <div class="rounded-lg relative flex flex-col justify-end p-6 md:p-14 min-h-[552px] mb-16">
                <div class="absolute w-full h-full left-0 top-0">
                    <img class="rounded-lg w-full h-full object-cover"
                        src="<?php echo get_template_directory_uri(); ?>/images/simple.png" alt="">
                </div>
                <div class="text-beige relative z-10">
                    <h4 class="max-w-[356px] mb-8">
                        Small Rituals. Lasting Calm.
                    </h4>
                    <p class="max-w-[469px]">
                        Even the simplest touch, when offered with care, can bring clarity and calm. These shorter
                        treatments offer targeted relief, like herbal compresses, focused massage, or scalp rituals for
                        moments when you need a pause, not a full escape.
                        <br />
                        <br />
                        Perfect for: those who need a gentle reset in the midst of a full day

                    </p>
                </div>
            </div>
            <div id="simple-touch">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php
                    $s_args = array(
                        'post_type' => 'simple-touch',
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );
                    $s_query = new WP_Query($s_args);
                    if ($s_query->have_posts()):
                        while ($s_query->have_posts()):
                            $s_query->the_post();
                            ?>
                            <div class="flex flex-col">
                                <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/acu.png'; ?>"
                                    class="rounded-lg w-full h-[384px] object-cover mb-5" alt="<?php the_title(); ?>">
                                <div class="flex justify-between mb-5">
                                    <h5 class="text-primary"><?php the_title(); ?></h5>
                                    <?php if (get_field('duration')): ?>
                                        <div
                                            class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                            <span><?php the_field('duration'); ?>'</span>
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
        // 1. Initialize the slider
        $('.signature-sliders').slick({
            infinite: false,
            slidesToShow: 1.25,
            slidesToScroll: 1,
            arrows: true,
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
            // If already active, don't do anything
            if ($(this).hasClass('active')) return;

            $('.tab-trigger').removeClass('active');
            $(this).addClass('active');

            const target = $(this).data('target');

            // 2. Hide all and Show target
            $('.tab-content').addClass('hidden');

            // Use a callback function inside fadeIn to ensure the 
            // slider reinitializes AFTER the element is visible
            $(target).removeClass('hidden').hide().fadeIn(500, function () {
                // 3. Re-initialize/Refresh sliders inside the active tab
                $(this).find('.signature-sliders').slick('setPosition');
            });
        });
    });
</script>
<?php get_footer(); ?>