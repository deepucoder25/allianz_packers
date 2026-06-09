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
                                    1. What happens to my booking if I have to change or cancel the date?
                                </button>
                            </h2>
                            <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    We understand that shifting plans can change at any time. You get a Free Cancellation policy when you book with <?= $company3 ?>. There is no risk; you don't lose out on anything when you cancel your booking.
                                </div>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                                    2. Why should I pay tokens in advance to Packers and Movers before the move?
                                </button>
                            </h2>
                            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    The token is to confirm slot bookings and avoid any last-minute delays or inconveniences. Our team will adjust the token amount in the final quotation payment.
                                </div>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                                    3. Can I reschedule my packers and movers movement after I have paid the token amount?
                                </button>
                            </h2>
                            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    You can reschedule your movement by informing your dedicated move manager, whose details are in the confirmation email. Your move manager will reschedule the shifting &amp; movement based on the availability of slots.
                                </div>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                                    4. My movement date still needs to be fixed. How can I book movers in advance?
                                </button>
                            </h2>
                            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    You can notify your dedicated movement manager to reschedule movement up to 2 days before the booked date. Change in relocation date is FREE of cost for the following categories: weekdays to weekdays, weekend to weekend, and weekend to weekdays.
                                </div>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-5">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                                    5. Will the packers and movers dismantle beds and other furniture?
                                </button>
                            </h2>
                            <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    Our packers and movers can dismantle and assemble beds and other furniture without extra costs. However, you will have to notify your dedicated shifting manager before moving.
                                </div>
                            </div>
                        </div>

                        <!-- Question 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-6">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
                                    6. Is a preliminary inspection required before booking the movement?
                                </button>
                            </h2>
                            <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    No, instant quotes are generated per the apartment &amp; room size/inventory list, movement date, and movement distance.
                                </div>
                            </div>
                        </div>

                        <!-- Question 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h2 class="accordion-header" id="faq-heading-7">
                                <button class="accordion-button collapsed fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="false" aria-controls="faq-collapse-7">
                                    7. Do you provide insurance for the items?
                                </button>
                            </h2>
                            <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-heading-7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-white text-muted small pt-0">
                                    You can ensure your items by informing your dedicated move manager. You will be required to purchase our best-secured package. This secured package has many other benefits, along with insurance.
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



