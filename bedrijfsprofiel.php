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
<section class="banner-inner banner-bedrijfsprofiel">
  <div class="banner-inner-text">
    <h2 class="page-title wow fadeInUp" data-wow-delay="100ms">Bedrijfsprofiel</h2>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li class="active">Bedrijfsprofiel</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## --> 

<!-- Section start -->
<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 wow fadeInUp" data-wow-delay="100ms">
        <h3 class="font-semibold mb-2">Bedrijfsprofiel</h3>
        <p class="mb-6 mb-md-4">IrisCall is een handelsnaam van Force International CVBA.<br>
          <br>
          Voor mobiele telefonie en cloud bellen werkt IrisCall samen met United Telecom NV, dewelke 100% dochteronderneming is van Artilium PLC, een aan de Londonse AIM beurs genoteerd fonds. Artilium PLC ontwikkelt softwaretechnologiën voor mobiele operatoren en zorgt ervoor dat we kunnen profiteren van de allernieuwste software ontwikkeld op het gebied van mobiele telecommunicatie.<br>
          <br>
          IrisCall richt zich voornamelijk op de residentiële markt, alsook op de kleine en middelgrote zakelijke markt.</p>
        <h3 class="font-semibold mb-2">Contact</h3>
        <p><strong>Benaming:</strong> IrisCall<br>
          <strong>Maatschappelijke zetel:</strong> Kleinhoefstraat 5/19, 2440 Geel<br>
          <br>
          <strong>Telefoon:</strong> 023/22 22 00<br>
          <strong>Email:</strong> <a href="mailto:info@iriscall.be">info@iriscall.be</a> <br>
          <br>
          <strong>BTW / RPR Turnhout:</strong> BE 0647.631.485 </p>
      </div>
    </div>
  </div>
</section>
<!-- Section end --> 

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
