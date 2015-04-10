$(document).ready(function() {
  var $body = $('body');

  $body.on('change','.show-menu', function() {
    $body.toggleClass('flyout-open',$(this).is(':checked'));
  });
});