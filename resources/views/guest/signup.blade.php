@extends('guest.main')

@section('container')
<!-- register-member-section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                <div class="sec-title">
                    <h5>Hey, Hello!</h5>
                    <h2>Sign Up with HandyHelp</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Member</li>
                            <li class="tab-btn" data-tab="#tab-2">Contractor</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="text" name="name" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" name="phone" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="name" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="name" required="" />
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="theme-btn btn-one"><a href="/profile-member" class="text-white">Sign up</a></button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Already have an account? <a href="/login">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" name="nomor" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Identity Number (NIK or Passport number)</label>
                                        <input type="number" name="identity" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="name" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="name" required="" />
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="theme-btn btn-one">
                                            <a href="/profile-contractor" class="text-white">Sign up</a>
                                        </button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Already have an account? <a href="/login">Log in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- register-member-section end -->
@endsection