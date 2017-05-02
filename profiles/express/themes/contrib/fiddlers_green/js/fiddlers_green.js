// Change 'node' to 'form' before sending to UCB-bulletin

(function ($) {
  if ((location.pathname.indexOf('form') > -1) && !($(".user-logged-in")[0])) {
    jQuery('.tabs--primary').hide();
  }
  $('.path-frontpage #edit-webform-submission-value-1--2').attr('size', '17');
  $('article.bulletin .content div:nth-child(2)').append('<div class="bulletin-footer"></div>');
  $('article.bulletin .content div:nth-last-child(-n+4)').appendTo('.bulletin-footer');
}(jQuery));