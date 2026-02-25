<?php get_header(); ?>
<style>
    .masked-image {
        -webkit-mask-image: url('<?php echo get_template_directory_uri(); ?>/images/mask/mask.png');
        -webkit-mask-size: 100% 100%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: center;
        mask-image: url('<?php echo get_template_directory_uri(); ?>/images/mask/mask.png');
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
            poster="<?php echo get_template_directory_uri(); ?>/images/sandjong-placeholder.webp">
            <source src="<?php echo get_template_directory_uri(); ?>/images/sandjong.mp4" type="video/mp4">
        </video>
    </div>
    <div class="text-white text-center container relative z-10 mb-14">
        <h3 class="mb-6">Nature Inheritance, Rooted in Culture</h3>
        <p class="body max-w-[827px] mx-auto">Allow yourself to step softly into stillness, into a sanctuary where time
            slows,
            and
            the senses awaken. A
            wave of fragrant incense, the warmth of hands that remember and cares. Time slows, and something within you
            softens. Welcome to your return to absolute relaxation.</p>
    </div>
    <div class="relative z-10 mb-5">
        <a href="#about" class="w-6 h-6 flex justify-center items-center rounded-full border-beige border">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow.png" alt="">
        </a>
    </div>
</section>

<section id="about"
    class="bg-beige text-center py-20 md:py-36 flex flex-col justify-center items-center relative text-primary">
    <div class="absolute w-full h-[130%] md:h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-top"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-beige.webp" alt="">
    </div>
    <div class="container">
        <h3 class="mb-7 max-w-[522px] mx-auto">
            Rooted in Nature, Shaped by Heritage
        </h3>
        <p class="body max-w-[600px] mx-auto mb-14">
            Rooted in Chinese-Peranakan heritage, Sandjong blends the charm of a Chinese apothecary with the grounded
            spirit
            of the Baduy, the grace of the Peranakan, the calm of the Javanese, and the soul of the Balinese, while
            enriched
            with herbal aromas and vibrant colors all around. Each visit feels like coming home, because Sandjong is
            your
            place to unwind, refresh your body, and restore your mind in a culturally rich and rejuvenating sanctuary.
        </p>
        <a href="/journey" class="button bg-gold group">
            Learn More
        </a>
    </div>
</section>

<section class="bg-beige py-16 md:py-28 relative max-w-screen overflow-x-hidden">
    <div>
        <h4 class="mb-8 text-center text-gold">A Window to the Soul</h4>
        <div class="flex flex-col justify-center items-center">
            <div class="mb-8 md:w-[522px] w-[287px] h-[296px] md:h-[536px] relative flex justify-center items-center">
                <h4 class="text-beige relative z-10 text-center !text-xl md:!text-2xl max-w-[221px] md:max-w-[360px]">
                    The Unique Threads in Our Wellness Tapestry
                </h4>
                <img class="w-full h-full object-cover absolute left-0 top-0"
                    src="<?php echo get_template_directory_uri(); ?>/images/webp/soul-1.webp" alt="">
            </div>
            <p class="text-sm md:text-base max-w-[291px] md:max-w-[503px] text-center">
                In Gading Serpong, find the tender fusion of Baduy simplicity and Peranakan color. In Jakarta, step into
                a
                refined haven inspired by Javanese nobility, Balinese devotion, and Peranakan beauty. Each Sandjong
                space
                reflects heritage, nurtures serenity, and creates a soft feeling of home where you can always belong.
            </p>
        </div>
    </div>
    <img class="md:w-[374px] w-[220px] md:h-[384px] h-[220px] object-cover absolute -left-[48%] md:-left-16 top-[43%] md:top-[46%] rounded-lg -translate-y-1/2 z-0"
        src="<?php echo get_template_directory_uri(); ?>/images/webp/soul-3.webp" alt="">
    <img class="md:w-[374px] w-[220px] md:h-[384px] h-[220px] object-cover absolute -right-[48%] md:-right-16 top-[43%] md:top-[46%] rounded-lg -translate-y-1/2 z-0"
        src="<?php echo get_template_directory_uri(); ?>/images/webp/soul-2.webp" alt="">
</section>

<section class="bg-beige py-28 relative z-20" id="branches">
    <div class="container">
        <div class="flex items-end md:items-center justify-between space-x-6 mb-16">
            <h5 class="text-gold md:whitespace-nowrap max-w-[168px] md:max-w-full">Sandjong's Wellness Branches</h5>
            <div class="h-[1px] w-full border border-gold border-dashed mt-[4px] hidden md:block"></div>
            <a href="" class="button !text-gold whitespace-nowrap !p-0">Explore more</a>
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
                    <div class="grid md:grid-cols-2 not-last:mb-8 not-last:pb-8 not-last:border-b border-gold border-dashed">
                        <div class="space-y-8 text-primary order-2 md:order-1">
                            <h4 class="!text-[32px] max-w-[288px] md:max-w-full !leading-tight md:leading-normal">
                                <?php the_title(); ?>
                            </h4>
                            <div class="max-w-[489px]">
                                <?php the_content(); ?>
                            </div>
                            <a href="/sanctuary#<?php echo get_post_field('post_name'); ?>"
                                class="button bg-gold inline-block mb-8 md:mb-0">Explore</a>
                        </div>
                        <div class="order-1 md:order-2 mb-7 md:mb-0">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array('class' => 'masked-image max-h-[355px] w-full object-cover')); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/webp/episode.webp"
                                    class="masked-image max-h-[355px] w-full object-cover" alt="">
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

<section id="posts" class="bg-primary pb-40 relative z-10">
    <div class="w-full h-[526px] hidden md:block relative">
        <img class="w-full h-[120%] absolute left-0 -top-[10%] object-cover" data-scroll data-scroll-speed="2"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-posts-2.webp" alt="">
    </div>
    <div class="w-full h-[526px] md:hidden  relative">
        <img class="w-full h-full absolute left-0 top-0 object-cover object-top" data-scroll data-scroll-speed="2"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-posts-2-mobile.webp" alt="">
    </div>
    <div class="absolute w-full h-[50%] left-0 bottom-0">
        <img class="w-full h-full object-cover object-top z-0"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-footer.webp" alt="">
    </div>
    <div
        class="flex flex-wrap md:flex-nowrap max-w-[90%] justify-between bg-beige mx-auto md:max-w-[1100px] p-6 md:p-16 rounded-lg z-10 relative -mt-60 md:-mt-40">
        <div class="w-[95%] md:w-[98%] h-4 rounded-t-xl -top-4 left-1/2 -translate-x-1/2 bg-beige absolute"></div>
        <div class="w-[95%] md:w-[98%] h-4 rounded-b-xl -bottom-4 left-1/2 -translate-x-1/2 bg-beige absolute"></div>
        <div class="w-full md:w-[45%] mb-16 md:mb-0 flex flex-col justify-between">
            <div>
                <h5 class="text-gold mb-4">Wellness Whisper</h5>
                <h4 class="mb-9">Gentle Notes From Sandjong</h4>
                <p class="body text-body mb-9 md:mb-20 max-w-[381px]">
                    Wellness Whisper is our way of keeping you close to Sandjong’s journey. Where we share updates and
                    open
                    a window into our world: the traditions that inspire us, the rituals we are creating, and the
                    milestones
                    we are reaching together.
                </p>
            </div>
            <div>
                <a href="/wellness-whisper" class="button bg-terracota">Read More</a>
            </div>
        </div>
        <div class="flex-col space-y-2 items-center justify-center hidden md:flex">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra.png"
                class="-rotate-90 w-3 h-3 opacity-40" alt="">
            <div class="w-[1px] h-full border border-terracota border-dashed opacity-30"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-terra.png"
                class="rotate-90 w-3 h-3 opacity-40" alt="">
        </div>
        <div class="w-full md:w-[45%] flex flex-col justify-center" id="news">
            <?php
            // Query the latest 3 posts
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
                            <?php echo get_the_date('d M Y'); ?>
                        </small>
                        <h4 class="mb-2 line-clamp-1 text-primary">
                            <?php the_title(); ?>
                        </h4>
                        <a href="<?php the_permalink(); ?>" class="button !text-terracota !p-0 !underline">
                            Read More
                        </a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata(); // Restore original Post Data
            else:
                ?>
                <p>No whispers shared just yet.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="franchise" class="h-screen flex flex-col justify-center items-center relative">
    <div class="absolute left-0 w-full h-[120%] -top-[10%] z-0" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-franchise.webp" alt="">
    </div>
    <div class="absolute left-0 top-0 w-full h-full bg-black/50 z-10">
    </div>

    <div class="text-beige relative z-20 text-center px-4">
        <h3 class="mx-auto max-w-[539px] mb-6">Growing Wellness, Building Together</h3>
        <p class="body mx-auto max-w-[461px] mb-9">We invite you to join our journey of culture and care through
            partnerships
            and franchises. Together, let’s
            build sanctuaries that blend growth with heritage and bring meaningful wellness to more communities and
            souls.
        </p>
        <div class="flex justify-center items-center space-x-8">
            <a href="/sanctuary" class="button bg-terracota">
                Spa Operation
            </a>
            <a href="/expand" class="button bg-gold group">
                For Franchise
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>