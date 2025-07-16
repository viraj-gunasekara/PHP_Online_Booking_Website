<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoomieBooking - About Us</title>
  <!-- links -->
   <?php require('assets/links.php') ?>
</head>
<body class="bg-light">
  <!-- navbar -->
   <?php include 'components/navbar.php'; ?>

  <!-- heading -->
  <div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Booking a hotel shouldn't be a hassle. We partner with hotels in every price range <br> to provide diverse options, and our tech ensures real-time availability and seamless booking.
  </p>
  </div>

  <!-- body -->
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-1">Andrew Ari Zolber</h3>
        <h5 class="mb-3 fw-lighter">Founder & CEO</h5>
        <p>
          Founded with the goal of making travel easy, brings the best stays to your fingertips. We partner with trusted hospitality providers to offer everything from cozy budget inns to five-star luxury resorts. 
          <br>
          Using smart filters, maps, and guest reviews, our users find exactly what they need—fast.
          <br>
          Booking a hotel should be just as exciting as the trip itself—and we make it so.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="/images/users/owner.png" class="w-100 rounded-5">
      </div>
    </div>
  </div>

  <!-- body2 -->
   <div class="container mt-5">
    <div class="row">
      <!-- about1 -->
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center about-box">
          <img src="/images/about/rooms.png" width="90px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <!-- about1 -->
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center about-box">
          <img src="/images/about/customers.png" width="90px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <!-- about1 -->
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center about-box">
          <img src="/images/about/rating.png" width="90px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <!-- about1 -->
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center about-box">
          <img src="/images/about/staff.png" width="90px">
          <h4 class="mt-3">200+ STAFF</h4>
        </div>
      </div>

    </div>
   </div>

  <!-- body3 -->
   <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
   <div class="container px-4">
      <!-- Swiper -->
      <div class="swiper about-swiper">
        <div class="swiper-wrapper mb-5">
          <!-- staff1 -->
          <div class="swiper-slide bg-white text-center overflow-hidden rounded-2">
            <img src="/images/users/staff1.png">
            <h5 class="mt-4">Zara Chen</h5>
          </div>
          <!-- staff1 -->
          <div class="swiper-slide bg-white text-center overflow-hidden rounded-2">
            <img src="/images/users/staff2.png">
            <h5 class="mt-4">Ethan Cruz</h5>
          </div>
          <!-- staff1 -->
          <div class="swiper-slide bg-white text-center overflow-hidden rounded-2">
            <img src="/images/users/staff3.png">
            <h5 class="mt-4">Nina Costa</h5>
          </div>
          <!-- staff1 -->
          <div class="swiper-slide bg-white text-center overflow-hidden rounded-2">
            <img src="/images/users/staff4.png">
            <h5 class="mt-4">Emma Reyes</h5>
          </div>
          <!-- staff1 -->
          <div class="swiper-slide bg-white text-center overflow-hidden rounded-2">
            <img src="/images/users/staff2.png">
            <h5 class="mt-4">Ethan Cruz</h5>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
   </div>

  <!-- footer -->
   <?php include 'components/footer.php'; ?>
</body>
</html>