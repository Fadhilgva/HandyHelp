@extends('guest.main')

@section('container')
<!-- edit-member-details -->
<section class="agent-details">
    <div class="auto-container">
        @if (session()->has('updateprofile'))
        <div class="alert alert-success alert-dismissible fade show text-center mx-auto col-4" role="alert">
            <small>{{ session('updateprofile') }}</small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="agency-details-content">
            <div class="agents-block-one">
                <div class="inner-box mr-0 newone">
                    <figure class="image-box"><img src="{{ asset('images/resource/agency-details-1.jpg') }}" alt="" /></figure>
                    {{-- <input class="form-control-sm file" id="image" name="image" type="file"> --}}
                    <div class="content-box">
                        <form method="POST" action="/profile-edit" class="default-form">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" id="name" name="name" required placeholder="Enter your full name" value="{{ old('name', Auth()->user()->name) }}" class="form-control-sm 
                                @error('name')
                                is-invalid
                                @enderror" />
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" required placeholder="Enter your email address" value="{{ old('email', Auth()->user()->email) }}" class="form-control-sm 
                                @error('email')
                                is-invalid
                                @enderror" />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" id="phone" name="phone" required placeholder="Enter your phone number" value="{{ old('phone', Auth()->user()->phone) }}" class="form-control-sm 
                                @error('phone')
                                is-invalid
                                @enderror" />
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class=" form-group">
                                <label>Description</label>
                                <textarea type="text" placeholder="Tell us about yourself" id="desc" name="desc" class="form-control-sm 
                                @error('desc')
                                is-invalid
                                @enderror">{{ old('desc', Auth()->user()->desc) }}</textarea>
                                @error('desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group" style="margin-bottom: 70px">
                                <label>City</label>
                                <div class="select-box">
                                    <select class="wide" name="city" id="city">
                                        @if(Auth()->user()->city)
                                        <option data-display="{{ old('city', Auth()->user()->city) }}">{{ old('city', Auth()->user()->city) }}</option>
                                        @else
                                        <option data-display=""></option>
                                        @endif
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 70px">
                                <label>Country</label>
                                <div class="select-box">
                                    <select class="wide" name="country" id="country">
                                        @if(Auth()->user()->country)
                                        <option data-display="{{ old('country', Auth()->user()->country) }}">{{ old('country', Auth()->user()->country) }}</option>
                                        @else
                                        <option data-display=""></option>
                                        @endif
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="btn-box pull-right">
                                    <button type="submit" class="theme-btn btn-one">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- edit-member-details end -->
@endsection