let playNow = function() {
  let audio = new Audio('audio7.wav');
  audio.play();
}

setTimeout(function() {
  playNow();
}, 12000);
