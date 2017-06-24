(function() {
    $('#menu-menu_nav').append('<li class="menu-line"></li>')
    $(".menu-line").css('visibility','hidden')
    console.log("twice")
    $('#menu-menu_nav > li:nth-child(4)').css('border-left' ,'solid 1px white')
    $('#menu-menu_nav > li:nth-child(1)').hover(function(){
        $(".menu-line").css('visibility','visible')
        $(".menu-line").css('-webkit-transform', 'translate3d(0%, 0, 0)');
        $(".menu-line").css('transform', 'translate3d(0%, 0, 0)');
    }, function(){
        $(".menu-line").css('visibility','hidden')
    })
    $('#menu-menu_nav > li:nth-child(2)').hover(function(){
        $(".menu-line").css('visibility','visible')
        $(".menu-line").css('-webkit-transform', 'translate3d(440%, 0, 0)');
        $(".menu-line").css('transform', 'translate3d(440%, 0, 0)');
    }, function(){
        $(".menu-line").css('visibility','hidden')
    })
    $('#menu-menu_nav > li:nth-child(3)').hover(function(){
        $(".menu-line").css('visibility','visible')
        $(".menu-line").css('-webkit-transform', 'translate3d(880%, 0, 0)');
        $(".menu-line").css('transform', 'translate3d(880%, 0, 0)');
    }, function(){
        $(".menu-line").css('visibility','hidden')
    })
    $('#menu-menu_nav > li:nth-child(4)').hover(function(){
        $(".menu-line").css('visibility','visible')
        $(".menu-line").css('-webkit-transform', 'translate3d(1320%, 0, 0)');
        $(".menu-line").css('transform', 'translate3d(1320%, 0, 0)');
    }, function(){
        $(".menu-line").css('visibility','hidden')
        })
})(window);