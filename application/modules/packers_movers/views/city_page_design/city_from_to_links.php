<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Intercity Routes Section -->
<div class="city-content-card mt-4" id="intercityRoutesCard">
  
  <div class="faq-header-wrapper mb-4">
    <div class="faq-header-left">
      <span class="faq-badge">INTERCITY SERVICES</span>
      <h3 class="faq-main-title mt-2">Popular Shifting Services from <span class="text-highlight"><?= $city ?></span></h3>
      <p class="faq-subtitle mb-0 text-muted">We provide safe, reliable, and premium packers and movers services from <?= $city ?> to all major cities in India.</p>
    </div>
  </div>
  
  <?php
  $destinations = [
      ["city" => "Delhi", "state" => "delhi"],
      ["city" => "Mumbai", "state" => "maharashtra"],
      ["city" => "Bangalore", "state" => "karnataka"],
      ["city" => "Pune", "state" => "maharashtra"],
      ["city" => "Hyderabad", "state" => "telangana"],
      ["city" => "Chennai", "state" => "tamil-nadu"],
      ["city" => "Kolkata", "state" => "west-bengal"],
      ["city" => "Ahmedabad", "state" => "gujarat"],
      ["city" => "Jaipur", "state" => "rajasthan"],
      ["city" => "Noida", "state" => "uttar-pradesh"],
      ["city" => "Gurgaon", "state" => "haryana"],
      ["city" => "Ghaziabad", "state" => "uttar-pradesh"],
      ["city" => "Lucknow", "state" => "uttar-pradesh"],
      ["city" => "Patna", "state" => "bihar"],
      ["city" => "Indore", "state" => "madhya-pradesh"],
      ["city" => "Bhubaneswar", "state" => "odisha"],
      ["city" => "Dehradun", "state" => "uttarakhand"],
      ["city" => "Ranchi", "state" => "jharkhand"],
      ["city" => "Goa", "state" => "goa"],
      ["city" => "Chandigarh", "state" => "chandigarh"],
      ["city" => "Coimbatore", "state" => "tamil-nadu"],
  ];
  
  $from_slug = strtolower(str_replace(' ', '-', $city));
  
  // Filter destinations to exclude the current city
  $filtered_destinations = [];
  foreach ($destinations as $dest) {
      if (strtolower($dest['city']) !== strtolower($city)) {
          $filtered_destinations[] = $dest;
      }
  }
  
  // Split the destinations list into two halves
  $total_dest = count($filtered_destinations);
  $half = ceil($total_dest / 2);
  $left_destinations = array_slice($filtered_destinations, 0, $half);
  $right_destinations = array_slice($filtered_destinations, $half);
  ?>
  
  <div class="row g-4" id="intercityRoutesRow">
    
    <!-- Left Scroll Column -->
    <div class="col-md-6 intercity-scroll-col-left">
      <div class="intercity-routes-scroll-container">
        <div class="d-flex flex-column gap-2 pe-1">
          <?php foreach ($left_destinations as $dest): 
              $to_slug = strtolower(str_replace(' ', '-', $dest['city']));
              $route_link = "packers-and-movers-from-" . $from_slug . "-to-" . $to_slug;
          ?>
          <a href="<?= site_url($route_link) ?>" class="intercity-route-card d-flex align-items-center gap-3" aria-label="Packers and Movers from <?= $city ?> to <?= $dest['city'] ?>">
            <div class="route-icon-box">
              <i class="bi bi-truck"></i>
            </div>
            <div class="route-info text-start">
              <span class="route-label">Packers &amp; Movers From</span>
              <span class="route-name"><?= $city ?> To <?= $dest['city'] ?></span>
            </div>
            <i class="bi bi-chevron-right ms-auto route-arrow"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    
    <!-- Right Scroll Column -->
    <div class="col-md-6 intercity-scroll-col-right">
      <div class="intercity-routes-scroll-container">
        <div class="d-flex flex-column gap-2 pe-1">
          <?php foreach ($right_destinations as $dest): 
              $to_slug = strtolower(str_replace(' ', '-', $dest['city']));
              $route_link = "packers-and-movers-from-" . $from_slug . "-to-" . $to_slug;
          ?>
          <a href="<?= site_url($route_link) ?>" class="intercity-route-card d-flex align-items-center gap-3" aria-label="Packers and Movers from <?= $city ?> to <?= $dest['city'] ?>">
            <div class="route-icon-box">
              <i class="bi bi-truck"></i>
            </div>
            <div class="route-info text-start">
              <span class="route-label">Packers &amp; Movers From</span>
              <span class="route-name"><?= $city ?> To <?= $dest['city'] ?></span>
            </div>
            <i class="bi bi-chevron-right ms-auto route-arrow"></i>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    
  </div>

</div>
