<link href="<?php echo site_url(); ?>public/assets/img/agency-logo.png" rel="icon">
  <link href="<?php echo site_url(); ?>public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo site_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo site_url(); ?>public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo site_url(); ?>public/assets/css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- Optional: Font Awesome and basic CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
 


.pricing {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;

  .plan {
    background-color: #fff;
    padding: 2.5rem;
    margin: 12px;
    border-radius: 5px;
    text-align: center;
    transition: 0.3s;
    cursor: pointer;

    h2 {
      font-size: 22px;
      margin-bottom: 12px;
    }

    .price {
      margin-bottom: 1rem;
      font-size: 30px;
    }

    ul.features {
      list-style-type: none;
      text-align: left;
      li {
        margin: 8px;
        .fas {
          margin-right: 4px;
        }
        .fa-check-circle {
          color: #6ab04c;
        }
        .fa-times-circle {
          color: #eb4d4b;
        }
      }
    }

    button {
      border: none;
      width: 100%;
      padding: 12px 35px;
      margin-top: 1rem;
      background-color: #6ab04c;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    &.popular {
      border: 2px solid #6ab04c;
      position: relative;
      transform: scale(1.08);

      span {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #6ab04c;
        color: #fff;
        padding: 4px 20px;
        font-size: 18px;
        border-radius: 5px;
      }
    }

    &:hover {
      box-shadow: 5px 7px 67px -28px rgba(0, 0, 0, 0.37);
    }
  }
}
.bi-twitter::before {
    content: "\f5ef";
    margin-left: 8px;
    margin-top: 9px;
}
.bi-facebook::before {
    content: "\f344";
    margin-top: 8px;
    margin-left: 8px;
}
.bi-instagram::before {
    content: "\f437";
     margin-top: 8px;
    margin-left: 8px;
}
.bi-linkedin::before {
    content: "\f472";
     margin-top: 8px;
    margin-left: 8px;
}
.portfolio-btn{
  text-align:center;
}
.promo-img{
  position: absolute;
    left: 65%;
    margin-top: -56px;
}
@media (max-width: 768px) {
  .promo-img{
  position: unset;
    left: unset;
    margin-top: unset;
  }
}
.portfolio-info {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: #fff;
}

.portfolio-category {
  display: inline-block;
  background: #fff;
  color: #000;
  padding: 10px 28px;
  border-radius: 20px;
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 10px;
}

.portfolio-title {
  font-size: 22px;
  font-weight: 700;
  margin: 0;
}
.portfolio-info h3{
  font-size:40px;
}
 .getstarted {
  padding: 8px 18px;
  border: 2px solid #fff; /* White border */
  background: transparent;
  color: #fff;
  border-radius: 5px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.getstarted:hover {
  border-color: #007bff;  /* Blue border on hover */
  color: #007bff;         /* Blue text on hover */
  background: transparent;
}
.mobile-view{
  display:none;
}
.mobile-nav-toggle {
  color:white;
}

@media (max-width: 768px) {
    .hero {
      text-align:left!important;
          height: 217vh!important;
    }
    
.about .content {
  padding:unset;

}
.about h2 {
  font-size:50px!important;
}
.about-btn{
  text-align:left!important;
}
.portfolio h2 {
  font-size:40px!important;
}
.dekstop-view{
  display:none;
}
.mobile-view{
  display: block;
}
.bi-twitter::before  {
 margin-left: 1px;
}
.bi-linkedin::before   {
 margin-left: 1px;
}
 .bi-instagram::before  {
 margin-left: 1px;
}
.bi-facebook::before  {
 margin-left: 1px;
}
  }



  </style>