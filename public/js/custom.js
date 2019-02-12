$(function() {
    $(document).ready(function(){$('.notice-block.action-1.not-opened').each(function(key,val){$(val).slideDown();afterShow($(val));});
        $(document).on('click',function(){$('.notice-block.action-2.not-opened').each(function(key,val){$(val).slideDown();afterShow($(val));})});
        $(window).scroll(function(){$('.notice-block.action-3.not-opened').each(function(key,val){$(val).slideDown();afterShow($(val));})});setTimeout(function(){$('.notice-block.action-4.not-opened').each(function(key,val){$(val).slideDown();afterShow($(val));})},5000);$('.notice-close').on('click',function(){var $block=$(this).parent();$block.slideUp();});

    });

    function afterShow($block){$block.removeClass('not-opened');}
});