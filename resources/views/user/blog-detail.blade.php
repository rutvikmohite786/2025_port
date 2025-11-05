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
    <x-navbar currentPage="blog" />

    <!-- # site main content -->
    <section id="content" class="s-content">

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <div class="blog-breadcrumb">
                        <a href="{{ url('/blog?id=' . $_GET['id']) }}">← Back to Blog</a>
                    </div>
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">Article</span>
                        {{ $blog->title }}
                    </h1>
                </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">
            <div class="row">
                <div class="column xl-8 lg-12">
                    <article class="blog-article">
                        <div class="blog-meta">
                            <span class="blog-date">{{ $blog->date ? \Carbon\Carbon::parse($blog->date)->format('M d, Y') : $blog->created_at->format('M d, Y') }}</span>
                            @if($blog->tag)
                                <span class="blog-tag">{{ $blog->tag }}</span>
                            @endif
                        </div>
                        
                        @if($blog->image)
                            <div class="blog-featured-image">
                                <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-main-image">
                            </div>
                        @endif
                        
                        <div class="blog-content">
                            <p class="blog-excerpt">{{ $blog->description }}</p>
                            
                            @if($blog->url)
                                <div class="blog-external-link">
                                    <a href="{{ $blog->url }}" target="_blank" class="btn btn--primary">Read Full Article</a>
                                </div>
                            @endif
                        </div>
                    </article>
                </div>
                
                <div class="column xl-4 lg-12">
                    <aside class="blog-sidebar">
                        <div class="sidebar-widget">
                            <h3>Recent Articles</h3>
                            @if(isset($recentBlogs) && count($recentBlogs) > 0)
                                <div class="recent-posts">
                                    @foreach($recentBlogs as $recentBlog)
                                        <div class="recent-post-item">
                                            <h4>
                                                <a href="{{ url('/blog/' . $recentBlog->id . '?id=' . $_GET['id']) }}">{{ $recentBlog->title }}</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <span>{{ $recentBlog->date ? \Carbon\Carbon::parse($recentBlog->date)->format('M d, Y') : $recentBlog->created_at->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p>No recent articles available.</p>
                            @endif
                        </div>
                        
                        <div class="sidebar-widget">
                            <h3>Get In Touch</h3>
                            <p>Interested in working together? Let's discuss your project.</p>
                            <a href="{{ url('/contact?id=' . $_GET['id']) }}" class="btn btn--primary">Contact Me</a>
                        </div>
                    </aside>
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
                            Ready to work together?
                        </h2>
                        <p class="lead">
                            {{ isset($about) && $about->description ? 
                                'Let\'s discuss your project and bring your ideas to life. ' . substr($about->description, 0, 100) . '...' : 
                                'Let\'s discuss your project and bring your ideas to life.' }}
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

<style>
.blog-breadcrumb {
    margin-bottom: 2rem;
}

.blog-breadcrumb a {
    color: #666;
    text-decoration: none;
    font-size: 0.9rem;
}

.blog-breadcrumb a:hover {
    color: #333;
}

.blog-meta {
    margin-bottom: 2rem;
    font-size: 0.9rem;
    color: #666;
}

.blog-date {
    margin-right: 1rem;
}

.blog-tag {
    background: #f0f0f0;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
}

.blog-featured-image {
    margin: 2rem 0;
}

.blog-main-image {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.blog-content {
    margin: 2rem 0;
}

.blog-excerpt {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
}

.blog-external-link {
    margin: 2rem 0;
}

.blog-sidebar {
    padding-left: 2rem;
}

.sidebar-widget {
    background: #f9f9f9;
    padding: 2rem;
    margin-bottom: 2rem;
    border-radius: 8px;
}

.sidebar-widget h3 {
    margin-bottom: 1rem;
    color: #333;
}

.recent-posts {
    margin-top: 1rem;
}

.recent-post-item {
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
}

.recent-post-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.recent-post-item h4 {
    margin-bottom: 0.5rem;
}

.recent-post-item h4 a {
    color: #333;
    text-decoration: none;
    font-size: 0.9rem;
}

.recent-post-item h4 a:hover {
    color: #666;
}

.recent-post-meta {
    font-size: 0.8rem;
    color: #666;
}

@media (max-width: 768px) {
    .blog-sidebar {
        padding-left: 0;
        margin-top: 2rem;
    }
}
</style>

@endsection


