@extends('layouts.landing')

@section('content')
  <!-- ===== HERO AREA STARTS ======= -->
  <div class="inner-page-hero-area" style="background-image: url(/img/all-images/bg/slide1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements5.png" alt="" class="elements5" />
    <img src="/img/elements/elements4.png" alt="" class="elements4" />
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5" />
    <img src="/img/elements/elements16.png" alt="" class="elements16" />

    <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
      <div class="inner-header text-center heading1">
        <h1>Our Blog V1</h1>
        <div class="space28"></div>
        <a href="{{ route('any', 'index') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Our Blog V1</span></a>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-4-area-inner sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="vl-blog-1-item">
            <div class="vl-blog-1-thumb image-anime">
            <img src="/img/all-images/blog/why-img-1.jpg" alt="" />
            </div>
            <div class="vl-blog-1-content">
            <div class="vl-blog-meta">
              <ul>
              <li>
                <a href="#"><img src="/img/icons/calender3.svg" alt="" /> 4 August 2024</a>
              </li>
              </ul>
            </div>
            <div class="space16"></div>
            <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Scalable IT solutions tailored to meet a unique business needs</a></h4>
            <div class="space20"></div>
            <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="vl-blog-1-item">
            <div class="vl-blog-1-thumb image-anime">
            <img src="/img/all-images/blog/why-img-2.jpg" alt="" />
            </div>
            <div class="vl-blog-1-content">
            <div class="vl-blog-meta">
              <ul>
              <li>
                <a href="#"><img src="/img/icons/calender3.svg" alt="" /> 5 August 2024</a>
              </li>
              </ul>
            </div>
            <div class="space16"></div>
            <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Unlock the full potential Best your business with tailored IT</a></h4>
            <div class="space20"></div>
            <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="vl-blog-1-item">
            <div class="vl-blog-1-thumb image-anime">
            <img src="/img/all-images/blog/why-img-3.jpg" alt="" />
            </div>
            <div class="vl-blog-1-content">
            <div class="vl-blog-meta">
              <ul>
              <li>
                <a href="#"><img src="/img/icons/calender3.svg" alt="" /> 6 August 2024</a>
              </li>
              </ul>
            </div>
            <div class="space16"></div>
            <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Optimize your operations with tailored IT services that grow</a></h4>
            <div class="space20"></div>
            <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="vl-blog-1-item">
            <div class="vl-blog-1-thumb image-anime">
            <img src="/img/all-images/blog/blog-img11.png" alt="" />
            </div>
            <div class="vl-blog-1-content">
            <div class="vl-blog-meta">
              <ul>
              <li>
                <a href="#"><img src="/img/icons/calender3.svg" alt="" /> 4 August 2024</a>
              </li>
              </ul>
            </div>
            <div class="space16"></div>
            <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Unlock the Future of Your IT & Business With Best Innovative</a></h4>
            <div class="space20"></div>
            <a href="{{ route('third', ['blog', 'details', 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        
      </div>
  </div>
  <!-- ===== BLOG AREA ENDS ======= -->
@endsection