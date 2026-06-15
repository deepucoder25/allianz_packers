<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');
include 'city_content.php';

// Dynamic FAQS Configuration Array
$faqs = [
  ["q" => "How Much Do Packers and Movers Charge in $city?",
   "a" => "Packers and movers charges in $city depend on the volume of goods, distance, packing requirements, floor level, and vehicle type. Every move is different, so costs vary. Contacting the moving company with your requirements is the best way to get an accurate quotation.",
   "icon" => "bi-shield-fill-check"],
  ["q" => "How Many Days Before Shifting Should I Book Movers?",
   "a" => "Yes, most professional packers and movers provide packing materials as part of their service. These may include carton boxes, bubble wrap, packing paper, foam sheets, and protective covers to help keep household and office items safe during transportation.",
   "icon" => "bi-shield-check"],
  ["q" => "Can I Move Only a Few Items?",
   "a" => "Yes, you can move only a few items if required. Many customers relocate furniture, appliances, cartons, or office equipment without shifting an entire household. Packers and movers can arrange transportation based on the number and type of items being moved.",
   "icon" => "bi-clock"],
  ["q" => "How Long Does Local Shifting Take?",
   "a" => "<b>Local shifting in $city</b> is often completed on the same day. The exact time depends on the quantity of goods, packing requirements, distance between locations, traffic conditions, and accessibility at both the pickup and delivery points.",
   "icon" => "bi-box-seam"],
  ["q" => "How Do I Choose a Reliable Packers and Movers Company?",
   "a" => "Look for a company with verified customer reviews, transparent pricing, professional packing methods, and clear communication. Asking for a written quotation and understanding the services included can help avoid confusion later.",
   "icon" => "bi-globe"],
  ["q" => "Can Packers and Movers Help With Office Relocation?",
   "a" => "Yes. Professional movers can handle office furniture, computers, documents, workstations, and equipment while minimizing disruption to business operations.",
   "icon" => "bi-people-fill"]
];

// Dynamic Reviews Configuration Array
$reviews = [
  [
    "stars" => 5,
    "text" => "I was honestly worried about moving because we had a lot of furniture and kitchen items. The team started early in the morning and finished before evening. The best part was that I didn't have to keep reminding anyone what to do.",
    "name" => "Rahul Sharma",
    "city" => "Home Shifting",
    "initials" => "RS",
    "grad" => "grad-1"
  ],
  [
    "stars" => 5,
    "text" => "We shifted our office on a weekday and expected work to get affected. It didn't happen. The staff handled the desks, systems, and files properly. By the next morning, most of our team was working as usual.",
    "name" => "Neha Gupta",
    "city" => "Office Relocation",
    "initials" => "NG",
    "grad" => "grad-2"
  ],
  [
    "stars" => 5,
    "text" => "This was my first time transporting a car, so I had a few doubts. The vehicle reached without any issue, and the condition was exactly the same as when it was picked up. That was a relief.",
    "name" => "Amit Kumar",
    "city" => "Car Transportation",
    "initials" => "AK",
    "grad" => "grad-3"
  ],
  [
    "stars" => 5,
    "text" => "I wasn't moving an entire house, just a few large items and some boxes. Even then, the team treated the job seriously. The work was completed faster than I expected and nothing was misplaced.",
    "name" => "Priya Verma",
    "city" => "Local Shifting",
    "initials" => "PV",
    "grad" => "grad-4"
  ]
];
?>



<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- About Banner Card -->
        <div class="pm-city-about-banner-card mb-4">
          <div class="row align-items-center">
            <div class="col-md-7">
              <div class="banner-eyebrow">About Us</div>
              <h3 class="banner-title">Best Packers and Movers in <?= $city ?></h3>
              <?= $about_content; ?>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
              <div class="banner-image-wrap">
                <img src="<?= base_url('assets/images/services_modules/local_shifting.jpg') ?>"
                  alt="About <?= $company3 ?>" class="img-fluid rounded-4" loading="lazy">
              </div>
            </div>
            <div class="col-12"><?= $about_content1; ?></div>
          </div>
          <!-- Features Row Card -->
          <div class="city-content-card mt-4">
            <div class="row align-items-stretch text-start g-4">

              <!-- Feature 1 -->
              <div class="col-md-3 feature-col position-relative">
                <div class="feature-item">
                  <div class="feature-icon-box bg-pink-tint text-red mb-3">
                    <i class="bi bi-shield-fill-check"></i>
                  </div>
                  <h5 class="feature-title">Safe & Secure</h5>
                  <p class="feature-desc mb-0">We ensure the highest standards of safety for your belongings.</p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="col-md-3 feature-col position-relative">
                <div class="feature-item">
                  <div class="feature-icon-box bg-green-tint text-green mb-3">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <h5 class="feature-title">Expert Team</h5>
                  <p class="feature-desc mb-0">Skilled and trained professionals for a smooth moving experience.</p>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="col-md-3 feature-col position-relative">
                <div class="feature-item">
                  <div class="feature-icon-box bg-purple-tint text-purple mb-3">
                    <i class="bi bi-clock-fill"></i>
                  </div>
                  <h5 class="feature-title">On-Time Delivery</h5>
                  <p class="feature-desc mb-0">We value your time and ensure timely and reliable delivery.</p>
                </div>
              </div>

              <!-- Feature 4 -->
              <div class="col-md-3 feature-col">
                <div class="feature-item">
                  <div class="feature-icon-box bg-orange-tint text-orange mb-3">
                    <i class="bi bi-currency-rupee"></i>
                  </div>
                  <h5 class="feature-title">Affordable Pricing</h5>
                  <p class="feature-desc mb-0">Transparent pricing with no hidden charges.</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- About Card -->
        <div class="pm-city-content-card">

          <!-- Eyebrow + Heading -->
          <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
          <h2 class="pm-city-section-title">A Small Example From One of Our Recent Moves in
            <span class="pm-city-accent"> <?= $city ?></span>
          </h2>

          <div class="city-prose">
            <?php echo $htmlcontent; ?>
          </div>

          <!-- Feature Pills -->
          <div class="city-feature-pills mt-4">
            <div class="city-pill"><i class="bi bi-shield-check"></i> 100% Insured Shifting</div>
            <div class="city-pill"><i class="bi bi-truck"></i> Real-time GPS Tracking</div>
            <div class="city-pill"><i class="bi bi-box-seam"></i> Premium Multi-layer Packing</div>
            <div class="city-pill"><i class="bi bi-clock-history"></i> On-Time Delivery Guaranteed</div>
          </div>

          <div class="pm-city-map mt-4">
            <?php include 'city_map.php'; ?>
          </div>

        </div><!-- /pm-city-content-card -->

        <?php echo $htmlcontent1; ?>
        <?php echo $htmlcontent2; ?>

        <?php include 'city_reviews.php'; ?>
        <?php include 'city_faq.php'; ?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4 pm-city-sidebar-col">
        <?php include 'city_siderbar.php'; ?>
      </div><!-- /col-lg-4 -->

    </div><!-- /row -->

    <!-- Full width intercity routes list -->
    <?php
    $allowed_cities = [
        "Delhi", "Mumbai", "Bangalore", "Pune", "Hyderabad", 
        "Chennai", "Kolkata", "Noida", "Gurgaon", "Ghaziabad", 
        "Goa", "Jaipur", "Lucknow", "Patna", "Ahmedabad"
    ];
    if (in_array(strtolower(trim($city)), array_map('strtolower', $allowed_cities))):
    ?>
    <div class="row mt-4">
      <div class="col-12">
        <?php include 'city_from_to_links.php'; ?>
      </div>
    </div>
    <?php endif; ?>

  </div><!-- /container -->
</section>