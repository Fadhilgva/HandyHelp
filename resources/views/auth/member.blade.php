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
                    <div class="row clearfix">
                        <div class="col-lg-3">
                            @if ($user->profile)
                            <img src="/img/profile/{{ $user->profile }}" width="300" height="300" class="rounded" />
                            @else
                            <img src="{{ asset('images/resource/agency-details-1.jpg') }}" width="300" height="300" class="rounded" />
                            @endif
                        </div>
                        <div class=" col-lg-9">
                            <div class="content-box">
                                <div class="clearfix mb-3">
                                    <div class="title-inner pull-left">
                                        <h4>{{ $user->name }}</h4>
                                    </div>
                                </div>
                                @if($user->desc)
                                <div class="text">
                                    <p>{{ $user->desc }}</p>
                                </div>
                                @else
                                <div class="text">
                                    <p>Description</p>
                                </div>
                                @endif
                                <ul class="info clearfix mr-0">
                                    @if($user->skill)
                                    <li><i class="icon-41"></i><a>{{ $user->skill }}</a></li>
                                    @else
                                    <li><i class="icon-41"></i><a>-</a></li>
                                    @endif

                                    @if($user->city && $user->country)
                                    <li><i class="icon-22"></i><a>{{ $user->city }}, {{ $user->country }}</a></li>

                                    @elseif($user->city)
                                    <li><i class="icon-22"></i><a>{{ $user->city }}</a></li>

                                    @elseif($user->country)
                                    <li><i class="icon-22"></i><a>{{ $user->country }}</a></li>

                                    @else
                                    <li><i class="icon-22"></i><a>-</a></li>

                                    @endif
                                    <li><i class="fa-solid fa-envelope"></i><a>********</a></li>
                                    <li><i class="fa-solid fa-phone"></i><a>********</a></li>
                                </ul>
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
@if ($user->role=='member')
<section class="agents-page-section agent-details-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side tabs-box">
                    <div class="group-title">
                        <h3>Jobs List</h3>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    @foreach ($jobs as $job)
                                    <div class="deals-block-one my-5">
                                        <div class="inner-box">
                                            @if ($job->image1)
                                            <div class="image-box">
                                                <a href="/jobs/{{ $job->slug }}">
                                                    <figure class="image">
                                                        <img src="/img/jobs/{{ $job->image1 }}" alt="{{ $job->title }}" />
                                                    </figure>
                                                </a>
                                            </div>
                                            @else
                                            <div class="image-box">
                                                <a href="/jobs/{{ $job->slug }}">
                                                    <figure class="image">
                                                        <img src="{{ asset('images/feature/feature-4.jpg') }}" />
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
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-22"></i>{{ $job->city->name }}</li>
                                                    <li><i class="icon-16"></i>{{ $job->category->name }}</li>
                                                </ul>
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

@elseif($user->role=='contractor')
<!-- My-galery-contractor-section -->
<section class="agents-page-section agent-details-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side tabs-box">
                    <div class="group-title">
                        <h3>Reviews</h3>
                    </div>
                    <div class="blog-details-content">
                        <div class="comments-area">
                            <div class="group-title">
                                <h6>({{ $count }} Review)</h6>
                            </div>
                            <div class="comment-box">
                                @foreach ($reviews as $review)
                                <div class="comment">
                                    <a href="">
                                        <figure class="thumb-box">
                                            <img src="{{ asset('images/news/comment-1.jpg') }}" alt="">
                                        </figure>
                                    </a>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">
                                            <a href="">
                                                <h5>{{ $review->name }}</h5>
                                            </a>
                                            <span>{{ $review->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="rating1">
                                            <div class="emoji-wrapper1">
                                                <div class="emoji1">
                                                    @if ($review->rating == 1)
                                                    <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                                        <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347" />
                                                        <path
                                                            d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z"
                                                            fill="#f4c534" />
                                                        <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff" />
                                                        <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347" />
                                                        <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff" />
                                                        <path
                                                            d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z"
                                                            fill="#f4c534" />
                                                        <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff" />
                                                        <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347" />
                                                        <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff" />
                                                    </svg>
                                                    @elseif($review->rating == 2)
                                                    <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                                        <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347" />
                                                        <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff" />
                                                        <circle cx="340" cy="260.4" r="36.2" fill="#3e4347" />
                                                        <g fill="#fff">
                                                            <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10" />
                                                            <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z" />
                                                        </g>
                                                        <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347" />
                                                        <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff" />
                                                    </svg>
                                                    @elseif($review->rating == 3)
                                                    <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                                        <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347" />
                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                                        <g fill="#fff">
                                                            <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z" />
                                                            <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81" />
                                                        </g>
                                                        <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                                                        <g fill="#fff">
                                                            <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1" />
                                                            <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81" />
                                                        </g>
                                                        <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                                                        <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff" />
                                                    </svg>
                                                    @elseif($review->rating == 4)
                                                    <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                                        <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                                        <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                                                        <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f" />
                                                        <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                                                        <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                                                        <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f" />
                                                        <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                                                        <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347" />
                                                        <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b" />
                                                    </svg>
                                                    @elseif($review->rating == 5)
                                                    <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <g fill="#ffd93b">
                                                            <circle cx="256" cy="256" r="256" />
                                                            <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z" />
                                                        </g>
                                                        <path
                                                            d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z"
                                                            fill="#e9eff4" />
                                                        <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea" />
                                                        <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88" />
                                                        <g fill="#38c0dc">
                                                            <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z" />
                                                        </g>
                                                        <g fill="#d23f77">
                                                            <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z" />
                                                        </g>
                                                        <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347" />
                                                        <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b" />
                                                        <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2" />
                                                    </svg>
                                                    @endif
                                                </div>
                                            </div>
                                            <ul class="hor-list">
                                                @if ($review->rating == 1)
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                @elseif($review->rating == 2)
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                @elseif($review->rating == 3)
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                @elseif($review->rating == 4)
                                                <li>
                                                    <i class="fa-regular fa-star" style="color: #efa134;"></i>
                                                </li>
                                                @elseif($review->rating == 5)
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star" style="color: #efa134;"></i>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>{{ $review->review }}</p>
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
</section>
<!-- My-galery-contractor-section end -->
@endif
@endsection