<?php get_header(); ?>
<style>
    #branches [id] {
        scroll-margin-top: 120px;
    }
</style>
<section class="h-screen w-full md:aspect-video md:h-auto">
    <div class="absolute w-full h-[120%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-sanctuary.webp"
            class="w-full h-full object-cover" alt="">
    </div>
    <div class="container relative z-10 flex flex-col h-full text-beige items-center justify-center text-center">
        <h4 class=" mb-6">
            Sandjong Wellness by Amerta
        </h4>
        <p class="body max-w-[595px]">
            One soul, two expressions. Each rooted in the land it stands on. Every Sandjong sanctuary reflects its
            surroundings and though distinct in character, all share one heart: to offer moments of pause, presence, and
            cultural connection. Two destinations, two stories, one philosophy of care.
        </p>
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
                <div class="grid md:grid-cols-2 gap-10 md:gap-20" id="<?php echo get_post_field('post_name'); ?>">
                    <div class="order-2 md:order-1">
                        <h4 class="text-gold mb-4">
                            <?php the_title(); ?>
                        </h4>
                        <?php if (get_field('subtitle')): ?>
                            <p class="body text-primary mb-12">
                                <?php echo get_field('subtitle'); ?>
                            </p>
                        <?php endif; ?>
                        <div class="body mb-10 md:mb-16">
                            <?php the_content(); ?>
                        </div>
                        <div class="grid md:grid-cols-3 text-primary gap-8 gap-y-9 md:gap-y-16">
                            <div>
                                <p class="font-bold body mb-1">
                                    Location
                                </p>
                                <p class="body">
                                    <?php echo get_field('location'); ?>
                                </p>
                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    Perfect for
                                </p>
                                <p class="body max-w-[143px]">
                                    <?php echo get_field('perfect_for'); ?>
                                </p>
                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    Socials
                                </p>
                                <div class="flex">
                                    <a href="<?php echo get_field('instagram'); ?>" target="_blank"><img
                                            src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.png"
                                            class="mr-2 -ml-1" alt="Instagram">
                                    </a>
                                    <a href="<?php echo get_field('facebook'); ?>" target="_blank"><img
                                            src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.png"
                                            alt="Facebook">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    Experience
                                </p>
                                <p class="body max-w-[143px]">
                                    <?php echo get_field('experience'); ?>
                                </p>
                            </div>
                            <div>
                                <p class="font-bold body mb-1">
                                    Concept Essence
                                </p>
                                <p class="body max-w-[143px]">
                                    <?php echo get_field('concept_essence'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 md:order-2">
                        <?php
                        $branch_images = get_field('branch_images');
                        if ($branch_images): ?>
                            <div class="sliders mb-12">
                                <?php foreach ($branch_images as $image_post):
                                    $img_id = is_object($image_post) ? $image_post->ID : $image_post;
                                    // Try to get thumbnail if it's a post, otherwise try as attachment
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
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                                    class="w-full h-full object-cover rounded-lg" alt="<?php the_title(); ?>">
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

<section class="h-[456px] relative">
    <div class="absolute w-full h-[120%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/webp/bg-journey.webp"
            class="w-full h-full object-cover" alt="">
    </div>
    <div class="container flex flex-col justify-center items-center h-full relative z-10 text-center">
        <h4 class="text-gold mb-4">Living Stories of Our Sanctuaries</h4>
        <p class="body max-w-[587px] text-beige">
            Each Sandjong sanctuary is a chapter of our journey, a celebration of local culture, and a place shaped for
            stillness. As we continue to grow, we hold to one promise: to stay rooted in heritage, and to welcome you
            with the same gentle grace every single time.
        </p>
    </div>
</section>

<script>
    jQuery(document).ready(function ($) {
        $('.sliders').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><img src="<?php echo get_template_directory_uri(); ?>/images/package-left.png" alt="Previous"></button>',
            nextArrow: '<button type="button" class="slick-next"><img src="<?php echo get_template_directory_uri(); ?>/images/package-right.png" alt="Next"></button>',
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            adaptiveHeight: false
        });
    });
</script>
<?php get_footer(); ?>