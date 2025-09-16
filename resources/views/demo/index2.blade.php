@extends('layouts.base', ['logo2' => true])

@section('body_attribute')
  class="body-bg2"
@endsection

@section('header')
  @include('layouts.partials.loader')
  @include('layouts.partials.header.navbar2')
@endsection

@section('content')
  <!-- ===== HERO AREA STARTS ======= -->
  <div class="hero2-section-area" style="background-image: url(/img/all-images/bg/hero-bg3.png);">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
      <div class="hero2-header heading3">
        <h5 data-aos="fade-left" data-aos-duration="800"><img src="/img/icons/sub-logo2.svg" alt="" />Create your Dream Project With Us</h5>
        <div class="space24"></div>
        <h1 class="text-anime-style-3">Experience With BPO Call Centre Solutions</h1>
        <div class="space18"></div>
        <p data-aos="fade-left" data-aos-duration="900">Outsourcing your call centre operations can revolutionize the way manage customer support, with our expert an team handling every.</p>
        <div class="space32"></div>
        <div class="counter-boxarea">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-duration="800">
          <div class="counter-box">
            <h2><span class="counter">200</span>K</h2>
            <div class="space16"></div>
            <p>Happy Customer</p>
          </div>
          </div>

          <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-duration="900">
          <div class="counter-box">
            <h2><span class="counter">20</span>+</h2>
            <div class="space16"></div>
            <p>Years Experience</p>
          </div>
          </div>

          <div class="col-lg-4 col-md-4" data-aos="zoom-in" data-aos-duration="1000">
          <div class="space30 d-md-none d-block"></div>
          <div class="counter-box box2">
            <h2><span class="counter">24</span>/<span class="counter">7</span></h2>
            <div class="space16"></div>
            <p>Customer Support</p>
          </div>
          </div>
        </div>
        </div>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
        <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn3"><span class="demo">Boost Your Customer Support</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <div class="col-lg-6">
      <div class="hero2-images-area">
        <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="images">
          <div class="img1 reveal">
            <img src="/img/all-images/hero/hero-img2.png" alt="" />
          </div>
          <div class="space30"></div>
          <div class="arrow-circle text-end">
            <a href="#">
            <img src="/img/elements/elements20.png" alt="" class="elements20 keyframe5" />
            <img src="/img/icons/arrow1.svg" alt="" class="arrow1" />
            </a>
          </div>
          <img src="/img/elements/elements19.png" alt="" class="elements19" />
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="img2 reveal">
          <img src="/img/all-images/hero/hero-img3.png" alt="" />
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== ABOUT AREA STARTS ======= -->
  <div class="about2-section-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
      <div class="about2-header text-center heading4 space-margin60">
        <h5><img src="/img/icons/sub-logo2.svg" alt="" />Why Choose Us</h5>
        <div class="space20"></div>
        <h2 class="text-anime-style-3">Customer Service That Scales Your Business</h2>
      </div>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-4 col-md-6 d-lg-block d-none">
      <div class="about-list-box box1">
        <span><i class="fa-solid fa-check"></i></span>
        Significant Cost Savings
      </div>
      <div class="space56"></div>
      <div class="about-list-box box2">
        <span><i class="fa-solid fa-check"></i></span>
        24/7 Customer Support
      </div>
      <div class="space56"></div>
      <div class="about-list-box box3">
        <span><i class="fa-solid fa-check"></i></span>
        Onboarding A Integration
      </div>
      </div>
      <div class="col-lg-4">
      <div class="about-images">
        <div class="img1 reveal">
        <img src="/img/all-images/about/about-img4.png" alt="" />
        </div>
        <img src="/img/elements/elements23.png" alt="" class="elements10" />
      </div>
      <div class="space30 d-lg-none d-block"></div>
      </div>

      <div class="col-lg-4 col-md-6 d-lg-none d-block">
      <div class="about-list-box box1">
        <span><i class="fa-solid fa-check"></i></span>
        Significant Cost Savings
      </div>
      <div class="space56"></div>
      <div class="about-list-box box2">
        <span><i class="fa-solid fa-check"></i></span>
        24/7 Customer Support
      </div>
      <div class="space56"></div>
      <div class="about-list-box box3">
        <span><i class="fa-solid fa-check"></i></span>
        Onboarding A Integration
      </div>
      <div class="space56 d-lg-none d-block"></div>
      </div>
      <div class="col-lg-4 col-md-6">
      <div class="about-list-box2 box1">
        <span><i class="fa-solid fa-check"></i></span>
        Enhance Brand Reputation
      </div>
      <div class="space56"></div>
      <div class="about-list-box2 box2">
        <span><i class="fa-solid fa-check"></i></span>
        Flexible Contract Terms
      </div>
      <div class="space56"></div>
      <div class="about-list-box2 box3">
        <span><i class="fa-solid fa-check"></i></span>
        Omni-Channel Support
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== ABOUT AREA ENDS ======= -->

  <!-- ===== WORK AREA STARTS ======= -->
  <div class="work2-section-area sp1">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
      <div class="soultions-images">
        <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="img1 reveal">
          <img src="/img/all-images/work/work-img3.png" alt="" />
          </div>
          <div class="arrow-circle text-end">
          <a href="#">
            <img src="/img/elements/elements20.png" alt="" class="elements20 keyframe5" />
            <img src="/img/icons/arrow1.svg" alt="" class="arrow1" />
          </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="img2">
          <div class="star">
            <img src="/img/elements/elements22.png" alt="" class="keyframe5" />
          </div>
          <div class="space100"></div>
          <div class="img reveal">
            <img src="/img/all-images/work/work-img4.png" alt="" />
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-5">
      <div class="solution-header heading4">
        <h5><span><img src="/img/icons/sub-logo2.svg" alt="" /></span>How We Do</h5>
        <div class="space24"></div>
        <h2 class="text-anime-style-3">Customer Service That Scales A Your Business</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="800">Business Process Outsourcing (BPO) streamline enhance customer interactions, understanding nuances effective.</p>
        <div class="space24"></div>
        <div class="bg-progress" data-aos="fade-left" data-aos-duration="900">
        <div class="progress-bar">
          <label>It Solution <span>98%</span></label>
          <div class="progress">
          <div class="progress-inner" style="width: 98%;"></div>
          </div>
        </div>

        <div class="progress-bar">
          <label>Cyber Security <span>99%</span></label>
          <div class="progress">
          <div class="progress-inner" style="width: 99%;"></div>
          </div>
        </div>

        <div class="progress-bar">
          <label>Cloud Solution <span>99%</span></label>
          <div class="progress">
          <div class="progress-inner" style="width: 99%;"></div>
          </div>
        </div>
        </div>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
        <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn3"><span class="demo">Boost Your Customer Support</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== WORK AREA ENDS ======= -->

  <!-- ===== SERVICE AREA STARTS ======= -->
  <div class="service2-section-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
      <div class="service-header text-center heading4 space-margin60">
        <h5><img src="/img/icons/sub-logo2.svg" alt="" />Our Services</h5>
        <div class="space20"></div>
        <h2 class="text-anime-style-3">We Have The Best Experts <br class="d-lg-block d-none" /> To Elevate Your Business</h2>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-10 m-auto">
      <div class="service-widgets-section">
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="service-boxarea">
            <div class="icons" data-aos="fade-left" data-aos-duration="700">
              <img src="/img/icons/service-icon7.svg" alt="" />
            </div>
            <div class="space28"></div>
            <div class="content-area">
              <h3 data-aos="fade-left" data-aos-duration="800">24/7 Call Handling</h3>
              <div class="space16"></div>
              <p data-aos="fade-left" data-aos-duration="900">We provide round-the-clock support for all your inbound and outbound call needs, ensuring that no customer query going on the unanswered.</p>
              <div class="space28"></div>
              <div class="btn-area" data-aos="fade-left" data-aos-duration="1000">
              <a href="{{ route('second', ['services', 'service']) }}" class="vl-btn3"><span class="demo">Learn More</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="images-area">
            <div class="img1 reveal">
              <img src="/img/all-images/service/service-img1.png" alt="" />
            </div>
            <div class="arrow-circle text-end">
              <a href="#">
              <img src="/img/elements/elements20.png" alt="" class="elements20 keyframe5" />
              <img src="/img/icons/arrow1.svg" alt="" class="arrow1" />
              </a>
            </div>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="service-boxarea">
            <div class="icons" data-aos="fade-left" data-aos-duration="700">
              <img src="/img/icons/service-icon8.svg" alt="" />
            </div>
            <div class="space28"></div>
            <div class="content-area">
              <h3 data-aos="fade-left" data-aos-duration="800">Live Chat Support</h3>
              <div class="space16"></div>
              <p data-aos="fade-left" data-aos-duration="900">We provide round-the-clock support for all your inbound and outbound call needs, ensuring that no customer query going on the unanswered.</p>
              <div class="space28"></div>
              <div class="btn-area" data-aos="fade-left" data-aos-duration="1000">
              <a href="{{ route('second', ['services', 'service']) }}" class="vl-btn3"><span class="demo">Learn More</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="images-area">
            <div class="img1 reveal">
              <img src="/img/all-images/service/service-img1.png" alt="" />
            </div>
            <div class="arrow-circle text-end">
              <a href="#">
              <img src="/img/elements/elements20.png" alt="" class="elements20 keyframe5" />
              <img src="/img/icons/arrow1.svg" alt="" class="arrow1" />
              </a>
            </div>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="service-boxarea">
            <div class="icons" data-aos="fade-left" data-aos-duration="700">
              <img src="/img/icons/service-icon9.svg" alt="" />
            </div>
            <div class="space28"></div>
            <div class="content-area">
              <h3 data-aos="fade-left" data-aos-duration="800">Lead Generation</h3>
              <div class="space16"></div>
              <p data-aos="fade-left" data-aos-duration="900">We provide round-the-clock support for all your inbound and outbound call needs, ensuring that no customer query going on the unanswered.</p>
              <div class="space28"></div>
              <div class="btn-area" data-aos="fade-left" data-aos-duration="1000">
              <a href="{{ route('second', ['services', 'service']) }}" class="vl-btn3"><span class="demo">Learn More</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="images-area">
            <div class="img1 reveal">
              <img src="/img/all-images/service/service-img1.png" alt="" />
            </div>
            <div class="arrow-circle text-end">
              <a href="#">
              <img src="/img/elements/elements20.png" alt="" class="elements20 keyframe5" />
              <img src="/img/icons/arrow1.svg" alt="" class="arrow1" />
              </a>
            </div>
            </div>
          </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab" tabindex="0">
          <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="service-boxarea">
            <div class="icons" data-aos="fade-left" data-aos-duration="700">
              <img src="/img/icons/service-icon10.svg" alt="" />
            </div>
            <div class="space28"></div>
            <div class="content-area">
              <h3 data-aos="fade-left" data-aos-duration="800">Professional Staff</h3>
              <div class="space16"></div>
              <p data-aos="fade-left" data-aos-duration="900">We provide round-the-clock support for all your inbound and outbound call needs, ensuring that no customer query going on the unanswered.</p>
              <div class="space28"></div>
              <div class="btn-area" data-aos="fade-left" data-aos-duration="1000">
              <a href="{{ route('second', ['services', 'service']) }}" class="vl-btn3"><span class="demo">Learn More</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5">
            <div class="images-area">
            <div class="img1 reveal">
              <img src="/img/all-images/service/service-img1.png" alt="" />
            </div>
            <div class="arrow-circle text-end">
              <a href="#">
              <img src="/img/elements/elements20.png" alt="" class="elements20 keyframe5" />
              <img src="/img/icons/arrow1.svg" alt="" class="arrow1" />
              </a>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
        <div class="space80"></div>
        <div class="tabs-btn-area">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            <span><img src="/img/icons/service-icon7.svg" alt="" /></span>
            24/7 Call Handling
          </button>
          </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            <span><img src="/img/icons/service-icon8.svg" alt="" /></span>
            Live Chat Support
          </button>
          </li>
          <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            <span><img src="/img/icons/service-icon9.svg" alt="" /></span>
            Lead Generation
          </button>
          </li>

          <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">
            <span><img src="/img/icons/service-icon10.svg" alt="" /></span>
            Professional Staff
          </button>
          </li>
        </ul>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== SERVICE AREA ENDS ======= -->

  <!-- ===== TESTIMONIAL AREA STARTS ======= -->
  <div class="testimonial2-section-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
      <div class="testimonial-header text-center heading4 space-margin60">
        <h5><span><img src="/img/icons/sub-logo2.svg" alt="" /></span>Testimonials</h5>
        <div class="space20"></div>
        <h2 class="text-anime-style-3">What Our Clients Say</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5">
      <div class="img1 image-anime reveal">
        <img src="/img/all-images/testimonial/testimonial-img6.png" alt="" />
      </div>
      </div>

      <div class="col-lg-6">
      <div class="slider-galeria-h2">
        <div class="testimonial-slider-content-area">
        <div class="testimonial-author-area">
          <ul>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          </ul>
          <div class="space16"></div>
          <img src="/img/icons/quito2.svg" alt="" class="quito2" />
          <img src="/img/elements/elements21.png" alt="" class="elements21" />
          <h4>Outstanding Service And 24/7 Support</h4>
          <div class="space12"></div>
          <p>“We’ve been working with Eitech for over two years, an their 24/7 customer service has been a game-changer for us. They handle our inbound calls professionally and always ensure our customers are happy their ability.”</p>
        </div>
        <div class="space60"></div>
        <div class="testimonial-man-info-area">
          <div class="man-images-text">
          <div class="mans-img">
            <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
          </div>
          <div class="man-text">
            <a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a>
            <div class="space12"></div>
            <p>Owner Taxfirm</p>
          </div>
          </div>
          <img src="/img/elements/elements17.png" alt="" class="elements17" />
        </div>
        </div>

        <div class="testimonial-slider-content-area">
        <div class="testimonial-author-area">
          <ul>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          </ul>
          <div class="space16"></div>
          <img src="/img/icons/quito2.svg" alt="" class="quito2" />
          <img src="/img/elements/elements21.png" alt="" class="elements21" />
          <p>“We’ve been working with Eitech for over two years, an their 24/7 customer service has been a game-changer for us. They handle our inbound calls professionally and always ensure our customers are happy their ability.”</p>
        </div>
        <div class="space60"></div>
        <div class="testimonial-man-info-area">
          <div class="man-images-text">
          <div class="mans-img">
            <img src="/img/all-images/testimonial/testimonial-img3.png" alt="" />
          </div>
          <div class="man-text">
            <a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a>
            <div class="space12"></div>
            <p>Owner Taxfirm</p>
          </div>
          </div>
          <img src="/img/elements/elements17.png" alt="" class="elements17" />
        </div>
        </div>

        <div class="testimonial-slider-content-area">
        <div class="testimonial-author-area">
          <ul>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          </ul>
          <div class="space16"></div>
          <img src="/img/icons/quito2.svg" alt="" class="quito2" />
          <img src="/img/elements/elements21.png" alt="" class="elements21" />
          <p>“We’ve been working with Eitech for over two years, an their 24/7 customer service has been a game-changer for us. They handle our inbound calls professionally and always ensure our customers are happy their ability.”</p>
        </div>
        <div class="space60"></div>
        <div class="testimonial-man-info-area">
          <div class="man-images-text">
          <div class="mans-img">
            <img src="/img/all-images/testimonial/testimonial-img4.png" alt="" />
          </div>
          <div class="man-text">
            <a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a>
            <div class="space12"></div>
            <p>Owner Taxfirm</p>
          </div>
          </div>
          <img src="/img/elements/elements17.png" alt="" class="elements17" />
        </div>
        </div>

        <div class="testimonial-slider-content-area">
        <div class="testimonial-author-area">
          <ul>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          </ul>
          <div class="space16"></div>
          <img src="/img/icons/quito2.svg" alt="" class="quito2" />
          <img src="/img/elements/elements21.png" alt="" class="elements21" />
          <p>“We’ve been working with Eitech for over two years, an their 24/7 customer service has been a game-changer for us. They handle our inbound calls professionally and always ensure our customers are happy their ability.”</p>
        </div>
        <div class="space60"></div>
        <div class="testimonial-man-info-area">
          <div class="man-images-text">
          <div class="mans-img">
            <img src="/img/all-images/testimonial/testimonial-img5.png" alt="" />
          </div>
          <div class="man-text">
            <a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a>
            <div class="space12"></div>
            <p>Owner Taxfirm</p>
          </div>
          </div>
          <img src="/img/elements/elements17.png" alt="" class="elements17" />
        </div>
        </div>

        <div class="testimonial-slider-content-area">
        <div class="testimonial-author-area">
          <ul>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          <li>
            <a href=""><i class="fa-solid fa-star"></i></a>
          </li>
          </ul>
          <div class="space16"></div>
          <img src="/img/icons/quito2.svg" alt="" class="quito2" />
          <img src="/img/elements/elements21.png" alt="" class="elements21" />
          <p>“We’ve been working with Eitech for over two years, an their 24/7 customer service has been a game-changer for us. They handle our inbound calls professionally and always ensure our customers are happy their ability.”</p>
        </div>
        <div class="space60"></div>
        <div class="testimonial-man-info-area">
          <div class="man-images-text">
          <div class="mans-img">
            <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
          </div>
          <div class="man-text">
            <a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a>
            <div class="space12"></div>
            <p>Owner Taxfirm</p>
          </div>
          </div>
          <img src="/img/elements/elements17.png" alt="" class="elements17" />
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-1">
      <div class="slider-galeria-thumbs-h2 text-center d-lg-block d-none">
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img3.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img4.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img5.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
        </div>

        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img3.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img4.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img5.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
        </div>

        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img3.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img4.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img5.png" alt="" />
        </div>
        <div class="testimonial3-sliders-img-h2">
        <img src="/img/all-images/testimonial/testimonial-img2.png" alt="" />
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== TESTIMONIAL AREA ENDS ======= -->

  <!-- ===== TEAM AREA STARTS ======= -->
  <div class="team2-section-area sp2">
    <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
      <div class="team-header space-margin60 heading4 text-center">
        <h5><span><img src="/img/icons/sub-logo2.svg" alt="" /></span>Our Team</h5>
        <div class="space20"></div>
        <h2 class="text-anime-style-3">Meet Our Expert Team</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="800">
      <div class="team-author-boxarea">
        <div class="img1 image-anime">
        <img src="/img/all-images/team/team-img4.png" alt="" />
        </div>
        <div class="content-area">
        <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Alex Robertson</a>
          <div class="space8"></div>
          <p>Founder - CEO</p>
        </div>
        </div>
        <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="#" class="m-0"><i class="fa-brands fa-linkedin-in"></i></a>
        </li>
        </ul>
      </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
      <div class="team-author-boxarea">
        <div class="img1 image-anime">
        <img src="/img/all-images/team/team-img5.png" alt="" />
        </div>
        <div class="content-area">
        <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Ayesha Khanam</a>
          <div class="space8"></div>
          <p>Problem Solver</p>
        </div>
        </div>
        <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="#" class="m-0"><i class="fa-brands fa-linkedin-in"></i></a>
        </li>
        </ul>
      </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
      <div class="team-author-boxarea">
        <div class="img1 image-anime">
        <img src="/img/all-images/team/team-img6.png" alt="" />
        </div>
        <div class="content-area">
        <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Shakib Al Hasan</a>
          <div class="space8"></div>
          <p>Problem Solver</p>
        </div>
        </div>
        <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="#" class="m-0"><i class="fa-brands fa-linkedin-in"></i></a>
        </li>
        </ul>
      </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
      <div class="team-author-boxarea">
        <div class="img1 image-anime">
        <img src="/img/all-images/team/team-img7.png" alt="" />
        </div>
        <div class="content-area">
        <div class="text">
          <a href="{{ route('second', ['pages', 'team']) }}">Sofia Hernandez</a>
          <div class="space8"></div>
          <p>Problem Solver</p>
        </div>
        </div>
        <ul>
        <li>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="#" class="m-0"><i class="fa-brands fa-linkedin-in"></i></a>
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== TEAM AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-2-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
      <div class="vl-blog-1-section-box heading4 text-center space-margin60">
        <h5 class="vl-section-subtitle"><span><img src="/img/icons/sub-logo2.svg" alt="" /></span>Our Latest Blogs</h5>
        <div class="space20"></div>
        <h2 class="vl-section-title text-anime-style-3">Stay Informed With Our Blog</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="fade-left" data-aos-duration="900">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img3.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 4 August 2024</a>
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
        <img src="/img/all-images/blog/blog-img4.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 5 August 2024</a>
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
        <img src="/img/all-images/blog/blog-img5.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 6 August 2024</a>
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
  <div class="cta2-section-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-5">
      <div class="cta-header heading1">
        <h2 data-aos="fade-left" data-aos-duration="700">Transform Your IT Today-Speak with Our Experts!</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="800">Ready to take your business to the next level with cutting-edge IT solutions? Our team is here to help you transform.</p>
        <div class="space24"></div>
        <form data-aos="fade-left" data-aos-duration="900">
        <input type="text" placeholder="Email Address" />
        <button type="submit" class="vl-btn3"><span class="demo">Subscribe</span><span class="arrow"><i class="fa-solid fa-arrow-right"></i></span></button>
        </form>
      </div>
      </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-4">
      <div class="cta-images">
        <img src="/img/elements/elements7.png" alt="" class="elements7 keyframe5" />
        <div class="img1">
        <img src="/img/all-images/cta/cta-img2.png" alt="" />
        </div>
        <ul class="aniamtion-key-1">
        <li>
          <a href="#"><img src="/img/icons/check2.svg" alt="" />IT Solution Services</a>
        </li>
        <li>
          <a href="#"><img src="/img/icons/check2.svg" alt="" />Cyber Security Services</a>
        </li>
        <li>
          <a href="#"><img src="/img/icons/check2.svg" alt="" />Software Development</a>
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== CTA AREA ENDS ======= -->

  <!-- ===== FOOTER AREA STARTS ======= -->
  <div class="vl-footer2-section-area sp8">
    <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
      <div class="footer-logo1">
        <img src="/img/logo/logo1.png" alt="" />
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
          <a href="about.html">About Us</a>
        </li>
        <li>
          <a href="service.html">It Solution</a>
        </li>
        <li>
          <a href="blog1.html">Our Blog</a>
        </li>
        <li>
          <a href="#">Pricing Plan</a>
        </li>
        <li>
          <a href="contact.html">Contact Us</a>
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