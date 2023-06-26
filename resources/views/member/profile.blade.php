@extends('guest.main')

@section('container')
<!-- profile-member -->
<section class="agent-details">
    <div class="auto-container">
        @if (session()->has('updateprofile'))
        <div class="alert alert-success alert-dismissible fade show text-center m-4" role="alert">
            <small>{{ session('updateprofile') }}</small>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="agency-details-content">
            <div class="agents-block-one">
                <div class="inner-box mr-0">
                    <figure class="image-box"><img src="{{ asset('images/resource/agency-details-1.jpg') }}" alt="" /></figure>
                    <div class="content-box">
                        <div class="clearfix">
                            <div class="title-inner pull-left">
                                <h4>{{ Auth()->user()->name }}</h4>
                            </div>
                        </div>
                        @if(Auth()->user()->desc)
                        <div class="text">
                            <p>{{ Auth()->user()->desc }}</p>
                        </div>
                        @else
                        <div class="text">
                            <p>Add description of Yourself</p>
                        </div>
                        @endif
                        <ul class="info clearfix mr-0">
                            @if(Auth()->user()->city)
                            <li><i class="icon-22"></i><a>{{ Auth()->user()->city }}, {{ Auth()->user()->country }}</a></li>
                            @else
                            <li><i class="icon-22"></i><a>-</a></li>
                            @endif

                            <li><i class="fab fa fa-envelope"></i><a>{{ Auth()->user()->email }}</a></li>
                            <li><i class="fab fa fa-phone"></i><a>{{ Auth()->user()->phone }}</a></li>
                        </ul>
                        <div class="clearfix">
                            <div class="btn-box pull-right">
                                <a href="/profile-edit" class="theme-btn btn-one">Edit Profile</a>
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
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    @foreach ($jobs as $job)
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset('images/resource/deals-3.jpg') }}" alt="" /></figure>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="/job-detail">{{ $job->title }}</a></h4>
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
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="/jobs/{{ $job->slug }}" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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