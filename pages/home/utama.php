<?php
date_default_timezone_set("Asia/Jakarta");

$jam = date('H:i');

if ($jam > '05:30' && $jam < '10:00') {
    $salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
    $salam = 'Siang';
} elseif ($jam < '18:00') {
    $salam = 'Sore';
} else {
    $salam = 'Malam';
}
?>
<div class="page-hero-section bg-image hero-home-2" style="background-image: url(mode/img/bg_hero_2.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge badge-soft mb-2">Backend</div>
          <h1 class="mb-4 fw-normal" id="demo"></h1>
          <p class="mb-4">System (Superadmin & Administrator) <br></p>
          <a href="http://scdb.ipdn.ac.id/home" target="_blank" class="btn btn-primary">SCDB Tools System</a>
        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png" alt="">
          </div>          
        </div>
      </div>
    </div>
  </div>
</div>