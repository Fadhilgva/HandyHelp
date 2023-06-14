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
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('images/news/news-21.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                                <h3>Repairing Electrical Installations</h3>
                                <ul class="post-info clearfix">
                                    <li class="author-box">
                                        <figure class="author-thumb"><img src="{{ asset('images/news/author-1.jpg') }}" alt="" /></figure>
                                        <h5><a href="blog-details.html">Member</a></h5>
                                    </li>
                                </ul>
                                <div class="text">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis
                                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptem accusantium doloremque laudantium.</p>
                                    <p>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptem accusantium doloremque laudantium totam rem aperiam.
                                    </p>
                                </div>
                                <div class="post-tags">
                                    <ul class="tags-list clearfix">
                                        <li>
                                            <h5>Category :</h5>
                                        </li>
                                        <li><a href="blog-details.html">Electrical</a></li>
                                        <li><a href="blog-details.html">Gardening</a></li>
                                        <li><a href="blog-details.html">Repairing</a></li>
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
                                <li><i class="icon-22 pr-2"></i>Jakarta</li>
                                <li><i class="icon-33 pr-2"></i>081357638723</li>
                                <li><i class="icon-16 pr-2"></i>Small Task, Est 1 Hour</li>
                                <li><i class="icon-41 pr-2"></i>$100 - $150</li>
                                <li><i class="icon-30 pr-2"></i>2 Person is needed</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- job-detail-container -->
@endsection
	
