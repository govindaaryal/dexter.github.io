<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/594d047de9c6d324a4736fde/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<section id="info-bar">
  <div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info-bar-container">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 company-info">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 email">
          <i class="icon ion-ios-email-outline"></i><a href="#">support@dexter.com.np</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 phone">
          <i class="icon ion-ios-telephone-outline"></i><a href="#">+977-9849765155</a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 social-info pull-right">
        <div class="social_wrapper">
          <ul class="social clearfix">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="navigation">
  <div class="container-fluid">
      <!-- Navbar sign in -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url() ?>">
              <img src="<?php base_url()?>client-assets/images/logo-text-black.png" class="img-responsive">
            </a>
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar-collapse-2" aria-expanded="false" aria-controls="navbar">
              <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </button>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?=base_url(); ?>"  class="navbar-link link <?php if($this->uri->segment(1)==""){echo "active";}?>">Home</a></li>
              <li><a href="<?=base_url(); ?>about" class="navbar-link link <?php if($this->uri->segment(1)=="about"){echo "active";}?>">About</a></li>
              <li><a href="<?=base_url(); ?>insidenepal" class="navbar-link link <?php if($this->uri->segment(1)=="insidenepal"){echo "active";}?>">Inside Nepal</a></li>
              <li><a href="#" class="navbar-link link">Outside Nepal</a></li>
              <li><a href="#" class="navbar-link link">Blog</a></li>
              <li><a href="#" class="navbar-link link">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->
  </div><!-- /.container-fluid -->
</section>