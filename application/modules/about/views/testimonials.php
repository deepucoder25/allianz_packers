<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Testimonials</span>
        </nav>
        <h1><span class="bc-title-white">Client</span> <span class="bc-title-orange">Testimonials</span></h1>
        <p class="bc-desc">Read the authentic experiences of families, corporates, and professionals who chose <?= $company3 ?> for their relocation needs.</p>
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

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">What Our Customers Say</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= $company3 ?></strong>, client satisfaction is our primary reward. Over our <?= $experience ?> year legacy, we have successfully relocated thousands of families, offices, and vehicles across India. Below are some reviews and testimonials from our valued clients.
                        </p>
                    </div>

                    <!-- Testimonials Grid -->
                    <div class="row">
                        <!-- Testimonial 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Hassle-Free Relocation</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "The funny thing is I spent more time worrying than packing.” We were moving out of our apartment in Whitefield and I kept imagining things going wrong. Broken TV. Scratched wardrobe. Lost boxes. Nothing like that happened. The team worked quietly, finished faster than expected, and by evening we were sitting in the new flat ordering food."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-1">RS</div>
                                        <div>
                                            <strong class="d-block small">Rohit Sharma</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Bengaluru</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-empty"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Excellent Shifting Services</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "My father kept following the workers around because he didn't trust anybody with his old furniture. After an hour he stopped checking and started offering them tea instead. That probably says enough."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-2">PS</div>
                                        <div>
                                            <strong class="d-block small">Priyank Srivastava</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Pune</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Delhi to Jammu Shifting</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "There was a delay because of traffic near Cyber City. Not their fault, honestly. What I appreciated was that someone actually called and explained what was happening. Most service providers disappear when there's a delay."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-3">MK</div>
                                        <div>
                                            <strong class="d-block small">Mahesh Kumar (Moksh)</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Gurgaon</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Bangalore to Varanasi Relocation</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "We shifted during peak summer. Bad timing, but that's when we got possession of the new house. The team looked exhausted by afternoon, yet they kept going without complaints. My washing machine and double-door fridge arrived exactly as they left."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-4">RW</div>
                                        <div>
                                            <strong class="d-block small">Rajeshwari</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Bangalore to Varanasi</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Bangalore to Jaipur Move</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "The biggest challenge wasn't the packing. It was our society's rules. Loading had to finish before 12 noon. Security guards were checking everything. Somehow the team managed it and still stayed on schedule."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-5">AK</div>
                                        <div>
                                            <strong class="d-block small">Ashish Kumar</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Bangalore to Jaipur</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Professional Home Moving</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "I don't usually leave reviews.” But one thing stood out. Every box was marked properly. Three days later while unpacking, we could still find things without opening twenty cartons first. Anyone who's moved before knows how valuable that is."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-1">PY</div>
                                        <div>
                                            <strong class="d-block small">Priyanka</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Verified Client</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 7 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "Booked bike transport. I expected the usual headache. Didn't get one. Pickup happened on Tuesday morning, delivery came when promised, and there weren't any mysterious extra charges at the end."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-1">KM</div>
                                        <div>
                                            <strong class="d-block small">Karan Malhotra</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Mumbai</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 7 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light position-relative about-choose-transition-hover about-testimonial-card">
                                <div class="quote-icon text-success position-absolute top-0 end-0 m-3 opacity-25">
                                    <i class="bi bi-quote about-quote-icon-lg"></i>
                                </div>
                                <div class="rating text-warning mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h6 class="fw-bold mb-1">Professional Home Moving</h6>
                                <p class="small text-muted mb-3 about-italic-text">
                                    "My wife was worried about the crockery cabinet because it belonged to her grandmother. It reached safely. To be honest, that's the only thing she cared about during the whole move."
                                </p>
                                <div class="user-details pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="about-avatar-initials avatar-grad-1">AC</div>
                                        <div>
                                            <strong class="d-block small">Amit Chatterjee</strong>
                                            <small class="text-muted text-uppercase about-font-sm-075">Kolkata, West Bengal</small>
                                        </div>
                                    </div>
                                    <span class="badge about-bg-success-soft text-success rounded-pill px-2 py-1 small about-font-sm-070">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                        

                    <!-- Quality commitment box -->
                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-4">
                        <h5 class="fw-bold text-success mb-2">Leave Your Feedback</h5>
                        <p class="mb-3 text-muted small">
                            Have you recently relocated with us? We would love to hear about your experience. Your reviews help us improve our services and guide other families in choosing the right relocation partner.
                        </p>
                        <a href="<?= site_url('reviews') ?>" class="btn btn-success btn-sm fw-bold">
                            <i class="bi bi-pencil-square me-1"></i> Write a Customer Review
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'testimonials']); ?>
            </div>
        </div>
    </div>
</section>



