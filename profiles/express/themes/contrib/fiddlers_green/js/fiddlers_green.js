// Change 'node' to 'form' before sending to UCB-bulletin

(function ($) {
  if ((location.pathname.indexOf('form') > -1) && !($(".user-logged-in")[0])) {
    jQuery('.tabs--primary').hide();
  }
  $('.path-frontpage #edit-webform-submission-value-1--2').attr('size', '17');
}(jQuery));