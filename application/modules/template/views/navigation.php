<body>
  <?php

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
      $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
      $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-relocation', 'office-shifting', 'car-transportation', 'transportation-service', 'warehouse-services', 'parcel-services', 'insurance'])) {
      $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
      $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
      $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
      $active_tab = 'contact';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- Desktop Top Bar -->
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <!-- Left Side: Address & Email with Glass Pills -->
        <div class="top-bar-left d-flex align-items-center gap-3">
          <span class="top-bar-pill text-white">
            <i class="bi bi-geo-alt-fill topbar-icon"></i> <span><?= $address ?></span>
          </span>
          <a href="<?= $mailhtml ?>" class="top-bar-pill text-white text-decoration-none">
            <i class="bi bi-envelope-fill topbar-icon"></i> <span><?= $mail ?></span>
          </a>
        </div>
        <!-- Right Side: Social Media Icons -->
        <div class="top-bar-right d-flex align-items-center gap-3">
          <span class="follow-text text-white-50">Follow Us:</span>
          <div class="social-icons d-flex gap-2">
            <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="<?= $twitterhtml ?>" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <!-- Tablet Top Bar (Shows Address & Phone Number) -->
      <div class="top-bar-tablet d-none d-md-flex d-lg-none justify-content-between align-items-center">
        <div class="top-bar-left d-flex align-items-center gap-2">
          <span class="top-bar-pill text-white">
            <i class="bi bi-geo-alt-fill topbar-icon"></i> <span><?= $address ?></span>
          </span>
        </div>
        <div class="top-bar-right d-flex align-items-center gap-2">
          <a href="<?= $phonehtml ?>" class="top-bar-pill text-white text-decoration-none phone-pulse-pill">
            <i class="bi bi-telephone-fill topbar-icon mobile-phone-icon"></i> <span><?= $phone ?></span>
          </a>
        </div>
      </div>

      <!-- Mobile Top Bar (Shows ONLY Phone Number in Glass Pill) -->
      <div class="top-bar-mobile d-flex d-md-none justify-content-center align-items-center gap-2">
        <a href="<?= $phonehtml ?>" class="top-bar-pill text-white text-center text-decoration-none phone-pulse-pill">
          <i class="bi bi-telephone-fill topbar-icon mobile-phone-icon flex-shrink-0"></i> <span class="mobile-phone-text"><?= $phone ?></span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo Wrap -->
      <div class="logo-wrap-container d-flex align-items-center">
        <a href="<?= site_url() ?>" class="brand-wrap text-decoration-none d-flex align-items-center">
          <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="brand-logo-img" loading="lazy">
        </a>
        <div class="nav-separator d-none d-lg-block"></div>
      </div>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav d-none d-lg-flex align-items-center gap-3">
        <a href="<?= site_url() ?>" class="nav-link<?= $active_tab === 'home' ? ' active' : '' ?>">HOME</a>
        
        <!-- About Us Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('about-us') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'about' || $active_tab === 'blog' ? ' active' : '' ?>" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ABOUT US <i class="bi bi-chevron-down ms-1 dropdown-chevron"></i>
          </a>
          <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="aboutDropdown">
            <li><a class="dropdown-item<?= $segment1 === 'about-us' ? ' active' : '' ?>" href="<?= site_url('about-us') ?>">About Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'why-choose-us' ? ' active' : '' ?>" href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'blog' ? ' active' : '' ?>" href="<?= site_url('blog') ?>">Blog</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'reviews' ? ' active' : '' ?>" href="<?= site_url('reviews') ?>">Reviews</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'faqs' ? ' active' : '' ?>" href="<?= site_url('faqs') ?>">FAQs</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'testimonials' ? ' active' : '' ?>" href="<?= site_url('testimonials') ?>">Testimonials</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'privacy-policy' ? ' active' : '' ?>" href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'terms-and-conditions' ? ' active' : '' ?>" href="<?= site_url('terms-and-conditions') ?>">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Services Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('our-services') ?>" class="nav-link dropdown-toggle<?= $active_tab === 'services' ? ' active' : '' ?>" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICES <i class="bi bi-chevron-down ms-1 dropdown-chevron"></i>
          </a>
          <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item<?= $segment1 === 'our-services' ? ' active' : '' ?>" href="<?= site_url('our-services') ?>">Our Services</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item<?= $segment1 === 'home-relocation' ? ' active' : '' ?>" href="<?= site_url('home-relocation') ?>">Home Relocation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'office-shifting' ? ' active' : '' ?>" href="<?= site_url('office-shifting') ?>">Office Shifting</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'car-transportation' ? ' active' : '' ?>" href="<?= site_url('car-transportation') ?>">Car Transportation</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'transportation-service' ? ' active' : '' ?>" href="<?= site_url('transportation-service') ?>">Transportation Service</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'warehouse-services' ? ' active' : '' ?>" href="<?= site_url('warehouse-services') ?>">Warehouse Services</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'parcel-services' ? ' active' : '' ?>" href="<?= site_url('parcel-services') ?>">Parcel Services</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'insurance' ? ' active' : '' ?>" href="<?= site_url('insurance') ?>">Transit Insurance</a></li>
          </ul>
        </div>

        <a href="<?= site_url('our-branches') ?>" class="nav-link<?= $active_tab === 'locations' ? ' active' : '' ?>">BRANCHES</a>
        
        <!-- Gallery Dropdown -->
        <div class="nav-item dropdown">
          <a href="<?= site_url('photo-gallery') ?>" class="nav-link dropdown-toggle<?= $segment1 === 'photo-gallery' || $segment1 === 'video-gallery' ? ' active' : '' ?>" id="galleryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GALLERY <i class="bi bi-chevron-down ms-1 dropdown-chevron"></i>
          </a>
          <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="galleryDropdown">
            <li><a class="dropdown-item<?= $segment1 === 'photo-gallery' ? ' active' : '' ?>" href="<?= site_url('photo-gallery') ?>">Photo Gallery</a></li>
            <li><a class="dropdown-item<?= $segment1 === 'video-gallery' ? ' active' : '' ?>" href="<?= site_url('video-gallery') ?>">Video Gallery</a></li>
          </ul>
        </div>

        <a href="<?= site_url('contact-us') ?>" class="nav-link<?= $active_tab === 'contact' ? ' active' : '' ?>">CONTACT US</a>
      </nav>

      <!-- Right Header Actions (Call Now Button & Hamburger) -->
      <div class="d-flex align-items-center gap-3">
        <!-- Call Now Button Desktop -->
        <a href="<?= $phonehtml ?>" class="call-btn-desktop d-none d-lg-flex align-items-center">
          <div class="call-btn-icon-wrap">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="call-btn-text-wrap">
            <span class="call-btn-label">CALL US NOW</span>
            <span class="call-btn-num"><?= $phone ?></span>
          </div>
        </a>



        <!-- Hamburger Icon for Mobile/Tablet -->
        <button class="hamburger-toggle d-flex d-lg-none flex-column justify-content-between" id="openMenu" aria-label="Open Navigation Menu">
          <span class="bar bar-1"></span>
          <span class="bar bar-2"></span>
          <span class="bar bar-3"></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Slide-In Navigation Drawer Overlay -->
  <div class="mobile-drawer-overlay" id="mobileDrawer">
    <div class="mobile-drawer-inner">
      <!-- Drawer Header -->
      <div class="drawer-header d-flex justify-content-between align-items-center">
        <a href="<?= site_url() ?>" class="brand-wrap text-decoration-none d-flex align-items-center">
          <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?> Logo" loading="lazy" class="brand-logo-img-mobile">
        </a>
        
        <button class="drawer-close-btn d-flex align-items-center justify-content-center" id="closeMenu" aria-label="Close Navigation Menu">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <!-- Drawer Content Links List -->
      <div class="drawer-body">
        <ul class="drawer-nav-list list-unstyled m-0 p-0">
          
          <!-- Home (No dropdown/chevron) -->
          <li class="drawer-nav-item">
            <a href="<?= site_url() ?>" class="drawer-nav-link d-flex align-items-center<?= $active_tab === 'home' ? ' active' : '' ?>">
              <i class="bi bi-house-door drawer-icon"></i>
              <span class="flex-grow-1 text-start">Home</span>
            </a>
          </li>

          <!-- About Us Dropdown -->
          <li class="drawer-nav-item has-drawer-dropdown">
            <button class="drawer-nav-link d-flex align-items-center w-100 border-0 bg-transparent<?= $active_tab === 'about' ? ' active' : '' ?>" data-drawer-toggle="about">
              <i class="bi bi-person drawer-icon"></i>
              <span class="flex-grow-1 text-start">About Us</span>
              <i class="bi bi-chevron-right drawer-arrow"></i>
            </button>
            <ul class="drawer-submenu list-unstyled collapse" id="submenu-about">
              <li><a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>" class="<?= $segment1 === 'why-choose-us' ? 'active' : '' ?>">Why Choose Us</a></li>
              <li><a href="<?= site_url('blog') ?>" class="<?= $segment1 === 'blog' ? 'active' : '' ?>">Blog</a></li>
              <li><a href="<?= site_url('reviews') ?>" class="<?= $segment1 === 'reviews' ? 'active' : '' ?>">Reviews</a></li>
              <li><a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQs</a></li>
              <li><a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonials</a></li>
              <li><a href="<?= site_url('privacy-policy') ?>" class="<?= $segment1 === 'privacy-policy' ? 'active' : '' ?>">Privacy Policy</a></li>
              <li><a href="<?= site_url('terms-and-conditions') ?>" class="<?= $segment1 === 'terms-and-conditions' ? 'active' : '' ?>">Terms & Conditions</a></li>
            </ul>
          </li>

          <!-- Services Dropdown -->
          <li class="drawer-nav-item has-drawer-dropdown">
            <button class="drawer-nav-link d-flex align-items-center w-100 border-0 bg-transparent<?= $active_tab === 'services' ? ' active' : '' ?>" data-drawer-toggle="services">
              <i class="bi bi-box-seam drawer-icon"></i>
              <span class="flex-grow-1 text-start">Services</span>
              <i class="bi bi-chevron-right drawer-arrow"></i>
            </button>
            <ul class="drawer-submenu list-unstyled collapse" id="submenu-services">
              <li><a href="<?= site_url('our-services') ?>" class="<?= $segment1 === 'our-services' ? 'active' : '' ?>">Our Services</a></li>
              <li><a href="<?= site_url('home-relocation') ?>" class="<?= $segment1 === 'home-relocation' ? 'active' : '' ?>">Home Relocation</a></li>
              <li><a href="<?= site_url('office-shifting') ?>" class="<?= $segment1 === 'office-shifting' ? 'active' : '' ?>">Office Shifting</a></li>
              <li><a href="<?= site_url('car-transportation') ?>" class="<?= $segment1 === 'car-transportation' ? 'active' : '' ?>">Car Transportation</a></li>
              <li><a href="<?= site_url('transportation-service') ?>" class="<?= $segment1 === 'transportation-service' ? 'active' : '' ?>">Transportation Service</a></li>
              <li><a href="<?= site_url('warehouse-services') ?>" class="<?= $segment1 === 'warehouse-services' ? 'active' : '' ?>">Warehouse Services</a></li>
              <li><a href="<?= site_url('parcel-services') ?>" class="<?= $segment1 === 'parcel-services' ? 'active' : '' ?>">Parcel Services</a></li>
              <li><a href="<?= site_url('insurance') ?>" class="<?= $segment1 === 'insurance' ? 'active' : '' ?>">Transit Insurance</a></li>
            </ul>
          </li>

          <!-- Branches (No dropdown/chevron) -->
          <li class="drawer-nav-item">
            <a href="<?= site_url('our-branches') ?>" class="drawer-nav-link d-flex align-items-center<?= $active_tab === 'locations' ? ' active' : '' ?>">
              <i class="bi bi-geo-alt drawer-icon"></i>
              <span class="flex-grow-1 text-start">Branches</span>
            </a>
          </li>

          <!-- Gallery Dropdown -->
          <li class="drawer-nav-item has-drawer-dropdown">
            <button class="drawer-nav-link d-flex align-items-center w-100 border-0 bg-transparent<?= $segment1 === 'photo-gallery' || $segment1 === 'video-gallery' ? ' active' : '' ?>" data-drawer-toggle="gallery">
              <i class="bi bi-images drawer-icon"></i>
              <span class="flex-grow-1 text-start">Gallery</span>
              <i class="bi bi-chevron-right drawer-arrow"></i>
            </button>
            <ul class="drawer-submenu list-unstyled collapse" id="submenu-gallery">
              <li><a href="<?= site_url('photo-gallery') ?>" class="<?= $segment1 === 'photo-gallery' ? 'active' : '' ?>">Photo Gallery</a></li>
              <li><a href="<?= site_url('video-gallery') ?>" class="<?= $segment1 === 'video-gallery' ? 'active' : '' ?>">Video Gallery</a></li>
            </ul>
          </li>

          <!-- Contact Us (No dropdown/chevron) -->
          <li class="drawer-nav-item">
            <a href="<?= site_url('contact-us') ?>" class="drawer-nav-link d-flex align-items-center<?= $active_tab === 'contact' ? ' active' : '' ?>">
              <i class="bi bi-telephone drawer-icon"></i>
              <span class="flex-grow-1 text-start">Contact Us</span>
            </a>
          </li>
        </ul>

        <!-- Bottom Call Card Widget inside Drawer -->
        <div class="drawer-call-widget mt-4 text-start">
          <div class="d-flex align-items-center gap-3">
            <div class="widget-phone-circle">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="widget-call-info">
              <span class="widget-call-title">Need Help? Call Us</span>
              <a href="<?= $phonehtml ?>" class="widget-call-number d-block"><?= $phone ?></a>
              
            </div>
          </div>
        </div>

        <!-- Solid Red Button inside Drawer -->
        <button type="button" class="drawer-quote-btn w-100 mt-3 d-flex align-items-center justify-content-between" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get Free Quote</span>
          <i class="bi bi-arrow-right"></i>
        </button>

      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const openMenu = document.getElementById('openMenu');
      const closeMenu = document.getElementById('closeMenu');
      const mobileDrawer = document.getElementById('mobileDrawer');
      const mainHeader = document.getElementById('mainHeader');
      
      // Open mobile drawer
      if (openMenu && mobileDrawer) {
        openMenu.addEventListener('click', function() {
          mobileDrawer.classList.add('active');
          document.body.style.overflow = 'hidden';
        });
      }
      
      // Close mobile drawer
      if (closeMenu && mobileDrawer) {
        closeMenu.addEventListener('click', function() {
          mobileDrawer.classList.remove('active');
          document.body.style.overflow = '';
        });
      }

      // Handle Drawer Submenus toggle
      const drawerToggles = document.querySelectorAll('[data-drawer-toggle]');
      drawerToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
          const targetId = 'submenu-' + this.getAttribute('data-drawer-toggle');
          const submenu = document.getElementById(targetId);
          const arrow = this.querySelector('.drawer-arrow');
          
          if (submenu) {
            const isOpen = submenu.classList.contains('show');
            
            // Close all submenus
            document.querySelectorAll('.drawer-submenu').forEach(sub => {
              sub.classList.remove('show');
            });
            document.querySelectorAll('.drawer-arrow').forEach(arr => {
              arr.classList.remove('rotated');
            });
            
            if (!isOpen) {
              submenu.classList.add('show');
              if (arrow) arrow.classList.add('rotated');
            }
          }
        });
      });
      
      // Header sticky scroll effect
      window.addEventListener('scroll', function() {
        if (window.scrollY > 40) {
          mainHeader.classList.add('scrolled');
        } else {
          mainHeader.classList.remove('scrolled');
        }
      });
      
      // Close mobile drawer when quote modal opens
      const quoteModal = document.getElementById('qteModal');
      if (quoteModal) {
        quoteModal.addEventListener('show.bs.modal', function () {
          if (mobileDrawer) {
            mobileDrawer.classList.remove('active');
            document.body.style.overflow = '';
          }
        });
      }
    });
  </script>
