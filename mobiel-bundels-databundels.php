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
<section class="banner-inner banner-databundels">
  <div class="banner-inner-text">
    <h1 class="page-title wow fadeInUp" data-wow-delay="100ms">Data Bundels</h1>
    <ul class="breadcrumb wow fadeInUp" data-wow-delay="200ms">
      <li><a href="index.php">Home</a></li>
      <li><a href="mobiel-bundels.php">Bundels</a></li>
      <li class="active">Data Bundels</li>
    </ul>
  </div>
</section>
<!-- ########## Banner end ########## -->
<section class="main-body"> 
  <!-- Block start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 mb-sm-6 wow fadeInUp" data-wow-delay="100ms">
          <div class="mb-2"><img src="imgs/img-databundels1.jpg" alt="" class="img-responsive"> </div>
          <p>Merk je dat je niet toekomt met je abonnement? <br>
            <br>
            Bijvoorbeeld op reis of tijdens drukkere periodes, gebruik je wel eens meer data dan gewoonlijk. <br>
            <br>
            Geen nood! Met de data bundels van IrisCall kan je in een vingerknip extra data bijkopen. Je kan dit maandelijks aanpassen, stopzetten of je laat je extra bundel gewoon altijd doorlopen.</p>
        </div>
        <div class="col-sm-4 mb-sm-6 wow fadeInUp" data-wow-delay="200ms">
          <div class="mb-2"><img src="imgs/img-databundels2.jpg" alt="" class="img-responsive"> </div>
          <h5 class="font-semibold text-blue mb-2">Wat zijn je mogelijkheden?</h5>
          <ul class="list">
            <li>500 MB bundel voor €5</li>
            <li>1 GB bundel voor €10</li>
            <li>2 GB bundel voor €15</li>
            <li>5 GB bundel voor €30</li>
          </ul>
        </div>
        <div class="col-sm-4 wow fadeInUp" data-wow-delay="300ms">
          <div class="mb-2"><img src="imgs/img-databundels3.jpg" alt="" class="img-responsive"> </div>
          <h5 class="font-semibold text-blue mb-2">Hoe kan je je extra databundel kopen?</h5>
          <p class="mb-2">Simpel: stuur ons een mailtje en wij gaan meteen voor je aan de slag. Je bundel wordt meteen geactiveerd, surfen maar!</p>
          <div><a href="mailto:info@iriscall.be" class="btn btn-yellow">Mail ons</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Block end --> 
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
