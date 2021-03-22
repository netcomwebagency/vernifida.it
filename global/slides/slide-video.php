<div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active d-none d-lg-block">
      <video id="hero-video" autoplay loop muted>
        <source type="video/webm" src="../../video/verni-fida.webm">
        <source type="video/mp4" src="../../video/verni-fida.mp4">
        Your browser does not support HTML5 video.
      </video>
      <div class="caption shadow-black wow fadeInRight">
        <?php echo ''.$page['caption'].'' ?>
      </div>
    </div>
    <div class="item active d-lg-none d-sm-block">
      <div class="item-img" style="background:url('/images/slide/slide-home-small.jpg') no-repeat right; background-size:cover;"></div>
      <div class="caption shadow-black wow fadeInRight">
        <?php echo ''.$page['caption'].'' ?>
      </div>
    </div>
  </div>
</div>
