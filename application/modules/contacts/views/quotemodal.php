<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span>Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" class="form-control" name="mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <input type="text" class="form-control" name="mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-calendar-event"></i>
                                <input type="text" name="movedate" onfocus="this.type='date'; if(!this.value) this.value=new Date().toLocaleDateString('en-CA')" onblur="if(!this.value) this.type='text'" class="form-control" placeholder="Preferred Move Date">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="form-group">
                <div class="form-icon form-textarea-icon">
                    <i class="bi bi-chat-left-text"></i>
                    <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Describe your relocation needs..."></textarea>
                </div>
            </div>
                <div class="d-flex justify-content-center mt-2 contact-quote-gap">
                    <button id="submitbquotemodal" type="submit" class="btn-modal-submit">Get My Free Quote <i class="bi bi-send-fill ms-2"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="btn-modal-reset">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('quotemodal');
  if (form) {
    form.addEventListener('submit', function () {
      const movedate = form.querySelector('input[name="movedate"]')?.value || '';
      const messageField = form.querySelector('textarea[name="message"]');
      if (messageField && movedate) {
        const dateStr = 'Preferred Date: ' + movedate;
        if (!messageField.value.includes(dateStr)) {
          messageField.value += (messageField.value ? ' | ' : '') + dateStr;
        }
      }
    });
  }
});
</script>
