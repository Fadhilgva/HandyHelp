@extends('guest.main')

@section('container')
<!-- job-detail-container -->
<section class="sidebar-page-container blog-details sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            @if ($job->image1)
                            <div class="image-box">
                                <figure class="image">
                                    <img src="/img/jobs/{{ $job->image1 }}" id="main_product_image" class="rounded shadow-sm" alt="{{ $job->title }}" width="770" height="520" />
                                </figure>
                            </div>
                            @else
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('images/news/news-21.jpg') }}" class="rounded shadow-sm" width="770" height="520" />
                                </figure>
                            </div>
                            @endif
                            <div class="thumbnail_images mx-2 my-0">
                                <ul id="thumbnail">
                                    @if($job->image1)
                                    <li><img onclick="changeImage(this)" class="rounded" src="/img/jobs/{{ $job->image1 }}" width="120" /></li>
                                    @endif
                                    @if($job->image2)
                                    <li><img onclick="changeImage(this)" class="rounded" src="/img/jobs/{{ $job->image2 }}" width="120" /></li>
                                    @endif
                                    @if($job->image3)
                                    <li><img onclick="changeImage(this)" class="rounded" src="/img/jobs/{{ $job->image3 }}" width="120" /></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3>{{ $job->title }}</h3>
                                <ul class="post-info clearfix">
                                    <li class="author-box">
                                        <figure class="author-thumb"><img src="{{ asset('images/news/author-1.jpg') }}" alt="" /></figure>
                                        <h5><a href="">{{ $job->user->name }}</a></h5>
                                    </li>
                                </ul>
                                <div class="text">
                                    <p>
                                        {{ $job->detail }}
                                    </p>
                                </div>
                                <div class="post-tags">
                                    <ul class="tags-list clearfix">
                                        <li>
                                            <h5>Category :</h5>
                                        </li>
                                        <li><a href="/categories/{{ $job->category->slug }}">{{ $job->category->name }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar">
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h4>Job Detail</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><i class="icon-22 pr-2"></i>{{ $job->location->name }}</li>
                                <li><i class="icon-33 pr-2"></i>{{ $job->phone }}</li>
                                <li><i class="icon-41 pr-2"></i>Rp{{ number_format($job->rate, 0,",",".") }}</li>
                                @if ($job->option_one)
                                <li><i class="icon-16 pr-2"></i>{{ $job->option_one }}</li>
                                @endif
                                @if ($job->option_two)
                                <li><i class="icon-30 pr-2"></i>{{ $job->option_two }} Person is needed</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h4>Other Jobs</h4>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.html"><img src="{{ asset('images/news/post-1.jpg') }}" alt="" /></a>
                                </figure>
                                <h5><a href="blog-details.html">Repairing Broken Fences</a></h5>
                                <span class="post-date">April 09, 2020</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.html"><img src="{{ asset('images/news/post-2.jpg') }}" alt="" /></a>
                                </figure>
                                <h5><a href="blog-details.html">Cleaning the Garden</a></h5>
                                <span class="post-date">April 09, 2020</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="blog-details.html"><img src="{{ asset('images/news/post-3.jpg') }}" alt="" /></a>
                                </figure>
                                <h5><a href="blog-details.html">Take the dog for a walk</a></h5>
                                <span class="post-date">April 08, 2020</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- job-detail-container -->
@endsection