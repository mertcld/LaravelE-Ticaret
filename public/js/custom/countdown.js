$('[data-countdown]').each(function() {

    var $this = $(this),
        finalDate = $(this).data('countdown');
    if (!$this.hasClass('countdown-full-format')) {
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<span class="countdown-time"><span>%D</span><small>Gün</small></span> <span class="countdown-time"><span>%H</span><small>Saat</small></span> <span class="countdown-time"><span>%M</span><small>Dakika</small></span> <span class="countdown-time"><span>%S</span><small>Saniye</small></span>'));
        });
    } else {
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<span class="countdown-time"><span>%D</span><small>Gün</small></span> <span class="countdown-time"><span>%H</span><small>Saat</small></span> <span class="countdown-time"><span>%M</span><small>Dakika</small></span> <span class="countdown-time"><span>%S</span><small>Saniye</small></span>'));
        });
    }
});