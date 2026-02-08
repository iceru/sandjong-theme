<?php get_header(); ?>

<section id="header" class="h-screen md:h-auto flex flex-col justify-end items-center relative md:aspect-video w-full">
    <div class="absolute left-0 top-0 w-full h-full">
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/homepage.gif"
            alt="">
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

<section id="about" class="bg-beige text-center py-36 flex flex-col justify-center items-center relative text-primary ">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-top"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-beige.png" alt="">
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
        <a href="" class="button bg-gold group">
            Learn More
        </a>
    </div>
</section>

<section class="bg-beige py-28 relative max-w-screen overflow-x-hidden">
    <div>
        <h4 class="mb-8 text-center text-gold">A Window to the Soul</h4>
        <div class="flex flex-col justify-center items-center">
            <div class="mb-8 md:w-[500px] h-[350px] md:h-[500px] relative flex justify-center items-center">
                <h4 class="text-beige relative z-10 text-center max-w-[360px]">
                    The Unique Threads in Our Wellness Tapestry
                </h4>
                <img class="w-full h-full object-cover absolute left-0 top-0"
                    src="<?php echo get_template_directory_uri(); ?>/images/soul-1.png" alt="">
            </div>
            <p class="max-w-[503px] text-center">
                In Gading Serpong, find the tender fusion of Baduy simplicity and Peranakan color. In Jakarta, step into
                a
                refined haven inspired by Javanese nobility, Balinese devotion, and Peranakan beauty. Each Sandjong
                space
                reflects heritage, nurtures serenity, and creates a soft feeling of home where you can always belong.
            </p>
        </div>
    </div>
    <img class="hidden md:block w-[374px] h-[384px] object-cover absolute -left-16 top-[46%] rounded-lg -translate-y-1/2 z-0"
        src="<?php echo get_template_directory_uri(); ?>/images/soul-3.png" alt="">
    <img class="hidden md:block w-[374px] h-[384px] object-cover absolute -right-16 top-[46%] rounded-lg -translate-y-1/2 z-0"
        src="<?php echo get_template_directory_uri(); ?>/images/soul-2.png" alt="">
</section>

<section class="bg-beige py-28 relative z-20" id="branches">
    <div class="container">
        <div class="flex items-center space-x-6 mb-16">
            <h5 class="text-gold whitespace-nowrap">Sandjong's Wellness Branches</h5>
            <div class="h-[1px] w-full border border-gold border-dashed mt-[4px]"></div>
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
                        <div class="space-y-8 text-primary ">
                            <h4><?php the_title(); ?></h4>
                            <div class="max-w-[489px]">
                                <?php the_content(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="button bg-gold inline-block mb-8 md:mb-0">Explore</a>
                        </div>
                        <div>
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array('class' => 'masked-image max-h-[355px] w-full object-cover')); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/episode.png"
                                    class=" max-h-[355px] object-cover" alt="">
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
    <div class="w-full h-[526px] relative">
        <img class="w-full h-[120%] absolute left-0 -top-[10%] object-cover" data-scroll data-scroll-speed="2"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-posts-2.png" alt="">
    </div>
    <div class="absolute w-full h-[50%] left-0 bottom-0">
        <img class="w-full h-full object-cover object-top z-0"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-footer.jpg" alt="">
    </div>
    <div
        class="flex flex-wrap md:flex-nowrap justify-between bg-beige mx-auto max-w-[1100px] p-6 md:p-16 rounded-lg z-10 relative -mt-40">
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
        <div class="flex flex-col space-y-2 items-center justify-center hidden md:block">
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
                        <a href="/sanctuary#<?php echo get_the_ID(); ?>" class="button !text-terracota !p-0 !underline">
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
            src="<?php echo get_template_directory_uri(); ?>/images/bg-franchise.jpg" alt="">
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
            <a href="" class="button bg-terracota">
                Spa Operation
            </a>
            <a href="" class="button bg-gold group">
                For Franchise
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>