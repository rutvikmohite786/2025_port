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
                        <span class="page-title__small-type text-pretitle">Service Details</span>
                        {{ isset($service) ? $service->title : 'Service' }}
                    </h1>
                </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">
            <div class="row pageintro">
                <div class="column xl-8 lg-12">
                    <h2 class="text-display-title">{{ isset($service) ? $service->title : 'Service Title' }}</h2>
                </div>
                <div class="column xl-4 lg-12 u-flexitem-x-right">
                    <div class="service-detail-icon">
                        <i class="{{ isset($service) ? $service->image : 'fas fa-code' }}"></i>
                    </div>
                </div>
            </div>

            <div class="row pagemedia">
                <div class="column xl-12">
                    <figure class="page-media">
                        <img src="{{ asset('user/images/thumbs/about/about-1200.jpg') }}" 
                             srcset="{{ asset('user/images/thumbs/about/about-2400.jpg') }} 2400w, 
                                     {{ asset('user/images/thumbs/about/about-1200.jpg') }} 1200w, 
                                     {{ asset('user/images/thumbs/about/about-600.jpg') }} 600w" 
                             sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                    </figure>
                </div>
            </div>

            <div class="row width-narrower pagemain">
                <div class="column xl-12">
                    <div class="service-detail-content">
                        <div class="service-description">
                            <h3>Service Overview</h3>
                            <p>{{ isset($service) ? $service->description : 'This service provides comprehensive solutions tailored to your specific needs. Our expert team ensures high-quality delivery and exceptional results.' }}</p>
                        </div>

                        <div class="service-features">
                            <h3>What You Get</h3>
                            <div class="features-grid">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Professional Quality</h4>
                                        <p>High-quality deliverables that meet industry standards and exceed expectations.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Timely Delivery</h4>
                                        <p>Projects completed on time with regular updates and transparent communication.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>24/7 Support</h4>
                                        <p>Round-the-clock support to address any questions or concerns you may have.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Quality Assurance</h4>
                                        <p>Thorough testing and quality checks to ensure everything works perfectly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-process">
                            <h3>Our Process</h3>
                            <div class="process-steps">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h4>Consultation</h4>
                                        <p>We discuss your requirements and understand your project goals.</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h4>Planning</h4>
                                        <p>We create a detailed plan and timeline for your project.</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h4>Development</h4>
                                        <p>We implement the solution with regular updates and feedback.</p>
                                    </div>
                                </div>
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h4>Delivery</h4>
                                        <p>We deliver the final product with testing and documentation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-cta">
                            <h3>Ready to Get Started?</h3>
                            <p>Let's discuss your project and create something amazing together.</p>
                            <div class="cta-buttons">
                                <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary">Get Quote</a>
                                <a href="{{ url('/services?id=' . $_GET['id']) }}" class="btn btn--stroke">View All Services</a>
                            </div>
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
                    <h3>What Clients Say</h3>
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

    </section>

    <!-- # footer -->
    <x-footer :about="$about" />

</div>

@endsection

@section('footer')
<style>
/* Service Detail Styles */
.service-detail-icon {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.service-detail-icon i {
    font-size: 3rem;
    color: white;
}

.service-detail-content {
    margin-top: 3rem;
}

.service-description {
    margin-bottom: 3rem;
}

.service-description h3,
.service-features h3,
.service-process h3,
.service-cta h3 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 1.5rem;
    font-weight: 600;
}

.service-description p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: #e9ecef;
    transform: translateY(-2px);
}

.feature-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon i {
    font-size: 1.2rem;
    color: white;
}

.feature-content h4 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.feature-content p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.process-step {
    text-align: center;
    padding: 2rem 1rem;
    position: relative;
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.step-content h4 {
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.step-content p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.service-cta {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 3rem;
    border-radius: 20px;
    text-align: center;
    color: white;
    margin-top: 3rem;
}

.service-cta h3 {
    color: white;
    font-size: 2rem;
    margin-bottom: 1rem;
}

.service-cta p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-buttons .btn {
    padding: 1rem 2rem;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.cta-buttons .btn--primary {
    background: white;
    color: #667eea;
    border: 2px solid white;
}

.cta-buttons .btn--primary:hover {
    background: transparent;
    color: white;
    transform: translateY(-2px);
}

.cta-buttons .btn--stroke {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.cta-buttons .btn--stroke:hover {
    background: white;
    color: #667eea;
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .service-detail-icon {
        width: 100px;
        height: 100px;
        margin-bottom: 2rem;
    }
    
    .service-detail-icon i {
        font-size: 2.5rem;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .process-steps {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .service-cta {
        padding: 2rem;
    }
    
    .service-cta h3 {
        font-size: 1.5rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .service-detail-content {
        margin-top: 2rem;
    }
    
    .service-description h3,
    .service-features h3,
    .service-process h3,
    .service-cta h3 {
        font-size: 1.5rem;
    }
    
    .feature-item {
        padding: 1rem;
    }
    
    .process-step {
        padding: 1.5rem 0.5rem;
    }
    
    .step-number {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
}
</style>
@endsection
