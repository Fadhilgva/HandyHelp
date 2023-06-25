@extends('guest.main')

@section('container')
<!-- login-section -->
<section class="ragister-section centred sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                <div class="sec-title">
                    <h5>Glad to see You Back!</h5>
                    <h2>Sign In with HandyHelp</h2>
                </div>

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show text-center m-4" role="alert">
                    <small>Your Account has been created successfully! Please Log In</small>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="tabs-box">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" required="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="name" required="" />
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Log in</button>
                                    </div>
                                </form>
                                <div class="othre-text">
                                    <p>Have not any account? <a href="/signup_member">Register Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login-section end -->
@endsection