<link rel="stylesheet" href="./css/style.css">
<body style=" background: linear-gradient(to right, #ff9900 0%, #ff6666 100%);">
    
<div class="gamediv">

    <iframe id="GAME" class="game" src="https://i.simmer.io/@ThomFolst/galglexie-chineesnieuwjaar" ></iframe>
</div>
        <button style="background: linear-gradient(to right, #ff9900 0%, #ff6666 100%);" onclick="openFullscreen();" class="fullscreenbutton">&#x26F6;</button>


        <script>
var elem = document.getElementById("GAME");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
</script>

</body>
