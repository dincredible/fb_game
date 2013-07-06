<!DOCTYPE html>
<html>
<head>
<title>Protest</title>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="game/css/style.css" />
<script type="text/javascript" src="game/js/jquery.js"></script>
<script type="text/javascript" src="game/js/game.js"></script>
</head>
<body>
<div id="stage"> 
  <div style="margin-bottom: 20px;" class="fb-like" data-href="https://apps.facebook.com/ne_vi_iskame/" data-send="false" data-width="450" data-show-faces="false"></div>
  <?php
  date_default_timezone_set('EET');
  $start = strtotime('2013-06-13 00:00:00');
  $today = time();
  $diff = round( ($today - $start) / (60*60*24) );
  //echo 'today: ' . date('Y-m-d H:i:s',$today) . ' start: ' .date('Y-m-d H:i:s', $start) . ' diff: '. $diff . '<br/>';
  ?>
  <h2><?php echo $diff ?> ДЕНА ПРОТЕСТ</h2>  
  <ul id="header">
    <li id="stanishev" class="img">
      <a href="javascript:void(0)" onclick="game.shoot(0);">
        <img class="politician" src="game/img/stanishev.png" />
      </a>
      <span class="score">Още:<br/><span  id="score0">3</span><br/>дни</span>
      <a id="theman0" href="javascript:void(0)" onclick="game.shoot(0);" class="theman" style="display:none;left:55px;">
        Аз ви..
      </a>
      <img class="fired" id="fired0" src="game/img/fired.png" style="display:none;"/>
    </li>
    <li id="mestan" class="img">
      <a href="javascript:void(0)" onclick="game.shoot(1);">
        <img class="politician" src="game/img/mestan.png" />
      </a>
      <span class="score">Още:<br/><span  id="score1">3</span><br/>дни</span>
      <a  id="theman1" href="javascript:void(0)" onclick="game.shoot(1);" class="theman" style="display:none;left:50px;">
        И аз ви..
      </a>
      <img class="fired" id="fired1" src="game/img/fired.png" style="display:none;"/>
    </li>
    <li id="siderov" class="img">
      <a href="javascript:void(0)" onclick="game.shoot(2);">
        <img class="politician" src="game/img/siderov.png" />
      </a>
      <span class="score">Още:<br/><span  id="score2">3</span><br/>дни</span>
      <a id="theman2" href="javascript:void(0)" onclick="game.shoot(2);" class="theman" style="display:none;left:70px;">
        Ще ви..
      </a>
      <img class="fired" id="fired2" src="game/img/fired.png" style="display:none;"/>
    </li>
  </ul>
  <div class="clear"></div>
  <div id="footer">
    <div id="weapon">
      <div id="sound_waves">
        <img src="game/img/sound_waves.png" style="display:none;"/>
        <span id="volume" style="display:none;">10</span>
      </div>
      <div id="whistel">
        <img src="game/img/whistle_100x63.png" />
        <span id="power" style="display:none;">1</span>    
      </div>
    </div>
  </div>
  <div id="restart" style="display:none;">
    <div id="video">
    </div>    
    <a id="restart_link" href="javascript: void(0);" onclick="game.restart()">ХАЙДЕ ВСИЧКИ ЗАЕДНО ДА ГИ УВОЛНИМ!</a>
  </div>
  
</div><!-- stage -->
<audio id="player" src="game/sound/whistle.ogg"></audio>
</body>
</html>
