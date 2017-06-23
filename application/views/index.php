<?php $this->load->view('include/header') ?>
<?php $this->load->view('include/navigation') ?>

<section id="banner">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner-container">
			<!-- <img src="<?php echo base_url() ?>client-assets/images/demo/world-back.jpg" class="img-responsive"> -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="slider-content">
              <div class="box-head-title rect-box slideInRight animated">
                <span>AWelcome to</span>
              </div>
              <div class="center-text slideInRight animated">
                <span>Dexter Tours and Travels</span>
              </div>
              <div class="box-foot-title rect-box slideInRight animated">
                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slider-content">
              <div class="box-head-title rect-box slideInRight animated">
                <span>BWelcome to</span>
              </div>
              <div class="center-text slideInRight animated">
                <span>Dexter Tours and Travels</span>
              </div>
              <div class="box-foot-title rect-box slideInRight animated">
                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slider-content">
              <div class="box-head-title rect-box slideInRight animated">
                <span>CWelcome to</span>
              </div>
              <div class="center-text slideInRight animated">
                <span>Dexter Tours and Travels</span>
              </div>
              <div class="box-foot-title rect-box slideInRight animated">
                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slider-content">
              <div class="box-head-title rect-box slideInRight animated">
                <span>DWelcome to</span>
              </div>
              <div class="center-text slideInRight animated">
                <span>Dexter Tours and Travels</span>
              </div>
              <div class="box-foot-title rect-box slideInRight animated">
                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="slider-content">
              <div class="box-head-title rect-box slideInRight animated">
                <span>EWelcome to</span>
              </div>
              <div class="center-text slideInRight animated">
                <span>Dexter Tours and Travels</span>
              </div>
              <div class="box-foot-title rect-box slideInRight animated">
                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit </span>
              </div>
            </div>
          </div>
        </div>
        <div class="small-booking">
          <ul class="nav nav-pills">
              <li class="active">
                <a  href="#1a" data-toggle="tab"><i class="icon ion-android-globe"></i> Book Trip</a>
              </li>
              <li><a href="#2a" data-toggle="tab"><i class="icon ion-android-restaurant"></i> Book Hotel</a>
              </li>
              <li><a href="#3a" data-toggle="tab"><i class="icon ion-plane"></i> Book Flight </a>
              </li>
            </ul>

              <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                  <form>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="form-control" id="sel1">
                          <option><i class="icon ion-ios-navigate-outline"></i> Destination</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="form-control" id="sel1">
                          <option><i class="icon ion-ios-people"></i> Person</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="form-control" id="sel1">
                          <option><i class="icon ion-android-stopwatch"></i> Duration</option>
                          <option>1 - 5 Days</option>
                          <option>6 - 10 Days</option>
                          <option>11 - 15 Days</option>
                          <option>16 - 20 Days</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <input class="form-control" type="text" name="search-keyword" placeholder="Keyword">
                      </div>
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 btn-search">
                        <input class="form-control" type="submit" name="search" value="Submit">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="2a">
                  <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                </div>
                <div class="tab-pane" id="3a">
                  <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                </div>
              </div>
        </div>
      </div>
		</div>
	</div>
</section>
<section id="small-about" >
  <div class="container-fluid margin-top-20">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-ld-12 main-title">
        <h1>Why We Are The <strong>Best</strong></h1>
      </div>
      <div class="main-sub-desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
    </div>
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-ms-12 col-md-12 col-lg-12 main-content small-about-contain margin-top-20">
      <!-- Small Box -->
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 small-box small-about-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 about-icon">
            <i class="fa fa-usd" aria-hidden="true"></i>
          </div>
          <div class="about-title">
            <h3>Best Price</h3>
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. laboris nisi ut aliquip ex</p>
          </div>
          <a href="#">Read More <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 small-box small-about-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 about-icon">
            <i class="fa fa-flag-o" aria-hidden="true"></i>
          </div>
          <div class="about-title">
            <h3>Trip Booking</h3>
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. laboris nisi ut aliquip ex</p>
          </div>
          <a href="#">Read More <i class="icon ion-chevron-right"></i> </a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 small-box small-about-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 about-icon">
            <i class="fa fa-plane" aria-hidden="true"></i>
          </div>
          <div class="about-title">
            <h3>Ticket Booking</h3>
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. laboris nisi ut aliquip ex</p>
          </div>
          <a href="#">Read More <i class="icon ion-chevron-right"></i> </a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 small-box small-about-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 about-icon">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
          </div>
          <div class="about-title">
            <h3>Helicoptor Charter</h3>
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. laboris nisi ut aliquip ex</p>
          </div>
          <a href="#">Read More <i class="icon ion-chevron-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="notification">
  <div class="container-fluid margin-top-20">
    <div class="notify-layer">
      <div class="notify">
          <h1>Visit the amazing places inside and outside Nepal</h1>
          <h3>We are the one</h3>
          <a href="#">Contact Us</a>
        </div>
    </div>
  </div>
</section>
<section id="best-tour" class="small-best-tour">
  <div class="container-fluid margin-top-20">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm012 col-md-12 col-lg-12 main-title">
        <h1>Featured / Best <strong>Tours</strong></h1>
      </div>
      <div class="main-sub-desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
    </div>
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-ms-12 col-md-12 col-lg-12 main-content small-best-tour-contain margin-top-20">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
              <ol class="carousel-indicators">
                <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#theCarousel" data-slide-to="1"></li>
                <li data-target="#theCarousel" data-slide-to="2"></li>
                <li data-target="#theCarousel" data-slide-to="3"></li>
                <li data-target="#theCarousel" data-slide-to="4"></li>
                <li data-target="#theCarousel" data-slide-to="5"></li>
                <li data-target="#theCarousel" data-slide-to="6"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/ebc.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Everest Base Camp Trek</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">15</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">Medium</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/sauraha.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Sauraha Trip</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">3</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">Low</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/abc.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Annapurna Base Camp Trek</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">10</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">High</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/ktm.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Kathmandu Valley Trip</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">1</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">Low</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/gosaikunda.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Gosaikunda Trek</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">4</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">High</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/mustang.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Mustang Trip</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">7</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">Medium</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- add  more items here -->
                <!-- Example item start:  -->
                
                <div class="item">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
                    <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
                      <img src="<?php echo base_url() ?>client-assets/images/poonhill.png" class="img-responsive">
                      <label class="price">Rs 40000</label>
                      <label class="title">Poonhill Trek</label>
                    </div>
                    <div class="about-title margin-top-20">
                      <!-- <h3>Helicopter Charter</h3> -->
                    </div>
                    <div class="about-content">
                      <ul class="trip-desc">
                        <li>
                          <h3 class="desc-title">Days</h3>
                          <h4 class="trip-desc">7</h4>
                        </li>
                        <li>
                          <h3 class="desc-title">Difficulty</h3>
                          <h4 class="trip-desc">High</h4>
                        </li>
                         <li>
                          <h3 class="desc-title">Book</h3>
                          <h4 class="trip-desc"><a href="#" class="">Contact</a></h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <!--  Example item end -->
              </div>
              <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="icon ion-ios-arrow-left"></i></a>
              <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="icon ion-ios-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="small-service" >
  <div class="container-fluid margin-top-20">
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-ld-12 main-title">
        <h1>What Are We <strong>Serving</strong></h1>
      </div>
      <div class="main-sub-desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
    </div>
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-ms-12 col-md-12 col-lg-12 main-content small-service-contain margin-top-20">
      <!-- Small Box -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
            <img src="<?php echo base_url() ?>client-assets/images/heli.png" class="img-responsive">
            <label class="price">Rs 600.00/hr</label>
            <label class="title">Helicoptor Charter</label>
          </div>
          <div class="about-title margin-top-20">
            <!-- <h3>Helicopter Charter</h3> -->
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <a href="#">See All <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        <!-- Small Box -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
            <img src="<?php echo base_url() ?>client-assets/images/hotel.png" class="img-responsive">
            <label class="price">Rs 600.00/hr</label>
            <label class="title">Hotel Booking</label>
          </div>
          <div class="about-title margin-top-20">
            <!-- <h3>Helicopter Charter</h3> -->
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <a href="#">See All <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        <!-- Small Box -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
            <img src="<?php echo base_url() ?>client-assets/images/plane.png" class="img-responsive">
            <label class="price">Rs 600.00/hr</label>
            <label class="title">Tickets Booking</label>
          </div>
          <div class="about-title margin-top-20">
            <!-- <h3>Helicopter Charter</h3> -->
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <a href="#">See All <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        <!-- Small Box -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
            <img src="<?php echo base_url() ?>client-assets/images/hike.png" class="img-responsive">
            <label class="price">Rs 600.00/hr</label>
            <label class="title">Hiking and Trekking</label>
          </div>
          <div class="about-title margin-top-20">
            <!-- <h3>Helicopter Charter</h3> -->
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <a href="#">See All <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        <!-- Small Box -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
            <img src="<?php echo base_url() ?>client-assets/images/trip.png" class="img-responsive">
            <label class="price">Rs 600.00/hr</label>
            <label class="title">Trips</label>
          </div>
          <div class="about-title margin-top-20">
            <!-- <h3>Helicopter Charter</h3> -->
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <a href="#">See All <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        <!-- Small Box -->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 small-box small-service-box">
          <div class="col-xs-12 col-sl-12 col-ld-12 col-lg-12 service-image">
            <img src="<?php echo base_url() ?>client-assets/images/parcel.png" class="img-responsive">
            <label class="price">Rs 600.00/hr</label>
            <label class="title">Parcels and Courier</label>
          </div>
          <div class="about-title margin-top-20">
            <!-- <h3>Helicopter Charter</h3> -->
          </div>
          <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <a href="#">See All <i class="icon ion-chevron-right"></i> </a>
        </div>
        <!-- Small Box -->
        
      </div>
    </div>
  </div>
</section>
<section id="testimonial" >
  <div class="container-fluid margin-top-20">
    <div class="row-fluid title-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-ld-12 main-title white-title">
        <h1>Statement from Happy <strong>Customers</strong></h1>
      </div>
      <div class="main-sub-desc white-sub-desc">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
    </div>
    <div class="row-fluid">
      <div class="col-xs-12 col-sm-12 col-ms-12 col-md-12 col-lg-12 main-content testi-contain margin-top-20px">
      <div id="carousel-example-generic-testi" class="carousel slide testi-slider" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic-testi" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic-testi" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic-testi" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic-testi" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic-testi" data-slide-to="4"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="slider-content">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 cus-image slideInLeft animated">
                  <img src="<?php echo base_url() ?>client-assets/images/demo/test1.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 cus-detail slideInRight animated">
                  <div class="cus-name">Govinda Aryal</div>
                  <div class="cus-work">Web-Developer</div>
                  <div class="cus-social">
                    <li><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                  </div>
                  <div class="cus-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider-content">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 cus-image slideInLeft animated">
                  <img src="<?php echo base_url() ?>client-assets/images/demo/test1.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 cus-detail slideInRight animated">
                  <div class="cus-name">Gov Aryal</div>
                  <div class="cus-work">Android Developer</div>
                  <div class="cus-social">
                    <li><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                  </div>
                  <div class="cus-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider-content">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 cus-image slideInLeft animated">
                  <img src="<?php echo base_url() ?>client-assets/images/demo/test1.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 cus-detail slideInRight animated">
                  <div class="cus-name">Govind Aryal</div>
                  <div class="cus-work">PHP Developer</div>
                  <div class="cus-social">
                    <li><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                  </div>
                  <div class="cus-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="slider-content">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 cus-image fadeInLeft animated">
                  <img src="<?php echo base_url() ?>client-assets/images/demo/test1.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 cus-detail fadeInRight animated">
                  <div class="cus-name">Govi Aryal</div>
                  <div class="cus-work">Android Developer</div>
                  <div class="cus-social">
                    <li><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                  </div>
                  <div class="cus-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="slider-content">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 cus-image fadeInLeft animated">
                  <img src="<?php echo base_url() ?>client-assets/images/demo/test1.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 cus-detail fadeInRight animated">
                  <div class="cus-name">Govinda Aryal</div>
                  <div class="cus-work">Android Developer</div>
                  <div class="cus-social">
                    <li><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                  </div>
                  <div class="cus-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="slideshow">
    <div class="slideshow-image" style="background-image: url('client-assets/images/demo/plane-big.jpeg')"></div>
    <div class="slideshow-image" style="background-image: url('client-assets/images/demo/heli-big.jpeg')"></div>
    <div class="slideshow-image" style="background-image: url('client-assets/images/demo/hotel-big.jpeg')"></div>
    <div class="slideshow-image" style="background-image: url('client-assets/images/demo/slider.jpg')"></div>
</div>
</section>
<section id="associate" >
  <div class="container margin-top-20">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 associate-container">
      <div class="table">
        <ul class="associate-ul">
          <li>
            <img src="<?php base_url()?>client-assets/images/gov.png" class="img-responsive">
          </li>
          <li>
            <img src="<?php base_url()?>client-assets/images/ntb.png" class="img-responsive">
          </li>
          <li>
            <img src="<?php base_url()?>client-assets/images/ta.png" class="img-responsive">
          </li>
          <li>
            <img src="<?php base_url()?>client-assets/images/taan.png" class="img-responsive">
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('include/footer') ?>


<script type="text/javascript">
  $(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
</script>




<style type="text/css">
  .slideshow {
  position: absolute;
  width: 100%;
  height: 70vh;
  overflow: hidden;
}

.slideshow-image {
  position: absolute;
  width: 100%;
  height: 100%;
  background: no-repeat 50% 50%;
  background-size: cover;
  -webkit-animation-name: kenburns;
          animation-name: kenburns;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-duration: 16s;
          animation-duration: 16s;
  opacity: 1;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.slideshow-image:nth-child(1) {
  -webkit-animation-name: kenburns-1;
          animation-name: kenburns-1;
  z-index: 3;
}
.slideshow-image:nth-child(2) {
  -webkit-animation-name: kenburns-2;
          animation-name: kenburns-2;
  z-index: 2;
}
.slideshow-image:nth-child(3) {
  -webkit-animation-name: kenburns-3;
          animation-name: kenburns-3;
  z-index: 1;
}
.slideshow-image:nth-child(4) {
  -webkit-animation-name: kenburns-4;
          animation-name: kenburns-4;
  z-index: 0;
}

@-webkit-keyframes kenburns-1 {
  0% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  1.5625% {
    opacity: 1;
  }
  23.4375% {
    opacity: 1;
  }
  26.5625% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  98.4375% {
    opacity: 0;
    -webkit-transform: scale(1.21176);
            transform: scale(1.21176);
  }
  100% {
    opacity: 1;
  }
}

@keyframes kenburns-1 {
  0% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  1.5625% {
    opacity: 1;
  }
  23.4375% {
    opacity: 1;
  }
  26.5625% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  98.4375% {
    opacity: 0;
    -webkit-transform: scale(1.21176);
            transform: scale(1.21176);
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes kenburns-2 {
  23.4375% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  26.5625% {
    opacity: 1;
  }
  48.4375% {
    opacity: 1;
  }
  51.5625% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@keyframes kenburns-2 {
  23.4375% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  26.5625% {
    opacity: 1;
  }
  48.4375% {
    opacity: 1;
  }
  51.5625% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@-webkit-keyframes kenburns-3 {
  48.4375% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  51.5625% {
    opacity: 1;
  }
  73.4375% {
    opacity: 1;
  }
  76.5625% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@keyframes kenburns-3 {
  48.4375% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  51.5625% {
    opacity: 1;
  }
  73.4375% {
    opacity: 1;
  }
  76.5625% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@-webkit-keyframes kenburns-4 {
  73.4375% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  76.5625% {
    opacity: 1;
  }
  98.4375% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes kenburns-4 {
  73.4375% {
    opacity: 1;
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  76.5625% {
    opacity: 1;
  }
  98.4375% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
</style>