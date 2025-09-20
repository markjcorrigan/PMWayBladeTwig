<div>

        @auth


        <!--BODY-->



        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.26.0/dist/tabler-icons.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('PMWayLanding/css/base.css') }}" />
        <link rel="stylesheet" href="{{ asset('PMWayLanding/css/style.css') }}" />
        <link rel="stylesheet" href="{{asset('PMWayLanding/css/backToTop.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome-pro.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        <!-- start: Back To Top -->
        <div class="progress-wrap" id="scrollUp">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>


        <!--BODY-->







{{--    <h5>Based on recent project performance, where would you pin down your Capability Maturity level?</h5>--}}
{{--    <br>--}}


        <!-- Hero -->
        <section class="hero__content">
            <div class="grid-container">
                <div class="heading-row">
                    <h2 class="hero__title text-dark text-4xl mt-2 mb-8 weight-500 sm:text-4xl xs:mb-5">
                        Based on recent project performance, where is the
                        <span class="text-primary">Capability Maturity Level?</span>
                    </h2>
                </div>
                <div class="image-row">
                    <img src="/images/dunningkrugercorruption.jpg" alt="Dunning Kruger" class="image">
                    <img alt="" id="pin" height="144" src="/images/pinlarge.png" width="152">
                </div>
            </div>
        </section>

        <!-- Our Vision -->
        <section class="our-vision">
            <div class="container">
                <div class="our-vision__content">
                    <div class="grid grid-cols-2 gap-6 md:gap-2 sm:grid-col sm:gap-4">
                        <div class="col1-2">
                            <div class="section-title sm:mb-1">
                                <div class="section-title__name"><span>Our Vision</span></div>
                                <h2 class="section-title__title xs:mb-2">
                                    The values that drive everything we do
                                </h2>
                            </div>
                            <div class="our-vision__action">
                                <a href="#" class="btn btn-dark">Learn More</a>
                            </div>
                        </div>
                        <div class="col1-2">
                            <div class="benefits">
                                <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-smart-home"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Dream Home
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Discover your ideal living space with our premium
                                            featured real estate listings.
                                        </p>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-coin"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Smart Investment
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Secure high-value, future-ready property and investment
                                            opportunities today.
                                        </p>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-businessplan"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Luxury Living
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Explore exclusive, sophisticated properties tailored to
                                            your perfect lifestyle.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Properties -->
        <section class="properties">
            <div class="container">
                <div class="properties__top">
                    <div class="grid grid-cols-2 gap-6 md:gap-2 md:grid-col">
                        <div class="col1-2">
                            <div class="section-title md:mb-1">
                                <div class="section-title__name"><span>Properties</span></div>
                                <h2 class="section-title__title">
                                    Ready to buy your dream home? find it here
                                </h2>
                            </div>
                        </div>
                        <div
                            class="col1-2 flex justify-end items-center md:justify-start">
                            <div class="properties__action">
                                <a href="#" class="btn btn-dark">All Properties</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="properties__content mt-3">
                    <div class="grid grid-cols-3 gap-2 md:grid-cols-2 xs:grid-col">
                        <div class="property pb-3">
                            <div
                                class="property__image relative rounded-2xl overflow-hidden mb-2">
                                <div class="property__badge">
                                    <div
                                        class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                        <i class="ti ti-coin-filled text-base"></i>

                                        <span class="badge__text weight-500 text-sm">
                        For Sale
                      </span>
                                    </div>
                                </div>

                                <img
                                    class="size-100 cover"
                                    src="PMWayLanding/assets/images/properties/1.jpg"
                                    alt="Property 1" />
                            </div>
                            <div class="property__location flex items-center gap-1 mb-1">
                                <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                <span class="property__location__text text-sm text-grey">
                    4321 Cedar Lane, NY
                  </span>
                            </div>
                            <div class="property__title">
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Maple Grove
                                    </a>
                                </h4>
                            </div>
                            <div class="property__options flex items-center gap-1">
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bed-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bath-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-image-in-picture text-base"></i>
                                    <span>2109 sq.ft</span>
                                </div>
                            </div>
                        </div>
                        <div class="property pb-3">
                            <div
                                class="property__image relative rounded-2xl overflow-hidden mb-2">
                                <div class="property__badge">
                                    <div
                                        class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                        <i class="ti ti-smart-home text-base"></i>

                                        <span class="badge__text weight-500 text-sm">
                        For Rent
                      </span>
                                    </div>
                                </div>

                                <img
                                    class="size-100 cover"
                                    src="PMWayLanding/assets/images/properties/2.jpg"
                                    alt="Property 2" />
                            </div>
                            <div class="property__location flex items-center gap-1 mb-1">
                                <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                <span class="property__location__text text-sm text-grey">
                    4321 Cedar Lane, NY
                  </span>
                            </div>
                            <div class="property__title">
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Pinecrest Villa
                                    </a>
                                </h4>
                            </div>
                            <div class="property__options flex items-center gap-1">
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bed-filled text-base"></i>
                                    <span>2</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bath-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-image-in-picture text-base"></i>
                                    <span>2109 sq.ft</span>
                                </div>
                            </div>
                        </div>
                        <div class="property pb-3">
                            <div
                                class="property__image relative rounded-2xl overflow-hidden mb-2">
                                <div class="property__badge">
                                    <div
                                        class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                        <i class="ti ti-coin-filled text-base"></i>
                                        <span class="badge__text weight-500 text-sm">
                        For Sale
                      </span>
                                    </div>
                                </div>

                                <img
                                    class="size-100 cover"
                                    src="PMWayLanding/assets/images/properties/3.jpg"
                                    alt="Property 3" />
                            </div>
                            <div class="property__location flex items-center gap-1 mb-1">
                                <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                <span class="property__location__text text-sm text-grey">
                    4321 Cedar Lane, NY
                  </span>
                            </div>
                            <div class="property__title">
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Cedar Heights
                                    </a>
                                </h4>
                            </div>
                            <div class="property__options flex items-center gap-1">
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bed-filled text-base"></i>
                                    <span>3</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bath-filled text-base"></i>
                                    <span>2</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-image-in-picture text-base"></i>
                                    <span>2109 sq.ft</span>
                                </div>
                            </div>
                        </div>
                        <div class="property pb-3">
                            <div
                                class="property__image relative rounded-2xl overflow-hidden mb-2">
                                <div class="property__badge">
                                    <div
                                        class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                        <i class="ti ti-coin-filled text-base"></i>
                                        <span class="badge__text weight-500 text-sm">
                        For Sale
                      </span>
                                    </div>
                                </div>

                                <img
                                    class="size-100 cover"
                                    src="PMWayLanding/assets/images/properties/4.jpg"
                                    alt="Property 4" />
                            </div>
                            <div class="property__location flex items-center gap-1 mb-1">
                                <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                <span class="property__location__text text-sm text-grey">
                    8765 Birchwood Street, CA
                  </span>
                            </div>
                            <div class="property__title">
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Birchwood Townhouse
                                    </a>
                                </h4>
                            </div>
                            <div class="property__options flex items-center gap-1">
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bed-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bath-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-image-in-picture text-base"></i>
                                    <span>2050 sq.ft</span>
                                </div>
                            </div>
                        </div>
                        <div class="property pb-3">
                            <div
                                class="property__image relative rounded-2xl overflow-hidden mb-2">
                                <div class="property__badge">
                                    <div
                                        class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                        <i class="ti ti-smart-home text-base"></i>
                                        <span class="badge__text weight-500 text-sm">
                        For Rent
                      </span>
                                    </div>
                                </div>

                                <img
                                    class="size-100 cover"
                                    src="PMWayLanding/assets/images/properties/5.jpg"
                                    alt="Property 5" />
                            </div>
                            <div class="property__location flex items-center gap-1 mb-1">
                                <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                <span class="property__location__text text-sm text-grey">
                    7890 Serenity Avenue, CA
                  </span>
                            </div>
                            <div class="property__title">
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Sunset Ridge Retreat
                                    </a>
                                </h4>
                            </div>
                            <div class="property__options flex items-center gap-1">
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bed-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bath-filled text-base"></i>
                                    <span>1</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-image-in-picture text-base"></i>
                                    <span>3000 sq.ft</span>
                                </div>
                            </div>
                        </div>
                        <div class="property pb-3">
                            <div
                                class="property__image relative rounded-2xl overflow-hidden mb-2">
                                <div class="property__badge">
                                    <div
                                        class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                        <i class="ti ti-smart-home text-base"></i>
                                        <span class="badge__text weight-500 text-sm">
                        For Rent
                      </span>
                                    </div>
                                </div>

                                <img
                                    class="size-100 cover"
                                    src="PMWayLanding/assets/images/properties/6.jpg"
                                    alt="Property 6" />
                            </div>
                            <div class="property__location flex items-center gap-1 mb-1">
                                <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                <span class="property__location__text text-sm text-grey">
                    7890 Serenity Avenue, CA
                  </span>
                            </div>
                            <div class="property__title">
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Serenity Heights
                                    </a>
                                </h4>
                            </div>
                            <div class="property__options flex items-center gap-1">
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bed-filled text-base"></i>
                                    <span>2</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-bath-filled text-base"></i>
                                    <span>3</span>
                                </div>
                                <div
                                    class="property__options__item flex items-center gap-1 text-sm text-grey">
                                    <i class="ti ti-image-in-picture text-base"></i>
                                    <span>3000 sq.ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="features">
            <div class="container">
                <div class="features__inner rounded-2xl">
                    <div class="features__top mb-8">
                        <div class="section-title text-center max-w-sm mx-auto">
                            <div class="section-title__name"><span>Features</span></div>
                            <h2 class="section-title__title">
                                Discover the advantages and exclusive benefits
                            </h2>
                        </div>
                    </div>
                    <div class="features__content">
                        <div
                            class="grid grid-cols-3 gap-6 md:gap-2 sm:grid-cols-2 sm:gap-4 xs:grid-col xs:gap-2">
                            <div class="feature pb-3">
                                <div
                                    class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                    <i class="ti ti-clipboard-check text-primary text-3xl"></i>
                                </div>
                                <h4 class="text-2xl weight-500 mt-2 mb-2">Expert Guidance</h4>
                                <p class="text-xl text-grey m0 xs">
                                    Receive professional insights to make informed real estate
                                    decisions confidently.
                                </p>
                            </div>
                            <div class="feature pb-3">
                                <div
                                    class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                    <i class="ti ti-michelin-star text-primary text-3xl"></i>
                                </div>
                                <h4 class="text-2xl weight-500 mt-2 mb-2">
                                    Tailored Solutions
                                </h4>
                                <p class="text-xl text-grey m0">
                                    We customize property options based on your specific needs
                                    and preferences.
                                </p>
                            </div>
                            <div class="feature pb-3">
                                <div
                                    class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                    <i class="ti ti-microscope text-primary text-3xl"></i>
                                </div>
                                <h4 class="text-2xl weight-500 mt-2 mb-2">
                                    Market Expertise
                                </h4>
                                <p class="text-xl text-grey m0">
                                    Leverage our deep understanding of market trends for smart
                                    investments.
                                </p>
                            </div>
                            <div class="feature">
                                <div
                                    class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                    <i class="ti ti-loader-3 text-primary text-3xl"></i>
                                </div>
                                <h4 class="text-2xl weight-500 mt-2 mb-2">
                                    Seamless Process
                                </h4>
                                <p class="text-xl text-grey m0">
                                    Enjoy a smooth, stress-free experience from property search
                                    to final transaction.
                                </p>
                            </div>
                            <div class="feature">
                                <div
                                    class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                    <i class="ti ti-heart-handshake text-primary text-3xl"></i>
                                </div>
                                <h4 class="text-2xl weight-500 mt-2 mb-2">Client Focused</h4>
                                <p class="text-xl text-grey m0">
                                    We prioritize your satisfaction with personalized service
                                    every step of the perfect way.
                                </p>
                            </div>
                            <div class="feature">
                                <div
                                    class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                    <i class="ti ti-thumb-up text-primary text-3xl"></i>
                                </div>
                                <h4 class="text-2xl weight-500 mt-2 mb-2">
                                    Trusted Partners
                                </h4>
                                <p class="text-xl text-grey m0">
                                    Work with a reliable team committed to delivering
                                    exceptional results for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our mission -->
        <section class="our-mission">
            <div class="container">
                <div class="our-mission__content grid gap-5 items-center md:gap-2">
                    <div
                        class="our-mission__image rounded-2xl overflow-hidden sm:w-80 sm:mx-auto xs:w-full">
                        <img
                            class="size-100 cover"
                            src="PMWayLanding/assets/images/mission-image.jpg"
                            alt="Our Mission" />
                    </div>
                    <div class="our-mission__text">
                        <h3 class="our-mission__title text-2xl weight-500 mb-1-5">
                            At Realistic,
                        </h3>
                        <p class="our-mission__description text-xl text-grey w-90 m0">
                            our mission is simple: to provide you with the best real estate
                            solutions, tailored to meet your needs. We understand that
                            finding the perfect property is more than just a transaction
                            it’s about creating a space where life happens. Our dedicated
                            team combines industry expertise.
                        </p>
                        <div class="our-mission__signature mt-4">
                            <img
                                class="size-100 contain"
                                src="PMWayLanding/assets/images/signature.png"
                                alt="Signature" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How it works -->
        <section class="how-it-works">
            <div class="container">
                <div class="how-it-works__top">
                    <div class="section-title text-center max-w-sm mx-auto">
                        <div class="section-title__name"><span>How it works</span></div>
                        <h2 class="section-title__title">
                            Discover the <span class="text-primary">advantages</span> and
                            exclusive benefits
                        </h2>
                    </div>
                </div>
                <div class="how-it-works__content">
                    <div
                        class="grid grid-cols-2 gap-6 items-center pt-3 sm:grid-col-reverse sm:gap-4">
                        <div class="col1-2 sm:order-2">
                            <div class="tabs flex flex-col gap-5">
                                <div class="tabs__item active" data-tab="1">
                                    <h3 class="text-2xl weight-500 mb-1-5">
                                        Find Your Ideal Property
                                    </h3>
                                    <p class="text-xl text-grey m0 xs:text-base">
                                        Browse our extensive listings, filter by location, price,
                                        and features to discover your perfect home.
                                    </p>
                                </div>
                                <div class="tabs__item" data-tab="2">
                                    <h3 class="text-2xl weight-500 mb-1-5">
                                        Schedule a Viewing
                                    </h3>
                                    <p class="text-xl text-grey m0 xs:text-base">
                                        Easily book a property tour online at a time that suits
                                        you, or request a virtual walkthrough.
                                    </p>
                                </div>
                                <div class="tabs__item" data-tab="3">
                                    <h3 class="text-2xl weight-500 mb-1-5">Secure Your Deal</h3>
                                    <p class="text-xl text-grey m0 xs:text-base">
                                        Make an offer or apply for financing through our website,
                                        and let our experts guide you.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col1-2 sm:order-1">
                            <div class="how-it-works__tabs__content relative">
                                <div
                                    class="image-wrapper rounded-2xl overflow-hidden"
                                    data-tab="1">
                                    <img
                                        class="size-100 cover flex"
                                        src="PMWayLanding/assets/images/advantage-1.jpg"
                                        alt="Advantage 1" />
                                </div>
                                <div
                                    class="image-wrapper rounded-2xl overflow-hidden"
                                    data-tab="2">
                                    <img
                                        class="size-100 cover flex"
                                        src="PMWayLanding/assets/images/advantage-2.jpg"
                                        alt="Advantage 2" />
                                </div>
                                <div
                                    class="image-wrapper rounded-2xl overflow-hidden"
                                    data-tab="3">
                                    <img
                                        class="size-100 cover flex"
                                        src="PMWayLanding/assets/images/advantage-3.jpg"
                                        alt="Advantage 3" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why choose us -->
        <section class="why-choose-us">
            <div class="container">
                <div class="why-choose-us__top">
                    <div class="section-title max-w-sm">
                        <div class="section-title__name"><span>Why choose us</span></div>
                        <h2 class="section-title__title">
                            What makes us the right partner for your real estate?
                        </h2>
                    </div>
                </div>

                <div
                    class="why-choose-us__image relative rounded-2xl overflow-hidden">
                    <img
                        class="size-100 cover"
                        src="PMWayLanding/assets/images/why-choose-us.jpg"
                        alt="Why choose us" />
                    <div class="why-choose-us__content">
                        <div class="icon-list p-3 rounded-2xl bg-white">
                            <div class="icon-list__item flex gap-2 mb-3">
                                <i class="ti ti-check text-primary text-xl"></i>
                                <div class="icon-list__text">
                                    <h5 class="text-xl weight-500 mb-0-5">
                                        Expert Local Knowledge
                                    </h5>
                                    <p class="text-grey m0">
                                        Extensive experience and insights into the perfect local
                                        market.
                                    </p>
                                </div>
                            </div>
                            <div class="icon-list__item flex gap-2 mb-3">
                                <i class="ti ti-check text-primary text-xl"></i>
                                <div class="icon-list__text">
                                    <h5 class="text-xl weight-500 mb-0-5">
                                        Personalized Service
                                    </h5>
                                    <p class="text-grey m0">
                                        Customized solutions for a smooth, tailored experience.
                                    </p>
                                </div>
                            </div>
                            <div class="icon-list__item flex gap-2">
                                <i class="ti ti-check text-primary text-xl"></i>
                                <div class="icon-list__text">
                                    <h5 class="text-xl weight-500 mb-0-5">
                                        Proven Track Record
                                    </h5>
                                    <p class="text-grey m0">
                                        A history of 100+ successful projects and satisfied
                                        clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials">
            <div class="container">
                <div
                    class="testimonials__inner p-4 rounded-2xl bg-primary__light xs:px-2">
                    <div class="testimonials__top pb-1">
                        <div class="section-title max-w-sm mx-auto text-center">
                            <div class="section-title__name"><span>Testimonials</span></div>
                            <h2 class="section-title__title">
                                Real feedback from our satisfied clients
                            </h2>
                        </div>
                    </div>
                    <div class="testimonials__content max-w-md mx-auto">
                        <!-- Slider main container -->
                        <div class="swiper pb-4">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide pl-4 pr-4 xs:px-0">
                                    <div
                                        class="grid testimonial__grid gap-3 text-white pt-5 pb-5 pl-3 pr-3 bg-primary rounded-2xl">
                                        <div
                                            class="testimonial__image rounded-full overflow-hidden">
                                            <img
                                                class="size-100 cover rounded-2xl"
                                                src="PMWayLanding/assets/images/testimonials/1.jpg"
                                                alt="Testimonial 1" />
                                        </div>
                                        <div class="testimonial__text">
                                            <p class="text-2xl weight-500 line-h-1-5">
                                                Realestic turned our house hunt into a smooth and
                                                enjoyable experience. Perfect for anyone looking to
                                                buy their first home!
                                            </p>
                                            <div class="mt-2">
                                                <p class="name text-xl weight-500 mb-0-5">
                                                    Andy smith
                                                </p>
                                                <p class="place opacity-7 text-sm">Los Angeles, CA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide pl-4 pr-4 xs:px-0">
                                    <div
                                        class="grid testimonial__grid gap-3 text-white pt-5 pb-5 pl-3 pr-3 bg-primary rounded-2xl">
                                        <div
                                            class="testimonial__image rounded-full overflow-hidden">
                                            <img
                                                class="size-100 cover rounded-2xl"
                                                src="PMWayLanding/assets/images/testimonials/2.jpg"
                                                alt="Testimonial 2" />
                                        </div>
                                        <div class="testimonial__text">
                                            <p class="text-2xl weight-500 line-h-1-5">
                                                Thanks to Realestic, buying our new home was a breeze.
                                                Ideal for newcomers to the real estate market!
                                            </p>
                                            <div class="mt-2">
                                                <p class="name text-xl weight-500 mb-0-5">
                                                    David Wlee
                                                </p>
                                                <p class="place opacity-7 text-sm">California, US</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide pl-4 pr-4 xs:px-0">
                                    <div
                                        class="grid testimonial__grid gap-3 text-white pt-5 pb-5 pl-3 pr-3 bg-primary rounded-2xl">
                                        <div
                                            class="testimonial__image rounded-full overflow-hidden">
                                            <img
                                                class="size-100 cover rounded-2xl"
                                                src="PMWayLanding/assets/images/testimonials/3.jpg"
                                                alt="Testimonial 3" />
                                        </div>
                                        <div class="testimonial__text">
                                            <p class="text-2xl weight-500 line-h-1-5">
                                                Realestic made purchasing our dream home effortless
                                                and pleasant. A top choice for first-time homebuyers!
                                            </p>
                                            <div class="mt-2">
                                                <p class="name text-xl weight-500 mb-0-5">
                                                    Chris Daren
                                                </p>
                                                <p class="place opacity-7 text-sm">Tokyo, Japan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div
                                class="swiper-button-prev bg-white text-dark rounded-full xs:hidden"></div>
                            <div
                                class="swiper-button-next bg-white text-dark rounded-full xs:hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blogs -->
        <section class="blogs">
            <div class="container">
                <div class="blogs__top">
                    <div class="section-title max-w-sm">
                        <div class="section-title__name"><span>Blogs</span></div>
                        <h2 class="section-title__title">
                            Expert advice and market updates on real estate
                        </h2>
                    </div>
                </div>
                <div class="blogs__content pt-2">
                    <div class="grid grid-cols-3 gap-3 sm:grid-col">
                        <div class="blog">
                            <div class="blog__image rounded-2xl overflow-hidden mb-2">
                                <a href="#">
                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/blogs/1.jpg"
                                        alt="Blog 1" />
                                </a>
                            </div>
                            <div class="blog__category mb-1">
                                <div class="badge flex">
                                    <a
                                        href="#"
                                        class="text-sm bg-primary__light text-primary pt-1 pb-1 pl-2 pr-2 weight-500 rounded-full hover:bg-grey hover:text-white transition">
                                        Resources
                                    </a>
                                </div>
                            </div>
                            <h4 class="text-2xl weight-500 mb-1-5">
                                <a href="#" class="transition hover:text-primary">
                                    The ultimate guide to buying your first home
                                </a>
                            </h4>
                        </div>
                        <div class="blog">
                            <div class="blog__image rounded-2xl overflow-hidden mb-2">
                                <a href="#">
                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/blogs/2.jpg"
                                        alt="Blog 2" />
                                </a>
                            </div>
                            <div class="blog__category mb-1">
                                <div class="badge flex">
                                    <a
                                        href="#"
                                        class="text-sm bg-primary__light text-primary pt-1 pb-1 pl-2 pr-2 weight-500 rounded-full hover:bg-grey hover:text-white transition">
                                        Articles
                                    </a>
                                </div>
                            </div>
                            <h4 class="text-2xl weight-500 mb-1-5">
                                <a href="#" class="transition hover:text-primary">
                                    How to choose the right real estate agent for your needs
                                </a>
                            </h4>
                        </div>
                        <div class="blog">
                            <div class="blog__image rounded-2xl overflow-hidden mb-2">
                                <a href="#">
                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/blogs/3.jpg"
                                        alt="Blog 3" />
                                </a>
                            </div>
                            <div class="blog__category mb-1">
                                <div class="badge flex">
                                    <a
                                        href="#"
                                        class="text-sm bg-primary__light text-primary pt-1 pb-1 pl-2 pr-2 weight-500 rounded-full hover:bg-grey hover:text-white transition">
                                        News
                                    </a>
                                </div>
                            </div>
                            <h4 class="text-2xl weight-500 mb-1-5">
                                <a href="#" class="transition hover:text-primary">
                                    Key factors to consider when investing in rental properties
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <section class="contact">
            <div class="container">
                <div
                    class="contact__content bg-primary text-white p-3 rounded-2xl text-center">
                    <div class="max-w-md mx-auto">
                        <p class="text-2xl weight-500 mb-2">Need help to put in the processes that will work for your company?</p>
                        <br>


                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 order-2 order-md-1">
                                    <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                                        <div class="section-header">
                                            <h2 class="section-title">Let’s work together!  Contact me via the form below.</h2>

                                        </div>

                                        <div class="tj-contact-form">
                                            <form method="POST" action="{{ route('store.contact.message') }}">
                                                @csrf
                                                <div class="row gx-3">
                                                    <div class="col-sm-6">
                                                        <div class="form_group">
                                                            <input type="text" name="fname" id="conName" placeholder="First name"
                                                                   autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form_group">
                                                            <input type="text" name="lname" id="conLName" placeholder="Last name"
                                                                   autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form_group">
                                                            <input type="email" name="email" id="conEmail" placeholder="Email address"
                                                                   autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form_group">
                                                            <input type="tel" name="phone" id="conPhone" placeholder="Phone number"
                                                                   autocomplete="off" />
                                                        </div>
                                                    </div>
                                                    @php
                                                        $services = App\Models\Service::all();
                                                    @endphp
                                                    <div class="col-12">
                                                        <div class="form_group">
                                                            <select name="service_id" id="conService" class="tj-nice-select">
                                                                <option value="" selected disabled>Choose Service</option>
                                                                @foreach ($services as $service)
                                                                    <option value="{{ $service->id }}"> {{ Str::title($service->service_title) }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form_group">
                                                            <textarea name="desription" id="conMessage" placeholder="Desription"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form_btn">
                                                            <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- CONTACT SECTION END -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ asset('PMWayLanding/js/app.js') }}"></script>
        <script src="{{ asset('PMWayLanding/js/scrollreveal.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $("#pin").draggable();

            });

        </script>


        <script src="{{asset('PMWayLanding/js/backToTop.js')}}"></script>
        <script src="{{asset('frontend/assets/js/smooth-scroll.js')}}"></script>
        <script src="{{asset('frontend/assets/js/validate.min.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
            @endif
        </script>




        @endauth






            {{-- <h1 class="text-3xl font-bold underline">--}}
            {{-- Hello world!--}}
            {{-- </h1>--}}

            @guest



                <!--BODY-->



                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.26.0/dist/tabler-icons.min.css" />
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <link rel="stylesheet" href="{{ asset('PMWayLanding/css/base.css') }}" />
                <link rel="stylesheet" href="{{ asset('PMWayLanding/css/style.css') }}" />
                <link rel="stylesheet" href="{{asset('PMWayLanding/css/backToTop.css')}}" />
                <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome-pro.min.css')}}" />
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

                <!-- start: Back To Top -->
                <div class="progress-wrap" id="scrollUp">
                    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                    </svg>
                </div>
                <!-- end: Back To Top -->

{{--        <main class="site-main">--}}
            <!-- Hero -->
                <section class="hero__content">
                    <div class="grid-container">
                        <div class="heading-row">
                            <h2 class="hero__title text-dark text-4xl mt-2 mb-8 weight-500 sm:text-4xl xs:mb-5">
                                Based on recent project performance, where is the
                                <span class="text-primary">Capability Maturity Level?</span>
                            </h2>
                        </div>
                        <div class="image-row">
                            <img src="/images/dunningkrugereffect2025.jpg" alt="Dunning Kruger" class="image">
                            <img alt="" id="pin" height="144" src="/images/pinlarge.png" width="152">
                        </div>
                    </div>
                </section>


            <!-- Our Vision -->
            <section class="our-vision">
                <div class="container">
                    <div class="our-vision__content">
                        <div class="grid grid-cols-2 gap-6 md:gap-2 sm:grid-col sm:gap-4">
                            <div class="col1-2">
                                <div class="section-title sm:mb-1">
                                    <div class="section-title__name"><span>Our Vision</span></div>
                                    <h2 class="section-title__title xs:mb-2">
                                        The values that drive everything we do
                                    </h2>
                                </div>
                                <div class="our-vision__action">
                                    <a href="#" class="btn btn-dark">Learn More</a>
                                </div>
                            </div>
                            <div class="col1-2">
                                <div class="benefits">
                                    <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                        <div class="benefits__item__icon">
                                            <i class="ti ti-smart-home"></i>
                                        </div>
                                        <div class="benefits__item__content flex-1">
                                            <h4
                                                class="benefits__item__title text-2xl mb-1-5 weight-500">
                                                Dream Home
                                            </h4>
                                            <p
                                                class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                                Discover your ideal living space with our premium
                                                featured real estate listings.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                        <div class="benefits__item__icon">
                                            <i class="ti ti-coin"></i>
                                        </div>
                                        <div class="benefits__item__content flex-1">
                                            <h4
                                                class="benefits__item__title text-2xl mb-1-5 weight-500">
                                                Smart Investment
                                            </h4>
                                            <p
                                                class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                                Secure high-value, future-ready property and investment
                                                opportunities today.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="benefits__item flex gap-4 md:gap-2">
                                        <div class="benefits__item__icon">
                                            <i class="ti ti-businessplan"></i>
                                        </div>
                                        <div class="benefits__item__content flex-1">
                                            <h4
                                                class="benefits__item__title text-2xl mb-1-5 weight-500">
                                                Luxury Living
                                            </h4>
                                            <p
                                                class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                                Explore exclusive, sophisticated properties tailored to
                                                your perfect lifestyle.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Properties -->
            <section class="properties">
                <div class="container">
                    <div class="properties__top">
                        <div class="grid grid-cols-2 gap-6 md:gap-2 md:grid-col">
                            <div class="col1-2">
                                <div class="section-title md:mb-1">
                                    <div class="section-title__name"><span>Properties</span></div>
                                    <h2 class="section-title__title">
                                        Ready to buy your dream home? find it here
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="col1-2 flex justify-end items-center md:justify-start">
                                <div class="properties__action">
                                    <a href="#" class="btn btn-dark">All Properties</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="properties__content mt-3">
                        <div class="grid grid-cols-3 gap-2 md:grid-cols-2 xs:grid-col">
                            <div class="property pb-3">
                                <div
                                    class="property__image relative rounded-2xl overflow-hidden mb-2">
                                    <div class="property__badge">
                                        <div
                                            class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                            <i class="ti ti-coin-filled text-base"></i>

                                            <span class="badge__text weight-500 text-sm">
                        For Sale
                      </span>
                                        </div>
                                    </div>

                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/properties/1.jpg"
                                        alt="Property 1" />
                                </div>
                                <div class="property__location flex items-center gap-1 mb-1">
                                    <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                    <span class="property__location__text text-sm text-grey">
                    4321 Cedar Lane, NY
                  </span>
                                </div>
                                <div class="property__title">
                                    <h4 class="text-2xl weight-500 mb-1-5">
                                        <a href="#" class="transition hover:text-primary">
                                            Maple Grove
                                        </a>
                                    </h4>
                                </div>
                                <div class="property__options flex items-center gap-1">
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bed-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bath-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-image-in-picture text-base"></i>
                                        <span>2109 sq.ft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property pb-3">
                                <div
                                    class="property__image relative rounded-2xl overflow-hidden mb-2">
                                    <div class="property__badge">
                                        <div
                                            class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                            <i class="ti ti-smart-home text-base"></i>

                                            <span class="badge__text weight-500 text-sm">
                        For Rent
                      </span>
                                        </div>
                                    </div>

                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/properties/2.jpg"
                                        alt="Property 2" />
                                </div>
                                <div class="property__location flex items-center gap-1 mb-1">
                                    <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                    <span class="property__location__text text-sm text-grey">
                    4321 Cedar Lane, NY
                  </span>
                                </div>
                                <div class="property__title">
                                    <h4 class="text-2xl weight-500 mb-1-5">
                                        <a href="#" class="transition hover:text-primary">
                                            Pinecrest Villa
                                        </a>
                                    </h4>
                                </div>
                                <div class="property__options flex items-center gap-1">
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bed-filled text-base"></i>
                                        <span>2</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bath-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-image-in-picture text-base"></i>
                                        <span>2109 sq.ft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property pb-3">
                                <div
                                    class="property__image relative rounded-2xl overflow-hidden mb-2">
                                    <div class="property__badge">
                                        <div
                                            class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                            <i class="ti ti-coin-filled text-base"></i>
                                            <span class="badge__text weight-500 text-sm">
                        For Sale
                      </span>
                                        </div>
                                    </div>

                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/properties/3.jpg"
                                        alt="Property 3" />
                                </div>
                                <div class="property__location flex items-center gap-1 mb-1">
                                    <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                    <span class="property__location__text text-sm text-grey">
                    4321 Cedar Lane, NY
                  </span>
                                </div>
                                <div class="property__title">
                                    <h4 class="text-2xl weight-500 mb-1-5">
                                        <a href="#" class="transition hover:text-primary">
                                            Cedar Heights
                                        </a>
                                    </h4>
                                </div>
                                <div class="property__options flex items-center gap-1">
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bed-filled text-base"></i>
                                        <span>3</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bath-filled text-base"></i>
                                        <span>2</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-image-in-picture text-base"></i>
                                        <span>2109 sq.ft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property pb-3">
                                <div
                                    class="property__image relative rounded-2xl overflow-hidden mb-2">
                                    <div class="property__badge">
                                        <div
                                            class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                            <i class="ti ti-coin-filled text-base"></i>
                                            <span class="badge__text weight-500 text-sm">
                        For Sale
                      </span>
                                        </div>
                                    </div>

                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/properties/4.jpg"
                                        alt="Property 4" />
                                </div>
                                <div class="property__location flex items-center gap-1 mb-1">
                                    <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                    <span class="property__location__text text-sm text-grey">
                    8765 Birchwood Street, CA
                  </span>
                                </div>
                                <div class="property__title">
                                    <h4 class="text-2xl weight-500 mb-1-5">
                                        <a href="#" class="transition hover:text-primary">
                                            Birchwood Townhouse
                                        </a>
                                    </h4>
                                </div>
                                <div class="property__options flex items-center gap-1">
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bed-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bath-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-image-in-picture text-base"></i>
                                        <span>2050 sq.ft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property pb-3">
                                <div
                                    class="property__image relative rounded-2xl overflow-hidden mb-2">
                                    <div class="property__badge">
                                        <div
                                            class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                            <i class="ti ti-smart-home text-base"></i>
                                            <span class="badge__text weight-500 text-sm">
                        For Rent
                      </span>
                                        </div>
                                    </div>

                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/properties/5.jpg"
                                        alt="Property 5" />
                                </div>
                                <div class="property__location flex items-center gap-1 mb-1">
                                    <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                    <span class="property__location__text text-sm text-grey">
                    7890 Serenity Avenue, CA
                  </span>
                                </div>
                                <div class="property__title">
                                    <h4 class="text-2xl weight-500 mb-1-5">
                                        <a href="#" class="transition hover:text-primary">
                                            Sunset Ridge Retreat
                                        </a>
                                    </h4>
                                </div>
                                <div class="property__options flex items-center gap-1">
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bed-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bath-filled text-base"></i>
                                        <span>1</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-image-in-picture text-base"></i>
                                        <span>3000 sq.ft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property pb-3">
                                <div
                                    class="property__image relative rounded-2xl overflow-hidden mb-2">
                                    <div class="property__badge">
                                        <div
                                            class="badge flex justify-center items-center bg-primary text-white rounded-full w-fit p-0-5 pr-1 gap-0-5">
                                            <i class="ti ti-smart-home text-base"></i>
                                            <span class="badge__text weight-500 text-sm">
                        For Rent
                      </span>
                                        </div>
                                    </div>

                                    <img
                                        class="size-100 cover"
                                        src="PMWayLanding/assets/images/properties/6.jpg"
                                        alt="Property 6" />
                                </div>
                                <div class="property__location flex items-center gap-1 mb-1">
                                    <i class="ti ti-map-pin-filled text-primary text-base"></i>
                                    <span class="property__location__text text-sm text-grey">
                    7890 Serenity Avenue, CA
                  </span>
                                </div>
                                <div class="property__title">
                                    <h4 class="text-2xl weight-500 mb-1-5">
                                        <a href="#" class="transition hover:text-primary">
                                            Serenity Heights
                                        </a>
                                    </h4>
                                </div>
                                <div class="property__options flex items-center gap-1">
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bed-filled text-base"></i>
                                        <span>2</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-bath-filled text-base"></i>
                                        <span>3</span>
                                    </div>
                                    <div
                                        class="property__options__item flex items-center gap-1 text-sm text-grey">
                                        <i class="ti ti-image-in-picture text-base"></i>
                                        <span>3000 sq.ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <section class="features">
                <div class="container">
                    <div class="features__inner rounded-2xl">
                        <div class="features__top mb-8">
                            <div class="section-title text-center max-w-sm mx-auto">
                                <div class="section-title__name"><span>Features</span></div>
                                <h2 class="section-title__title">
                                    Discover the advantages and exclusive benefits
                                </h2>
                            </div>
                        </div>
                        <div class="features__content">
                            <div
                                class="grid grid-cols-3 gap-6 md:gap-2 sm:grid-cols-2 sm:gap-4 xs:grid-col xs:gap-2">
                                <div class="feature pb-3">
                                    <div
                                        class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                        <i class="ti ti-clipboard-check text-primary text-3xl"></i>
                                    </div>
                                    <h4 class="text-2xl weight-500 mt-2 mb-2">Expert Guidance</h4>
                                    <p class="text-xl text-grey m0 xs">
                                        Receive professional insights to make informed real estate
                                        decisions confidently.
                                    </p>
                                </div>
                                <div class="feature pb-3">
                                    <div
                                        class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                        <i class="ti ti-michelin-star text-primary text-3xl"></i>
                                    </div>
                                    <h4 class="text-2xl weight-500 mt-2 mb-2">
                                        Tailored Solutions
                                    </h4>
                                    <p class="text-xl text-grey m0">
                                        We customize property options based on your specific needs
                                        and preferences.
                                    </p>
                                </div>
                                <div class="feature pb-3">
                                    <div
                                        class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                        <i class="ti ti-microscope text-primary text-3xl"></i>
                                    </div>
                                    <h4 class="text-2xl weight-500 mt-2 mb-2">
                                        Market Expertise
                                    </h4>
                                    <p class="text-xl text-grey m0">
                                        Leverage our deep understanding of market trends for smart
                                        investments.
                                    </p>
                                </div>
                                <div class="feature">
                                    <div
                                        class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                        <i class="ti ti-loader-3 text-primary text-3xl"></i>
                                    </div>
                                    <h4 class="text-2xl weight-500 mt-2 mb-2">
                                        Seamless Process
                                    </h4>
                                    <p class="text-xl text-grey m0">
                                        Enjoy a smooth, stress-free experience from property search
                                        to final transaction.
                                    </p>
                                </div>
                                <div class="feature">
                                    <div
                                        class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                        <i class="ti ti-heart-handshake text-primary text-3xl"></i>
                                    </div>
                                    <h4 class="text-2xl weight-500 mt-2 mb-2">Client Focused</h4>
                                    <p class="text-xl text-grey m0">
                                        We prioritize your satisfaction with personalized service
                                        every step of the perfect way.
                                    </p>
                                </div>
                                <div class="feature">
                                    <div
                                        class="feature__icon bg-primary__light rounded-lg p-1 flex items-center justify-center w-fit">
                                        <i class="ti ti-thumb-up text-primary text-3xl"></i>
                                    </div>
                                    <h4 class="text-2xl weight-500 mt-2 mb-2">
                                        Trusted Partners
                                    </h4>
                                    <p class="text-xl text-grey m0">
                                        Work with a reliable team committed to delivering
                                        exceptional results for you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our mission -->
            <section class="our-mission">
                <div class="container">
                    <div class="our-mission__content grid gap-5 items-center md:gap-2">
                        <div
                            class="our-mission__image rounded-2xl overflow-hidden sm:w-80 sm:mx-auto xs:w-full">
                            <img
                                class="size-100 cover"
                                src="PMWayLanding/assets/images/mission-image.jpg"
                                alt="Our Mission" />
                        </div>
                        <div class="our-mission__text">
                            <h3 class="our-mission__title text-2xl weight-500 mb-1-5">
                                At Realistic,
                            </h3>
                            <p class="our-mission__description text-xl text-grey w-90 m0">
                                our mission is simple: to provide you with the best real estate
                                solutions, tailored to meet your needs. We understand that
                                finding the perfect property is more than just a transaction
                                it’s about creating a space where life happens. Our dedicated
                                team combines industry expertise.
                            </p>
                            <div class="our-mission__signature mt-4">
                                <img
                                    class="size-100 contain"
                                    src="PMWayLanding/assets/images/signature.png"
                                    alt="Signature" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How it works -->
            <section class="how-it-works">
                <div class="container">
                    <div class="how-it-works__top">
                        <div class="section-title text-center max-w-sm mx-auto">
                            <div class="section-title__name"><span>How it works</span></div>
                            <h2 class="section-title__title">
                                Discover the <span class="text-primary">advantages</span> and
                                exclusive benefits
                            </h2>
                        </div>
                    </div>
                    <div class="how-it-works__content">
                        <div
                            class="grid grid-cols-2 gap-6 items-center pt-3 sm:grid-col-reverse sm:gap-4">
                            <div class="col1-2 sm:order-2">
                                <div class="tabs flex flex-col gap-5">
                                    <div class="tabs__item active" data-tab="1">
                                        <h3 class="text-2xl weight-500 mb-1-5">
                                            Find Your Ideal Property
                                        </h3>
                                        <p class="text-xl text-grey m0 xs:text-base">
                                            Browse our extensive listings, filter by location, price,
                                            and features to discover your perfect home.
                                        </p>
                                    </div>
                                    <div class="tabs__item" data-tab="2">
                                        <h3 class="text-2xl weight-500 mb-1-5">
                                            Schedule a Viewing
                                        </h3>
                                        <p class="text-xl text-grey m0 xs:text-base">
                                            Easily book a property tour online at a time that suits
                                            you, or request a virtual walkthrough.
                                        </p>
                                    </div>
                                    <div class="tabs__item" data-tab="3">
                                        <h3 class="text-2xl weight-500 mb-1-5">Secure Your Deal</h3>
                                        <p class="text-xl text-grey m0 xs:text-base">
                                            Make an offer or apply for financing through our website,
                                            and let our experts guide you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col1-2 sm:order-1">
                                <div class="how-it-works__tabs__content relative">
                                    <div
                                        class="image-wrapper rounded-2xl overflow-hidden"
                                        data-tab="1">
                                        <img
                                            class="size-100 cover flex"
                                            src="PMWayLanding/assets/images/advantage-1.jpg"
                                            alt="Advantage 1" />
                                    </div>
                                    <div
                                        class="image-wrapper rounded-2xl overflow-hidden"
                                        data-tab="2">
                                        <img
                                            class="size-100 cover flex"
                                            src="PMWayLanding/assets/images/advantage-2.jpg"
                                            alt="Advantage 2" />
                                    </div>
                                    <div
                                        class="image-wrapper rounded-2xl overflow-hidden"
                                        data-tab="3">
                                        <img
                                            class="size-100 cover flex"
                                            src="PMWayLanding/assets/images/advantage-3.jpg"
                                            alt="Advantage 3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why choose us -->
            <section class="why-choose-us">
                <div class="container">
                    <div class="why-choose-us__top">
                        <div class="section-title max-w-sm">
                            <div class="section-title__name"><span>Why choose us</span></div>
                            <h2 class="section-title__title">
                                What makes us the right partner for your real estate?
                            </h2>
                        </div>
                    </div>

                    <div
                        class="why-choose-us__image relative rounded-2xl overflow-hidden">
                        <img
                            class="size-100 cover"
                            src="PMWayLanding/assets/images/why-choose-us.jpg"
                            alt="Why choose us" />
                        <div class="why-choose-us__content">
                            <div class="icon-list p-3 rounded-2xl bg-white">
                                <div class="icon-list__item flex gap-2 mb-3">
                                    <i class="ti ti-check text-primary text-xl"></i>
                                    <div class="icon-list__text">
                                        <h5 class="text-xl weight-500 mb-0-5">
                                            Expert Local Knowledge
                                        </h5>
                                        <p class="text-grey m0">
                                            Extensive experience and insights into the perfect local
                                            market.
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-list__item flex gap-2 mb-3">
                                    <i class="ti ti-check text-primary text-xl"></i>
                                    <div class="icon-list__text">
                                        <h5 class="text-xl weight-500 mb-0-5">
                                            Personalized Service
                                        </h5>
                                        <p class="text-grey m0">
                                            Customized solutions for a smooth, tailored experience.
                                        </p>
                                    </div>
                                </div>
                                <div class="icon-list__item flex gap-2">
                                    <i class="ti ti-check text-primary text-xl"></i>
                                    <div class="icon-list__text">
                                        <h5 class="text-xl weight-500 mb-0-5">
                                            Proven Track Record
                                        </h5>
                                        <p class="text-grey m0">
                                            A history of 100+ successful projects and satisfied
                                            clients.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="testimonials">
                <div class="container">
                    <div
                        class="testimonials__inner p-4 rounded-2xl bg-primary__light xs:px-2">
                        <div class="testimonials__top pb-1">
                            <div class="section-title max-w-sm mx-auto text-center">
                                <div class="section-title__name"><span>Testimonials</span></div>
                                <h2 class="section-title__title">
                                    Real feedback from our satisfied clients
                                </h2>
                            </div>
                        </div>
                        <div class="testimonials__content max-w-md mx-auto">
                            <!-- Slider main container -->
                            <div class="swiper pb-4">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide pl-4 pr-4 xs:px-0">
                                        <div
                                            class="grid testimonial__grid gap-3 text-white pt-5 pb-5 pl-3 pr-3 bg-primary rounded-2xl">
                                            <div
                                                class="testimonial__image rounded-full overflow-hidden">
                                                <img
                                                    class="size-100 cover rounded-2xl"
                                                    src="PMWayLanding/assets/images/testimonials/1.jpg"
                                                    alt="Testimonial 1" />
                                            </div>
                                            <div class="testimonial__text">
                                                <p class="text-2xl weight-500 line-h-1-5">
                                                    Realestic turned our house hunt into a smooth and
                                                    enjoyable experience. Perfect for anyone looking to
                                                    buy their first home!
                                                </p>
                                                <div class="mt-2">
                                                    <p class="name text-xl weight-500 mb-0-5">
                                                        Andy smith
                                                    </p>
                                                    <p class="place opacity-7 text-sm">Los Angeles, CA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pl-4 pr-4 xs:px-0">
                                        <div
                                            class="grid testimonial__grid gap-3 text-white pt-5 pb-5 pl-3 pr-3 bg-primary rounded-2xl">
                                            <div
                                                class="testimonial__image rounded-full overflow-hidden">
                                                <img
                                                    class="size-100 cover rounded-2xl"
                                                    src="PMWayLanding/assets/images/testimonials/2.jpg"
                                                    alt="Testimonial 2" />
                                            </div>
                                            <div class="testimonial__text">
                                                <p class="text-2xl weight-500 line-h-1-5">
                                                    Thanks to Realestic, buying our new home was a breeze.
                                                    Ideal for newcomers to the real estate market!
                                                </p>
                                                <div class="mt-2">
                                                    <p class="name text-xl weight-500 mb-0-5">
                                                        David Wlee
                                                    </p>
                                                    <p class="place opacity-7 text-sm">California, US</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide pl-4 pr-4 xs:px-0">
                                        <div
                                            class="grid testimonial__grid gap-3 text-white pt-5 pb-5 pl-3 pr-3 bg-primary rounded-2xl">
                                            <div
                                                class="testimonial__image rounded-full overflow-hidden">
                                                <img
                                                    class="size-100 cover rounded-2xl"
                                                    src="PMWayLanding/assets/images/testimonials/3.jpg"
                                                    alt="Testimonial 3" />
                                            </div>
                                            <div class="testimonial__text">
                                                <p class="text-2xl weight-500 line-h-1-5">
                                                    Realestic made purchasing our dream home effortless
                                                    and pleasant. A top choice for first-time homebuyers!
                                                </p>
                                                <div class="mt-2">
                                                    <p class="name text-xl weight-500 mb-0-5">
                                                        Chris Daren
                                                    </p>
                                                    <p class="place opacity-7 text-sm">Tokyo, Japan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div
                                    class="swiper-button-prev bg-white text-dark rounded-full xs:hidden"></div>
                                <div
                                    class="swiper-button-next bg-white text-dark rounded-full xs:hidden"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blogs -->
            <section class="blogs">
                <div class="container">
                    <div class="blogs__top">
                        <div class="section-title max-w-sm">
                            <div class="section-title__name"><span>Blogs</span></div>
                            <h2 class="section-title__title">
                                Expert advice and market updates on real estate
                            </h2>
                        </div>
                    </div>
                    <div class="blogs__content pt-2">
                        <div class="grid grid-cols-3 gap-3 sm:grid-col">
                            <div class="blog">
                                <div class="blog__image rounded-2xl overflow-hidden mb-2">
                                    <a href="#">
                                        <img
                                            class="size-100 cover"
                                            src="PMWayLanding/assets/images/blogs/1.jpg"
                                            alt="Blog 1" />
                                    </a>
                                </div>
                                <div class="blog__category mb-1">
                                    <div class="badge flex">
                                        <a
                                            href="#"
                                            class="text-sm bg-primary__light text-primary pt-1 pb-1 pl-2 pr-2 weight-500 rounded-full hover:bg-grey hover:text-white transition">
                                            Resources
                                        </a>
                                    </div>
                                </div>
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        The ultimate guide to buying your first home
                                    </a>
                                </h4>
                            </div>
                            <div class="blog">
                                <div class="blog__image rounded-2xl overflow-hidden mb-2">
                                    <a href="#">
                                        <img
                                            class="size-100 cover"
                                            src="PMWayLanding/assets/images/blogs/2.jpg"
                                            alt="Blog 2" />
                                    </a>
                                </div>
                                <div class="blog__category mb-1">
                                    <div class="badge flex">
                                        <a
                                            href="#"
                                            class="text-sm bg-primary__light text-primary pt-1 pb-1 pl-2 pr-2 weight-500 rounded-full hover:bg-grey hover:text-white transition">
                                            Articles
                                        </a>
                                    </div>
                                </div>
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        How to choose the right real estate agent for your needs
                                    </a>
                                </h4>
                            </div>
                            <div class="blog">
                                <div class="blog__image rounded-2xl overflow-hidden mb-2">
                                    <a href="#">
                                        <img
                                            class="size-100 cover"
                                            src="PMWayLanding/assets/images/blogs/3.jpg"
                                            alt="Blog 3" />
                                    </a>
                                </div>
                                <div class="blog__category mb-1">
                                    <div class="badge flex">
                                        <a
                                            href="#"
                                            class="text-sm bg-primary__light text-primary pt-1 pb-1 pl-2 pr-2 weight-500 rounded-full hover:bg-grey hover:text-white transition">
                                            News
                                        </a>
                                    </div>
                                </div>
                                <h4 class="text-2xl weight-500 mb-1-5">
                                    <a href="#" class="transition hover:text-primary">
                                        Key factors to consider when investing in rental properties
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section class="contact">
                <div class="container">
                    <div
                        class="contact__content bg-primary text-white p-3 rounded-2xl text-center">
                        <div class="max-w-md mx-auto">
                            <p class="text-2xl weight-500 mb-2">Need help to put in the processes that will work for your company?</p>
                            <br>


                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7 order-2 order-md-1">
                                        <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                                            <div class="section-header">
                                                <h2 class="section-title">Let’s work together!  Contact me via the form below.</h2>

                                            </div>

                                            <div class="tj-contact-form">
                                                <form method="POST" action="{{ route('store.contact.message') }}">
                                                    @csrf
                                                    <div class="row gx-3">
                                                        <div class="col-sm-6">
                                                            <div class="form_group">
                                                                <input type="text" name="fname" id="conName" placeholder="First name"
                                                                       autocomplete="off" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form_group">
                                                                <input type="text" name="lname" id="conLName" placeholder="Last name"
                                                                       autocomplete="off" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form_group">
                                                                <input type="email" name="email" id="conEmail" placeholder="Email address"
                                                                       autocomplete="off" />
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form_group">
                                                                <input type="tel" name="phone" id="conPhone" placeholder="Phone number"
                                                                       autocomplete="off" />
                                                            </div>
                                                        </div>
                                                        @php
                                                            $services = App\Models\Service::all();
                                                        @endphp
                                                        <div class="col-12">
                                                            <div class="form_group">
                                                                <select name="service_id" id="conService" class="tj-nice-select">
                                                                    <option value="" selected disabled>Choose Service</option>
                                                                    @foreach ($services as $service)
                                                                        <option value="{{ $service->id }}"> {{ Str::title($service->service_title) }} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form_group">
                                                                <textarea name="desription" id="conMessage" placeholder="Desription"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form_btn">
                                                                <button type="submit" class="btn tj-btn-primary">Send Message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


                <!-- CONTACT SECTION END -->

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>


                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script src="{{ asset('PMWayLanding/js/app.js') }}"></script>
                <script src="{{ asset('PMWayLanding/js/scrollreveal.min.js') }}"></script>
                <script>
                    $(document).ready(function () {
                        $("#pin").draggable();

                    });

                </script>


                <script src="{{asset('PMWayLanding/js/backToTop.js')}}"></script>
                <script src="{{asset('frontend/assets/js/smooth-scroll.js')}}"></script>
                <script src="{{asset('frontend/assets/js/validate.min.js')}}"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

                <script>
                    @if(Session::has('message'))
                    var type = "{{ Session::get('alert-type','info') }}"
                    switch(type){
                        case 'info':
                            toastr.info(" {{ Session::get('message') }} ");
                            break;

                        case 'success':
                            toastr.success(" {{ Session::get('message') }} ");
                            break;

                        case 'warning':
                            toastr.warning(" {{ Session::get('message') }} ");
                            break;

                        case 'error':
                            toastr.error(" {{ Session::get('message') }} ");
                            break;
                    }
                    @endif
                </script>
        @endguest

</div>
