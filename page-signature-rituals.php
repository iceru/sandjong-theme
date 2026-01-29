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

<section class="bg-beige py-28 relative">
    <div class="container">
        <h4 class="text-center max-w-[1000px] mx-auto">
            Our treatments are rooted in ancestral wisdom and delivered with calm precision. Each one designed to
            restore balance through touch, tradition, and intention. We draw from nature, from culture, and from the
            knowledge that wellness begins when you come home to yourself.
        </h4>
    </div>
</section>

<section class="py-10 bg-beige">
    <div class="container">
        <div class="flex border-terracota/60 border-b mb-9">
            <div class="tab-trigger active flex justify-center w-full" data-target="#signature">
                <h5 class="pb-7 text-terracota text-center">
                    Signature Treatment
                </h5>
            </div>
            <div class="tab-trigger flex justify-center w-full" data-target="#package">
                <h5 class="pb-7 text-terracota text-center">
                    Package Treatment
                </h5>
            </div>
            <div class="tab-trigger flex justify-center w-full" data-target="#simple">
                <h5 class="pb-7 text-terracota text-center">
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
                <div class="pr-6">
                    <div class="bg-[#F8E6D2] px-4 md:px-6 py-2 grid md:grid-cols-2 relative rounded-xl gap-6 md:gap-12">
                        <div class="w-[98%] h-4 rounded-t-xl -top-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute">
                        </div>
                        <div class="w-[98%] h-4 rounded-b-xl -bottom-4 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute">
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/signature-1.png" alt="">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <h5 class="text-primary mb-4 md:mb-11 md:mt-9">
                                    Lamoan Puan & Tuan
                                </h5>
                                <p class="max-w-[394px]">
                                    This wellness spa journey is a perfect way to enjoy a private experience with your
                                    special someone. Embark on this pampering journey for two that starts with a foot
                                    cleansing ritual, then a gentle powder-based exfoliating scrub made from natural
                                    herbs
                                    and followed by an aromatherapy bath. The use of custom-blend massage oil helps
                                    restore
                                    and retain the skin’s moisture on a much deeper level, eases muscular tension, and
                                    invites a sense of bliss.
                                </p>
                            </div>
                            <div>
                                <div
                                    class="mb-7 inline-flex items-center space-x-2 rounded-lg py-1 px-1.5 bg-gold/20 text-gold">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png"
                                        alt="">
                                    <span>120 Minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-6">
                    <div class="bg-[#F8E6D2] px-6 py-2 grid md:grid-cols-2 relative rounded-xl gap-12">
                        <div class="w-[98%] h-3 rounded-t-xl -top-3 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute">
                        </div>
                        <div class="w-[98%] h-3 rounded-b-xl -bottom-3 left-1/2 -translate-x-1/2 bg-[#F8E6D2] absolute">
                        </div>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/selayang.png" alt="">
                        </div>
                        <div class="flex flex-col justify-between">
                            <div>
                                <h5 class="text-primary mb-11 mt-9">
                                    Selayang Sandjong
                                </h5>
                                <p class="max-w-[394px]">
                                    A relieving series of extensive spa experiences for total rejuvenation, begin with a
                                    natural body scrub, followed with a body wrap to nourish your skin and finish with a
                                    body massage that rejuvenates your body.
                                </p>
                            </div>
                            <div>
                                <div
                                    class="mb-7 inline-flex items-center space-x-2 rounded-lg py-1 px-1.5 bg-gold/20 text-gold">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png"
                                        alt="">
                                    <span>120 Minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="grid md:grid-cols-2">
                    <div class="mb-10 md:mb-0">
                        <h5 class="text-terracota">Sandjong Scrub</h5>
                    </div>
                    <div>
                        <div class="flex items-start space-x-14 pb-12 mb-12 border-b border-gold/50">
                            <div>
                                <h4 class="text-primary mb-10">Sirih Scrub</h4>
                                <p>
                                    This magic leaf helps reduce back pain, muscle tension, brighten the skin, and
                                    minimize
                                    black spots, especially for pregnant women.
                                </p>
                            </div>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-1 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <div class="flex items-start space-x-14 pb-12 mb-12 border-b border-gold/50">
                            <div>
                                <h4 class="text-primary mb-10">Lemon Scrub</h4>
                                <p>
                                    Lemon is a natural exfoliating agent. Combined with Himalayan salt, they become a
                                    unique concoction that will lift all dead skin cells, maintain your body fluid
                                    balance, and leave your skin years younger.
                                </p>
                            </div>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-1 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <div class="flex items-start space-x-14 pb-12 mb-12">
                            <div>
                                <h4 class="text-primary mb-10">Almond Scrub</h4>
                                <p>
                                    LAlmonds and oatmeal body scrub works wonder in maintaining moisture, brightening,
                                    and reducing stretch marks. This mixture will also help treat skin conditions for
                                    women after childbirth.
                                </p>
                            </div>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-1 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-2 mb-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png"
                        class="rotate-180" alt="">
                    <div class="w-full border border-dashed h-[1px] border-gold"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow-gold.png" alt="">
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
            <div>
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/acu.png"
                            class="rounded-lg w-full h-[384px] object-cover mb-5" alt="">
                        <div class="flex justify-between mb-5">
                            <h5 class="text-primary">Face Acupressure</h5>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <p>
                            Facial massage technique involves applying pressure to specific points on the face. This
                            treatment can help improve blood circulation and alleviate tension, providing both health
                            and beauty benefits
                        </p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/herbal.png"
                            class="rounded-lg w-full h-[384px] object-cover mb-5" alt="">
                        <div class="flex justify-between mb-5">
                            <h5 class="text-primary">Herbal Infused Bath</h5>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <p>
                            Propel your body and soul to a relaxing heaven through the herbs and spices water treatment.
                        </p>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/acu.png"
                            class="rounded-lg w-full h-[384px] object-cover mb-5" alt="">
                        <div class="flex justify-between mb-5">
                            <h5 class="text-primary">Intimacy Care (Ratus)</h5>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <p>
                            Ratus is a specific treatment for women’s intimate parts, recommended for women after the
                            delivery period or if you have particular concerns with your private area.
                        </p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/upper-body.png"
                            class="rounded-lg w-full h-[384px] object-cover mb-5" alt="">
                        <div class="flex justify-between mb-5">
                            <h5 class="text-primary">Upper Body Reliever</h5>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <p>
                            Tension often occurs on pressure points along the upper body, namely the back, shoulder, and
                            head. This treatment works along the meridian in harmonious synergy and relieves muscle
                            tension in the upper body resulting in a fresher feeling throughout the day.
                        </p>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/milk.png"
                            class="rounded-lg w-full h-[384px] object-cover mb-5" alt="">
                        <div class="flex justify-between mb-5">
                            <h5 class="text-primary">Milk Honey Bath</h5>
                            <div
                                class="flex items-center bg-gold/20 text-gold space-x-2 rounded-lg py-0.5 px-2 shrink-0 mt-1">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/timer.png" alt="">
                                <span>45'</span>
                            </div>
                        </div>
                        <p>
                            Enjoy the soothing treatment experience in honey and milk that helps brighten the skin.
                        </p>
                    </div>
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