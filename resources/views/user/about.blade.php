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
    <x-navbar currentPage="about" />

    <!-- # site main content -->
    <section id="content" class="s-content">

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">About</span>
                        {{ isset($about) && $about->title ? $about->title : 'About Me' }}
                    </h1>
                </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">
            <div class="row pageintro">
                <div class="column xl-6 lg-12">
                    <h2 class="text-display-title">Some inspiring words to describe yourself</h2>
                </div>
                <div class="column xl-6 lg-12 u-flexitem-x-right">
                    <p class="lead">
                    {{ isset($about) && $about->description ? 
                        (strlen($about->description) > 300 ? substr($about->description, 0, 300) . '...' : $about->description) : 
                        'I am a passionate developer with expertise in creating modern, responsive web applications that deliver exceptional user experiences. I specialize in full-stack development with Laravel, React, and modern web technologies.' }}
                    </p>
                </div>
            </div>

            <div class="row pagemedia">
                <div class="column xl-12">
                    <figure class="page-media">
                        <img src="{{ asset('user/img/hero.png') }}" alt="Rutvik Rawal">
                    </figure>
                </div>
            </div>

            <div class="row width-narrower pagemain">
                <div class="column xl-12">
                    <h2>How I Got Here</h2>
                    <p>
                    {{ isset($about) && $about->description ? $about->description : 'I am a passionate developer with expertise in creating modern, responsive web applications that deliver exceptional user experiences. I specialize in full-stack development with Laravel, React, and modern web technologies. My journey in web development started with a curiosity about how websites work and has evolved into a deep passion for creating digital solutions that make a difference.' }}
                    </p>

                    @if (isset($about_2) && $about_2->description && $about_2->id != $about->id)
                    <p>{{ $about_2->description }}</p>
                    @endif

                    @if (isset($tech) && count($tech) > 0)
                    <h2 class="u-add-bottom">My Skills & Expertise</h2>
                    <div class="row">
                        @foreach ($tech as $key => $value)
                        <div class="column xl-6 lg-12">
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">{{ $value->title }}</h6>
                                    <span class="skill-percentage">{{ $value->percentage }}%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: {{ $value->percentage }}%"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @if (isset($experience) && count($experience) > 0)
                    <h2 class="u-add-bottom">My Experience</h2>
                    <div class="experience-timeline">
                        @foreach ($experience as $key => $value)
                        <div class="experience-item">
                            <div class="experience-content">
                                <h4 class="experience-title">{{ $value->title }}</h4>
                                <p class="experience-company">{{ $value->company_name }}</p>
                                <p class="experience-duration">{{ $value->year }}</p>
                                <p class="experience-description">{{ $value->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <h2 class="u-add-bottom">My Values & Beliefs</h2>

                    <div class="grid-list-items list-items">
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">Clean Code</h6>
                            </div>
                            <p>
                            I believe in writing maintainable, efficient, and well-documented code that follows best practices. Clean code is not just about functionality, but about creating solutions that are easy to understand, modify, and extend.
                            </p>
                        </div>
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">User Experience</h6>
                            </div>
                            <p>
                            Creating intuitive and engaging user experiences is at the heart of everything I do. I focus on understanding user needs and designing solutions that solve real problems while being delightful to use.
                            </p>
                        </div>
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">Innovation</h6>
                            </div>
                            <p>
                            I stay up-to-date with the latest technologies and trends in web development. Innovation drives me to explore new possibilities and implement cutting-edge solutions that push boundaries.
                            </p>
                        </div>
                        <div class="grid-list-items__item list-items__item u-remove-bottom">
                            <div class="list-items__item-header">
                                <h6 class="list-items__item-small-title">Collaboration</h6>
                            </div>
                            <p>
                            I believe in the power of teamwork and collaboration. Working closely with clients and team members to understand requirements and deliver exceptional results is what makes projects successful.
                            </p>
                        </div>
                    </div>

                    <h2>Why Work With Me</h2>
                    <p>
                    {{ isset($about) && $about->description ? 
                        'With my expertise in modern web technologies and a passion for creating exceptional digital experiences, I bring a unique combination of technical skills and creative problem-solving to every project. ' . substr($about->description, 0, 200) . '...' : 
                        'With my expertise in modern web technologies and a passion for creating exceptional digital experiences, I bring a unique combination of technical skills and creative problem-solving to every project. I understand that every business has unique needs, and I work closely with clients to deliver solutions that not only meet their requirements but exceed their expectations.' }}
                    </p>

                    <p>
                    I believe in building long-term relationships with my clients. My approach is collaborative, transparent, and focused on delivering value. Whether you need a simple website, a complex web application, or ongoing maintenance and support, I'm committed to providing solutions that help your business grow and succeed in the digital world.
                    </p>

                    <h2>A Few More Words About Myself</h2>
                    <p>
                    When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or sharing knowledge with the developer community. I believe in continuous learning and staying curious about the ever-evolving world of web development. My goal is to not just build websites and applications, but to create digital experiences that make a positive impact on people's lives and help businesses achieve their goals.
                    </p>

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
                            'Ready to bring your ideas to life? Let\'s discuss your project requirements and create something amazing together. ' . substr($about->description, 0, 150) . '...' : 
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

<style>
/* Skills Section Styles */
.skill-item {
    margin-bottom: 2rem;
}

.skill-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
}

.skill-title {
    font-size: 1rem;
    font-weight: 600;
    color: #333;
    margin: 0;
}

.skill-percentage {
    font-size: 0.9rem;
    font-weight: 500;
    color: #666;
}

.skill-bar {
    width: 100%;
    height: 8px;
    background-color: #f0f0f0;
    border-radius: 4px;
    overflow: hidden;
}

.skill-progress {
    height: 100%;
    background: linear-gradient(90deg, #007bff, #0056b3);
    border-radius: 4px;
    transition: width 0.8s ease-in-out;
    position: relative;
}

.skill-progress::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* Experience Timeline Styles */
.experience-timeline {
    position: relative;
    padding-left: 2rem;
}

.experience-timeline::before {
    content: '';
    position: absolute;
    left: 1rem;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, #007bff, #0056b3);
}

.experience-item {
    position: relative;
    margin-bottom: 2rem;
    padding-left: 2rem;
}

.experience-item::before {
    content: '';
    position: absolute;
    left: -1.5rem;
    top: 0.5rem;
    width: 12px;
    height: 12px;
    background: #007bff;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 0 0 3px #007bff;
}

.experience-content {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #007bff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.experience-content:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.1);
}

.experience-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    margin: 0 0 0.5rem 0;
}

.experience-company {
    font-size: 1rem;
    font-weight: 500;
    color: #007bff;
    margin: 0 0 0.25rem 0;
}

.experience-duration {
    font-size: 0.9rem;
    color: #666;
    margin: 0 0 1rem 0;
    font-style: italic;
}

.experience-description {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.6;
    margin: 0;
}

/* Responsive adjustments */
@media screen and (max-width: 768px) {
    .skill-item {
        margin-bottom: 1.5rem;
    }
    
    .skill-title {
        font-size: 0.9rem;
    }
    
    .skill-percentage {
        font-size: 0.8rem;
    }
    
    .experience-timeline {
        padding-left: 1.5rem;
    }
    
    .experience-item {
        padding-left: 1.5rem;
    }
    
    .experience-item::before {
        left: -1.25rem;
        width: 10px;
        height: 10px;
    }
    
    .experience-content {
        padding: 1rem;
    }
    
    .experience-title {
        font-size: 1.1rem;
    }
}
</style>

