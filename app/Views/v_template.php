<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>WebGIS-LRT</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="<?= base_url('site/')?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('site/')?>css/fonts.css">
    <link rel="stylesheet" href="<?= base_url('site/')?>css/style.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer@latest/dist/model-viewer.min.js"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <div id="home">
        <!-- Page Header-->
        <header class="section page-header">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="30px" data-xxl-stick-up-offset="30px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/waskita.png" alt="" width="130" height="10"/></a></div>
                  </div>
                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Share-->
                      <div class="rd-navbar-share fl-bigmug-line-share27" data-rd-navbar-toggle=".rd-navbar-share-list">
                        <ul class="list-inline rd-navbar-share-list">
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-facebook" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-twitter" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-google-plus" href="#"></a></li>
                          <li class="rd-navbar-share-list-item"><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </div>
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="<?=base_url('Home')?>">Home</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#About">About</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Team</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="https://www.google.com/maps" target="_blank">2D</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="<?= base_url('landing'); ?>">3D</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#news">Report</a></li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-classic" data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/LRT2.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <h1 style="color: white;" data-caption-animate="fadeInLeft" data-caption-delay="0">LRT JAKARTA PHASE 1B</h1>
                  <p style="color: white;" class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">LRT Jakarta Fase 1B memiliki rentang jalur sepanjang 6,4 Km yang memiliki 5 (lima) stasiun, yaitu: Stasiun Pemuda Rawamangun, Stasiun Pramuka BPKP, Stasiun Pasar Pramuka, Stasiun Matraman, dan Stasiun Manggarai.</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">More Info</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/LRT.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <h1 style="color: white;" data-caption-animate="fadeInLeft" data-caption-delay="0">PT Waskita Karya (Persero) Tbk</h1>
                  <p style="color: white;" class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">PT Waskita Karya (Persero) Tbk adalah sebuah Badan Usaha Milik Negara Indonesia 
                    (BUMN) yang bergerak di bidang konstruksi dengan lima divisi, yakni Gedung, Infrastruktur I, Infrastruktur II, 
                    EPC, dan Luar Negeri. </p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/LRT3.jpg">
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <h1 style="color: white;" data-caption-animate="fadeInLeft" data-caption-delay="0">Intership</h1>
                  <p style="color: white;" class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">lalala lalala hey</p><a class="button button-primary button-ujarak" href="#modalCta" data-toggle="modal" data-caption-animate="fadeInUp" data-caption-delay="200">Get in touch</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination__module">
            <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span class="swiper-pagination__fraction-divider">/</span><span class="swiper-pagination__fraction-count">00</span></div>
            <div class="swiper-pagination__divider"></div>
            <div class="swiper-pagination"></div>
          </div>
        </section>

      </div>
      <!-- See all services-->
      <section class="section section-sm section-first bg-default text-center" id="About">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <!-- Bagian Model 3D -->
                <div class="col-md-7 col-lg-5 col-xl-6 text-lg-left wow fadeInUp">
                    <model-viewer src="model/model.glb"
                                  alt="Model Civil 3D"
                                  auto-rotate
                                  camera-controls
                                  ar
                                  style="width: 415px; height: 592px;">
                    </model-viewer>
                </div>
            <div class="col-lg-7 col-xl-6">
              <div class="row row-30">
                <div class="col-sm-6 wow fadeInRight">
                  <article class="box-icon-modern box-icon-modern-custom">
                    <div class="box-icon-modern-icon">
                      <img src="images/civil3d.jpg" alt="Logo 1" style="width: 50px; height: 50px;">
                    <div>
                      <h5 class="box-icon-modern-title"><a href="#">Civil 3D</a></h5>
                      <div class="box-icon-modern-decor"></div>
                      <p class="box-icon-modern-text">Pengolahan data borepile, pilecap, dan kolom</p>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".1s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon">
                      <img src="images/civil3d.jpg" alt="Logo 1" style="width: 50px; height: 50px;">
                    <div>
                      <h5 class="box-icon-modern-title"><a href="#">Civil 3D</a></h5>
                      <div class="box-icon-modern-decor"></div>
                      <p class="box-icon-modern-text">Pengolahan data borepile, pilecap, dan kolom</p>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".2s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon">
                      <img src="images/civil3d.jpg" alt="Logo 1" style="width: 50px; height: 50px;">
                    <div>
                      <h5 class="box-icon-modern-title"><a href="#">Civil 3D</a></h5>
                      <div class="box-icon-modern-decor"></div>
                      <p class="box-icon-modern-text">Pengolahan data borepile, pilecap, dan kolom</p>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay=".3s">
                  <article class="box-icon-modern box-icon-modern-2">
                    <div class="box-icon-modern-icon">
                      <img src="images/civil3d.jpg" alt="Logo 1" style="width: 50px; height: 50px;">
                    <div>
                      <h5 class="box-icon-modern-title"><a href="#">Civil 3D</a></h5>
                      <div class="box-icon-modern-decor"></div>
                      <p class="box-icon-modern-text">Pengolahan data borepile, pilecap, dan kolom</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Meet The Team-->
      <section class="section section-sm section-fluid bg-default" id="team">
        <div class="container-fluid">
          <h2>Meet The Team</h2>
          <div class="row row-sm row-30 justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/darren.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Darren Avram P.S.</a></h4>
                  <p class="team-classic-status">Developer</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".1s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/han.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Indian guy</a></h4>
                  <p class="team-classic-status">Chess stuck elo 500</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/mitzu.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">:></a></h4>
                  <p class="team-classic-status">:></p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 wow fadeInRight" data-wow-delay=".3s">
              <!-- Team Classic-->
              <article class="team-classic team-classic-lg"><a class="team-classic-figure" href="#"><img src="images/team-14-420x424.jpg" alt="" width="420" height="424"/></a>
                <div class="team-classic-caption">
                  <h4 class="team-classic-name"><a href="#">Aleha Cansery</a></h4>
                  <p class="team-classic-status">certified chindo looking for partner</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <?php include($page . ".php"); ?>
      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left" id="contacts">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Get in touch</h3>
            </div>
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-2">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-2">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone-2">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
          </form>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section section-fluid footer-minimal context-dark">
        <div class="bg-gray-15">
          <div class="container-fluid">
            <div class="footer-minimal-inset oh">
              <ul class="footer-list-category-2">
                <li><a href="#">Activity</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
            <div class="footer-minimal-bottom-panel text-sm-left">
              <div class="row row-10 align-items-md-center">
                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                </div>
                <div class="col-sm-6 col-md-4 order-sm-first">
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Waskita-internship | All rights reserved.</span>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Contact Us</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact-modal" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-modal-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-modal-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-modal-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-modal-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-modal-message">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-modal-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="<?= base_url('site/')?>js/core.min.js"></script>
    <script src="<?= base_url('site/')?>js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>