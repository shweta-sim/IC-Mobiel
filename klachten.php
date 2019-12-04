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
<section class="banner-inner banner-klachten">
  <div class="banner-inner-text">
    <h2 class="page-title wow fadeInUp" data-wow-delay="100ms">Heb je klachten?</h2>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li class="active">Heb je klachten?</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## --> 

<!-- Section start -->
<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 wow fadeInUp" data-wow-delay="100ms">
        <h3 class="font-semibold mb-2">Heb je klachten?</h3>
        <p>Klachten dienen via alle mogelijke schriftelijke middelen te worden overgemaakt en duidelijk en gemotiveerd te worden opgesteld, desgevallend met vermelding van het betwiste bedrag. De klachten dienen bovendien, om in overweging genomen te kunnen worden, binnen de maand na de factuurdatum aan IrisCall overgemaakt te worden:<br>
          <br>
          Per brief : IrisCall, Kleinhoefstraat 5/19, 2440 Geel<br>
          Via e-mail: <a href="mailto:info@iriscall.be">info@iriscall.be</a><br>
          Per telefoon : 023/22 22 00<br>
          <br>
          Wanneer je niet akkoord gaat met de beslissing over jouw klacht, kan je je wenden tot de Ombudsdienst voor Telecommunicatie. Koning Albert II Laan 8, 1000 Brussel, 02/223 09 09 of <a href="http://www.ombudsmantelecom.be/" target="_blank">www.ombudsmantelecom.be</a>. Indien jouw klacht ontvankelijk verklaard wordt door de Ombudsdienst voor Telecommunicatie, worden geen administratieve kosten aangerekend en wordt de inningsprocedure opgeschort tot een maximale periode van vier (4) maanden vanaf de indiening van de klacht bij de Ombudsdienst voor Telecommunicatie. Bij aanhoudende kwaadwillige of hinderende oproepen kan je je eveneens richten tot de Ombudsdienst voor Telecommunicatie.<br>
          <br>
          Voor Consumentengeschillen die voortvloeien uit e-commerce kan je terecht op het Europese ODR Platform via de website van de FOD Economie: <a href="https://economie.fgov.be/nl/themas/online/belmed-onlinebemiddeling/alternatieve/om-verder-te-gaan/mogelijke-alternatieve/het-europese-odr-platform" target="_blank">https://goo.gl/E4MM3N</a>. ODR is een afkorting voor Online Dispute Resolution, Engels voor online geschillenbeslechting. Het betreft een internetplatform opgericht door de Europese Commissie met als doel geschillen voortvloeiend uit e-commerce buiten de rechtbank op te lossen. Een klacht indienen kan via de website: <a href="http://ec.europa.eu/odr/" target="_blank">http://ec.europa.eu/odr/</a>. </p>
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
