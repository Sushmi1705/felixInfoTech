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
      <div class="col-lg-8 m-auto">
      <div class="inner-header text-center heading1">
        <h1>Optimizing IT For Solutions</h1>
        <div class="space28"></div>
        <a href="{{ route('any', 'index') }}">Home <i class="fa-solid fa-angle-right"></i> Case Study <i class="fa-solid fa-angle-right"></i> <span>Optimizing IT For Solutions</span></a>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== CASE AREA STARTS ======= -->
  <div class="case-single-section-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-4">
      <div class="case-widgets-area">
        <div class="search-area">
        <h3>Search</h3>
        <div class="space24"></div>
        <form>
          <input type="text" placeholder="Search..." />
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        </div>

        <div class="space30"></div>
        <div class="tags-area">
        <h3>Popular Tags</h3>
        <div class="space8"></div>
        <ul>
          <li>
          <a href="#">#TechSolution</a>
          </li>
          <li>
          <a href="#">#CloudComputing</a>
          </li>
        </ul>
        <ul>
          <li>
          <a href="#">#ManagedServices</a>
          </li>
          <li>
          <a href="#">#BusinessIT</a>
          </li>
        </ul>
        <ul>
          <li>
          <a href="#">#DataSecurity</a>
          </li>
          <li>
          <a href="#">#TechForBusiness</a>
          </li>
        </ul>
        <ul>
          <li>
          <a href="#">#TechUpgrades</a>
          </li>
          <li>
          <a href="#">#ITInfrastructure</a>
          </li>
        </ul>
        </div>

        <div class="space30"></div>
        <div class="contact-boxarea">
        <h3>Get A Free Quote</h3>
        <div class="space8"></div>
        <div class="input-area">
          <input type="text" placeholder="Your Name" />
        </div>
        <div class="input-area">
          <input type="email" placeholder="Email Address" />
        </div>
        <div class="input-area">
          <input type="number" placeholder="Phone Number" />
        </div>
        <div class="input-area">
          <textarea placeholder="Your Message"></textarea>
        </div>
        <div class="space4"></div>
        <div class="input-area text-end">
          <button type="submit" class="vl-btn2">Submit Now<i class="fa-solid fa-arrow-right"></i></button>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-8">
      <div class="case-sider-widget-area">
        <div class="img1 image-anime reveal">
        <img src="/img/all-images/case/case-img12.png" alt="" />
        </div>
        <div class="space32"></div>
        <h3>Optimizing IT For Solutions</h3>
        <div class="space20"></div>
        <p>Our case studies showcase the tangible impact of our IT solutions on businesses across various industries. From streamlining operations to enhancing security driving growth, these success stories highlight how tailored technology solutions can solve real-world.</p>
        <div class="space20"></div>
        <p>Implementing effective IT solutions brings a myriad of benefits that can transform the way your business operates. By streamlining processes and enhancing efficiency, these solutions help reduce operational costs while improving overall productivity, advanced.</p>
        <div class="space50"></div>
        <h3>Why Your Business Needs IT Solutions Now</h3>
        <div class="space20"></div>
        <p>Investing in IT solutions is crucial for businesses aiming thrive in a competitive solution landscape. These solutions not only streamline operations and enhance efficiency but significantly reduce costs, enabling companies to allocate resources more effectively.</p>
        <div class="space12"></div>
        <div class="row">
        <div class="col-lg-4 col-md-6">
          <ul class="list">
          <li>
            <img src="/img/icons/check1.png" alt="" />Increased Efficiency
          </li>
          <li>
            <img src="/img/icons/check1.png" alt="" />Access To Expertise
          </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6">
          <ul class="list">
          <li>
            <img src="/img/icons/check1.png" alt="" />Enhanced Security
          </li>
          <li>
            <img src="/img/icons/check1.png" alt="" />Custom It Solutions
          </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6">
          <ul class="list">
          <li>
            <img src="/img/icons/check1.png" alt="" />Business Continuity
          </li>
          <li>
            <img src="/img/icons/check1.png" alt="" />Seamless Integration
          </li>
          </ul>
        </div>
        </div>
        <div class="space50"></div>
        <h3>Maximize Efficiency Security with IT Solutions</h3>
        <div class="space20"></div>
        <p>The flexibility and scalability of modern IT infrastructure allow organizations to adapt to changing market demands quickly, ensuring they remain agile responsive. By leveraging data-driven insights, companies can make informed decisions that best drive growth.</p>
        <div class="space28"></div>
        <div class="bg-progress">
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
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== CASE AREA ENDS ======= -->

  <!-- ===== CASE AREA STARTS ======= -->
  <div class="case-inner-area sp2" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
      <div class="heading2 space-margin60 text-center">
        <h2>View More Case Studies</h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
      <div class="case-slider-boxarea">
        <div class="img1 image-anime">
        <img src="/img/all-images/case/case-img1.png" alt="" />
        </div>
        <div class="content-area">
        <p>#CloudFlex Solution</p>
        <div class="space16"></div>
        <a href="{{ route('second', ['case-study', 'single']) }}">Upgrading IT for Financial Secure</a>
        <div class="arrow">
          <a href="{{ route('second', ['case-study', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-6 col-md-6">
      <div class="case-slider-boxarea">
        <div class="img1 image-anime">
        <img src="/img/all-images/case/case-img2.png" alt="" />
        </div>
        <div class="content-area">
        <p>#CloudFlex Solution</p>
        <div class="space16"></div>
        <a href="{{ route('second', ['case-study', 'single']) }}">Scaling IT for EcoSolutions</a>
        <div class="arrow">
          <a href="{{ route('second', ['case-study', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== CASE AREA ENDS ======= -->
@endsection