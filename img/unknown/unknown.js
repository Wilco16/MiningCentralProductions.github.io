function input() {
    var b = document.getElementById('wow')
    var value = document.getElementById('hehe').value
    if (value === '0101232523451445314') {
        b.style.display = 'block';
        let playNow = function() {
          let audio = new Audio('audio65.wav');
          audio.play();
        }

        setTimeout(function() {
          playNow();
        }, 1000);

    } else {
        window.alert("...df.");
    }
}
