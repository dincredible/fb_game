<!DOCTYPE html>
<html>
<head>
<title>Protest</title>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/game.js"></script>
</head>
<body>
<div id="stage">
  <ul id="header">
    <li id="stanishev" class="img">
      <a href="javascript:void(0)" onclick="game.shoot(0);">
        <img class="politician" src="img/stanishev.png" />
      </a>
      <span class="score">Още:<br/><span  id="score0">3</span><br/>дни</span>
      <a id="theman0" href="javascript:void(0)" onclick="game.shoot(0);" class="theman" style="display:none;left:55px;">
        Аз ви..
      </a>
      <img class="fired" id="fired0" src="img/fired.png" style="display:none;"/>
    </li>
    <li id="mestan" class="img">
      <a href="javascript:void(0)" onclick="game.shoot(1);">
        <img class="politician" src="img/mestan.png" />
      </a>
      <span class="score">Още:<br/><span  id="score1">3</span><br/>дни</span>
      <a  id="theman1" href="javascript:void(0)" onclick="game.shoot(1);" class="theman" style="display:none;left:50px;">
        И аз ви..
      </a>
      <img class="fired" id="fired1" src="img/fired.png" style="display:none;"/>
    </li>
    <li id="siderov" class="img">
      <a href="javascript:void(0)" onclick="game.shoot(2);">
        <img class="politician" src="img/siderov.png" />
      </a>
      <span class="score">Още:<br/><span  id="score2">3</span><br/>дни</span>
      <a id="theman2" href="javascript:void(0)" onclick="game.shoot(2);" class="theman" style="display:none;left:70px;">
        Ще ви..
      </a>
      <img class="fired" id="fired2" src="img/fired.png" style="display:none;"/>
    </li>
  </ul>
  <div class="clear"></div>
  <div id="footer">
    <div id="weapon">
      <div id="sound_waves">
        <img src="img/sound_waves.png" style="display:none;"/>
        <span id="volume" style="display:none;">10</span>
      </div>
      <div id="whistel">
        <img src="img/whistle_100x63.png" />
        <span id="power" style="display:none;">1</span>    
      </div>
    </div>
    <div id="restart" style="display:none;">
      <a href="javascript: void(0);" onclick="game.restart()">ПРОТЕСТИРАЙ!</a>
    </div>
  </div>
</div><!-- stage -->
<audio id="player" src="sound/whistle.mp3"></audio>
</body>
</html>