@extends('layouts.user')
@section('content')

<!-- preloader -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
  </div>
  
<!-- page wrap -->
<div id="page" class="s-pagewrap ss-home">

    <!-- # site header -->
    <header class="s-header">
        <div class="row s-header__inner width-sixteen-col">
            <div class="s-header__block">
                <div class="s-header__logo">
                    <a class="logo" href="#">
                        <img src="{{ asset('user/images/logo.svg') }}" alt="Homepage">
                    </a>
                </div>
                <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <nav class="s-header__nav">
                <ul class="s-header__menu-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#expertise">Expertise</a></li>
                    @if ($_GET['id'] == config('key.freelancer_key'))
                        <li><a href="{{ url('/services?id=' . $_GET['id']) }}">Services</a></li>
                    @endif
                    <li><a href="#clients">Portfolio</a></li>
                    <li><a href="{{ url('/contact?id=' . $_GET['id']) }}">Contact</a></li>
                </ul>

                <div class="s-header__contact">
                    <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- # site main content -->
    <section id="content" class="s-content">

        <!-- intro -->
        <section id="intro" class="s-intro">
            <div class="row s-intro__content width-sixteen-col">
                <div class="column lg-12 s-intro__content-inner grid-block">
                    <div class="s-intro__content-text">
                        <div class="s-intro__content-pretitle text-pretitle">Hello, I'm</div>
                        <h1 class="s-intro__content-title">
                        I create digital <br>
                        solutions for your <br>
                        business that get <br>
                        results.
                        </h1>
                    </div>

                    <div class="s-intro__content-media">
                        <div class="s-intro__content-media-inner">
                            <img src="{{ asset('user/img/hero.png') }}" alt="Rutvik Rawal">
                            <div class="lines">
                                <span></span>
                            </div>
                        </div>
    </div>

                    <div class="s-intro__scroll-down">
                        <a href="#about" class="smoothscroll">
                            <div class="scroll-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="7 13 12 18 17 13"></polyline>
                                    <line x1="12" y1="18" x2="12" y2="6"></line>
                                </svg>
                            </div>
                            <span>Scroll for more</span>
                        </a>
                    </div>
              </div>
            </div>
        </section>

        <!-- about -->
        <section id="about" class="s-about target-section">
            <div class="row s-about__content width-sixteen-col">
                <div class="column grid-block grid-section-split">
                    <img src="{{ asset('user/images/geometric_shape.svg') }}" alt="" class="s-about__content-imgbg">

                    <div class="section-header grid-section-split__header">
                        <div class="text-pretitle">About</div>
                        <h2 class="text-display-title">
                        {{ isset($about) ? $about->title : 'Professional Developer Creating Digital Solutions' }}
                        </h2>
                    </div>

                    <div class="s-about__content-main grid-section-split__primary">
                        <p class="attention-getter">
                        {{ isset($about) ? $about->description : 'Passionate developer with expertise in creating modern, responsive web applications that deliver exceptional user experiences. I specialize in full-stack development with Laravel, React, and modern web technologies.' }}
                        </p>

                        @if (isset($about_2) && $about_2->description)
                        <p class="attention-getter">
                        {{ $about_2->description }}
                        </p>
    @endif

                        <p class="attention-getter">
                        I bring creativity, technical expertise, and a passion for clean, efficient code to every project. My goal is to help businesses grow through innovative digital solutions.
                        </p>
                    </div>

                    <div class="s-about__content-btn grid-section-split__bottom">
                        <a href="{{ url('/download-cv') }}" class="btn btn--stroke u-fullwidth">Download CV</a>

                        <ul class="s-about__social social-list">
                            <li>
                                <a href="https://linkedin.com/in/rutvik-rawal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                    <span class="u-screen-reader-text">LinkedIn</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/rutvik-dev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                    <span class="u-screen-reader-text">GitHub</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                        <path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"/>
                                    </svg>
                                    <span class="u-screen-reader-text">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                        <path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"/>
                                    </svg>
                                    <span class="u-screen-reader-text">Twitter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- expertise -->
        <section id="expertise" class="s-expertise">
            <div class="row s-expertise__content width-sixteen-col">
                <div class="column xl-12 grid-block grid-section-split">
                    <div class="section-header grid-section-split__header">
                        <div class="text-pretitle">Expertise</div>
                        <h2 class="text-display-title">
                        My key areas of expertise.
                        </h2>
                        <p class="lead">
                        I specialize in modern web development technologies and frameworks, delivering scalable solutions that drive business growth.
                        </p>
                    </div>

                    <div class="s-expertise__content-main grid-section-split__primary">
                        <div class="grid-list-items list-items show-ctr">
                            @if (isset($service) && count($service) > 0)
                                @foreach ($service as $key => $value)
                                    <div class="grid-list-items__item list-items__item">
                                        <div class="grid-list-items__title list-items__item-header">
                                            <h3 class="list-items__item-title">{{ $value->title }}</h3>
                                        </div>
                                        <div class="grid-list-items__text list-items__item-text">
                                            <p>{{ $value->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Full Stack Development</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>Complete web application development using Laravel, React, and modern technologies.</p>
                                    </div>
                                </div>
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Frontend Development</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>Creating responsive, interactive user interfaces with modern JavaScript frameworks.</p>
                                    </div>
                                </div>
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Backend Development</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>Building robust APIs and server-side applications with PHP and Laravel.</p>
                                    </div>
                                </div>
                                <div class="grid-list-items__item list-items__item">
                                    <div class="grid-list-items__title list-items__item-header">
                                        <h3 class="list-items__item-title">Database Design</h3>
                                    </div>
                                    <div class="grid-list-items__text list-items__item-text">
                                        <p>Designing and optimizing database structures for optimal performance and scalability.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if ($_GET['id'] == config('key.freelancer_key'))
                    <div class="s-expertise__content-btn grid-section-split__bottom">
                        <a href="#services" class="btn btn--stroke u-fullwidth">View All Services</a>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- clients -->
        <section id="clients" class="s-clients">
            <div class="row s-clients__content-block width-sixteen-col">
                <div class="column xl-12 grid-block grid-section-split">
                    <div class="section-header grid-section-split__header">
                        <div class="text-pretitle">Portfolio</div>
                        <h2 class="text-display-title">
                        I have had the privilege of working on these incredible projects.
                        </h2>
                    </div>

                    <div class="grid-section-split__primary">
                        <p class="lead">
                        Each project represents a unique challenge and an opportunity to create something meaningful. 
                        From e-commerce platforms to custom web applications, I've delivered solutions that exceed expectations.
                        </p>
                    </div>
                </div>
            </div>

            @if (isset($portfolio) && count($portfolio) > 0)
            <div class="row s-clients__content-block width-sixteen-col">
                <div class="column xl-12">
                    <div class="clients-list">
                        @foreach ($portfolio as $key => $value)
                            <div class="clients-list__item">
                                <a href="#" class="portfolio-item" data-id="{{ $value->id }}">
                                    @if($value->image == '1744878069.png' || $value->image == '1744878108.png')
                                        <img src="{{ asset('images/portfolio/' . $value->image) }}" alt="{{ $value->title }}">
                                    @else
                                        <img src="{{ asset('user/images/clients/' . $value->image) }}" alt="{{ $value->title }}">
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            @if (isset($team) && count($team) > 0)
            <div class="row s-clients__content-block width-sixteen-col">
                <div class="column xl-12 testimonials">
                    <div class="swiper-container testimonials__slider home-slider">
                        <div class="swiper-wrapper">
                            @foreach ($team as $key => $value)
                                <div class="testimonials__slide swiper-slide">
                                    <p>{{ $value->description }}</p>
                                    <div class="testimonials__author">
                                        <img src="{{ asset('images/team/' . $value->image) }}" alt="Author image" class="testimonials__avatar">
                                        <cite class="testimonials__cite">
                                            <strong>{{ $value->name }}</strong>
                                            <span>{{ $value->designation }}</span>
                                        </cite>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            @endif
        </section>

    </section>

    <!-- # cta -->
    <section id="cta" class="s-cta">
        <div class="row row-x-center text-center">
            <div class="column xl-8 lg-12">
                <div class="s-cta__content">
                    <h2 class="text-display-title">
                    Get started with a consultation today.
                    </h2>
                    <p class="lead">
                    Ready to bring your ideas to life? Let's discuss your project requirements and create something amazing together.
                    </p>
                    <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary">Let's Work Together</a>
                </div>
            </div>
        </div>
    </section>

    <!-- # journal -->
    @if ($_GET['id'] == config('key.freelancer_key'))
    <section id="journal" class="s-journal">
        <div class="row s-journal__content width-sixteen-col">
            <div class="column xl-12 grid-block">
                <div class="grid-full section-header text-center">
                    <div class="text-pretitle">Recent Articles</div>
                    <h2 class="text-display-title">
                    Latest articles from my blog.
                    </h2>
                </div>

                <div class="grid-full s-journal__content-main grid-list-items">
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="#">Web Development</a>
                            </div>
                            <h3 class="blog-card__title"><a href="#">Laravel Best Practices for Modern Web Development</a></h3>
                        </div>
                        <div class="blog-card__text">
                            <p>
                            Discover the essential Laravel practices that every developer should know to build scalable and maintainable web applications.
                            </p>
                        </div>
                    </div>
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="#">Frontend</a>
                            </div>
                            <h3 class="blog-card__title"><a href="#">Building Responsive UIs with React</a></h3>
                        </div>
                        <div class="blog-card__text">
                            <p>
                            Learn how to create beautiful, responsive user interfaces using React and modern CSS techniques.
                            </p>
                        </div>
                    </div>
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="#">Technology</a>
                            </div>
                            <h3 class="blog-card__title"><a href="#">The Future of Web Development</a></h3>
                        </div>
                        <div class="blog-card__text">
                            <p>
                            Exploring emerging trends and technologies that are shaping the future of web development.
                            </p>
                        </div>
                    </div>
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="#">Tutorial</a>
                            </div>
                            <h3 class="blog-card__title"><a href="#">Getting Started with API Development</a></h3>
                        </div>
                        <div class="blog-card__text">
                            <p>
                            A comprehensive guide to building robust APIs that can power modern web and mobile applications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif


    <!-- # footer -->
    <footer class="s-footer">
        <div class="row s-footer__content">
            <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">
                <h3>About Rutvik</h3>
                <p>
                Passionate full-stack developer with expertise in Laravel, React, and modern web technologies. 
                I create digital solutions that help businesses grow and succeed in the digital world.
                </p>
            </div>
            <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                <h3>Site Links</h3>
                <ul class="link-list">
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#expertise">Expertise</a></li>
                    <li><a href="#clients">Portfolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="{{ url('/contact?id=' . $_GET['id']) }}">Contact</a></li>
                    <li><a href="{{ url('/download-cv') }}">Download CV</a></li>
                </ul>
            </div>
            <div class="column xl-3 lg-6 md-12 tab-12 s-footer__block s-footer__newsletter">
                <h3>Contact Info</h3>
                <p>Ready to start your next project?</p>
                <div class="footer-contact">
                    <p><strong>Email:</strong> itservice@rutvikdev.in</p>
                    <p><strong>Phone:</strong> +91 9313434881</p>
                    <p><strong>Location:</strong> Ahmedabad, India</p>
                </div>
            </div>
        </div>

        <div class="row s-footer__bottom">
            <div class="column xl-6 lg-12">
                <ul class="s-footer__social social-list">
                    <li>
                        <a href="https://linkedin.com/in/rutvik-rawal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            <span class="u-screen-reader-text">LinkedIn</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/rutvik-dev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            <span class="u-screen-reader-text">GitHub</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                <path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"/>
                            </svg>
                            <span class="u-screen-reader-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);">
                                <path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"/>
                            </svg>
                            <span class="u-screen-reader-text">Twitter</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column xl-6 lg-12">
                <p class="ss-copyright">
                    <span>© Copyright Rutvik Rawal 2024</span>
                    <span>Design by <a href="https://rutvikdev.in">RutvikDev</a></span>
                </p>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="17 11 12 6 7 11"></polyline>
                        <line x1="12" y1="18" x2="12" y2="6"></line>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

</div>

<!-- Portfolio Detail Modal -->
<div id="portfolioModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
            <h3>Portfolio Details</h3>
            <p class="portfolio-detail-content">Portfolio item details will be loaded here...</p>
        </div>
    </div>
</div>

<!-- Thank You Modal -->
<div id="thankYouModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
            <h3>Thank you!</h3>
            <p>Your message has been sent successfully.</p>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
$(document).ready(function() {
    // Portfolio item click handler
    $('.portfolio-item').on('click', function(e) {
        e.preventDefault();
        const portfolioId = $(this).data('id');
        
        // You can add AJAX call here to fetch portfolio details
        // For now, showing a placeholder
        $('.portfolio-detail-content').text('Portfolio item details will be loaded here...');
        $('#portfolioModal').show();
    });

    // Close modal when clicking the X
    $('.close').on('click', function() {
        $('.modal').hide();
    });

    // Close modal when clicking outside
    $(window).on('click', function(e) {
        if (e.target.classList.contains('modal')) {
            $('.modal').hide();
        }
    });
});
</script>

<style>
.modal {
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: none;
    width: 80%;
    max-width: 500px;
    border-radius: 8px;
    position: relative;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    position: absolute;
    right: 15px;
    top: 10px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
}

.modal-body {
    padding: 20px 0;
}

.modal-body h3 {
    margin-bottom: 15px;
    color: #333;
}

.modal-body p {
    color: #666;
    line-height: 1.6;
}
</style>
@endsection