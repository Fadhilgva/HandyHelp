@extends('auth.main')

@section('container')
<!-- profile-member -->
<section class="agent-details">
    <div class="auto-container">
        <div class="agency-details-content">
            <div class="agents-block-one">
                <div class="inner-box mr-0">
                    <figure class="image-box"><img src="{{ asset('images/resource/agency-details-1.jpg') }}" alt="" /></figure>
                    <div class="content-box">
                        <div class="upper clearfix">
                            <div class="title-inner pull-left">
                                <h4>John Doe</h4>
                            </div>
                        </div>
                        <div class="text">
                            <p>
                                Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse.when things don’t go
                                their way! Pretty sad situation, to say the least. Have some fun and hypnotize yourself to be your very own Ghost of Christmas future”
                            </p>
                        </div>
                        <ul class="info clearfix mr-0">
                            <li><i class="icon-22"></i><a href="">Indonesia, Jakarta</a></li>
                            <li><i class="fab fa fa-envelope"></i><a href="">Johndoe@gmail.com</a></li>
                            <li><i class="fab fa fa-phone"></i><a href="">030 3057 1965</a></li>
                        </ul>
                        <div class="clearfix">
                            <div class="btn-box pull-right">
                                <a href="/profile-member-edit" class="theme-btn btn-one">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- profile-member end -->

<!-- job-posting-member-section -->
<section class="agents-page-section agent-details-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side tabs-box">
                    <div class="group-title">
                        <h3>Jobs Posting</h3>
                    </div>
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <div class="clearfix">
                                <div class="btn-box pull-right">
                                    <a href="/posting-job" class="theme-btn btn-one">Add Job Offer</a>
                                </div>
                            </div>
                        </div>
                        <div class="right-column pull-right">
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Sort by: Newest">Sort by: Newest</option>
                                        <option value="1">New Arrival</option>
                                        <option value="2">Top Rated</option>
                                        <option value="3">Offer Place</option>
                                        <option value="4">Most Place</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset('images/resource/deals-3.jpg') }}" alt="" /></figure>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="/job-detail">Reairing Electrical</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$120.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-22"></i>Malang</li>
                                                    <li><i class="icon-16"></i>Medium Task</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset('images/resource/deals-4.jpg') }}" alt="" /></figure>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="/job-detail">Repairing Broken Fences</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$20,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-22"></i>Malang</li>
                                                    <li><i class="icon-16"></i>Medium Task</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset('images/resource/deals-5.jpg') }}" alt="" /></figure>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="/job-detail">Cleaning the Garden</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$35,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-22"></i>Malang</li>
                                                    <li><i class="icon-16"></i>Medium Task</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset('images/resource/deals-6.jpg') }}" alt="" /></figure>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="/job-detail">Home in Merrick Way</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$45,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-22"></i>Malang</li>
                                                    <li><i class="icon-16"></i>Medium Task</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset('images/resource/deals-7.jpg') }}" alt="" /></figure>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="/job-detail">Apartment in Glasgow</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$40,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-22"></i>Malang</li>
                                                    <li><i class="icon-16"></i>Medium Task</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="/job-detail" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- job-posting-member-section end -->
@endsection