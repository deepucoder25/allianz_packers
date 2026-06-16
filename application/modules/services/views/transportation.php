<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-services') ?>">Services</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Transportation Service</span>
        </nav>
        <h1><span class="bc-title-white">Transportation</span> <span class="bc-title-orange">Service</span></h1>
        <p class="bc-desc">Reliable goods transport and carrier logistics. We operate a vast fleet of container trucks,
            ensuring safe, on-time delivery across major cities.</p>
        <div class="bc-features">
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-clock-history"></i></div>
                <div class="pill-text"><strong>Since <?= $startYear ?></strong><small><?= $experience ?> Years
                        Legacy</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-patch-check-fill"></i></div>
                <div class="pill-text"><strong>ISO Certified</strong><small>Licensed &amp; Verified</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-people-fill"></i></div>
                <div class="pill-text"><strong>Expert Team</strong><small>Professional Drivers</small></div>
            </div>
            <div class="bc-feature-pill">
                <div class="pill-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="pill-text"><strong>Pan-India</strong><small>100+ Branches</small></div>
            </div>
        </div>
    </div>
    <div class="bc-wave-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 64" preserveAspectRatio="none">
            <path d="M0,30 C480,64 960,0 1440,30 L1440,64 L0,64 Z" fill="#f8fafc" />
        </svg>
    </div>
</section>

<!-- Main Page Content Section -->
<section class="service-details-section">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Transportation Services</h2>
                    <p>Moving your vehicle isn't just about getting it from one spot to another. It’s about trust.
                        You’re handing over your daily convenience, and you need to know it will arrive exactly how you
                        left it. Most people don’t realize the logistics involved until they’re in the middle of it.
                        Traffic, road conditions, and the actual loading process, these are where things usually go
                        sideways.</p>

                    <p>At <strong><?= $company3 ?></strong>, we don't just "move" vehicles. We look at the specifics:
                        the car type, the route, and even the weather forecasts. It’s not about ticking boxes; it’s
                        about making sure your car isn't just another item on a manifest.</p>

                    <p>Need to get moving? Reach out to us at [<?= $phone ?>] for a direct, honest quote. No jargon,
                        just the plan.</p>

                    <h3 class="service-section-title mt-5">How We Handle Your Vehicle</h3>
                    <p>There’s a method to this. It starts long before the truck shows up.</p>
                    <ul class="service-features-list">
                        <li><i class="bi bi-check-circle-fill"></i> <span>Pre-trip inspection (we document every
                                existing mark, so there are no surprises).</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Using soft-tie straps instead of harsh
                                chains.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Carrier selection based on clearance
                                levels.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>GPS updates so you actually know where the
                                vehicle is.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i> <span>Door-to-door coordination (wherever local
                                rules permit).</span></li>
                    </ul>
                    <p>It sounds straightforward, but doing this repeatedly, and doing it well, requires experience.
                        We’ve seen enough "do-it-yourself" attempts end in scratched paint and high repair bills to know
                        that professional handling is the only way to go.</p>

                    <h3 class="service-section-title mt-5">Our Transport Workflow</h3>
                    <div class="service-process-timeline">
                        <div class="service-process-step">
                            <h5>1. Cargo Verification &amp; Load Planning</h5>
                            <p>We weigh, inspect, and organize cargo packages, choosing the best container size to
                                prevent internal shifts.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>2. Professional Loading &amp; Stacking</h5>
                            <p>Our handlers arrange crates and boxes inside the truck container, putting heavier loads
                                at the bottom and using lashes for security.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>3. Secure Highway Transit</h5>
                            <p>Vehicles travel along primary highways under regular communication with regional
                                logistics dispatch offices.</p>
                        </div>
                        <div class="service-process-step">
                            <h5>4. Destination Handover</h5>
                            <p>Goods are unloaded at the destination site, verified against the original packing
                                manifest, and successfully handed over.</p>
                        </div>
                    </div>
                    <h4 class="service-section-title mt-5">Why Professional Service Matters</h4>
                    <p>Yes, you can drive it yourself. But think about the trade-offs: fuel costs, toll taxes, hotel
                        stays, and the pure fatigue of driving hundreds of kilometers. Plus, there’s the wear and tear
                        on the engine.</p>

                    <p>When you choose a professional service, you’re buying back your time. You can focus on settling
                        into your new home while we handle the highway miles. It’s a cleaner, more predictable way to
                        relocate.</p>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3 mt-5">
                        <h6 class="fw-bold text-danger mb-2">The Process</h6>
                        <p>We keep it simple. You share the car model and the route. We look at the best carrier
                            options, open or enclosed, and give you a clear price.</p>

                        <p>Once we agree on the timing, our team handles the inspection. We check battery levels and
                            fuel, secure the car properly, and stay in touch until it reaches the destination. For us,
                            the job isn't finished until you’ve checked the car and signed off.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar'); ?>
            </div>
        </div>
    </div>
</section>