<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Our Branches</span>
        </nav>
        <h1><span class="bc-title-white">Our</span> <span class="bc-title-orange">Branches</span></h1>
        <p class="bc-desc"><?= $company3 ?> Packers and Movers — Delivering trusted relocation services across 20+ states in India.</p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-clock-history"></i></div>
                <div class="pill-text"><strong>Since <?= $startYear ?></strong><small><?= $experience ?> Years Legacy</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-patch-check-fill"></i></div>
                <div class="pill-text"><strong>ISO Certified</strong><small>Licensed &amp; Verified</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-people-fill"></i></div>
                <div class="pill-text"><strong>Expert Team</strong><small>CMD to Branch Staff</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="pill-text"><strong>Pan-India</strong><small>100+ Branches</small></div>
            </div>
        </div>
    </div>
    <div class="bc-wave-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
            <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<?php
$state = [
    [
        "image" => "karnataka.jpg",
        "category" => "Karnataka",
        "link" => "karnataka"
    ],
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
    [
        "image" => "delhi.jpg",
        "category" => "Delhi",
        "link" => "delhi"
    ],
    [
        "image" => "haryana.jpg",
        "category" => "Haryana",
        "link" => "haryana"
    ],
    [
        "image" => "gujarat.jpg",
        "category" => "Gujarat",
        "link" => "gujarat"
    ],
    [
        "image" => "punjab.jpg",
        "category" => "Punjab",
        "link" => "punjab"
    ],
    [
        "image" => "rajasthan.jpg",
        "category" => "Rajasthan",
        "link" => "rajasthan"
    ],
    [
        "image" => "tamil-nadu.jpg",
        "category" => "Tamil Nadu",
        "link" => "tamil-nadu"
    ],
    [
        "image" => "bihar.jpg",
        "category" => "Bihar",
        "link" => "bihar"
    ],
    [
        "image" => "goa.jpg",
        "category" => "Goa",
        "link" => "goa"
    ],
    [
        "image" => "telangana.jpg",
        "category" => "Telangana",
        "link" => "telangana"
    ],
    [
        "image" => "madhya-pradesh.jpg",
        "category" => "Madhya Pradesh",
        "link" => "madhya-pradesh"
    ],
    [
        "image" => "uttarakhand.jpg",
        "category" => "Uttarakhand",
        "link" => "uttarakhand"
    ],
    [
        "image" => "andhra-pradesh.jpg",
        "category" => "Andhra Pradesh",
        "link" => "andhra-pradesh"
    ]
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5 bg-light">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="text-muted">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($state as $item): ?>
                
                <!-- 4 Columns in One Row on Desktop -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">

                    <div class="pm-states-card bg-white rounded-4 overflow-hidden shadow-sm h-100">

                        <!-- Image -->
                        <div class="pm-states-img position-relative overflow-hidden">
                            <img class="img-fluid w-100"
                                src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                alt="<?= $item['category'] ?>">

                            <div class="pm-states-overlay">
                                <a href="<?= site_url($item['link']) ?>" class="btn btn-warning btn-sm rounded-pill px-3">
                                    View
                                </a>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-3 text-start d-flex align-items-center gap-2">
                            <span class="pm-states-yellow-dash"></span>
                            <h6 class="fw-semibold mb-0">
                                <a href="<?= site_url($item['link']) ?>"
                                    class="text-dark text-decoration-none">
                                    <?= htmlspecialchars($item['category']) ?>
                                </a>
                            </h6>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>



