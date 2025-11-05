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
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">Blog</span>
                        Latest Articles & Insights
                    </h1>
                </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">
            <div class="row pageintro">
                <div class="column xl-6 lg-12">
                    <h2 class="text-display-title">Thoughts, insights, and updates</h2>
                </div>
                <div class="column xl-6 lg-12 u-flexitem-x-right">
                    <p class="lead">
                        {{ isset($about) && $about->description ? 
                            'Explore my latest thoughts on web development, technology trends, and industry insights. ' . substr($about->description, 0, 150) . '...' : 
                            'Explore my latest thoughts on web development, technology trends, and industry insights. Stay updated with the latest in technology and development practices.' }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="column xl-12 grid-block">
                    @if (isset($blogs) && count($blogs) > 0)
                        <div class="grid-full grid-list-items list-items show-ctr">
                            @foreach ($blogs as $key => $blog)
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <div class="blog-meta">
                                            <span class="blog-date">{{ $blog->date ? \Carbon\Carbon::parse($blog->date)->format('M d, Y') : $blog->created_at->format('M d, Y') }}</span>
                                            @if($blog->tag)
                                                <span class="blog-tag">{{ $blog->tag }}</span>
                                            @endif
                                        </div>
                                        <h3 class="list-items__item-title">
                                            <a href="{{ url('/blog/' . $blog->id . '?id=' . $_GET['id']) }}">{{ $blog->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        <p>{{ $blog->description }}</p>
                                        @if($blog->image)
                                            <div class="blog-image">
                                                <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="blog-thumbnail">
                                            </div>
                                        @endif
                                        <div class="blog-actions">
                                            <a href="{{ url('/blog/' . $blog->id . '?id=' . $_GET['id']) }}" class="btn btn--primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="column xl-12 text-center">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="column xl-12 text-center">
                                <h3>No blog posts available yet.</h3>
                                <p>Check back soon for the latest articles and insights!</p>
                            </div>
                        </div>
                    @endif
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
.blog-meta {
    margin-bottom: 1rem;
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

.blog-image {
    margin: 1rem 0;
}

.blog-thumbnail {
    width: 100%;
    max-width: 300px;
    height: auto;
    border-radius: 8px;
}

.blog-actions {
    margin-top: 1rem;
}
</style>

@endsection


