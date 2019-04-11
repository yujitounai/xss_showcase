// ----------------------------------------------------------------------------
$(function () {
    var hash = location.hash;

    if ($(hash).length) {
        var obj = $(hash);
        var anchor = obj.closest('.tab-contents').attr("id");
        var $tab = $('.tabList a').filter('[href=#'+ anchor +']');
        if ($tab.length > 0) {
            $tab.eq(0).click();
        }
        var target = obj.offset().top;
        $("html, body").scrollTop(target);
    }
});

