<?php $this->load->view('include/header') ?>

<?php $this->load->view('include/navigation') ?>

<section id="banner" class="in-nepal-banner">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 banner-container">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="main-page-title">
            <h1>Inside Nepal</h1>
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
<section id="main-about">
  <div class="container-fluid margin-top-20">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 main-about-logo">
      <img src="<?php echo base_url() ?>client-assets/images/mon.png" class="img-responsive">
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 main-about-intro">
      <div class="col-xs-12 col-sm-12 col-md-12 col-ld-12 main-title">
        <h1><strong>Glory of Nepal</strong></h1>
      </div>
      <div class="main-about-content">
        <p class="tagline">
          “I like the way Nepalis point by pouting their lips; they reckon pointing with a finger is rude.” ― Jane Wilson-Howarth
        </p>
        <p>
          Nepal is the land of Himalayas with world famous trekking trails and thousands of trekkers from around the world every year. A land-locked country bordering with Tibet in the north and India in east, south and west. Since 1970s Nepal has become the ultinate destinations for the adventure seekers and culture/heritage lovers. Nepal is famous as the birth place of Buddha and also the land of Mt Everest.
        </p>
        <p>
          Tourism is the largest industry in Nepal and its largest source of foreign exchange and revenue. Possessing eight of the ten highest mountains in the world, Nepal is a hotspot destination for mountaineers, rock climbers and people seeking adventure. The Hindu and Buddhist heritage of Nepal and its cool weather are also strong attractions.
        </p>
      </div>
    </div>
  </div>
</section>
<section id="best-tour" class="small-best-tour inside-page-content">
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
<section id="notification">
  <div class="container-fluid margin-top-20 inside-page-notify">
    <div class="notify-layer">
      <div class="notify">
          <h1>Visit the amazing places inside and outside Nepal</h1>
          <h3>We are the one</h3>
          <a href="#">Contact Us</a>
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