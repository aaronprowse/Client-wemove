/**
 * Created by aaron on 14/06/2016.
 */
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        playerVars: {
            controls: 0,
            showinfo: 0,
            autohide: 1,
            modestbranding: 1,
            rel: 0,
            delay: 500
            },
        videoId: 'TcGa0HzELtc',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange

        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    event.target.playVideo();
    player.mute();
}

var done = false;
function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.ENDED) {
            player.onPlayerReady();
        }
}

function stopVideo() {
    player.stopVideo();
}

$(document).ready(function(){
    $("*[data-toggle='modal']").click(function() {
        var theModal = $(this).data( "target" ),
            videoSRC = $(this).attr( "data-theVideo" ),
            videoSRCauto = videoSRC+"?rel=0&amp;controls=1&amp;showinfo=0;autoplay=1;" ;
        $(theModal+' iframe').attr('src', videoSRCauto);
        $(theModal+' button.close').click(function () {
            $(theModal+' iframe').attr('src', videoSRC);
        });
    });
});

$("#videoModal").on('hidden.bs.modal', function (e) {
    $("#videoModal iframe").attr("src", "");
});