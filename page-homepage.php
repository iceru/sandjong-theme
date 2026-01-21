<?php get_header(); ?>

<section id="header" class="h-auto flex flex-col justify-end items-center relative aspect-video w-full">
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
            <div class="button-top bg-gold"></div>
            <div class="button-bottom bg-gold "></div>
            Learn More
        </a>
    </div>
</section>

<section class="bg-beige py-28">
    <div>
        <h4 class="mb-8 text-center">A Window to the Soul</h4>
    </div>
</section>

<section class="bg-beige">
    <div class="container">
        <h5>Sandjong's Wellness Branches</h5>
    </div>
</section>

<section id="posts" class="bg-primary pb-40 relative z-10">

    <img class="w-full h-[526px] object-cover relative z-10"
        src="<?php echo get_template_directory_uri(); ?>/images/bg-posts-2.png" alt="">
    <div class="absolute w-full h-[80%] left-0 bottom-0">
        <img class="w-full h-full object-cover object-top z-0"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-footer.jpg" alt="">
    </div>
    <div class="grid lg:grid-cols-2 bg-beige mx-auto max-w-[1100px] p-16 rounded-lg z-10 relative -mt-40">
        <div>
            <h5 class="text-gold mb-4">Wellness Whisper</h5>
            <h4 class="mb-9">Gentle Notes From Sandjong</h4>
            <p class="body text-body mb-20">
                Wellness Whisper is our way of keeping you close to Sandjong’s journey. Where we share updates and open
                a window into our world: the traditions that inspire us, the rituals we are creating, and the milestones
                we are reaching together.
            </p>
            <a href="" class="button bg-terracota">Read More</a>
        </div>
        <div>

        </div>
    </div>
</section>

<section id="franchise" class="h-screen flex flex-col justify-center items-center relative">
    <div class="absolute left-0 top-0 w-full h-full z-0">
        <img class="w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/images/bg-franchise.jpg" alt="">
    </div>
    <div class="absolute left-0 top-0 w-full h-full bg-black/50 z-10">
    </div>

    <div class="text-beige relative z-20 text-center">
        <h3 class="mx-auto max-w-[539px] mb-6">Growing Wellness, Building Together</h3>
        <p class="body mx-auto max-w-[461px] mb-9">We invite you to join our journey of culture and care through
            partnerships
            and franchises. Together, let’s
            build sanctuaries that blend growth with heritage and bring meaningful wellness to more communities and
            souls.
        </p>
        <div class="flex justify-center items-center space-x-8">
            <a href="" class="button bg-terracota">
                <div class="button-top bg-terracota"></div>
                <div class="button-bottom bg-terracota "></div>
                Spa Operation
            </a>
            <a href="" class="button bg-gold group">
                <div class="button-top bg-gold"></div>
                <div class="button-bottom bg-gold "></div>
                For Franchise
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>