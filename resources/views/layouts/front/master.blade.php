<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Personalixoz</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script defer src="{{ asset('assets/js/fontawesome/all.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/icon/master-logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="s-header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/icon/master-logo.png') }}" alt="Homepage">
            </a>
        </div>

        <div class="s-header__content">
    
            <nav class="s-header__nav-wrap">
                <ul class="s-header__nav">
                    <li><a class="smoothscroll" href="#hero" title="Intro">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="About">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="Services">Services</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="Works">Works</a></li>
                </ul>
            </nav> <!-- end s-header__nav-wrap -->

            <a href="" class="btn btn--primary btn--small">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
                Get In Touch
            </a>

        </div> <!-- end header-content -->

        <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section">

        <div class="s-hero__bg">
            <div class="gradient-overlay"></div>
        </div>

        <div class="row s-hero__content">
            <div class="column">

                <h1>Hello.</h1>
                <div class="s-hero__content-about">

                    <p>
                    We are Flare. We love <br>
                    building great brands <br>
                    & digital experiences.
                    </p>
    
                    <footer>
                        <div class="s-hero__content-social">
                            <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>

        <div class="s-hero__video">
            <a class="s-hero__video-link" href="https://player.vimeo.com/video/117310401?color=01aef0&amp;title=0&amp;byline=0&amp;portrait=0" data-lity="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg>
                <span class="s-hero__video-text">Play Video</span>
            </a>
        </div>

        <div class="s-hero__scroll">
            <a href="#about" class="s-hero__scroll-link smoothscroll">
                Scroll Down
            </a>
        </div>

    </section> <!-- end s-hero -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about">

        <div class="horizontal-line"></div>

        <div class="row">
            <div class="column large-12">

                <div class="section-title" data-num="01" data-aos="fade-up">
                    <h3 class="h6">Who We Are</h3>
                </div>

            </div>

            <div class="column large-6 w-900-stack s-about__intro-text">
                <h1 class="display-1" data-aos="fade-up">
                    Flare is a branding agency based in somewhere. We design thoughtful digital experiences and beautiful brand aesthetics.
                </h1>

                <p class="lead" data-aos="fade-up">
                    Non amet venenatis dolor id pellentesque mattis erat. Fermentum nunc, 
                    tincidunt sit elit amet scelerisque. Ac quisque quis eu nibh rutrum 
                    risus tellus egestas neque. Vestibulum ante ipsum primis in faucibus 
                    orci luctus et. 
                </p>
            </div>

            <div class="column large-6 w-900-stack s-about__photo-block">
                <div class="s-about__photo" data-aos="fade-up"></div>
            </div>
        </div>

        <div class="row block-large-1-2 block-tab-full s-about__process item-list">
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Define</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Design</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Build</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Launch</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
        </div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services">

        <div class="row">
            <div class="column large-12">
                <div class="section-title" data-num="02" data-aos="fade-up">
                    <h3 class="h6">Our Expertise</h3>
                </div>
            </div>
            <div class="column large-6 w-900-stack">
                <h1 class="display-1" data-aos="fade-up">
                    Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                    Quis dolores totam voluptatibus. 
                </h1>
            </div>
            <div class="column large-6 w-900-stack">
                <p class="lead" data-aos="fade-up">
                Velit deleniti harum sit beatae sint repellendus expedita. Omnis possimus 
                sed rerum tenetur ea ab aut minima magnam. Deserunt sit cupiditate 
                similique eveniet earum. Consectetur dolores maxime quisquam voluptate magni.
                Ut ex unde rem quod ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
        </div>

        <div class="row block-large-1-2 block-tab-full s-services__services item-list">
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--product-design"></span>
                <h3 class="item-title">Product Design</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--branding"></span>
                <h3 class="item-title">Branding</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--frontend"></span>
                <h3 class="item-title">Frontend Development</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--research"></span>
                <h3 class="item-title">UX Research</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--illustration"></span>
                <h3 class="item-title">Illustration</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--ecommerce"></span>
                <h3 class="item-title">E-Commerce</h3>
                <p>
                Deserunt rerum perspiciatis quaerat quam numquam assumenda neque. 
                Quis dolores totam voluptatibus molestiae non. Quae exercitationem 
                cum numquam repudiandae. Beatae eum quae. Ut ex unde rem quod 
                ipsum consequatur. blanditiis temporibus pariatur voluptatibus molestiae.
                </p>
            </div>
        </div>

    </section> <!-- end s-services -->

    <section id="portfolio" class="s-portfolio">

        <div class="row s-porfolio__top">
            <div class="column large-6 w-900-stack">
                <div class="section-title" data-num="03" data-aos="fade-up">
                    <h3 class="h6">Recent Works</h3>
                </div>
            </div>
            <div class="column large-6 w-900-stack">
                <h1 class="display-1" data-aos="fade-up">
                    Here are some of our projects we done lately. Feel
                    free to check them out.
                </h1>
            </div>
        </div> <!-- end s-portfolio__top-->

        <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">

            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-red-wheel.jpg" title="The Red Wheel" data-size="1050x700">
                            <img src="{{ asset('assets/img/portfolio/red-wheel.jpg') }}" 
                                 srcset="images/portfolio/red-wheel.jpg 1x, images/portfolio/red-wheel@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Branding</div>
                        <h4 class="folio-item__title">The Red Wheel</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-music-life.jpg" title="Music Life" data-size="1050x700">
                            <img src="{{ asset('assets/img/portfolio/music-life.jpg') }}" 
                                 srcset="images/portfolio/music-life.jpg 1x, images/portfolio/music-life@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">Music Life</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-oi-logo.jpg" Title="OI Logo" data-size="1050x700">
                            <img src="{{ asset('assets/img/portfolio/oi-logo.jpg.jpg') }}" 
                                 srcset="images/portfolio/oi-logo.jpg 1x, images/portfolio/oi-logo@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Branding</div>
                        <h4 class="folio-item__title">OI Logo</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-corrugated-sheets.jpg" title="Corrugated Sheets" data-size="1050x700">
                            <img src="{{ asset('assets/img/portfolio/corrugated-sheets.jpg') }}" 
                                 srcset="images/portfolio/corrugated-sheets.jpg 1x, images/portfolio/corrugated-sheets@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">Corrugated Sheets</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-woodcraft.jpg" title="Sand Dunes" data-size="1050x700">
                            <img src="{{ asset('assets/img/portfolio/woodcraft.jpg') }}" 
                                 srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">Wooocraft</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">
                        Project Link
                    </a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/portfolio/gallery/g-lamp.jpg" title="The Lamp" data-size="1050x700">
                            <img src="{{ asset('assets/img/portfolio/lamp.jpg') }}" 
                                 srcset="images/portfolio/lamp.jpg 1x, images/portfolio/lamp@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Design</div>
                        <h4 class="folio-item__title">The Lamp</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Project Link</a>
                    <div class="folio-item__caption">
                        <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                    </div>
                </div>
            </div> <!-- end column -->

        </div> <!-- folio-list -->

    </section> <!-- end s-portfolio -->


    <!-- clients
    ================================================== -->
    <div id="clients" class="section s-clients">

        <div class="row narrower s-clients__top h-text-center">
            <div class="column">
                <h1 class="display-1" data-aos="fade-up">
                We've had the priveledge with working with
                some of the largest and most iconic brands
                </h1>
            </div>
        </div> <!-- s-clients__top -->

        <div class="row clients-outer">
            <div class="column">
                <div class="clients" data-aos="fade-up">
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/dropbox.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/atom.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/github.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/redhat.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/medium.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/messenger.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/steam.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/spotify.svg" /></a>
                     
                </div> <!-- end clients -->
            </div> <!-- end column -->
        </div> <!-- end clients-outer -->

        <div class="row testimonials collapse">

            <div class="column large-12">

                <div class="testimonial-slider" data-aos="fade-up">

                    <div class="testimonial-slider__slide">
                        <p>
                        Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                        Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.  Nisi dolores quaerat fuga rem nihil nostrum.
                        Laudantium quia consequatur molestias delectus culpa.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Tim Cook</strong>
                                <span>CEO, Apple</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Sundar Pichai</strong>
                                <span>CEO, Google</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                        Voluptatem dignissimos ut.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Satya Nadella</strong>
                                <span>CEO, Microsoft</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                        quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                        Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Jeff Bezos</strong>
                                <span>CEO, Amazon</span>
                            </cite>
                        </div>
                    </div> <!-- end testimonials__slide -->

                </div> <!-- end testimonial slider -->
                
            </div> <!-- end column -->

        </div> <!-- end row -->


    </div> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section class="s-contact">

        <div class="row narrower s-contact__top h-text-center">
            <div class="column">
                <h3 class="h6">Get In Touch</h3>
                <h1 class="display-1">
                Have an idea or an epic project in mind? Talk to
                us. Let us work together and make something great.
                Shoot us a message at
                </h1>
            </div>
        </div> <!-- s-footer__top -->

        <div class="row h-text-center">
            <div class="column">
                <p class="s-contact__email">
                    <a href="mailto:#0">hello@flare.com</a>
                </p>
            </div>
        </div>

    </section>  <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">
        <div class="row row-y-top">

            <div class="column large-8 medium-12">
                <div class="row">
                    <div class="column large-7 tab-12 s-footer__block">
                        <h4 class="h6">Where to Find Us</h4>
        
                        <p>
                        1600 Amphitheatre Parkway <br>
                        Mountain View, California <br>
                        94043  US <br>
                        <a href="tel:197-543-2345">+197 543 2345</a>
                        </p>
                    </div>
        
                    <div class="column large-5 tab-12 s-footer__block">
                        <h4 class="h6">Follow Us</h4 class="h6">
        
                        <ul class="s-footer__list">
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Twitter</a></li>
                            <li><a href="#0">Instagram</a></li>
                            <li><a href="#0">Dribbble</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column large-4 medium-12 s-footer__block--end">
                <a href="mailto:#0" class="btn h-full-width">Let's Talk</a>

                <div class="ss-copyright">
                    <span>Copyright Flare 2020</span> 
                    <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></span>
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    top
                </a>
            </div> <!-- end ss-go-top -->

        </div>
    </footer>
    

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>