<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoomieBooking</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- Swiper Js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- custom CSS -->
  <link rel="stylesheet" href="/assets/styles.css">
</head>
<body class="bg-light">
  <!-- navbar -->
   <?php include 'components/navbar.php'; ?>
  <!-- carousel - Swiper -->
   <?php include 'components/home_carousel.php'; ?>
  <!-- check booking availability form -->
   <?php include 'components/availability_form.php'; ?>
  <!-- room cards -->
   <?php include 'components/room_cards.php'; ?>
  <!-- facilities -->
   <?php include 'components/our_facilities.php'; ?>
  <!-- testimonials -->
   <?php include 'components/testimonials.php'; ?>


  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <!-- Swiper Js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- custom JS -->
  <script src="/assets/scripts.js"></script>
</body>
</html>