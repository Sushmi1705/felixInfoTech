@extends('layouts.landing')

@section('content')
  <!-- ===== HERO AREA STARTS ======= -->
  <div class="inner-page-hero-area" style="background-image: url(/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements5.png" alt="" class="elements5" />
    <img src="/img/elements/elements4.png" alt="" class="elements4" />
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5" />
    <img src="/img/elements/elements16.png" alt="" class="elements16" />

    <div class="container">
      <div class="row">
        <div class="col-lg-4 m-auto">
          <div class="inner-header text-center heading1">
            <h1>Our Services</h1>
            <div class="space28"></div>
            <a href="{{ route('any' , 'index') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Our Services</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== SERVICE AREA STARTS ======= -->
  <div class="service1-section-area sp2">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon1.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Cyber Security Solution</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>01</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon2.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Scalable Cloud Solutions</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>02</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon3.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Data Protection Services</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>03</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1100">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon4.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Optimization Management</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>04</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon5.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">HelpDesk 360 Solutions</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>05</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1300">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon6.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Software Development</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>06</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon4.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Cyber Security Solution</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>07</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon5.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Scalable Cloud Solutions</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>08</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon6.svg" alt="" />
            </div>
            <div class="arrow">
              <a href="{{ route('second', ['services', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="{{ route('second', ['services', 'single']) }}">Data Protection Services</a>
            <div class="space16"></div>
            <p>Our advanced cybersecurity solution designed to protect against ever- an evolving threats, approach ensures.</p>
            <div class="space24"></div>
            <h5>09</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== SERVICE AREA ENDS ======= -->

  <!-- ===== ABOUT AREA STARTS ======= -->
  <div class="about6-section-area-widget sp1" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="about6-header heading2 bg-heading">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>our mission/vision</h5>
            <div class="space18"></div>
            <h2 class="text-anime-style-3">Driving Innovation: Our Mission Vision at Eitech</h2>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="900">At the of innovation, our cutting-edge IT solutions are designed transform your business ETech operations.</p>
            <div class="space24"></div>
            <div class="about-boxarea" data-aos="fade-left" data-aos-duration="1000">
              <div class="icons">
                <img src="/img/icons/service-icon2.svg" alt="" />
              </div>
              <div class="content-area">
                <a href="{{ route('second', ['services', 'single']) }}">Network Infrastructure Solutions</a>
                <div class="space16"></div>
                <p>In today’s fast-paced world, technology is the backbone of success. Our comprehensive IT.</p>
              </div>
            </div>
            <div class="space24"></div>
            <div class="about-boxarea" data-aos="fade-left" data-aos-duration="1100">
              <div class="icons">
                <img src="/img/icons/service-icon5.svg" alt="" />
              </div>
              <div class="content-area">
                <a href="{{ route('second', ['services', 'single']) }}">Performance Tailored IT Services</a>
                <div class="space16"></div>
                <p>Our tailored IT services are crafted to meet your unique business needs, ensuring that.</p>
              </div>
            </div>
            <div class="space32"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
              <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn2">See How We Can Help<i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
          <div class="images-area">
            <img src="/img/elements/elements27.png" alt="" class="elements27" />
            <div class="img1 image-anime reveal">
              <img src="/img/all-images/about/about-img13.png" alt="" />
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="img1 image-anime reveal">
                  <div class="space30"></div>
                  <img src="/img/all-images/about/about-img14.png" alt="" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="img1 image-anime reveal">
                  <div class="space30"></div>
                  <img src="/img/all-images/about/about-img15.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== ABOUT AREA ENDS ======= -->
@endsection
