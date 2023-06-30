@extends('guest.main')

@section('container')
<!-- posting-page-section -->
<section class="posting-page-section sec-pad">
    <div class="auto-container">
        <form method="POST" action="/posting-job" class="default-form" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
                <div class="sec-title">
                    <h5>Posting</h5>
                    <h2>Build Career<br />With HandyHelp</h2>
                    <br />
                    <p>Find a Trusted Contractor Here!</p>
                    <p>HandyHelp is designed to assist you in solving infrastructure, building and construction problems.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 left-side">
                    <li class="accordion block active-block">
                        <div class="inner-box">
                            <div class="tab" id="tab-1">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" id="title" name="title" required placeholder="Title of your Job" value="{{ old('title') }}" class="form-control @error('title')
                                    is-invalid
                                    @enderror" />
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" id="slug" name="slug" required placeholder="Slug of your Job" value="{{ old('slug') }}" class="form-control @error('slug')
                                    is-invalid
                                    @enderror" />
                                    @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" id="phone" name="phone" required placeholder="Enter your phone number" value="{{ old('phone', Auth()->user()->phone) }}" class="form-control 
                                    @error('phone')
                                    is-invalid
                                    @enderror" />
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Rates Range (IDR)</label>
                                    <input type="number" id="rate" name="rate" required placeholder="Enter rates range for your job" value="{{ old('rate') }}" class="form-control 
                                    @error('rate')
                                    is-invalid
                                    @enderror" />
                                    @error('rate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class=" form-group" style="margin-bottom: 70px">
                                    <label>Job Category</label>
                                    <div class="select-box">
                                        <select class="wide" name="category_id" id="category_id" required>
                                            {{-- <option data-display=""></option> --}}
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>Location</label>
                                    <div class="select-box">
                                        <select class="wide" name="location_id" id="location_id" required>
                                            {{-- <option data-display=""></option> --}}
                                            @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="othre-text">
                            <div class="btn-box">
                                <button type="submit" class="theme-btn btn-one mt-3">Postings</button>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-side">
                    <li class="accordion block active-block">
                        <div class="inner-box">
                            <div class="tab" id="tab-2">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <input type="file" id="image_1" name="image_1" placeholder="Enter image for your job" value="{{ old('image') }}" class="form-control @error('image')
                                    is-invalid
                                    @enderror" required>
                                    @error('image')
                                    <div class=" invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input type="file" id="image_2" name="image_2" placeholder="Enter image for your job" value="{{ old('image_2') }}" class="form-control @error('image_2')
                                    is-invalid
                                    @enderror">
                                    @error('image_2')
                                    <div class=" invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input type="file" id="image_3" name="image_3" placeholder="Enter image for your job" value="{{ old('image_3') }}" class="form-control @error('image_3')
                                    is-invalid
                                    @enderror">
                                    @error('image_3')
                                    <div class=" invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="margin-bottom: 20px">
                                    <label>Job Details</label>
                                    <textarea type="text" placeholder="Tell us the details of your task" id="detail" name="detail" required class="form-control 
                                        @error('detail')
                                        is-invalid
                                        @enderror">{{ old('detail') }}</textarea>
                                    @error('detail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>How big is your task?</label>
                                    <div class="select-box">
                                        <select class="wide" name="option_one" id="option_one">
                                            {{-- <option data-display=""></option> --}}
                                            <option value="Small, Est. 1 hr">Small, Est. 1 hr</option>
                                            <option value="Medium, Est. 2-3 hrs">Medium, Est. 2-3 hrs</option>
                                            <option value="Large, Est. 4+ hrs">Large, Est. 4+ hrs</option>
                                            <option value="I'm not sure i know">I'm not sure i know</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>How many people are needed?</label>
                                    <div class="select-box">
                                        <select class="wide" name="option_two" id="option_two">
                                            {{-- <option data-display=""></option> --}}
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="I'm not sure i know">I'm not sure i know</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- career-page-section end -->
@endsection