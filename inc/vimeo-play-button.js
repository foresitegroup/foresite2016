(function() {
  var v = document.getElementsByClassName("video");
  for (var n = 0; n < v.length; n++) {
    var p = document.createElement("div");
    p.innerHTML = vimeoThumb(v[n].dataset.id);
    p.onclick = vimeoIframe;
    v[n].appendChild(p);
  }
})();
 
function vimeoThumb(id) {
  $.ajax({
    type:'GET',
    url: 'http://vimeo.com/api/v2/video/' + id + '.json',
    jsonp: 'callback',
    dataType: 'jsonp',
    success: function(data){
      var thumbnail_src = data[0].thumbnail_large;
      $("[data-id=" + id + "]").html('<img class="video-thumb" src="' + thumbnail_src + '"><div class="video-overlay"></div><i class="video-play fa fa-play-circle-o" aria-hidden="true"></i>');
    }
  });
}

function vimeoIframe() {
  var iframe = document.createElement("iframe");
  iframe.setAttribute("src", "//player.vimeo.com/video/" + this.parentNode.dataset.id + "?api=1&autoplay=1");
  iframe.setAttribute("frameborder", "0");
  this.parentNode.replaceChild(iframe, this);
}