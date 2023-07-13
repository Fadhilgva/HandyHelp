@extends('guest.main')

@section('container')

<!--submission-list-section -->
<section class="agents-page-section agent-details-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side tabs-box">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center m-4" role="alert">
                        <small>{{ session('success') }}</small>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="group-title">
                        <h3>My Submissions</h3>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    @foreach ($subs as $sub)
                                    <div class="deals-block-one my-5">
                                        <div class="inner-box">
                                            @if ($sub->Job->image1)
                                            <div class="image-box">
                                                <a href="/jobs/{{ $sub->Job->slug }}">
                                                    <figure class="image">
                                                        <img src="/img/jobs/{{ $sub->Job->image1 }}" />
                                                    </figure>
                                                </a>
                                            </div>
                                            @else
                                            <div class="image-box">
                                                <a href="/jobs/{{ $sub->Job->slug }}">
                                                    <figure class="image">
                                                        <img src="{{ asset('images/feature/feature-4.jpg') }}" />
                                                    </figure>
                                                </a>
                                            </div>
                                            @endif
                                            <div class="lower-content my-2">
                                                <div class="title-text">
                                                    <h4 class="mb-n1">
                                                        <a href="">{{ $sub->Job->title }}</a>
                                                    </h4>
                                                </div>
                                                <div class="small mb-2">{{ $sub->created_at->diffForHumans() }}</div>
                                                <div class="text-dark">
                                                    <i class="fa-solid fa-money-bill"></i>
                                                    Rp{{ number_format($sub->rate_offer, 0,",",".") }}
                                                </div>
                                                <div class="price-box clearfix">
                                                    @if ($sub->status == 'review')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="/jobs/{{ $sub->Job->slug }}" class="theme-btn btn-one">View Job</a>
                                                    </div>
                                                    <div class="badge bdg1 my-3 mx-5 pull-right">On Review
                                                    </div>
                                                    @elseif($sub->status == 'accept')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="https://wa.me/{{ $sub->Job->User->phone }}" class="theme-btn btn-two">Chat with Contractor</a>
                                                    </div>
                                                    <form action="/dojob/{{ $sub->id }}" method="POST">
                                                        @csrf
                                                        <div class="btn-box pull-right mt-3 mx-5">
                                                            <button type="submit" class="theme-btn btn-one">Do this Job</button>
                                                        </div>
                                                    </form>
                                                    @elseif($sub->status == 'doing')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="https://wa.me/{{ $sub->Job->User->phone }}" class="theme-btn btn-two">Chat with Contractor</a>
                                                    </div>
                                                    <form action="/done_/{{ $sub->id }}" method="POST">
                                                        @csrf
                                                        <div class="btn-box pull-right mt-3 mx-5">
                                                            <button type="submit" class="theme-btn btn-one">Finish this Job</button>
                                                        </div>
                                                    </form>
                                                    @elseif($sub->status == 'done_')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="https://wa.me/{{ $sub->Job->User->phone }}" class="theme-btn btn-two">Chat with Contractor</a>
                                                    </div>
                                                    <div class="badge bdg1 my-3 mx-5 pull-right">Waiting for Confirmation
                                                    </div>
                                                    @elseif($sub->status == 'reject')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="/jobs/{{ $sub->Job->slug }}" class="theme-btn btn-two">View Job</a>
                                                    </div>
                                                    <div class="badge bdg3 my-3 mx-5 pull-right">Rejected
                                                    </div>
                                                    @elseif($sub->status == 'done')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="/jobs/{{ $sub->Job->slug }}" class="theme-btn btn-two">View Job</a>
                                                    </div>
                                                    <div class="badge bdg2 mt-4 mx-5 pull-right">Done
                                                    </div>
                                                    @elseif($sub->status == 'reviewed')
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="/jobs/{{ $sub->Job->slug }}" class="theme-btn btn-two">View Job</a>
                                                    </div>
                                                    <div class="badge bdg4 mt-4 mx-5 pull-right">Reviewed
                                                    </div>
                                                    @endif
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
<!--submission-list-section end -->
@endsection