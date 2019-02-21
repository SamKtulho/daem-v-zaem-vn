$(function () {
    $(document).ready(function () {
        setTimeout(function () {
            $('.notice-block.action-1.not-opened').each(function (key, val) {
                $(val).slideDown();
                afterShow($(val));
            })
        }, 5000);
        $('.notice-close').on('click', function () {
            var $block = $(this).parent();
            $block.slideUp();
        });
    });
    function afterShow($block) {
        $block.removeClass('not-opened');
    }
});