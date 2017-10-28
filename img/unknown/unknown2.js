let playNow = function() {
  let audio = new Audio('audio4.wav');
  audio.play();
}

setTimeout(function() {
  playNow();
}, 4000);
