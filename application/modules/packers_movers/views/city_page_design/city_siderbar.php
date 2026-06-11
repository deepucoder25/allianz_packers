<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="pm-city-sidebar">

  <!-- Contact & Action CTA Widget (Same-to-Same Design matching reference image) -->
  <div class="sidebar-widget widget-contact-cta mb-4 text-center">
    <!-- Headset Icon Circle -->
    <div class="cta-headset-circle">
      <i class="bi bi-headset"></i>
    </div>
    
    <!-- Titles -->
    <h3 class="cta-title">Need Help Moving<br>in <span class="cta-city-highlight"><?= $city ?></span>?</h3>
    <p class="cta-desc">Get a free consultation from our shifting experts. Available 24/7.</p>
    
    <!-- White Inner Card -->
    <div class="cta-contact-card">
      <!-- Row 1: Support Line -->
      <a href="<?= $phonehtml ?>" class="cta-contact-row" id="sidebarCallBtn">
        <div class="cta-contact-left">
          <div class="cta-phone-icon-circle">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="cta-contact-text-wrap text-start">
            <span class="cta-contact-label">Call Support <span class="cta-live-badge"><span class="live-pulse-dot"></span> LIVE</span></span>
            <span class="cta-contact-value"><?= $phone ?></span>
          </div>
        </div>
        <div class="cta-contact-right">
          <i class="bi bi-chevron-right"></i>
        </div>
      </a>
      
      <div class="cta-card-divider"></div>
      
      <!-- Row 2: Alternate Line -->
      <a href="<?= $phonehtml1 ?>" class="cta-contact-row" id="sidebarAltCallBtn">
        <div class="cta-contact-left">
          <div class="cta-phone-icon-circle">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="cta-contact-text-wrap text-start">
            <span class="cta-contact-label">Alternate Line</span>
            <span class="cta-contact-value"><?= $phone1 ?></span>
          </div>
        </div>
        <div class="cta-contact-right">
          <i class="bi bi-chevron-right"></i>
        </div>
      </a>
    </div>
    
    <!-- Bottom Buttons Row -->
    <div class="cta-action-buttons-row">
      <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-action btn-cta-whatsapp" id="sidebarWhatsAppBtn">
        <i class="bi bi-whatsapp"></i> WhatsApp
      </a>
      <button type="button" class="btn-cta-action btn-cta-quote" data-bs-toggle="modal" data-bs-target="#qteModal" id="sidebarQuoteBtn">
        <i class="bi bi-file-earmark-check"></i> Get Quote
      </button>
    </div>
  </div>


  <!-- Trusted Badge Widget (Timeline Design matching service page sidebar) -->
  <div class="sidebar-widget widget-trusted-badges mt-4" id="sidebarTrustWidget">
    <div class="trusted-header d-flex align-items-start gap-2 mb-4">
      <i class="bi bi-patch-check-fill trusted-header-icon"></i>
      <div>
        <h4 class="trusted-title">Why Choose <?= $company3 ?>?</h4>
        <div class="trusted-header-line"></div>
      </div>
    </div>
    
    <ul class="trusted-timeline-list m-0 p-0">
      <!-- Point 1 -->
      <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
        <div class="timeline-dot dot-purple"></div>
        <div class="timeline-icon-box bg-purple-light text-purple">
          <i class="bi bi-clock"></i>
        </div>
        <div class="timeline-content text-start">
          <h5 class="timeline-item-title"><?= $yearsExperience ?> Years Experience</h5>
          <p class="timeline-item-desc">Trusted since <?= $startYear ?></p>
        </div>
      </li>
      
      <!-- Point 2 -->
      <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
        <div class="timeline-dot dot-green"></div>
        <div class="timeline-icon-box bg-green-light text-green">
          <i class="bi bi-people-fill"></i>
        </div>
        <div class="timeline-content text-start">
          <h5 class="timeline-item-title"><?= $happyClients ?> Happy Clients</h5>
          <p class="timeline-item-desc">Families and businesses trust us</p>
        </div>
      </li>
      
      <!-- Point 3 -->
      <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
        <div class="timeline-dot dot-orange"></div>
        <div class="timeline-icon-box bg-orange-light text-orange">
          <i class="bi bi-patch-check-fill"></i>
        </div>
        <div class="timeline-content text-start">
          <h5 class="timeline-item-title">Verified &amp; Licensed</h5>
          <p class="timeline-item-desc">ISO certified packers and movers</p>
        </div>
      </li>
      
      <!-- Point 4 -->
      <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative mb-4">
        <div class="timeline-dot dot-red"></div>
        <div class="timeline-icon-box bg-red-light text-red">
          <i class="bi bi-shield-fill-check"></i>
        </div>
        <div class="timeline-content text-start">
          <h5 class="timeline-item-title"><?= $secureShifting ?> Secure Shifting</h5>
          <p class="timeline-item-desc">Complete transit insurance options</p>
        </div>
      </li>
      
      <!-- Point 5 -->
      <li class="trusted-timeline-item d-flex align-items-center gap-3 position-relative">
        <div class="timeline-dot dot-gold"></div>
        <div class="timeline-icon-box bg-gold-light text-gold">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
        <div class="timeline-content text-start">
          <h5 class="timeline-item-title">Pan-India Coverage</h5>
          <p class="timeline-item-desc">100+ branches across <?= $statesCovered ?> states</p>
        </div>
      </li>
    </ul>
  </div>

  <!-- Related Locations -->
  <div class="sidebar-widget widget-nearby-cities mt-4" id="sidebarRelatedLocations">
    <div class="nearby-cities-header">
      <div class="nearby-icon-circle">
        <i class="bi bi-geo-alt-fill"></i>
      </div>
      <div class="nearby-title-wrap">
        <h4 class="nearby-title">Nearby Cities</h4>
        <p class="nearby-subtitle">Packers and Movers near <?= $city ?>.</p>
      </div>
    </div>
    <div class="nearby-cities-pills" id="relatedCityTags">
      <?php
      $count = 0;
      $current_city_rendered = false;
      foreach ($cities as $ct):
        if ($count >= 10) break;
        
        $is_active = (strtolower($ct['nm']) == strtolower($city));
        if ($is_active) {
          $current_city_rendered = true;
        }
        
        $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
        $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
      <a href="<?= site_url("$statename/packers-movers-$link") ?>"
         class="nearby-city-pill <?= $is_active ? 'active-city' : '' ?>"
         id="relatedCity-<?= $count ?>">
        <i class="bi bi-building"></i><?= $ct['nm'] ?>
      </a>
      <?php
        $count++;
      endforeach;

      if (!$current_city_rendered && $count < 10):
        $link      = urlencode(strtolower(str_replace(" ", "-", $city)));
        $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
      ?>
      <a href="<?= site_url("$statename/packers-movers-$link") ?>"
         class="nearby-city-pill active-city"
         id="relatedCity-active">
        <i class="bi bi-building"></i><?= $city ?>
      </a>
      <?php endif; ?>
    </div>
  </div>

</aside><!-- /city-sidebar -->


