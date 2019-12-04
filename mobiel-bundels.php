<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>IrisCall Mobiel</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/gif" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css">
</head>

<body>
<!-- ########## Header start ########## -->
<?php include("header.php"); ?>
<!-- ########## Header end ########## --> 

<!-- ########## Banner start ########## -->
<section class="banner-inner banner-bundels">
  <div class="banner-inner-text">
    <h1 class="page-title wow fadeInUp" data-wow-delay="100ms">Bundels</h1>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li class="active">Bundels</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## --> 

<!-- Bundels start -->
<section class="bg-light">
  <div class="container">
    <div class="row bundles">
      <div class="col-md-4 mb-md-3"> <a href="mobiel-bundels-databundels.php">
        <div class="content-block bg-white bundel1 wow fadeInUp" data-wow-delay="100ms">
          <h3 class="font-semibold text-blue text-center"><i><img src="imgs/icon-data.svg" alt=""></i> Data bundels</h3>
        </div>
        </a> </div>
      <div class="col-md-4 mb-md-3"> <a href="mobiel-bundels-smsbundels.php">
        <div class="content-block bg-white bundel2 wow fadeInUp" data-wow-delay="200ms">
          <h3 class="font-semibold text-blue text-center"><i><img src="imgs/icon-sms.svg" alt=""></i> Sms bundels</h3>
        </div>
        </a> </div>
      <div class="col-md-4"> <a href="mobiel-bundels-buurlanden.php">
        <div class="content-block bg-white bundel3 wow fadeInUp" data-wow-delay="300ms">
          <h3 class="font-semibold text-blue text-center"><i><img src="imgs/icon-buurlanden.svg" alt=""></i> Buurlanden</h3>
        </div>
        </a> </div>
    </div>
  </div>
</section>
<!-- Bundels end -->

</section>
<!-- ########## Footer start ########## -->
<?php include("footer.php"); ?>
<!-- ########## Footer end ########## --> 

<!-- Bootstrap JavaScript --> 
<script src="plugins/jquery/jquery.min.js"></script> 
<script src="plugins/bootstrap/bootstrap.min.js"></script> 

<!-- Animate JavaScript --> 
<script type="text/javascript" src="plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
</script> 

<!-- Dropdown Menu JavaScript --> 
<script type="text/javascript">
$(window).scroll(function(){
  $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 50);
});

function openNav() {
  document.getElementById("navbar").style.height = "100%";
}
function closeNav() {
  document.getElementById("navbar").style.height = "0%";
}

</script> 

<!-- Scroll Down/Up JavaScript --> 
<script type="text/javascript">
// Scroll down
$(function() {
  $('.arrows a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
 });
  
 //Scroll Up
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.arrow-up').fadeIn();
        } else {
            $('.arrow-up').fadeOut();
        }
    });
    $('.arrow-up').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

}); 
  
});
</script>
</body>
</html>
