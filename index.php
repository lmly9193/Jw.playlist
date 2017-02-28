<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Video Embeding System</title>
    <meta name="description" content="DESCRIPTION">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAABvAAAAbwHxotxDAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAFFQTFRF////AAAAGwAALQEBPgICOAICSCEhTwMDUkVFUkZGVD4+VQMDXx0dghERkgUFmQUFmo+PnpaWogUFpQUFrgYGuQYGugYG0wcH1QcH6Ojo////VIe8EAAAAAZ0Uk5TAAhV1OLk46qZIwAAAFJJREFUGFdjYMAEjEgAyGViZkECzEwMzBIogJmBFUwLiUMFWCECwhxsoigC/IKSXLyoAlJSAjz4BdC0CHOiGYpsLdxhfOzs3CJizJhOx/AcOgAA5zwM2aaHDyMAAAAASUVORK5CYII=">
    <script src='jwplayer-7.9.3/jwplayer.js'></script>
    <script src='jwplayer-7.9.3/provider.html5.js'></script>
    <script src='https://lmly9193.github.io/Jw.playlist/key.js'></script>
    <link rel="stylesheet" href='css/fullscreen.css'>
</head>

<body>
    <div id="myElement">LOADING...</div>
    <script>
        var playerInstance = jwplayer("myElement");
        playerInstance.setup({
            //Meta
            playlist: <?php include_once "playlist.php" ?> ,

            //Behavior
            mute: "false", //是否靜音
            autostart: "false",
            nextupoffset: "-10", //下則資訊顯示時機
            repeat: "false",
            abouttext: "技術提供",
            aboutlink: "https://github.com/lmly9193",

            //Appearance
            controls: "true",
            localization: {
                nextUp: "接下來",
                playlist: "影片清單"
            },
            height: "100%",
            width: "100%",
            displaytitle: "true",
            displaydescription: "true",
            timesliderabove: "true",

            //Rendering and Loading
            primary: "html5", //default:"html5" or "flash"
            preload: "none", //"auto","none","metadata"

            //Skin
            skin: {
            	url: "css/tube.css",
                name: "tube",
                active: "red",
                inactive: "white"
            },

            //Logo
            logo: {
                file: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAADdAAAA3QFwU6IHAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAL1QTFRF////AAAAAAAAAAAAAAAABgAABwAABAAAAgAAHQEBJAEBAAAAAwEBBgAABgMDBwUFDgsLEAsLEQEBEQsLEwEBGBMTGBQUHwcHKQcHKygoNQYGPjg4Pzw8TQgIVVJSWQMDYwMDZgQEcAQEcgQEcwQEdAQEfAQEiwUFjIyMkgUFkwUFlgUFmQUFoAUFo6OjpQUFsAYGuQYGvAYGwAYGwgYGzAcH0QcH0tLS0wcH1AcH1QcH4eHh7e3t/v7+////506o6gAAAAt0Uk5TAAMQKSy4w/L5/f2Ug/EpAAAArklEQVQ4y72TxxKCMBBAF2mB2HsviCjYxQZq/v+znHhzJLsHR981byZlXwD+gpZToL2WDYtxBcwyAHTmBmsFgct0MJ0kVZI4Jth+iuDbwENMCPmb4HknVIhqjdYWE8a9+zA/OWOCEJtye4cK4tYvzq6YIB6LUjfGBCEuncFXArUFdUjimsRDRZUm/tTksLLH/RlMXC9IqofRVAaTkdxqLlmm+6NMjoyWzJ7+OD/nCQkviYvQ3qcwAAAAAElFTkSuQmCC",
                hide: "false",
                link: "https://github.com/lmly9193",
                margin: "16",
                position: "top-left" //default:"top-right" or "top-left","bottom-left","bottom-right"
            },

            //Sharing
            sharing: {
                heading: "分享",
                //link: "http://localhost:20080/z/?<?php echo $_SERVER["QUERY_STRING"]?>",
                //code: "<iframe src='https://drive.google.com/file/d/0B55s6j212kotVUE0ZVp5R0lhSlE/preview' width='640' height='480'></iframe>",
                sites: ["facebook", "twitter", "tumblr", "googleplus", "reddit", "linkedin", "interest", "email"]
            }
        });
        playerInstance.addButton(
            "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAQAAABuvaSwAAAAeklEQVR42r2Phw3FUAgD304sySws6V/uV55RohaTnpN1rOujbBMzWuqpI/QYVqiUyue1DKz4DnZc/5sBXZLvHS5e/s6glecO52YuwrOHmxjbGNiiKfEOMcAI4Mz/WYMVAxgFA3d3wLOwdjiWjW8uP3tzaIwRVM6zLskN/4V6x5JopH8AAAAASUVORK5CYII=",
            "在新視窗中開啟",
            function() {
                window.location.href = playerInstance.getPlaylistItem()['preview'];
            },
            "newtabe"
        );
        playerInstance.addButton(
            "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAAEGAAABBgHN0zO8AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAACRQTFRF////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAxyY+ZQAAAAt0Uk5TAAQcJDCTqLjA2+fJNlWeAAAAbklEQVQoU2NgAIHs3UCwjQEBhoaAaHl5+WqQwC4gIxAowDR7NxzsVAAp0UQITALrQSiBKEBSMglqLEwJTAFcCUwBTAlCAVQJQgFECbICsBJkBSAlqAqASlAVAJWgKSANWHQggWaggPduJLCFCAEAFoeRkek3bcsAAAAASUVORK5CYII=",
            "下載",
            function() {
                window.location.href = playerInstance.getPlaylistItem()['file'];
            },
            "download"
        );
    </script>
</body>

</html>
