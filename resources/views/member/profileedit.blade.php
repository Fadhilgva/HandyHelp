@extends('auth.main')

@section('container')
<!-- edit-member-details -->
<section class="agent-details">
    <div class="auto-container">
        <div class="agency-details-content">
            <div class="agents-block-one">
                <div class="inner-box mr-0">
                    <figure class="image-box"><img src="assets/images/resource/agency-details-1.jpg" alt="" /></figure>
                    <div class="content-box">
                        <form action="" method="post" class="default-form">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="title" required="" placeholder="Enter your full name" value="John Doe" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Tell us about yourself" placeholder="Enter your address"></textarea>
                            </div>
                            <div class="form-group" style="margin-bottom: 70px">
                                <label>City</label>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Enter your City">Enter your City</option>
                                        <option value="2">Jakarta</option>
                                        <option value="2">Bandung</option>
                                        <option value="3">Depok</option>
                                        <option value="4">Tangerang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 70px">
                                <label>Country</label>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Enter your Country">Enter your Country</option>
                                        <option value="2">Indonesia</option>
                                        <option value="2">Malaysia</option>
                                        <option value="3">Germany</option>
                                        <option value="4">Spain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" required="" placeholder="Enter your email address" value="Johndoe@gmail.com" />
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone" required="" placeholder="Enter your phone number" value="030 3057 1965" />
                            </div>
                        </form>
                        <div class="clearfix">
                            <div class="btn-box pull-right">
                                <a href="/profile-member" class="theme-btn btn-one">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- edit-member-details end -->
@endsection