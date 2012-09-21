define(function(){
  var mp3 = {
    player: function(){
      $(document).ready(function(){
        $("#player").jPlayer({
          ready: function () {
            $(this).jPlayer("setMedia", {
              mp3: "http://cdn-preview-a.deezer.com/stream/a4e149e52e2ffdc4f057661b40ba7ee3-1.mp3"
            });
          },
          swfPath: "/js",
          supplied: "mp3"
        });
      });
    }
  }
  return mp3;
});