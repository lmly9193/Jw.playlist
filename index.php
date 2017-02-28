<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Video Embeding System</title>
    <meta name="description" content="DESCRIPTION">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAABvAAAAbwHxotxDAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAFFQTFRF////AAAAGwAALQEBPgICOAICSCEhTwMDUkVFUkZGVD4+VQMDXx0dghERkgUFmQUFmo+PnpaWogUFpQUFrgYGuQYGugYG0wcH1QcH6Ojo////VIe8EAAAAAZ0Uk5TAAhV1OLk46qZIwAAAFJJREFUGFdjYMAEjEgAyGViZkECzEwMzBIogJmBFUwLiUMFWCECwhxsoigC/IKSXLyoAlJSAjz4BdC0CHOiGYpsLdxhfOzs3CJizJhOx/AcOgAA5zwM2aaHDyMAAAAASUVORK5CYII=">
    <script src='jwplayer/jwplayer.js'></script>
    <script src='jwplayer/provider.html5.js'></script>
    <script src='https://lmly9193.github.io/Jw.playlist/key.js'></script>
    <link rel="stylesheet" href='css/fullscreenless.css'>
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
            preload: "metadata", //"auto","none","metadata"

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
            "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOC4xLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSI5My4ycHgiIGhlaWdodD0iMTAwcHgiIHZpZXdCb3g9IjYwOS40IDY0NS44IDkzLjIgMTAwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDYwOS40IDY0NS44IDkzLjIgMTAwOyINCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRkZGRkZGO30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNjk2LjIsNzQ1LjhINjE2Yy0zLjcsMC02LjYtMi45LTYuNi02LjZ2LTI2LjdjMC0zLjcsMi45LTYuNiw2LjYtNi42YzMuNywwLDYuNiwyLjksNi42LDYuNnYyMGg2Ni43di0yMA0KCWMwLTMuNywyLjktNi42LDYuNi02LjZjMy43LDAsNi42LDIuOSw2LjYsNi42djI2LjdDNzAyLjgsNzQyLjksNjk5LjksNzQ1LjgsNjk2LjIsNzQ1Ljh6IE02NjAuMiw3MDcuNWMtMi4zLDIuMS02LDIuMS04LjQsMA0KCUw2MzEsNjg4LjRjLTIuMy0yLjEtMi4zLTUuNCwwLTcuNnM2LTIuMSw4LjQsMGw5LjksOS4xdi0zNy41YzAtMy43LDIuOS02LjYsNi42LTYuNnM2LjYsMi45LDYuNiw2LjZ2MzcuNGw5LjktOS4xDQoJYzIuMy0yLjEsNi0yLjEsOC40LDBjMi4zLDIuMSwyLjMsNS40LDAsNy42TDY2MC4yLDcwNy41eiIvPg0KPC9zdmc+DQo=",
            "下載",
            function() {
                window.location.href = playerInstance.getPlaylistItem()['file'];
            },
            "download"
        );
    </script>
</body>

</html>
