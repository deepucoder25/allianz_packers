<!-- Testimonials Section -->
<div class="city-reviews-section mt-4">
  
  <!-- Header Row (Titles + Carousel Controls) -->
  <div class="reviews-header d-flex justify-content-between align-items-end mb-4">
    <div class="reviews-header-left">
      <span class="reviews-eyebrow">What Our Customers Say</span>
      <h3 class="reviews-main-title">Trusted by Thousands,<br>Recommended for a Reason</h3>
      <p class="reviews-subtitle m-0">Real experiences from our happy customers who relied on us for safe and stress-free moving.</p>
    </div>
    <div class="reviews-header-right d-flex gap-2 mb-1">
      <button class="slider-control-btn btn-prev" data-bs-target="#reviewsCarousel" data-bs-slide="prev" aria-label="Previous Review">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="slider-control-btn btn-next" data-bs-target="#reviewsCarousel" data-bs-slide="next" aria-label="Next Review">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>

  <!-- Bootstrap Carousel -->
  <div id="reviewsCarousel" class="carousel slide" data-bs-interval="false">
    <div class="carousel-inner px-1">
      
      <?php if (isset($reviews) && is_array($reviews)): ?>
      <?php 
        $num_reviews = count($reviews);
        for ($i = 0; $i < $num_reviews; $i++): 
      ?>
      <div class="carousel-item <?= ($i === 0) ? 'active' : '' ?>">
        <div class="row g-3 py-2">
          
          <!-- Card 1: Always visible (Mobile/Tablet/Desktop) -->
          <div class="col-12 col-md-6 col-lg-4">
            <?php 
              $rev1 = $reviews[$i]; 
            ?>
            <div class="city-new-review-card highlight-mobile-tablet">
              <div class="review-card-top d-flex justify-content-between align-items-center mb-3">
                <div class="new-review-stars">
                  <?php for ($s = 0; $s < $rev1['stars']; $s++): ?>
                  <i class="bi bi-star-fill"></i>
                  <?php endfor; ?>
                </div>
                <span class="quote-mark-icon"><i class="bi bi-quote"></i></span>
              </div>
              <p class="new-review-text">"<?= $rev1['text'] ?>"</p>
              <div class="new-review-author d-flex align-items-center gap-3">
                <div class="avatar-initials-circle <?= $rev1['grad'] ?>"><?= $rev1['initials'] ?></div>
                <div class="author-details">
                  <h5 class="author-name m-0"><?= $rev1['name'] ?></h5>
                  <span class="author-city"><?= $rev1['city'] ?></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 2: Visible on Tablet and Desktop -->
          <div class="col-md-6 col-lg-4 d-none d-md-block">
            <?php 
              $rev2 = $reviews[($i + 1) % $num_reviews]; 
            ?>
            <div class="city-new-review-card highlight-desktop">
              <div class="review-card-top d-flex justify-content-between align-items-center mb-3">
                <div class="new-review-stars">
                  <?php for ($s = 0; $s < $rev2['stars']; $s++): ?>
                  <i class="bi bi-star-fill"></i>
                  <?php endfor; ?>
                </div>
                <span class="quote-mark-icon"><i class="bi bi-quote"></i></span>
              </div>
              <p class="new-review-text">"<?= $rev2['text'] ?>"</p>
              <div class="new-review-author d-flex align-items-center gap-3">
                <div class="avatar-initials-circle <?= $rev2['grad'] ?>"><?= $rev2['initials'] ?></div>
                <div class="author-details">
                  <h5 class="author-name m-0"><?= $rev2['name'] ?></h5>
                  <span class="author-city"><?= $rev2['city'] ?></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 3: Visible on Desktop only -->
          <div class="col-lg-4 d-none d-lg-block">
            <?php 
              $rev3 = $reviews[($i + 2) % $num_reviews]; 
            ?>
            <div class="city-new-review-card">
              <div class="review-card-top d-flex justify-content-between align-items-center mb-3">
                <div class="new-review-stars">
                  <?php for ($s = 0; $s < $rev3['stars']; $s++): ?>
                  <i class="bi bi-star-fill"></i>
                  <?php endfor; ?>
                </div>
                <span class="quote-mark-icon"><i class="bi bi-quote"></i></span>
              </div>
              <p class="new-review-text">"<?= $rev3['text'] ?>"</p>
              <div class="new-review-author d-flex align-items-center gap-3">
                <div class="avatar-initials-circle <?= $rev3['grad'] ?>"><?= $rev3['initials'] ?></div>
                <div class="author-details">
                  <h5 class="author-name m-0"><?= $rev3['name'] ?></h5>
                  <span class="author-city"><?= $rev3['city'] ?></span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php endfor; ?>
      <?php endif; ?>

    </div>
  </div>

  <!-- Bottom Stats Bar Card -->
  <div class="reviews-stats-bar mt-4">
    <div class="row align-items-center text-center g-0">
      
      <!-- Col 1 -->
      <div class="col-4 stats-col position-relative">
        <div class="stats-item d-flex align-items-center justify-content-center gap-3">
          <div class="stats-icon-circle bg-pink-tint text-red">
            <i class="bi bi-quote"></i>
          </div>
          <div class="stats-text text-start">
            <strong class="stats-val text-red">4.8/5</strong>
            <span class="stats-lbl">Average Rating</span>
          </div>
        </div>
      </div>

      <!-- Col 2 -->
      <div class="col-4 stats-col position-relative">
        <div class="stats-item d-flex align-items-center justify-content-center gap-3">
          <div class="stats-icon-circle bg-green-tint text-green">
            <i class="bi bi-people-fill"></i>
          </div>
          <div class="stats-text text-start">
            <strong class="stats-val text-green"><?=$happyClients?></strong>
            <span class="stats-lbl">Happy Customers</span>
          </div>
        </div>
      </div>

      <!-- Col 3 -->
      <div class="col-4 stats-col">
        <div class="stats-item d-flex align-items-center justify-content-center gap-3">
          <div class="stats-icon-circle bg-blue-tint text-blue">
            <i class="bi bi-patch-check-fill"></i>
          </div>
          <div class="stats-text text-start">
            <strong class="stats-val text-blue">98%</strong>
            <span class="stats-lbl">Recommend Us</span>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>