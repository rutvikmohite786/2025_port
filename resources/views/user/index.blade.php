@extends('layouts.user')
@section('content')
<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-center p-4">
        <div class="modal-body">
          <h5 class="modal-title mb-2">Thank you for your submission!</h5>
        </div>
      </div>
    </div>
  </div>
  
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <section>
                        <div class="">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body p-5">

                                            <div class="text-center mb-4 pb-2">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-quotes/bulb.webp"
                                                    alt="Bulb" width="100">
                                            </div>

                                            <figure class="text-center mb-0">
                                                <blockquote class="blockquote">
                                                    <p class="pb-3">
                                                        <i class="fas fa-quote-left fa-xs text-primary"></i>
                                                        <span class="lead font-italic"></span>
                                                        <i class="fas fa-quote-right fa-xs text-primary"></i>
                                                    </p>
                                                </blockquote>
                                            </figure>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">RutvikDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#experience" class="nav-item nav-link">Experience</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>

                    @if ($_GET['id'] == config('key.freelancer_key'))
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#price" class="nav-item nav-link">Price</a>
                        <a href="#review" class="nav-item nav-link">Review</a>
                        <a href="#team" class="nav-item nav-link">Team</a>
                    @endif
                    <a href="#blog" class="nav-item nav-link">Blog</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Rutvik</h1>
                            <h2></h2>
                            <div class="typed-text">Back End Developer, Front End Developer</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="">Download CV</a>
                            <a class="btn" href="#contactForm">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ asset('user/img/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('user/img/about.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Learn About Me</p>
                            <h2>{{ isset($about) ? $about->title : '' }}</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                {{ isset($about) ? $about->description : '' }}
                            </p>

                            <p class="about2" style="display: none;">
                                {{ isset($about_2) ? $about_2->description : '' }}
                            </p>
                        </div>
                        <div class="skills">
                            @foreach ($tech as $key => $value)
                                <div class="skill-name">
                                    <p>{{ $value->name }}</p>
                                    <p>{{ $value->percentage }}%</p>
                                </div>
                            @endforeach



                        </div>
                        <a class="btn learn_more" href="">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About End -->

    
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>What I do</p>
                    <h2>Awesome Quality Services</h2>
                </div>
                <div class="row">
                    @foreach ($service as $key => $value)
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="{{ $value->image }}"></i>
                                </div>
                                <div class="service-text">
                                    <h3>{{ $value->title }}</h3>
                                    <p>
                                        {{ $value->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->
   

    <!-- Modal -->
    <div class="modaladd">

    </div>

    <!-- Experience Start -->
    @if ($experience)
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>My Resume</p>
                    <h2>Working Experience</h2>
                </header>
                <div class="timeline">
                    @foreach ($experience as $key => $value)
                        <div class="timeline-item {{ $key % 2 == 0 ? 'left' : 'right' }} wow {{ $key % 2 == 0 ? 'slideInLeft' : 'slideInRight' }}"
                            data-wow-delay="0.1s">
                            <div class="timeline-text">
                                <div class="timeline-date">{{ $value->year }}</div>
                                <h2>{{ $value->title }}({{ $value->company_name }})</h2>
                                <h4>{{ $value->location }}</h4>
                                <p>
                                    {{ $value->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Job Experience End -->
    
    <!-- Banner Start -->
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="">
        @if ($_GET['id'] == config('key.freelancer_key'))
            <div class="section-header text-center">
                <p>Reasonable Price</p>
                <h2>Get A <span>Special</span> Price</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                    facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                    quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                </p>
                <a class="btn">Pricing Plan</a>
            </div>

        @else
        <div class="section-header text-center expertice">
            <h2>My <span>Expertice</span></h2>
          </div>
          <br>
          <div class="container banner-text">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
          
                <div class="swiper-slide text-center">
                <div class="section-expertice">
                  <i class="fab fa-php"></i>
                  
                    <ul style="color:white;">
                        <li>Developed dynamic and secure web applications using <strong>Vanilla PHP</strong>, following MVC design patterns.</li>
                        <li>Built and consumed <strong>RESTful APIs</strong> using PHP and cURL.</li>
                        <li>Integrated third-party services such as <strong>Stripe, Paddle, and PayPal</strong> for seamless payment processing.</li>
                      </ul>
                      
                    </div>
                </div>
          
                <div class="swiper-slide text-center">
                    <div class="section-expertice">
                  <i class="fab fa-laravel" ></i>
                  <ul style="color:white;">
                    <li>Developed scalable web applications using <strong>Laravel</strong>, implementing MVC architecture and RESTful routing.</li>
                    <li>Integrated <strong>Laravel Cashier</strong> for subscription billing with Stripe, and handled webhook events securely.</li>
                    <li>Utilized <strong>Eloquent ORM</strong> for efficient database queries and implemented relationships, validations, and migrations.</li>
                  </ul>         </div>       </div>
          
                <div class="swiper-slide text-center">
                    <div class="section-expertice">
                  <i class="fab fa-react" ></i>
                  <ul style="color:white;">
                    <li>Developed interactive and responsive web applications using <strong>React.js</strong> with hooks and functional components.</li>
                    <li>Implemented state management using <strong>Context API</strong> and <strong>Redux</strong> for global state across complex applications.</li>
                    <li>Built dynamic UI components with <strong>React Router</strong> for seamless navigation and <strong>Axios</strong> for handling API requests.</li>
                  </ul></div>
                </div>
          
                <div class="swiper-slide text-center">
                    <div class="section-expertice">
                  <i class="fas fa-hard-hat" ></i>
                  <ul style="color:white;">
                    <li>Developed and tested smart contracts using <strong>Hardhat</strong>, ensuring efficient deployment and contract interaction.</li>
                    <li>Integrated <strong>Hardhat</strong> with <strong>Ethereum</strong> test networks (Rinkeby, Goerli) for seamless contract testing and validation.</li>
                    <li>Automated smart contract deployment and interaction scripts using <strong>Hardhat</strong> along with <strong>ethers.js</strong> for smooth DApp integration.</li>
                  </ul></div>
                </div>
          
              </div>
            </div>
          </div>
        @endif

        
        </div>
    </div>
    <!-- Banner End -->


    <!-- Portfolio Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Portfolio</p>
                <h2>My Excellent Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($porttech as $key => $value)
                            <li data-filter=".{{ $value->name }}">{{ $value->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach ($portfolio as $key => $value)
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item {{ $value->techport->name }} wow fadeInUp"
                        data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img ">
                                <img src="{{ asset('images/portfolio' . '/' . $value->image) }}" alt="Image"
                                    class="imageport">
                            </div>

                            <div class="portfolio-text bt-model">
                                <h3>{{ $value->title }}</h3>
                                <!-- <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a> -->
                                <a class="btn portdata" data-id="{{ $value->id }}">+</a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Banner Start -->
    @if ($_GET['id'] == config('key.freelancer_key'))
    <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Awesome Discount for college student</p>
                <h2>Get <span>30%</span> Discount</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                    facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                    quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                </p>
                <a class="btn">Contact Now</a>
            </div>
        </div>
    </div>
    @endif
    <!-- Banner End -->

    <!-- Testimonial Start -->
    @if ($_GET['id'] == config('key.freelancer_key'))
    <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
        <div class="container">
            <div class="testimonial-icon">
                <i class="fa fa-quote-left"></i>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-1.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                            suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-2.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                            suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-3.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
                            suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                        </p>
                        <h3>Customer Name</h3>
                        <h4>Profession</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="team" id="team">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Team</p>
                <h2>Expert Team Members</h2>
            </div>
            <div class="row">
                @foreach ($team as $key => $value)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="{{ $key }}s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('images/team' . '/' . $value->image) }}" alt="Image"
                                    class="imageteam">
                            </div>
                            <div class="team-text">
                                <h2>{{ $value->name }}</h2>
                                <h4>{{ $value->designation }}</h4>
                                <p>
                                    {{ $value->description }}
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Contact Start -->
    <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form id="contactForm"
                                novalidate="novalidate">
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" required="required"
                                        data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" required="required"
                                        data-validation-required-message="Please enter your email" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject" required="required"
                                        data-validation-required-message="Please enter a subject" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Blog Start -->
    <div class="blog" id="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>From Blog</p>
                <h2>Latest Articles</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>Admin</p>
                                <p><i class="far fa-list-alt"></i>Web Design</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin
                                viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus,
                                ornare mattis nisl massa et eros vitae pulvin
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>Admin</p>
                                <p><i class="far fa-list-alt"></i>Apps Design</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>10</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin
                                viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus,
                                ornare mattis nisl massa et eros vitae pulvin
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Rutvik</h2>
                    <h3>Ahmedabad, INDIA</h3>
                    <div class="footer-menu">
                        <p>+91 9313434881</p>
                        <p>info@example.com</p>
                    </div>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="https://rutvikdev.in/resume?id=reusbjkbhjbfjbbjbjbjb">rutvikdev.in</a>, All Right Reserved | Designed By <a
                        href="https://rutvikdev.in/resume?id=reusbjkbhjbfjbbjbjbjb">Rutvik</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $("#contactForm").validate({
                rules: {
                    name: "required",
                    email: "required",
                }
            });
            $(".nav-link").click(function() {
                $('#navbarCollapse').removeClass('show')
                setTimeout(function() {
                    $('#loader').removeClass('show')
                }, 1000);
                $('#loader').addClass('show')
            });
            $('.learn_more').on('click', function(e) {

                setTimeout(function() {
                    $('#loader').removeClass('show')
                    $('.about2').show();
                    $('.learn_more').remove()
                }, 2000);
                $('#loader').addClass('show')


                e.preventDefault();
            });
        });


        $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        const isValid = this.checkValidity();
        if(!isValid){
          return false;
        }

        $.ajax({
            url: "{{ route('contact.store') }}", // Your Laravel route
            method: 'POST',
            data: $(this).serialize(), // Serialize form data
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#contactForm')[0].reset();
                $('#thankYouModal').modal('show');

// ✅ Hide modal after 2 seconds
setTimeout(function () {
    $('#thankYouModal').modal('hide');
}, 2000);
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
            }
        });
    });
        //  $(window).on('load', function() {
        //     var category = 'happiness'
        //     $.ajax({
        //         method: 'GET',
        //         url: 'https://api.whatdoestrumpthink.com/api/v1/quotes/random',
        //         contentType: 'application/json',
        //         success: function(result) {
        //             $('#exampleModalCenter').modal('show');

        //             console.log(result);
        //             $('.lead').html(result.message)
        //         },
        //         error: function ajaxError(jqXHR) {
        //             console.error('Error: ', jqXHR.responseText);
        //         }
        //     });
        // });

        new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          grabCursor: true,
          speed: 2000,
          autoplay: {
            delay: 3000,
            disableOnInteraction: true,
          },
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          },
        });
    </script>
@endsection
