@extends('guest.main')

@section('container')
<!-- jobs-section -->
<section class="category-section category-page mr-0 pt-20 pb-20">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Jobs</h2>
            {{-- <h5>Find a job that suits you</h5> --}}
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="row clearfix">
            @foreach ($jobs as $job)
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/feature/feature-1.png') }}" alt="" /></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/jobs/{{ $job->slug }}">{{ $job->title }}</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>${{ $job->rate }}.00</h4>
                                </div>
                            </div>
                            <p>{{ Str::limit($job->detail, 50) }}</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>{{ $job->location->name }}</li>
                                <li><i class="icon-16"></i>{{ $job->category->name }}</li>
                            </ul>
                            <div class="btn-box"><a href="/jobs/{{ $job->slug }}" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/feature/feature-2.png') }}" alt="" /></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/job-detail">Repairing Broken Fences</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$70.00</h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Bandung</li>
                                <li><i class="icon-16"></i>Small Task</li>
                            </ul>
                            <div class="btn-box"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/feature/feature-3.png') }}" alt="" /></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/job-detail">Cleaning the Garden</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$50.00</h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                            </ul>
                            <div class="btn-box"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/feature/feature-1.png') }}" alt="" /></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/job-detail">Repairing Electrical Installations</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$120.00</h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Jakarta</li>
                                <li><i class="icon-16"></i>Small Task</li>
                            </ul>
                            <div class="btn-box"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/feature/feature-2.png') }}" alt="" /></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/job-detail">Repairing Broken Fences</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$70.00</h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Bandung</li>
                                <li><i class="icon-16"></i>Small Task</li>
                            </ul>
                            <div class="btn-box"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/feature/feature-3.png') }}" alt="" /></figure>
                        </div>
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/job-detail">Cleaning the Garden</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$50.00</h4>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                            </ul>
                            <div class="btn-box"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" style="float: left">
                <div class="pagination-wrapper">
                    <ul class="pagination clearfix">
                        <li><a href="agency-list.html" class="current">1</a></li>
                        <li><a href="agency-list.html">2</a></li>
                        <li><a href="agency-list.html">3</a></li>
                        <li>
                            <a href="agency-list.html"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- jobs-section end -->
@endsection