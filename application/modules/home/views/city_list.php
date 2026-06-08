<?php
$locations = [
    // Column 1
    ["city" => "Delhi", "state" => "delhi"],
    ["city" => "Noida", "state" => "uttar-pradesh"],
    ["city" => "Gurgaon", "state" => "haryana"],
    ["city" => "Ghaziabad", "state" => "uttar-pradesh"],
    ["city" => "Chandigarh", "state" => "chandigarh"],
    ["city" => "Jaipur", "state" => "rajasthan"],
    ["city" => "Dehradun", "state" => "uttarakhand"],
    ["city" => "Mohali", "state" => "punjab"],
    ["city" => "Ambala", "state" => "haryana"],
    ["city" => "Faridabad", "state" => "haryana"],

    // Column 2
    ["city" => "Kolkata", "state" => "west-bengal"],
    ["city" => "Lucknow", "state" => "uttar-pradesh"],
    ["city" => "Patna", "state" => "bihar"],
    ["city" => "Kanpur", "state" => "uttar-pradesh"],
    ["city" => "Jammu", "state" => "jammu-and-kashmir"],
    ["city" => "Indore", "state" => "madhya-pradesh"],
    ["city" => "Bhubaneswar", "state" => "odisha"],
    ["city" => "Jabalpur", "state" => "madhya-pradesh"],
    ["city" => "Hubli", "state" => "karnataka"],
    ["city" => "Meerut", "state" => "uttar-pradesh"],

    // Column 3
    ["city" => "Mumbai", "state" => "maharashtra"],
    ["city" => "Pune", "state" => "maharashtra"],
    ["city" => "Navi Mumbai", "state" => "maharashtra"],
    ["city" => "Ahmedabad", "state" => "gujarat"],
    ["city" => "Nagpur", "state" => "maharashtra"],
    ["city" => "Bhopal", "state" => "madhya-pradesh"],
    ["city" => "Surat", "state" => "gujarat"],
    ["city" => "Jhansi", "state" => "uttar-pradesh"],
    ["city" => "Ranchi", "state" => "jharkhand"],
    ["city" => "Goa", "state" => "goa"],

    // Column 4
    ["city" => "Chennai", "state" => "tamil-nadu"],
    ["city" => "Bangalore", "state" => "karnataka"],
    ["city" => "Hyderabad", "state" => "telangana"],
    ["city" => "Coimbatore", "state" => "tamil-nadu"],
    ["city" => "Visakhapatnam", "state" => "andhra-pradesh"],
    ["city" => "Madurai", "state" => "tamil-nadu"],
    ["city" => "Mysore", "state" => "karnataka"],
    ["city" => "Tirupur", "state" => "tamil-nadu"],
    ["city" => "Kerala", "state" => "kerala"],
];
?>

<section class="search-location-section py-5">
  <div class="container">
    
    <!-- Section Header (reusing services styles) -->
    <div class="services-home-header mb-5">
      <div class="services-home-accent text-uppercase mb-2">
        <span class="dot-accent">—</span> LOCATIONS WE SERVE <span class="dot-accent">—</span>
      </div>
      <h2 class="services-home-title">Our Service <span>Locations</span></h2>
      <div class="services-home-divider mb-3"></div>
      <p class="services-home-desc">
        We provide professional, secure, and hassle-free relocation services in all major cities across India.
      </p>
    </div>

    <!-- City Cards Grid -->
    <div class="row g-3 justify-content-center" id="cityCardsRow">
      <?php foreach ($locations as $index => $location): 
          $citySlug = strtolower(str_replace(' ', '-', $location['city']));
          $link = $citySlug . "-packers-movers-" . $location['state'];
          $delay = ($index % 30) * 0.025;
      ?>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 city-card-col" style="animation-delay: <?= $delay ?>s;">
          <a href="<?= site_url($link) ?>" class="location-pill-card" aria-label="Packers and Movers in <?= htmlspecialchars($location['city']) ?>">
            <div class="location-icon-circle">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="location-info">
              <span class="location-sub">Packers &amp; Movers</span>
              <span class="location-city"><?= htmlspecialchars($location['city']) ?></span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

