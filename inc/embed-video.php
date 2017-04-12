<style>
  .embed-video {
    cursor: pointer;
  }

  .embed-video IMG {
    max-width: 100%;
    height: auto;
  }

  .embed-video:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
  }

  .embed-video .play {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    z-index: 5;
    display: inline-block;
    height: 100px;
    width: 100px;
    box-sizing: border-box;
    border: 7px solid rgba(255, 255, 255, 0.9);
    border-radius: 50%;
  }

  .embed-video .play:before {
    content: "";
    display: block;
    border-color: transparent transparent transparent rgba(255, 255, 255, 0.9);
    border-style: solid;
    border-width: 25px 0 25px 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-30%,-50%);
  }

  .embed-video:hover .play { border-color: rgba(105, 201, 202, 0.9); }
  .embed-video:hover .play:before { border-color: transparent transparent transparent rgba(105, 201, 202, 0.9); }
</style>

<?php
function EmbedVideo($url) {
  if (strpos($url, 'youtu') > 0) {
    $pattern = "/(?:[?&]v=|\/embed\/|\/1\/|\/v\/|https:\/\/(?:www\.)?youtu\.be\/)([^&\n?#]+)/";
    preg_match($pattern, $url, $matches);
    $VideoID = $matches[1];
    $TheVideo = "http://www.youtube.com/embed/" . $VideoID . "?autoplay=1&rel=0&showinfo=0";
    $TheImage = "https://img.youtube.com/vi/" . $VideoID . "/maxresdefault.jpg";
  }

  if (strpos($url, 'vimeo') > 0) {
    $pattern = "/(http|https)?:\/\/(www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|)(\d+)(?:|\/\?)/";
    preg_match($pattern, $url, $matches);
    $VideoID = $matches[4];
    $TheVideo = "https://player.vimeo.com/video/" . $VideoID . "?autoplay=1&title=0&byline=0&portrait=0";
    $json = file_get_contents("https://vimeo.com/api/oembed.json?url=https://vimeo.com/" . $VideoID);
    $obj = json_decode($json, true);
    $pieces = explode("_", $obj['thumbnail_url']);
    $TheImage = $pieces[0] . ".jpg";
  }
  ?>
  <div class="video embed-video embed-video-<?php echo $VideoID; ?>">
    <img src="<?php echo $TheImage; ?>" data-video="<?php echo $TheVideo; ?>">
    <div class="play"></div>
  </div>

  <script type="text/javascript">
    $(window).load(function(){
      $('.embed-video-<?php echo $VideoID; ?>').click(function(){
        video = '<iframe src="'+ $('.embed-video-<?php echo $VideoID; ?> IMG').attr('data-video') +'" frameborder="0" allowfullscreen></iframe>';
        $('.embed-video-<?php echo $VideoID; ?> IMG').replaceWith(video);
        $('.embed-video-<?php echo $VideoID; ?>').removeClass('embed-video');
      });
    });
  </script>
  <?php
}
?>