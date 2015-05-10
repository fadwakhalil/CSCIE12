    <!-- Custom styles for this template -->
        <link rel="stylesheet" href="scr/css/mycss/gallery.css">
        <link rel="stylesheet" href="scr/css/mycss/home.css">
    <!-- Add fancybox -->
        <link rel="stylesheet" href="scr/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="scr/fancyapps-fancyBox-18d1712/source/jquery.fancybox.js"></script>
        <script type="text/javascript" src="scr/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js"></script>
        <link rel="stylesheet" href="scr/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
        <script type="text/javascript" src="scr/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="scr/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js"></script>
        <link rel="stylesheet" href="scr/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
        <script type="text/javascript" src="scr/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js"></script>
    <!-- Add Youtube library -->
        <script src="http://www.youtube.com/player_api"></script>

    <!-- JS to add fancybox thumbnails -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox")    .attr('rel', 'data-gallery ')
                    .fancybox({
                        beforeShow: function () {
                            if (this.title) {
                                // New line
                                this.title += '<br />';
                                // Add FaceBook like button
                                this.title += '<iframe src="//www.facebook.com/plugins/like.php?href=' + this.href + '&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:23px;" allowTransparency="true"></iframe>';
                            };
                              $.fancybox.wrap.bind("contextmenu", function (e) {
                                    return false; 
                                });
                            },
                                openEffect	: 'fade',
                                closeEffect	: 'fade',
                                closeBtn    : true,
                                helpers : {
                                    title	: { type : 'float' }
                                }  
                            });
                        $(document).ready(function() {
                            $(".various").fancybox({
                                maxWidth	: 800,
                                maxHeight	: 600,
                openEffect  : 'none',
                closeEffect : 'none',
                nextEffect  : 'none',
                prevEffect  : 'none',
                                fitToView	: true,
                                width		: '70%',
                                height		: '70%',
                                autoSize	: false,
                                closeClick	: false,
helpers: {
        media: {}
    }                            });
                        });
                    });
        </script>
    <!-- JS to control audio player when youtube plays -->
        <script>
            $(document).ready(function() {
                var $audio = $('audio');
                var audio = $audio[0];
                
                $('.various').click(function(){
                    audio.pause();
                });
                
                $('.fancybox').click(function(){
                    if (audio.paused) {
                        audio.play();
                    }
                });
         });
        </script>
