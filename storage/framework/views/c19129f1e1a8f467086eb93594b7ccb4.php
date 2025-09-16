

<?php $__env->startSection('content'); ?>
  <!-- ===== HERO AREA STARTS ======= -->
  <div class="inner-page-hero-area" style="background-image: url(/img/all-images/bg/slide1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements5.png" alt="" class="elements5" />
    <img src="/img/elements/elements4.png" alt="" class="elements4" />
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5" />
    <img src="/img/elements/elements16.png" alt="" class="elements16" />

    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="inner-header text-center heading1">
            <h1>Contact Us</h1>
            <div class="space28"></div>
            <a href="<?php echo e(route('any', 'index')); ?>">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== HERO AREA ENDS ======= -->

  <!-- ===== CONTACT AREA STARTS ======= -->
  <div class="contact-inner-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="heading2 text-center">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Have Questions? Reach Out!</h5>
            <div class="space20"></div>
            <h2>Get in Touch with Felix Infotech</h2>
          </div>

          <div class="space40"></div>
          <div class="row">
            <!-- Email -->
            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="/img/icons/mail2.svg" alt="email" />
                </div>
                <div class="content">
                  <h4>Our Email</h4>
                  <a href="mailto:info@felixinfotech.com">info@felixinfotech.com</a>
                </div>
              </div>
              <div class="space30 d-lg-none d-block"></div>
            </div>

            <!-- Phone -->
            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="/img/icons/phn2.svg" alt="phone" />
                </div>
                <div class="content">
                  <h4>Phone Numbers</h4>
                  <a href="tel:04448645444">044-48645444</a><br />
                  <!-- <a href="tel:04442613839">044-42613839</a><br /> -->
                  <!-- <a href="tel:18001230756">1800 123 0756 (Toll Free)</a> -->
                </div>
              </div>
              <div class="space30 d-lg-none d-block"></div>
            </div>

            <!-- Branches -->
            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="/img/icons/quito1.svg" alt="branches" />
                </div>
                <div class="content">
                  <h4>Our Branches</h4>
                  <p>Chennai, Kochi, Bangalore, Hyderabad, Mumbai, Dubai</p>
                </div>
              </div>
            </div>
          </div>

          <div class="space60"></div>
          <div class="row">
            <div class="col-lg-6">
              <div class="img1 reveal image-anime">
                <img src="/img/all-images/others/others-img2.png" alt="Felix Office" />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="contact-author-boxarea">
                <h3>Send Us a Message</h3>
                <div class="space8"></div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="text" placeholder="First Name*" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="text" placeholder="Last Name*" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="number" placeholder="Phone Number*" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="email" placeholder="Email Address*" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-area">
                      <input type="text" placeholder="Service Type*" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-area">
                      <textarea placeholder="Your Message"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="space32"></div>
                    <div class="input-area">
                      <button type="submit" class="vl-btn2">Submit Now <i class="fa-solid fa-arrow-right"></i></button>
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
  <!-- ===== CONTACT AREA ENDS ======= -->

  <!-- ===== MAP AREA STARTS ======= -->
  <div class="map-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading2 text-center space-margin60">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt="" /></span>Our Locations</h5>
            <div class="space20"></div>
            <h2>Find Felix Infotech Near You</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="map-container" style="height: 500px; border-radius: 10px; overflow: hidden;">
            <div id="felix-map" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== MAP AREA ENDS ======= -->

  <!-- ✅ Leaflet.js (OpenStreetMap) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var map = L.map('felix-map').setView([20.5937, 78.9629], 5);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);

      const locations = [
        { lat: 13.0827, lng: 80.2707, title: "Felix Infotech - Chennai" },
        { lat: 9.9312, lng: 76.2673, title: "Felix Infotech - Kochi" },
        { lat: 12.9716, lng: 77.5946, title: "Felix Infotech - Bangalore" },
        { lat: 17.3850, lng: 78.4867, title: "Felix Infotech - Hyderabad" },
        { lat: 19.0760, lng: 72.8777, title: "Felix Infotech - Mumbai" },
        { lat: 25.2048, lng: 55.2708, title: "Felix Infotech - Dubai" }
      ];

      locations.forEach(loc => {
        L.marker([loc.lat, loc.lng]).addTo(map)
          .bindPopup(`<b>${loc.title}</b><br>Email: info@felixinfotech.com`);
      });
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\React-Project\felixInfoTech\Eitech-Laravel_v1.0\Eitech\resources\views/pages/contact.blade.php ENDPATH**/ ?>