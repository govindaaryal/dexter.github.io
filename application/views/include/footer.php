<section id="footer">
	<div class="footer-wrapper">
		<div class="container-fluid">
			<div class="row-fluid">
		      <div class="col-xs-12 col-sm-12 col-md-12 col-ld-12 main-title white-title">
		        <h1>the Journey is the reward</h1>
		      </div>
		      <div class="main-sub-desc white-sub-desc">
		        <p>Live Intentionally. Live Safely</p>
		      </div>
		      <div class="company-footer-logo">
		      	<center><img src="<?php base_url()?>client-assets/images/logo-text-black.png" class="img-responsive"></center>
		      </div>
		      <div class="table">
		        <ul class="footer-ul footer-social-icon">
		        		<li class="btn-foo-fb"><a href="#" target="_blank"><i class="icon ion-social-facebook"></i></a></li>
                        <li class="btn-foo-twitter"><a href="#" target="_blank"><i class="icon ion-social-twitter"></i></a></li>
                        <li class="btn-foo-insta"><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                        <li class="btn-foo-mail"><a href="#"><i class="icon ion-android-mail"></i></a></li>
		        </ul>
		      </div>
		      <div class="table">
		        <ul class="footer-ul footer-nav-bar">
		          <li><a href="#" class="footer-navlink">Home</a></li>
		          <li><a href="#" class="footer-navlink">About</a></li>
		          <li><a href="#" class="footer-navlink">Inside Nepal</a></li>
		          <li><a href="#" class="">Outside Nepal</a></li>
		          <li><a href="#" class="">Blog</a></li>
		          <li><a href="#" class="">Contact</a></li>
		        </ul>
		      </div>
		    </div>
		</div>
	</div>
</section>
<section id="footer-bottom">
	<div class="bottom-footer-wrapper">
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer-bottom">
				<div class="col-xs-12 col-sm-6 col-md- col-lg-6 copyright">
					<span>&copy; 2017 Dexter Tours and Travels All Right Reserved</span>
				</div>
				<div class="col-xs-12 col-sm-6 col-md- col-lg-6 work-by">
					<span>made with <i class="icon ion-heart" style="color: #f00;"></i> by </span><a href="http://govindaaryal.com" title="Web-Developer / Programmer">Govinda Aryal</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url() ?>client-assets/js/jquery-1.11.1.js"></script>
<script src="<?php echo base_url() ?>client-assets/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Scripts -->
<!-- Feature Tours -->
<script>
if (screen && screen.width > 480) {
	   // Instantiate the Bootstrap carousel
	$('.multi-item-carousel').carousel({
	  interval: false
	});

	// for every slide in carousel, copy the next slide's item in the slide.
	// Do the same for the next, next item.
	$('.multi-item-carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
	    next.next().children(':first-child').clone().appendTo($(this));
	  } else {
	    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});
}
</script>
<script>
if (screen && screen.width < 480) {
  $('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
}
</script>
</body>
</html>
