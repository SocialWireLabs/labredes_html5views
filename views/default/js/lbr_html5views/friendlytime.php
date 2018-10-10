    var labredes = labredes || {};

    labredes.friendlytime_update = function() {
        $('time.lbr_momentjs').each(function() {
            $(this).html(moment($(this).attr('datetime')).fromNow());
        });
    };

    $(function() {
        $.ajaxSetup({
            cache: true
        });
        
        var moment_url = elgg.get_site_url() + 'js/lbr_html5views/moment.' + elgg.config.lastcache + '.js';
        if (elgg.config.simplecache_enabled) {
            moment_url = elgg.get_site_url() + 'cache/js/default/lbr_html5views/moment.' + elgg.config.lastcache + '.js';
        }
        $.getScript(moment_url, function() {
            moment.lang(elgg.get_language());

            labredes.friendlytime_update();
            setInterval(labredes.friendlytime_update, 30000);
        });
    });
