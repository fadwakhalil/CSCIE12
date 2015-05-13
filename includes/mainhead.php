    <!-- Bootstrap core CSS -->
    <link href="scr/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="scr/css/mycss/home.css" rel="stylesheet" >
    <!-- Add jquery & bootsrap JS library -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="scr/js/bootstrap.min.js"></script>
    <!-- Add favicon -->
    <link rel="icon" type="image/png" href="scr/img/favicon.ico" sizes="16x16" />
    
<!-- JS to control audio player when music begins and song gallery music control -->
<script>
var audio;
$(function () {
    $("li[data-mp3]").on("click", function () {
        if (audio) audio.remove();
        $(this).find('img').toggle("#play");
        audio = $("<audio>").prependTo("body"),
        mp3 = $("<source></source>", {
            type: 'audio/mpeg',
            src: $(this).data("mp3")
        }).appendTo(audio),
        ogg = $("<source></source>", {
            type: 'audio/ogg',
            src: $(this).data("ogg")
        }).appendTo(audio);
       if (audio) audio[0].play()
        $(this).find('img').toggle("#pause");
    }).eq(2).click()
})

// Fires whenever a player has finished loading
function onPlayerReady(event) {
    event.target.playVideo();
}

// Fires when the player's state changes.
function onPlayerStateChange(event) {
    // Go to the next video after the current one is finished playing
    if (event.data === 0) {
        $.fancybox.next();
    }
}

// Fancybox for songs to control music
function onYouTubePlayerAPIReady() {

    // Initialise the fancyBox after the DOM is loaded
    $(document).ready(function () {
        $(".fancybox")
            .attr('rel', 'gallery')
            .fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            nextEffect: 'none',
            prevEffect: 'none',
            padding: 10,
            margin: 50,
            beforeClose: function () {
                if (audio) audio[0].play()
            },
            beforeShow: function () {
                if (audio) audio[0].pause();
                // Find the iframe ID
                var id = $.fancybox.inner.find('iframe').attr('id');

                // Create video player object and add event listeners
                var player = new YT.Player(id, {
                    events: {
                        'onReady': onPlayerReady,
                            'onStateChange': onPlayerStateChange
                    }
                });
            }
        });
    });

}
</script>
