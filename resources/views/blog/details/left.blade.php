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
        <h1>Blog Details Left Sidebar</h1>
        <div class="space28"></div>
        <a href="{{ route('any', 'index') }}">Home <i class="fa-solid fa-angle-right"></i> Our Blog <i class="fa-solid fa-angle-right"></i> <span>Blog Details Left Sidebar</span></a>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-details-section sp1">
    <div class="container">
    <div class="row">
      <div class="col-lg-4">
      <div class="blog-auhtor-details-side">
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
        <div class="recent-posts-area">
        <h3>Latest Added Blog</h3>
        <div class="space24"></div>
        <div class="recent-posts">
          <div class="img1">
          <img src="/img/all-images/blog/blog-img21.png" alt="" />
          </div>
          <div class="content">
          <ul>
            <li>
            <a href="#"><img src="/img/icons/calender3.svg" alt="" />4 August 2024</a>
            </li>
          </ul>
          <div class="space16"></div>
          <h4><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Scalable IT solutions tailored to meet Best business needs</a></h4>
          </div>
        </div>
        <div class="space30"></div>
        <div class="recent-posts">
          <div class="img1">
          <img src="/img/all-images/blog/blog-img22.png" alt="" />
          </div>
          <div class="content">
          <ul>
            <li>
            <a href="#"><img src="/img/icons/calender3.svg" alt="" />4 August 2024</a>
            </li>
          </ul>
          <div class="space16"></div>
          <h4><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Business Operations with Tailored Best IT Solutions Designed</a></h4>
          </div>
        </div>
        <div class="space30"></div>
        <div class="recent-posts">
          <div class="img1">
          <img src="/img/all-images/blog/blog-img23.png" alt="" />
          </div>
          <div class="content">
          <ul>
            <li>
            <a href="#"><img src="/img/icons/calender3.svg" alt="" />4 August 2024</a>
            </li>
          </ul>
          <div class="space16"></div>
          <h4><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Navigate Complex A World Technology of with Our IT Solutions</a></h4>
          </div>
        </div>
        <div class="space30"></div>
        <div class="recent-posts">
          <div class="img1">
          <img src="/img/all-images/blog/blog-img24.png" alt="" />
          </div>
          <div class="content">
          <ul>
            <li>
            <a href="#"><img src="/img/icons/calender3.svg" alt="" />4 August 2024</a>
            </li>
          </ul>
          <div class="space16"></div>
          <h4><a href="{{ route('third', ['blog', 'details' , 'single']) }}">Discover the Power Best of Data-Driven Insights Transforming</a></h4>
          </div>
        </div>
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
      </div>

      <div class="col-lg-8">
      <div class="blog-others-sidebar">
        <div class="img1">
        <img src="/img/all-images/blog/blog-img25.png" alt="" />
        </div>
        <div class="space32"></div>
        <ul class="list-author">
        <li>
          <a href="#">#BestTechSolution</a>
        </li>
        <li>
          <a href="#"><img src="/img/icons/calender1.svg" alt="" /> 4 August 2024 <span>|</span></a>
        </li>
        <li>
          <a href="#"><img src="/img/icons/comments1.svg" alt="" /> 2 Comments</a>
        </li>
        </ul>
        <div class="space24"></div>
        <h2>Unlock the Full Potential Your Company through Innovative Technology Expert</h2>
        <div class="space20"></div>
        <p>Unlocking the full potential company requires more than just the latest technology; it necessitates comprehensive strategy backed by expert support. At Eitech, we are of understand that each business is unique, with distinct challenges an company goals.</p>
        <div class="space18"></div>
        <p>In today’s fast-paced business environment, the ability to adapt and innovate crucial for success. At Eitech, we specialize in providing comprehensive technology solutions that align with your strategic objectives. Our team of experts works closely with you.</p>
        <div class="space18"></div>
        <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="space30"></div>
          <div class="img1 image-anime">
          <img src="/img/all-images/blog/blog-img26.png" alt="" />
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="space30"></div>
          <div class="img1 image-anime">
          <img src="/img/all-images/blog/blog-img27.png" alt="" />
          </div>
        </div>
        </div>
        <div class="space32"></div>
        <h3>Maximize Efficiency Security with IT Solutions</h3>
        <div class="space16"></div>
        <p>The flexibility and scalability of modern IT infrastructure allow organizations to adapt to changing market demands quickly, ensuring they remain agile responsive. By leveraging data-driven insights, companies can make informed decisions that best drive growth.</p>
        <div class="space16"></div>
        <p>IT solutions encompass a wide range of services and technologies designed to meet the unique needs of businesses. These solutions can include cloud computing, cybersecurity measures, data analytics, and comprehensive IT management services, by integrating.</p>
        <div class="space48"></div>
        <div class="images">
        <div class="img1 image-anime">
          <img src="/img/all-images/blog/blog-img28.png" alt="" />
        </div>
        <div class="play">
          <a href="htvls://www.youtube.com/watch?v=Y8XpQpW5OVY" class="popup-youtube"><i class="fa-solid fa-play"></i></a>
        </div>
        </div>
        <div class="space32"></div>
        <h3>Maintaining Regulatory Compliance</h3>
        <div class="space16"></div>
        <p>Implementing IT solutions brings numerous benefits that can significantly enhance the business performance. First and foremost, these solutions streamline operations best automating repetitive tasks and improving overall efficiency, allowing employees.</p>
        <div class="space40"></div>
        <div class="tags-social">
        <div class="tags">
          <ul>
          <li>Tags:</li>
          <li>
            <a href="#">#TechSolution</a>
          </li>
          <li>
            <a href="#" class="m-0">#BussinessIT</a>
          </li>
          </ul>
        </div>
        <div class="social">
          <ul>
          <li>Social:</li>
          <li>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
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
        <div class="space60"></div>
        <h3>Blog Comments (2)</h3>
        <div class="space32"></div>
        <div class="comments-boxarea">
        <div class="comments-boxes">
          <div class="comments-auhtor-box">
          <div class="img3">
            <img src="/img/all-images/testimonial/testimonial-img5.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="date"><img src="/img/icons/calender1.svg" alt="" /> 8 December 2024</a>
            <a href="{{ route('second', ['pages', 'team']) }}" class="name">Mr. Ana Ritchie</a>
          </div>
          </div>
          <a href="#" class="reply"><i class="fa-solid fa-reply"></i> Reply</a>
        </div>
        <div class="space16"></div>
        <p>“I found this article incredibly enlightening, especially the emphasis on the best transformative power of IT solutions in today’s business environment. As the IT manager for a mid-sized company, I've witnessed firsthand how in investing.”</p>
        </div>
        <div class="space30"></div>
        <div class="comments-boxarea box2">
        <div class="comments-boxes">
          <div class="comments-auhtor-box">
          <div class="img3">
            <img src="/img/all-images/testimonial/testimonial-img4.png" alt="" />
          </div>
          <div class="content">
            <a href="#" class="date"><img src="/img/icons/calender1.svg" alt="" /> 12 May 2024</a>
            <a href="{{ route('second', ['pages', 'team']) }}" class="name">Matthew Kuhnemann</a>
          </div>
          </div>
          <a href="#" class="reply"><i class="fa-solid fa-reply"></i> Reply</a>
        </div>
        <div class="space16"></div>
        <p>One concern I have, however, is ensuring that our IT team remains up-to-date with the rapid technological advancements. Continuous training and professional development are crucial, but they require additional time.</p>
        </div>
        <div class="space48"></div>
        <h3>Leave A Reply Now</h3>
        <div class="space32"></div>
        <div class="contact-boxarea">
        <h3>Send Us A Message</h3>
        <div class="space8"></div>
        <div class="row">
          <div class="col-lg-6">
          <div class="input-area">
            <input type="text" placeholder="Your Name" />
          </div>
          </div>
          <div class="col-lg-6">
          <div class="input-area">
            <input type="email" placeholder="Email Address" />
          </div>
          </div>
          <div class="col-lg-12">
          <div class="input-area">
            <textarea placeholder="Your Message"></textarea>
          </div>
          </div>
          <div class="col-lg-12">
          <div class="space4"></div>
          <div class="input-area">
            <button type="submit" class="vl-btn2">Leave A Reply<i class="fa-solid fa-arrow-right"></i></button>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- ===== BLOG AREA ENDS ======= -->

  <!-- ===== BLOG AREA STARTS ======= -->
  <div class="vl-blog-bottom-area sp2" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
      <div class="heading2 space-margin60 text-center">
        <h2>View More Our Blog</h2>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
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
      <div class="col-lg-4 col-md-6">
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

      <div class="col-lg-4 col-md-6">
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
    </div>
    </div>
  </div>
  <!-- ===== BLOG AREA ENDS ======= -->
@endsection

