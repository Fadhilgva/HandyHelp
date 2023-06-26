@extends('auth.main')

@section('container')
<!-- profile-contractor -->
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
          <figure class="image-box"><img src="{{ asset('images/resource/agency-details-1.jpg') }}" alt="" /></figure>
          <div class="content-box">
            <div class="clearfix">
              <div class="title-inner pull-left">
                <h4>{{ Auth()->user()->name }}</h4>
              </div>
            </div>
            @if(Auth()->user()->desc)
            <div class="text">
              <p>{{ Auth()->user()->desc }}</p>
            </div>
            @else
            <div class="text">
              <p>Add description of Yourself</p>
            </div>
            @endif
            <ul class="info clearfix mr-0">
              @if(Auth()->user()->skill)
              <li><i class="icon-41"></i><a>{{ Auth()->user()->skill }}</a></li>
              @else
              <li><i class="icon-41"></i><a>-</a></li>
              @endif

              @if(Auth()->user()->city)
              <li><i class="icon-22"></i><a>{{ Auth()->user()->city }}, {{ Auth()->user()->country }}</a></li>
              @else
              <li><i class="icon-22"></i><a>-</a></li>
              @endif

              <li><i class="fab fa fa-envelope"></i><a>{{ Auth()->user()->email }}</a></li>
              <li><i class="fab fa fa-phone"></i><a>{{ Auth()->user()->phone }}</a></li>
            </ul>
            <div class="clearfix">
              <div class="btn-box pull-right">
                <a href="/profile-edit" class="theme-btn btn-one">Edit Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- profile-contractor end -->

<!-- My-galery-contractor-section -->
<section class="agents-page-section agent-details-page">
  <div class="auto-container">
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 content-side">
        <div class="agents-content-side tabs-box">
          <div class="group-title">
            <h3>My Galery</h3>
          </div>
          <h5 class="centred">--- Coming Soon ---</h5>
          <!-- <div class="item-shorting clearfix">
                  <div class="right-column pull-right clearfix">
                    <div class="short-box clearfix">
                      <div class="select-box">
                        <select class="wide">
                          <option data-display="Sort by: Newest">Sort by: Newest</option>
                          <option value="1">New Arrival</option>
                          <option value="2">Top Rated</option>
                          <option value="3">Offer Place</option>
                          <option value="4">Most Place</option>
                        </select>
                      </div>
                    </div>
                    <div class="short-menu clearfix">
                      <button class="list-view on"><i class="icon-35"></i></button>
                      <button class="grid-view"><i class="icon-36"></i></button>
                    </div>
                  </div>
                </div>
                <div class="tabs-content">
                  <div class="tab active-tab" id="tab-1">
                    <div class="wrapper list">
                      <div class="deals-list-content list-item">
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-3.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Repairing Electrical</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$120.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                              <div class="other-info-box clearfix">
                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-4.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Repairing Broken Fences</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$20,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                              <div class="other-info-box clearfix">
                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-5.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Cleaning the Garden</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$35,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                              <div class="other-info-box clearfix">
                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-6.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Home in Merrick Way</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$45,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                              <div class="other-info-box clearfix">
                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-7.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Apartment in Glasgow</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$40,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                              <div class="other-info-box clearfix">
                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="deals-grid-content">
                        <div class="row clearfix">
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-1.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Family Home For Sale</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$30,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-2.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$45,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-3.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Luxury Villa With Pool</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$63,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-4.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$30,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-5.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">The Citizen Apartment</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$45,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-6.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Cottage Woods House</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$63,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab" id="tab-2">
                    <div class="wrapper list">
                      <div class="deals-list-content list-item">
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-3.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$30,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-4.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$20,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-5.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Luxury Villa With Pool</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$35,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-6.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Home in Merrick Way</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$45,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-7.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Apartment in Glasgow</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$40,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="deals-grid-content">
                        <div class="row clearfix">
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-1.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Family Home For Sale</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$30,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-2.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$45,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-3.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Luxury Villa With Pool</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$63,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-4.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$30,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-5.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Home in Merrick Way</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$45,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-6.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Apartment in Glasgow</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$63,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab" id="tab-3">
                    <div class="wrapper list">
                      <div class="deals-list-content list-item">
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-3.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$30,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-4.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Family Home For Sale</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$20,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-5.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">The Citizen Apartment</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$35,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-6.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Cottage Woods House</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$45,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="deals-block-one">
                          <div class="inner-box">
                            <div class="image-box">
                              <figure class="image"><img src="{{ asset('images/resource/deals-7.jpg') }}" alt="" /></figure>
                            </div>
                            <div class="lower-content">
                              <div class="title-text">
                                <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                              </div>
                              <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                  <h6>Start From</h6>
                                  <h4>$40,000.00</h4>
                                </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                              <ul class="more-details clearfix">
                                <li><i class="icon-22"></i>Malang</li>
                                <li><i class="icon-16"></i>Medium Task</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="deals-grid-content">
                        <div class="row clearfix">
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-1.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$30,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-2.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$45,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-3.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Luxury Villa With Pool</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$63,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-4.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Home in Merrick Way</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$30,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-5.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Apartment in Glasgow</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$45,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one">
                              <div class="inner-box">
                                <div class="image-box">
                                  <figure class="image"><img src="{{ asset('images/feature/feature-6.jpg') }}" alt="" /></figure>
                                </div>
                                <div class="lower-content">
                                  <div class="title-text">
                                    <h4><a href="property-details.html">Family Home For Sale</a></h4>
                                  </div>
                                  <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                      <h6>Start From</h6>
                                      <h4>$63,000.00</h4>
                                    </div>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                  <ul class="more-details clearfix">
                                    <li><i class="icon-22"></i>Malang</li>
                                    <li><i class="icon-16"></i>Medium Task</li>
                                  </ul>
                                  <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- My-galery-contractor-section end -->
@endsection