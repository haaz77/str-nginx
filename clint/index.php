<?php
    $values = array('http://c3.str.dak32.com/hls/stream.m3u8','http://c2.str.dak32.com/hls/stream.m3u8');
    //echo $values[array_rand($values)];
    ?>
<head>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<style>
div#main {
    float: right;
    width: 100%;
    height: 100%;
}
div#Blog1 {
    height: 100%;
    width: 100%;
}
html, body {
  height: 100%;
  width: 100%;
}
body {
  margin: 0;
  padding: 0;
  border: 0;
  overflow: hidden;
}

.player-container {
  width: 100%;
  height: 100%;
}

video {
  object-fit: contain;
}

</style>
</head>
<body>
  <div id="player"></div>
  <script>
var playerElement = document.getElementById("player-wrapper");
var player = new Clappr.Player({
  autoPlay: false,
  height: '100%',
  width: '100%',
  parentId: '#player',
  sources: [
    '<?php echo $values[array_rand($values)]; ?>'
  ]
});

player.attachTo(playerElement);
</script>
</body>
