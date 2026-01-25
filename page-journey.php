<?php get_header(); ?>


<section class="relative h-[501px] flex justify-center items-center">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/bg-journey.png"
            alt="">
    </div>
    <h4 class="text-beige relative z-10">Rooted in Amerta Jiwa</h4>
</section>

<section class="bg-beige py-36 relative">
    <div class="container grid md:grid-cols-2 text-primary">
        <div>
            <h4 class="max-w-[312px]">
                Nature Inheritance Rooted in Culture
            </h4>
        </div>
        <div>
            <p class="body">Born from Amerta Jiwa Indonesia, Sandjong elevates wellness into a living ritual. The name
                Sandjong is
                inspired by the Indonesian word “sanjung”, meaning “praise” or “to bring joy” which reflects our
                devotion to heritage and balance. Rooted in Indonesia’s rich traditions, we reinterpret ancient wellness
                philosophies into refined, multisensory experiences, and create spaces to return home to: to calm, to
                culture, to self.
            </p>
        </div>
    </div>
</section>

<section class="bg-primary py-36">
    <div class="container grid md:grid-cols-2">
        <div>
            <h5 class="mb-9 text-gold">Our Commitment</h5>
            <h4 class="max-w-[487px] text-beige">
                Amerta’s dedication to maintain a 5-star standard and crafting unforgettable experiences for our valued
                customers is shown and nurtured through our vision, mission, culture, motto, and values.
            </h4>
        </div>
        <!-- TODO: Slick SLider Visi Misi -->
        <div>

        </div>
    </div>
</section>

<section class="relative overflow-hidden" id="culture">
    <div class="absolute w-full h-[110%] left-0 -top-[10%]" data-scroll data-scroll-speed="2">
        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/images/bg-culture.png"
            alt="">
    </div>
    <div class="container flex flex-col h-screen text-center justify-center items-center relative z-10">
        <h5 class="text-gold mb-6">Our Culture</h5>
        <h4 class="max-w-[729px] text-beige">
            In Amerta’s esteemed environment, we nurture and enhance our offered personalized services and the mutual
            respect by embracing the reliable principles of amiability and positive attitude.
        </h4>
    </div>
</section>

<section class="relative bg-beige py-28">
    <div class="absolute w-full h-full left-0 top-0 opacity-10">
        <img class="w-full h-full object-cover object-top"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-beige.png" alt="">
    </div>
    <div class="container relative z-10">
        <h4 class="text-terracota mb-16">Values</h4>
        <div class="grid md:grid-cols-3 gap-20">
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/heart.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Commitment</h5>
                <p class="body max-w-[266px]">An unwavering dedication to enhance our brand’s and our clients’ image by
                    endlessly
                    developing an
                    authentic service.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/idea.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Innovation</h5>
                <p class="body max-w-[266px]">An unyielding aim for innovation to elevate our core principle of customer
                    satisfaction to the highest level.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/star.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Uniqueness</h5>
                <p class="body max-w-[266px]">An adamant intention to be a unique trendsetter to the hospitality
                    industry and our clients’ establishments.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/review.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Memorable Experience</h5>
                <p class="body max-w-[266px]">A supporting empowerment for our staff to consistently deliver first-rate,
                    memorable, and personalized service for our guests.</p>
            </div>
            <div>
                <div class="mb-9 w-[74px] h-[74px] rounded-full bg-gold/20 flex justify-center items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/guarantee.png" alt="">
                </div>
                <h5 class="text-gold mb-1">Consistent</h5>
                <p class="body max-w-[281px]">A committed pledge to prioritize the implementation of our top-tier
                    quality services to meet our guests’ expectations of excellence.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>