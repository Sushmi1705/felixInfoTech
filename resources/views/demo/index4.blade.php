@extends('layouts.base')

@section('header')
  @include('layouts.partials.loader')
  @include('layouts.partials.header.navbar4')
@endsection

@section('content')
  <!-- ===== HERO AREA STARTS ======= -->
  <div class="hero4-section-area" style="background-image: url(/img/all-images/bg/hero-bg5.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="hand-img">
    <img src="/img/elements/elements32.png" alt="" class="elements32" />
    <img src="/img/elements/elements31.png" alt="" class="elements31 keyframe5" />
    </div>
    <img src="/img/elements/elements33.png" alt="" class="elements33 aniamtion-key-1" />
    <img src="/img/elements/elements34.png" alt="" class="elements34" />
    <img src="/img/elements/elements35.png" alt="" class="elements35" />
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
      <div class="hero4-heading heading3">
        <h5 data-aos="fade-left" data-aos-duration="800" style="text-transform: uppercase;"><img src="/img/icons/sub-logo2.svg" alt="" />Innovative Solutions for A Digital World</h5>
        <div class="space18"></div>
        <h1 class="text-anime-style-3">Best Optimized IT For Performance, Security Sustainable Growth</h1>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="1000">We offer full suite of IT solutions designed meet the needs of modern businesses. Our Eitech cybersecurity services to provide robust protection for your data & systems while.</p>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
        <a href="{{ route('any', 'index') }}" class="vl-btn5"><span class="demo">Book A Free Consultation</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
      <div class="her4-images-area">
        <div class="img1" data-aos="zoom-in" data-aos-duration="1000">
        <img src="/img/all-images/hero/hero-img6.png" alt="" />
        </div>
        <div class="bg">
        <img src="/img/elements/elements36.png" alt="" class="keyframe5" />
        </div>
        <img src="/img/elements/elements37.png" alt="" class="elements37 aniamtion-key-1" />
        <img src="/img/elements/elements38.png" alt="" class="elements38 aniamtion-key-2" />
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== ABOUT AREA STARTS ======= -->
  <div class="about4-section-area sp1">
    <img src="/img/all-images/bg/about-bg1.png" alt="" class="about-bg1" />
    <img src="/img/elements/elements41.png" alt="" class="elements41" />
    <div class="container">
    <div class="row">
      <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-images-area">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
          <linearGradient id="imagewave" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
          <stop class="stop-color2" offset="0%" stop-opacity="1"></stop>
          <stop class="stop-color1" offset="100%" stop-opacity="1"></stop>
          </linearGradient>
          <path fill="url(#imagewave)" d="">
          <animate repeatCount="indefinite" attributeName="d" dur="10s" values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
          c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
          c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
          c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z;


          M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4
          c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6
          c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8
          C48.9,198.6,57.8,191,51,171.3z;

          M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45
          c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2
          c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7
          c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z  "></animate>
          </path>
        </svg>
        <div class="img1">
          <img src="/img/all-images/about/about-img8.png" alt="" />
        </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <div class="about-header heading6">
        <h5><span><img src="/img/icons/sub-logo4.svg" alt="" /></span>About Eitech IT Solution</h5>
        <div class="space24"></div>
        <h2 class="text-anime-style-3">Dedicated To Delivering Technology Of Services</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="800">We are passionate about delivering innovative IT solutions to that drive a business success. With team on IT professionals.</p>
        <div class="space24"></div>
        <div class="bg-progress" data-aos="fade-left" data-aos-duration="900">
          <div class="progress-bar">
          <label>It Solution <span>98%</span></label>
          <div class="progress">
            <div class="progress-inner" style="width: 98%;"></div>
          </div>
          </div>

          <div class="progress-bar" style="margin: 0;">
          <label>Cyber Security <span>99%</span></label>
          <div class="progress">
            <div class="progress-inner" style="width: 99%;"></div>
          </div>
          </div>
        </div>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
          <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn5"><span class="demo">Request A Free Consultation</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== ABOUT AREA ENDS ======= -->

  <!-- ===== SERVICE AREA STARTS ======= -->
  <div class="service4-section-area sp1" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <img src="/img/elements/elements42.png" alt="" class="elements42" />
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="service-header space-margin60">
        <div class="heading6">
        <h5><img src="/img/icons/sub-logo4.svg" alt="" />Our IT Solution Services</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Tailored IT Services For <br class="d-lg-block d-none" /> Your Unique Business</h2>
        </div>
        <div class="btn-area1">
        <a href="{{ route('second', ['services', 'service']) }}" class="vl-btn5"><span class="demo">View More Services</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="700">
      <div class="service-single-boxarea">
        <div class="icons">
        <img src="/img/icons/service-icon11.svg" alt="" />
        </div>
        <div class="space28"></div>
        <div class="content-area">
        <a href="{{ route('second', ['services', 'single']) }}">Cyber Security Solution</a>
        <div class="space16"></div>
        <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
        <div class="space24"></div>
        <div class="btn-area">
          <a href="{{ route('second', ['services', 'single']) }}" class="service-btn">Learn More</a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
      <div class="service-single-boxarea">
        <div class="icons">
        <img src="/img/icons/service-icon12.svg" alt="" />
        </div>
        <div class="space28"></div>
        <div class="content-area">
        <a href="{{ route('second', ['services', 'single']) }}">Scalable Cloud Solutions</a>
        <div class="space16"></div>
        <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
        <div class="space24"></div>
        <div class="btn-area">
          <a href="{{ route('second', ['services', 'single']) }}" class="service-btn">Learn More</a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
      <div class="service-single-boxarea">
        <div class="icons">
        <img src="/img/icons/service-icon13.svg" alt="" />
        </div>
        <div class="space28"></div>
        <div class="content-area">
        <a href="{{ route('second', ['services', 'single']) }}">Data Protection Services</a>
        <div class="space16"></div>
        <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
        <div class="space24"></div>
        <div class="btn-area">
          <a href="{{ route('second', ['services', 'single']) }}" class="service-btn">Learn More</a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
      <div class="service-single-boxarea">
        <div class="icons">
        <img src="/img/icons/service-icon14.svg" alt="" />
        </div>
        <div class="space28"></div>
        <div class="content-area">
        <a href="{{ route('second', ['services', 'single']) }}">Optimization Management</a>
        <div class="space16"></div>
        <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
        <div class="space24"></div>
        <div class="btn-area">
          <a href="{{ route('second', ['services', 'single']) }}" class="service-btn">Learn More</a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1100">
      <div class="service-single-boxarea">
        <div class="icons">
        <img src="/img/icons/service-icon15.svg" alt="" />
        </div>
        <div class="space28"></div>
        <div class="content-area">
        <a href="{{ route('second', ['services', 'single']) }}">HelpDesk 360 Solutions</a>
        <div class="space16"></div>
        <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
        <div class="space24"></div>
        <div class="btn-area">
          <a href="{{ route('second', ['services', 'single']) }}" class="service-btn">Learn More</a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
      <div class="service-single-boxarea">
        <div class="icons">
        <img src="/img/icons/service-icon16.svg" alt="" />
        </div>
        <div class="space28"></div>
        <div class="content-area">
        <a href="{{ route('second', ['services', 'single']) }}">Software Development</a>
        <div class="space16"></div>
        <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
        <div class="space24"></div>
        <div class="btn-area">
          <a href="{{ route('second', ['services', 'single']) }}" class="service-btn">Learn More</a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== SERVICE AREA ENDS ======= -->

  <!-- ===== WORKS AREA STARTS ======= -->
  <div class="work4-section-area sp1">
    <img src="/img/elements/elements16.png" alt="" class="elements16" />
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5" />
    <div class="container">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="heading6 text-center space-margin60">
        <h5><img src="/img/icons/sub-logo4.svg" alt="" />how it works</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">How Our IT Solutions Work</h2>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
        <div class="others-widget-area">
        <div class="row align-items-center">
          <div class="col-lg-4">
          <div class="card-boxarea box1" data-aos="zoom-in" data-aos-duration="800">
            <div class="div text-end">
            <h3><img src="/img/icons/service-icon13.svg" alt="" /><span class="d-none">our service</span></h3>
            </div>
            <div class="content-area">
            <a href="{{ route('second', ['services', 'single']) }}">Discovery Consultation</a>
            <div class="space14"></div>
            <p>With our intuitive interface and robust features, you buy, sell.</p>
            </div>
          </div>
          <div class="space30"></div>
          <div class="card-boxarea box2" data-aos="zoom-in" data-aos-duration="900">
            <div class="content-area">
            <a href="{{ route('second', ['services', 'single']) }}">Customized IT Strategy</a>
            <div class="space14"></div>
            <p>Plus, our commitment to the security means that PayCoin.</p>
            </div>
            <div class="div text-end">
            <h3><img src="/img/icons/service-icon14.svg" alt="" /><span class="d-none">our service</span></h3>
            </div>
          </div>
          </div>
          <div class="col-lg-4">
          <div class="images" data-aos="zoom-in" data-aos-duration="1000">
            <img src="/img/elements/elements12.png" alt="" class="elements12" />
            <img src="/img/elements/elements13.png" alt="" class="elements13" />
            <img src="/img/elements/elements14.png" alt="" class="elements14" />
            <img src="/img/elements/elements15.png" alt="" class="elements15" />
            <div class="img1">
            <img src="/img/all-images/case/case-img4.png" alt="" />
            </div>
          </div>
          </div>
          <div class="col-lg-4">
          <div class="card-boxarea box3" data-aos="zoom-in" data-aos-duration="800">
            <div class="div">
            <h3><img src="/img/icons/service-icon15.svg" alt="" /><span class="d-none">Our Service</span></h3>
            </div>
            <div class="content-area2">
            <a href="{{ route('second', ['services', 'single']) }}">Quality Assurance</a>
            <div class="space14"></div>
            <p>Trusted partner in the world of crypto trading Join us today.</p>
            </div>
          </div>
          <div class="space30"></div>
          <div class="card-boxarea box4" data-aos="zoom-in" data-aos-duration="1000">
            <div class="content-area2">
            <a href="{{ route('second', ['services', 'single']) }}">24/7 Support</a>
            <div class="space14"></div>
            <p>Resources designed to help navigate best the dynamic</p>
            </div>
            <div class="div">
            <h3><img src="/img/icons/service-icon16.svg" alt="" /><span class="d-none">our service</span></h3>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== WORKS AREA ENDS ======= -->

  <!-- ===== CASE AREA STARTS ======= -->
  <div class="case4-section-area sp1" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements41.png" alt="" class="elements41" />
    <div class="container">
    <div class="row">
      <div class="col-lg-5">
      <div class="case-header space-margin60 heading6">
        <h5><img src="/img/icons/sub-logo4.svg" alt="" />Case Studies</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Delivering Results With Custom IT Solutions</h2>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
      <div class="case4-slider owl-carousel">
        <div class="case-single-boxarea">
        <div class="img1 reveal image-anime">
          <img src="/img/all-images/case/case-img7.png" alt="" />
        </div>
        <div class="content-area">
          <a href="#"><span>#CloudFlex Solution</span></a>
          <div class="space16"></div>
          <a href="#">Enhancing Productivity To with CloudFlex Solutions</a>
          <div class="arrow">
          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        </div>

        <div class="case-single-boxarea">
        <div class="img1 reveal image-anime">
          <img src="/img/all-images/case/case-img6.png" alt="" />
        </div>
        <div class="content-area">
          <a href="#"><span>#Network Optimization</span></a>
          <div class="space16"></div>
          <a href="#">Business Continuity with An BackupShield Data Recovery</a>
          <div class="arrow">
          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        </div>

        <div class="case-single-boxarea">
        <div class="img1 reveal image-anime">
          <img src="/img/all-images/case/case-img8.png" alt="" />
        </div>
        <div class="content-area">
          <a href="#"><span>#Cyber Security</span></a>
          <div class="space16"></div>
          <a href="#">Strengthening Security with A TechGuard Cybersecurity</a>
          <div class="arrow">
          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        </div>

        <div class="case-single-boxarea">
        <div class="img1 reveal image-anime">
          <img src="/img/all-images/case/case-img5.png" alt="" />
        </div>
        <div class="content-area">
          <a href="#"><span>#Cyber Security</span></a>
          <div class="space16"></div>
          <a href="#">Strengthening Security with A TechGuard Cybersecurity</a>
          <div class="arrow">
          <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== CASE AREA ENDS ======= -->

  <!-- ===== PRICING AREA STARTS ======= -->
  <div class="pricing4-section-area sp2">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
      <div class="pricing-header text-center heading6 space-margin60">
        <h5><img src="/img/icons/sub-logo4.svg" alt="" />Pricing Plan</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Tailored Pricing Plans For <br class="d-lg-block d-none" /> Your IT Requirements</h2>
      </div>
      </div>
    </div>
    <div class="space100"></div>
    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="800">
      <div class="pricing-single-boxarea">
        <div class="price">
        <h2>$60</h2>
        <div class="space14"></div>
        <p>Per Month</p>
        <img src="/img/elements/elements43.png" alt="" />
        </div>
        <p>Basic Packages</p>
        <div class="space16"></div>
        <h3>Basic Plan</h3>
        <ul>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Tailored IT Solutions
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Proactive System Monitoring
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Scalable Cloud Solutions
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Cybersecurity Protection
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Secure Data Backup & Recovery
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Custom Software Development
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />IT Infrastructure Management
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Data Encryption & Compliance
        </li>
        </ul>
        <div class="space32"></div>
        <div class="btn-area1">
        <a href="#" class="vl-btn5"><span class="demo">Choose A Plan</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
      <div class="space100 d-lg-none d-md-none d-block"></div>
      <div class="pricing-single-boxarea box2">
        <div class="price">
        <h2>$80</h2>
        <div class="space14"></div>
        <p>Per Month</p>
        <img src="/img/elements/elements43.png" alt="" />
        </div>
        <p>Pro Packages</p>
        <div class="space16"></div>
        <h3>Pro Plan</h3>
        <ul>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Tailored IT Solutions
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Proactive System Monitoring
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Scalable Cloud Solutions
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Cybersecurity Protection
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Secure Data Backup & Recovery
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Custom Software Development
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />IT Infrastructure Management
        </li>
        <li>
          <img src="/img/icons/check7.svg" alt="" />Data Encryption & Compliance
        </li>
        </ul>
        <div class="space32"></div>
        <div class="btn-area1">
        <a href="#" class="vl-btn5"><span class="demo">Choose A Plan</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1200">
      <div class="space100 d-lg-none d-md-block"></div>
      <div class="pricing-single-boxarea">
        <div class="price">
        <h2>$70</h2>
        <div class="space14"></div>
        <p>Per Month</p>
        <img src="/img/elements/elements43.png" alt="" />
        </div>
        <p>Premium Packages</p>
        <div class="space16"></div>
        <h3>Premium Plan</h3>
        <ul>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Tailored IT Solutions
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Proactive System Monitoring
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Scalable Cloud Solutions
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Cybersecurity Protection
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Secure Data Backup & Recovery
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Custom Software Development
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />IT Infrastructure Management
        </li>
        <li>
          <img src="/img/icons/check6.svg" alt="" />Data Encryption & Compliance
        </li>
        </ul>
        <div class="space32"></div>
        <div class="btn-area1">
        <a href="#" class="vl-btn5"><span class="demo">Choose A Plan</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== PRICING AREA ENDS ======= -->

  <!-- ===== TESTIMONIAL AREA STARTS ======= -->
  <div class="testimonial4-section-area sp1" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
    <div class="row">
      <div class="col-lg-5">
      <div class="testimonial-heading heading6 space-margin60">
        <h5><img src="/img/icons/sub-logo4.svg" alt="" />Testimonials</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">What Our Clients Say</h2>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
      <div class="testimonial4-slider owl-carousel">
        <div class="testimonial-review-box">
        <div class="man-text">
          <div class="man">
          <img src="/img/all-images/testimonial/testimonial-img7.png" alt="" />
          </div>
          <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Sheldon Jackson</a>
          <div class="space12"></div>
          <p>Shop Store Owner</p>
          </div>
        </div>
        <div class="space24"></div>
        <p>“Working with has been a game- Best changer for our business. Their IT and support team is always responsive, an their expertise has helped us stream our operations, We no longer worry.”</p>
        <div class="space24"></div>
        <div class="logo-area">
          <img src="/img/elements/elements40.png" alt="" />
          <ul>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          </ul>
        </div>
        </div>

        <div class="testimonial-review-box">
        <div class="man-text">
          <div class="man">
          <img src="/img/all-images/testimonial/testimonial-img8.png" alt="" />
          </div>
          <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Alex Robertson</a>
          <div class="space12"></div>
          <p>Shop Store Owner</p>
          </div>
        </div>
        <div class="space24"></div>
        <p>“Our network security has never been stronger. Their proactive monitoring and customized security solutions on have given us peace of mind. Our data is safe, and our compliance has Tech.”</p>
        <div class="space24"></div>
        <div class="logo-area">
          <img src="/img/elements/elements40.png" alt="" />
          <ul>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          </ul>
        </div>
        </div>

        <div class="testimonial-review-box">
        <div class="man-text">
          <div class="man">
          <img src="/img/all-images/testimonial/testimonial-img7.png" alt="" />
          </div>
          <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Henry Gayle</a>
          <div class="space12"></div>
          <p>Shop Store Owner</p>
          </div>
        </div>
        <div class="space24"></div>
        <p>“Has provided us on with top-notch IT services. Their solutions are tailored to our business, & their ongoing support is second to none. We’ve seen significant improvements in our productivity and.”</p>
        <div class="space24"></div>
        <div class="logo-area">
          <img src="/img/elements/elements40.png" alt="" />
          <ul>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          </ul>
        </div>
        </div>

        <div class="testimonial-review-box">
        <div class="man-text">
          <div class="man">
          <img src="/img/all-images/testimonial/testimonial-img7.png" alt="" />
          </div>
          <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Sheldon Jackson</a>
          <div class="space12"></div>
          <p>Shop Store Owner</p>
          </div>
        </div>
        <div class="space24"></div>
        <p>“Working with has been a game- Best changer for our business. Their IT and support team is always responsive, an their expertise has helped us stream our operations, We no longer worry.”</p>
        <div class="space24"></div>
        <div class="logo-area">
          <img src="/img/elements/elements40.png" alt="" />
          <ul>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          </ul>
        </div>
        </div>

        <div class="testimonial-review-box">
        <div class="man-text">
          <div class="man">
          <img src="/img/all-images/testimonial/testimonial-img8.png" alt="" />
          </div>
          <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Alex Robertson</a>
          <div class="space12"></div>
          <p>Shop Store Owner</p>
          </div>
        </div>
        <div class="space24"></div>
        <p>“Our network security has never been stronger. Their proactive monitoring and customized security solutions on have given us peace of mind. Our data is safe, and our compliance has Tech.”</p>
        <div class="space24"></div>
        <div class="logo-area">
          <img src="/img/elements/elements40.png" alt="" />
          <ul>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          </ul>
        </div>
        </div>

        <div class="testimonial-review-box">
        <div class="man-text">
          <div class="man">
          <img src="/img/all-images/testimonial/testimonial-img7.png" alt="" />
          </div>
          <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Henry Gayle</a>
          <div class="space12"></div>
          <p>Shop Store Owner</p>
          </div>
        </div>
        <div class="space24"></div>
        <p>“Has provided us on with top-notch IT services. Their solutions are tailored to our business, & their ongoing support is second to none. We’ve seen significant improvements in our productivity and.”</p>
        <div class="space24"></div>
        <div class="logo-area">
          <img src="/img/elements/elements40.png" alt="" />
          <ul>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          <li>
            <i class="fa-solid fa-star"></i>
          </li>
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== TESTIMONIAL AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-4-area sp2">
    <img src="/img/elements/elements39.png" alt="" class="elements39" />
    <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
      <div class="vl-blog-1-section-box heading6 text-center space-margin60">
        <h5 class="vl-section-subtitle"><span><img src="/img/icons/sub-logo4.svg" alt="" /></span>Our Blog</h5>
        <div class="space20"></div>
        <h2 class="vl-section-title text-anime-style-3">Our Latest Blog & News</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="900">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img8.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender2.svg" alt="" /> 4 August 2024</a>
          </li>
          </ul>
        </div>
        <div class="space16"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">How to Choose the Right BPO Partner for Your Best Business</a></h4>
        <div class="space20"></div>
        <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1000">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img9.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender2.svg" alt="" /> 5 August 2024</a>
          </li>
          </ul>
        </div>
        <div class="space16"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">The Future of BPO: Trends On Shaping A Customer Support</a></h4>
        <div class="space20"></div>
        <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="1000">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img10.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender2.svg" alt="" /> 6 August 2024</a>
          </li>
          </ul>
        </div>
        <div class="space16"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">From Data to Decisions: Using Analytic Call Centre Operation</a></h4>
        <div class="space20"></div>
        <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== BLOG AREA ENDS ======= -->

  <!-- ===== CTA AREA STARTS ======= -->
  <div class="cta4-section-area sp1">
    <img src="/img/elements/elements33.png" alt="" class="elements33 aniamtion-key-1" />
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5" />
    <img src="/img/elements/elements16.png" alt="" class="elements16" />
    <div class="container">
    <div class="row">
      <div class="col-lg-5">
      <div class="cta-header heading1">
        <h2 data-aos="fade-left" data-aos-duration="700">Empower Your Business Advanced Technology</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="800">Feel free to customize this paragraph to better reflect the specific services offered by your IT solution & the unique</p>
        <div class="space24"></div>
        <form data-aos="fade-left" data-aos-duration="900">
        <input type="text" placeholder="Email Address" />
        <button type="submit" class="vl-btn5"><span class="demo">Subscribe</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></button>
        </form>
      </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-4">
      <div class="cta-images">
        <img src="/img/elements/elements36.png" alt="" class="elements36 keyframe5" />
        <div class="img1">
        <img src="/img/all-images/cta/cta-img3.png" alt="" />
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== CTA AREA ENDS ======= -->

  <!-- ===== FOOTER AREA STARTS ======= -->
  <div class="vl-footer4-section-area sp8">
    <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
      <div class="footer-logo1">
        <img src="/img/logo/logo5.png" alt="" />
        <div class="space16"></div>
        <p>We provide expert best services technology to meet your unique needs. Whether you’re looking.</p>
        <div class="space24"></div>
        <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a href="#" class="m-0"><i class="fa-brands fa-youtube"></i></a>
        </li>
        </ul>
      </div>
      </div>
      <div class="col-lg-2 col-md-6">
      <div class="space30 d-md-none d-block"></div>
      <div class="vl-footer-widget">
        <h3>Quick Links</h3>
        <ul>
        <li>
          <a href="{{ route('second', ['pages', 'about']) }}">About Us</a>
        </li>
        <li>
          <a href="{{ route('second', ['services', 'service']) }}">It Solution</a>
        </li>
        <li>
          <a href="{{ route('second', ['blog', 'blog1']) }}">Our Blog</a>
        </li>
        <li>
          <a href="#">Pricing Plan</a>
        </li>
        <li>
          <a href="{{ route('second', ['pages', 'contact']) }}">Contact Us</a>
        </li>
        </ul>
      </div>
      </div>

      <div class="col-lg-3 col-md-6">
      <div class="vl-footer-widget">
        <div class="space30 d-lg-none d-block"></div>
        <h3>Our Services</h3>
        <ul>
        <li>
          <a href="#">Cyber Security Solution</a>
        </li>
        <li>
          <a href="#">Scalable Cloud Solutions</a>
        </li>
        <li>
          <a href="#">Data Protection Services</a>
        </li>
        <li>
          <a href="#">Optimization Management</a>
        </li>
        <li>
          <a href="#">Software Development</a>
        </li>
        </ul>
      </div>
      </div>
      <div class="col-lg-3 col-md-6">
      <div class="vl-footer-widget">
        <div class="space30 d-lg-none d-block"></div>
        <h3>Contact Us</h3>
        <ul>
        <li>
          <a href="tel:+11234567890"><img src="/img/icons/phn1.svg" alt="" />+1 123 456 7890</a>
        </li>
        <li>
          <a href="#"><img src="/img/icons/location1.svg" alt="" />421 Allen, Mexico 4233</a>
        </li>
        <li>
          <a href="mailto:eitechsolution@com"><img src="/img/icons/email1.svg" alt="" />eitechsolution@com</a>
        </li>
        <li>
          <a href="#"><img src="/img/icons/global1.svg" alt="" />eitechsolution.com</a>
        </li>
        </ul>
      </div>
      </div>
    </div>
    <div class="space60"></div>
    <div class="row">
      <div class="col-lg-12">
      <div class="vl-copyright-area">
        <p>© Copyright 2025 -Eitech. All Right Reserved</p>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== FOOTER AREA ENDS ======= -->
@endsection