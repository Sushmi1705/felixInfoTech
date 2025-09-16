@extends('layouts.base', ['logo4' => true])

@section('header')
  @include('layouts.partials.loader')
  @include('layouts.partials.header-single.navbar5')
@endsection

@section('content')
  <!-- ===== HERO AREA STARTS ======= -->
  <div class="hero5-section-area" style="background-image: url(/img/all-images/bg/hero-bg6.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements44.png" alt="" class="elements44" />
    <img src="/img/elements/elements45.png" alt="" class="elements45" />
    <img src="/img/elements/elements46.png" alt="" class="elements46" />
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
      <div class="hero6-header heading7">
        <h5 data-aos="fade-left" data-aos-duration="800"><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Custom Mobile Application Solutions</h5>
        <div class="space16"></div>
        <h1 class="text-anime-style-3">Transform Your Vision In Mobile App Reality</h1>
        <div class="space24"></div>
        <p data-aos="fade-left" data-aos-duration="900">We specialize in creating, user-friendly mobile applications that drive results. Whether a need feature-rich app for iOS, Android.</p>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
        <a class="vl-btn6" href="{{ route('second', ['pages', 'contact']) }}">Start Your Project Now <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
        <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="play popup-youtube">
          <span class="icon"><i class="fa-solid fa-play"></i></span>
          <span class="text">Play Video</span>
        </a>
        </div>
      </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-3">
      <div class="img1 image-anime reveal">
        <img src="/img/all-images/hero/hero-img7.png" alt="" />
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
    <!-- ===== WORKS AREA STARTS ======= -->
    <div class="work5-section-area sp8">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="work-header text-center space-margin60 heading8">
        <h5>How We Work</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">We Create Digital Future</h2>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
        <div class="work-widget-boxes">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-duration="800">
          <div class="work-boxarea">
            <h5>Step 1</h5>
            <div class="space20"></div>
            <div class="icons">
            <img src="/img/icons/work1.svg" alt="" />
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">User Analytics</a>
          </div>
          </div>

          <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-duration="900">
          <div class="work-boxarea">
            <h5>Step 2</h5>
            <div class="space20"></div>
            <div class="icons">
            <img src="/img/icons/work2.svg" alt="" />
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Creative Design</a>
          </div>
          </div>

          <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-duration="1000">
          <div class="work-boxarea">
            <h5>Step 3</h5>
            <div class="space20"></div>
            <div class="icons">
            <img src="/img/icons/work3.svg" alt="" />
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Smart Coding</a>
          </div>
          </div>

          <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="work-boxarea box2">
            <h5>Step 4</h5>
            <div class="space20"></div>
            <div class="icons">
            <img src="/img/icons/work4.svg" alt="" />
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Online Support</a>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- ===== WORKS AREA ENDS ======= -->

    <!-- ===== ABOUT AREA STARTS ======= -->
    <div class="about5-section-area sp1" id="about">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1000">
        <div class="img1" style="background-image: url(/img/all-images/bg/about-bg3.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <img src="/img/all-images/about/about-img9.png" alt="" class="about-img9" />
        <img src="/img/all-images/about/about-img10.png" alt="" class="about-img10 aniamtion-key-1" />
        <img src="/img/elements/elements47.png" alt="" class="elements47" />
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="about5-header heading8">
        <h5 data-aos="fade-left" data-aos-duration="800">About Application Solution</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Application Solutions A Grow Business Quickly</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="900">We’re dedicated crafting cutting-edge mobile applications that elevate your business. Our skilled team of developers leverages latest technologies deliver seamless, scalable an secure apps iOS, Android cross-platform environments.</p>
        <div class="space32"></div>
        <div class="counter-boxarea">
          <div class="row">
          <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-duration="800">
            <div class="counter-box">
            <h2><span class="counter">98</span>%</h2>
            <div class="space16"></div>
            <p>Positive Rate</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-6" data-aos="zoom-in" data-aos-duration="900">
            <div class="counter-box">
            <h2><span class="counter">28</span>K</h2>
            <div class="space16"></div>
            <p>Download App</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-4" data-aos="zoom-in" data-aos-duration="1000">
            <div class="space30 d-md-none d-block"></div>
            <div class="counter-box box2">
            <h2><span class="counter">32</span>+</h2>
            <div class="space16"></div>
            <p>New Features</p>
            </div>
          </div>
          </div>
        </div>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
          <a class="vl-btn6" href="{{ route('second', ['pages', 'contact']) }}">Start Your Project Now <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- ===== ABOUT AREA ENDS ======= -->

    <!-- ===== SERVICE AREA STARTS ======= -->
    <div class="service5-section-area" id="service" style="background-image: url(/img/all-images/bg/hero-bg6.png); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="container">
      <div class="row">
      <div class="col-lg-6">
        <div class="service-header heading7 space-margin60">
        <h5><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Our Solution</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Our Best Bespoke Solution</h2>
        </div>
      </div>
      </div>

      <div class="row">
      <div class="col-lg-12">
        <div class="service5-slider-box owl-carousel">
        <div class="service-slider-box">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="space24"></div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Custom Edit Tool</a>
          <div class="space18"></div>
          <p>Design your page in real time and see the results instantly. Create an customize your all landing pages.</p>
          </div>
        </div>

        <div class="service-slider-box">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="space24"></div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Easy To Customize</a>
          <div class="space18"></div>
          <p>We bring your ideas to life with mobile applications designed to deliver results our team of expert.</p>
          </div>
        </div>

        <div class="service-slider-box">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="space24"></div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Built In Safety Chat</a>
          <div class="space18"></div>
          <p>Ensuring your app reaches its full potential on iOS, Android, or both. From the initial concept to post.</p>
          </div>
        </div>

        <div class="service-slider-box">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="space24"></div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Custom Edit Tool</a>
          <div class="space18"></div>
          <p>Design your page in real time and see the results instantly. Create an customize your all landing pages.</p>
          </div>
        </div>

        <div class="service-slider-box">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="space24"></div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Easy To Customize</a>
          <div class="space18"></div>
          <p>We bring your ideas to life with mobile applications designed to deliver results our team of expert.</p>
          </div>
        </div>

        <div class="service-slider-box">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="space24"></div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Built In Safety Chat</a>
          <div class="space18"></div>
          <p>Ensuring your app reaches its full potential on iOS, Android, or both. From the initial concept to post.</p>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- ===== SERVICE AREA ENDS ======= -->
    <div class="space80 d-lg-block d-none"></div>

    <!-- ===== ABOUT AREA STARTS ======= -->
    <div class="about6-section-area sp1" id="work">
    <div class="container">
      <div class="row">
      <div class="col-lg-5">
        <div class="about6-header heading8">
        <h5 data-aos="fade-left" data-aos-duration="800">About Application Solution</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">After Development How We Perform App On Live</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="900">With our expertise, you can confidently step into the mobile world an stay ahead competition with precision, innovation.</p>
        <div class="space24"></div>
        <div class="about-boxarea" data-aos="fade-left" data-aos-duration="1000">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Auto Update Features</a>
          <div class="space16"></div>
          <p>We focus on creating apps that only meet your immediate an needs but are scalable adaptable</p>
          </div>
        </div>
        <div class="space24"></div>
        <div class="about-boxarea" data-aos="fade-left" data-aos-duration="1100">
          <div class="icons">
          <img src="/img/icons/service-icon17.svg" alt="" />
          </div>
          <div class="content-area">
          <a href="{{ route('second', ['services', 'single']) }}">Enable Google Analytics</a>
          <div class="space16"></div>
          <p>We focus on creating apps that only meet your immediate an needs but are scalable adaptable</p>
          </div>
        </div>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
          <a class="vl-btn6" href="{{ route('second', ['pages', 'contact']) }}">Start Your Project Now <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-5">
        <div class="images">
        <div class="img1 reveal image-anime">
          <img src="/img/all-images/about/about-img11.png" alt="" />
        </div>
        <img src="/img/all-images/about/about-img12.png" alt="" class="about-img12 aniamtion-key-1" />
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- ===== ABOUT AREA ENDS ======= -->

    <!-- ===== TESTIMONIAL AREA STARTS ======= -->
    <div class="testimonial5-section-area sp1" id="testimonial" style="background-image: url(/img/all-images/bg/hero-bg6.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements46.png" alt="" class="elements46" />
    <div class="container">
      <div class="row">
      <div class="col-lg-5">
        <div class="testimonial-heading heading7 space-margin60">
        <h5><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Testimonials</h5>
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

    <!-- ===== FAQ AREA STARTS ======= -->
    <div class="faq5-section-area sp1" id="faq">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="faq-header text-center heading8 space-margin60">
        <h5>FAQ Question</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Frequently Asked Question</h2>
        </div>
      </div>
      </div>

      <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="faq-widget-area">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item" data-aos="fade-up" data-aos-duration="800">
          <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How long does it take to develop a mobile app?</button></h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>
              The timeline for app development depends on the complexity of the project, the features <br class="d-lg-block d-none" /> required, and the platforms you want target (iOS, Android, or both). On average, simple app.
            </p>
            </div>
          </div>
          </div>
          <div class="space32"></div>
          <div class="accordion-item" data-aos="fade-up" data-aos-duration="900">
          <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How much does it cost to develop a mobile app?</button></h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>
              The timeline for app development depends on the complexity of the project, the features <br class="d-lg-block d-none" /> required, and the platforms you want target (iOS, Android, or both). On average, simple app.
            </p>
            </div>
          </div>
          </div>
          <div class="space32"></div>
          <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
          <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do offer post-launch support and maintenance?</button></h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>
              The timeline for app development depends on the complexity of the project, the features <br class="d-lg-block d-none" /> required, and the platforms you want target (iOS, Android, or both). On average, simple app.
            </p>
            </div>
          </div>
          </div>
          <div class="space32"></div>
          <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
          <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Will my app work on both iOS and Android?</button></h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>
              The timeline for app development depends on the complexity of the project, the features <br class="d-lg-block d-none" /> required, and the platforms you want target (iOS, Android, or both). On average, simple app.
            </p>
            </div>
          </div>
          </div>
          <div class="space32"></div>
          <div class="accordion-item" data-aos="fade-up" data-aos-duration="1200">
          <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How do you ensure the security of the app?</button></h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <p>
              The timeline for app development depends on the complexity of the project, the features <br class="d-lg-block d-none" /> required, and the platforms you want target (iOS, Android, or both). On average, simple app.
            </p>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- ===== FAQ AREA ENDS ======= -->

    <!-- ===== CTA AREA STARTS ======= -->
    <div class="cta5-section-area" style="background-image: url(/img/all-images/bg/hero-bg6.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="cta-header heading7">
        <h5 data-aos="fade-left" data-aos-duration="800"><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Start Your Mobile App Journey Now</h5>
        <div class="space18"></div>
        <h2 class="text-anime-style-3">Let’s Build Somethings Amazing App Together</h2>
        <div class="space16"></div>
        <p data-aos="fade-left" data-aos-duration="900">Don’t let your mobile app idea stay on the drawing board. At ETech, we’re ready to bring your vision life innovative.</p>
        <div class="space32"></div>
        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
          <a class="vl-btn6" href="{{ route('second', ['pages', 'contact']) }}">Let’s Build Your App <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
          <a class="vl-btn6 btn2" href="{{ route('second', ['pages', 'contact']) }}">Start Project <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="images-area">
        <div class="row">
          <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1000">
          <div class="img1">
            <img src="/img/all-images/hero/hero-img7.png" alt="" />
          </div>
          <div class="space30 d-md-none d-block"></div>
          </div>
          <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1000">
          <div class="img2">
            <img src="/img/all-images/hero/hero-img7.png" alt="" />
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <!-- ===== CTA AREA ENDS ======= -->

    <!-- ===== FOOTER AREA STARTS ======= -->
    <div class="vl-footer5-section-area sp8">
    <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo1">
        <img src="/img/logo/logo6.png" alt="" />
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
  </div>
@endsection