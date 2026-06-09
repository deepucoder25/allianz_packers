<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$branch_offices = [
    ["city" => "DELHI", "address" => "Plot No- 44A, B Block, Near Old Shiv Mandir, Rangpur, MAHIPALPUR, NEW DELHI 110037, INDIA", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "MUMBAI", "address" => "PPA..C PAWANE MIDC, NAVI MUMBAI -400705", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "BANGALORE", "address" => "No.43 1st floor 2nd main, D.D.U.T.T.L. Yeshwantpur, Bangalore 560022", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "JAIPUR", "address" => "Bhukhand No. 81, 200 ft. By Pass, Near Ajmer Road, Heerapura, Jaipur - 302021", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "PUNE", "address" => "No.3/20, Near Ashok Sah Bank, Vallabh Nagar, S.T.Stand Road, Pimpri, Pune-18", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "KOLKATA", "address" => "156A / 73 B.T. ROAD DUNLOP, Kolkata-700108", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "CHENNAI", "address" => "Door No 74, Sanirkuppm Poonamalli, Chennai - 600056", "phone" => "+91-931-107-3399", "email" => "info@allianzpackers.in"],
    ["city" => "HYDERABAD", "address" => "Plot No.220, H. No. 1-23-135, Bhodevi Nagar, Tirumalgherry, Secunderabad-500015", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "GURGAON", "address" => "Gurudwara Complex, Opp. Maruti Gate No.2, Old Palam, Gurgaon", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "NOIDA", "address" => "Shiv Mandir Wali Gali, Near Shiv Mandir, Noida - 201301", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "CHANDIGARH", "address" => "Shop no:-2 Pharbhat Road, Zirakpur, Punjab", "phone" => "09999062299", "email" => "info@allianzpackers.in"],
    ["city" => "LUCKNOW", "address" => "S-175, Ist Floor Transport Nagar Near RTO, Kanpur Road Lucknow-226004", "phone" => "09999062299", "email" => "info@allianzpackers.in"]
];
?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Contact Us</span>
        </nav>
        <h1><span class="bc-title-white">Contact</span> <span class="bc-title-orange">Us</span></h1>
        <p class="bc-desc">Get in touch with <?= $company3 ?> Packers and Movers. We are here to help you 24/7 with your relocation needs.</p>
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

<!-- Contact Details & Form Section -->
<section class="contact-section py-5 bg-light-section">
    <div class="container my-4">
        <div class="row g-5">
            <!-- Contact Details Stack -->
            <div class="col-lg-5 d-flex flex-column gap-3 contact-cards-stack">
                <div class="contact-header-wrap mb-2">
                    <h2 class="fw-bold contact-title-primary mb-2">Get In Touch</h2>
                    <p class="text-muted contact-desc-muted mb-0">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>
                </div>
                
                <!-- Box 1: Head Office -->
                <div class="contact-card-unique position-relative p-4 d-flex align-items-start gap-3 shadow-sm">
                    <div class="contact-icon-unique d-flex justify-content-center align-items-center">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-box-content">
                        <h5 class="fw-bold mb-1 text-white contact-card-title">Head Office Address</h5>
                        <p class="mb-0 contact-card-text">Plot No- 44A, B Block, Near Old Shiv Mandir, Rangpur, Mahipalpur, New Delhi 110037, India</p>
                    </div>
                </div>

                <!-- Box 2: Phone Numbers -->
                <div class="contact-card-unique position-relative p-4 d-flex align-items-start gap-3 shadow-sm">
                    <div class="contact-icon-unique d-flex justify-content-center align-items-center">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="contact-box-content">
                        <h5 class="fw-bold mb-1 text-white contact-card-title">Phone Numbers</h5>
                        <p class="mb-0 contact-card-text">
                            <a href="<?= $phonehtml ?>" class="contact-unique-link"><?= $phone ?></a>
                            <?php if (isset($phone1) && !empty($phone1)): ?>
                            <span class="d-block mt-1"><a href="<?= $phonehtml1 ?>" class="contact-unique-link"><?= $phone1 ?></a></span>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

                <!-- Box 3: Email & Web -->
                <div class="contact-card-unique position-relative p-4 d-flex align-items-start gap-3 shadow-sm">
                    <div class="contact-icon-unique d-flex justify-content-center align-items-center">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="contact-box-content">
                        <h5 class="fw-bold mb-1 text-white contact-card-title">Email &amp; Website</h5>
                        <p class="mb-0 contact-card-text">
                            <a href="<?= $mailhtml ?>" class="contact-unique-link"><?= $mail ?></a>
                            <span class="d-block mt-1"><a href="http://www.allianzpackers.com/" target="_blank" rel="noopener" class="contact-unique-link">www.allianzpackers.com</a></span>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-box bg-white p-4 p-md-5 rounded-4 shadow-lg h-100 contact-border-gradient">
                    <h2 class="fw-bold mb-4 contact-title-primary">Send Us A Message</h2>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Your Name *</label>
                                <input type="text" name="name" class="form-control py-2 contact-input-rounded" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control py-2 contact-input-rounded" placeholder="Mobile Number" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control py-2 contact-input-rounded" placeholder="hello@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Your Message</label>
                                <textarea name="message" class="form-control py-2 contact-input-rounded" rows="5" placeholder="How can we help you?"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn-gradient-submit w-100 py-3">
                                    <i class="bi bi-send-fill me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Branch Offices Section -->
<section class="branch-offices-section py-5 bg-white border-top">
    <div class="container my-3">
        <div class="text-center mb-5">
            <span class="office-eyebrow">Our Locations</span>
            <h2 class="fw-bold office-main-title mt-2">Our Branch Offices Across India</h2>
            <p class="office-subtitle text-muted">We have a strong presence in all major Indian metro cities to support your shifting needs.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($branch_offices as $office): ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="branch-card p-4 rounded-4 h-100 shadow-sm border border-light-subtle">
                    <h5 class="branch-city fw-bold mb-3"><?= $office['city'] ?></h5>
                    <p class="branch-address text-muted mb-3"><i class="bi bi-geo-alt-fill me-2 text-danger"></i><?= $office['address'] ?></p>
                    <p class="branch-phone text-muted mb-2"><i class="bi bi-telephone-fill me-2 text-success"></i><?= $office['phone'] ?></p>
                    <p class="branch-email text-muted mb-0"><i class="bi bi-envelope-fill me-2 text-warning"></i><?= $office['email'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
