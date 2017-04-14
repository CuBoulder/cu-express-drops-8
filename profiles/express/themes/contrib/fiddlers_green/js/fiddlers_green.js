// Change 'node' to 'form' before sending to UCB-bulletin

(function ($) {
  if ((location.pathname.indexOf('form') > -1) && !($(".user-logged-in")[0])) {
    jQuery('.tabs--primary').hide();
  }
  $('#edit-webform-submission-value-1--2.path-frontpage').attr('size', '17');
}(jQuery));