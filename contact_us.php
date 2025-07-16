<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoomieBooking - Contact Us</title>
  <!-- links -->
   <?php require('assets/links.php') ?>
</head>
<body class="bg-light">
  <!-- navbar -->
   <?php include 'components/navbar.php'; ?>

  <!-- heading -->
  <div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Have questions or need assistance? We’re here to help! <br> Whether you're looking to book a stay, inquire about partnerships, or need support, our team is just a message away.
  </p>
  </div>

  <!-- body -->
      <div class="container">
    <div class="row">
      <!-- 1 -->
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="315px" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61563.09465824583!2d80.74319060300219!3d6.957390133807435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3811dd7b7b293%3A0x167cfe20fa02d059!2sKing&#39;s%20Lodge!5e0!3m2!1sen!2slk!4v1752589848448!5m2!1sen!2slk"></iframe>
          <!-- address -->
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/1bxjrNzMjbFLgDkJA" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill me-2"></i>No.1 Waterfield Dr, Nuwara Eliya
          </a>
          <!-- call -->
          <h5 class="mt-4">Call Us</h5>
          <a href="tel: +94771234567" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill me-1"></i> +94 77 123 4567
          </a>
          <br>
          <a href="tel: +94718889997" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill me-1"></i> +94 71 888 9997
          </a>
          <!-- email -->
          <h5 class="mt-4">Email</h5>
          <a href="mailto: info@roomiebooking.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill me-1"></i> info@roomiebooking.com
          </a>
          <!-- follow -->
          <h5 class="mt-4">Follow Us On</h5>
          <div class="d-flex flex-wrap gap-2">
            <a href="#" class="text-decoration-none me-2">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter-x me-1"></i> Twitter
              </span>
            </a>
            <a href="#" class="text-decoration-none me-2">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i> Facebook
              </span>
            </a>
            <a href="#" class="text-decoration-none">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> Instagram
              </span>
            </a>
          </div>

        </div>
      </div>
      <!-- 2 -->
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a Message</h5>
              <div class="mt-4">
                <label class="form-label fw-medium">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>  
              <div class="mt-3">
                <label class="form-label fw-medium">Email</label>
                <input type="email" class="form-control shadow-none">
              </div> 
              <div class="mt-3">
                <label class="form-label fw-medium">Subject</label>
                <input type="text" class="form-control shadow-none">
              </div> 
              <div class="mt-3 msg-section">
                <label class="form-label fw-medium">Message</label>
                <textarea class="form-control shadow-none" rows="11"></textarea>
              </div> 
              <button type="submit" class="btn text-white custom-bg mt-4">SEND</button>

          </form>
        </div>
      </div>

    </div>
   </div>

  <!-- footer -->
   <?php include 'components/footer.php'; ?>
</body>
</html>