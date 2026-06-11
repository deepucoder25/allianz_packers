<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $state ?></span>
        </nav>
        <h1><span class="bc-title-white">Packers and Movers in</span> <span class="bc-title-orange"><?= $state ?></span></h1>
        <p class="bc-desc">Professional relocation and shifting services across all major cities in <?= $state ?>.</p>
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
    <div class="pm-list-service-page py-5 bg-light">
    <div class="container pm-list-feature-section">
        <!-- Search and Info Wrapper -->
        <div class="pm-list-search-wrapper">
            <div class="pm-list-search-info">
                <h3>Select Your Shifting Destination</h3>
                <p>We serve <?= count($cities) ?> major cities in <?= $state ?>. Search or select a city below to get quotes.</p>
            </div>
            <div class="pm-list-search-box">
                <input type="text" id="citySearchInput" class="pm-list-search-input" placeholder="Search city or branch...">
                <i class="bi bi-search"></i>
            </div>
        </div>

        <!-- Empty State (No Results) -->
        <div id="noResultsAlert" class="pm-list-no-results mb-4">
            <i class="bi bi-geo-alt-fill"></i>
            <h4>No Branches Found</h4>
            <p>We couldn't find any Packers and Movers in "<span id="searchedCitySpan"></span>" for <?= $state ?>. Please try another query.</p>
        </div>

        <div class="row g-3" id="citiesGrid">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 pm-list-city-card-col" data-city-name="<?= htmlspecialchars($ct['nm']) ?>">
                    <a href="<?= site_url("$statename/packers-movers-$link") ?>" class="pm-list-city-card-link text-decoration-none">
                        <div class="pm-list-city-card card border-0 h-100 shadow-sm">
                            <div class="card-body p-3 d-flex align-items-center gap-2">
                                <!-- Location Icon -->
                                <div class="pm-list-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <!-- Content -->
                                <div class="pm-list-city-name">
                                    <span>Packers and Movers</span> <strong><?= htmlspecialchars($ct['nm']) ?></strong>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('citySearchInput');
    const noResultsAlert = document.getElementById('noResultsAlert');
    const searchedCitySpan = document.getElementById('searchedCitySpan');
    const cards = document.querySelectorAll('.pm-list-city-card-col');

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            let visibleCount = 0;

            cards.forEach(card => {
                const cityName = card.getAttribute('data-city-name').toLowerCase();
                if (cityName.includes(query)) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (visibleCount === 0) {
                searchedCitySpan.textContent = e.target.value;
                noResultsAlert.style.display = 'block';
            } else {
                noResultsAlert.style.display = 'none';
            }
        });
    }
});
</script>

