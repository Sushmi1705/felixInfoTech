<!-- ===== HEADER START ======= -->
<header class="homepage1-body">
  <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
    <div class="container headerfix">
      <div class="row align-items-center row-bg3">

        <!-- Logo -->
        <div class="col-lg-2 col-md-6 col-6">
          <div class="vl-logo">
            <a href="<?php echo e(route('any', 'index')); ?>">
              <img src="/img/logo/logo.jpg" alt="Felix Infotech Logo" />
            </a>
          </div>
        </div>

        <!-- Desktop Menu -->
        <div class="col-lg-7 d-none d-lg-block">
          <div class="vl-main-menu text-center">
            <nav class="vl-mobile-menu-active" role="navigation" aria-label="Main Navigation">
              <ul class="main-nav" role="menubar">
                <li><a href="<?php echo e(route('any', 'index')); ?>" class="<?php echo e(request()->is('index') ? 'active' : ''); ?>">Home</a></li>
                <li><a href="<?php echo e(route('second', ['pages', 'about'])); ?>" class="<?php echo e(request()->is('pages/about') ? 'active' : ''); ?>">About Us</a></li>

                <!-- Services Megamenu -->
                <li class="has-dropdown" role="none">
                  <!-- <a href="#" class="menu-trigger" aria-haspopup="true" aria-expanded="false">
                    Services <i class="fa-solid fa-angle-down d-lg-inline d-none"></i>
                  </a> -->
                  <a href="#" class="menu-trigger" aria-haspopup="true" aria-expanded="false">
                    Services <i class="fa-solid fa-chevron-down arrow-icon"></i>
                  </a>

                  <div class="megamenu" role="menu" aria-hidden="true">
                    <div class="container">
                    <div class="row">

                      <!-- ICT Solutions -->
                      <div class="col-md-4 megamenu-col">
                        <h4 class="megamenu-title"><i class="fa-solid fa-network-wired"></i> ICT Solutions</h4>
                        <ul>
                          <li><a href="<?php echo e(route('second', ['pages', 'ict-solutions'])); ?>#1"><i class="fa-solid fa-server"></i> Servers & Storages</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'ict-solutions'])); ?>#2"><i class="fa-solid fa-mobile-screen"></i> Mobility Devices</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'ict-solutions'])); ?>#3"><i class="fa-solid fa-desktop"></i> Workstations</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'ict-solutions'])); ?>#4"><i class="fa-solid fa-print"></i> Printers & Scanners</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'ict-solutions'])); ?>#5"><i class="fa-solid fa-battery-full"></i> Power Backup</a></li>
                        </ul>
                      </div>

                      <!-- Software Solutions -->
                      <div class="col-md-4 megamenu-col">
                        <h4 class="megamenu-title"><i class="fa-solid fa-code"></i> Software Solutions</h4>
                        <ul>
                          <li><a href="<?php echo e(route('second', ['pages', 'software-solutions'])); ?>#1"><i class="fa-solid fa-laptop-code"></i> Applications</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'software-solutions'])); ?>#2"><i class="fa-solid fa-envelope"></i> Mailing Solutions</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'software-solutions'])); ?>#3"><i class="fa-solid fa-shield-halved"></i> Security</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'software-solutions'])); ?>#4"><i class="fa-solid fa-database"></i> Backup & Archival</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'software-solutions'])); ?>#5"><i class="fa-solid fa-cloud"></i> Private Cloud</a></li>
                        </ul>
                      </div>

                      <!-- Cloud & Data Centre -->
                      <div class="col-md-4 megamenu-col">
                        <h4 class="megamenu-title"><i class="fa-solid fa-cloud-arrow-up"></i> Cloud & Data Centre</h4>
                        <ul>
                          <li><a href="<?php echo e(route('second', ['pages', 'cloud-data-centre'])); ?>#1"><i class="fa-solid fa-laptop"></i> Client Computing</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'cloud-data-centre'])); ?>#2"><i class="fa-solid fa-lock"></i> Information Security</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'cloud-data-centre'])); ?>#3"><i class="fa-solid fa-briefcase"></i> Consulting</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'cloud-data-centre'])); ?>#4"><i class="fa-solid fa-gears"></i> Managed ICT</a></li>
                          <li><a href="<?php echo e(route('second', ['pages', 'cloud-data-centre'])); ?>#5"><i class="fa-solid fa-user-shield"></i> VAPT Services</a></li>
                        </ul>
                      </div>

                    </div>
                    </div>

                  </div>
                </li>

                <li><a href="<?php echo e(route('second', ['pages', 'portfolio'])); ?>" class="<?php echo e(request()->is('pages/portfolio') ? 'active' : ''); ?>">Portfolio</a></li>
                <li><a href="<?php echo e(route('second', ['blog', 'blog1'])); ?>" class="<?php echo e(request()->is('blog/blog1') ? 'active' : ''); ?>">Blog</a></li>
                <li><a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="<?php echo e(request()->is('pages/contact') ? 'active' : ''); ?>">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- CTA + Mobile Toggle -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="vl-hero-btn d-none d-lg-block text-end">
            <span class="vl-btn-wrap text-end">
              <a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="vl-btn1">
                Get Started Now <i class="fa-solid fa-arrow-right"></i>
              </a>
            </span>
          </div>
          <div class="vl-header-action-item d-block d-lg-none">
            <button type="button" class="vl-offcanvas-toggle">
              <i class="fa-solid fa-bars-staggered"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ===== HEADER END ======= --><?php /**PATH C:\React-Project\felixInfoTech\Eitech-Laravel_v1.0\Eitech\resources\views/layouts/partials/header/navbar.blade.php ENDPATH**/ ?>