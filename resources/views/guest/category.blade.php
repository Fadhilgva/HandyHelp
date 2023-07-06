@extends('guest.main')

@section('container')
<section class="category-section category-page mr-0 pt-20 pb-20">
    @if ($jobs->count() > 0)
    <div class="auto-container">
        <div class="sec-title centred">
            @foreach ($jobs->take(1) as $job)
            <h2>{{ $job->category->name }}</h2>
            @endforeach
            {{-- <h5>Find a job that suits you</h5> --}}
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="row clearfix">
            @foreach ($jobs as $job)
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-4">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        @if ($job->image1)
                        <div class="image-box">
                            <a href="/jobs/{{ $job->slug }}">
                                <figure class="image">
                                    <img src="/img/jobs/{{ $job->image1 }}" alt="{{ $job->title }}" width="370" height="250" />
                                </figure>
                            </a>
                        </div>
                        @else
                        <div class="image-box">
                            <a href="/jobs/{{ $job->slug }}">
                                <figure class="image">
                                    <img src="{{ asset('images/feature/feature-4.jpg') }}" width="370" height="250" />
                                </figure>
                            </a>
                        </div>
                        @endif
                        <div class="lower-content">
                            <div class="title-text">
                                <h4><a href="/jobs/{{ $job->slug }}">{{ $job->title }}</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>Rp{{ number_format($job->rate, 0,",",".") }}</h4>
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
        </div>
    </div>
    @else
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>No Job found</h2>
        </div>
    </div>
    @endif
</section>
@endsection