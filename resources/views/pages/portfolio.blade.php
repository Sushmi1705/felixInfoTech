@extends('layouts.landing')

@section('content')
  <!--===== HERO AREA STARTS =======-->
  <div class="inner-page-hero-area" style="background-image: url(/img/all-images/bg/slide1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements5.png" alt="" class="elements5">
    <img src="/img/elements/elements4.png" alt="" class="elements4">
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5">
    <img src="/img/elements/elements16.png" alt="" class="elements16">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="inner-header text-center heading1">
            <h1>Our Portfolio</h1>
            <div class="space28"></div>
            <a href="{{ route('any', 'index') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Portfolio</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== PORTFOLIO INTRO STARTS =======-->
  <div class="about1-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-header-area heading2">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt=""></span>Our Work</h5>
            <div class="space24"></div>
            <h2 class="text-anime-style-3">Showcasing Excellence in Technology Solutions</h2>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="800">At Felix Infotech, we take pride in delivering innovative ICT, Software, and Cloud solutions that drive business success. Explore our portfolio of successful projects across various industries.</p>
            <div class="space32"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
              <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn2">Start Your Project <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="img1 reveal image-anime">
            <img src="/img/all-images/about/about-img1.png" alt="Felix Portfolio" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== PORTFOLIO INTRO ENDS =======-->

  <!--===== PORTFOLIO CATEGORIES STARTS =======-->
  <div class="service1-section-area sp2" style="background-image:url(/img/all-images/bg/service-bg1.png)">
    <div class="container">
      <div class="service-header text-center heading2 space-margin60">
        <h5><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Project Categories</h5>
        <h2 class="text-anime-style-3">Our Expertise Across Industries</h2>
      </div>

      <!-- Portfolio Filter Tabs -->
      <div class="row">
        <div class="col-lg-12">
          <div class="portfolio-filter text-center space-margin40">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="ict">ICT Solutions</button>
            <button class="filter-btn" data-filter="software">Software Solutions</button>
            <button class="filter-btn" data-filter="cloud">Cloud & Data Centre</button>
          </div>
        </div>
      </div>

      <!-- Portfolio Grid -->
      <div class="row portfolio-grid">
        <!-- ICT Solutions Projects -->
        <div class="col-lg-4 col-md-6 portfolio-item ict" data-aos="fade-up" data-aos-duration="800">
          <div class="service1-boxarea portfolio-box">
            <div class="portfolio-image">
              <img src="/img/all-images/work/work-img1.png" alt="Network Infrastructure" />
              <div class="portfolio-overlay">
                <div class="portfolio-content">
                  <h4>Enterprise Network Setup</h4>
                  <p>Complete LAN/WAN infrastructure for 500+ employee organization</p>
                  <a href="#" class="portfolio-link"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4>Network Infrastructure</h4>
              <p>Banking Sector</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item ict" data-aos="fade-up" data-aos-duration="1000">
          <div class="service1-boxarea portfolio-box">
            <div class="portfolio-image">
              <img src="/img/all-images/work/work-img2.png" alt="CCTV Solutions" />
              <div class="portfolio-overlay">
                <div class="portfolio-content">
                  <h4>Smart CCTV System</h4>
                  <p>AI-powered surveillance system with 200+ cameras</p>
                  <a href="#" class="portfolio-link"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4>CCTV Solutions</h4>
              <p>Manufacturing Industry</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item software" data-aos="fade-up" data-aos-duration="1200">
          <div class="service1-boxarea portfolio-box">
            <div class="portfolio-image">
              <img src="/img/all-images/about/about-img2.png" alt="Custom Software" />
              <div class="portfolio-overlay">
                <div class="portfolio-content">
                  <h4>ERP Implementation</h4>
                  <p>Custom ERP solution for inventory and finance management</p>
                  <a href="#" class="portfolio-link"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4>Custom Software Development</h4>
              <p>Retail Chain</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item cloud" data-aos="fade-up" data-aos-duration="800">
          <div class="service1-boxarea portfolio-box">
            <div class="portfolio-image">
              <img src="/img/all-images/about/about-img3.png" alt="Cloud Migration" />
              <div class="portfolio-overlay">
                <div class="portfolio-content">
                  <h4>Cloud Migration Project</h4>
                  <p>Complete infrastructure migration to AWS cloud platform</p>
                  <a href="#" class="portfolio-link"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4>Cloud Migration</h4>
              <p>Healthcare Sector</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item software" data-aos="fade-up" data-aos-duration="1000">
          <div class="service1-boxarea portfolio-box">
            <div class="portfolio-image">
              <img src="/img/all-images/about/about-img13.png" alt="Mobile App" />
              <div class="portfolio-overlay">
                <div class="portfolio-content">
                  <h4>Mobile Application</h4>
                  <p>Cross-platform mobile app with 50K+ downloads</p>
                  <a href="#" class="portfolio-link"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4>Mobile App Development</h4>
              <p>E-commerce Platform</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item ict" data-aos="fade-up" data-aos-duration="1200">
          <div class="service1-boxarea portfolio-box">
            <div class="portfolio-image">
              <img src="/img/all-images/about/about-img14.png" alt="Data Center" />
              <div class="portfolio-overlay">
                <div class="portfolio-content">
                  <h4>Data Center Setup</h4>
                  <p>Tier-3 data center with 99.9% uptime guarantee</p>
                  <a href="#" class="portfolio-link"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4>Data Center Solutions</h4>
              <p>Financial Services</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== PORTFOLIO CATEGORIES ENDS =======-->

  <!--===== STATS AREA STARTS =======-->
  <div class="work1-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="team-header space-margin60 heading2 text-center">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt=""></span>Our Achievements</h5>
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Portfolio Statistics</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="800">
          <div class="work-counter-boxarea text-center">
            <h3>500+</h3>
            <p>Projects Completed</p>
          </div>
        </div>
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1000">
          <div class="work-counter-boxarea text-center">
            <h3>700+</h3>
            <p>Happy Clients</p>
          </div>
        </div>
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1200">
          <div class="work-counter-boxarea text-center">
            <h3>99.9%</h3>
            <p>Success Rate</p>
          </div>
        </div>
        <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1400">
          <div class="work-counter-boxarea text-center">
            <h3>24/7</h3>
            <p>Support Available</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== STATS AREA ENDS =======-->

  <!--===== CTA AREA STARTS =======-->
  <div class="about1-section-area sp1" style="background:#f9f9f9;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="about-header-area heading2">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt=""></span>Ready to Start?</h5>
            <div class="space24"></div>
            <h2 class="text-anime-style-3">Let's Build Your Next Success Story</h2>
            <div class="space16"></div>
            <p>Join our portfolio of successful projects. Contact Felix Infotech today to discuss your technology requirements and get a customized solution.</p>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="btn-area1">
            <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn2">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CTA AREA ENDS =======-->

  <!-- Portfolio Filter JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterBtns = document.querySelectorAll('.filter-btn');
      const portfolioItems = document.querySelectorAll('.portfolio-item');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          // Remove active class from all buttons
          filterBtns.forEach(b => b.classList.remove('active'));
          // Add active class to clicked button
          this.classList.add('active');

          const filterValue = this.getAttribute('data-filter');

          portfolioItems.forEach(item => {
            if (filterValue === 'all' || item.classList.contains(filterValue)) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

  <style>
    .portfolio-filter {
      margin-bottom: 40px;
    }
    .filter-btn {
      background: transparent;
      border: 2px solid #ddd;
      padding: 10px 20px;
      margin: 0 10px;
      border-radius: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .filter-btn.active,
    .filter-btn:hover {
      background: #0066b6;
      color: white;
      border-color: #0066b6;
    }
    .portfolio-box {
      position: relative;
      overflow: hidden;
      margin-bottom: 30px;
    }
    .portfolio-image {
      position: relative;
      overflow: hidden;
    }
    .portfolio-image img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .portfolio-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #0066b6;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .portfolio-box:hover .portfolio-overlay {
      opacity: 1;
    }
    .portfolio-box:hover .portfolio-image img {
      transform: scale(1.1);
    }
    .portfolio-content {
      text-align: center;
      color: white;
      padding: 20px;
    }
    .portfolio-content h4 {
      margin-bottom: 10px;
    }
    .portfolio-link {
      display: inline-block;
      margin-top: 15px;
      color: white;
      font-size: 20px;
    }
    .portfolio-info {
      padding: 20px;
      text-align: center;
    }
    .portfolio-info h4 {
      margin-bottom: 5px;
      color: #333;
    }
    .portfolio-info p {
      color: #666;
      margin: 0;
    }
    .work-counter-boxarea {
      padding: 30px 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .work-counter-boxarea h3 {
      font-size: 48px;
      font-weight: bold;
      color: #0066b6;
      margin-bottom: 10px;
    }
    .work-counter-boxarea p {
      color: #666;
      margin: 0;
    }
  </style>
@endsection