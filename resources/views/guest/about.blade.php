@extends('guest.main')

@section('container')
<!-- about-section -->
<section class="about-section about-page pb-0">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_2">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/resource/about-1.jpg') }}" alt="" /></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_3">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>HandyHelp</h2>
                                <h5>Connecting Hands, Solving demands.</h5>
                            </div>
                            <div class="text">
                                <p>Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip ex ea commodo consequat duis aute irure.</p>
                                <p>dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
                            </div>
                            <ul class="list clearfix">
                                <li>consectetur elit sed do eius</li>
                                <li>consectetur elit sed</li>
                            </ul>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-one">Contact With Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->

<!-- feature-style-three -->
<section class="feature-style-three centred pb-110">
    <div class="auto-container">
        <div class="sec-title">
            {{-- <h5>Our Services</h5> --}}
            <h2>Our Services</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-1"></i></div>
                    <h4>Excellent Reputation</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-26"></i></div>
                    <h4>Best Local Agents</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <h4>Personalized Service</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-1"></i></div>
                    <h4>Excellent Reputation</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-26"></i></div>
                    <h4>Best Local Agents</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <h4>Personalized Service</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-1"></i></div>
                    <h4>Excellent Reputation</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-26"></i></div>
                    <h4>Best Local Agents</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <h4>Personalized Service</h4>
                    <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-three end -->

<!-- cta-section -->
<section class="cta-section alternate-2 pb-240 centred" style="background-image: url({{ asset('images/background/cta-1.jpg)') }}">
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text">
                <h2>Looking for a Job or <br />Want to offer an existing one</h2>
            </div>
            <div class="btn-box">
                <a href="property-details.html" class="theme-btn btn-three">Offer</a>
                <a href="index.html" class="theme-btn btn-one">Find</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->

<!-- funfact-section -->
<section class="funfact-section centred">
    <div class="auto-container">
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="1270">0</span>
                            </div>
                            <p>Total Contractors</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2350">0</span>
                            </div>
                            <p>Total Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2540">0</span>
                            </div>
                            <p>Total Jobs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->

<!-- testimonial-style-four -->
<section class="testimonial-style-four sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Testimonials</h5>
            <h2>What They Say About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Rebeka Dawson</h5>
                    <span class="designation">Instructor</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Marc Kenneth</h5>
                    <span class="designation">Founder CEO</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Owen Lester</h5>
                    <span class="designation">Manager</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Rebeka Dawson</h5>
                    <span class="designation">Instructor</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Marc Kenneth</h5>
                    <span class="designation">Founder CEO</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Owen Lester</h5>
                    <span class="designation">Manager</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Rebeka Dawson</h5>
                    <span class="designation">Instructor</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Marc Kenneth</h5>
                    <span class="designation">Founder CEO</span>
                </div>
            </div>
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                    <h5>Owen Lester</h5>
                    <span class="designation">Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-style-four end -->

<!-- WE ARE TEAM -->
<section class="team-section sec-pad centred">
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>We are Team</h5>
            <h2>Meet Our Team Members</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('images/team/team-1.png') }}" alt="" /></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Muhammad Fadhil</a></h4>
                            <span class="designation">Scrum Master</span>
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('images/team/team-2.png') }}" alt="" /></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Teni Nur Afifah Oktaviana</a></h4>
                            <span class="designation">Designer</span>
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('images/team/team-3.png') }}" alt="" /></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Muhammad Selfano</a></h4>
                            <span class="designation">Developer</span>
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('images/team/team-4.png') }}" alt="" /></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Belvas Ghazalah Aufa</a></h4>
                            <span class="designation">Developer</span>
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('images/team/team-5.png') }}" alt="" /></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Saufa Tahsunien Udjma</a></h4>
                            <span class="designation">Designer</span>
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="index.html"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- WE ARE TEAM end -->
@endsection