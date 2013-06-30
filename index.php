<!DOCTYPE html>
<html>
<head>
<title>Protest</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/game.js"></script>
</head>
<body>
<div id="stage">
  <ul id="header">
    <li id="stanishev" class="img">
      <img src="img/stanishev.png" />
      <span id="score0">1000</span>
    </li>
    <li id="mestan" class="img">
      <img src="img/mestan.png" />
      <span id="score1">1000</span>    
    </li>
    <li id="siderov" class="img">
      <img src="img/siderov.png" />
      <span id="score2">1000</span>    
    </li>
  </ul>
  <div class="clear"></div>
  <div id="footer">
    <div id="weapon">
      <div id="sound_waves">
        <img src="img/sound_waves.png" style="display:none;"/>
        <span id="volume">10</span>
      </div>
      <div id="whistel">
        <img src="img/whistle_100x63.png" />
        <span id="power">1</span>    
      </div>
    </div>
  </div>
  <div id="instructions">
    Use Left Arrow, Right Arrow and Space!
  </div>
</div>
<audio id="player" src="sound/whistle.mp3"></audio>
</body>
</html>