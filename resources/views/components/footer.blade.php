@props(['about' => null])

<!-- # footer -->
<footer class="s-footer">
    <div class="row s-footer__content">
        <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">
            <h3>About {{ isset($about) && $about->title ? $about->title : 'About Me' }}</h3>
            <p>
            {{ isset($about) && $about->description ? 
                (strlen($about->description) > 250 ? substr($about->description, 0, 250) . '...' : $about->description) : 
                'Passionate full-stack developer with expertise in Laravel, React, and modern web technologies. I create digital solutions that help businesses grow and succeed in the digital world.' }}
            </p>
        </div>
        <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
            <h3>Site Links</h3>
            <ul class="link-list">
                <li><a href="{{ url('/resume?id=' . $_GET['id']) }}">Home</a></li>
                <li><a href="{{ url('/services?id=' . $_GET['id']) }}">Services</a></li>
                <li><a href="{{ url('/resume?id=' . $_GET['id']) }}#clients">Portfolio</a></li>
                <li><a href="{{ url('/about?id=' . $_GET['id']) }}">About</a></li>
                <li><a href="{{ url('/contact?id=' . $_GET['id']) }}">Contact</a></li>
                <li><a href="{{ url('/download-cv') }}">Download CV</a></li>
            </ul>
        </div>
        <div class="column xl-3 lg-6 md-12 tab-12 s-footer__block s-footer__newsletter">
            <h3>Newsletter</h3>
            <p>
            {{ isset($about) && $about->description ? 'Stay updated with my latest projects and insights. Get notified about new developments and opportunities.' : 'Stay updated with my latest projects and insights. Get notified about new developments and opportunities.' }}
            </p>
            <div class="subscribe-form">
                <form id="mc-form" class="mc-form">
                    <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Your Email Address" required>
                    <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary btn--small u-fullwidth">
                    <div class="mc-status"></div>
                </form>
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
                <span>© Copyright {{ isset($about) && $about->title ? $about->title : 'About Me' }} {{ date('Y') }}</span>
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
