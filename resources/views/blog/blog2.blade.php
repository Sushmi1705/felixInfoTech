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
      <div class="col-lg-6 m-auto">
      <div class="inner-header text-center heading1">
        <h1>Our Blog V2</h1>
        <div class="space28"></div>
        <a href="{{ route('any', 'index') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Our Blog V2</span></a>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-1-area sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img1.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 26 August 2024 <span>|</span></a>
          </li>
          <li>
            <a href="#"><img src="/img/icons/user1.svg" alt="" /> Alex Roy</a>
          </li>
          </ul>
        </div>
        <div class="space20"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Revolutionize Your Business Operations with Advanced IT Solution Technology</a></h4>
        <div class="space16"></div>
        <p>Fuel your business success with our custom IT services. We design solutions that are tailored to your an specific needs.</p>
        <div class="vl-blog-1-icon">
          <a href="{{ route('third', ['blog', 'details', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6 col-md-6">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img2.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 26 August 2024 <span>|</span></a>
          </li>
          <li>
            <a href="#"><img src="/img/icons/user1.svg" alt="" />Kenneth Allen</a>
          </li>
          </ul>
        </div>
        <div class="space20"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Transform Your Business Operations with Tailored IT Solutions Designed</a></h4>
        <div class="space16"></div>
        <p>Fuel your business success with our custom IT services. We design solutions that are tailored to your an specific needs.</p>
        <div class="vl-blog-1-icon">
          <a href="{{ route('third', ['blog', 'details', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-6 col-md-6">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img17.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 26 August 2024 <span>|</span></a>
          </li>
          <li>
            <a href="#"><img src="/img/icons/user1.svg" alt="" />David Elson</a>
          </li>
          </ul>
        </div>
        <div class="space20"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Transform Your Business Operations with Tailored IT Solutions Designed</a></h4>
        <div class="space16"></div>
        <p>Digital transformation is not just a trend; it’s a necessity for businesses looking to thrive in a competitive landscape.</p>
        <div class="vl-blog-1-icon">
          <a href="{{ route('third', ['blog', 'details', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6 col-md-6">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img18.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 26 August 2024 <span>|</span></a>
          </li>
          <li>
            <a href="#"><img src="/img/icons/user1.svg" alt="" />Rodger Struck</a>
          </li>
          </ul>
        </div>
        <div class="space20"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Unlock the Full Potential Your Company through Innovative Technology Expert</a></h4>
        <div class="space16"></div>
        <p>Every business is unique, an so are its IT needs. Our solution comprehensive IT services are tailored to fit your specific</p>
        <div class="vl-blog-1-icon">
          <a href="{{ route('third', ['blog', 'details', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-6 col-md-6">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img19.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 26 August 2024 <span>|</span></a>
          </li>
          <li>
            <a href="#"><img src="/img/icons/user1.svg" alt="" />John Dukes</a>
          </li>
          </ul>
        </div>
        <div class="space20"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Navigate Complex World Technology with Our Comprehensive IT Solutions</a></h4>
        <div class="space16"></div>
        <p>Fuel your business success with our custom IT services. We design solutions that are tailored to your an specific needs.</p>
        <div class="vl-blog-1-icon">
          <a href="{{ route('third', ['blog', 'details', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6 col-md-6">
      <div class="vl-blog-1-item">
        <div class="vl-blog-1-thumb image-anime">
        <img src="/img/all-images/blog/blog-img20.png" alt="" />
        </div>
        <div class="vl-blog-1-content">
        <div class="vl-blog-meta">
          <ul>
          <li>
            <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 26 August 2024 <span>|</span></a>
          </li>
          <li>
            <a href="#"><img src="/img/icons/user1.svg" alt="" />Ricky Smith</a>
          </li>
          </ul>
        </div>
        <div class="space20"></div>
        <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details', 'single']) }}">Empower Your Team to Thrive in a Digital Era with Cutting-Edge IT</a></h4>
        <div class="space16"></div>
        <p>In an age where cyber threats are ever-present, your best business is more critical than ever. Our on cybersecurity.</p>
        <div class="vl-blog-1-icon">
          <a href="{{ route('third', ['blog', 'details', 'single']) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        </div>
      </div>
      </div>

      <div class="col-lg-12">
      <div class="space30"></div>
      <div class="pagination-area">
        <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous"><i class="fa-solid fa-angle-left"></i></a>
          </li>
          <li class="page-item">
          <a class="page-link active" href="#">1</a>
          </li>
          <li class="page-item">
          <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
          <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
          <a class="page-link" href="#">...</a>
          </li>
          <li class="page-item">
          <a class="page-link" href="#">12</a>
          </li>
          <li class="page-item">
          <a class="page-link m-0" href="#" aria-label="Next"><i class="fa-solid fa-angle-right"></i></a>
          </li>
        </ul>
        </nav>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== BLOG AREA ENDS ======= -->
@endsection