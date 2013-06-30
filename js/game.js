function init(){
  $(document).keydown (function(e) {
    switch(e.which){
      case 32:
        game.shoot();
        break;
      case 39:
        game.moveRight();
        break;
      case 37:
        game.moveLeft();
        break;
    }
  });
  $(document).keyup(function(e) {
    switch(e.which){
      case 32:
        game.stopToShoot();
        break;
      case 37:
      case 39:
        game.moveStop();
        break;
    }
  });
  $('#player').bind('ended', function(){
    game.enableSound = true;
  })
  game.gotoPosition(0);
  $('#player').get(0).volume = game.volume;
}

var game = function() {};
game.position = 0;
game.step = 190;
game.left = 32;
game.enableSound = true;
game.volume = 0.1;
game.power = 1;
game.politics = new Array('#stanishev img','#mestan img', '#siderov img');
game.monStatus = new Array(1,1,1);

game.enable= function(){
  enableSound = true;
}

game.shoot = function() {
  if(this.enableSound && this.monStatus[this.position] == 1) {
    $('#sound_waves img').show();
    this.shake($(game.politics[this.position]));
    $('#player').get(0).play();
    this.enableSound = false;
    this.setPoints(game.position);
  }
};
game.setPoints = function(pos){
  var s = parseInt($('#score'+pos).html()) - 1;
  if( s< 0) {
    s == 0;
  }
  if(s == 0) {
    $($('#header img').get(pos)).css('opacity',0.1);
    this.monStatus[pos]=0;
  }
  $('#score'+pos).html(s);
}
game.stopToShoot = function() {
  $('#sound_waves img').hide();
  $('#player').stop();
};
game.moveRight = function() {
  game.position++;
  if(game.position > 2) {
    game.position = 2;
  }
  game.gotoPosition(game.position);
};
game.moveLeft = function() {
  game.position--;
  if(game.position < 0) {
    game.position = 0;
  }
  game.gotoPosition(game.position);
};

game.gotoPosition = function(pos) {
  var left = game.left + game.step * pos;
  $('#weapon').css('left',left+'px');
}
game.moveStop = function() {};

game.shake = function(el) {
    el.each(function(i) {
        $(el).css({ "position" : "relative" });
        for (var x = 1; x <= 2; x++) {
            $(el).animate({ left: -25 }, 10).animate({ left: 0 }, 50).animate({ left: 25 }, 10).animate({ left: 0 }, 50);
        }
    });
    return el;
}

$(document).ready(init);