<div class="hero-form-wrapper">
  <div class="quote-form-card">
    <div class="quote-form-header text-center">
      <h3 class="quote-form-title">GET A <span class="text-brand-red">FREE</span> MOVING QUOTE</h3>
      <p class="quote-form-subtitle">Quick, Easy & No Obligation</p>
      <div class="quote-form-divider"></div>
    </div>
    
    <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
      <div class="quote-form-inputs d-flex flex-column gap-2">
        <!-- Name & Phone Row -->
        <div class="row g-2">
          <div class="col-6">
            <div class="quote-input-group">
              <span class="quote-input-icon"><i class="bi bi-person"></i></span>
              <input type="text" name="name" class="quote-form-control" placeholder="Your Name" required>
            </div>
          </div>
          <div class="col-6">
            <div class="quote-input-group">
              <span class="quote-input-icon"><i class="bi bi-telephone"></i></span>
              <input type="tel" name="phone" class="quote-form-control" placeholder="Mobile Number" required>
            </div>
          </div>
        </div>

        <!-- Moving From & Moving To Row -->
        <div class="row g-2">
          <div class="col-6">
            <div class="quote-input-group quote-select-group">
              <span class="quote-input-icon"><i class="bi bi-geo-alt"></i></span>
              <input type="text" name="mfrom" class="quote-form-control" value="<?= isset($city) ? $city : '' ?>" placeholder="Moving From" required>
              <span class="quote-select-caret"><i class="bi bi-chevron-down"></i></span>
            </div>
          </div>
          <div class="col-6">
            <div class="quote-input-group quote-select-group">
              <span class="quote-input-icon"><i class="bi bi-geo-alt"></i></span>
              <input type="text" name="mto" class="quote-form-control" placeholder="Moving To" required>
              <span class="quote-select-caret"><i class="bi bi-chevron-down"></i></span>
            </div>
          </div>
        </div>

        <!-- Move Size & Preferred Move Date Row -->
        <div class="row g-2">
          <div class="col-6">
            <div class="quote-input-group quote-select-group w-100">
              <span class="quote-input-icon"><i class="bi bi-box-seam"></i></span>
              <select name="movesize" class="quote-form-control quote-select-field">
                <option value="" disabled selected>Move Size</option>
                <option value="1 BHK">1 BHK</option>
                <option value="2 BHK">2 BHK</option>
                <option value="3 BHK">3 BHK</option>
                <option value="4 BHK/Villa">4 BHK / Villa</option>
                <option value="Few Household Items">Few Items</option>
                <option value="Office Relocation">Office Relocation</option>
              </select>
              <span class="quote-select-caret"><i class="bi bi-chevron-down"></i></span>
            </div>
          </div>
          <div class="col-6">
            <div class="quote-input-group w-100">
              <span class="quote-input-icon"><i class="bi bi-calendar-event"></i></span>
              <input type="text" name="movedate" onfocus="(this.type='date')" onblur="(this.type='text')" class="quote-form-control" placeholder="Preferred Move Date">
            </div>
          </div>
        </div>
      </div>

      <!-- Hidden message field to combine movesize and movedate -->
      <input type="hidden" name="message" id="quoteform_message">

      <!-- Submit Button -->
      <button type="submit" class="quote-submit-btn mt-3">
        <span>GET FREE QUOTE</span>
        <i class="bi bi-arrow-right-short ms-2 fs-5"></i>
      </button>

      <div id="quoteformresults" class="mt-2 text-center"></div>
    </form>

    <!-- Footer Guarantee -->
    <div class="quote-form-footer text-center mt-3 d-flex align-items-center justify-content-center gap-1">
      <i class="bi bi-shield-fill-check text-success"></i>
      <span>Your information is 100% secure</span>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('quoteform');
  if (form) {
    form.addEventListener('submit', function () {
      const movesize = form.querySelector('select[name="movesize"]')?.value || '';
      const movedate = form.querySelector('input[name="movedate"]')?.value || '';
      let msg = '';
      if (movesize) msg += 'Move Size: ' + movesize;
      if (movedate) msg += (msg ? ' | ' : '') + 'Preferred Date: ' + movedate;
      const msgInput = document.getElementById('quoteform_message');
      if (msgInput) {
        msgInput.value = msg;
      }
    });
  }
});
</script>