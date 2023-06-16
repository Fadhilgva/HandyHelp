@extends('auth.main')

@section('container')
<!-- posting-page-section -->
<section class="posting-page-section sec-pad">
    <div class="auto-container">
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
                            <form action="" method="post" class="default-form">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" name="title" required="" placeholder="Title of your Job" />
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>Job Category</label>
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Select Category of Your Job">Select Category of Your Job</option>
                                            <option value="1">Cleaning</option>
                                            <option value="2">Repair</option>
                                            <option value="3">Garden</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>Location</label>
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Location of Your Job">Location of Your Job</option>
                                            <option value="1">Jakarta</option>
                                            <option value="2">Bandung</option>
                                            <option value="3">Depok</option>
                                            <option value="4">Tangerang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Rate Range</label>
                                    <div class="range-input">
                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly="" /></div>
                                    </div>
                                    <div class="price-range-slider"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="othre-text">
                        <p>
                            <a href="/jobs" class="theme-btn btn-one mt-3">Posting</a>
                        </p>
                    </div>
                </li>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 right-side">
                <li class="accordion block active-block">
                    <div class="inner-box">
                        <div class="tab" id="tab-2">
                            <form action="" method="post" class="default-form">
                                <div class="form-group" style="margin-bottom: 35px">
                                    <label>Job Details</label>
                                    <textarea placeholder="Tell us the details of your task"></textarea>
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>Task Options 1</label>
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="How big is your task?">How big is your task?</option>
                                            <option value="1">Small, Est. 1 hr</option>
                                            <option value="2">Medium, Est. 2-3 hrs</option>
                                            <option value="3">Large, Est. 4+ hrs</option>
                                            <option value="4">i'm not sure i know</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 70px">
                                    <label>Task Options 2</label>
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="How many people are needed?">How many people are needed?</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">i'm not sure i know</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- career-page-section end -->
@endsection