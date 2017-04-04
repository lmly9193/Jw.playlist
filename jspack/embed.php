<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Video Embedding System</title>
  <meta name="description" content="Video Embedding System">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAABvAAAAbwHxotxDAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAFFQTFRF////AAAAGwAALQEBPgICOAICSCEhTwMDUkVFUkZGVD4+VQMDXx0dghERkgUFmQUFmo+PnpaWogUFpQUFrgYGuQYGugYG0wcH1QcH6Ojo////VIe8EAAAAAZ0Uk5TAAhV1OLk46qZIwAAAFJJREFUGFdjYMAEjEgAyGViZkECzEwMzBIogJmBFUwLiUMFWCECwhxsoigC/IKSXLyoAlJSAjz4BdC0CHOiGYpsLdxhfOzs3CJizJhOx/AcOgAA5zwM2aaHDyMAAAAASUVORK5CYII=">
  <script src='jwplayer/jwplayer.js'></script>
  <script src='jwplayer/provider.html5.js'></script>
  <script src='jwplayer/key.js'></script>
  <link rel="stylesheet" href='jwplayer/skins/seven.css'>
  <link rel="stylesheet" href='jwplayer/skins/newtab.css'>
</head>
<body>
  <?php include_once 'curl.php'?>
  <div id="videoContainer">影片載入中...</div>
  <script><?php echo $packed;?></script>
</body>
</html>
