<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agency</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include("header_script.php");?>

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .hero {
    width: 100%;
    height: 100vh;
    background: unset;
    background-color:#28293e;
    background-size: cover;
}
.navbar a, .navbar a:focus {
  color:#ffffff;
}
.header.header-scrolled {
    background: #28293e;
}
.banner-text{
  color:rgba(255, 255, 255, 0.64);
}
.banner-head{
  color:rgba(239, 109, 88, 1);
}
.hero .btn-get-started {
  padding:0px;
  width: 154px;
    height: 48px;
    box-shadow:unset;
 background: rgba(239, 109, 88, 1);

}
.hero .btn-get-started span {
  font-size: 14px;
  width: 108px;
}
.hero h1 {
  color:white;
}
.btn-contact{
  margin-left:40px;
  color:white;
}
/* Optional improvements */
.rounded-circle {
  border-radius: 50%;
  object-fit: cover;
background: rgba(181, 80, 246, 1);

}
.white{
  color:white;
}
.clients .clients-slider .swiper-pagination {
   display:none;
}
body{
  background-color:rgba(243, 209, 191, 1);
}
.about .content {
  background-color:unset;
}
.about h2 {
  font-size:56px;
  color:black;
}
.about .btn-read-more span {
  font-weight: 900;
  letter-spacing: 0px;

}
.about .btn-read-more {
      width: 138px;
    height: 48px;
    color:black;
    background:#ffffff;
    padding:0px;
    box-shadow: unset;
}
.about h5{
  color: rgba(239, 109, 88, 1);

}
.counts .count-box {
  background:unset;
   box-shadow: unset;
   border:1px solid #a9a9a9;
}
.counts .col-lg-4 {
  padding-left: 0;
  padding-right: 0;
}
.count-box span + span {
  font-weight: bold;
  margin-left: 2px;
  
}
.counts .count-box span {
  display:unset;
}
.fw-bold{
      font-weight: 800 !important;
    font-size: 72px;
    line-height: 80px;
}
.content-heading{
  color: rgba(239, 109, 88, 1);

}
.content-heading1{
  font-size:40px;
}
.content-btn{
  color:black;
}
.video-box {
  position: relative;
  display: inline-block;
}

.video-box img {
  display: block;
  max-width: 100%;
  height: auto;
}

.video-box .play-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 148px;
  height: 148px;
 border:1px solid white; 
  border-radius: 50%;
  z-index: 2;
}

.play-icon {
  font-size:30px;
  color: white;
}
.about-heading-video{
 font-size:40px!important;
 font-weight:400!important;
 color:unset!important;
 text-transform: unset!important;
}
.portfolio #portfolio-flters li {
border: unset;

}
.portfolio #portfolio-flters {
  background: unset;
}
.portfolio h2 {
  font-size:56px;
  color:white;
  text-transform: unset;

}
.portfolio h5{
color: rgba(239, 109, 88, 1);

}
#portfolio {
  background-color: #14142b; /* or your desired dark color */
  width: 100%;
  
}
.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
    
      color: rgba(255, 255, 255, 1);

}
.team {
     background: unset;
}
.team .member .member-img {
  position: unset;
}
.team .member {
  background:unset;
}
.team .member .member-img:after {
  background:unset;
}
.team-heading
{
  text-align:left;
}
.terms-policy{
  padding-top:30px;
}
.footer .footer-top {
  border-top:unset;
   border-bottom:unset;

}
.border-top {
    border-top: var(--bs-border-width) var(--bs-border-style) rgb(229 195 177) !important;
}
.map-section {
  position: relative;
  background-image: url('<?php echo site_url(); ?>public/assets/img/map-pin.png');
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: flex-start; /* Align to the left */
  padding-left: 5%; /* Add some space from left edge */
}

.contact-form {
  background: #fff;
  padding: 30px;
  max-width: 400px;
  width: 90%;
  border-radius: 8px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  z-index: 1;
}

.contact-form h3 {
  margin-bottom: 20px;
}

.contact-form input,
.contact-form select,
.contact-form textarea {
  width: 100%;
  padding: 12px 15px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.contact-form button {
  background-color: #f26648;
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}

.contact-form button:hover {
  background-color: #d44c33;
}

.map-pin {
  position: absolute;
  right: 10%;
  top: 50%;
  transform: translateY(-50%);
  width: 72px;
  height: 72px;
  z-index: 2;
}
.accordion {
  --bs-accordion-bg:unset;
}
.team .member .member-img {
  height:249px;
}
.team .member .member-info h4 {
  color:white;
  text-align:left;
}
.team .member .member-info span {
  text-align:left;
}
.footer .footer-top h4 {
  color: rgba(57, 20, 0, 1);


}
.footer-links h5{
  color: rgba(239, 109, 88, 1);

}
.footer .footer-top .footer-links ul a {
  color:black;
}
.list-inline-item a{
  color:black;
}
.footer .copyright {
  color:black;
}
.counts .count-box span {
  color: rgba(57, 20, 0, 1);

}
.counts .count-box p {
  color: rgba(57, 20, 0, 1);
}

.accordion {
 border: 1px solid rgb(239 182 153);
}
.accordion-flush>.accordion-item {
  padding:15px;
}
.faq .accordion-button:not(.collapsed) {
  color: #391400;
}


.faq .accordion-button {
  color: #391400;
}
.pricing {
    .simple {
      background:unset;
    }
  }
  .popular{
    background:while!important;
  }
  .promo-section{
    background: #fdf3f0; 
    padding: 60px 30px; 
    border-radius: 10px;
     margin: 60px auto; 
     max-width: 1100px;

  }
  .pricing-heading{
    text-align:left;
  }
.pricing-heading h2 {
font-size:56px;
color: rgba(57, 20, 0, 1);
}
.pricing-heading h5{
  color:rgba(239, 109, 88, 1);
}
.pricing {
    & .plan {
        button {
            background-color: #ffffff;
            color:black;
            width:65%;
        }
      }
    }

    .pricing {
    & .popular {
        button {
          background: rgba(239, 109, 88, 1);

            color:white;
            width:65%;
        }
      }
.pricing {
    .plan {
      text-align:left;
    }
  }
  .pricing {
    & .plan {
        &.popular {
            span {
                              background-color: #ef6d58;
            }
          }
        }
      }
.pricing {
    & .plan {
        &.popular {
            border: 2px solid #ef6d58;
        }
      }
    }

.portfolio-info {
  opacity: 1!important;
}


    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("header.php");?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h5 class="banner-head">Modern Studio</h5>
          <h1 data-aos="fade-up" class="banner-heading">We’re Help To Build Your Dream Project</h1>
         <p class="banner-text">Agency provides a full service range including technical skills, design, business understanding.</p>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>How We Work</span>
                
              </a>
              <a href="#contact" class="btn-contact">Contact</a>
            </div>
            
          </div>
          <div class="d-flex align-items-center mt-5">
  <img src="<?php echo site_url(); ?>public/assets/img/banner-per.png" alt="Meta Inc" class="me-3 rounded-circle" style="width: 50px; height: 50px;">
  <div>
    <p class="banner-text">Put themselves in the merchant's shoes</p>
    <strong class="white">Meta Inc</strong>
  </div>
</div>

        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo site_url(); ?>public/assets/img/banner-img.png" class="img-fluid banner-img"  alt="">
        </div>
      </div>
    </div>
    

  </section><!-- End Hero -->
  <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

       
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?php echo site_url(); ?>public/assets/img/1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo site_url(); ?>public/assets/img/2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo site_url(); ?>public/assets/img/3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo site_url(); ?>public/assets/img/4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo site_url(); ?>public/assets/img/5.png" class="img-fluid" alt=""></div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo site_url(); ?>public/assets/img/about-img.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h5>About</h5>
              <h2 class="about-heading">An Experience Design Agency</h2>
              <h6>Provides a full service range</h6>
              <p>
               Ability to put themselves in the merchant's shoes. It is meant to partner on the long run, and work as an extension of the merchant's team.
              </p>
              <div class="text-center text-lg-start about-btn">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>About Us</span>
                  
                </a>
              </div>
            </div>
          </div>

          

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <?php /*<section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="<?php echo site_url(); ?>public/assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="<?php echo site_url(); ?>public/assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="<?php echo site_url(); ?>public/assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section>*/?><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <?php /*<i class="bi bi-emoji-smile"></i>*/?>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span><span>%</span>
                <p>Years of experience</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <?php /*<i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>*/?>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="73" data-purecounter-duration="1" class="purecounter"></span><span>%</span>
                <p>Agency members</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects complete</p>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

       
        <div class="row">

         <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h5 class="content-heading">How we work</h5>
              <h3 class="content-heading1">Making Your Projects 
Look Awesome</h3>
             
              <p>
              Technical skills, design, business understanding, ability to put themselves in the merchant's shoes.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center content-btn">
                  <span>Read More</span>
                  
                </a>
              </div>
            </div>
          </div>
<div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-center">
        <div class="row w-100">
          <div class="col-12 d-flex align-items-start mb-4">
            <div class="display-5 fw-bold me-3">1</div>
            <div>
              <h5 class="mb-0 fw-semibold mt-4">Full service range including</h5>
            </div>
          </div>
          <div class="col-12 d-flex align-items-start mb-4">
            <div class="display-5 fw-bold me-3">2</div>
            <div>
              <h5 class="mb-0 fw-semibold mt-4">Technical skills, design, business</h5>
            </div>
          </div>
          <div class="col-12 d-flex align-items-start">
            <div class="display-5 fw-bold me-3">3</div>
            <div>
              <h5 class="mb-0 fw-semibold mt-4">Themselves in the merchant's shoes</h5>
            </div>
          </div>
        </div>

        </div> <!-- / row -->
</section>

        <?php /*<!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="<?php echo site_url(); ?>public/assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="<?php echo site_url(); ?>public/assets/img/features-3.png" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-stack-line"></i>
                  <div>
                    <h4>Ullamco laboris nisi</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-brush-4-line"></i>
                  <div>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Molestiae dolor</h4>
                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->*/?>


    <!-- ======= Services Section ======= -->
   <?php /* <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Veritatis et dolores facere numquam et praesentium</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->*/?>
    <section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
  <div class="video-box position-relative">
    <img src="<?php echo site_url(); ?>public/assets/img/video-img.png" class="img-fluid" alt="Video thumbnail">
    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="play-btn glightbox btn-watch-video" data-fancybox>
      <span class="play-icon">&#9658;</span>
    </a>
  </div>
</div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h5>Video Reel</h5>
          <h3 class="about-heading-video">Unlock The Greatest Value Possible</h3>
          
          <p>
            Design, business understanding, ability to put themselves in the merchant's shoes meant to partner.
          </p>
          
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">

          <h5>Portfolio</h5>
          <h2>Latest Work</h2>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Show All<sup>14</sup></li>
              <li data-filter=".filter-app">Design<sup>6</sup></li>
              <li data-filter=".filter-card">Branding<sup>4</sup></li>
              <li data-filter=".filter-web">Illustration<sup>3</sup></li>
              <li data-filter=".filter-web">Motion<sup>1</sup></li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo site_url(); ?>public/assets/img/port1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                 <span class="portfolio-category">Design</span>
                <h3>SOFA</h3>
                
              </div>
            </div>
          </div>

         

          <div class="col-lg-7 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo site_url(); ?>public/assets/img/port2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">Branding</span>
                <h3>KeyBoard</h3>
                
              </div>
            </div>
          </div>

          <div class="col-lg-7 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo site_url(); ?>public/assets/img/port3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">Illustration</span>
                <h3>Work Media</h3>
                
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo site_url(); ?>public/assets/img/port4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">Motion</span>
                <h3>DDDone</h3>
                
              </div>
            </div>
          </div>

          

          
        </div>

      </div>
     <div class="text-center mt-4">
      <a href="#" class="btn btn-outline-light">EXPLORE MORE</a>
    </div>
<!-- ======= Promo Section ======= -->
<section class="promo-section" style="">
  <div class="row align-items-center">
    <div class="col-lg-4">
      <div>
        <p style="color: #f85a40; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">Get Started</p>
        <h3 style="font-weight: 700; margin-bottom: 20px;">We Help Companies Move Faster</h3>
        <a href="#contact" class="btn btn-danger" style="background: #f85a40; border: none; padding: 12px 25px;">Contact Us</a>
      </div>
    </div>
    <div class="col-lg-4 text-center">
      <img src="<?php echo site_url(); ?>public/assets/img/promt-img1.png" alt="Promo" style="max-width: 100%; height: auto;">
    </div>
    <div class="col-lg-4 text-center promo-img">
      <img src="<?php echo site_url(); ?>public/assets/img/promt-img.png" alt="Promo" style="max-width: 100%; height: auto;">
    </div>
  </div>
</section>
<!-- ======= End Promo Section ======= -->

      
<!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header team-heading">
          <h5>Our Team</h5>
          <h2>Team of Designers <br>and Developers</h2>
          
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo site_url(); ?>public/assets/img/team1.png" class="img-fluid" alt="">
                <?php /*<div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>*/?>
              </div>
              <div class="member-info">
                <h4>Azah Anyeni</h4>
                <span>Designer</span>
               
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo site_url(); ?>public/assets/img/team2.png" class="img-fluid" alt="">
                <?php /*<div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>*/?>
              </div>
              <div class="member-info">
                <h4>Roelof Bekkenenks</h4>
                <span>React Developer</span>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo site_url(); ?>public/assets/img/team3.png" class="img-fluid" alt="">
                <?php /*<div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>*/?>
              </div>
              <div class="member-info">
                <h4>Leonardo Oliveira</h4>
                <span>Illustrator</span>
               
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo site_url(); ?>public/assets/img/team4.png" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Izabella Tabakova</h4>
                <span>Product Designer</span>
               
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    </section><!-- End Portfolio Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header pricing-heading">
          <h5>Pricing</h5>
          <h2>Check Our<br>
Pricing Plans</h2>
        </header>

        <div class="row gy-4 pricing" data-aos="fade-left">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            
              <div class="plan simple">
                 <h2>Consultation</h2>
              <div class="price">FREE</div>
              <p>Your digital marketing efforts, instead of handling in-house.</p>
              <ul class="features">
                 <li><i class="fas fa-check-circle"></i> Brand Design</li>
                 <li><i class="fas fa-times-circle"></i> Market Analysisr</li>
                  <li><i class="fas fa-times-circle"></i> Production</li>
                   
               </ul>
                   <button>Contact Us</button>
                 </div>
               </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="plan popular">
       <span>Popular</span>
        <h2>Design</h2>
        <div class="price">$1500</div>
        <p>Provide your business with a variety of digital solutions to promote.</p>
        <ul class="features">
          <li><i class="fas fa-check-circle"></i> Brand Design</li>
          <li><i class="fas fa-times-circle"></i> Market Analysisr</li>
         <li><i class="fas fa-times-circle"></i> Production</li>
        </ul>
        <button>Buy Now</button>
      </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="plan simple">
        <h2>Design+Code</h2>
        <div class="price">$2900</div>
        <p>Help you hit your marketing goals and grow your business.</p>
        <ul class="features">
          <li><i class="fas fa-check-circle"></i> Brand Design</li>
          <li><i class="fas fa-times-circle"></i> Market Analysisr</li>
         <li><i class="fas fa-times-circle"></i> Production</li>
        </ul>
        <button>Contact Us</button>
      </div>
    </div>
          </div>

          

        </div>

      </div>

    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
             <div class="content">
              <h5 class="content-heading">F.A.Q</h5>
              <h3 class="content-heading1">Frequently Asked Questions</h3>
             
              <p>
              A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center content-btn">
                  <span>Contact Us</span>
                  
                </a>
              </div>
            </div>
           
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                   A digital agency is a business
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                   Digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you hit your marketing goals and grow your business.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Hire to outsource your digital
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                   Marketing efforts
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                   Marketing efforts
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                   Can provide your business
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

   
   

    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    

    <!-- ======= Recent Blog Posts Section ======= -->
    
    <!-- ======= Contact Section ======= -->
   <section class="map-section">
  <div class="contact-form">
    <h3>Get In Touch</h3>
    <form>
      <input type="email" placeholder="Your email" required>
      <select required>
        <option value="">Subject</option>
        <option value="inquiry">Inquiry</option>
        <option value="support">Support</option>
      </select>
      <textarea placeholder="Message" required></textarea>
      <button type="submit">SUBMIT NOW</button>
    </form>
  </div>

  <img src="<?php echo site_url(); ?>public/assets/img/map-loction.png" class="map-pin" alt="Map Pin">
</section>



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<?php include("footer_script.php");?>

</body>

</html>