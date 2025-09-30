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
    <x-navbar currentPage="home" />

    <!-- # site main content -->
    <section id="content" class="s-content">

        <!-- intro -->
        <section id="intro" class="s-intro">
            <div class="row s-intro__content width-sixteen-col">
                <div class="column lg-12 s-intro__content-inner grid-block">
                    <div class="s-intro__content-text">
                        <div class="s-intro__content-pretitle text-pretitle">
                            {{ isset($about) && $about->title ? 'Hello, I\'m ' . explode(' ', $about->title)[0] : 'Hello, I\'m Rutvik' }}
                                        </div>
                        <h1 class="s-intro__content-title">
                        {{ isset($about) && $about->description ? 
                            (strlen($about->description) > 100 ? substr($about->description, 0, 100) . '...' : $about->description) : 
                            'I create digital solutions for your business that get results.' }}
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
                        @else
                        <p class="attention-getter">
                        I bring creativity, technical expertise, and a passion for clean, efficient code to every project. My goal is to help businesses grow through innovative digital solutions.
                        </p>
                    @endif

                        @if (isset($tech) && count($tech) > 0)
                        <div class="skills-section">
                            <h4>Technical Skills</h4>
                            <div class="skills-list">
                                @foreach ($tech as $key => $value)
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">{{ $value->name }}</span>
                                            <span class="skill-percentage">{{ $value->percentage }}%</span>
                </div>
                                        <div class="skill-bar">
                                            <div class="skill-progress" style="width: {{ $value->percentage }}%"></div>
            </div>
        </div>
                                @endforeach
    </div>
                        </div>
                        @endif
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

        <!-- experience -->
        <section id="experience" class="s-experience target-section">
            <div class="row s-experience__content width-sixteen-col">
                <div class="column xl-12 grid-block">
                    <div class="section-header text-center">
                        <div class="text-pretitle">Experience</div>
                        <h2 class="text-display-title">My Working Experience</h2>
                    </div>

                    @if (isset($experience) && count($experience) > 0)
                    <div class="timeline">
                        @foreach ($experience as $key => $value)
                        <div class="timeline-item {{ $key % 2 == 0 ? 'left' : 'right' }}">
                            <div class="timeline-text">
                                <div class="timeline-date">{{ $value->year }}</div>
                                <h2>{{ $value->title }}({{ $value->company_name }})</h2>
                                <h4>{{ $value->location }}</h4>
                                <p>{{ $value->description }}</p>
                            </div>
                        </div>
                        @endforeach
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
                    <div class="portfolio-grid">
                        @foreach ($portfolio as $key => $value)
                            <div class="portfolio-item-card" data-id="{{ $value->id }}">
                                <div class="portfolio-item-image">
                                    @if($value->image == '1744878069.png' || $value->image == '1744878108.png')
                                        <img src="{{ asset('images/portfolio/' . $value->image) }}" alt="{{ $value->title }}">
                                    @else
                                        <img src="{{ asset('images/clients/' . $value->image) }}" alt="{{ $value->title }}">
                                    @endif
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-overlay-content">
                                            <h3>{{ $value->title }}</h3>
                                            <p>Click to view details</p>
                                            <div class="portfolio-overlay-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                </div>
                </div>
              </div>
            </div>
                                <div class="portfolio-item-content">
                                    <h4>{{ $value->title }}</h4>
                                    @if($value->techport)
                                        <span class="portfolio-tech">{{ $value->techport->name }}</span>
        @endif
        </div>
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
                    {{ isset($about) && $about->title ? 'Ready to work with ' . explode(' ', $about->title)[0] . '?' : 'Get started with a consultation today.' }}
                    </h2>
                    <p class="lead">
                    {{ isset($about) && $about->description ? 
                        'Let\'s discuss your project requirements and create something amazing together. ' . substr($about->description, 0, 100) . '...' : 
                        'Ready to bring your ideas to life? Let\'s discuss your project requirements and create something amazing together.' }}
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

                @if (isset($blogs) && count($blogs) > 0)
                <div class="grid-full s-journal__content-main grid-list-items">
                    @foreach ($blogs as $blog)
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="#">{{ $blog->tag ?? 'Technology' }}</a>
                    </div>
                            <h3 class="blog-card__title">
                                <a href="{{ $blog->url ?? '#' }}">{{ $blog->title ?? 'Blog Post' }}</a>
                            </h3>
                    </div>
                        <div class="blog-card__text">
                            <p>{{ $blog->description ?? 'Read more about this topic in our latest blog post.' }}</p>
                </div>
                    </div>
                    @endforeach
                    </div>
                @else
                <div class="grid-full s-journal__content-main grid-list-items">
                    <div class="grid-list-items__item blog-card">
                        <div class="blog-card__header">
                            <div class="blog-card__cat-links">
                                <a href="#">Web Development</a>
                </div>
                            <h3 class="blog-card__title"><a href="#">Laravel Best Practices for Modern Web Development</a></h3>
                    </div>
                        <div class="blog-card__text">
                            <p>Discover the essential Laravel practices that every developer should know to build scalable and maintainable web applications.</p>
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
                            <p>Learn how to create beautiful, responsive user interfaces using React and modern CSS techniques.</p>
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
                            <p>Exploring emerging trends and technologies that are shaping the future of web development.</p>
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
                            <p>A comprehensive guide to building robust APIs that can power modern web and mobile applications.</p>
        </div>
    </div>
                                </div>
                @endif
                                </div>
                                </div>
    </section>
    @endif


    <!-- # footer -->
    <x-footer :about="$about" />

            </div>

<!-- Portfolio Detail Modal -->
<div id="portfolioModal" class="portfolio-modal" style="display: none;">
    <div class="portfolio-modal-content">
        <span class="portfolio-close">&times;</span>
        <div class="portfolio-modal-body">
            <div class="portfolio-modal-header">
                <h2 class="portfolio-modal-title">Portfolio Details</h2>
                        </div>
            <div class="portfolio-modal-main">
                <div class="portfolio-modal-image">
                    <img id="portfolioModalImage" src="" alt="Portfolio Image">
                            </div>
                <div class="portfolio-modal-info">
                    <h3 id="portfolioModalTitle">Project Title</h3>
                    <div class="portfolio-modal-tech" id="portfolioModalTech">
                        <span class="tech-tag">Technology</span>
                        </div>
                    <div class="portfolio-modal-details" id="portfolioModalDetails">
                        <p>Project details will be loaded here...</p>
                    </div>
                    <div class="portfolio-modal-links" id="portfolioModalLinks">
                        <!-- Links will be populated dynamically -->
                </div>
                    <div class="portfolio-modal-duration" id="portfolioModalDuration">
                        <!-- Duration will be populated dynamically -->
                        </div>
                            </div>
                        </div>
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
    $('.portfolio-item-card').on('click', function(e) {
        e.preventDefault();
        const portfolioId = $(this).data('id');
        
        // Show loading state
        $('#portfolioModalTitle').text('Loading...');
        $('#portfolioModalDetails').html('<p>Loading portfolio details...</p>');
        $('#portfolioModal').show();
        
        // Fetch portfolio details via AJAX
        $.ajax({
            url: '/portfolio/details/' + portfolioId,
            method: 'GET',
            success: function(response) {
                const portfolio = response.portfolio;
                const details = response.details;
                const tech = response.tech;
                
                // Update modal content
                $('#portfolioModalTitle').text(portfolio.title);
                
                // Update image
                let imageSrc = '';
                if(portfolio.image == '1744878069.png' || portfolio.image == '1744878108.png') {
                    imageSrc = '/images/portfolio/' + portfolio.image;
                } else {
                    imageSrc = '/images/clients/' + portfolio.image;
                }
                $('#portfolioModalImage').attr('src', imageSrc).attr('alt', portfolio.title);
                
                // Update technology
                if(tech && tech.name) {
                    $('#portfolioModalTech').html('<span class="tech-tag">' + tech.name + '</span>');
                } else {
                    $('#portfolioModalTech').html('<span class="tech-tag">Web Development</span>');
                }
                
                // Update details
                if(details && details.details) {
                    $('#portfolioModalDetails').html('<p>' + details.details + '</p>');
                } else {
                    $('#portfolioModalDetails').html('<p>This project showcases my skills in web development and demonstrates my ability to create innovative solutions.</p>');
                }
                
                // Update links
                let linksHtml = '';
                if(details && details.link_1) {
                    linksHtml += '<a href="' + details.link_1 + '" target="_blank" class="portfolio-link">View Project</a>';
                }
                if(details && details.link_2) {
                    linksHtml += '<a href="' + details.link_2 + '" target="_blank" class="portfolio-link">View Code</a>';
                }
                if(linksHtml) {
                    $('#portfolioModalLinks').html(linksHtml);
                } else {
                    $('#portfolioModalLinks').html('<a href="#" class="portfolio-link">Contact for Details</a>');
                }
                
                // Update duration
                if(details && details.duration) {
                    $('#portfolioModalDuration').html('<p><strong>Duration:</strong> ' + details.duration + '</p>');
                } else {
                    $('#portfolioModalDuration').html('<p><strong>Duration:</strong> Custom Project</p>');
                }
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
                $('#portfolioModalTitle').text('Error');
                $('#portfolioModalDetails').html('<p>Sorry, there was an error loading the portfolio details.</p>');
            }
        });
    });

    // Close modal when clicking the X
    $('.portfolio-close, .close').on('click', function() {
        $('.modal, .portfolio-modal').hide();
    });

    // Close modal when clicking outside
    $(window).on('click', function(e) {
        if (e.target.classList.contains('modal') || e.target.classList.contains('portfolio-modal')) {
            $('.modal, .portfolio-modal').hide();
        }
    });
        });
    </script>

<style>
/* Portfolio Grid Styles */
.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.portfolio-item-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
}

.portfolio-item-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.portfolio-item-image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.portfolio-item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.portfolio-item-card:hover .portfolio-item-image img {
    transform: scale(1.05);
}

.portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.portfolio-item-card:hover .portfolio-overlay {
    opacity: 1;
}

.portfolio-overlay-content {
    text-align: center;
    color: white;
}

.portfolio-overlay-content h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.portfolio-overlay-content p {
    font-size: 0.9rem;
    margin-bottom: 1rem;
    opacity: 0.9;
}

.portfolio-overlay-icon {
    width: 50px;
    height: 50px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s ease;
}

.portfolio-item-card:hover .portfolio-overlay-icon {
    background: rgba(255, 255, 255, 0.3);
}

.portfolio-item-content {
    padding: 1.5rem;
}

.portfolio-item-content h4 {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
    color: #333;
    font-weight: 600;
}

.portfolio-tech {
    display: inline-block;
    background: #f8f9fa;
    color: #666;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
}

/* Portfolio Modal Styles */
.portfolio-modal {
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.8);
    backdrop-filter: blur(5px);
}

.portfolio-modal-content {
    background-color: #fff;
    margin: 2% auto;
    padding: 0;
    border: none;
    width: 90%;
    max-width: 900px;
    border-radius: 16px;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.portfolio-close {
    color: #aaa;
    float: right;
    font-size: 32px;
    font-weight: bold;
    cursor: pointer;
    position: absolute;
    right: 20px;
    top: 20px;
    z-index: 2001;
    background: rgba(255, 255, 255, 0.9);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.portfolio-close:hover,
.portfolio-close:focus {
    color: #000;
    background: rgba(255, 255, 255, 1);
    transform: scale(1.1);
}

.portfolio-modal-body {
    padding: 0;
}

.portfolio-modal-header {
    padding: 2rem 2rem 1rem;
    border-bottom: 1px solid #eee;
}

.portfolio-modal-title {
    font-size: 2rem;
    color: #333;
    margin: 0;
    font-weight: 700;
}

.portfolio-modal-main {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    padding: 2rem;
}

.portfolio-modal-image {
    position: relative;
}

.portfolio-modal-image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.portfolio-modal-info h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 1rem;
    font-weight: 600;
}

.portfolio-modal-tech {
    margin-bottom: 1.5rem;
}

.tech-tag {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 500;
}

.portfolio-modal-details {
    margin-bottom: 1.5rem;
}

.portfolio-modal-details p {
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
}

.portfolio-modal-links {
    margin-bottom: 1.5rem;
}

.portfolio-link {
    display: inline-block;
    background: #333;
    color: white;
    padding: 0.75rem 1.5rem;
    text-decoration: none;
    border-radius: 8px;
    margin-right: 1rem;
    margin-bottom: 0.5rem;
    transition: all 0.3s ease;
    font-weight: 500;
}

.portfolio-link:hover {
    background: #555;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.portfolio-modal-duration p {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .portfolio-modal-content {
        width: 95%;
        margin: 5% auto;
    }
    
    .portfolio-modal-main {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
    .portfolio-modal-header {
        padding: 1.5rem 1.5rem 1rem;
    }
    
    .portfolio-modal-title {
        font-size: 1.5rem;
    }
    
    .portfolio-modal-image img {
        height: 200px;
    }
}

/* Original Modal Styles */
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

/* Skills Section Styles */
.skills-section {
    margin-top: 2rem;
}

.skills-section h4 {
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 1.5rem;
    font-weight: 600;
}

.skills-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.skill-item {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.skill-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.skill-name {
    font-weight: 500;
    color: #333;
    font-size: 0.95rem;
}

.skill-percentage {
    font-weight: 600;
    color: #667eea;
    font-size: 0.9rem;
}

.skill-bar {
    width: 100%;
    height: 8px;
    background: #f0f0f0;
    border-radius: 4px;
    overflow: hidden;
}

.skill-progress {
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 4px;
    transition: width 1s ease-in-out;
    animation: fillSkillBar 2s ease-in-out;
}

@keyframes fillSkillBar {
    from { width: 0%; }
    to { width: var(--skill-width); }
}

/* Experience Timeline Styles */
.s-experience {
    padding: 6rem 0;
    background: #f8f9fa;
}

.experience-timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem 0;
}

.experience-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transform: translateX(-50%);
}

.timeline-item {
    position: relative;
    margin-bottom: 3rem;
    width: 50%;
}

.timeline-item.left {
    left: 0;
    padding-right: 2rem;
}

.timeline-item.right {
    left: 50%;
    padding-left: 2rem;
}

.timeline-item::before {
    content: '';
    position: absolute;
    top: 1rem;
    width: 16px;
    height: 16px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.2);
}

.timeline-item.left::before {
    right: -8px;
}

.timeline-item.right::before {
    left: -8px;
}

.timeline-content {
    background: #fff;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    position: relative;
    transition: all 0.3s ease;
}

.timeline-content:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
}

.timeline-date {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.timeline-content h3 {
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.timeline-content h4 {
    font-size: 1.1rem;
    color: #667eea;
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.timeline-location {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 1rem;
    font-style: italic;
}

.timeline-description {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Responsive Design for Experience */
@media (max-width: 768px) {
    .experience-timeline::before {
        left: 2rem;
    }
    
    .timeline-item {
        width: 100%;
        left: 0 !important;
        padding-left: 4rem !important;
        padding-right: 0 !important;
    }
    
    .timeline-item::before {
        left: 1.5rem !important;
        right: auto !important;
    }
    
    .timeline-content {
        padding: 1.5rem;
    }
    
    .timeline-content h3 {
        font-size: 1.2rem;
    }
    
    .timeline-content h4 {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .timeline-content {
        padding: 1.25rem;
    }
    
    .timeline-date {
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
    }
}

/* Timeline Experience */
.timeline {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    width: 2px;
    background: #007bff;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -1px;
}

.timeline-item {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

.timeline-item::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    right: -10px;
    background-color: #007bff;
    border: 4px solid #fff;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

.timeline-item.left {
    left: 0;
}

.timeline-item.right {
    left: 50%;
}

.timeline-item.right::after {
    left: -10px;
}

.timeline-text {
    padding: 20px 30px;
    background-color: #fff;
    position: relative;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.timeline-date {
    color: #007bff;
    font-weight: bold;
    font-size: 0.9rem;
    margin-bottom: 10px;
}

.timeline-text h2 {
    color: #333;
    margin-bottom: 10px;
    font-size: 1.3rem;
}

.timeline-text h4 {
    color: #666;
    margin-bottom: 15px;
    font-size: 1rem;
}

.timeline-text p {
    color: #555;
    line-height: 1.6;
    margin: 0;
}

@media screen and (max-width: 768px) {
    .timeline::before {
        left: 31px;
    }
    
    .timeline-item {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
    }
    
    .timeline-item::before {
        left: 60px;
        border: medium solid #007bff;
        border-width: 10px 10px 10px 0;
        border-color: transparent #007bff transparent transparent;
    }
    
    .timeline-item.left::after,
    .timeline-item.right::after {
        left: 21px;
    }
    
    .timeline-item.left,
    .timeline-item.right {
        left: 0%;
    }
}
</style>
@endsection