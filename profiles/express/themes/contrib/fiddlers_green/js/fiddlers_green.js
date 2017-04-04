// Change 'node' to 'form' before sending to UCB-bulletin

(function ($) {
  if ((location.pathname.indexOf('node') > -1) && !($(".user-logged-in")[0])) {
    jQuery('.tabs--primary').hide();
  }
}(jQuery));