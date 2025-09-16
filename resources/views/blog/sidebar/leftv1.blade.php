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
            <h1>Blog Left Sidebar V1</h1>
            <div class="space28"></div>
            <a href="{{ route('any' , 'index') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Blog Left Sidebar V1</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-v1-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="blog-v1-leftside">
            <div class="search-area">
              <h3>Search</h3>
              <div class="space24"></div>
              <form>
                <input type="text" placeholder="Search..." />
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </div>
            <div class="space30"></div>
            <div class="category-list-area">
              <h3>Blog Category</h3>
              <div class="space10"></div>
              <ul>
                <li>
                  <a href="#">Cyber Security Solution <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Scalable Cloud Solution <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Data Protection Services <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Optimization Management <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">HelpDesk 360 Solutions <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Software Development <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Custom App Development <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">It Infrastructure Networking <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
                <li>
                  <a href="#">Business Consulting <span><i class="fa-solid fa-angle-right"></i></span></a>
                </li>
              </ul>
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
            <div class="auhtor-area">
              <h3>Our Author</h3>
              <div class="space24"></div>
              <ul>
                <li>
                  <a href="#"><img src="/img/all-images/others/author-img1.png" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="/img/all-images/others/author-img2.png" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="/img/all-images/others/author-img3.png" alt="" /></a>
                </li>
                <li>
                  <a href="#" class="m-0"><img src="/img/all-images/others/author-img4.png" alt="" /></a>
                </li>
              </ul>
              <div class="space16"></div>
              <ul>
                <li>
                  <a href="#"><img src="/img/all-images/others/author-img5.png" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="/img/all-images/others/author-img6.png" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="/img/all-images/others/author-img7.png" alt="" /></a>
                </li>
                <li>
                  <a href="#" class="m-0"><img src="/img/all-images/others/author-img8.png" alt="" /></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="space30 d-lg-none d-block"></div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="vl-blog-1-item">
                <div class="vl-blog-1-thumb image-anime">
                  <img src="/img/all-images/blog/blog-img8.png" alt="" />
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
                  <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Scalable IT solutions tailored to meet a unique business needs</a></h4>
                  <div class="space20"></div>
                  <a href="{{ route('third', ['blog', 'details' , 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="vl-blog-1-item">
                <div class="vl-blog-1-thumb image-anime">
                  <img src="/img/all-images/blog/blog-img9.png" alt="" />
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
                  <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Unlock the full potential Best your business with tailored IT</a></h4>
                  <div class="space20"></div>
                  <a href="{{ route('third', ['blog', 'details' , 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="vl-blog-1-item">
                <div class="vl-blog-1-thumb image-anime">
                  <img src="/img/all-images/blog/blog-img10.png" alt="" />
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
                  <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Optimize your operations with tailored IT services that grow</a></h4>
                  <div class="space20"></div>
                  <a href="{{ route('third', ['blog', 'details' , 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
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
                  <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Unlock the Future of Your IT & Business With Best Innovative</a></h4>
                  <div class="space20"></div>
                  <a href="{{ route('third', ['blog', 'details' , 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="vl-blog-1-item">
                <div class="vl-blog-1-thumb image-anime">
                  <img src="/img/all-images/blog/blog-img12.png" alt="" />
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
                  <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Transform Your Operations An with Technology Experience</a></h4>
                  <div class="space20"></div>
                  <a href="{{ route('third', ['blog', 'details' , 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="vl-blog-1-item">
                <div class="vl-blog-1-thumb image-anime">
                  <img src="/img/all-images/blog/blog-img13.png" alt="" />
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
                  <h4 class="vl-blog-1-title"><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Empowering Your Business And Through Technology Tailored IT</a></h4>
                  <div class="space20"></div>
                  <a href="{{ route('third', ['blog', 'details' , 'single']) }}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
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
    </div>
  </div>
  <!-- ===== BLOG AREA ENDS ======= -->
@endsection
