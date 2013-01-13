$(function() {
$('a[@href^=http]').not('[@href*=drupalnorge.no]')
.addClass('external-link')
.click(function() {
window.open(this.href, '_blank');
return false;
});
});