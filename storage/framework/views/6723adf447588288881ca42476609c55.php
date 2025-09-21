<div>

    <?php if(auth()->guard()->check()): ?>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.26.0/dist/tabler-icons.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('PMWayLanding/css/base.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('PMWayLanding/css/style.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('PMWayLanding/css/backToTop.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/font-awesome-pro.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        <!-- start: Back To Top -->
        <div class="progress-wrap" id="scrollUp">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>


        <!--BODY-->







        
        


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
                    <img alt="" id="pinauthed" height="144" src="/images/pinlarge.png" width="152">
                </div>
            </div>
        </section>



        <!-- My Vision -->
        <section class="our-vision">
            <div class="container">
                <div class="our-vision__content">
                    <div class="grid grid-cols-2 gap-6 md:gap-2 sm:grid-col sm:gap-4">
                        <div class="col1-2">
                            <div class="section-title sm:mb-1">
                                <div class="section-title__name "><span class="text-dark">My Vision</span></div>

                                <h2 class="section-title__title xs:mb-2">
                                    The values that drive everything I do
                                </h2>
                            </div>
                            
                            
                            
                        </div>
                        <div class="col1-2">
                            <div class="benefits">
                                <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="fas fa-anchor"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Character
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Aim to develop a strong moral character and integrity through working hard, striving and delivering.  For me, happiness is the attainment of not unknown goals.
                                        </p>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-heart"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Sincerity
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Cultivate loyalty and dedication to yourself (your morals and integrity), and let this flow towards your family and your colleagues.
                                        </p>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-target"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Effort
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Seek perfection of character - Aim to develop a strong moral character and integrity through learning and training.

                                        </p><br>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="fas fa-handshake"></i>

                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Etiquette
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Respect others - Show respect to instructors, peers, and opponents, fostering a sense of community and camaraderie.

                                        </p><br>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Self Control
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Refrain from disrespectful and violent behavior - Use your skills responsibly and to promote peace and harmony.

                                        </p>
                                    </div>
                                </div>
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
                    <div class="our-mission__image rounded-4xl overflow-hidden w-[400px] sm:w-[300px] xs:w-full">
                        <img class="w-full h-full object-cover" src="PMWayLanding/assets/images/markcorriganpic.jpg" alt="Our Mission" />
                    </div>

                    <div class="our-mission__text">
                        <h3 class="our-mission__title text-2xl weight-500 mb-1-5">
                            At PMWay
                        </h3>
                        <p class="our-mission__description text-xl text-grey w-90 m0">
                            My mission is simple: to provide you with the best project management solutions, tailored to meet your needs. I also understand that
                            finding the perfect project method and running it at Capability Maturity Level 2+ is not easy.  However, I can share with you my learning experience, gained through my journey, and assure you it is possible, honourable and loads of fun to strive for more perfection in the Professional Project Management space.
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






        <!-- CONTACT SECTION END -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="<?php echo e(asset('PMWayLanding/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('PMWayLanding/js/scrollreveal.min.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                $("#pinauthed").draggable();

            });

        </script>


        <script src="<?php echo e(asset('PMWayLanding/js/backToTop.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/smooth-scroll.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/validate.min.js')); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            <?php if(Session::has('message')): ?>
            var type = "<?php echo e(Session::get('alert-type','info')); ?>"
            switch(type){
                case 'info':
                    toastr.info(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'success':
                    toastr.success(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'warning':
                    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'error':
                    toastr.error(" <?php echo e(Session::get('message')); ?> ");
                    break;
            }
            <?php endif; ?>
        </script>




    <?php endif; ?>






    
    
    

    <?php if(auth()->guard()->guest()): ?>



        <!--BODY-->



        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.26.0/dist/tabler-icons.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('PMWayLanding/css/base.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('PMWayLanding/css/style.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('PMWayLanding/css/backToTop.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/font-awesome-pro.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        <!-- start: Back To Top -->
        <div class="progress-wrap" id="scrollUp">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- end: Back To Top -->

        
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
                <br><br><br>
            </div>
        </section>


        <!-- My Vision -->
        <section class="our-vision">
            <div class="container">
                <div class="our-vision__content">
                    <div class="grid grid-cols-2 gap-6 md:gap-2 sm:grid-col sm:gap-4">
                        <div class="col1-2">
                            <div class="section-title sm:mb-1">
                                <div class="section-title__name "><span class="text-dark">My Vision</span></div>

                                <h2 class="section-title__title xs:mb-2">
                                    The values that drive everything I do
                                </h2>
                            </div>



                        </div>
                        <div class="col1-2">
                            <div class="benefits">
                                <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="fas fa-anchor"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Character
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Aim to develop a strong moral character and integrity through working hard, striving and delivering.  For me, happiness is the attainment of not unknown goals.
                                        </p>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 mb-3 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-heart"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Sincerity
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Cultivate loyalty and dedication to yourself (your morals and integrity), and let this flow towards your family and your colleagues.
                                        </p>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="ti ti-target"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Effort
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Seek perfection of character - Aim to develop a strong moral character and integrity through learning and training.

                                        </p><br>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="fas fa-handshake"></i>

                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Etiquette
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Respect others - Show respect to instructors, peers, and opponents, fostering a sense of community and camaraderie.

                                        </p><br>
                                    </div>
                                </div>
                                <div class="benefits__item flex gap-4 md:gap-2">
                                    <div class="benefits__item__icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="benefits__item__content flex-1">
                                        <h4
                                            class="benefits__item__title text-2xl mb-1-5 weight-500">
                                            Self Control
                                        </h4>
                                        <p
                                            class="benefits__item__description text-xl m0 text-grey w-80 md:w-full">
                                            Refrain from disrespectful and violent behavior - Use your skills responsibly and to promote peace and harmony.

                                        </p>
                                    </div>
                                </div>
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
                    <div class="our-mission__image rounded-4xl overflow-hidden w-[400px] sm:w-[300px] xs:w-full">
                        <img class="w-full h-full object-cover" src="PMWayLanding/assets/images/markcorriganpic.jpg" alt="Our Mission" />
                    </div>

                    <div class="our-mission__text">
                        <h3 class="our-mission__title text-2xl weight-500 mb-1-5">
                            At PMWay
                        </h3>
                        <p class="our-mission__description text-xl text-grey w-90 m0">
                           My mission is simple: to provide you with the best project management solutions, tailored to meet your needs. I also understand that
                            finding the perfect project method and running it at Capability Maturity Level 2+ is not easy.  However, I can share with you my learning experience, gained through my journey, and assure you it is possible, honourable and loads of fun to strive for more perfection in the Professional Project Management space.
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









        <!-- CONTACT SECTION END -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="<?php echo e(asset('PMWayLanding/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('PMWayLanding/js/scrollreveal.min.js')); ?>"></script>
        <script>
            $(document).ready(function () {
                $("#pin").draggable();

            });

        </script>


        <script src="<?php echo e(asset('PMWayLanding/js/backToTop.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/smooth-scroll.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/validate.min.js')); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            <?php if(Session::has('message')): ?>
            var type = "<?php echo e(Session::get('alert-type','info')); ?>"
            switch(type){
                case 'info':
                    toastr.info(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'success':
                    toastr.success(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'warning':
                    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
                    break;

                case 'error':
                    toastr.error(" <?php echo e(Session::get('message')); ?> ");
                    break;
            }
            <?php endif; ?>
        </script>
    <?php endif; ?>

</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\home.blade.php ENDPATH**/ ?>