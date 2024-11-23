<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <?php
    if(!empty($title)){
        $e = array('general' => true,'og' => true,'twitter'=> true,'robot'=> true);
        meta_tags($e, $title, $desc, $imgurl, $url,$keyword);
    }
  ?>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo img_url() ?>assets/images/favicon.ico">
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Medlyfechemist",
      "url": "https://www.medlyfechemist.com/",
      "logo": "https://www.medlyfechemist.com/assets/img/logo/logo.webp",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1614 (633) 0109",
        "contactType": "customer service",
        "contactOption": "TollFree",
        "areaServed": "US",
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=100088481551129",
        "https://www.instagram.com/medlyfechemist/",
        "https://twitter.com/medlyfechemist"
      ]
    }
  </script>
  
  <?php linkCss("css/font-awesome.min.css") ?>
  <?php linkCss("css/bootstrap.min.css") ?>
  <?php linkCss("css/magnific-popup.css") ?>
  <?php linkCss("css/select2.min.css") ?>
  <?php linkCss("css/style.css") ?>
  <?php linkCss("css/skins/orange.css") ?>
  <?php linkCss("css/oreation.css") ?>

  <meta name="geo.region" content="US-OH" />
  <meta name="geo.placename" content="Columbus" />
  <meta name="geo.position" content="39.78373;-100.445882" />
  <meta name="ICBM" content="39.78373, -100.445882" />
  <meta name= "author" content="https://www.medlyfechemist.com"> 
  <meta name= "content-language" content="english"> 
  <meta name="audience" content="all"> 
  <meta name= "revisit-after" content=" 4 days">  
  <meta name="distribution" content="global">   
  
  <?php linkJquery("js/modernizr.js") ?>
</head>
<body class="light">
    <div class="wrapper">
        <div class="download">
            <a href="https://play.google.com/store/apps/details?id=makdfs.com">DOWNLOAD APP</a> 
        </div>
        <header class="header bkgrad2">
            <div class="container">
                <div class="row">
                    <div class="main-logo col-xs-9">
                        <a href="<?php echo base_url() ?>">
                            <span class="orlogo">MAKDFS</span> 
                            <p>Unleashing the power of financial possibilities</p>
                        </a>
                    </div>
                    <div class="col-md-3 col-lg-3 text-right pt-15">
                        <a href="https://play.google.com/store/apps/details?id=makdfs.com" target="_blank" class="btn btn-primary m-none"><i class="fa fa-mobile-phone"></i> Download App</a>
                    </div>
                    <!-- <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                <h6>9,450 USD</h6><span>Last trade price</span></li>
                            <li>
                                <h6>+5.26%</h6><span>24 hour price</span></li>
                            <li>
                                <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                            <li>
                                <h6>2,231,775</h6><span>active traders</span></li>
                            <li>
                                <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                                <span>Live Bitcoin price</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-3 m-none">
                        <ul class="unstyled user">
                            <li class="sign-in">
                                
                            </li>
                            <li class="sign-up"><a href="register.html" class="btn btn-primary"><i class="fa fa-mobile-phone"></i> Download App</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <a class="logo-mobile" href="<?php echo base_url() ?>">
                            <img id="logo-mobile" class="img-responsive" src="<?php echo img_url()?>assets/images/logo-dark.png" alt="">
                        </a>
                        
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="<?php echo ($this->uri->segment(1) == '') ? 'active':''; ?>"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li class="<?php echo ($this->uri->segment(1) == 'about') ? 'active':''; ?>"><a href="<?php echo base_url() ?>about">About Us</a></li>
                                <li class="<?php echo ($this->uri->segment(1) == 'contact') ? 'active':''; ?>"><a href="<?php echo base_url() ?>contact">Contact</a></li>
                                <li class="<?php echo ($this->uri->segment(1) == 'services') ? 'active':''; ?>"><a href="<?php echo base_url() ?>services">Services</a></li>
                                <li class="<?php echo ($this->uri->segment(1) == 'terms') ? 'active':''; ?>"><a href="<?php echo base_url() ?>terms">Terms & Conditions</a></li>
                                <li class="<?php echo ($this->uri->segment(1) == 'privacy') ? 'active':''; ?>"><a href="<?php echo base_url() ?>privacy">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-search">
                    <div class="container">
                        <input type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                    </div>
                </div>
            </nav> -->
        </header>


    