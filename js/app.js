(function ($) {
    $(document).ready(function () {
        //Scroll
        var offset = 300,
            offset_opacity = 1200,
            scroll_top_duration = 700,
            $back_to_top = $('.scroll_top');

        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('scroll_top--visible') : $back_to_top.removeClass('scroll_top--visible scroll_top--fade_out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('scroll_top--fade_out');
            }
        });

        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                    scrollTop: 0 ,
                }, scroll_top_duration
            );
        });

        $(".btn[data-toggle='collapse']").click(function (e) {
            e.preventDefault();
            var $collapse = $($(this).attr("href"));
            var $untoggle = $(this).data("untoggle").split(";");

            if ($untoggle.length > 0) {
                for (var i = 0; i <= $untoggle.length; i++)
                    $($untoggle[i]).collapse("hide");
            }

            $collapse.collapse("toggle");
        });

        $(".nav.nav-tabs a").click(function() {
            var $parent = $($(this).attr("href"));
            var $tabs = $parent.siblings(".tab-pane");

            $tabs.each(function() {
                if($(this) !== $parent) {
                    $(this).find("video").each(function() {
                        console.log($(this));
                        $(this).get(0).pause();
                    });

                    $(this).find("iframe").each(function() {
                       // player.pauseVideo();
                    });
                }
            });

            var $videos = $parent.find("video");
            if($videos.length > 0) {
                $videos.get(0).play();
            }

            var $ytVideos = $parent.find("iframe");
            if($ytVideos.length > 0) {
                player.playVideo();
            }
        });

        if(window.location.hash) {
            console.log(window.location.hash);
            $("a[href='" + window.location.hash + "']").tab("show");
        }
    });
}(jQuery));