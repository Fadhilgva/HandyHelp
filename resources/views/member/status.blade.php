@extends('guest.main')

@section('container')

<!--submission-list-section -->
<section class="agents-page-section agent-details-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side tabs-box">
                    {{-- @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center m-4" role="alert">
                        <small>{{ session('success') }}</small>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif --}}
                    <div class="group-title">
                        <h3>Submission</h3>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="blog-details-content">
                                <div class="comments-area">
                                    <div class="comment-box">
                                        <div class="comment">
                                            <figure class="thumb-box">
                                                <img src="{{ asset('images/news/comment-1.jpg') }}" alt="">
                                            </figure>
                                            <div class="comment-inner">
                                                <div class="comment-info clearfix">
                                                    <h5>hbadhj</h5>
                                                    <span>ahbdahbd</span>
                                                </div>
                                                <div class="text-dark">
                                                    <i class="fa-solid fa-money-bill"></i>
                                                    Rp100.000
                                                </div>
                                                <div class="price-box clearfix my-3">
                                                    <div class="btn-box pull-left my-3">
                                                        <a href="" class="theme-btn btn-two">View Profile</a>
                                                    </div>
                                                    {{-- @if ($sub->status == 'accept')
                                                    <div class="btn-box pull-right mx-5">
                                                        <a href="/status{{ $sub }}" class="theme-btn btn-one">View Progress</a>
                                                    </div>
                                                    @elseif($sub->status != 'reject')
                                                    <form action="/decline/{{ $sub->id }}" method="POST">
                                                        @csrf
                                                        <div class="btn-box pull-right my-3 mx-3">
                                                            <button type="submit" class="theme-btn btn-two">Decline</button>
                                                        </div>
                                                    </form>
                                                    <form action="/accept/{{ $sub->id }}" method="POST">
                                                        @csrf
                                                        <div class="btn-box pull-right my-3">
                                                            <button type="submit" class="theme-btn btn-one btn-outline-dark">Accept</button>
                                                        </div>
                                                    </form>
                                                    @else
                                                    <div class="badge bdg3 my-3 mx-5 pull-right">Rejected
                                                    </div>
                                                    @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
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
<!--submission-list-section end -->
@endsection