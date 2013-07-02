function init(){
  $('#player').bind('ended', function(){
    game.enableSound = true;
    game.stopToShoot();
  })
  game.gotoPosition(0);
  game.whoIsTheman();
  $('#player').get(0).volume = game.volume;
}

var game = function() {};
game.position = 0;
game.step = 190;
game.left = 32;
game.enableSound = true;
game.volume = 0.1;
game.power = 1;
game.politics = new Array('#stanishev .politician','#mestan .politician', '#siderov .politician');
game.monStatus = new Array(1,1,1);
game.themans = 3;
game.firstTheman = 0;
game.initScore = 3;

game.enable= function(){
  enableSound = true;
}

game.whoIsTheman = function() {
  this.firstTheman = this.getFirstTheman();
  var arr = this.getThemansAvailable();
  if(arr.length > 1) {
    var ind = Math.round(Math.round(Math.random()*10)/8);
    $('.theman').each(function(){$(this).hide()});
    $('#theman'+arr[ind]).show();
    this.position = arr[ind];
  } else {
    this.position = this.firstTheman;
    $('#theman'+this.firstTheman).show();
  }
  return this.position;
}

game.getThemansAvailable = function() {
  var arr = new Array();
  for(var i = 0; i < this.monStatus.length; i++) {
    if(i != this.position && this.monStatus[i] != 0) {
      arr.push(i);
    }
  }
  return arr;
}

game.shoot = function(pos) {  
  if( pos != this.position) return;
  if(this.enableSound && this.monStatus[pos] == 1) {
    this.position = pos;
    game.gotoPosition(pos);
    $('#theman'+this.position).hide();    
    $('#sound_waves img').show();
    this.shake($(game.politics[pos]));
    $('#player').get(0).play();
    this.enableSound = false;
    this.setPoints(pos);
  }
  this.whoIsTheman();
};
game.setPoints = function(pos){
  var s = parseInt($('#score'+pos).html()) - 1;
  if( s < 0) {
    s = 0;
  }
  if(s == 0) {
    $($('#header .politician').get(pos)).css('opacity',0.1);
    $($('.score').get(pos)).hide();
    $('#fired'+pos).show();
    this.monStatus[pos]=0;
    this.themans--;
  }
  $('#score'+pos).html(s);
}

game.getFirstTheman = function() {
  for(var i = 0 ; i < this.monStatus.length; i++) {
    if(this.monStatus[i] == 1) {
      break;
    }
  }
  return i;
}

game.stopToShoot = function() {
  $('#sound_waves img').hide();
  $('#player').stop();
};

game.gotoPosition = function(pos) {
  var left = game.left + game.step * pos;
  $('#weapon').css('left',left+'px');
}
game.moveStop = function() {};

game.shake = function(el) {
    el.each(function(i) {
        $(el).css({"position" : "relative"});
        for (var x = 1; x <= 2; x++) {
            $(el).animate({left: -25}, 10).animate({left: 0}, 50).animate({left: 25}, 10).animate({left: 0}, 50);
        }
    });
    return el;
}

$(document).ready(init);