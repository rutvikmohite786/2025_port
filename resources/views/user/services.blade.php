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
<div id="page" class="s-pagewrap">

    <!-- # site header -->
    <x-navbar currentPage="services" />

    <!-- # site main content -->
    <section id="content" class="s-content">

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">Services</span>
                        High-Impact Services
                    </h1>
                </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">
            <div class="row pageintro">
                <div class="column xl-6 lg-12">
                    <h2 class="text-display-title">High-impact services to help your business</h2>
                </div>
                <div class="column xl-6 lg-12 u-flexitem-x-right">
                    <p class="lead">
                    {{ isset($about) && $about->description ? 
                        'I provide comprehensive web development services to help your business grow and succeed in the digital world. ' . substr($about->description, 0, 150) . '...' : 
                        'I provide comprehensive web development services to help your business grow and succeed in the digital world. From custom web applications to responsive websites, I deliver solutions that meet your specific needs and exceed your expectations.' }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="column xl-12 grid-block">
                    @if (isset($service) && count($service) > 0)
                        <div class="grid-full grid-list-items list-items show-ctr">
                            @foreach ($service as $key => $value)
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">{{ $value->title }}</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>{{ $value->description }}</p>
                                        <ul class="list-services">
                                            <li>Custom Development</li>
                                            <li>Responsive Design</li>
                                            <li>Modern Technologies</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="grid-full grid-list-items list-items show-ctr">
                            <div class="grid-list-items__item list-items__item">
                                <div class="list-items__item-header">
                                    <h3 class="list-items__item-title">Web Development</h3>
                                </div>
                                <div class="list-items__item-text">
                                    <p>
                                    Complete web application development using Laravel, React, and modern technologies. I create scalable, 
                                    maintainable, and efficient web solutions that meet your business requirements.
                                    </p>
                                    <ul class="list-services">
                                        <li>Custom Development</li>
                                        <li>Responsive Design</li>
                                        <li>Modern Technologies</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid-list-items__item list-items__item">
                                <div class="list-items__item-header">
                                    <h3 class="list-items__item-title">Mobile-First Design</h3>
                                </div>
                                <div class="list-items__item-text">
                                    <p>
                                    Creating mobile-first, responsive designs that work perfectly on all devices. I ensure your website 
                                    provides an optimal user experience across desktop, tablet, and mobile platforms.
                                    </p>
                                    <ul class="list-services">
                                        <li>Responsive Layout</li>
                                        <li>Mobile Optimization</li>
                                        <li>Cross-Platform Testing</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid-list-items__item list-items__item">
                                <div class="list-items__item-header">
                                    <h3 class="list-items__item-title">Database Solutions</h3>
                                </div>
                                <div class="list-items__item-text">
                                    <p>
                                    Designing and optimizing database structures for optimal performance and scalability. I create 
                                    efficient data models that support your application's growth and performance requirements.
                                    </p>
                                    <ul class="list-services">
                                        <li>Database Design</li>
                                        <li>Performance Optimization</li>
                                        <li>Data Migration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="column xl-12 text-center">
                            <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary">Get Started Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if (isset($team) && count($team) > 0)
        <section class="s-testimonials">
            <div class="s-testimonials__header row row-x-center text-center">
                <div class="column xl-8 lg-12">
                    <p class="text-pretitle">Testimonials</p>
                        <h3>My Team</h3>
                </div>
            </div>

            <div class="row s-testimonials__content">
                <div class="column xl-12 testimonials">
                    <div class="swiper-container testimonials__slider page-slider">
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
        </section>
        @endif

        <!-- # cta -->
        <section id="cta" class="s-cta">
            <div class="row row-x-center text-center">
                <div class="column xl-8 lg-12">
                    <div class="s-cta__content">
                        <h2 class="text-display-title">
                        Get started with a consultation today.
                        </h2>
                        <p class="lead">
                        {{ isset($about) && $about->description ? 
                            'Ready to bring your ideas to life? Let\'s discuss your project requirements and create something amazing together. ' . substr($about->description, 0, 100) . '...' : 
                            'Ready to bring your ideas to life? Let\'s discuss your project requirements and create something amazing together.' }}
                        </p>
                        <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary">Let's Work Together</a>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <!-- # footer -->
    <x-footer :about="$about" />

</div>

@endsection

