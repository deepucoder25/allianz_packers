<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<section class="service-breadcrumbs py-4">
    <div class="container">
        <nav class="bc-nav">
            <a href="<?= site_url() ?>">Home</a>
            <span class="bc-sep">›</span>
            <span class="bc-current">Frequently Asked Questions</span>
        </nav>
        <h1><span class="bc-title-white">FAQ</span> <span class="bc-title-orange">Section</span></h1>
        <p class="bc-desc">Have questions about your upcoming relocation? Browse our comprehensive FAQ section to find quick answers regarding packing, pricing, transit, and more.</p>
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
                    
                    <h2 class="service-section-title">Answers to Common Shifting Queries</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Shifting your home or vehicle can feel overwhelming, and it's completely normal to have questions about safety, packaging, timelines, and insurance. Here are answers to the questions we are asked most frequently by our clients.
                        </p>
                    </div>

                    <!-- Bootstrap Accordion for FAQs -->
                    <div class="accordion accordion-flush about-custom-faq-accordion" id="faqAccordion">
                        
                        <!-- Question 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-1">
                                <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
                                    1. What affects the cost of a move?
                                </button>
                            </h2>
                            <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Packers and movers charges in local cities depend on more than just distance. For example, moving a one-bedroom flat on the second floor without a lift is very different from shifting to a fully furnished villa. The amount of packing required, access for vehicles, labour, timing, and route all play a part. That's why we prefer giving quotations after understanding the details properly rather than throwing out random numbers.
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                                    2. Do I need to be present during packing?
                                </button>
                            </h2>
                            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Most customers stay around for the first part of the process. After that, many step away and let the team continue. Still, having someone available to answer questions about valuable or sensitive items makes things easier for everyone.
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                                    3. How long does a local move usually take?
                                </button>
                            </h2>
                            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    There isn't a perfect answer, some local relocations are wrapped up before lunch. Others stretch into the evening because of traffic, society restrictions, or simply because there are more items than expected. Every move is different, so timelines can vary from one relocation to another.
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                                    4. What happens if it rains on moving day?
                                </button>
                            </h2>
                            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    It happens, especially during monsoon months. The team carries protective materials and adjusts loading procedures when weather becomes an issue. Nobody can control the rain, but preparation usually prevents it from becoming a major problem.
                                </div>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-5">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                                    5. Can you move only a few items?
                                </button>
                            </h2>
                            <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Yes, not every customer is relocating an entire house. Some people need help with a sofa, refrigerator, bed, or a handful of large items. We've handled moves both big and small.
                                </div>
                            </div>
                        </div>

                        <!-- Question 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-6">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
                                    6. Are there any hidden charges later?
                                </button>
                            </h2>
                            <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    No, If additional costs are expected because of special requirements, they are discussed beforehand. Nobody likes surprises after the work is done. We don't either.
                                </div>
                            </div>
                        </div>

                        <!-- Question 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-7">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="false" aria-controls="faq-collapse-7">
                                    7. How early should I contact <?= $company3 ?>?
                                </button>
                            </h2>
                            <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-heading-7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Sooner is generally better. A couple of weeks gives more flexibility, particularly if you're planning a month-end or weekend move. Those dates disappear faster than most people expect.
                                </div>
                            </div>
                        </div>

                        <!-- Question 8 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-8">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="false" aria-controls="faq-collapse-8">
                                    8. How do you keep household goods safe during transportation?
                                </button>
                            </h2>
                            <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-heading-8" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Professional packers and movers use quality packing materials, protective wrapping, and proper loading methods to reduce the risk of damage during transportation. Fragile items usually receive extra protection based on their handling requirements.
                                </div>
                            </div>
                        </div>

                        <!-- Question 9 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-9">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="false" aria-controls="faq-collapse-9">
                                    9. Can you handle office shifting in every city?
                                </button>
                            </h2>
                            <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-heading-9" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Yes. Office relocation services can include packing workstations, furniture, documents, computers, and equipment. Proper planning helps businesses resume operations with minimal disruption.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'faqs']); ?>
            </div>
        </div>
    </div>
</section>



